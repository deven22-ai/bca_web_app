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
        filemtime(get_stylesheet_directory() . '/pages/css/header.css')
    );
    wp_enqueue_script(
        'bca-header-js',
        get_stylesheet_directory_uri() . '/pages/js/header.js',
        [],
        filemtime(get_stylesheet_directory() . '/pages/js/header.js'),
        true  // true means it loads in footer, which is correct for JS
    );
    wp_enqueue_style(
        'bca-footer',
        get_stylesheet_directory_uri() . '/pages/css/footer.css',
        [],
        filemtime(get_stylesheet_directory() . '/shortcodes/css/news.css')
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
    wp_register_style(
        'become-client-style',
        get_stylesheet_directory_uri() . '/pages/css/become-client.css',
        array('auxin-child'), 
        filemtime(get_stylesheet_directory() . '/pages/css/become-client.css')
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
        filemtime(get_stylesheet_directory() . '/shortcodes/css/team.css')
    );
    wp_register_script(
        'team-script',
        get_stylesheet_directory_uri() . '/shortcodes/js/team.js',
        array(),
        filemtime(get_stylesheet_directory() . '/shortcodes/js/team.js'),
        true
    );
    wp_register_style(
        'news-style',
        get_stylesheet_directory_uri() . '/shortcodes/css/news.css',
        array('auxin-child'),
        filemtime(get_stylesheet_directory() . '/shortcodes/css/news.css')
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
        filemtime(get_stylesheet_directory() . '/shortcodes/css/sector.css')
    );
    wp_register_style(
        'cta-style',
        get_stylesheet_directory_uri() . '/shortcodes/css/cta.css',
        array('auxin-child'),
        filemtime(get_stylesheet_directory() . '/shortcodes/css/cta.css')
    );
}


/* ------------------------- WP ADMIN UI - Office Terms ----------------------- */
add_filter('use_block_editor_for_post', '__return_false', 10); // Disable Gutenberg for posts

add_action('admin_head', function() {
    echo '<style>.column-menu_order { width: 100px;text-align:center; }</style>';
});

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

// Add meta box Team CPT (edit each team member) for office-wise ordering in the team page
add_action('add_meta_boxes', function() {
    add_meta_box('office_order', 'Office Order', 'render_office_order_metabox', 'team', 'side');
});

function render_office_order_metabox($post) {
    $offices = get_terms(['taxonomy' => 'office', 'hide_empty' => false]);
    foreach ($offices as $office) {
        $office_val = get_post_meta($post->ID, '_order_office_' . $office->slug, true);
        $ourteam_val = get_post_meta($post->ID, '_order_ourteam_' . $office->slug, true);
        
        echo '<p><strong>' . $office->name . '</strong></p>';
        echo '<div style="gap: 5px;display: flex;flex-flow: column;">' .
                '<div style="display:flex;flex-direction:row;">' . 
                    '<label style="flex:1;place-content:center;">Office Page</label>' . 
                    '<input type="number" name="order_office_' . $office->slug . '" value="' . esc_attr($office_val) . '">' . 
                '</div>' .
                '<div style="display:flex;flex-direction:row;">' . 
                    '<label style="flex:1;place-content:center;">Team Page</label>' . 
                    '<input type="number" name="order_ourteam_' . $office->slug . '" value="' . esc_attr($ourteam_val) . '">' . 
                '</div>' . 
            '</div>';
    }
}

add_action('save_post_team', function($post_id) {
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
    
    $offices = get_terms(['taxonomy' => 'office', 'hide_empty' => false]);
    foreach ($offices as $office) {
        $key = 'order_office_' . $office->slug;
        $key2 = 'order_ourteam_' . $office->slug;
        if (isset($_POST[$key])) { 
            update_post_meta($post_id, '_order_office_' . $office->slug, intval($_POST[$key]));
            update_post_meta($post_id, '_order_ourteam_' . $office->slug, intval($_POST[$key2]));
        }
    }
});

add_action('pre_get_posts', function($query) {
    if (!is_admin() && $query->is_main_query() && is_page('/about-us/our-team/')) {
        $query->set('post_type', 'team');
        $query->set('orderby', 'menu_order');
        $query->set('order', 'ASC');
        $query->set('posts_per_page', -1);
    }
});

// Add the column - menu_order in Team CPT listing, and make it sortable
add_filter('manage_team_posts_columns', function($columns) {
    $cb = array_slice($columns, 0, 1);     
    $rest = array_slice($columns, 1);    
    return array_merge($cb, ['menu_order' => 'Order'], $rest);
});
add_action('manage_team_posts_custom_column', function($column, $post_id) { // Populate the column
    if ($column === 'menu_order') {
        echo get_post_field('menu_order', $post_id);
    }
}, 10, 2);
add_filter('manage_edit-team_sortable_columns', function($columns) { // Make it sortable
    $columns['menu_order'] = 'menu_order';
    return $columns;
});

/* -- DON'T RUN THIS UNLESS YOU KNOW WHAT YOU ARE DOING --
add_action('init', function() {
    $teams = get_posts([
        'post_type' => 'team',
        'posts_per_page' => -1,
        'orderby' => 'menu_order',
        'order' => 'ASC'
    ]);

    $i = 10;
    foreach ($teams as $post) {
        wp_update_post(['ID' => $post->ID, 'menu_order' => $i]);
        $i += 10;
    }

    error_log('DONE - menu_order set for all team members');
});
*/

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
