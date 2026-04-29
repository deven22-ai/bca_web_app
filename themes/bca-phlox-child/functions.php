<?php 

require_once get_stylesheet_directory() . '/includes/services/microsoft-sharepoint.php'; // Microsoft Sharepoint API
require_once get_stylesheet_directory() . '/includes/ajax-handlers.php';  // AJAX handlers
require_once get_stylesheet_directory() . '/includes/services/mail.php'; // PHPMailer

// Shortcodes - Load the files, only once
require_once get_stylesheet_directory() . '/shortcodes/shortcode-cta.php';
require_once get_stylesheet_directory() . '/shortcodes/shortcode-news.php';
require_once get_stylesheet_directory() . '/shortcodes/shortcode-sector.php';
require_once get_stylesheet_directory() . '/shortcodes/shortcode-team.php';


/* Loads parent theme CSS first, and then loading the child theme CSS after it */
function bca_phlox_child_enqueue_assets() {
    wp_enqueue_style(
        'bca-header',
        get_stylesheet_directory_uri() . '/pages/css/header.css',
        [],
        '1.0.0'
    );
    wp_enqueue_script(
        'bca-header-js',
        get_stylesheet_directory_uri() . '/pages/js/header.js',
        [],
        '1.0.0',
        true  // true means it loads in footer, which is correct for JS
    );
    wp_enqueue_style(
        'bca-footer',
        get_stylesheet_directory_uri() . '/pages/css/footer.css',
        [],
        '1.0.0'
    );
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
    /* Adding Ajax call script */
    wp_localize_script('file-upload-js', 'bcaAjax', [
        'url'   => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('bca_file_upload_nonce')
    ]); 

    wp_register_style(
        'home-style',
        get_stylesheet_directory_uri() . '/pages/css/home.css',
        array('auxin-child'), // Ensure it loads after the child stylesheet (style.css)
        filemtime(get_stylesheet_directory() . '/pages/css/home.css')
    );
    wp_register_style(
        'offices-style',
        get_stylesheet_directory_uri() . '/pages/css/offices.css',
        array('auxin-child'),
        filemtime(get_stylesheet_directory() . '/pages/css/offices.css')
    );
    wp_register_style(
        'single-office-style',
        get_stylesheet_directory_uri() . '/pages/css/single-office.css',
        array('auxin-child'),
        filemtime(get_stylesheet_directory() . '/pages/css/single-office.css')
    );
    wp_register_style(
        'request-quote-style',
        get_stylesheet_directory_uri() . '/pages/css/request-quote.css',
        array('auxin-child'),
        filemtime(get_stylesheet_directory() . '/pages/css/request-quote.css')
    );
    wp_register_style(
        'about-us-style',
        get_stylesheet_directory_uri() . '/pages/css/about-us.css',
        array('auxin-child'),
        filemtime(get_stylesheet_directory() . '/pages/css/about-us.css')
    );
    wp_register_style(
        'community-style',
        get_stylesheet_directory_uri() . '/pages/css/community.css',
        array('auxin-child'),
        filemtime(get_stylesheet_directory() . '/pages/css/community.css')
    );
    wp_register_style(
        'contact-style',
        get_stylesheet_directory_uri() . '/pages/css/contact.css',
        array('auxin-child'),
        filemtime(get_stylesheet_directory() . '/pages/css/contact.css')
    );
    wp_register_style(
        'file-upload-style',
        get_stylesheet_directory_uri() . '/pages/css/file-upload.css',
        array('auxin-child'),
        filemtime(get_stylesheet_directory() . '/pages/css/file-upload.css')
    );
    wp_register_style(
        'services-style',
        get_stylesheet_directory_uri() . '/pages/css/services.css',
        array('auxin-child'), 
        filemtime(get_stylesheet_directory() . '/pages/css/services.css')
    );
    wp_register_style(
        'privacy-style',
        get_stylesheet_directory_uri() . '/pages/css/privacy-policy.css',
        array('auxin-child'), 
        filemtime(get_stylesheet_directory() . '/pages/css/privacy-policy.css')
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

function get_arrow_icon() {
    return '<svg viewBox="0 0 16 16">
        <path d="M3 8H10M8.5 5.5L11 8L8.5 10.5"></path>
    </svg>';
}


/* ------------------------- SHORTCODE FILES LOAD ----------------------- */

function register_shortcode_assets() {
    wp_register_style(
        'team-style',
        get_stylesheet_directory_uri() . '/shortcodes/css/team.css',
        array('auxin-child'),
        '1.0.0'
    );
    wp_register_script(
        'team-script',
        get_stylesheet_directory_uri() . '/shortcodes/js/team.js',
        array(),
        '1.0.0',
        true
    );
    wp_register_style(
        'news-style',
        get_stylesheet_directory_uri() . '/shortcodes/css/news.css',
        array('auxin-child'),
        '1.0.0'
    );

    /* Registering JS file for AJAX calls */
    wp_register_script(
        'news-ajax', 
        get_stylesheet_directory_uri() . '/shortcodes/js/news-ajax.js',
        [],
        '1.0',
        true
    );
    wp_localize_script('news-ajax', 'bcaAjax', [
        'url'   => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('bca_news_nonce')
    ]); 

    wp_register_style(
        'sector-style',
        get_stylesheet_directory_uri() . '/shortcodes/css/sector.css',
        array('auxin-child'),
        '1.0.0'
    );
    wp_register_style(
        'cta-style',
        get_stylesheet_directory_uri() . '/shortcodes/css/cta.css',
        array('auxin-child'),
        '1.0.0'
    );
}


/* ------------------------- WP ADMIN UI - Office Terms ----------------------- */
add_filter('manage_edit-office_columns', function($columns) {
    $new = [];

    $new['cb'] = $columns['cb']; // checkbox
    $new['name'] = $columns['name']; // term name
    $new['order'] = 'Order';

    return $new + $columns;
});
add_filter('manage_office_custom_column', function($content, $column_name, $term_id) {
    if ($column_name === 'order') {
        $order = get_field('order', 'term_' . $term_id);
        $content = $order !== null && $order !== '' ? $order : '—';
    }
    return $content;
}, 10, 3);
add_action('pre_get_terms', function($query) {
    if (is_admin() && $query->query_vars['taxonomy'] === 'office') {
        $query->query_vars['meta_key'] = 'order';
        $query->query_vars['orderby'] = 'meta_value_num';
        $query->query_vars['order'] = 'ASC';
    }
});


/* ---------------------------- MAIN BLOCK ------------------------------------- */
add_filter('query_vars', 'bca_query_vars');
add_filter('show_admin_bar', '__return_false'); // Disable admin bar on the front-end
add_action('init', 'bca_services_rewrite_rules');
add_filter('template_include', 'bca_load_service_category_template');

add_action('wp_enqueue_scripts', 'register_shortcode_assets');
add_action('wp_enqueue_scripts', 'bca_phlox_child_enqueue_assets');
add_action( 'wp', 'bca_remove_titlebar_on_sector_archive' );
add_action( 'wp', 'bca_remove_phlox_sliders_on_service_category_routes' );
?>
