<?php
$category = get_query_var('bca_service_category'); // Get the category slug from the URL
/* Dynamic page title based on service category */
add_filter('pre_get_document_title', function() use ($category) {
    $labels = [
        'businesses' => 'Services for Businesses',
        'individuals' => 'Services for Individuals',
    ];
    $page_title = $labels[$category] ?? ucfirst($category) . ' Services';
    return $page_title . ' | BC&A Chartered Accountants';
});

get_header();
wp_enqueue_style('services-style');

/* Query services based on category */
$args = array(
    'post_type'      => 'services',
    'posts_per_page' => -1,
    'tax_query'      => array(array(
        'taxonomy' => 'service_type',
        'field'    => 'slug',
        'terms'    => $category,
    )),
    'orderby'        => 'title',
    'order'          => 'ASC'
);
$services = new WP_Query($args);

/* Page Content */
$altPage = 'Individuals';
$hero_title = 'Supporting Your Business <br><em>At Every Stage</em>';
$hero_desc  = 'At BC&A, we support businesses from start-up to established enterprise — combining strategic insight with robust compliance services to deliver tailored solutions that drive sustainable growth.';
$intro_eyebrow = 'Business Services';
$intro_title = 'One firm. Everything <em>your business needs.</em>';
$intro_description = 'From day-to-day compliance to high-level strategic planning, BC&A provides a complete range of accountancy, tax and advisory services designed to support your business at every stage of its journey.';
$services_cta_title = 'Services for <em>Individuals</em>';
$services_cta_desc = 'From personal tax and self-assessment to wealth management and estate planning — BC&A also provides a full range of specialist services for private clients.';
if($category === 'individuals') {
    $hero_title = 'Supporting Your Personal <em>Financial Growth</em>';
    $hero_desc = 'Our personal advisory services help you manage and plan your finances with clarity and confidence. From tax planning & wealth management to inheritance advice, we provide tailored guidance to support your long-term financial goals.';

    $intro_eyebrow = 'Personal Services';
    $intro_title = 'Your Personal <em>Finance Support</em>';
    $intro_description = 'From straightforward tax returns to complex wealth and estate planning, BC&A offers a comprehensive range of personal ' .
                        'accountancy and advisory services to support you at every stage of life.';

    $services_cta_title = 'Services for <em>Businesses</em>';
    $services_cta_desc = 'BC&A offers a wide range of general and specialised accounting services to suit everyone from small businesses to large organisations and groups.';                        
}

?>

<!-- HERO SECTION -->
<div class="bca-hero-section <?php echo $category ?>">
    <div class="bca-hero__overlay"></div>
    <section class="bca-hero container transparent-header">
        <div class="bca-hero__content">
            <div class="bca-hero__eyebrow reveal">
                <p><strong><span>Services for <?php echo ucfirst($category); ?></span></strong></p>
            </div>
            <div class="bca-hero__head-wrapper">
                <h1 class="bca-hero__title reveal reveal-delay-1"><?php echo $hero_title ?></h1>
                <p class="bca-hero__text reveal reveal-delay-2"><?php echo $hero_desc ?></p>
            </div>
            <div class="bca-hero__btns reveal reveal-delay-4">
                <a href="#services" class="bca-btn-primary">Explore Our <?php echo ucfirst($category) ?> Services <?php echo get_arrow_icon(); ?></a>
                <a href="/request-quote/" class="bca-btn-ghost">Get a Free Quote</a>
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
                    Tailored to your <?php echo ($category != 'individuals') ? 'business' : ''?> needs
                </span>
                <span class="bca-hero__bottom-item">
                    <svg viewBox="0 0 16 16"><path d="M2 4h12v8a1 1 0 01-1 1H3a1 1 0 01-1-1V4z"></path><path d="M2 4l6 5 6-5"></path></svg>
                    Response within 24 hours
                </span>
                <span class="bca-hero__bottom-item">
                    <svg viewBox="0 0 16 16"><path d="M8 1v6l4 2"></path><circle cx="8" cy="8" r="7"></circle></svg>
                    Fixed fees — no surprises
                </span>
            </div>
        </div>
    </section>
</div>

<!--INTRODUCTION SECTION-->
<section class="bca-intro">
    <div class="container">
        <div class="bca-intro__grid">
            <div class="bca-heading-section left-align reveal">
                <div class="bca-heading-container">
                    <div class="bca-heading__eyebrow"><?php echo $intro_eyebrow ?></div>
                    <h2 class="bca-heading__title"><?php echo $intro_title ?></h2>
                    <div class="bca-heading__description">
                        <p><?php echo $intro_description ?></p>
                    </div>
                </div>
            </div>
            <div class="bca-intro__stats reveal reveal-delay-1">
                <div class="bca-intro__stat"><div class="bca-intro__stat-num">20<span>+</span></div><div class="bca-intro__stat-label">Business services available</div></div>
                <div class="bca-intro__stat"><div class="bca-intro__stat-num">20<span>+</span></div><div class="bca-intro__stat-label">Industry sectors served</div></div>
                <div class="bca-intro__stat"><div class="bca-intro__stat-num">4000<span>+</span></div><div class="bca-intro__stat-label">Happy Clients</div></div>
                <div class="bca-intro__stat"><div class="bca-intro__stat-num">98<span>%</span></div><div class="bca-intro__stat-label">Client retention rate</div></div>
            </div>
        </div>
    </div>
</section>

<section class="bca-services-list" id="services">
    <div class="container">
        <div class="bca-heading-section reveal">
            <div class="bca-heading-container">
                <div class="bca-heading__eyebrow">What We Offer</div>
                <h2 class="bca-heading__title">Our services <span>for <?php echo ucfirst($category); ?></span></h2>
                <div class="bca-heading__description"><p>Click any service to find out more about how we can help you and your business grow.</p></div>
            </div>
        </div>

        <?php if ($services->have_posts()) : ?>
        <div class="bca-svc-grid">
            <?php while ($services->have_posts()) : 
                $services->the_post();
                $isSpecialistService = (int) get_field('is_specialist_service') === 1;
                ?>
                <a href="<?php the_permalink(); ?>" class="bca-svc-card <?php echo $isSpecialistService ? 'bca-svc-card--specialist' : ''; ?> reveal reveal-delay-1">
                    <div class="bca-svc-card__img">
                        <?php if (has_post_thumbnail()) {
                            the_post_thumbnail('medium_large');
                        } else { ?>
                            <img style="background: var(--img-placeholder);" alt="<?php the_title(); ?>">
                        <?php } ?>
                        <?php if ($isSpecialistService) : ?>
                            <div class="bca-svc-card__specialist">✦ BC&amp;A Specialist</div>
                        <?php endif; ?>
                    </div>
                    <div class="bca-svc-card__body">
                        <div class="bca-svc-card__title"><?php the_title(); ?></div>
                        <div class="bca-svc-card__desc"><?php echo wp_trim_words(get_field('description', get_the_ID()), 20, '...'); ?></div>
                        <div class="bca-svc-card__foot">
                            <span class="bca-svc-card__link">Find out more <svg viewBox="0 0 12 12"><path d="M2 6h8M6 2l4 4-4 4"></path></svg></span>
                        </div>
                    </div>
                </a>
            <?php endwhile; wp_reset_postdata(); ?>
        </div>
        <?php else : ?>
        <p>No services found in this category.</p>
        <?php endif; ?>
    </div>
</section>

<!-- CTA SECTION -->
<section class="bca-cta bca-cta-var2 dark">
    <div class="container">
        <div class="bca-cta-var2__inner reveal">
            <div class="bca-cta-var2__text">
                <span class="bca-heading__eyebrow">Also available</span>
                <h2><?php echo $services_cta_title; ?></h2>
                <p><?php echo $services_cta_desc ?></p>
            </div>
            <div class="bca-cta__btns">
                <a href="/services/<?php echo ($category === 'businesses') ? 'individuals' : 'businesses' ?>/" class="bca-btn-primary">
                    View <?php echo ($category === 'businesses') ? 'Individual' : 'Business' ?> Services<svg viewBox="0 0 16 16"><path d="M3 8H10M8.5 5.5L11 8L8.5 10.5"></path></svg>
                </a>
                <a href="/contact/" class="bca-btn-ghost">Get in Touch</a>
            </div>
        </div>
    </div>
</section>

<?php 
echo do_shortcode('[bca_cta_sector]');
get_footer(); 
?>
