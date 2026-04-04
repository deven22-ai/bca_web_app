/*
File: main.js 
Purpose: Main js for BCA-Phlox-child Theme
Author: Deven Warang
*/

/* Scroll reveal */
function scrollReveal() {
    const els = document.querySelectorAll('.reveal');
    const io = new IntersectionObserver(entries => {
        entries.forEach(e => {
            if (e.isIntersecting) {
                e.target.classList.add('visible');
                io.unobserve(e.target);
            }
        });
    }, { threshold: 0.1 });
    els.forEach(el => io.observe(el));
}

document.addEventListener('DOMContentLoaded', function () {
    scrollReveal();
});