<?php
wp_enqueue_style('sectors-style'); // Load the sectors.css
wp_enqueue_style('sector-listing-style'); // Load the sectors.css
get_header();
?>

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

<section class="bca-intro-grid-section">
    <div class="bca-intro-grid container">
        <div class="bca-intro-grid__left">
            <span class="bca-intro-grid__eyebrow">Industry Expertise</span>
            <h2 class="bca-intro-grid__title">
                Sector knowledge that goes beyond the numbers
            </h2>

            <div class="bca-intro-grid__text">
                <p>
                    We understand that every sector operates differently. Our team brings deep
                    technical knowledge and real-world commercial understanding to help you
                    navigate industry regulations, manage challenges and capitalise on opportunities.
                </p>
                <p>
                Whether you operate in construction, healthcare, real estate, IT, retail or
                hospitality, we provide tailored advice and strategic support aligned with your goals.
                </p>
            </div>
        </div>
        <div class="bca-intro-grid__right drop-shadow">
            <div class="bca-intro-card">
                <h3 class="bca-intro-card__title">Why sector expertise matters</h3>
                <ul class="bca-intro-card__list">
                    <li><i aria-hidden="true" class="aux-icon-list-icon auxicon auxicon-primitive-dot"></i><span>Advice shaped by real commercial challenges</span></li>
                    <li><i aria-hidden="true" class="aux-icon-list-icon auxicon auxicon-primitive-dot"></i><span>Sector-aware tax, compliance and planning support</span></li>
                    <li><i aria-hidden="true" class="aux-icon-list-icon auxicon auxicon-primitive-dot"></i><span>Practical guidance that reflects your market</span></li>
                    <li><i aria-hidden="true" class="aux-icon-list-icon auxicon auxicon-primitive-dot"></i><span>Stronger long-term strategic decision-making</span></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<main class="bca-sectors-archive">
    <section class="bca-heading-section">
        <div class="bca-heading-container">
            <div class="bca-heading__border"></div>
            <h2 class="bca-heading__title">
            Sectors We <span>Specialise In</span>
            </h2>
            <div class="bca-heading__description">
                <p>
                BC&amp;A works with businesses and individuals across a broad range of industries.
                </p>
            </div>
        </div>
    </section>

    <section class="bca-sectors-listing">
        <div class="container">
            <div class="sector-listing__wrapper">
                <?php echo do_shortcode('[bca_sectors]'); ?>
            </div>
        </div>
    </section>

    <section class="bca-cta-grid-section">
        <div class="bca-cta-grid container drop-shadow">
            <div class="bca-intro-grid__left">
                <span class="bca-intro-grid__eyebrow">SPEAK TO BC&A</span>
                <h2 class="bca-intro-grid__title">
                    Need Advice From A Team That Understands Your Sector?
                </h2>

                <div class="bca-intro-grid__text">
                    <p>
                    Whether you need support with compliance, tax planning, financial reporting, 
                    growth strategy or day-to-day business advice, our team is here to help.
                    </p>
                </div>
            </div>
            <div class="bca-cta-grid__right">
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
