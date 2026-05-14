<?php
/*
Template Name: Request Quote
Author: Deven Warang
*/
get_header();
wp_enqueue_style('request-quote-style');
?>

<!-- HERO SECTION -->
<div class="bca-hero-section">
    <div class="bca-hero__overlay"></div>
    <div class="bca-hero container transparent-header">
        <div class="bca-hero__content">
            <div class="bca-hero__eyebrow reveal">
                <p><strong><span>Get Started</span></strong></p>
            </div>
            <div class="bca-hero__head-wrapper reveal reveal-delay-1">
                <h1 class="bca-hero__title">Request a <em>Free Quote</em></h1>
                <p class="bca-hero__text">
                    Fill in the form and one of our team will be in touch with a tailored, no-obligation quote. Prefer to talk? We're happy to meet 
                    online or at one of our offices.
                </p>
            </div>
            <div class="bca-hero__btns reveal reveal-delay-4">
                <a href="#form" class="bca-btn-primary">Fill In the Form<?php echo get_arrow_icon(); ?></a>
            </div>
        </div>
        <div class="bca-hero__bottom reveal reveal-delay-4">
            <div class="bca-hero__bottom-inner">
                <span class="bca-hero__bottom-item">
                    <svg viewBox="0 0 16 16"><path d="M13 7.5A5.5 5.5 0 112 7.5 5.5 5.5 0 0113 7.5z"></path><path d="M15 15l-3-3"></path></svg>
                    No-obligation free quote
                </span>
                <span class="bca-hero__bottom-item">
                    <svg viewBox="0 0 16 16"><path d="M2 4h12v8a1 1 0 01-1 1H3a1 1 0 01-1-1V4z"></path><path d="M2 4l6 5 6-5"></path></svg>
                    Response within 24 hours
                </span>
                <span class="bca-hero__bottom-item">
                    <svg viewBox="0 0 16 16"><path d="M8 1l1.7 3.5 3.8.55-2.75 2.68.65 3.78L8 9.75l-3.4 1.78.65-3.78L2.5 5.05l3.8-.55z"></path></svg>
                    Regulated by ICAEW &amp; CIMA
                </span>
                <span class="bca-hero__bottom-item">
                    <svg viewBox="0 0 16 16"><path d="M8 1v6l4 2"></path><circle cx="8" cy="8" r="7"></circle></svg>
                    Tailored pricing, no hidden fees
                </span>
            </div>
        </div>
    </div>
</div>

<main class="bca-rq"  id="form">
    <div class="container">
        <div class="bca-rq__inner">
            <div class="bca-rq__form">
                <?php echo do_shortcode('[contact-form-7 id="950c246"]') ?>
            </div>
            <!-- Sidebar -->
            <aside class="rq-sidebar">
                <!-- Contact -->
                <div class="bca-sidebar-card">
                    <div class="bca-sidebar-card__head">
                        <h3>Prefer to speak to someone?</h3>
                    </div>
                    <div class="bca-sidebar-card__body">
                        <div class="bca-sidebar-item">
                            <div class="bca-sidebar-item__icon">
                                <svg viewBox="0 0 24 24"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg>
                            </div>
                            <div>
                                <div class="bca-sidebar-item__label">Call us</div>
                                <a href="tel:+442392833300" class="bca-sidebar-item__value">02392 833 300</a>
                            </div>
                        </div>
                        <div class="bca-sidebar-item">
                            <div class="bca-sidebar-item__icon">
                                <svg viewBox="0 0 24 24"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                            </div>
                            <div>
                                <div class="bca-sidebar-item__label">Email us</div>
                                <a href="mailto:info@bcaaccountants.com" class="bca-sidebar-item__value">info@bcaaccountants.com</a>
                            </div>
                        </div>
                        <div class="bca-sidebar-item">
                            <div class="bca-sidebar-item__icon">
                                <svg viewBox="0 0 24 24"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
                            </div>
                            <div>
                                <div class="bca-sidebar-item__label">Visit us</div>
                                <div class="bca-sidebar-item__value"><span>24 Landport Terrace, Southsea, Portsmouth, PO1 2RG</span></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Why BC&A -->
                <div class="bca-sidebar-card bca-sidebar-card--dark">
                    <div class="bca-sidebar-card__head">
                        <h3>Why choose BC&amp;A?</h3>
                    </div>
                    <div class="bca-sidebar-card__body">
                        <ul class="bca-why-list">
                            <li><svg viewBox="0 0 16 16"><polyline points="2,8 6,12 14,4"/></svg>Regulated by ICAEW &amp; CIMA</li>
                            <li><svg viewBox="0 0 16 16"><polyline points="2,8 6,12 14,4"/></svg>No-obligation, tailored quote</li>
                            <li><svg viewBox="0 0 16 16"><polyline points="2,8 6,12 14,4"/></svg>Dedicated adviser — not a call centre</li>
                            <li><svg viewBox="0 0 16 16"><polyline points="2,8 6,12 14,4"/></svg>Multiple offices to support your needs</li>
                            <li><svg viewBox="0 0 16 16"><polyline points="2,8 6,12 14,4"/></svg>Proactive year-round support, not just year end</li>
                        </ul>
                    </div>
                </div>
            </aside>
        </div>
    </div>
</main>

<?php 
echo do_shortcode('[bca_cta_services]');
get_footer(); 
?>