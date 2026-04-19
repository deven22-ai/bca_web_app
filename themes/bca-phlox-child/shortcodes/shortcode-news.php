<?php
if (!defined('ABSPATH')) {
    exit;
}

function bca_news_renderer($news_query) {
    ob_start(); // turns on the output buffering

    if($news_query->have_posts()) : ?>
        <div class="bca-news__grid">
        <?php
        while($news_query->have_posts()) {
            $news_query->the_post(); 
            $child_cat = '';
            $post_categories = get_the_category(get_the_ID());

            /* Get the new category */
            if(!empty($post_categories)) {
                foreach ($post_categories as $cat) {
                    if ($cat->parent != 0) {
                        $child_cat = $cat->name;
                        break;
                    }
                }
            }

            ?>
            <a href="<?php echo esc_url(get_permalink()); ?>" class="bca-news-card reveal reveal-delay-2">
                <div class="bca-news-card__img">
                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium large'); ?>" 
                        alt="<?php echo esc_attr(get_the_title()); ?>"/>
                    <span class="bca-news-card__cat bca-news-card__cat--<?php echo strtolower(str_replace(" ", "-", $child_cat)); ?>">
                        <?php echo esc_html($child_cat); ?>
                    </span>
                </div>
                <div class="bca-news-card__body">
                    <div class="bca-news-card__date">
                        <svg viewBox="0 0 24 24"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
                        <?php echo get_the_date('j F Y'); ?>
                    </div>
                    <div class="bca-news-card__title"><?php echo esc_attr(get_the_title()) ?></div>
                    <div class="bca-news-card__link">
                        Read article <svg viewBox="0 0 12 12"><path d="M2 6h8M6 2l4 4-4 4"/></svg>
                    </div>
                </div>
            </a>
            <?
        }
        ?>
        </div>
        <?php
        wp_reset_postdata();
    else : echo '<p>No news found.</p>';
    endif;

    return ob_get_clean();
}

function getNews() {
    wp_enqueue_style('news-style');
    wp_enqueue_script('news-ajax');

    /* Get all the news categories */
    $news_query = [];
    $news_subcat = [];
    $news_parent = get_category_by_slug('news');
    if($news_parent) {
        // Fetch the child categories of news
        $news_subcat = get_categories(array(
            'taxonomy'   => 'category',
            'hide_empty' => true,
            'parent'     => $news_parent->term_id,
            'orderby'    => 'date',
            'order'      => 'DESC'
        ));

        /* Fetch all posts under News and its children */
        $news_query = new WP_Query(array(
            'post_type'     => 'post',
            'post_status'   => 'publish',
            'posts_per_page' => 9,
            'cat'           => $news_parent->term_id
        ));
    }

    ob_start(); 

    if(!empty($news_subcat)) {
        ?>
        <div class="bca-news__controls reveal reveal-delay-1">
            <div class="bca-news__pills">
                <a href="#" class="bca-news__pill active" data-cat="all">All News</a>
                <?php 
                foreach($news_subcat as $category) {
                    ?>      
                <a href="#" class="bca-news__pill" data-cat="<?php echo esc_attr($category->slug) ?>">
                    <?php echo esc_attr($category->name) ?>
                </a>
                <?php
                }
            ?>
            </div>
            <div class="bca-news__count">Showing <strong id="news-count">3</strong> articles</div>
        </div>
        <?php 
    }
    ?>

    <div id="bca-news-results">
        <?php echo bca_news_renderer($news_query); ?>
    </div>
    <?php

    return ob_get_clean();
}

function getMiniGrid() {
    wp_enqueue_style('news-style');
    wp_enqueue_script('news-ajax');

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
    
    ob_start(); 
    ?>
    <div class="bca-mini-news-grid">
        <?php echo bca_news_renderer($news_query); ?>
        <!-- <a class="bca-btn-primary" href="/about-us/news/">Our Latest News</a> -->
    </div>
    <?php 
    return ob_get_clean();
}

add_shortcode('bca_news_grid', 'getNews');
add_shortcode('bca_mini_news_grid', 'getMiniGrid');
?>