<?php
add_action('wp_ajax_bca_get_news', 'bca_get_news_handler');
add_action('wp_ajax_nopriv_bca_get_news', 'bca_get_news_handler'); // for logged-out users

function bca_get_news_handler() {
     // Check if the request is valid or not : Nonce key names must match:
    check_ajax_referer('bca_news_nonce', 'nonce');

    // $_POST is a built-in PHP array (superglobal)  $_POST['cat'];
    // or INPUT_POST -> Read from HTTP POST request data.
    $category = filter_input(INPUT_POST, 'cat') ?: 'all'; 
    
    $news_slug = get_category_by_slug('news');
    $args = [
        'post_type'     => 'post',
        'post_status'   => 'publish',
        'posts_per_page' => 9,
        'cat'           => $news_slug->term_id
    ];

    if($news_slug && $category != 'all') {
        $child = get_category_by_slug($category);

        if($child && $child->parent === (int)$news_slug->term_id) {
            $args['cat'] = (int) $child->term_id;
        }
    }

    // runs the wp query
    $news_query = new WP_Query($args);
    $html       = bca_news_renderer($news_query);

    wp_send_json_success($html);
}

?>