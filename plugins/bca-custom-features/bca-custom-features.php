<?php
/**
 * Plugin Name: BCA Custom Site Features
 * Description: Custom sections and features for BC&A.
 * Version: 1.0.0
 * Author: Deven W.
 */

if (!defined('ABSPATH')) {
    exit;
}

// Constants
define('BCA_CUSTOM_PLUGIN_PATH', plugin_dir_path(__FILE__));
define('BCA_CUSTOM_PLUGIN_URL', plugin_dir_url(__FILE__));

// Load the files, only once
require_once BCA_CUSTOM_PLUGIN_PATH . 'includes/shortcode-team.php';
require_once BCA_CUSTOM_PLUGIN_PATH . 'includes/shortcode-file-upload.php';
require_once BCA_CUSTOM_PLUGIN_PATH . 'includes/shortcode-news.php';
require_once BCA_CUSTOM_PLUGIN_PATH . 'includes/shortcode-cta.php';
require_once BCA_CUSTOM_PLUGIN_PATH . 'includes/shortcode-sector.php';
require_once BCA_CUSTOM_PLUGIN_PATH . 'includes/shortcode-section.php';
require_once BCA_CUSTOM_PLUGIN_PATH . 'includes/ajax-handlers.php';
/* require_once BCA_CUSTOM_PLUGIN_PATH . 'includes/dropbox-upload-handler.php'; */

function register_assets() {

    wp_register_style(
        'team-style',
        BCA_CUSTOM_PLUGIN_URL . 'assets/css/team.css',
        array(),
        '1.0.0'
    );

    wp_register_script(
        'team-script',
        BCA_CUSTOM_PLUGIN_URL . 'assets/js/team.js',
        array('jquery'),
        '1.0.0',
        true
    );

    // pass the $office variable
    $selectedOffice = isset($_GET['office']) ? sanitize_text_field($_GET['office']) : '';

    wp_localize_script('team-script', 'selectedOffice', array(
        'office' => $selectedOffice
    ));

    wp_register_style(
        'file-upload-style',
        BCA_CUSTOM_PLUGIN_URL . 'assets/css/file-upload.css',
        array(),
        '1.0.0'
    );

    wp_register_script(
        'file-upload-script',
        BCA_CUSTOM_PLUGIN_URL . 'assets/js/file-upload.js',
        array('jquery'),
        '1.0.0',
        true
    );

    wp_register_style(
        'news-style',
        BCA_CUSTOM_PLUGIN_URL . 'assets/css/news.css',
        array(),
        '1.0.0'
    );

    /* Registering JS file for AJAX calls */
    wp_register_script(
        'news-ajax', 
        BCA_CUSTOM_PLUGIN_URL . 'assets/js/news-ajax.js',
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
        BCA_CUSTOM_PLUGIN_URL . 'assets/css/sector.css',
        array(),
        '1.0.0'
    );

}

add_action('wp_enqueue_scripts', 'register_assets');
?>