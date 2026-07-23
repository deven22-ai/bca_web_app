function hideBanner(callback) {
  const banner = document.getElementById("bca-cookie-banner");
  banner.classList.add("hide");
  setTimeout(() => {
    banner.style.display = "none";
    hideBackdropIfNothingOpen();
    if (callback) callback();
  }, 380);
}

function loadGA4() {
  if (window.gaLoaded) return; // don't load twice
  window.gaLoaded = true;

  const script = document.createElement("script");
  script.async = true;
  script.src = "https://www.googletagmanager.com/gtag/js?id=G-86835WX050";
  document.head.appendChild(script);

  window.dataLayer = window.dataLayer || [];
  function gtag() {
    dataLayer.push(arguments);
  }
  gtag("js", new Date());
  gtag("config", "G-86835WX050");
}

function getConsent() {
  const raw = localStorage.getItem("cookieConsent");
  return raw ? JSON.parse(raw) : null;
}

function setConsent(prefs) {
  localStorage.setItem("cookieConsent", JSON.stringify(prefs));
}

function showBackdrop() {
  document.getElementById("cookie-pref-backdrop").classList.add("active");
}

function hideBackdropIfNothingOpen() {
  const modalOpen = document
    .getElementById("bca-prefs-modal")
    .classList.contains("active");
  const bannerOpen =
    document.getElementById("bca-cookie-banner").style.display !== "none";
  if (!modalOpen && !bannerOpen) {
    document.getElementById("cookie-pref-backdrop").classList.remove("active");
  }
}

function acceptAll() {
  setConsent({ maps: true, analytics: true });
  loadMap();
  loadGA4();
  /* localStorage.setItem("cookieConsent", "all"); */
  hideBanner(() => console.log("All cookies accepted"));
}

function openPrefs() {
  const consent = getConsent();
  document.getElementById("toggle-maps").checked = !!(consent && consent.maps);
  document.getElementById("toggle-analytics").checked = !!(
    consent && consent.analytics
  );

  // Banner disappears behind the modal instantly, no animation needed
  const banner = document.getElementById("bca-cookie-banner");
  banner.classList.remove("hide");
  banner.style.display = "none";

  document.getElementById("bca-prefs-modal").classList.add("active");
  showBackdrop();
  document.body.style.overflow = "hidden";
}

function closePrefs() {
  const banner = document.getElementById("bca-cookie-banner");
  const consent = getConsent();

  document.getElementById("bca-prefs-modal").classList.remove("active");

  if (consent === null) {
    // No decision made yet -> bring the banner back, keep the backdrop up
    banner.classList.remove("hide");
    banner.style.display = "block";
    showBackdrop();
  } else {
    // Already consented (e.g. reopened via a footer "cookie preferences" link) — just close
    hideBackdropIfNothingOpen();
  }

  document.body.style.overflow = "";
}

function closeEverything() {
  document.getElementById("bca-prefs-modal").classList.remove("active");
  document.body.style.overflow = "";
  hideBanner(); // hides banner AND drops backdrop once nothing's left open
}

function savePrefs() {
  const mapsConsent = document.getElementById("toggle-maps").checked;
  const analyticsConsent = document.getElementById("toggle-analytics").checked;

  setConsent({ maps: mapsConsent, analytics: analyticsConsent });

  if (mapsConsent) loadMap();
  if (analyticsConsent) loadGA4();

  closeEverything();
}

function acceptAllFromModal() {
  document.getElementById("toggle-maps").checked = true;
  document.getElementById("toggle-analytics").checked = true;
  setConsent({ maps: true, analytics: true });

  loadMap();
  loadGA4();

  closeEverything();
}

document.addEventListener("DOMContentLoaded", () => {
  const banner = document.getElementById("bca-cookie-banner");
  const consent = getConsent();

  if (consent === null) {
    banner.style.display = "block";
    banner.classList.remove("hide");
    showBackdrop();
  } else {
    banner.style.display = "none";
    document.getElementById("cookie-pref-backdrop").classList.remove("active");
    // returning visitor — re-apply their saved consent on every page load
    if (consent.maps) loadMap();
    if (consent.analytics) loadGA4();
  }
});
