/* Send request from frontend JS */
async function ajaxLoadNews(category = "all", paged = 1, load = "category") {
  const newsContainer = document.getElementById("bca-news-results");
  const newsGrid = document.getElementById("bca-news-grid");
  newsContainer.classList.add("loading"); // Fade out

  const body = new URLSearchParams({
    action: "bca_get_news",
    nonce: bcaAjax.nonce,
    paged,
    category,
  });

  const request = await fetch(bcaAjax.url, {
    method: "POST",
    headers: { "Content-Type": "application/x-www-form-urlencoded" },
    body,
  });

  const data = await request.json();

  if (data.success) {
    newsContainer.innerHTML = data.data; // Swap content while hidden
    // Small delay then fade in
    requestAnimationFrame(() => {
      requestAnimationFrame(() => {
        newsContainer.classList.remove("loading");
        scrollReveal(); // reveal the found news articles
      });
    });

    // build the new URL
    let newUrl;
    if (category === "all") {
      newUrl =
        paged <= 1 ? "/about-us/news/" : "/about-us/news/page/" + paged + "/";
    } else {
      const newParams = new URLSearchParams({ category });
      if (paged > 1) newParams.set("paged", paged);
      newUrl = "/about-us/news/?" + newParams.toString();
    }
    history.pushState({ category, paged }, "", newUrl);

    // Showing number text
    renderNavCount();

    if (load === "pagination")
      setTimeout(() => {
        newsGrid.scrollIntoView({
          behavior: "smooth",
        });
      }, 100);
  } else {
    alert(data.data);
  }
}

function renderNavCount() {
  const newsCounter = document.getElementById("news-count");
  const newsGrid = document.getElementById("news-grid");
  if (!newsCounter) {
    console.log("News counter not found");
    return;
  }
  const total = newsGrid.dataset.max ? newsGrid.dataset.max : 0;
  const activePage = document.querySelector(".bca-page-btn.is-active");
  const curr = activePage ? parseInt(activePage.innerHTML) : 1;
  const start = (curr - 1) * 9 + 1;
  const end = Math.min(curr * 9, total);

  if (total > 9) {
    newsCounter.innerHTML = `Showing <strong>${start} - ${end}</strong> out of <strong>${total}</strong> articles`;
  } else newsCounter.innerHTML = `Showing <strong>${end}</strong> articles`;
}

function renderNav(data) {
  const ctrl = document.getElementById("bca-nav__ctrl");
  ctrl.innerHTML = "";

  if (data.max_pge > 1) {
    for (let i = 1; i <= data.max_pge; i++) {
      const btn = document.createElement("button");
      btn.classList.add("bca-page-btn");
      btn.setAttribute("aria-label", "Page " + i);
      btn.innerHTML = i;
      ctrl.appendChild(btn);
    }
  }

  ctrl.innerHTML = data.pagination;
}

document.addEventListener("click", async (e) => {
  // Category pills
  const pill = e.target.closest(".bca-news__pill");
  if (pill) {
    e.preventDefault();
    document.querySelectorAll(".bca-news__pill").forEach((item) => {
      item.classList.remove("active");
    });
    pill.classList.add("active");

    const cat = pill.dataset.cat || "all";
    await ajaxLoadNews(cat);
    return;
  }

  // Pagination links
  const pageLink = e.target.closest(".bca-page-btn");
  if (pageLink && !pageLink.classList.contains("is-active")) {
    e.preventDefault();
    const url = new URL(pageLink.href);
    // path-based: /about-us/news/page/2/
    const pathMatch = url.pathname.match(/page\/(\d+)/);
    const paged = pathMatch
      ? parseInt(pathMatch[1])
      : parseInt(url.searchParams.get("paged")) || 1;

    // category still comes from query string
    const category = url.searchParams.get("category") || "all";
    await ajaxLoadNews(category, parseInt(paged), "pagination");
  }
});

window.addEventListener("popstate", (e) => {
  const state = e.state || { category: "all", paged: 1 };
  // TODO: Dynamically select the correct news category pill
  ajaxLoadNews(state.category, state.paged);
});

document.addEventListener("DOMContentLoaded", function () {
  renderNavCount();
});
