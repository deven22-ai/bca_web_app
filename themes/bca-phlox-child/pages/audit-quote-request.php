<?php
/*
Template Name: Audit Quote Request
Author: Deven Warang
*/
get_header();
wp_enqueue_style('audit-quote-style');
?>

<!-- HERO -->
<div class="bca-hero-section">
    <div class="bca-hero__overlay"></div>
    <section class="bca-hero container transparent-header">
        <div class="bca-hero__content">
            <div class="bca-hero__eyebrow reveal">
                <p><strong><span>Audit Fee Comparison</span></strong></p>
            </div>
            <div class="bca-hero__head-wrapper">
                <h1 class="bca-hero__title reveal reveal-delay-1">Guaranteed To <em>Beat Your Current Audit Fee</em></h1>
                <p class="bca-hero__text reveal reveal-delay-2">Send us a few details about your current audit arrangements and we'll provide a like-for-like fee comparison within 24 hours.</p>
            </div>
        </div>
        <div class="bca-hero__btns reveal reveal-delay-4">
            <a href="#quote-form" class="bca-btn-primary">Get My Audit Fee Comparison</a>
        </div>
    </section>
</div>


<!-- Main: form + sidebar -->
<main class="bca-main" id="quote-form">
    <div class="container">
        <div class="bca-audit-quote__inner">
            <div class="bca-rq__form">
                <?php echo do_shortcode('[contact-form-7 id="bac1922"]'); ?>
            </div>

            <!-- Sidebar -->
            <aside class="bca-audit-quote-sidebar">
                <div class="bca-checklist-grid reveal reveal-delay-1">
                    <div class="bca-checklist__head">
                        <div class="bca-checklist__head-icon">
                            <svg viewBox="0 0 24 24"><path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2"></path><rect x="9" y="3" width="6" height="4" rx="1"></rect><path d="M9 12h6M9 16h4"></path></svg>
                        </div>
                        <h4>Our Audit Services Covers</h4>
                    </div>
                    <div class="bca-checklist__body">
                        <ul class="bca-checklist__list">
                            <li><svg viewBox="0 0 16 16"><polyline points="2,8 6,12 14,4"/></svg>Guaranteed to beat your current audit fee</li>
                            <li><svg viewBox="0 0 16 16"><polyline points="2,8 6,12 14,4"/></svg>Like-for-like comparison within 24 hours</li>
                            <li><svg viewBox="0 0 16 16"><polyline points="2,8 6,12 14,4"/></svg>Experienced, partner-led audit team</li>
                            <li><svg viewBox="0 0 16 16"><polyline points="2,8 6,12 14,4"/></svg>Fixed and transparent pricing</li>
                            <li><svg viewBox="0 0 16 16"><polyline points="2,8 6,12 14,4"/></svg>Clear timescales and responsive communication</li>
                            <li><svg viewBox="0 0 16 16"><polyline points="2,8 6,12 14,4"/></svg>No obligation to switch</li>
                        </ul>
                    </div>
                </div>
                <div class="bca-sidebar-card reveal reveal-delay-1">
                    <div class="bca-sidebar-card__head"><h3>Prefer to speak to someone?</h3></div>
                    <div class="bca-sidebar-card__body">
                        <div class="bca-sidebar-item">
                            <div class="bca-sidebar-item__icon"><svg viewBox="0 0 24 24"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg></div>
                            <div>
                                <div class="bca-sidebar-item__label">Call us</div>
                                <a href="tel:+442392833300" class="bca-sidebar-item__value">02392 833 300</a>
                            </div>
                        </div>
                        <div class="bca-sidebar-item">
                            <div class="bca-sidebar-item__icon"><svg viewBox="0 0 24 24"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg></div>
                            <div>
                                <div class="bca-sidebar-item__label">Email us</div>
                                <a href="mailto:info@bcaaccountants.com" class="bca-sidebar-item__value">info@bcaaccountants.com</a>
                            </div>
                        </div>
                    </div>
                </div>
            </aside>
        </div>
    </div>
</main>

<?php get_footer(); ?>