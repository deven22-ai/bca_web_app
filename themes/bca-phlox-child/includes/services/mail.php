<?php 


function php_mailer($phpmailer) {    
    $phpmailer->isSMTP();


    $phpmailer->Host       = 'smtp.office365.com';
    $phpmailer->SMTPAuth   = true;
    $phpmailer->Port       = 587;
    $phpmailer->SMTPSecure = 'tls';
    $phpmailer->Username   = SMTP_USER;
    $phpmailer->Password   = SMTP_PASS;
    $phpmailer->From       = SMTP_USER;
    $phpmailer->FromName   = 'BCA Website';

    $phpmailer->SMTPAutoTLS = true;
}

add_action('phpmailer_init', 'php_mailer');
?>