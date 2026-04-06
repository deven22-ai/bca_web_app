<?php 

/* Loads parent theme CSS first, and then loading the child theme CSS after it */
function bca_phlox_child_enqueue_assets() {
    wp_enqueue_script(
        'main-js',
        get_stylesheet_directory_uri() . '/main.js',
        array(),
        filemtime(get_stylesheet_directory() . '/main.js'),
        true
    );

    wp_register_style(
        'home-style',
        get_stylesheet_directory_uri() . '/pages/css/home.css',
        array(),
        filemtime(get_stylesheet_directory() . '/pages/css/home.css')
    );

    wp_register_style(
        'offices-style',
        get_stylesheet_directory_uri() . '/pages/css/offices.css',
        array(),
        filemtime(get_stylesheet_directory() . '/pages/css/offices.css')
    );

    wp_register_style(
        'single-office-style',
        get_stylesheet_directory_uri() . '/pages/css/single-office.css',
        array(),
        filemtime(get_stylesheet_directory() . '/pages/css/single-office.css')
    );

    wp_register_style(
        'request-quote-style',
        get_stylesheet_directory_uri() . '/pages/css/request-quote.css',
        array(),
        filemtime(get_stylesheet_directory() . '/pages/css/request-quote.css')
    );

    wp_register_style(
        'about-us-style',
        get_stylesheet_directory_uri() . '/pages/css/about-us.css',
        array(),
        filemtime(get_stylesheet_directory() . '/pages/css/about-us.css')
    );
}

/**
 * Remove Phlox title area (includes breadcrumb) for the Sector archive only.
 */
function bca_remove_titlebar_on_sector_archive() {
    if (is_post_type_archive('sector') ) {
        remove_action('auxin_after_inner_body_open', 'auxin_the_main_title_section');
    }
}

add_action('wp_enqueue_scripts', 'bca_phlox_child_enqueue_assets');
add_action( 'wp', 'bca_remove_titlebar_on_sector_archive' );
?>
