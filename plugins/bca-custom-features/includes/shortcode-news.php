<?php

/*
 * Description: Custom shortcode to display team members
 */

if (!defined('ABSPATH')) {
    exit;
}

function bca_news_renderer($news_query) {
    ob_start(); // turns on the output buffering

    if($news_query->have_posts()) {
        echo 
        '<div class="bca-news-grid">';

        while($news_query->have_posts()) {
            $news_query->the_post(); 
            $child_category_name = '';
            $post_categories = get_the_category(get_the_ID());
            $image_url = get_the_post_thumbnail_url(get_the_ID(), 'medium');

            /* Get the new category */
            if(!empty($post_categories)) {
                foreach ($post_categories as $cat) {
                    if ($cat->parent != 0) {
                        $child_category_name = $cat->name;
                        break;
                    }
                }
            }

            ?>
            <article class="bca-news-card drop-shadow">
                <div class="bca-news-card-image-wrap">
                    <img src="<?php echo $image_url ?>" alt="">
                    <span class="bca-news-card-badge">
                        <?php echo esc_html($child_category_name); ?>
                    </span>
                </div>
                <div class="bca-news-card-body">
                    <h4 class="title"><?php echo esc_attr(get_the_title()) ?></h4>

                    <div class="footer">
                        <span class="date"><?php echo get_the_date('F j, Y') ?></span>
                        <a class="read-more" href="<?php echo esc_url(get_permalink()); ?>">Read more</a>
                    </div>
                </div>
            </article>
            <?
        }
        ?>
        </div>
        <?php
        wp_reset_postdata();
    } else {
        echo '<p>No news found.</p>';
    }

    return ob_get_clean();
}

function getNews() {
    wp_enqueue_style('bca-global-style');
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
        <div class="bca-news-filter-wrap">
            <div class="bca-news-filter-slider drop-shadow">
                <a href="#" class="bca-news-filter-item active" data-cat="all">All News</a>
                <?php 
                foreach($news_subcat as $category) {
                    ?>      
                <a href="#" class="bca-news-filter-item" data-cat="<?php echo esc_attr($category->slug) ?>">
                    <?php echo esc_attr($category->name) ?>
                </a>
                <?php
                }
            ?>
            </div>
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
    wp_enqueue_style('bca-global-style');
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
        <button type="button" onclick="window.location.href='about-us/news/'">Our Latest News</button>
    </div>
    <?php 
    return ob_get_clean();
}

add_shortcode('news_grid', 'getNews');
add_shortcode('mini_news_grid', 'getMiniGrid');
?>