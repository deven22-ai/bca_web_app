<?php 

if (!defined('ABSPATH')) {
    exit;
}

function contact() {
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
                    <a href="/offices/" class="bca-btn-primary">Find a Local Office<?php echo get_arrow_icon()?></a>
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

function sector($atts) {
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
                    <a href="/sectors" class="bca-btn-primary">Explore Our Sector Expertise<?php echo get_arrow_icon()?></a>
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

function service() {
    wp_enqueue_style('cta-style');
    ob_start(); 
    ?>
    <section class="bca-cta-services light">
        <div class="container bca-cta-services__inner">
            <!-- Left: text -->
            <div>
                <div class="bca-heading__eyebrow">Our Specialist Services</div>
                <h2 class="bca-heading__title">Services most firms <em>simply don't offer</em></h2>
                <p class="bca-cta-services__desc">BC&A goes beyond standard accountancy. Our specialist team delivers niche expertise in areas that most general firms cannot match — giving your business a genuine competitive advantage.</p>
                <div class="bca-cta-services__btns">
                    <a href="/services?content=1/" class="bca-btn-primary">Explore Our Services<?php echo get_arrow_icon()?></a>
                    <a href="/request-quote/" class="bca-btn-outline">Get a Free Quote</a>
                </div>
            </div>
            <!-- Right: service items -->
            <div>
                <div class="bca-cta-services__cards">
                    <a href="/services/businesses/healthcare" class="bca-cta-svc bca-cta-svc--specialist">
                        <div class="bca-cta-svc__left">
                            <div class="bca-cta-svc__icon"><svg viewBox="0 0 24 24"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg></div>
                            <div class="bca-cta-svc__info">
                                <span class="bca-cta-svc__badge">✦ Specialist</span>
                                <span class="bca-cta-svc__name">Medical Specialist Accounting</span>
                            </div>
                        </div>
                        <svg class="bca-cta-svc__arrow" viewBox="0 0 16 16"><path d="M3 8h10M9 4l4 4-4 4"/></svg>
                    </a>
        
                    <a href="/services/accounting-for-parish-city-councils/" class="bca-cta-svc bca-cta-svc--specialist">
                        <div class="bca-cta-svc__left">
                            <div class="bca-cta-svc__icon">
                                <svg viewBox="0 0 24 24"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
                            </div>
                            <div class="bca-cta-svc__info">
                                <span class="bca-cta-svc__badge">✦ Specialist</span>
                                <span class="bca-cta-svc__name">City &amp; Parish Council Accounts</span>
                            </div>
                        </div>
                        <svg class="bca-cta-svc__arrow" viewBox="0 0 16 16"><path d="M3 8h10M9 4l4 4-4 4"/></svg>
                    </a>
            
                    <a href="/services/rd-tax-relief/" class="bca-cta-svc bca-cta-svc--specialist">
                        <div class="bca-cta-svc__left">
                            <div class="bca-cta-svc__icon">
                                <svg viewBox="0 0 24 24"><path d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/></svg>
                            </div>
                            <div class="bca-cta-svc__info">
                                <span class="bca-cta-svc__badge">✦ Specialist</span>
                                <span class="bca-cta-svc__name">R&amp;D Tax Credit Claims</span>
                            </div>
                        </div>
                        <svg class="bca-cta-svc__arrow" viewBox="0 0 16 16"><path d="M3 8h10M9 4l4 4-4 4"/></svg>
                    </a>
        
                    <a href="/services/audit-services/" class="bca-cta-svc bca-cta-svc--specialist">
                        <div class="bca-cta-svc__left">
                            <div class="bca-cta-svc__icon">
                                <svg viewBox="0 0 24 24"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                            </div>
                            <div class="bca-cta-svc__info">
                                <span class="bca-cta-svc__badge">✦ Specialist</span>
                                <span class="bca-cta-svc__name">Audit Services</span>
                            </div>
                        </div>
                        <svg class="bca-cta-svc__arrow" viewBox="0 0 16 16"><path d="M3 8h10M9 4l4 4-4 4"/></svg>
                    </a>
            
                    <!-- Core service — blue accent -->
                    <a href="/services/accounting-solutions/" class="bca-cta-svc bca-cta-svc--core">
                        <div class="bca-cta-svc__left">
                            <div class="bca-cta-svc__icon">
                                <svg viewBox="0 0 24 24"><rect x="2" y="3" width="20" height="14" rx="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg>
                            </div>
                            <div class="bca-cta-svc__info">
                                <span class="bca-cta-svc__badge">Core Service</span>
                                <span class="bca-cta-svc__name">General Accounting &amp; Tax Compliance</span>
                            </div>
                        </div>
                        <svg class="bca-cta-svc__arrow" viewBox="0 0 16 16"><path d="M3 8h10M9 4l4 4-4 4"/></svg>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <?php
    return ob_get_clean();
}

function about_us($params) {
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
                    <a href="/about-us/" class="bca-btn-primary">Our Story<?php echo get_arrow_icon()?></a>
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

add_shortcode('bca_cta_contact', 'contact');
add_shortcode('bca_cta_sector', 'sector');
add_shortcode('bca_cta_services', 'service');
add_shortcode('bca_cta_about_us', 'about_us');
?>