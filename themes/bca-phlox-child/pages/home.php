<?php
/*
Template Name: Home
Author: Deven Warang
*/

get_header();
wp_enqueue_style('home-style');
?>

<!-- HERO SECTION -->
<div class="bca-hero-section home">
    <div class="bca-hero__overlay"></div>
    <div class="bca-hero container transparent-header">
        <div class="bca-hero__content">
            <div class="bca-hero__eyebrow reveal">
               <!-- <p><strong><span>Our Vision</span></strong></p> -->
            </div>
            <div class="bca-hero__head-wrapper reveal reveal-delay-1">
                <h1 class="bca-hero__title">Big Firm Expertise.<br>Personal Service.<br><em>Real Results.</em></h1>
                <p class="bca-hero__text">
                    One of the South of England's largest independent chartered accountancy firms,
                    supporting businesses, individuals and charities across Hampshire for over 35 years.
                </p>
            </div>
            <div class="bca-hero__services-label reveal reveal-delay-2"><span>✦ OUR  SPECIALIST SERVICES</span></div>
            <div class="bca-hero__services reveal reveal-delay-3">
                <a href="/services/medical-specialist/" class="bca-hero__service-item">
                    <span class="bca-hero__service-dot"></span>
                    <span class="bca-hero__service-name">Medical Specialist Accounting</span>
                    <span class="bca-hero__service-arrow"><svg viewBox="0 0 16 16"><path d="M3 8H10M8.5 5.5L11 8L8.5 10.5"></path></svg></span>
                </a>
                <a href="/services/accounting-for-parish-city-councils/" class="bca-hero__service-item">
                    <span class="bca-hero__service-dot"></span>
                    <span class="bca-hero__service-name">City &amp; Parish Council Accounts</span>
                    <span class="bca-hero__service-arrow"><svg viewBox="0 0 16 16"><path d="M3 8H10M8.5 5.5L11 8L8.5 10.5"></path></svg></span>
                </a>
                <a href="/services/rd-tax-relief/" class="bca-hero__service-item">
                    <span class="bca-hero__service-dot"></span>
                    <span class="bca-hero__service-name">R&amp;D Tax Credit Claims</span>
                    <span class="bca-hero__service-arrow"><svg viewBox="0 0 16 16"><path d="M3 8H10M8.5 5.5L11 8L8.5 10.5"></path></svg></span>
                </a>
                <a href="/services/audit-services/" class="bca-hero__service-item">
                    <span class="bca-hero__service-dot"></span>
                    <span class="bca-hero__service-name">Audit Services</span>
                    <span class="bca-hero__service-arrow"><svg viewBox="0 0 16 16"><path d="M3 8H10M8.5 5.5L11 8L8.5 10.5"></path></svg></span>
                </a>
            </div>
            <div class="bca-core-svc reveal reveal-delay-4">
                <a href="/services/accounting-solutions/" class="bca-hero__service-item bca-svc-box--core">
                    <div class="bca-svc-box__inner">
                        <span class="bca-svc-box__core-label">Core Service</span>
                        <span class="bca-svc-box__name">
                            General Accounting &amp; Tax Compliance &nbsp;
                            <svg class="bca-svc-box__arr" viewBox="0 0 16 16"><path d="M3 8h10M9 4l4 4-4 4"></path></svg>
                        </span>
                    </div>
                    <!--<div class="bca-svc-box__core-right">
                        <span class="bca-svc-box__core-desc">The foundation of every great business</span>
                    </div> -->
                </a>
            </div>
            <div class="bca-hero__btns reveal reveal-delay-4">
                <a href="/request-quote/" class="bca-btn-primary">Get Free Quote<?php echo get_arrow_icon(); ?></a>
                <a href="tel:02392833300" class="bca-btn-ghost">
                    <svg viewBox="0 0 16 16"><path d="M14 10.67v2a1.33 1.33 0 01-1.45 1.33 13.2 13.2 0 01-5.75-2.05 13 13 0 01-4-4 13.2 13.2 0 01-2.05-5.78A1.33 1.33 0 012.07 1h2a1.33 1.33 0 011.33 1.15c.085.64.24 1.27.467 1.87a1.33 1.33 0 01-.3 1.4L4.6 6.4a10.67 10.67 0 004 4l.98-.98a1.33 1.33 0 011.4-.3c.6.228 1.23.382 1.87.467A1.33 1.33 0 0114 10.67z"></path></svg>
                    Call Us Now
                </a>
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
                    No-obligation free quote
                </span>
                <span class="bca-hero__bottom-item">
                    <svg viewBox="0 0 16 16"><path d="M2 4h12v8a1 1 0 01-1 1H3a1 1 0 01-1-1V4z"></path><path d="M2 4l6 5 6-5"></path></svg>
                    Response within 24 hours
                </span>
                <span class="bca-hero__bottom-item">
                    <svg viewBox="0 0 16 16"><path d="M8 1v6l4 2"></path><circle cx="8" cy="8" r="7"></circle></svg>
                    Proactive year-round support
                </span>
            </div>
        </div>
    </div>
</div>

<!-- SPECIALIST SERVICES SECTION -->
<section class="bca-specialist">
    <div class="container">
        <div class="bca-heading-section left-align reveal">
            <div class="bca-heading-container">
                <div class="bca-heading__eyebrow">Specialist Services</div>
                <h2 class="bca-heading__title">Expertise Other Firms <span>Simply Don't Offer</span></h2>
                <div class="bca-heading__description">
                    <p>Four highly specialist services where BC&A has built deep, dedicated expertise that 
                        sets us apart from general accountancy practices.</p>
                </div>
            </div>
            <a href="/services?content=1" class="bca-heading__link">View all services<svg viewBox="0 0 16 16"><path d="M3 8h10M9 4l4 4-4 4"></path></svg></a>
        </div>
    </div>

    <!-- 4 Cards -->
    <div class="bca-specialist__grid reveal">
        <a href="/services/accounting-solutions/" class="bca-specialist-card reveal reveal-delay-1">
            <div class="bca-specialist-card__icon">
                <svg viewBox="0 0 24 24">
                    <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                    <path d="M9 12l2 2 4-4"/>
                </svg>
            </div>
            <span class="bca-specialist-card__pill">Core Services</span>
            <div class="bca-specialist-card__title">General Accounting & Tax Compliance</div>
            <div class="bca-specialist-card__desc">Annual accounts, self-assessment, VAT returns and company secretarial — the essential compliance services every business and individual needs, done properly.</div>
            <div class="bca-specialist-card__cta">
                Find out more
                <svg viewBox="0 0 12 12"><path d="M2 6h8M6 2l4 4-4 4"/></svg>
            </div>
        </a>
        <a href="/services/medical-specialist/" class="bca-specialist-card reveal reveal-delay-2">
            <span class="bca-unique-badge">✦ BC&A Specialist</span>
            <div class="bca-specialist-card__icon"><svg viewBox="0 0 24 24"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg></div>
            <span class="bca-specialist-card__pill">Healthcare</span>
            <div class="bca-specialist-card__title">Medical Specialist Accounting</div>
            <div class="bca-specialist-card__desc">
                Tailored accountancy for GPs, hospital consultants, dentists and healthcare professionals 
                navigating complex NHS and private income structures.
            </div>
            <div class="bca-specialist-card__cta">Find out more<svg viewBox="0 0 12 12"><path d="M2 6h8M6 2l4 4-4 4"/></svg></div>
        </a>

        <a href="/services/accounting-for-parish-city-councils/" class="bca-specialist-card reveal reveal-delay-3">
            <span class="bca-unique-badge">✦ BC&A Specialist</span>
            <div class="bca-specialist-card__icon"><svg viewBox="0 0 24 24"><path d="M3 21h18"/><path d="M5 21V7l7-4 7 4v14"/><path d="M9 21V11h6v10"/></svg></div>
            <span class="bca-specialist-card__pill">Public Sector</span>
            <div class="bca-specialist-card__title">City &amp; Parish Council Accounts</div>
            <div class="bca-specialist-card__desc">Specialist audit, annual returns and accountancy services designed specifically for town, city and parish councils across England and Wales.</div>
            <div class="bca-specialist-card__cta">Find out more<svg viewBox="0 0 12 12"><path d="M2 6h8M6 2l4 4-4 4"/></svg></div>
        </a>

        <a href="/services/rd-tax-relief/" class="bca-specialist-card reveal reveal-delay-4">
            <span class="bca-unique-badge">✦ BC&A Specialist</span>
            <div class="bca-specialist-card__icon"><svg viewBox="0 0 24 24"><path d="M9 3h6v10l3.5 6a1 1 0 01-.87 1.5H6.37a1 1 0 01-.87-1.5L9 13V3z"/><path d="M6.5 17h11"/></svg></div>
            <span class="bca-specialist-card__pill">Tax Relief</span>
            <div class="bca-specialist-card__title">R&amp;D Tax Credit Claims</div>
            <div class="bca-specialist-card__desc">Maximise your Research &amp; Development tax relief. We identify qualifying activity, prepare robust claims and manage HMRC enquiries on your behalf.</div>
            <div class="bca-specialist-card__cta">Find out more<svg viewBox="0 0 12 12"><path d="M2 6h8M6 2l4 4-4 4"/></svg></div>
        </a>

        <a href="/services/audit-services/" class="bca-specialist-card reveal reveal-delay-5">
            <span class="bca-unique-badge">✦ BC&A Specialist</span>
            <div class="bca-specialist-card__icon"><svg viewBox="0 0 24 24"><path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2"/><rect x="9" y="3" width="6" height="4" rx="1"/><path d="M9 12h6M9 16h4"/></svg></div>
            <span class="bca-specialist-card__pill">Compliance</span>
            <div class="bca-specialist-card__title">Audit Services</div>
            <div class="bca-specialist-card__desc">Statutory and voluntary audits conducted by ICAEW-registered audit practitioners — thorough, efficient, and completed with minimal disruption to your team.</div>
            <div class="bca-specialist-card__cta">Find out more<svg viewBox="0 0 12 12"><path d="M2 6h8M6 2l4 4-4 4"/></svg></div>
        </a>
    </div>
</section>

<!-- FOR BUSINESSES/INDIVIDUALS -->
<section class="bca-audience">
    <div class="container">
        <div class="bca-heading-section reveal">
            <div class="bca-heading-container">
                <div class="bca-heading__eyebrow">Dedicated Support Throughout Your Journey</div>
                <h2 class="bca-heading__title">Tailored Advice For Every <span>Client</span></h2>
                <div class="bca-heading__description">
                    <p>From growing businesses to private individuals, we provide practical, 
                        jargon-free advice that makes a real difference.</p>
                </div>
            </div>
        </div>

        <div class="bca-audience__grid">
            <div class="bca-audience-card reveal reveal-delay-1">
                <div class="bca-audience-card__icon">
                    <svg viewBox="0 0 24 24"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 21V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v16"/></svg>
                </div>
                <h3>For Businesses</h3>
                <p>Whether you're a start-up finding your feet or an established company planning for growth, we provide the financial clarity and strategic guidance to help you reach your goals.</p>
                <ul class="bca-audience-card__list">
                    <li><svg viewBox="0 0 16 16"><polyline points="2,8 6,12 14,4"/></svg>Accounts, tax &amp; bookkeeping</li>
                    <li><svg viewBox="0 0 16 16"><polyline points="2,8 6,12 14,4"/></svg>Payroll &amp; company secretarial</li>
                    <li><svg viewBox="0 0 16 16"><polyline points="2,8 6,12 14,4"/></svg>Virtual Finance Director services</li>
                    <li><svg viewBox="0 0 16 16"><polyline points="2,8 6,12 14,4"/></svg>R&amp;D tax relief &amp; mergers</li>
                </ul>
                <a href="/services/businesses/" class="bca-btn-primary">Explore Business Services<?php echo get_arrow_icon() ?></a>
            </div>
            <div class="bca-audience-card bca-audience-card--individuals reveal reveal-delay-2">
                <div class="bca-audience-card__icon">
                    <svg viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg>
                </div>
                <h3>For Individuals</h3>
                <p>From self-assessment to complex wealth planning, our personal tax team gives you the confidence that your finances are in expert hands — now and for the future.</p>
                <ul class="bca-audience-card__list">
                    <li><svg viewBox="0 0 16 16"><polyline points="2,8 6,12 14,4"/></svg>Self-assessment tax returns</li>
                    <li><svg viewBox="0 0 16 16"><polyline points="2,8 6,12 14,4"/></svg>Capital Gains Tax planning</li>
                    <li><svg viewBox="0 0 16 16"><polyline points="2,8 6,12 14,4"/></svg>Inheritance tax &amp; estate planning</li>
                    <li><svg viewBox="0 0 16 16"><polyline points="2,8 6,12 14,4"/></svg>Specialist wealth advisory</li>
                </ul>
                <a href="/services/individuals/" class="bca-btn-primary gold">Explore Individual Services<?php echo get_arrow_icon() ?></a>
            </div>
        </div>
    </div>
</section>

<!-- VIEW SECTORS  -->
<section class="bca-expand-card">
    <div class="container">
        <div class="bca-heading-section left-align reveal">
            <div class="bca-heading-container left-align">
                <div class="bca-heading__eyebrow">Industry Expertise</div>
                <h2 class="bca-heading__title">Sectors We <span>Specialise In</span></h2>
            </div>
            <a href="/sectors/" class="bca-heading__link">View all sectors<svg viewBox="0 0 16 16"><path d="M3 8h10M9 4l4 4-4 4"></path></svg></a>
        </div>
    </div>

    <div class="bca-expand-card__accordion reveal reveal-delay-1">
        <a href="/sectors/healthcare/" class="accordion-card">
            <img src="/wp-content/uploads/2026/04/medical.jpg" alt="Medical nurses" />
            <div class="accordion-card__overlay"></div>
            <div class="accordion-content">
                <h3>Healthcare</h3>
                <p>Financial advice for healthcare professionals.</p>
                <div class="accordion-card__read-more">Read More</div>
            </div>
        </a>
        <a href="/sectors/property-and-construction/" class="accordion-card">
            <img src="/wp-content/uploads/2026/03/property_construction.jpg" alt="Property Construction" />
            <div class="accordion-card__overlay"></div>
            <div class="accordion-content">
                <h3>Construction</h3>
                <p>Specialist accountancy support for contractors, developers, and construction businesses at every stage of growth.</p>
                <div class="accordion-card__read-more">Read More</div>
            </div>
        </a>
        <a href="/sectors/hospitality-tourism-leisure/" class="accordion-card">
            <img src="/wp-content/uploads/2026/02/hospitality.jpg" alt="Hopitality" />
            <div class="accordion-card__overlay"></div>
            <div class="accordion-content">
                <h3>Hopitality, Tourism & Leisure</h3>
                <p>Practical accounting and tax support for restaurants, hotels, cafés, and leisure businesses.</p>
                <div class="accordion-card__read-more">Read More</div>
            </div>
        </a>
        <a href="/sectors/retail/" class="accordion-card">
            <img src="/wp-content/uploads/2026/02/retail.jpg" alt="Retail" />
            <div class="accordion-card__overlay"></div>
            <div class="accordion-content">
                <h3>Retail</h3>
                <p>Strategic financial support for retailers looking to improve cash flow, profitability, and long-term growth.</p>
                <div class="accordion-card__read-more">Read More</div>
            </div>
        </a>
        <a href="/sectors/real-estate-landlords/" class="accordion-card">
            <img src="/wp-content/uploads/2026/03/real_estate_landlord.jpg" alt="Real Estate & Landlords" />
            <div class="accordion-card__overlay"></div>
            <div class="accordion-content">
                <h3>Real Estate & Landlords</h3>
                <p>Helping innovative businesses identify qualifying activity and maximise valuable R&D tax relief claims.</p>
                <div class="accordion-card__read-more">Read More</div>
            </div>
        </a>
        <a href="/sectors/motorsport/" class="accordion-card">
            <img src="/wp-content/uploads/2026/03/motorsport.jpg" alt="MotorSports" />
            <div class="accordion-card__overlay"></div>
            <div class="accordion-content">
                <h3>Motorsport</h3>
                <p>Commercial accountancy services designed for dealerships, garages, and automotive businesses.</p>
                <div class="accordion-card__read-more">Read More</div>
            </div>
        </a>
    </div>
</section>

<!-- WHY CHOOSE BC&A  -->
<section class="bca-why">
    <div class="container">
        <div class="bca-heading-section reveal">
            <div class="bca-heading-container">
                <div class="bca-heading__eyebrow">Why BC&A</div>
                <h2 class="bca-heading__title">Why <span>Choose</span> BC&A Chartered Accountants</h2>
                <div class="bca-heading__description">
                    <p>For more than three decades, we've has built trusted, long-term relationships 
                        across the business and private sectors.</p>
                </div>
            </div>
        </div>

        <div class="bca-why__grid">
            <div class="bca-why-card reveal">
                <div class="bca-why-card__num">01</div>
                <div class="bca-why-card__icon">
                    <svg viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg>
                </div>
                <h4>Long-Term Partnership</h4>
                <p>We invest in understanding your business deeply. Our clients stay with us for years because we treat their success as our own.</p>
            </div>

            <div class="bca-why-card reveal reveal-delay-1">
                <div class="bca-why-card__num">02</div>
                <div class="bca-why-card__icon"><svg viewBox="0 0 24 24"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg></div>
                <h4>Support At Every Stage</h4>
                <p>Whether you're just starting out or planning your exit, we provide the right advice at the right time — not just at year end.</p>
            </div>

            <div class="bca-why-card reveal reveal-delay-2">
                <div class="bca-why-card__num">03</div>
                <div class="bca-why-card__icon"><svg viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
                <h4>Proactive Risk &amp; Opportunity</h4>
                <p>We don't wait for problems to arise. We proactively identify risks and opportunities so you're always one step ahead.</p>
            </div>

            <div class="bca-why-card reveal reveal-delay-3">
                <div class="bca-why-card__num">04</div>
                <div class="bca-why-card__icon"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M12 8v4l3 3"/></svg></div>
                <h4>Expertise That Evolves</h4>
                <p>Tax law changes. Technology evolves. We stay at the forefront so you benefit from the latest reliefs, tools and strategies.</p>
            </div>

            <div class="bca-why-card reveal reveal-delay-4">
                <div class="bca-why-card__num">05</div>
                <div class="bca-why-card__icon">
                    <svg viewBox="0 0 24 24"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg>
                </div>
                <h4>Clear, Practical Advice</h4>
                <p>We cut through the jargon. You get straightforward, actionable advice you can actually use — delivered by people who care.</p>
            </div>

            <div class="bca-why-card reveal reveal-delay-5">
                <div class="bca-why-card__num">06</div>
                <div class="bca-why-card__icon">
                    <svg viewBox="0 0 24 24"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
                </div>
                <h4>Local Presence</h4>
                <p>Four Hampshire offices. You're never far from a real person who knows your name, your business, and your goals.</p>
            </div>
        </div>
    </div>
</section>

<!-- SOFTWARE PARTNERS -->
<section class="bca-software reveal">
    <div class="container">
        <div class="bca-software__inner">
            <span class="bca-software__label">Trusted Accounting<br/>Software Partners</span>
            <div class="bca-software__logos">
                <div class="bca-software-logo bca-software-logo--xero">
                    <img src="/wp-content/uploads/2026/03/Xero_gold_partner_logo.png">
                </div>
                <div class="bca-software-logo bca-software-logo--qb">
                    <img src="/wp-content/uploads/2026/03/quickbooks.svg">
                </div>
                <div class="bca-software-logo bca-software-logo--sage">
                    <img src="wp-content/uploads/2026/03/sage.svg">
                </div>
                <div class="bca-software-logo bca-software-logo--dext">
                    <img src="/wp-content/uploads/2026/03/dext.svg">
                </div>
                <div class="bca-software-logo bca-software-logo--freeagent">
                    <img src="/wp-content/uploads/2026/03/inform_direct.png">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- EXTENSION OF YOUR TEAM -->
<section class="bca-cta office">
    <div class="bca-cta__inner container">
        <div class="bca-cta__text reveal">
            <div class="bca-heading__eyebrow" aria-hidden="true">Our Offices</div>
            <h2 class="bca-heading__title">Acting As An Extension Of <span>Your Team</span></h2>        
            <div class="bca-cta__body">
                <p>
                    We work closely with you to understand your business, priorities and long-term goals. 
                    We provide clear communication, practical insight and dependable support that helps you move forward with confidence.
                </p>
                <p>
                    From our offices in <b>Portsmouth, Romsey and Swindon</b>, we support businesses and individuals 
                    with advice that is personal, responsive and built around lasting relationships.
                </p>
            </div>
            <div class="bca-cta__btns">
                <a href="/our-offices/" class="bca-btn-primary">Find Your Local Office<?php echo get_arrow_icon()?></a>
                <a href="/contact/" class="bca-btn-outline">Contact Us</a>
            </div>
        </div> 
        <div class="bca-cta__image reveal reveal-delay-1">
            <img src="/wp-content/uploads/2026/03/BCA_building.png" alt="BC&A Office Building" />
            <!-- Floating badge -->
            <div class="bca-cta__image-badge">
                <div class="bca-cta__image-badge-dot"></div>
                <span>35+ Years of Supporting Businesses & Individuals</span>
            </div>
        </div>
    </div>
</section>

<!-- SEE HOW BCA WE WORK -->
<?php echo do_shortcode('[bca_cta_about_us theme="dark"]'); ?>

<!-- TESTIMONIALS -->
<section class="bca-testimonials">
    <div class="container">
        <div class="bca-heading-section reveal">
            <div class="bca-heading-container">
                <div class="bca-heading__eyebrow">Client Stories</div>
                <h2 class="bca-heading__title">What Our <span>Clients</span> Say</h2>
                <div class="bca-heading__description">
                    <p>Don't just take our word for it — hear from the businesses and individuals we 
                        work with every day.</p>
                </div>
            </div>
        </div>

        <div class="bca-testimonials__grid reveal">
            <div class="bca-testimonial-card reveal reveal-delay-1">
                <div class="bca-testimonial-card__quote">"</div>
                <div class="bca-testimonial-card__stars">
                    <svg viewBox="0 0 16 16"><path d="M8 1l2.1 4.3L15 6.1l-3.5 3.4.8 4.8L8 12l-4.3 2.3.8-4.8L1 6.1l4.9-.8z"/></svg>
                    <svg viewBox="0 0 16 16"><path d="M8 1l2.1 4.3L15 6.1l-3.5 3.4.8 4.8L8 12l-4.3 2.3.8-4.8L1 6.1l4.9-.8z"/></svg>
                    <svg viewBox="0 0 16 16"><path d="M8 1l2.1 4.3L15 6.1l-3.5 3.4.8 4.8L8 12l-4.3 2.3.8-4.8L1 6.1l4.9-.8z"/></svg>
                    <svg viewBox="0 0 16 16"><path d="M8 1l2.1 4.3L15 6.1l-3.5 3.4.8 4.8L8 12l-4.3 2.3.8-4.8L1 6.1l4.9-.8z"/></svg>
                    <svg viewBox="0 0 16 16"><path d="M8 1l2.1 4.3L15 6.1l-3.5 3.4.8 4.8L8 12l-4.3 2.3.8-4.8L1 6.1l4.9-.8z"/></svg>
                </div>
                <p>
                    BC&A have been our accountants for over 10 years. The staff are very professional and polite, 
                    using the company I know that I’ll have no worries getting my tax returns sorted. 
                    I’ve recommended them to many friends and family members.
                </p>
                <div class="bca-testimonial-card__author">
                    <div class="bca-testimonial-card__avatar">SG</div>
                    <div>
                        <div class="bca-testimonial-card__name">Sanadi</div>
                        <div class="bca-testimonial-card__role">Business Owner, Portsmouth</div>
                    </div>
                </div>
            </div>

            <div class="bca-testimonial-card reveal reveal-delay-2">
                <div class="bca-testimonial-card__quote">"</div>
                <div class="bca-testimonial-card__stars">
                    <svg viewBox="0 0 16 16"><path d="M8 1l2.1 4.3L15 6.1l-3.5 3.4.8 4.8L8 12l-4.3 2.3.8-4.8L1 6.1l4.9-.8z"/></svg>
                    <svg viewBox="0 0 16 16"><path d="M8 1l2.1 4.3L15 6.1l-3.5 3.4.8 4.8L8 12l-4.3 2.3.8-4.8L1 6.1l4.9-.8z"/></svg>
                    <svg viewBox="0 0 16 16"><path d="M8 1l2.1 4.3L15 6.1l-3.5 3.4.8 4.8L8 12l-4.3 2.3.8-4.8L1 6.1l4.9-.8z"/></svg>
                    <svg viewBox="0 0 16 16"><path d="M8 1l2.1 4.3L15 6.1l-3.5 3.4.8 4.8L8 12l-4.3 2.3.8-4.8L1 6.1l4.9-.8z"/></svg>
                    <svg viewBox="0 0 16 16"><path d="M8 1l2.1 4.3L15 6.1l-3.5 3.4.8 4.8L8 12l-4.3 2.3.8-4.8L1 6.1l4.9-.8z"/></svg>
                </div>
                <p>Switching to BC&A was the best decision I made for my business. They identified tax savings I didn't know existed and have been incredibly responsive throughout.</p>
                <div class="bca-testimonial-card__author">
                    <div class="bca-testimonial-card__avatar" style="background:#0D1B3E;">LK</div>
                    <div>
                        <div class="bca-testimonial-card__name">Lydia K.</div>
                        <div class="bca-testimonial-card__role">Business Owner, Hampshire</div>
                    </div>
                </div>
            </div>

            <div class="bca-testimonial-card reveal reveal-delay-3">
                <div class="bca-testimonial-card__quote">"</div>
                <div class="bca-testimonial-card__stars">
                    <svg viewBox="0 0 16 16"><path d="M8 1l2.1 4.3L15 6.1l-3.5 3.4.8 4.8L8 12l-4.3 2.3.8-4.8L1 6.1l4.9-.8z"/></svg>
                    <svg viewBox="0 0 16 16"><path d="M8 1l2.1 4.3L15 6.1l-3.5 3.4.8 4.8L8 12l-4.3 2.3.8-4.8L1 6.1l4.9-.8z"/></svg>
                    <svg viewBox="0 0 16 16"><path d="M8 1l2.1 4.3L15 6.1l-3.5 3.4.8 4.8L8 12l-4.3 2.3.8-4.8L1 6.1l4.9-.8z"/></svg>
                    <svg viewBox="0 0 16 16"><path d="M8 1l2.1 4.3L15 6.1l-3.5 3.4.8 4.8L8 12l-4.3 2.3.8-4.8L1 6.1l4.9-.8z"/></svg>
                    <svg viewBox="0 0 16 16"><path d="M8 1l2.1 4.3L15 6.1l-3.5 3.4.8 4.8L8 12l-4.3 2.3.8-4.8L1 6.1l4.9-.8z"/></svg>
                </div>
                <p>
                    Over the past few months I have worked with Saifur to sort out some compliance issues and 
                    sort out this years tax returns. The team took on all of the issues that I was having and 
                    sorted it out brilliantly. Saifur’s communication is quick and he always answers every question 
                    I have. I would recommend BC&A to anyone looking for an accountant.
                </p>
                <div class="bca-testimonial-card__author">
                    <div class="bca-testimonial-card__avatar" style="background:#C9A84C; color:#0D1B3E;">MA</div>
                    <div>
                        <div class="bca-testimonial-card__name">Molly Ashton</div>
                        <div class="bca-testimonial-card__role">Owner, Retail Business</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- NEWS SHORTCODE -->
<section class="bca-news-shortcode">
    <div class="container">
        <div class="bca-heading-section left-align reveal">
            <div class="bca-heading-container left-align">
                <div class="bca-heading__eyebrow">Stay Informed</div>
                <h2 class="bca-heading__title">BC&A <span>Latest News</span></h2>
            </div>
            <a href="/about-us/news/" class="bca-heading__link">View all news<svg viewBox="0 0 16 16"><path d="M3 8h10M9 4l4 4-4 4"></path></svg></a>
        </div>
        <div class="reveal reveal-delay-1"><?php echo do_shortcode('[bca_mini_news_grid]') ?></div>
    </div>
</section>

<?php 
get_footer();
?>