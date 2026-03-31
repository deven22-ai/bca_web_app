<?php 

if (!defined('ABSPATH')) {
    exit;
}

function cta_contact() {
    ob_start(); 
    ?>
    <section class="bca-cta-contact">
        <div class="container">
            <div class="bca-cta-contact__left">
                <div class="bca-section__eyebrow" aria-hidden="true">Contact us</div>
                <div class="bca-cta-contact-content">
                    <h2 class="bca-section__title">Discover How BC&amp;A Can Support You</h2>
                    <div class="bca-section__text">
                        <p>
                            At BC&amp;A, we go beyond conventional professional services, working 
                            closely with businesses, charities and individuals as a trusted long-term partner.
                        </p>
                        <p>
                            Our approach is tailored, not generic — focused on understanding your 
                            objectives and helping you improve resilience, efficiency and decision-making 
                            with confidence.
                        </p>
                    </div>
                    <div class="bca-cta-contact__btn">
                        <a href="/our-offices/" class="bca-btn-primary">Find a Local Office</a>
                        <a href="/contact/" class="bca-btn-accent">Contact Us</a>
                    </div>
                </div>
            </div> 
            <div class="bca-cta-contact__right">
                <!-- Dot-grid decoration (replaces dots-1.png)
                <div class="bca-dots" aria-hidden="true"></div>  -->
                <div class="bca-cta-contact__image">
                    <img src="http://bca-new2.local/wp-content/uploads/2026/03/15628.jpg" alt="BC&A team supporting clients" />
                </div>
            </div>
        </div>
    </section>
    <?php

    return ob_get_clean();
}

add_shortcode('bca_cta_contact', 'cta_contact');
?>