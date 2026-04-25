<?php
add_action('wp_ajax_bca_get_news', 'bca_get_news_handler');
add_action('wp_ajax_nopriv_bca_get_news', 'bca_get_news_handler'); // for logged-out users

add_action('wp_ajax_bca_file_upload', 'bca_file_upload');
add_action('wp_ajax_nopriv_bca_file_upload', 'bca_file_upload'); // for logged-out users

function bca_get_news_handler() {
    check_ajax_referer('bca_news_nonce', 'nonce'); // Check if the request is valid or not : Nonce key names must match:

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

function bca_file_upload() {
    check_ajax_referer('bca_file_upload_nonce', 'nonce');
    
    $maxFiles = 5;
    $maxSize  = 5 * 1024 * 1024; // 5MB
    $office = $_POST['office'] ?? null;
    $files  = $_FILES['files'] ?? null;
    $count =  count($files['name']);
    $allowedMimeTypes = [
        'application/pdf',
        'image/jpeg',
        'image/png',
        'image/jpg'
    ];
    
    if($office === null) wp_send_json_error('Office Location not found. Please select one of the offices from the dropdown');
    if($count > $maxFiles) wp_send_json_error('Max 5 files allowed. Please upload not more than 5 files at the same time');

    /* Do Files validation before initiating Sharepoint process */
    if (!(is_array($files) && isset($files['name']))) wp_send_json_error('No files were received.');
    for ($i = 0; $i < $count; $i++) {

        $tmpName = $files['tmp_name'][$i];
        $name    = $files['name'][$i];
        $size    = $files['size'][$i];

        if ($size > $maxSize) wp_send_json_error("Selected File '" . $name . "' exceed the maximum limit of 5MB");

        // MIME validation
      /*  $mime = mime_content_type($tmpName);
        if (!in_array($mime, $allowedMimeTypes)) wp_send_json_error("Invalid file type: $name ($mime)"); */
    }
    
    // Process Upload Finally
    initiate_sharepoint($office, $files);

    // TODO: Send Email to the respective office

    wp_send_json_success("File(s) uploaded successfully");
}

?>

