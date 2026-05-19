<?php
/*
Template Name: Swindon Office
Author: Deven Warang
*/

get_header();
wp_enqueue_style('single-office-style');
?>

<!-- HERO SECTION -->
<div class="bca-hero-section swindon">
    <div class="bca-hero__overlay"></div>
    <div class="bca-hero container transparent-header">
        <div class="bca-hero__content-grid">
            <div>
                <div class="bca-hero__eyebrow reveal">
                    <p><strong><span>Swindon Office</span></strong></p>
                </div>
                <div class="bca-hero__head-wrapper reveal reveal-delay-1">
                    <h1 class="bca-hero__title">Specialist accountants at the <em>heart of Wiltshire</em></h1>
                    <p class="bca-hero__text">
                        Our dedicated team provides specialist public sector accountancy alongside a 
                        full range of general practice services to businesses and individuals across Wiltshire.
                    </p>
                </div>
                <div class="bca-hero__btns reveal reveal-delay-2">
                    <a href="#contact" class="bca-btn-primary">Speak to Our Team<svg viewBox="0 0 16 16"><path d="M3 8H10M8.5 5.5L11 8L8.5 10.5"></path></svg></a>
                    <a href="#services" class="bca-btn-ghost">Our Services</a>
                </div>
            </div>
            <div class="bca-hero__card reveal reveal-delay-1">
                <div class="bca-hero__card-head">
                    <svg viewBox="0 0 24 24"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                    <h4>Portsmouth Head Office</h4>
                </div>
                <div class="bca-hero__card-body">
                    <a class="bca-hero__card-item" href="https://maps.app.goo.gl/94TAKawC5WxWqZv59" target="_blank" rel="noopener">
                        <div class="bca-hero__card-icon"><svg viewBox="0 0 24 24"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"></path><circle cx="12" cy="10" r="3"></circle></svg></div>
                        <div>
                            <div class="bca-hero__card-label">Visit Us</div>
                            <div class="bca-hero__card-value">Unit 1 Uffcott Farm, Uffcott, Swindon,<br>Wiltshire, SN4 9NB</div>
                        </div>
                    </a>
                    <div class="bca-hero__card-divider"></div>
                    <a href="tel:<?php echo config('SWINDON')['phone'] ?>" class="bca-hero__card-item">
                        <div class="bca-hero__card-icon"><svg viewBox="0 0 24 24"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"></path></svg></div>
                        <div>
                            <div class="bca-hero__card-label">Call us</div>
                            <div class="bca-hero__card-value"><?php echo config('SWINDON')['phone'] ?></div>
                        </div>
                    </a>
                    <div class="bca-hero__card-divider"></div>
                    <a href="mailto:<?php echo config('SWINDON')['email'] ?>" class="bca-hero__card-item">
                        <div class="bca-hero__card-icon"><svg viewBox="0 0 24 24"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg></div>
                        <div>
                            <div class="bca-hero__card-label">Email Us</div>
                            <div class="bca-hero__card-value"><?php echo config('SWINDON')['email'] ?></div>
                        </div>
                    </a>
                </div>
                <div class="bca-hero__card-foot">
                    <a href="https://maps.app.goo.gl/S1QSrM8HmKFpMKvb8" target="_blank" rel="noopener" class="bca-btn-primary">
                        Get Directions<svg width="16" height="16" viewBox="0 0 2048 2048"><path fill="currentColor" d="M1536 256h384v384h-128V475l-456 456l-91-91l456-456h-165zm0 768l128-128v768H0V512h1280l-128 128H128v896h1408z"/></svg>
                    </a>
                </div>
            </div>
        </div>
        <div class="bca-hero__bottom reveal reveal-delay-4">
            <div class="bca-hero__bottom-inner">
                <span class="bca-hero__bottom-item">
                    <svg viewBox="0 0 16 16"><path d="M8 1l1.7 3.5 3.8.55-2.75 2.68.65 3.78L8 9.75l-3.4 1.78.65-3.78L2.5 5.05l3.8-.55z"></path></svg>
                    Regulated by ICAEW & CIMA
                </span>
                <span class="bca-hero__bottom-item">
                    <svg viewBox="0 0 16 16"><path d="M13 7.5A5.5 5.5 0 112 7.5 5.5 5.5 0 0113 7.5z"></path><path d="M15 15l-3-3"></path></svg>
                    Parish & City Council specialists
                </span>
                <span class="bca-hero__bottom-item">
                    <svg viewBox="0 0 16 16"><path d="M2 4h12v8a1 1 0 01-1 1H3a1 1 0 01-1-1V4z"></path><path d="M2 4l6 5 6-5"></path></svg>
                    Response within 24 hours
                </span>
                <span class="bca-hero__bottom-item">
                    <svg viewBox="0 0 16 16"><path d="M8 1v6l4 2"></path><circle cx="8" cy="8" r="7"></circle></svg>
                    Previously DCK Accounting Solutions
                </span>
            </div>
        </div>
    </div>
</div>

<!--- WHY CHOOSE BC&A IN SWINDON -->
<section class="bca-why swindon">
    <div class="container">
        <div class="bca-why__inner">
            <div class="bca-why__image reveal">
                <img src="/wp-content/uploads/2026/04/ai_upscale.png" alt="BC&A Swindon Office"/>
                <div class="bca-why__stat">
                    <div class="bca-why__stat-num">30<span>+</span></div>
                    <div class="bca-why__stat-label">Years serving in Swindon</div>
                </div>
            </div>
            <div class="bca-why__content reveal reveal-delay-1">
                <span class="bca-heading__eyebrow">Why Choose BC&A in Swindon</span>
                <h2 class="bca-heading__title">Accountants in Swindon with a <em>specialist edge</em></h2>
                <p>
                    BC&A Swindon operates under BC&A Accounting Solutions, originally founded by Derek Kemp in the 1990s and 
                    previously trading as DCK Accounting Solutions. With over three decades of experience serving businesses across Wiltshire, 
                    our Swindon team combines deep local knowledge with the full resources and expertise of the wider BC&A group.
                </p>
                <p>
                   Our Swindon office is home to a specialist team dedicated to supporting parish and city councils across the UK.
                </p>
                <p>
                    We provide expert services including bookkeeping, consultancy, accounts preparation, and advice on partial VAT exemption, 
                    with a strong understanding of the regulatory requirements specific to the public sector.
                </p>
                <ul class="bca-why__list">
                    <li><svg viewBox="0 0 16 16"><polyline points="2,8 6,12 14,4"/></svg>Specialist parish & city council accountancy team</li>
                    <li><svg viewBox="0 0 16 16"><polyline points="2,8 6,12 14,4"/></svg>Full general practice services — tax, payroll, advisory</li>
                    <li><svg viewBox="0 0 16 16"><polyline points="2,8 6,12 14,4"/></svg>Fixed fees with no hidden charges</li>
                    <li><svg viewBox="0 0 16 16"><polyline points="2,8 6,12 14,4"/></svg>Part of one of Hampshire's largest independent firms</li>
                </ul>
                <div class="bca-why__btns">
                    <a href="/contact" class="bca-btn-primary green">Get in Touch<svg viewBox="0 0 16 16"><path d="M3 8H10M8.5 5.5L11 8L8.5 10.5"></path></svg></a>
                    <a href="/request-quote/" class="bca-btn-outline">Get Free Quote</a>
                </div>
            </div>
        </div>
    </div>
</section>
 
<!--- SERVICES --->
<section class="bca-services swindon" id="services">
    <div class="container">
        <div class="bca-heading-section reveal">
            <div class="bca-heading-container">
                <div class="bca-heading__eyebrow">What We Offer</div>
                <h2 class="bca-heading__title">Our accounting services <span>in Swindon</span></h2>
                <div class="bca-heading__description">
                    <p>
                        As a leading firm of chartered accountants in Swindon, we provide a full range of 
                        services designed to support businesses and individuals at every stage.
                    </p>
                </div>
            </div>
        </div>
 
        <div class="bca-services__grid">
            <!-- Parish & City Council Accounting -->
            <div class="bca-service-card reveal reveal-delay-1">
                <div class="bca-service-card__head">
                    <div class="bca-service-card__icon"><svg viewBox="0 0 24 24"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg></div>
                    <h3 class="bca-service-card__title">Parish & City Council Accounting</h3>
                    <p class="bca-service-card__desc">Specialist accountancy and compliance for local councils. Our core specialism at the Swindon office.</p>
                </div>
                <ul class="bca-service-card__list">
                    <li><svg viewBox="0 0 16 16"><polyline points="2,8 6,12 14,4"/></svg>Annual accounts preparation & AGAR</li>
                    <li><svg viewBox="0 0 16 16"><polyline points="2,8 6,12 14,4"/></svg>Bookkeeping & financial management</li>
                    <li><svg viewBox="0 0 16 16"><polyline points="2,8 6,12 14,4"/></svg>Partial VAT exemption advice</li>
                    <li><svg viewBox="0 0 16 16"><polyline points="2,8 6,12 14,4"/></svg>Internal audit & governance reviews</li>
                </ul>
            </div>
            <!-- Tax & Compliance -->
            <div class="bca-service-card reveal reveal-delay-2">
                <div class="bca-service-card__head">
                    <div class="bca-service-card__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 6a4 4 0 00-8 0c0 2.5 2 4.5 2 6.5S9.5 16 7 18h10"></path><line x1="7" y1="11" x2="15" y2="11"></line></svg></div>
                    <h3 class="bca-service-card__title">Tax & Compliance</h3>
                    <p class="bca-service-card__desc">Clear, practical tax advice for businesses and individuals across Swindon and Wiltshire.</p>
                </div>
                <ul class="bca-service-card__list">
                    <li><svg viewBox="0 0 16 16"><polyline points="2,8 6,12 14,4"/></svg>Corporation tax & personal tax returns</li>
                    <li><svg viewBox="0 0 16 16"><polyline points="2,8 6,12 14,4"/></svg>Self-assessment support</li>
                    <li><svg viewBox="0 0 16 16"><polyline points="2,8 6,12 14,4"/></svg>VAT registration & returns</li>
                    <li><svg viewBox="0 0 16 16"><polyline points="2,8 6,12 14,4"/></svg>HMRC correspondence management</li>
                </ul>
            </div>
            <!-- Business Services & Advisory -->
            <div class="bca-service-card reveal reveal-delay-3">
                <div class="bca-service-card__head">
                    <div class="bca-service-card__icon"><svg viewBox="0 0 24 24"><rect x="2" y="7" width="20" height="14" rx="2"></rect><path d="M16 21V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v16"></path></svg></div>
                    <h3 class="bca-service-card__title">Business Services & Advisory</h3>
                    <p class="bca-service-card__desc">Ongoing support for ambitious businesses, from day-to-day bookkeeping to strategic growth advice.</p>
                </div>
                <ul class="bca-service-card__list">
                    <li><svg viewBox="0 0 16 16"><polyline points="2,8 6,12 14,4"/></svg>Management accounts & reporting</li>
                    <li><svg viewBox="0 0 16 16"><polyline points="2,8 6,12 14,4"/></svg>Payroll processing</li>
                    <li><svg viewBox="0 0 16 16"><polyline points="2,8 6,12 14,4"/></svg>Company secretarial services</li>
                    <li><svg viewBox="0 0 16 16"><polyline points="2,8 6,12 14,4"/></svg>Business planning & cashflow</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- MEET THE TEAM -->
<section class="bca-team swindon">
    <div class="container">
        <div class="bca-heading-section left-align reveal">
            <div class="bca-heading-container left-align">
                <div class="bca-heading__eyebrow">The Swindon Team</div>
                <h2 class="bca-heading__title">Meet the people behind <span>your advice</span></h2>
            </div>
            <a href="/about-us/our-team?office=swindon" class="bca-heading__link">View full Swindon team<svg viewBox="0 0 16 16"><path d="M3 8h10M9 4l4 4-4 4"></path></svg></a>
        </div>
        <?php echo do_shortcode('[bca_swindon_team]') ?>
    </div>
</section>

<!-- SPEAK TO THE TEAM -->
<section class="bca-contact" id="contact">
    <div class="container">
        <div class="bca-heading-section reveal">
            <div class="bca-heading-container">
                <div class="bca-heading__eyebrow">Speak To The Team</div>
                <h2 class="bca-heading__title">Get in touch with our Swindon office</h2>
                <div class="bca-heading__description">
                    <p>
                        Send us your enquiry and the most relevant member of the team will get back to you. 
                        We typically respond within one business day.
                    </p>
                </div>
            </div>
        </div>

        <div class="bca-contact__inner">
            <div class="bca-contact__left reveal reveal-delay-1">
                <?php echo do_shortcode('[contact-form-7 id="494b41b"]');?>
            </div>
            <div class="bca-contact__right reveal reveal-delay-2">
                <div class="bca-details-card">
                    <div class="bca-details-card__head"><h4>Swindon Office Details</h4></div>
                    <div class="bca-details-card__body">
                        <div class="bca-details-item">
                            <svg viewBox="0 0 24 24"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                            <div>
                                <div class="bca-details-item__label">Address</div>
                                <div class="bca-details-item__value">Unit 1 Uffcott Farm, Uffcott, Swindon, Wiltshire, SN4 9NB</div>
                            </div>
                        </div>
                        <div class="bca-details-divider"></div>
                        <div class="bca-details-item">
                            <svg viewBox="0 0 24 24"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"></path></svg>
                            <div>
                                <div class="bca-details-item__label">Phone</div>
                                <div class="bca-details-item__value"><a href="tel:<?php echo config('SWINDON')['phone']; ?>"><?php echo config('SWINDON')['phone']; ?></a></div>
                            </div>
                        </div>
                        <div class="bca-details-divider"></div>
                        <div class="bca-details-item">
                            <svg viewBox="0 0 24 24"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                            <div>
                                <div class="bca-details-item__label">Email</div>
                                <div class="bca-details-item__value"><a href="mailto:<?php echo config('SWINDON')['email']; ?>"><?php echo config('SWINDON')['email']; ?></a></div>
                            </div>
                        </div>
                        <div class="bca-details-divider"></div>
                        <div class="bca-details-item">
                            <svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"></circle><path d="M12 6v6l4 2"></path></svg>
                            <div>
                                <div class="bca-details-item__label">Office Hours</div>
                                <div class="bca-details-item__value">Monday - Friday: 9:00am - 5:00pm</div>
                            </div>
                        </div>
                    </div>
                    <div class="bca-details-foot">
                        <a href="https://maps.app.goo.gl/94TAKawC5WxWqZv59" target="_blank" rel="noopener" class="bca-btn-primary">
                            Get Directions<svg width="16" height="16" viewBox="0 0 2048 2048"><path fill="currentColor" d="M1536 256h384v384h-128V475l-456 456l-91-91l456-456h-165zm0 768l128-128v768H0V512h1280l-128 128H128v896h1408z"></path></svg>
                        </a>
                        <a href="/contact/" class="bca-btn-ghost">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Google Maps -->
        <div class="bca-contact__map-full reveal reveal-delay-3"">
            <div class="bca-map-frame">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1044.354384815741!2d-1.820899939546863!3d51.49656803939162!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48715cabc1a9bfa5%3A0x55cce48a466d39fe!2sDCK%20Accounting%20Solutions%20Ltd!5e0!3m2!1sen!2suk!4v1776508322005!5m2!1sen!2suk" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>            
            </div>
            <div class="bca-map-directions">
                Unit 1 Uffcott Farm, Uffcott, Swindon, <span>Wiltshire, SN4 9NB</span>
            </div>
        </div>
    </div>
</section>

<!--- DARK CTA -->
<section class="bca-cta bca-cta-var2 dark">
    <div class="container">
        <div class="bca-cta-var2__inner reveal">
            <div class="bca-cta-var2__text">
                <span class="bca-heading__eyebrow">Other Offices</span>
                <h2>Also serving <em>Portsmouth &amp; Romsey</em></h2>
                <p>
                    BC&A operates three offices across the South of England. If Portsmouth or Romsey is 
                    more convenient for you, our teams there offer the same high standard of service 
                    and expertise.
                </p>
            </div>
            <div class="bca-cta__btns">
                <a href="/offices/" class="bca-btn-primary">View All Offices<svg viewBox="0 0 16 16"><path d="M3 8H10M8.5 5.5L11 8L8.5 10.5"></path></svg></a>
                <a href="/request-quote/" class="bca-btn-ghost">Get a Free Quote</a>
            </div>
        </div>
    </div>
</section>

<?php 
echo do_shortcode('[bca_cta_sector]');
get_footer();
?>