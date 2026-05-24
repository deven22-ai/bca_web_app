function hideBanner(callback) {
    const banner = document.getElementById('bca-cookie-banner');
    document.getElementById('cookie-backdrop').classList.remove('active');
    banner.classList.add('hide');
    setTimeout(() => {
        banner.style.display = 'none';
        if (callback) callback();
    }, 380);
}

function acceptAll() {
    localStorage.setItem("cookieConsent", "all");
    hideBanner(() => console.log('All cookies accepted'));
}

function openPrefs() {
    const consent = localStorage.getItem("cookieConsent");
    if (consent === "all") document.getElementById('toggle-maps').checked = true;
    else if (consent === "essential") document.getElementById('toggle-maps').checked = false;

    document.getElementById('cookie-backdrop').classList.add('active');
    document.getElementById('bca-prefs-modal').classList.add('active');
    document.body.style.overflow = 'hidden';
}

function closePrefs() {
    document.getElementById('cookie-backdrop').classList.remove('active');
    document.getElementById('bca-prefs-modal').classList.remove('active');
    document.body.style.overflow = '';
}

function savePrefs() {
    const mapsConsent = document.getElementById('toggle-maps').checked;
    if (mapsConsent) {
        localStorage.setItem("cookieConsent", "all");
        loadMap();
    }
    else localStorage.setItem("cookieConsent", "essential");

    closePrefs();
    hideBanner(() => console.log('All cookies accepted'));
}

function acceptAllFromModal() {
    document.getElementById('toggle-maps').checked = true;
    localStorage.setItem("cookieConsent", "all");
    loadMap();
    closePrefs();
    hideBanner(() => console.log('All cookies accepted'));
}

document.addEventListener("DOMContentLoaded", () => {
    const banner = document.getElementById('bca-cookie-banner');
    const consent = localStorage.getItem("cookieConsent");
    if (consent === null) {
        banner.style.display = 'block';
        document.getElementById('cookie-backdrop').classList.add('active');
    } else {
        banner.style.display = 'none';
        document.getElementById('cookie-backdrop').classList.remove('active');
    }
});