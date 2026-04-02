<?php 

if (!defined('ABSPATH')) {
    exit;
}

function hero_section($atts) {
    ob_start();

    $atts = shortcode_atts(array(
        'page' => ''
    ), $atts, 'bca_hero_section');

    $eyebrow = '';
    $title   = '';
    $desc    = ''; 
    $image   = '';
    $page = $atts['page'];

  /*  switch ($page) {
        case 'Quote' : 
            $eyebrow = '';
            $title   = 'Request a Free Quote';
            $image   = '/wp-content/uploads/2026/04/request_quote.jpg';
            $desc    = "Fill in the form and one of our team will be in touch with a tailored, no-obligation quote. " .
                        "Prefer to talk? We're happy to meet online or at one of our Hampshire offices."; 
            break;
    }*/
    ?>

    <div class="bca-hero-section" style="background-image: <?php echo $image === '' ? 'none' : 'url(' . $image .')' ?>;">
        <div class="bca-hero__overlay"></div>
        <section class="bca-hero transparent-header">
            <div class="bca-hero__container">
                <div class="bca-hero__content">
                    <div class="bca-hero__eyebrow">
                        <p><strong><span><?php echo $eyebrow ?></span></strong></p>
                    </div>
                    <div class="bca-hero__head-wrapper">
                        <h1 class="bca-hero__title"><?php echo $title ?></h1>
                        <p class="bca-hero__text"><?php echo $desc ?></p>
                    </div>
                </div>
            </div>
        </section>
    </div>
    
    <?php
    return ob_get_clean();
}

add_shortcode('bca_hero_section', 'hero_section');
?>