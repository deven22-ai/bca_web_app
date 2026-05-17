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

function bca_generate_email(array $uploaded_files, string $office_name) {
    $formatted_date = date('l, j F Y \a\t g:i A', current_time('timestamp'));

    // Build files table rows
    $count = count($uploaded_files);
    $css = '';
    if($count > 1) $css = "border-bottom: 1px solid #f0f0f0";
    $file_rows = '';
    foreach ($uploaded_files as $file) {
        $file_rows .= "
            <tr>
                <td style='padding: 10px 14px; {$css}; font-size: 14px; color: #333;'>{$file['file_name']}</td>
                <td style='padding: 10px 14px; {$css}; font-size: 14px; color: #777; text-align: center;'>" 
                    . round($file['size'] / 1024, 1) . ' KB' . 
                "</td>
                <td style='display: flex;gap: 5px;padding: 10px 14px; {$css}; text-align: right;'>
                    <a href='{$file['download_url']}' style='display: inline-block; align-items: center; margin-right: 5px; background-color: #0078d4; color: #ffffff; 
                            text-decoration: none; font-size: 12px; font-weight: bold; padding: 6px 16px; border-radius: 4px;'>
                        Download
                    </a>
                    <a href='{$file['web_url']}' style='display: inline-block; background-color: #444; color: #ffffff; text-decoration: none; font-size: 12px; 
                            font-weight: bold; padding: 6px 14px; border-radius: 4px;'>
                        View
                    </a>
                </td>
            </tr>
        ";
    }

    $file_count_text = ($count == 1) ? '1 new file has' : "{$count} new files have";

    return "
        <!DOCTYPE html>
        <html>
            <head>
                <meta charset='UTF-8'>
                <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            </head>
            <body style='margin: 0; padding: 0; background-color: #f4f4f4; font-family: Arial, sans-serif;'>
                <table width='100%' cellpadding='0' cellspacing='0' style='background-color: #f4f4f4; padding: 40px 0;'>
                    <tr>
                        <td align='center'>
                            <table width='600' cellpadding='0' cellspacing='0' style='background-color: #ffffff; border-radius: 2px; overflow: hidden; 
                                box-shadow: 0 2px 8px rgba(0,0,0,0.08);'>

                                <!-- Header -->
                                <tr>
                                    <td style='background-color: #1a1a2e; padding: 28px 36px;'>
                                        <p style='margin: 0; font-size: 20px; font-weight: bold; color: #ffffff; letter-spacing: 0.5px;'>BC&A Chartered Accountants</p>
                                        <p style='margin: 4px 0 0; font-size: 13px; color: #aaaacc;'>Internal Document Notification</p>
                                    </td>
                                </tr>

                                <!-- Body -->
                                <tr>
                                    <td style='padding: 32px 36px 24px;'>
                                        <p style='margin: 0 0 8px; font-size: 16px; color: #333333;font-weight: 700;'>Hello Team,</strong></p>
                                        <p style='margin: 0; font-size: 15px; color: #555555; line-height: 1.6;'>
                                            {$file_count_text} been uploaded to your SharePoint folder via the BC&A website. The download link will be only accessible for an hour.
                                        </p>
                                    </td>
                                </tr>

                                <!-- Meta Info -->
                                <tr>
                                    <td style='padding: 0 36px 24px;'>
                                        <table width='100%' cellpadding='0' cellspacing='0' style='background-color: #f8f9fc; border-radius: 6px; padding: 16px;'>
                                            <tr>
                                                <td style='font-size: 13px; color: #888; padding: 4px 0;'>Office</td>
                                                <td style='font-size: 13px; color: #333; font-weight: bold; text-align: right;'>{$office_name}</td>
                                            </tr>
                                            <tr>
                                                <td style='font-size: 13px; color: #888; padding: 4px 0;'>Uploaded At</td>
                                                <td style='font-size: 13px; color: #333; font-weight: bold; text-align: right;'>{$formatted_date}</td>
                                            </tr>
                                            <tr>
                                                <td style='font-size: 13px; color: #888; padding: 4px 0;'>Total Files</td>
                                                <td style='font-size: 13px; color: #333; font-weight: bold; text-align: right;'>{$count}</td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>

                                <!-- Files Table -->
                                <tr>
                                    <td style='padding: 0 36px 28px;'>
                                        <p style='margin: 0 0 12px; font-size: 14px; font-weight: bold; color: #333;'>Uploaded File(s)</p>
                                        <table width='100%' cellpadding='0' cellspacing='0' style='border: 1px solid #eeeeee; border-radius: 6px; overflow: hidden;'>
                                            <tr style='background-color: #f0f0f0;'>
                                                <th style='padding: 10px 14px; font-size: 12px; color: #666; text-align: left; font-weight: 600; text-transform: uppercase; letter-spacing: 0.5px;'>File Name</th>
                                                <th style='padding: 10px 14px; font-size: 12px; color: #666; text-align: center; font-weight: 600; text-transform: uppercase; letter-spacing: 0.5px;'>Size</th>
                                                <th style='padding: 10px 14px; font-size: 12px; color: #666; text-align: right; font-weight: 600; text-transform: uppercase; letter-spacing: 0.5px;'>Action</th>
                                            </tr>
                                            {$file_rows}
                                        </table>
                                    </td>
                                </tr>

                                <!-- SharePoint Button
                                <tr>
                                    <td style='padding: 0 36px 36px;' align='center'>
                                        <a href='https://bcacharteredaccountants138.sharepoint.com/sites/bcafileupload/Shared%20Documents/BCA%20File%20Uploads/{$office_name}/' 
                                        style='display: inline-block; background-color: #0078d4; color: #ffffff; text-decoration: none; font-size: 14px; font-weight: bold; padding: 14px 32px; border-radius: 6px; letter-spacing: 0.3px;'>
                                            View in SharePoint  →
                                        </a>
                                    </td>
                                </tr> -->

                                <!-- Footer -->
                                <tr>
                                    <td style='background-color: #f8f9fc; padding: 18px 36px; border-top: 1px solid #eeeeee;'>
                                        <p style='margin: 0; font-size: 12px; color: #aaaaaa; text-align: center;'>
                                            This is an automated notification from the BC&A website. Please do not reply to this email.
                                        </p>
                                    </td>
                                </tr>

                            </table>
                        </td>
                    </tr>
                </table>
            </body>
        </html>";
}

function bca_file_upload() {
    check_ajax_referer('bca_file_upload_nonce', 'nonce');
    
    $maxFiles   = 10;
    $maxSize    = 10 * 1024 * 1024; // 10MB
    $office     = $_POST['office'] ?? null;
    $files      = $_FILES['files'] ?? null;
    $count      = count($files['name']);
    
    /* Folder Location Sharepoint */
    $officeLocs = [
        'portsmouth' => 'BCA Portsmouth',
        'romsey'     => 'BCA Romsey',
        'swindon'    => 'BCA Swindon',
        'kumar'      => 'Kumar Associates'
    ];
    $officeEmail = [
        'portsmouth' => 'info@bcaaccountants.com',
        'romsey'     => 'romsey@bcaaccountants.com',
        'swindon'    => 'swindon@bcaaccountants.com',
        'kumar'      => 'info@kumarassociates.co.uk'
    ];
    $allowed_extensions = ['pdf', 'doc', 'docx', 'jpg', 'jpeg', 'png', 'xlsx', 'xls', 'csv'];
    $allowed_mimes = [
        'application/pdf',
        'application/msword',
        'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
        'image/jpeg',
        'image/png',
        'application/vnd.ms-excel',
        'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'
    ];
    
    if($office === null || !array_key_exists($office, $officeLocs)) wp_send_json_error('Office Location not found. Please select one of the offices from the dropdown');
    if($count > $maxFiles) wp_send_json_error('Max ' . $maxFiles . ' files allowed. Please upload not more than ' . $maxFiles . ' files at the same time');

    /* Do Files validation before initiating Sharepoint process */
    if (!(is_array($files) && isset($files['name']))) wp_send_json_error('No files were received.');
    for ($i = 0; $i < $count; $i++) {
        $tmpName  = $files['tmp_name'][$i]; 
        $name     = $files['name'][$i];
        $size     = $files['size'][$i];

        // 1. Check File extension
        $extension = strtolower(pathinfo($name, PATHINFO_EXTENSION));
        if (!in_array($extension, $allowed_extensions)) {
            wp_send_json_error("Selected File '" . $name . "' has an invalid type.");
            exit;
        }

        // 2. Check REAL MIME type 
        if (function_exists('mime_content_type')) {
            $real_mime = mime_content_type($tmpName); 
            if (!in_array($real_mime, $allowed_mimes)) {
                wp_send_json_error("Selected File '" . $name . "' has an invalid file type.");
                exit;
            }
        }

        // 3. Check file size
        if ($size > $maxSize) {
            wp_send_json_error("Selected File '" . $name . "' exceeds the maximum file size limit of 10MB");
            exit;
        }

        // MIME validation
      /*  $mime = mime_content_type($tmpName);
        if (!in_array($mime, $allowedMimeTypes)) wp_send_json_error("Invalid file type: $name ($mime)"); */
    }
    
    /* Process Upload Finally */
    $response = initiate_sharepoint($officeLocs[$office], $files);
    
    if (is_wp_error($response)) wp_send_json_error([ 'message' => $response->get_error_message() ]);

    /* Send Email to the respective office */
    $subject = "New " . (count($response) > 1 ? "Documents" : "Document") . " Uploaded";
    $message = bca_generate_email($response, $officeLocs[$office]);

    $headers = ['Content-Type: text/html; charset=UTF-8'];
    $sent = wp_mail($officeEmail[$office], $subject, $message, $headers);

    if(!$sent) error_log('Failed to the send email');        

    wp_send_json_success("File(s) uploaded successfully");
}

?>

