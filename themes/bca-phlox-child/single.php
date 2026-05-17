<?php
/**
 * Template Name: Single News Detail
 * Author: Deven Warang
 */

get_header();
wp_enqueue_style('news-style');

while (have_posts()) : the_post();
    $featured_img = get_the_post_thumbnail_url(get_the_ID(), 'full');

    $categories = get_the_terms(get_the_ID(), 'category');
    if (!$categories || is_wp_error($categories)) {
        $categories = get_the_terms(get_the_ID(), 'bca_news_category');
    }
    $primary_category = $categories && !empty($categories) ? $categories[0] : null;
    error_log('Primary Category: ' . print_r($categories, true) . ($primary_category ? $primary_category->name : 'None'));
    /* Related Posts */
    $related_args = [
        'post_type'      => get_post_type(),
        'posts_per_page' => 3,
        'post__not_in'   => [get_the_ID()],
    ];

    if ($primary_category) {
        $related_args['tax_query'] = [
            [
                'taxonomy' => $primary_category->taxonomy,
                'field'    => 'term_id',
                'terms'    => $primary_category->term_id,
            ]
        ];
    }

    $related_query = new WP_Query($related_args);
?>

<!-- HERO SECTION -->
<section class="bca-hero-section bca-hero-section__news-article" style="background-image: url('<?php echo $featured_img ? esc_url($featured_img) : ''; ?>');">
    <div class="bca-hero__overlay"></div>
    <div class="bca-hero container transparent-header">
        <div class="bca-hero__content">
            <div class="bca-hero__eyebrow reveal">
               <p><strong><span><?php echo $primary_category ? esc_html($primary_category->name) : ''; ?></span></strong></p>
            </div>
            <div class="bca-hero__head-wrapper reveal reveal-delay-1">
                <h1 class="bca-hero__title"><?php the_title(); ?></h1>
                <p class="bca-hero__text"><?php echo get_the_date('d F Y'); ?></p>
            </div>
            <div class="bca-hero__btns reveal reveal-delay-4">
                <a href="#bcaArticle" class="bca-btn-primary">Read more<?php echo get_arrow_icon(); ?></a>
            </div>
        </div>
    </div>
</section>

<!-- MAIN -->
<section id="bcaArticle" class="bca-news-main">
    <div class="container">
        <div class="bca-news-layout">
            <!-- CONTENT -->
            <div class="bca-news-content">
                <article class="bca-news-article reveal reveal-delay-1">
                    <?php the_content(); ?>
                </article>
            </div>

            <!-- SIDEBAR -->
            <aside class="bca-news-sidebar">
                <!-- QUICK LINKS -->
                <div class="bca-news-side-card reveal reveal-delay-1">
                    <div class="bca-news-side-card__header">
                        <h3>Useful Links</h3>
                    </div>
                    <div class="bca-news-side-card__body">
                        <div class="bca-news-side-links">
                            <a href="<?php echo home_url('/health-check'); ?>" class="bca-news-side-link">
                                <span>Request a Free Health Check</span><svg viewBox="0 0 16 16"><path d="M3 8h10M9 4l4 4-4 4"/></svg>
                            </a>
                            <a href="<?php echo home_url('/services'); ?>" class="bca-news-side-link">
                                <span>Explore our accounting services</span>
                                <svg viewBox="0 0 16 16"><path d="M3 8h10M9 4l4 4-4 4"/></svg>
                            </a>
                            <a href="<?php echo home_url('/request-quote'); ?>" class="bca-news-side-link">
                                <span>Request a free consultation</span>
                                <svg viewBox="0 0 16 16"><path d="M3 8h10M9 4l4 4-4 4"/></svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- CONTACT CARD -->
                <div class="bca-news-side-card advice reveal reveal-delay-2">
                    <div class="bca-news-side-card__body">
                        <span class="bca-heading__eyebrow">Need Advice?</span>
                        <h3>Speak to BC&A About Your Business Goals.</h3>
                        <p class="bca-news-side-card__text">
                            Our experienced accountants provide practical, proactive advice tailored to your business and 
                            personal financial objectives.
                        </p>
                        <a href="<?php echo home_url('/contact'); ?>" class="bca-btn-primary gold">Contact Our Team <?php echo get_arrow_icon(); ?></a>
                    </div>
                </div>
            </aside>
        </div>
    </div>
</section>

<!-- RELATED POSTS -->
<?php if ($related_query->have_posts()) : ?>
<section class="bca-related-news">
    <div class="container">
        <div class="bca-heading-section reveal">
            <div class="bca-heading-container">
                <div class="bca-heading__eyebrow">Latest Insights</div>
                <h2 class="bca-heading__title">Related News & <span>Business Updates.</span></h2>
                <div class="bca-heading__description">
                    <p></p>
                </div>
            </div>
        </div>
        <?php
        /* Fetch only 3 news posts under News category */
        $news_parent = get_category_by_slug('news');
        $news_query = new WP_Query(array(
            'post_type'      => 'post',
            'post_status'    => 'publish',
            'posts_per_page' => 3,
            'orderby'        => 'date',
            'order'          => 'DESC',
            'cat'            => $news_parent->term_id
        ));
        echo bca_news_renderer($related_query);
        ?>
    </div>
</section>
<?php endif; ?>

<!-- CTA -->
<section class="bca-cta-work-with-us">
    <div class="container">
        <div class="bca-cta__inner-work-with-us">
            <div class="bca-cta__text reveal reveal-delay-1">
                <span class="bca-heading__eyebrow">Work with BC&A</span>
                <h2 class="bca-heading__title">Big Firm Expertise. Personal Service. <em>Real Results.</em></h2>
                <div class="bca-cta__body">
                    <p>
                        Whether you are an established business, startup, medical professional or individual seeking proactive financial guidance, BC&A delivers practical accounting and advisory solutions tailored to your goals.
                    </p>
                </div>
            </div>
            <div class="bca-cta__btns reveal reveal-delay-2">
                <a href="/sectors" class="bca-btn-primary">Our Sectors <?php echo get_arrow_icon(); ?></a> 
                <a href="/about-us/become-client/" class="bca-btn-outline">Work with Us</a>
            </div>
        </div>
    </div>
</section>

<?php 
endwhile;
get_footer(); 
?>