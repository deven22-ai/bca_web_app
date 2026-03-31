<?php 
get_header(); 
wp_enqueue_style('sectors-style');
?>

<main class="bca-single-sector">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <section class="bca-sector-hero">
            <div class="container">
                <span class="bca-sector-eyebrow">OUR SECTORS</span>
                <h1><?php the_title(); ?></h1>
                <p><?php the_field('hero_subtitle'); ?></p>
            </div>
        </section>

        <section class="bca-sector-intro">
            <div class="container">
                <div class="bca-sector-intro__image">
                    <?php if ( has_post_thumbnail() ) : ?>
                        <?php the_post_thumbnail('large'); ?>
                    <?php endif; ?>
                </div>

                <div class="bca-sector-intro__content">
                    <h2><?php the_field('intro_heading'); ?></h2>
                    <p><?php the_field('intro_text'); ?></p>
                </div>
            </div>
        </section>

        <section class="bca-sector-services">
            <div class="container">
                <h2><?php the_field('services_heading'); ?></h2>
                <ul>
                    <?php if ( get_field('service_1') ) : ?><li><?php the_field('service_1'); ?></li><?php endif; ?>
                    <?php if ( get_field('service_2') ) : ?><li><?php the_field('service_2'); ?></li><?php endif; ?>
                    <?php if ( get_field('service_3') ) : ?><li><?php the_field('service_3'); ?></li><?php endif; ?>
                </ul>
            </div>
        </section>

        <section class="bca-sector-why">
            <div class="container">
                <h2><?php the_field('why_choose_heading'); ?></h2>
                <p><?php the_field('why_choose_text'); ?></p>
            </div>
        </section>

        <section class="bca-sector-cta">
            <div class="container">
                <h2><?php the_field('cta_heading'); ?></h2>
                <p><?php the_field('cta_text'); ?></p>

                <?php if ( get_field('cta_button_text') && get_field('cta_button_link') ) : ?>
                    <a href="<?php echo esc_url(get_field('cta_button_link')); ?>">
                        <?php echo esc_html(get_field('cta_button_text')); ?>
                    </a>
                <?php endif; ?>
            </div>
        </section>

    <?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>