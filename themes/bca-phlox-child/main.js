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

function scrollMargin() {
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            const targetId = this.getAttribute('href').slice(1);
            const target = document.getElementById(targetId);

            if (!target) return;

            e.preventDefault();

            const headerHeight = (document.querySelector('header')?.offsetHeight) || 100; // Get the header height
            const targetPosition = target.getBoundingClientRect().top + window.scrollY - headerHeight;
            console.log(targetPosition);
            window.scrollTo({
                top: targetPosition,
                behavior: 'smooth'
            });
        });
    });
}

function onLoad() {
    scrollMargin();
    
    // ── FAQ ───
    document.querySelectorAll('.bca-faq__question').forEach(btn => {
        btn.addEventListener('click', () => {
            const item = btn.closest('.bca-faq__item');
            const isOpen = item.classList.contains('open');

            // Close all
            document.querySelectorAll('.bca-faq__item').forEach(i => {
                i.classList.remove('open');
                i.querySelector('.bca-faq__question').setAttribute('aria-expanded', 'false');
            });

            // Open clicked if it was closed
            if (!isOpen) {
                item.classList.add('open');
                btn.setAttribute('aria-expanded', 'true');
            }
        });
    });
}

document.addEventListener('DOMContentLoaded', scrollReveal);
window.addEventListener('load', onLoad);
const formSubmitBtn = document.querySelector('form .bca-form-submit input[type=submit]');
if(formSubmitBtn != null) formSubmitBtn.classList.add('bca-btn-primary');