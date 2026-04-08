<?php
/*
Template Name: Team
Author: Deven Warang
*/

get_header();
wp_enqueue_style('team-style');

// Get URL header values
$SelectedOffice = isset($_GET['office']) ? sanitize_text_field($_GET['office']) : 'all';
?>

<!-- HERO SECTION -->
<section class="bca-hero-section team">
    <div class="bca-hero__overlay"></div>
    <div class="bca-hero container transparent-header">
        <div class="bca-hero__content">
            <div class="bca-hero__eyebrow reveal">
                <p><strong><span>Our Team</span></strong></p>
            </div>
            <div class="bca-hero__head-wrapper">
                <h1 class="bca-hero__title reveal reveal-delay-1">The People Behind <em>BC&A</em></h1>
                <p class="bca-hero__text reveal reveal-delay-2">
                    Our team combines professional expertise, technical knowledge and a 
                    personal approach to deliver trusted support for businesses and individuals 
                    across Portsmouth and beyond.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- TEAM GRID -->
<section class="bca-team-shortcode" id="teamSection">
    <div class="container">
        <div class="bca-heading-section">
            <div class="bca-heading-container">
                <div class="bca-heading__eyebrow reveal">Trusted experts</div>
                <h2 class="bca-heading__title reveal reveal-delay-1">Our BC&A Team</span></h2>
                <div class="bca-heading__description reveal reveal-delay-1">
                    <p>Say hello to the professionals who make BC&A a trusted partner to 
                        businesses and individuals.</p>
                </div>
            </div>
        </div>
        <?php echo do_shortcode('[bca_team_grid]') ?>
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

<script>
    document.addEventListener('DOMContentLoaded', function () { 
        document.querySelector('.bca-team__pill[data-office="<?php echo $SelectedOffice ?>"]').click();
    });
</script>

<?php 
/* CTA (CONTACT US) SHORTCODE */
echo do_shortcode('[bca_cta_contact]'); 
get_footer();
?>




