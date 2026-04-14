<?php 

if (!defined('ABSPATH')) {
    exit;
}

function cta_contact() {
    ob_start(); 
    ?>
    <section class="bca-cta contact">
        <div class="bca-cta__inner container">
            <div class="bca-cta__text reveal">
                <div class="bca-heading__eyebrow" aria-hidden="true">Contact us</div>
                <h2 class="bca-heading__title">Discover How BC&amp;A Can <span>Support You</span></h2>
                <div class="bca-cta__body">
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
                <div class="bca-cta__btns">
                    <a href="/offices/" class="bca-btn-primary">Find a Local Office<svg viewBox="0 0 16 16"><path d="M3 8H10M8.5 5.5L11 8L8.5 10.5"></path></svg></a>
                    <a href="/contact/" class="bca-btn-outline">Contact Us</a>
                </div>
            </div> 
            <div class="bca-cta__image reveal reveal-delay-1">
                <img src="http://bca-new2.local/wp-content/uploads/2026/03/15628.jpg" 
                    alt="BC&A team supporting clients" />
                <!-- Floating badge -->
                <div class="bca-cta__image-badge">
                    <div class="bca-cta__image-badge-dot"></div>
                    <span>Trusted long-term partner</span>
                </div>
            </div>
        </div>
    </section>
    <?php

    return ob_get_clean();
}

function cta_sectors($atts) {
    $atts = shortcode_atts(array(
        'dir' => 'ltr',
        'btn' => 'Our Sectors'
    ), $atts, 'bca_cta_sector');

    $desc = "<p>We understand the unique challenges and opportunities of your industry." .  
                "From education to technology, healthcare to media, our sector experts are " .  
                "ready to support you with practical insights and strategic advice. " .
            "</p>" .
            "<p>Browse our sectors below to find the right solution for you.</p>";

    ob_start(); 
    ?>
    <section class="bca-cta sector">
        <div class="bca-cta__inner container">
            <div class="bca-cta__text reveal">
                <div class="bca-heading__eyebrow" aria-hidden="true">Our Sectors</div>
                <h2 class="bca-heading__title">Specialist Knowledge For Every Sector</h2>
                <div class="bca-cta__body">
                    <?php echo $desc ?>
                </div>
                <div class="bca-cta__btns">
                    <a href="/sectors" class="bca-btn-primary">Explore Our Sector Expertise<svg viewBox="0 0 16 16"><path d="M3 8H10M8.5 5.5L11 8L8.5 10.5"></path></svg></a>
                </div>
            </div> 
            <div class="bca-cta__image reveal reveal-delay-1">
                <img src="http://bca-new2.local/wp-content/uploads/2026/03/sectors.png" alt="BC&A Sectors" />
                <!-- Floating badge -->
                <div class="bca-cta__image-badge">
                    <div class="bca-cta__image-badge-dot"></div>
                    <span>20+ Sectors, we specialise in</span>
                </div>
            </div>
        </div>
    </section>
    <?php

    return ob_get_clean();    
}

function cta_about_us($params) {
    $params = shortcode_atts(array(
        'theme' => '',
    ), $params, 'cta_about_us');
    ob_start();
    ?>
    <section class="bca-cta <?php echo $params['theme']; ?>">
        <div class="bca-cta__inner container">
            <div class="bca-cta__image reveal reveal-delay-1">
                <img src="https://images.unsplash.com/photo-1560179707-f14e90ef3623?w=800&amp;q=80" 
                    alt="BC&A team at work">
            </div>
            <div class="bca-cta__text reveal">
                <span class="bca-heading__eyebrow <?php echo $params['theme'] === 'dark' ? 'white' : ''; ?>" aria-hidden="true">See How We Work</span>
                <h2 class="bca-heading__title <?php echo $params['theme'] === 'dark' ? 'white' : ''; ?>">
                    See How BC&amp;A Can Help Your Business <em>Thrive</em>
                </h2>
                <div class="bca-cta__body">
                    <p>
                        Our proactive accountancy and business advisory services are designed to give you 
                        complete confidence in your finances — so you can focus on what you do best.
                    </p>
                </div>
                <div class="bca-cta__btns">
                    <a href="/about-us/" class="bca-btn-primary">Our Story<svg viewBox="0 0 16 16"><path d="M3 8H10M8.5 5.5L11 8L8.5 10.5"></path></svg></a>
                    <a href="/contact/" class="bca-btn-<?php echo $params['theme'] === 'dark' ? 'ghost' : 'outline'; ?>">
                        Get in Touch
                    </a>
                </div>
            </div>
        </div>
    </section>
    <?php
    return ob_get_clean();
}

add_shortcode('bca_cta_contact', 'cta_contact');
add_shortcode('bca_cta_sector', 'cta_sectors');
add_shortcode('bca_cta_about_us', 'cta_about_us');
?>