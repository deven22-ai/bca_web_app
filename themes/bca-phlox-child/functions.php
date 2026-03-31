<?php 

/* Loads parent theme CSS first, and then loading the child theme CSS after it */
function bca_phlox_child_enqueue_styles() {
    wp_register_style(
        'sectors-style',
        get_stylesheet_directory_uri() . '/pages/css/sectors.css',
        array(),
        filemtime(get_stylesheet_directory() . '/pages/css/sectors.css')
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

add_action('wp_enqueue_scripts', 'bca_phlox_child_enqueue_styles');
add_action( 'wp', 'bca_remove_titlebar_on_sector_archive' );

?>
