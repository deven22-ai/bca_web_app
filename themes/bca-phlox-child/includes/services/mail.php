<?php 

use PHPMailer\PHPMailer\PHPMailer;

function php_mailer(PHPMailer $phpmailer) {    
    $phpmailer->isSMTP();


    $phpmailer->Host       = 'smtp.office365.com';
    $phpmailer->SMTPAuth   = true;
    $phpmailer->Port       = 587;
    $phpmailer->SMTPAutoTLS = false;
    $phpmailer->SMTPSecure  = 'tls';
    $phpmailer->Username   = SMTP_USER;
    $phpmailer->Password   = SMTP_PASS;
    $phpmailer->From       = SMTP_USER;
    $phpmailer->FromName   = 'BCA Website';

    /* This code is just for debugging SMTP 
    $phpmailer->SMTPDebug = 2;
    $phpmailer->Debugoutput = function($str, $level) {
        error_log("SMTP DEBUG: $str");
    }; */
}

function php_mailer_error(WP_Error $error) {
    error_log('Mail Error: ' . print_r($error->get_error_message(), true));
}

add_action('phpmailer_init', 'php_mailer');
add_action('wp_mail_failed', 'php_mailer_error');
?>