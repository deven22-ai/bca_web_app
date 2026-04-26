// ── Update mega menu top position ──
function updateMegaTop() {
    const h = header.getBoundingClientRect().bottom;
    document.querySelectorAll('.bca-mega').forEach(m => m.style.top =  '70px');
}


// ── Sticky scroll class ──
const header = document.getElementById('bca-header');
window.addEventListener('scroll', () => {
    header.classList.toggle('scrolled', window.scrollY > 20);
}, { passive: true });
if(window.scrollY > 20) header.classList.add('scrolled');

updateMegaTop();
window.addEventListener('scroll', updateMegaTop, { passive: true });
window.addEventListener('resize', updateMegaTop);

// Add blur to header when mega menu or dropdown is open
const backdrop = document.getElementById('nav-backdrop');
const megaItems = document.querySelectorAll('.bca-nav__item');
megaItems.forEach(item => {
    item.addEventListener('mouseenter', () => {
        // Only blur if this item has a mega menu or dropdown
        if (item.querySelector('.bca-mega') || item.querySelector('.bca-dropdown')) backdrop.classList.add('active');
    });
    item.addEventListener('mouseleave', () => { backdrop.classList.remove('active'); });
});
backdrop.addEventListener('click', () => { backdrop.classList.remove('active'); });

// ── Mobile menu ──
const hamburgerBtn = document.getElementById('hamburger-btn');
const mobileMenu   = document.getElementById('mobile-menu');
hamburgerBtn.addEventListener('click', () => {
    const open = mobileMenu.classList.toggle('open');
    hamburgerBtn.classList.toggle('open', open);
    header.classList.toggle('bca-mobile-menu-open', open);
    hamburgerBtn.setAttribute('aria-expanded', open);
    document.body.style.overflow = open ? 'hidden' : '';
});

// ── Mobile sub-menus ──
['mob-services', 'mob-offices', 'mob-about'].forEach(id => {
    const item = document.getElementById(id);
    if (!item) return;
    item.querySelector('.bca-mobile-nav__link').addEventListener('click', () => {
        item.classList.toggle('open');
    });
});

// ── Search overlay ──
const searchOverlay = document.getElementById('search-overlay');
const searchInput   = document.getElementById('search-input');
document.getElementById('search-btn').addEventListener('click', () => {
    searchOverlay.classList.add('active');
    setTimeout(() => searchInput.focus(), 50);
});
document.getElementById('search-close').addEventListener('click', () => {
    searchOverlay.classList.remove('active');
});
document.addEventListener('keydown', e => {
    if (e.key === 'Escape') { searchOverlay.classList.remove('active'); }
});
searchOverlay.addEventListener('click', e => {
    if (e.target === searchOverlay) searchOverlay.classList.remove('active');
});


