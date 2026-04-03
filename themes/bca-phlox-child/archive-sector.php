<?php
wp_enqueue_style('sector-style'); // Load the sectors.css
get_header();
?>

<!-- HERO SECTION -->
<div class="bca-hero-section" style="background-image: url(/wp-content/uploads/2026/03/team_construction_site.png);">
    <div class="bca-hero__overlay"></div>
    <section class="bca-hero transparent-header">
        <div class="bca-hero__container">
            <div class="bca-hero__content">
                <div class="bca-hero__eyebrow">
                    <p><strong><span>our sectors</span></strong></p>
                </div>
                <div class="bca-hero__head-wrapper">
                    <h1 class="bca-hero__title">
                        Industry Expertise You Can Rely On
                    </h1>
                    <p class="bca-hero__text">
                        Every industry works differently. At BC&A, we combine technical accountancy, tax and 
                        advisory expertise with practical commercial understanding to support businesses and 
                        individuals across a wide range of sectors.
                    </p>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- INTRO GRID -->
<section class="bca-intro-grid-section">
    <div class="bca-intro-grid container">
        <div class="bca-intro-grid__left reveal">
            <span class="bca-section__eyebrow">Industry Expertise</span>
            <h2 class="bca-section__title">
                Sector knowledge that goes beyond the numbers
            </h2>

            <div class="bca-section__text">
                <p>
                    We understand that every sector operates differently. Whether you operate in construction, 
                    healthcare, real estate, IT, retail or hospitality, our team provide tailored advice and 
                    strategic support aligned with your goals.
                </p>
                <p>We ensure that you are able to make informed decisions when it comes to your business and personal needs and goals.</p>
            </div>
        </div>
        <div class="bca-intro-grid__right drop-shadow reveal reveal-delay-1">
            <div class="bca-intro-card">
                <h3 class="bca-intro-card__title">Why sector expertise matters</h3>
                <ul class="bca-intro-card__list">
                    <li><i aria-hidden="true" class="aux-icon-list-icon auxicon auxicon-primitive-dot"></i><span>Advice shaped by real commercial challenges</span></li>
                    <li><i aria-hidden="true" class="aux-icon-list-icon auxicon auxicon-primitive-dot"></i><span>Sector-aware tax, compliance and planning support</span></li>
                    <li><i aria-hidden="true" class="aux-icon-list-icon auxicon auxicon-primitive-dot"></i><span>Practical guidance that reflects your market</span></li>
                    <!-- <li><i aria-hidden="true" class="aux-icon-list-icon auxicon auxicon-primitive-dot"></i><span>Stronger long-term strategic decision-making</span></li> -->
                </ul>
            </div>
        </div>
    </div>
</section>

<main>
    <section class="bca-sector">
        <div class="container">
            <div class="bca-heading-section reveal">
                <div class="bca-heading-container">
                    <div class="bca-heading__eyebrow">Expertise tailored to your industry</div>
                    <h2 class="bca-heading__title">Sectors We <span>Specialise In</span></span></h2>
                    <div class="bca-heading__description">
                        <p>BC&amp;A works with businesses and individuals across a broad range of industries.</p>
                    </div>
                </div>
            </div>
            <div class="bca-sectors-listing reveal reveal-delay-1">        
                <div class="sector-listing__wrapper">
                    <?php echo do_shortcode('[bca_sectors]'); ?>
                </div>
            </div>
        </div>
    </section>

    <section class="bca-cta-grid-section">
        <div class="bca-cta-grid container drop-shadow">
            <div class="bca-intro-grid__left reveal">
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
            <div class="bca-cta-grid__right reveal reveal-delay-1">
                <div class="btns">
                    <a href="/our-offices" class="bca-btn-primary">Find the team</a>
                    <a href="/contact-us" class="bca-btn-accent">Contact us</a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php 
get_footer(); 
?>
