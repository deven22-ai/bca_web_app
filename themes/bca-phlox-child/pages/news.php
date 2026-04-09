<?php
/*
Template Name: News
Author: Deven Warang
*/

get_header();
?>
<style>
    .bca-hero-section { background-image: url('/wp-content/uploads/2026/03/news.jpg'); }
</style>

<!-- HERO SECTION -->
<section class="bca-hero-section">
    <div class="bca-hero__overlay"></div>
    <div class="bca-hero container transparent-header">
        <div class="bca-hero__content">
            <div class="bca-hero__eyebrow reveal">
                <p><strong><span>BC&A NEWS</span></strong></p>
            </div>
            <div class="bca-hero__head-wrapper reveal reveal-delay-1">
                <h1 class="bca-hero__title">Insights, Updates & News <em>From BC&A</em></h1>
                <p class="bca-hero__text">
                    Stay up to date with the latest business insights, tax updates, industry developments, 
                    and firm news from BC&A Chartered Accountants.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- NEWS GRID -->
<section style="padding: 70px 0;">
    <div class="container">
        <div class="bca-heading-section">
            <div class="bca-heading-container">
                <div class="bca-heading__eyebrow reveal">BC&A News</div>
                <h2 class="bca-heading__title reveal reveal-delay-1">Latest News & Updates</span></h2>
            </div>
        </div>
        <?php echo do_shortcode('[bca_news_grid]') ?>
    </div>
</section>


<?php 
/* CTA (CONTACT US) */
echo do_shortcode('[bca_cta_contact]'); 

get_footer();
?>




