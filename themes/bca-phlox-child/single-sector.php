<?php 
get_header(); 
wp_enqueue_style('sectors-style');
?>

<?php if (have_posts()) {
    while (have_posts()) {
        the_post(); ?>

        <!-- post content -->
        <div class="bca-hero-section" style="background-image: url('<?php echo get_the_post_thumbnail_url(get_the_ID(), 'large')?>');">
            <div class="bca-hero__overlay"></div>
            <section class="bca-hero transparent-header">
                <div class="bca-hero__container">
                    <div class="bca-hero__content">
                        <div class="bca-hero__eyebrow">
                            <p><strong><span><?php the_title(); ?></span></strong></p>
                        </div>
                        <div class="bca-hero__head-wrapper">
                            <h1 class="bca-hero__title"><?php echo get_field('hero_title'); ?></h1>
                            <p class="bca-hero__text"><?php echo get_field('hero_description'); ?></p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <?php
    } 
} 
?>

<main>
    
    <?php echo do_shortcode('[bca_cta_contact]'); ?>

</main>

<?php get_footer(); ?>