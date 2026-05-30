<?php
if (!defined('ABSPATH')) {
    exit;
}

function bca_news_renderer(WP_Query $news_query) {
    ob_start(); // turns on the output buffering

    $counter = 0;

    if($news_query->have_posts()) : ?>
        <div id="news-grid" class="bca-news__grid" data-max="<?php echo $news_query->found_posts ?>">
        <?php
        while($news_query->have_posts()) {
            $counter += 1;
            $news_query->the_post(); 
            $child_cat = ''; $child_slug = '';
            $post_categories = get_the_category(get_the_ID());
            /* Get the new category */
            if(!empty($post_categories)) {
                $child_cat = $post_categories[0]->name;
                $child_slug = $post_categories[0]->slug;
            }

            ?>
            <a href="<?php echo esc_url(get_permalink()); ?>" class="bca-news-card reveal reveal-delay-2">
                <div class="bca-news-card__img">
                    <img src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'medium_large')); ?>" 
                        alt="<?php echo esc_html(get_the_title()); ?>"/>
                    <span class="bca-news-card__cat bca-news-card__cat--<?php echo strtolower(str_replace(" ", "-", $child_slug)); ?>">
                        <?php echo esc_html($child_cat); ?>
                    </span>
                </div>
                <div class="bca-news-card__body">
                    <div class="bca-news-card__date">
                        <svg viewBox="0 0 24 24"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
                        <?php echo get_the_date('j F Y'); ?>
                    </div>
                    <div class="bca-news-card__title"><?php echo esc_html(get_the_title()) ?></div>
                    <div class="bca-news-card__link">
                        Read article <svg viewBox="0 0 12 12"><path d="M2 6h8M6 2l4 4-4 4"/></svg>
                    </div>
                </div>
            </a>
            <?php
        }
        ?>
        </div>
        <?php
        wp_reset_postdata();
    else : echo '<p>No news found.</p>';
    endif;

    return ob_get_clean();
}

function get_all_News(string $category = 'all', int $page = 1, bool $category_menu = false) {
    /* Fetch all posts under the category */
    $args = [
        'post_type'      => 'post',
        'post_status'    => 'publish',
        'posts_per_page' => 9,
        'paged'          => $page
    ];
    if($category != 'all') {
        $child = get_category_by_slug($category);
        if($child) $args['cat'] = (int) $child->term_id;
    }
    $news_query = new WP_Query($args); // run the query
    $total_post = $news_query->found_posts;

    ob_start();
    if($category_menu) {
        /* Get all the news categories */
        $categories = get_terms([
            'taxonomy'   => 'category',
            'hide_empty' => false,
            'meta_key'   => 'order',
            'orderby'    => 'meta_value_num',
            'order'      => 'ASC',
        ]);

        if(!empty($categories)) : ?>
        <div class="bca-news__controls reveal reveal-delay-1">
            <div class="bca-news__pills">
                <a href="#" class="bca-news__pill <?php echo $category === 'all' ? 'active' : '' ?>" data-cat="all">All News</a>
                <?php foreach($categories as $cat) : ?>      
                <a href="#" class="bca-news__pill <?php echo $category === $cat->slug ? 'active' : '' ?>" data-cat="<?php echo esc_attr($cat->slug) ?>">
                    <?php echo esc_attr($cat->name) ?>
                </a>
                <?php endforeach; ?>
            </div>
            <div id="news-count" class="bca-news__count"></div>
        </div>
        <?php 
        endif;
    }
    ?>

    <div id="bca-news-results">
        <?php 
        echo bca_news_renderer($news_query);

        /* News Pagination */
        if ($news_query->max_num_pages > 1) :
            $params = [];
            if ($category !== 'all') $params['category'] = $category;
            /* $base_url = home_url('/about-us/news/') . ($params ? '?' . http_build_query($params) . '&' : '?');*/ ?>

            <div id="bca-nav"class="bca-navigation reveal reveal-delay-1">
                <nav aria-label="Pagination">
                    <div id="bca-nav__ctrl" class="bca-pagination__controls">
                        <?php 
                        $links = paginate_links([
                            'base'      => home_url('/about-us/news/') . '%_%',
                            /* 'format'    => '?' . http_build_query($params) . ($params ? '&' : '') . 'paged=%#%',  */
                            'format'    => $category === 'all' ? 'page/%#%/' : '?' . http_build_query($params) . '&paged=%#%',
                            'total'     => $news_query->max_num_pages,
                            'current'   => $page,
                            'type'      => 'array',
                            'prev_text' => '&larr;',
                            'next_text' => '&rarr;',
                        ]); 
                        foreach ($links as $link) {
                            $link = str_replace('page-numbers current', 'bca-page-btn is-active', $link);
                            $link = str_replace('page-numbers',         'bca-page-btn',           $link);
                            $link = str_replace('prev ',                'bca-page-btn bca-page-btn--arrow ', $link);
                            $link = str_replace('next ',                'bca-page-btn bca-page-btn--arrow ', $link);
                            echo $link;
                        }
                        ?>
                    </div>
                </nav>
            </div>
        <?php 
        endif; ?>
    </div>
    <?php
   /* return ([
        'html'       => ob_get_clean(),
        'total_post' => $news_query->found_posts
    ]);*/
    return ob_get_clean();
}

function get_all_news_shortcode(array $atts) {
    wp_enqueue_style('news-style');
    wp_enqueue_script('news-ajax');

    $atts = shortcode_atts([
        'category' => 'all',
        'paged'    => 1,
    ], $atts);

    return get_all_News($atts['category'], $atts['paged'], true);
}

function get_mini_grid_shortcode() {
    wp_enqueue_style('news-style');
    wp_enqueue_script('news-ajax');

    /* Fetch only 3 news posts under News category */
    $news_query = new WP_Query(array(
        'post_type'      => 'post',
        'post_status'    => 'publish',
        'posts_per_page' => 3,
        'orderby'        => 'date',
        'order'          => 'DESC',
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

function get_related_news_shortcode() {
    
}

add_shortcode('bca_news_grid', 'get_all_news_shortcode');
add_shortcode('bca_mini_news_grid', 'get_mini_grid_shortcode');
add_shortcode('bca_related_news', 'get_related_news_shortcode');
?>