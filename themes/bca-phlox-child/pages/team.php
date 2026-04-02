<?php
/*
Template Name: Team
Author: Deven Warang
*/

get_header();
wp_enqueue_style('team-style');
?>

<!-- HERO SECTION -->
<section class="bca-hero-section team">
    <div class="bca-hero__overlay"></div>
    <div class="bca-hero transparent-header">
        <div class="bca-hero__container">
            <div class="bca-hero__content">
                <div class="bca-hero__eyebrow">
                    <p><strong><span>Our Team</span></strong></p>
                </div>
                <div class="bca-hero__head-wrapper">
                    <h1 class="bca-hero__title">The People Behind BC&A</h1>
                    <p class="bca-hero__text">
                        Our team combines professional expertise, technical knowledge and a 
                        personal approach to deliver trusted support for businesses and individuals 
                        across Portsmouth and beyond.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- TEAM GRID -->
<section class="bca-team-shortcode">
    <div class="container">
        <div class="bca-heading-section reveal">
            <div class="bca-heading-container">
                <div class="bca-heading__eyebrow">Trusted experts</div>
                <h2 class="bca-heading__title">Our BC&A Team</span></h2>
                <div class="bca-heading__description">
                    <p>Say hello to the professionals who make BC&A a trusted partner to 
                        businesses and individuals.</p>
                </div>
            </div>
        </div>
        <div class="reveal reveal-delay-1"><?php echo do_shortcode('[bca_team_grid]') ?></div>
    </div>
</section>

<!-- NEWS GRID -->
<section class="bca-news-shortcode">
    <div class="container">
        <div class="bca-heading-section left-align reveal">
            <div class="bca-heading-container left-align">
                <div class="bca-heading__eyebrow">Stay Informed</div>
                <h2 class="bca-heading__title">See Our <span>Latest News</span></h2>
            </div>
            <a href="/about-us/news/" class="bca-heading__link">Read more<svg viewBox="0 0 16 16"><path d="M3 8h10M9 4l4 4-4 4"></path></svg></a>
        </div>
        <div class="reveal reveal-delay-1"><?php echo do_shortcode('[bca_mini_news_grid]') ?></div>
    </div>
</section>

<?php 

/* CTA (CONTACT US) */
echo do_shortcode('[bca_cta_contact]'); 

get_footer();
?>




