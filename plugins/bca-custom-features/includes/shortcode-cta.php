<?php 

if (!defined('ABSPATH')) {
    exit;
}

function cta_contact() {
    ob_start(); 
    ?>
    <section class="bca-cta contact">
        <div class="container">
            <div class="bca-cta__left reveal">
                <div class="bca-section__eyebrow" aria-hidden="true">Contact us</div>
                <div class="bca-cta__content">
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
                    <div class="bca-cta__btn">
                        <a href="/our-offices/" class="bca-btn-primary">Find a Local Office</a>
                        <a href="/contact/" class="bca-btn-accent">Contact Us</a>
                    </div>
                </div>
            </div> 
            <div class="bca-cta__right reveal reveal-delay-1">
                <!-- Dot-grid decoration (replaces dots-1.png)
                <div class="bca-dots" aria-hidden="true"></div>  -->
                <div class="bca-cta__image">
                    <img src="http://bca-new2.local/wp-content/uploads/2026/03/15628.jpg" alt="BC&A team supporting clients" />
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

    $buttonTxt = $atts['btn'];
    $direction = $atts['dir'];

    $desc = "<p>We understand the unique challenges and opportunities of your industry." .  
                "From education to technology, healthcare to media, our sector experts are " .  
                "ready to support you with practical insights and strategic advice. " .
            "</p>" .
            "<p>Browse our sectors below to find the right solution for you.</p>";

    ob_start(); 
    ?>
    <section class="bca-cta">
        <div class="container">
            <?php if($direction == 'ltr') : ?>
            <div class="bca-cta__left reveal">
                <div class="bca-section__eyebrow" aria-hidden="true">Our Sectors</div>
                <div class="bca-cta__content">
                    <h2 class="bca-section__title">Specialist Knowledge For Every Sector</h2>
                    <div class="bca-section__text"><?php echo $desc ?></div>
                    <div class="bca-cta__btn">
                        <a href="/sectors" class="bca-btn-primary"><?php echo $buttonTxt ?></a>
                    </div>
                </div>
            </div> 
            <div class="bca-cta__right reveal reveal-delay-1">
                <div class="bca-cta__image">
                    <img src="http://bca-new2.local/wp-content/uploads/2026/03/sectors.png" alt="BC&A Sectors" />
                </div>
            </div>
            <?php else : ?>
            <div class="bca-cta__right reveal-delay-1">
                <div class="bca-cta__image">
                    <img src="http://bca-new2.local/wp-content/uploads/2026/03/sectors.png" alt="BC&A Sectors" />
                </div>
            </div>                   
            <div class="bca-cta__left reveal">
                <div class="bca-section__eyebrow" aria-hidden="true">Our Sectors</div>
                <div class="bca-cta__content">
                    <h2 class="bca-section__title">Specialist Knowledge For Every Sector</h2>
                    <div class="bca-section__text"><?php echo $desc ?></div>
                    <div class="bca-cta__btn">
                        <a href="/sectors" class="bca-btn-primary"><?php echo $buttonTxt ?></a>
                    </div>
                </div>
            </div> 
            <?php endif; ?>
        </div>
    </section>
    <?php

    return ob_get_clean();    
}

function cta_office() {
    ob_start();    
    ?>

    <section class="bca-cta office" style="border-top: none;">
        <div class="container">
            <div class="bca-cta__left">
                <div class="bca-section__eyebrow" aria-hidden="true">Our Offices</div>
                <div class="bca-cta__content">
                    <h2 class="bca-section__title">Acting As An Extension Of Your Team</h2>
                    <div class="bca-section__text">
                        <p>
                            We work closely with you to understand your business, priorities and long-term goals. 
                            Acting as an extension of your team, we provide clear communication, practical insight and 
                            dependable support that helps you move forward with confidence.
                        </p>
                        <p>
                            From our offices in <b>Portsmouth, Romsey and Swindon</b>, we support businesses and individuals 
                            with advice that is personal, responsive and built around lasting relationships.
                        </p>
                    </div>
                    <div class="bca-cta__btn">
                        <a href="/our-offices/" class="bca-btn-primary">Find Your Local Office</a>
                        <a href="/contact/" class="bca-btn-accent">Contact Us</a>
                    </div>
                </div>
            </div> 
            <div class="bca-cta__right">
                <div class="bca-cta__image extension">
                    <img src="http://bca-new2.local/wp-content/uploads/2026/03/BCA_building.png" alt="BC&A Office Building" />
                    <div class="bca-cta__ex-stat-card">
                        <span class="stat-number">35+ Years</span>
                        <span class="stat-text">Supporting Businesses & Individuals</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php

    return ob_get_clean();
}

add_shortcode('bca_cta_contact', 'cta_contact');
add_shortcode('bca_cta_sector', 'cta_sectors');
add_shortcode('bca_cta_office', 'cta_office');
?>