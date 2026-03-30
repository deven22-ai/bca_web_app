<?php

/*
 * Description: Custom shortcode to display team members
 */

if (!defined('ABSPATH')) {
    exit;
}

function file_upload_shortcode() {
    wp_enqueue_style('bca-global-style');
    wp_enqueue_style('file-upload-style');
    wp_enqueue_script('file-upload-style');
    
    ob_start();
    ?>

    <div class="bca-upload-card">
        <form class="bca-upload-form">
            <div class="bca-form-group">
                <label for="office">Select an Office</label>
                <select id="office" name="office">
                    <option value="">Choose an office</option>
                    <option>Portsmouth</option>
                    <option>Romsey</option>
                    <option>Swindon</option>
                </select>
            </div>
            <div class="bca-form-group">
                <label>Upload Documents</label>
                <div class="bca-upload-dropzone">
                    <input type="file" id="documents" name="documents" multiple="">
                    <div class="bca-upload-dropzone-content">
                        <div class="bca-upload-icon">↑</div>
                        <h4>Drag &amp; drop files here</h4>
                        <p>or click to browse your device</p>
                        <span>Accepted formats: PDF, DOC, DOCX, XLS, XLSX, JPG, PNG</span>
                    </div>
                </div>
            </div>

            <div class="bca-form-check">
                <input type="checkbox" id="consent" name="consent">
                <label for="consent">
                I confirm that the information submitted is correct and I consent to BC&amp;A securely
                processing these files for the purpose of my enquiry.
                </label>
            </div>
        
            <button type="submit" class="bca-btn-primary bca-submit-btn">Submit Files</button>
        </form>
      </div>

    <?php
    return ob_get_clean();
}

add_shortcode('file_upload', 'file_upload_shortcode');
?>