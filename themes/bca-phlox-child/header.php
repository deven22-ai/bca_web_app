<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php 
    wp_body_open(); 
    $arrow = '<svg viewBox="0 0 16 16"><path d="M3 8H10M8.5 5.5L11 8L8.5 10.5"></path></svg>';
    $services = [
        [
            'name' => 'Accounting Solutions', 
            'is_specialist' => false,
            'link' => '/services/accounting-solutions/'
        ],
        [
            'name' => 'Accounting for Parish & City Councils',
            'is_specialist' => true,
            'link' => '/services/accounting-for-parish-city-councils/'
        ],
        [
            'name' => 'Accounting for Medical Professionals',
            'is_specialist' => true,
            'link' => '/sectors/healthcare/'
        ],
        [
            'name' => 'Audit Services',
            'is_specialist' => true,
            'link' => '/services/audit-services/'
        ],
        [
            'name' => 'Business Tax Services',
            'is_specialist' => false,
            'link' => '/services/business-tax/'
        ],
        [
            'name' => 'Payroll Services',
            'is_specialist' => false,
            'link' => '/services/payroll-services/'
        ],
        [
            'name' => 'R&D Tax Relief',
            'is_specialist' => true,
            'link' => '/services/rd-tax-relief/'
        ]
    ];

    $individual_services = [
        [
            'name' => 'Estate & Trust Planning',
            'link' => '/services/estate-and-trust-planning/'
        ],
        [
            'name' => 'Making Tax Digital (MTD)',
            'link' => '/services/making-tax-digital-mtd/'
        ],
        [
            'name' => 'Personal Tax Planning',
            'link' => '/services/personal-tax-planning/'
        ],
        [
            'name' => 'Personal Wealth Management',
            'link' => '/services/personal-wealth-management/'
        ],
        [
            'name' => 'Private Client Tax',
            'link' => '/services/private-client-tax/'
        ],
        [
            'name' => 'Property Tax Planning For Landlords & Investors',
            'link' => '/services/property-tax-planning-for-landlords-investors/'
        ],
        [
            'name' => 'Self-Assessment Tax Return',
            'link' => '/services/self-assessment-tax-return-service/'
        ]
    ];
?>

<div class="bca-nav-backdrop" id="nav-backdrop"></div>

<!-------------------------------
    TOP BAR
  ------------------------------>
<div class="bca-topbar" id="bca-topbar">
    <div class="bca-topbar__inner">
        <div class="bca-topbar__left">
            <a href="tel:02392833300" class="bca-topbar__item">
                <svg viewBox="0 0 24 24"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg>
                02392 833 300
            </a>
            <div class="bca-topbar__item-dot"></div>
            <a href="mailto:info@bcaaccountants.com" class="bca-topbar__item">
                <svg viewBox="0 0 24 24"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                info@bcaaccountants.com
            </a>
            <div class="bca-topbar__item-dot"></div>
            <span class="bca-topbar__item">
                <svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
                Mon-Fri: 9:00am - 5:00pm
            </span>
        </div>
        <div class="bca-topbar__right">
            <a href="/health-check/" class="bca-topbar__reg">Free Health Check</a>
           <!-- <span class="bca-topbar__badge">Portsmouth Since 2004</span> -->
        </div>
    </div>
</div>

<!-------------------------------
    MAIN HEADER
   ------------------------------>
<header class="bca-header" id="bca-header">
    <div class="bca-header__inner">
        <!-- Logo -->
        <a href="/" class="bca-header__logo" aria-label="BC&A Chartered Accountants — Home">
            <img src="/wp-content/uploads/2026/03/BCA_chartered_accountant_light.png" alt="BC&A Chartered Accountants logo">    
        </a>
        <!-- Desktop Nav -->
        <nav class="bca-nav" role="navigation" aria-label="Main navigation">
            <!-- Services — MEGA MENU -->
            <div class="bca-nav__item" id="services-item">
                <a class="bca-nav__link" aria-expanded="false" aria-haspopup="true">
                    Services
                    <svg class="bca-nav__chevron" viewBox="0 0 16 16"><polyline points="4,6 8,10 12,6"/></svg>
                </a>
                <div class="bca-mega" role="region" aria-label="Services menu">
                    <div class="bca-mega__inner">
                        <!-- Col 1: Businesses -->
                        <div class="bca-mega__col">
                            <div class="bca-mega__col-head">
                                <div class="bca-mega__col-icon bca-mega__col-icon--blue"><svg viewBox="0 0 24 24"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 21V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v16"/></svg></div>
                                <div>
                                    <div class="bca-mega__col-label">For Businesses</div>
                                    <div class="bca-mega__col-sublabel">20+ services for every stage</div>
                                </div>
                            </div>
                            <ul class="bca-mega__list">
                                <?php foreach($services as $service) : ?>
                                <li class="bca-mega__list-item <?php echo $service['is_specialist'] ? 'bca-mega__list-item--specialist"' : '' ?>">
                                    <a href="<?php echo $service['link'] ?>">
                                        <?php echo esc_html($service['name']); ?>    
                                        <svg viewBox="0 0 12 12"><path d="M2 6h8M6 2l4 4-4 4"/></svg>
                                        <?php echo $service['is_specialist'] ? '<span>BC&amp;A Specialist</span>' : '' ?>
                                    </a>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                            <a href="/services/businesses/" class="bca-mega__view-all">
                                View all business services
                                <svg viewBox="0 0 12 12"><path d="M2 6h8M6 2l4 4-4 4"/></svg>
                            </a>
                        </div>
                        
                        <!-- Col 2: Divider -->
                        <div class="bca-mega__col-divider"></div>

                        <!-- Col 3: Individuals -->
                        <div class="bca-mega__col">
                            <div class="bca-mega__col-head">
                                <div class="bca-mega__col-icon bca-mega__col-icon--gold"><svg viewBox="0 0 24 24"><path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"/><circle cx="12" cy="7" r="4"/></svg></div>
                                <div>
                                    <div class="bca-mega__col-label">For Individuals</div>
                                    <div class="bca-mega__col-sublabel">Personal tax &amp; financial planning</div>
                                </div>
                            </div>
                            <ul class="bca-mega__list">
                                <?php foreach($individual_services as $service) : ?>
                                <li class="bca-mega__list-item"><a href="<?php echo $service['link']; ?>"><?php echo $service['name']; ?> <svg viewBox="0 0 12 12"><path d="M2 6h8M6 2l4 4-4 4"/></svg></a></li>
                                <?php endforeach; ?>
                            </ul>
                            <a href="/services/individuals/" class="bca-mega__view-all">View all individual services<svg viewBox="0 0 12 12"><path d="M2 6h8M6 2l4 4-4 4"/></svg></a>
                        </div>

                        <!-- Col 3: CTA -->
                        <div class="bca-mega__col">
                            <div class="bca-mega__cta">
                                <div class="bca-mega__cta-eyebrow">No-obligation</div>
                                <h3>Not sure which service <em>you need?</em></h3>
                                <p>Speak to our team for a free initial conversation — we'll point you in the right direction.</p>
                                <a href="/contact/" class="bca-btn-primary">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sectors -->
            <div class="bca-nav__item"><a href="/sectors/" class="bca-nav__link">Sectors</a></div>

            <!-- Offices — dropdown -->
            <div class="bca-nav__item">
                <a class="bca-nav__link" aria-haspopup="true">
                    Offices<svg class="bca-nav__chevron" viewBox="0 0 16 16"><polyline points="4,6 8,10 12,6"/></svg>
                </a>
                <div class="bca-dropdown">
                    <a href="/offices/" class="bca-dropdown__item">
                        <svg viewBox="0 0 24 24">
                            <path d="M4 21V5C4 4.45 4.45 4 5 4H14C14.55 4 15 4.45 15 5V21"></path>
                            <path d="M15 9H19C19.55 9 20 9.45 20 10V21"></path>
                            <path d="M9 8H10"></path>
                            <path d="M9 12H10"></path>
                            <path d="M9 16H10"></path>
                            <path d="M12 8H13"></path>
                            <path d="M12 12H13"></path>
                            <path d="M12 16H13"></path>
                            <path d="M2 21H22"></path>
                        </svg>
                        All Offices
                    </a>
                    <a href="/offices/portsmouth/" class="bca-dropdown__item">
                        <svg viewBox="0 0 24 24"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
                        Portsmouth — Head Office
                    </a>
                    <a href="/offices/romsey/" class="bca-dropdown__item">
                        <svg viewBox="0 0 24 24"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
                        Romsey — Two Practices
                    </a>
                    <a href="/offices/swindon/" class="bca-dropdown__item">
                        <svg viewBox="0 0 24 24"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
                        Swindon
                    </a>
                </div>
            </div>

            <!-- About Us — dropdown -->
            <div class="bca-nav__item">
                <a class="bca-nav__link" aria-haspopup="true">
                    About Us
                    <svg class="bca-nav__chevron" viewBox="0 0 16 16"><polyline points="4,6 8,10 12,6"/></svg>  
                </a>
                <div class="bca-dropdown">
                    <a href="/about/" class="bca-dropdown__item">
                        <svg viewBox="0 0 24 24"><circle cx="12" cy="8" r="4"/><path d="M4 20c0-4 3.6-7 8-7s8 3 8 7"/></svg>
                        About BC&A
                    </a>
                    <a href="/our-team/" class="bca-dropdown__item">
                        <svg viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg>
                        Our Team
                    </a>
                    <a href="/community/" class="bca-dropdown__item">
                        <svg viewBox="0 0 24 24"><path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"/></svg>
                        In the Community
                    </a>
                    <a href="/about-us/become-client/" class="bca-dropdown__item">
                        <svg viewBox="0 0 24 24" fill="none"><circle cx="10" cy="8" r="3" stroke="currentColor" stroke-width="2"></circle><path d="M4 20c0-3 3-5 6-5s6 2 6 5" stroke="currentColor" stroke-width="2" stroke-linecap="round"></path><path d="M19 8v4M17 10h4" stroke="currentColor" stroke-width="2" stroke-linecap="round"></path></svg>
                        Become a Client
                    </a>
                    <a href="/contact/?section=careers" class="bca-dropdown__item">
                        <svg viewBox="0 0 24 24"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect><path d="M16 7V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v2"></path><line x1="12" y1="12" x2="12" y2="12"></line><path d="M2 12h20"></path></svg>
                        Careers
                    </a>
                    <a href="/about-us/news/" class="bca-dropdown__item">
                        <svg viewBox="0 0 24 24"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/></svg>
                        News &amp; Updates
                    </a>
                </div>
            </div>

            <!-- Contact Us -->
            <div class="bca-nav__item"><a href="/contact/" class="bca-nav__link">Contact Us</a></div>

            <!-- File Upload -->
            <div class="bca-nav__item"><a href="/file-upload/" class="bca-nav__link">File Upload</a></div>
        </nav>

        <!-- Actions -->
        <div class="bca-header__actions">
            <!-- Search -->
            <a class="bca-header__icon-btn" id="search-btn" aria-label="Search">
                <svg viewBox="0 0 24 24"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
            </a>
            <!-- Quote button -->
            <a href="/request-quote/" class="bca-header__quote-btn"><span>Get Free Quote</span><?php echo get_arrow_icon() ?></a>
            <!-- Mobile hamburger -->
            <a class="bca-hamburger" id="hamburger-btn" aria-label="Menu" aria-expanded="false"><span></span><span></span><span></span></a>
        </div>
    </div>
</header>

<!-------------------------------
    SEARCH OVERLAY
   ------------------------------>
<div class="bca-search-overlay" id="search-overlay" role="dialog" aria-label="Search">
    <div class="bca-search-overlay__inner">
        <span class="bca-search-overlay__label">Search BC&A</span>
        <div class="bca-search-overlay__input-wrap">
            <svg class="bca-search-overlay__icon" viewBox="0 0 24 24"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
            <input type="search" class="bca-search-overlay__input" id="search-input" placeholder="Search services, sectors, news…" autocomplete="off"/>
            <button class="bca-search-overlay__close" id="search-close">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
                Close
            </button>
        </div>
        <p class="bca-search-overlay__hint">Press Esc to close</p>
    </div>
</div>


<!-------------------------------
    MOBILE MENU
   ------------------------------>
<div class="bca-mobile-menu" id="mobile-menu" role="dialog" aria-label="Mobile navigation">
    <ul class="bca-mobile-nav">
        <li class="bca-mobile-nav__item"><a href="/" class="bca-mobile-nav__link">Home</a></li>
        <li class="bca-mobile-nav__item" id="mob-services">
            <div class="bca-mobile-nav__link">
                Services
                <svg viewBox="0 0 16 16"><polyline points="6,4 10,8 6,12"/></svg>
            </div>
            <div class="bca-mobile-sub">
                <div class="bca-mobile-sub__section">
                    <span class="bca-mobile-sub__section-label">For Businesses</span>
                    <?php foreach($services as $service) : ?>
                    <a href="<?php echo $service['link'] ?>" class="bca-mobile-sub__link"><?php echo esc_html($service['name']); ?></a>
                    <?php endforeach; ?>
                    <a href="/services/businesses/" class="bca-mobile-sub__link" style="color:var(--bca-secondary);">View all business services →</a>
                </div>
                <div class="bca-mobile-sub__section">
                    <span class="bca-mobile-sub__section-label">For Individuals</span>
                    <?php foreach($individual_services as $service) : ?>
                    <a href="<?php echo $service['link'] ?>" class="bca-mobile-sub__link"><?php echo esc_html($service['name']); ?></a>
                    <?php endforeach; ?>
                    <a href="/services/individuals/" class="bca-mobile-sub__link" style="color:var(--bca-secondary);">View all individual services →</a>
                </div>
            </div>
        </li>
        <li class="bca-mobile-nav__item"><a href="/sectors/" class="bca-mobile-nav__link">Sectors</a></li>
        <li class="bca-mobile-nav__item" id="mob-offices">
            <div class="bca-mobile-nav__link">
                Offices
                <svg viewBox="0 0 16 16"><polyline points="6,4 10,8 6,12"/></svg>
            </div>
            <div class="bca-mobile-sub">
                <div class="bca-mobile-sub__section">
                    <a href="/offices/" class="bca-mobile-sub__link">All Offices</a>
                    <a href="/offices/portsmouth/" class="bca-mobile-sub__link">Portsmouth — Head Office</a>
                    <a href="/offices/romsey/" class="bca-mobile-sub__link">Romsey — Two Practices</a>
                    <a href="/offices/swindon/" class="bca-mobile-sub__link">Swindon</a>
                </div>
            </div>
        </li>
        <li class="bca-mobile-nav__item" id="mob-about">
            <div class="bca-mobile-nav__link">
                About Us
                <svg viewBox="0 0 16 16"><polyline points="6,4 10,8 6,12"/></svg>
            </div>
            <div class="bca-mobile-sub">
                <div class="bca-mobile-sub__section">
                    <a href="/about-us/" class="bca-mobile-sub__link">About BC&A</a>
                    <a href="/about-us/our-team/" class="bca-mobile-sub__link">Our Team</a>
                    <a href="/about-us/community/" class="bca-mobile-sub__link">In the Community</a>
                    <a href="/about-us/become-client/" class="bca-mobile-sub__link">Become a client</a>
                    <a href="/contact/?section=careers" class="bca-mobile-sub__link">Careers</a>
                    <a href="/about-us/news/" class="bca-mobile-sub__link">News &amp; Updates</a>
                </div>
            </div>
        </li>

        <li class="bca-mobile-nav__item"><a href="/contact/" class="bca-mobile-nav__link">Contact Us</a></li>
        <li class="bca-mobile-nav__item"><a href="/file-upload/" class="bca-mobile-nav__link">File Upload</a></li>
    </ul>

    <div class="bca-mobile-actions">
        <a href="/request-quote/" class="bca-btn-primary">Get a Free Quote<svg viewBox="0 0 16 16"><path d="M3 8h10M9 4l4 4-4 4"/></svg></a>
        <a href="/health-check/" class="bca-btn-primary gold">Book a Free Health Check<svg viewBox="0 0 16 16"><path d="M3 8h10M9 4l4 4-4 4"/></svg></a>
        <a href="tel:02392833300" class="bca-mobile-actions__outline">
            <svg viewBox="0 0 24 24"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg>
            02392 833 300
        </a>
    </div>
</div>
