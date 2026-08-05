<?php 
get_header(); 
wp_enqueue_style('services-style'); 
?>

<?php if (have_posts()) : 
    while (have_posts()) : 
        the_post(); 
        $service_type_slug = ''; $service_type_name = '';
        $service_types = get_the_terms(get_the_ID(), 'service_type');
        if(!empty($service_types) && !is_wp_error($service_types)) {
            $service_type_slug = $service_types[0]->slug /*. "?section=services"*/;
            $service_type_name = $service_types[0]->name;
        }
        ?>

<!-- HERO SECTION -->
<div class="bca-hero-section" style="background-image: url(<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium large'); ?>);">
    <div class="bca-hero__overlay"></div>
    <section class="bca-hero container transparent-header">
        <div class="bca-hero__content">
            <div class="bca-hero__eyebrow reveal">
                <p style="display: flex; gap: 10px;">
                    <strong><span><?php echo get_field('eyebrow') ?></span></strong>
                    <?php if((int)get_field('is_specialist_service') === 1) : ?>
                    <span class="bca-hero__badge">✦ BC&amp;A Specialist</span>
                    <?php endif; ?>
                </p>
            </div>
            <div class="bca-hero__head-wrapper">
                <h1 class="bca-hero__title reveal reveal-delay-1"><?php echo get_field('hero_title') ?></h1>
                <p class="bca-hero__text reveal reveal-delay-2"><?php echo get_field('hero_description'); ?></p>
            </div>
        </div>
        <div class="bca-hero__btns reveal reveal-delay-4">
            <a href="#enquire" class="bca-btn-primary">Enquire About This Service</a>
            <a href="/services/<?php echo $service_type_slug ?>" class="bca-btn-ghost">All <?php echo $service_type_name ?> Services</a>
        </div>
    </section>
</div>

<!-- Main Content -->
<section class="bca-main">
    <div class="container">
        <div class="bca-main__inner">
            <!-- Left: content -->
            <div class="bca-content">
                <?php if(get_field('custom_service_starter') != ''): ?>
                <div class="bca-custom__starter reveal">
                    <?php echo get_field('custom_service_starter'); ?>
                </div>
                <?php endif; ?>
                <div class="bca-content__overview reveal">
                    <span class="bca-heading__eyebrow"><?php echo get_field('overview_eyebrow'); ?></span>
                    <h2><?php echo get_field('overview_heading'); ?></h2>
                    <div><?php echo get_field('overview_desc'); ?></div>
                </div>
                
                <?php if(get_field('checklist_items') != ''): ?>
                <!-- CheckList Grid -->
                <div class="bca-checklist-grid reveal reveal-delay-1">
                    <div class="bca-checklist__head">
                        <svg viewBox="0 0 24 24"><path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2"></path><rect x="9" y="3" width="6" height="4" rx="1"></rect><path d="M9 12h6M9 16h4"></path></svg>
                        <h3><?php echo get_field('checklist_title') ?></h3>
                    </div>
                    <div class="bca-checklist__body">
                        <ul class="bca-checklist__list"><?php echo get_field('checklist_items') ?></ul>
                    </div>
                </div>
                <?php endif; ?>
                
                <?php if(get_field('html_content') != ''): ?>
                <!-- Content HTML -->
                <div class="bca-content__html reveal reveal-delay-1"><?php echo get_field('html_content') ?></div>
                <?php endif; ?>
                
                <!-- FAQ -->
                <?php if((int) get_field('is_faq_enabled') === 1) : ?>
                <div class="bca-svc-faq reveal reveal-delay-1">
                    <h2><?php echo get_field('faq_title'); ?></h2>
                    <div class="bca-faq-list drop-shadow reveal reveal-delay-1">
                    <?php 
                    $raw_faqs = get_field('faq');
                    if($raw_faqs) {
                        // Split into individual Q&A blocks by '===' 
                        $blocks = array_filter(array_map('trim', explode("===", $raw_faqs)));
                        $i = 0;
                        foreach($blocks as $block) {
                            $lines    = explode("\n", $block);
                            $question = isset($lines[0]) ? trim(preg_replace('/^Q:\s*/i', '', $lines[0])) : '';
                            $answer   = isset($lines[1]) ? trim(preg_replace('/^A:\s*/i', '', $lines[1])) : '';

                            if( !$question || !$answer ) continue;
                            ?>
                            <div class="bca-faq__item <?php echo $i === 0 ? 'open' : ''; ?>">
                                <div class="bca-faq__question" aria-expanded="<?php echo $i === 0 ? 'true' : 'false'; ?>">
                                    <?php echo esc_html($question); ?>
                                    <span class="bca-faq__chevron">
                                        <svg viewBox="0 0 12 12"><polyline points="2,4 6,8 10,4"/></svg>
                                    </span>
                                </div>
                                <div class="bca-faq__answer">
                                    <div class="bca-faq__answer-inner">
                                        <?php echo esc_html($answer); ?>
                                    </div>
                                </div>
                            </div>
                            <?php
                            $i++;
                        }
                    }
                    ?>
                    </div>
                </div>
                <?php endif; ?>

                <!-- WHY CHOOSE BCA -->
                <div class="bca-why-service reveal reveal-delay-1">
                    <h2>Why choose BC&A for <em><?php echo esc_html(get_the_title()); ?></em></h2>
                    <p style="font-size:15px;line-height:1.8;color:var(--muted);margin-bottom:0;">We do more than keep your books in order. Our approach is proactive — we review your numbers regularly, flag opportunities and ensure you are always ahead of deadlines.</p>

                    <div class="bca-why-cards">
                        <div class="bca-why-card">
                            <div class="bca-why-card__icon"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></div>
                            <div>
                                <h4>Always ahead of deadlines</h4>
                                <p>We prepare and submit all accounts and filings well ahead of every deadline — you will never face a penalty with BC&A.</p>
                            </div>
                        </div>
                        <div class="bca-why-card">
                            <div class="bca-why-card__icon"><svg viewBox="0 0 24 24"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg></div>
                            <div>
                                <h4>Real-time visibility</h4>
                                <p>Cloud accounting means your numbers are always current — giving you the clarity to make faster, better business decisions.</p>
                            </div>
                        </div>
                        <div class="bca-why-card">
                            <div class="bca-why-card__icon"><svg viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path d="M9 12l2 2 4-4"/></svg></div>
                            <div>
                                <h4>Fixed fees — no surprises</h4>
                                <p>We agree fees upfront before any work begins. No hourly billing, no unexpected invoices — just clear, transparent pricing.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right: sidebar -->
            <aside class="bca-contact-sidebar" id="enquire">
                <!-- Enquiry form -->
                <div class="bca-sidebar-card reveal">
                    <div class="bca-sidebar-card__head"><h3>Enquire about this service</h3></div>
                    <div class="bca-sidebar-card__body"><?php echo do_shortcode('[contact-form-7 id="36c5fa4"]') ?></div>
                </div>

                <!-- Speak to the Team -->
                <div class="bca-sidebar-card reveal-delay-1">
                    <div class="bca-sidebar-card__head"><h3>Speak to the Team</h3></div>
                    <div class="bca-sidebar-card__body">
                        <div class="bca-sidebar-item">
                            <div class="bca-sidebar-item__icon"><svg viewBox="0 0 24 24"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"></path><circle cx="12" cy="10" r="3"></circle></svg></div>
                            <div>
                                <div class="bca-sidebar-item__label">Our Head Office - Portsmouth</div>
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

                <!-- Trust card 
                <div class="bca-sidebar-card bca-sidebar-card--dark reveal-delay-2">
                    <div class="bca-sidebar-card__head"><h3>Why BC&amp;A?</h3></div>
                    <div class="bca-sidebar-card__body">
                        <ul class="bca-why-list">
                            <li><svg viewBox="0 0 16 16"><polyline points="2,8 6,12 14,4"></polyline></svg>Fixed fees — agreed upfront</li>
                            <li><svg viewBox="0 0 16 16"><polyline points="2,8 6,12 14,4"></polyline></svg>Response within one business day</li>
                            <li><svg viewBox="0 0 16 16"><polyline points="2,8 6,12 14,4"></polyline></svg>ICAEW &amp; CIMA regulated</li>
                            <li><svg viewBox="0 0 16 16"><polyline points="2,8 6,12 14,4"></polyline></svg>Named adviser — always someone who knows your business</li>
                            <li><svg viewBox="0 0 16 16"><polyline points="2,8 6,12 14,4"></polyline></svg>3 offices — Portsmouth, Romsey &amp; Swindon</li>
                        </ul>
                    </div>
                </div>
                -->
            </aside>
        </div>
    </div>
</section>

<!-- CTA: GET IN TOUCH -->
<section class="bca-cta bca-cta-var2 dark">
    <div class="container">
        <div class="bca-cta-var2__inner reveal">
            <div class="bca-cta-var2__text">
                <span class="bca-heading__eyebrow">Ready to get started?</span>
                <h2>Let's talk about your <em>accounting needs</em></h2>
                <p>Speak to our team today for a no-obligation conversation about how BC&A can support your business. We'll recommend the right services for your situation.</p>
            </div>
            <div class="bca-cta__btns">
                <a href="/contact/" class="bca-btn-primary">Contact Us<svg viewBox="0 0 16 16"><path d="M3 8H10M8.5 5.5L11 8L8.5 10.5"></path></svg></a>
                <a href="/request-quote/" class="bca-btn-ghost">Get a Free Quote</a>
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
<?php endwhile; endif; ?>

<?php get_footer(); ?>

<script>
    var checklistItems = document.querySelectorAll('.bca-checklist__list li');
    checklistItems.forEach(item => {
        const svg = `<svg viewBox="0 0 16 16"><polyline points="2,8 6,12 14,4"/></svg>`;
        item.insertAdjacentHTML('afterbegin', svg);
    });
</script>