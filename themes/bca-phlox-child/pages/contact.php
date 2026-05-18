<?php
/*
Template Name: Contact
Author: Deven Warang
*/

get_header();
wp_enqueue_style('contact-style');
?>

<!-- HERO SECTION -->
<div class="bca-hero-section">
    <div class="bca-hero__overlay"></div>
    <div class="bca-hero container transparent-header">
        <div class="bca-hero__content-grid">
            <div>
                <div class="bca-hero__eyebrow reveal">
                    <p><strong><span>Contact Us</span></strong></p>
                </div>
                <div class="bca-hero__head-wrapper reveal reveal-delay-1">
                    <h1 class="bca-hero__title">Let's Start a <br><em>Conversation</em></h1>
                    <p class="bca-hero__text">
                        Whether you're looking for a new accountant, have a question about our services, 
                        or simply want to find out how we can help — our team is ready to listen and respond 
                        within one business day.
                    </p>
                </div>
                <div class="bca-hero__btns reveal reveal-delay-4">
                    <a href="#contactForm" class="bca-btn-primary">Send us a Message<svg viewBox="0 0 16 16"><path d="M3 8H10M8.5 5.5L11 8L8.5 10.5"></path></svg></a>
                    <a href="#bcaOffices" class="bca-btn-ghost">Find an Office</a>
                </div>
            </div>
            <div class="bca-hero__card reveal reveal-delay-1">
                <div class="bca-hero__card-head">
                    <svg viewBox="0 0 24 24"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                    <h4>Need to arrange a callback?</h4>
                </div>
                <div class="bca-hero__card-body">
                    <a href="tel:02392833300" class="bca-hero__card-item">
                        <div class="bca-hero__card-icon"><svg viewBox="0 0 24 24"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"></path></svg></div>
                        <div>
                            <div class="bca-hero__card-label">Call us</div>
                            <div class="bca-hero__card-value">02392 833 300</div>
                        </div>
                    </a>
                    <div class="bca-hero__card-divider"></div>
                    <a href="mailto:info@bcaaccountants.com" class="bca-hero__card-item">
                        <div class="bca-hero__card-icon"><svg viewBox="0 0 24 24"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg></div>
                        <div>
                            <div class="bca-hero__card-label">Email us</div>
                            <div class="bca-hero__card-value">info@bcaaccountants.com</div>
                        </div>
                    </a>
                    <div class="bca-hero__card-divider"></div>
                    <div class="bca-hero__card-item">
                        <div class="bca-hero__card-icon"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"></circle><path d="M12 6v6l4 2"></path></svg></div>
                        <div>
                            <div class="bca-hero__card-label">Office hours</div>
                            <div class="bca-hero__card-value">Mon-Fri: 9:00am - 5:00pm</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bca-hero__bottom reveal reveal-delay-4">
            <div class="bca-hero__bottom-inner">
                <span class="bca-hero__bottom-item">
                    <svg viewBox="0 0 16 16"><path d="M8 1v6l4 2"></path><circle cx="8" cy="8" r="7"></circle></svg>
                    Response within 24 hours
                </span>
                <span class="bca-hero__bottom-item">
                    <svg viewBox="0 0 16 16"><path d="M13 7.5A5.5 5.5 0 112 7.5 5.5 5.5 0 0113 7.5z"></path><path d="M15 15l-3-3"></path></svg>
                    No-obligation conversation
                </span>
                <span class="bca-hero__bottom-item">
                    <svg viewBox="0 0 16 16"><path d="M2 4h12v8a1 1 0 01-1 1H3a1 1 0 01-1-1V4z"></path><path d="M2 4l6 5 6-5"></path></svg>
                    3 Hampshire offices
                </span>
                <span class="bca-hero__bottom-item">
                    <svg viewBox="0 0 16 16"><path d="M8 1l1.7 3.5 3.8.55-2.75 2.68.65 3.78L8 9.75l-3.4 1.78.65-3.78L2.5 5.05l3.8-.55z"></path></svg>
                    Free Financial Health check
                </span>
            </div>
        </div>
    </div>
</div>

<!-- CONTACT FORM 7 -->
<section class="bca-contact-main" id="contactForm">
    <div class="container">
        <div class="bca-contact-main__inner">
            <?php echo do_shortcode('[contact-form-7 id="7c0d793"]') ?>
            <aside class="bca-contact-sidebar reveal reveal-delay-1">
                <div class="bca-sidebar-card">
                    <div class="bca-sidebar-card__head"><h3>Head Office — Portsmouth</h3></div>
                    <div class="bca-sidebar-card__body">
                        <div class="bca-sidebar-item">
                            <div class="bca-sidebar-item__icon"><svg viewBox="0 0 24 24"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"></path><circle cx="12" cy="10" r="3"></circle></svg></div>
                            <div>
                                <div class="bca-sidebar-item__label">Address</div>
                                <div class="bca-sidebar-item__value">24 Landport Terrace, Southsea,<br>Portsmouth, PO1 2RG</div>
                            </div>
                        </div>
                        <div class="bca-sidebar-item">
                            <div class="bca-sidebar-item__icon"><svg viewBox="0 0 24 24"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"></path></svg></div>
                            <div>
                                <div class="bca-sidebar-item__label">Phone</div>
                                <div class="bca-sidebar-item__value"><a href="tel:02392833300">02392 833 300</a></div>
                            </div>
                        </div>
                        <div class="bca-sidebar-item">
                            <div class="bca-sidebar-item__icon"><svg viewBox="0 0 24 24"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg></div>
                            <div>
                                <div class="bca-sidebar-item__label">Email</div>
                                <div class="bca-sidebar-item__value"><a href="mailto:info@bcaaccountants.com">info@bcaaccountants.com</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bca-sidebar-card bca-sidebar-card--dark">
                    <div class="bca-sidebar-card__head"><h3>Why contact BC&amp;A?</h3></div>
                    <div class="bca-sidebar-card__body">
                    <ul class="bca-why-list">
                        <li><svg viewBox="0 0 16 16"><polyline points="2,8 6,12 14,4"></polyline></svg>Response within one business day</li>
                        <li><svg viewBox="0 0 16 16"><polyline points="2,8 6,12 14,4"></polyline></svg>No-obligation initial conversation</li>
                        <li><svg viewBox="0 0 16 16"><polyline points="2,8 6,12 14,4"></polyline></svg>Regulated by ICAEW &amp; CIMA</li>
                        <li><svg viewBox="0 0 16 16"><polyline points="2,8 6,12 14,4"></polyline></svg>Fixed fees — no hidden charges</li>
                        <li><svg viewBox="0 0 16 16"><polyline points="2,8 6,12 14,4"></polyline></svg>Three local Hampshire offices</li>
                    </ul>
                    </div>
                </div>
            </aside>
        </div>
    </div>
</section>

<!-- BCA OFFICES -->
<section class="bca-offices" id="bcaOffices">
    <div class="container">
        <div class="bca-heading-section reveal">
            <div class="bca-heading-container">
                <div class="bca-heading__eyebrow">Our Locations</div>
                <h2 class="bca-heading__title">Find Your Nearest <span>BC&A Office</span></h2>
                <div class="bca-heading__description">
                    <p>Three offices across the South of England — each one with a dedicated team ready to help you.</p>
                </div>
            </div>
        </div>

        <div class="bca-offices__grid">
            <!-- Portsmouth -->
            <div class="bca-office-card reveal reveal-delay-1">
                <div class="bca-office-card__photo">
                    <img src="/wp-content/uploads/2026/05/Places_to_visit_in_Portsmouth_-_SouthSea_Castle.avif" alt="Portsmouth City">
                    <span class="bca-office-card__type">Head Office</span>
                </div>
                <div class="bca-office-card__body">
                    <h3 class="bca-office-card__name">Portsmouth</h3>
                    <div class="bca-office-card__details">
                        <div class="bca-office-card__detail">
                            <svg viewBox="0 0 24 24"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                            <span>24 Landport Terrace, Southsea, Portsmouth, PO1 2RG</span>
                        </div>
                        <div class="bca-office-card__detail">
                            <svg viewBox="0 0 24 24"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"></path></svg>
                            <a href="tel:02392833300">02392833300</a>
                        </div>
                        <div class="bca-office-card__detail">
                            <svg viewBox="0 0 24 24"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                            <a href="mailto:info@bcaaccountants.com">info@bcaaccountants.com</a>
                        </div>
                    </div>
                    <div class="bca-office-card__btns" style="display: flex;flex-flow: column;">
                        <a href="/offices/portsmouth/" class="bca-btn-primary">View Office<svg viewBox="0 0 16 16"><path d="M3 8H10M8.5 5.5L11 8L8.5 10.5"></path></svg></a>
                        <a href="https://maps.app.goo.gl/euNJsXaUrXRQ29LX7" target="_blank" rel="noopener" class="bca-office-card__btn">
                            <svg viewBox="0 0 24 24"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                            Directions
                        </a>
                    </div>
                </div>
            </div>

            <!-- Romsey -->
            <div class="bca-office-card reveal reveal-delay-2">
                <div class="bca-office-card__photo">
                    <img src="/wp-content/uploads/2026/05/romsey_market_square.png" alt="Romsey">
                    <span class="bca-office-card__type">2 Practices</span>
                </div>
                <div class="bca-office-card__body">
                    <h3 class="bca-office-card__name">Romsey</h3>
                    <div class="bca-office-card__details">
                        <div class="bca-office-card__detail">
                            <svg viewBox="0 0 24 24"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                            <span>Buckley House, 29 to 31A, The Hundred, Romsey, SO51 8GD</span>
                        </div>
                        <div class="bca-office-card-grp">
                            <span class="kumar">Kumar Associates</span>
                            <div class="bca-ofc-de-grp">
                                <div class="bca-ofc-de">
                                    <svg viewBox="0 0 24 24"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"></path></svg>
                                    <a href="tel:<?php echo config('KUMAR_ASSOCIATES')['phone']; ?>"><?php echo config('KUMAR_ASSOCIATES')['phone']; ?></a>
                                </div>
                                <div class="bca-ofc-de">
                                    <svg viewBox="0 0 24 24"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                                    <a href="mailto:<?php echo config('KUMAR_ASSOCIATES')['email']; ?>"><?php echo config('KUMAR_ASSOCIATES')['email']; ?></a>
                                </div>
                            </div>
                        </div>
                        <div class="bca-office-card-grp">
                            <span>BC&A Romsey</span>
                            <div class="bca-ofc-de-grp">
                                <div class="bca-ofc-de">
                                    <svg viewBox="0 0 24 24"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"></path></svg>
                                    <a href="tel:<?php echo config('BCA_ROMSEY')['phone']; ?>"><?php echo config('BCA_ROMSEY')['phone']; ?></a>
                                </div>
                                <div class="bca-ofc-de">
                                    <svg viewBox="0 0 24 24"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                                    <a href="mailto:<?php echo config('BCA_ROMSEY')['email']; ?>"><?php echo config('BCA_ROMSEY')['email']; ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bca-office-card__btns">
                        <a href="/offices/romsey/" class="bca-btn-primary">View Offices<svg viewBox="0 0 16 16"><path d="M3 8H10M8.5 5.5L11 8L8.5 10.5"></path></svg></a>
                        <a href="https://maps.app.goo.gl/LmbkYvTXGCN7W8NT9" target="_blank" rel="noopener" class="bca-office-card__btn">
                            <svg viewBox="0 0 24 24"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                            Directions
                        </a>
                    </div>
                </div>
            </div>

            <!-- Swindon -->
            <div class="bca-office-card reveal reveal-delay-3">
                <div class="bca-office-card__photo">
                    <img src="/wp-content/uploads/2026/05/lydiard_park_and_house.png" alt="Swindon">
                </div>
                <div class="bca-office-card__body">
                    <h3 class="bca-office-card__name">Swindon</h3>
                    <div class="bca-office-card__details">
                        <div class="bca-office-card__detail">
                            <svg viewBox="0 0 24 24"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                            <span>Unit 1 Uffcott Farm, Uffcott, Swindon, Wiltshire, SN4 9NB</span>
                        </div>
                        <div class="bca-office-card__detail">
                            <svg viewBox="0 0 24 24"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"></path></svg>
                            <a href="tel:<?php echo config('SWINDON')['phone']; ?>"><?php echo config('SWINDON')['phone']; ?></a>
                        </div>
                        <div class="bca-office-card__detail">
                            <svg viewBox="0 0 24 24"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                            <a href="mailto:<?php echo config('SWINDON')['email']; ?>"><?php echo config('SWINDON')['email']; ?></a>
                        </div>
                    </div>
                    <div class="bca-office-card__btns" style="display: flex;flex-flow: column;">
                        <a href="/offices/swindon/" class="bca-btn-primary">View Office<svg viewBox="0 0 16 16"><path d="M3 8H10M8.5 5.5L11 8L8.5 10.5"></path></svg></a>
                        <a href="https://maps.app.goo.gl/94TAKawC5WxWqZv59" target="_blank" rel="noopener" class="bca-office-card__btn">
                            <svg viewBox="0 0 24 24"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                            Directions
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CAREERS -->
<section class="bca-careers" id="careers">
    <div class="container">
        <div class="bca-careers__inner">
            <div class="bca-heading-section left-align reveal">
                <div class="bca-heading-container">
                    <div class="bca-heading__eyebrow">Careers At BCA</div>
                    <h2 class="bca-heading__title">Join a firm that invests in people</h2>
                    <div class="bca-heading__description">
                        <p>
                            We are always looking for talented, ambitious professionals who share our values 
                            of integrity, excellence and genuine client care. If you are interested in joining 
                            BC&A, we would love to hear from you, even if we don't have a live vacancy right 
                            now.
                        </p>
                        <p>
                            Simply email your CV and a short cover note to our team. We review every application 
                            and will be in touch if a suitable opportunity arises.
                        </p>
                        <div class="bca-careers__btns">
                            <a href="mailto:info@bcaaccountants.com?subject=CV Application — BC%26A Chartered Accountants" class="bca-btn-primary">
                                Email Your CV <?php echo get_arrow_icon() ?>
                            </a>
                            <!--<a href="#contact-form" class="bca-btn-ghost">Send a Message</a> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="bca-careers__card reveal reveal-delay-1">
                <div class="bca-careers__card-head">
                    <h4>Why work at BC&amp;A?</h4>
                </div>
                <div class="bca-careers__card-body">
                    <div class="bca-careers__perk">
                        <svg viewBox="0 0 16 16"><polyline points="2,8 6,12 14,4"></polyline></svg>
                        Competitive salary &amp; benefits package
                    </div>
                    <div class="bca-careers__perk">
                        <svg viewBox="0 0 16 16"><polyline points="2,8 6,12 14,4"></polyline></svg>
                        Real career progression — not just a job title
                    </div>
                    <div class="bca-careers__perk">
                        <svg viewBox="0 0 16 16"><polyline points="2,8 6,12 14,4"></polyline></svg>
                        Supportive, collaborative team culture
                    </div>
                    <div class="bca-careers__perk">
                        <svg viewBox="0 0 16 16"><polyline points="2,8 6,12 14,4"></polyline></svg>
                        Flexible working options available
                    </div>
                    <div class="bca-careers__perk">
                        <svg viewBox="0 0 16 16"><polyline points="2,8 6,12 14,4"></polyline></svg>
                        Diverse, interesting client portfolio
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php 
/* EXPLORE SECTORS */
echo do_shortcode('[bca_cta_services]');
get_footer();
?>

<script>
    let params = new URLSearchParams(document.location.search);
    const carrers = document.getElementById(params.get('section'));
    carrers.scrollIntoView({
        behavior: 'smooth',
        block: 'start'
    });
</script>