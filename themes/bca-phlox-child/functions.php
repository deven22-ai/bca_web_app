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

    wp_register_script(
        'file-upload-js',
        get_stylesheet_directory_uri() . '/pages/js/file-upload.js',
        array(),
        filemtime(get_stylesheet_directory() . '/pages/js/file-upload.js'),
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

    wp_register_style(
        'contact-style',
        get_stylesheet_directory_uri() . '/pages/css/contact.css',
        array(),
        filemtime(get_stylesheet_directory() . '/pages/css/contact.css')
    );

    wp_register_style(
        'file-upload-style',
        get_stylesheet_directory_uri() . '/pages/css/file-upload.css',
        array(),
        filemtime(get_stylesheet_directory() . '/pages/css/file-upload.css')
    );

    wp_register_style(
        'services-style',
        get_stylesheet_directory_uri() . '/pages/css/services.css',
        array('auxin-child'), // Ensure it loads after the child stylesheet (style.css)
        filemtime(get_stylesheet_directory() . '/pages/css/services.css')
    );
}

/* Remove Phlox Hooks Title area (includes breadcrumb) for the Sector archive only. */
function bca_remove_titlebar_on_sector_archive() {
    if (is_post_type_archive('sector') || is_post_type_archive('services')) {
        remove_action('auxin_after_inner_body_open', 'auxin_the_main_title_section');
    }
}


/* Remove Phlox auto sliders for rewritten service-category routes. */
function bca_remove_phlox_sliders_on_service_category_routes() {
    if (get_query_var('bca_service_category')) {
        remove_action('auxin_after_inner_body_open', 'auxin_the_archive_slider_section');
        remove_action('auxin_after_inner_body_open', 'auxin_the_header_slider_section');
    }
}
/***********************/

function bca_services_rewrite_rules() {
    add_rewrite_rule(
        'services/businesses/?$',
        'index.php?bca_service_category=businesses',
        'top'
    );
    add_rewrite_rule(
        'services/individuals/?$',
        'index.php?bca_service_category=individuals',
        'top'
    );
}

// Register the custom query var
function bca_query_vars($vars) {
    $vars[] = 'bca_service_category';
    return $vars;
}

function bca_load_service_category_template($template) {
    if (get_query_var('bca_service_category')) {
        $custom = get_stylesheet_directory() . '/page-service-category.php';
        if (file_exists($custom)) return $custom;
    }
    return $template;
}

/* Function calls */
add_filter('query_vars', 'bca_query_vars');
add_action('init', 'bca_services_rewrite_rules');
add_filter('template_include', 'bca_load_service_category_template');

add_action('wp_enqueue_scripts', 'bca_phlox_child_enqueue_assets');
add_action( 'wp', 'bca_remove_titlebar_on_sector_archive' );
add_action( 'wp', 'bca_remove_phlox_sliders_on_service_category_routes' );
?>
