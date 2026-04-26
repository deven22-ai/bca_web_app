<?php
wp_enqueue_style('sector-style'); // Load the sectors.css
get_header();
?>

<!-- HERO SECTION -->
<div class="bca-hero-section" style="background-image: url(/wp-content/uploads/2026/03/team_construction_site.png);">
    <div class="bca-hero__overlay"></div>
    <section class="bca-hero container transparent-header">
        <div class="bca-hero__content">
            <div class="bca-hero__eyebrow reveal">
                <p><strong><span>our sectors</span></strong></p>
            </div>
            <div class="bca-hero__head-wrapper">
                <h1 class="bca-hero__title reveal reveal-delay-1">
                    Industry Expertise <br/>You Can <em>Rely On</em>
                </h1>
                <p class="bca-hero__text reveal reveal-delay-2">
                    Every industry works differently. At BC&A, we combine technical accountancy, tax and 
                    advisory expertise with practical commercial understanding to support businesses and 
                    individuals across a wide range of sectors.
                </p>
            </div>
        </div>
        <div class="bca-hero__bottom reveal reveal-delay-3">
            <div class="bca-hero__bottom-inner">
                <span class="bca-hero__bottom-item">
                    <svg viewBox="0 0 16 16"><path d="M8 1l1.7 3.5 3.8.55-2.75 2.68.65 3.78L8 9.75l-3.4 1.78.65-3.78L2.5 5.05l3.8-.55z"></path></svg>
                    20+ Sectors Covered
                </span>
                <span class="bca-hero__bottom-item">
                    <svg viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><rect x="4" y="4" width="8" height="8" rx="1.5"></rect><path d="M2 6h2M2 10h2M12 6h2M12 10h2M6 2v2M10 2v2M6 12v2M10 12v2"></path></svg>
                    Agriculture to Technology
                </span>
                <span class="bca-hero__bottom-item">
                    <svg viewBox="0 0 16 16"><path d="M13 7A6 6 0 111 7a6 6 0 0112 0z"></path><path d="M8 5v2l1.5 1.5"></path></svg>
                    Sector-Specific Tax Advice
                </span>
                <span class="bca-hero__bottom-item">
                    <svg viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="8" cy="6" r="3"></circle><path d="M2.5 14c0-3 3-5 5.5-5s5.5 2 5.5 5"></path></svg>
                    Dedicated Sector Specialists
                </span>
            </div>
        </div>
    </section>
</div>

<!-- INTRO GRID -->
<section class="bca-intro-grid-section">
    <div class="bca-intro-grid container">
        <div class="bca-intro-grid__left">
            <span class="bca-section__eyebrow reveal">Industry Expertise</span>
            <h2 class="bca-section__title reveal reveal-delay-1">
                Sector knowledge that goes beyond the numbers
            </h2>

            <div class="bca-section__text reveal reveal-delay-2">
                <p>Every sector has unique tax challenges, 
                    compliance requirements and commercial pressures — our advisers understand yours.
                </p>
            </div>
        </div>
        <div class="bca-intro-grid__right bca-intro__card reveal reveal-delay-3">
            <div class="bca-intro__card-head"><h4>Why sector expertise matters</h4></div>
            <div class="bca-intro__card-body">
                <div class="bca-intro__card-item">
                    <svg viewBox="0 0 16 16"><polyline points="2,8 6,12 14,4"></polyline></svg>
                    Advice shaped by real commercial challenges in your industry
                </div>
                <div class="bca-intro__card-item">
                    <svg viewBox="0 0 16 16"><polyline points="2,8 6,12 14,4"></polyline></svg>
                    Sector-aware tax, compliance and planning support
                </div>
                <div class="bca-intro__card-item">
                    <svg viewBox="0 0 16 16"><polyline points="2,8 6,12 14,4"></polyline></svg>
                    Practical guidance that reflects your market conditions
                </div>
                <div class="bca-intro__card-item">
                    <svg viewBox="0 0 16 16"><polyline points="2,8 6,12 14,4"></polyline></svg>
                    Stronger long-term strategic decision making
                </div>
            </div>
        </div>
    </div>
</section>

<main>
    <section class="bca-sector">
        <div class="container">
            <div class="bca-heading-section reveal reveal-delay-1">
                <div class="bca-heading-container">
                    <div class="bca-heading__eyebrow">Expertise tailored to your industry</div>
                    <h2 class="bca-heading__title">Sectors We <span>Specialise In</span></span></h2>
                    <div class="bca-heading__description">
                        <p>BC&amp;A works with businesses and individuals across a broad range of industries.</p>
                    </div>
                </div>
            </div>
            <div class="bca-sectors-listing">        
                <div class="sector-listing__wrapper">
                    <?php echo do_shortcode('[bca_sectors]'); ?>
                </div>
            </div>
        </div>
    </section>

    <section class="bca-cta-grid-section">
        <div class="bca-cta-grid container drop-shadow reveal reveal-delay-1">
            <div class="bca-intro-grid__left">
                <span class="bca-section__eyebrow">SPEAK TO BC&A</span>
                <h2 class="bca-section__title">
                    Need Advice From A Team That Understands Your Sector?
                </h2>
                <div class="bca-section__text">
                    <p>
                    Whether you need support with compliance, tax planning, financial reporting, 
                    growth strategy or day-to-day business advice, our team is here to help.
                    </p>
                </div>
            </div>
            <div class="bca-cta-grid__right">
                <div class="bca-cta-grid__btns">
                    <a href="/offices" class="bca-btn-primary">Find the team <svg viewBox="0 0 16 16"><path d="M3 8H10M8.5 5.5L11 8L8.5 10.5"></path></svg></a>
                    <a href="/contact-us" class="bca-btn-outline">Contact us</a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php 
get_footer(); 
?>
