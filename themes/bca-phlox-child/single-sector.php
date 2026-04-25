<?php 
get_header(); 
wp_enqueue_style('sector-style');

/* Get all the sectors query */
$query = new WP_Query(array(
    'post_type'      => 'sector',
    'posts_per_page' => -1,
    'post_status'    => 'publish',
    'orderby'        => 'title',
    'order'          => 'ASC'
));

if (have_posts()) {
    while (have_posts()) {
        the_post(); 
        $img_url = get_field('services_image');
        ?>

        <!-- HERO -->
        <div class="bca-hero-section" style="background-image: url('<?php echo get_the_post_thumbnail_url(get_the_ID(), 'large')?>');">
            <div class="bca-hero__overlay"></div>
            <section class="bca-hero container transparent-header">
                <div class="bca-hero__content">
                    <div class="bca-hero__eyebrow reveal">
                        <p><strong><span><?php the_title(); ?></span></strong></p>
                    </div>
                    <div class="bca-hero__head-wrapper">
                        <h1 class="bca-hero__title reveal reveal-delay-1"><?php echo get_field('hero_title'); ?></h1>
                        <p class="bca-hero__text reveal reveal-delay-1"><?php echo get_field('hero_description'); ?></p>
                    </div>
                </div>
            </section>
        </div>

        <!-- Main Content -->
        <main>
            <?php if((int) get_field('show_intro_section') === 1) : ?>
            <!-- ══ OVERVIEW ═════════════════════════ -->
            <section class="bca-intro-grid-section" style="background: none;">
                <div class="container">
                    <div class="bca-intro-grid__left">
                        <span class="bca-section__eyebrow reveal">Our Expertise</span>
                        <h2 class="bca-section__title reveal reveal-delay-1"><?php echo get_field('intro_heading'); ?></h2>
                        <div class="bca-section__text reveal reveal-delay-2"><?php echo get_field('intro_description'); ?></div>
                    </div>
                </div>
            </section>
            <?php endif; ?>

            <!-- ══ WHAT WE CAN PROVIDE ═════════════════ -->
            <section class="bca-sector-services">
                <div class="container">
                    <div class="<?php echo $img_url != '' ? 'bca-sector-services__inner reveal' : '' ?>">
                        <?php if ($img_url != '') : ?>
                        <div class="bca-sector-services__image-wrap drop-shadow">
                            <img src="<?php echo $img_url ?>" alt=""/>
                        </div>
                        <?php endif; ?>
                        <div class="bca-sector-services__right reveal reveal-delay-1">
                            <span class="bca-section__eyebrow"><?php echo get_field('services_title'); ?></span>
                            <h2 class="bca-section__title"><?php echo get_field('services_heading'); ?></h2>

                            <div class="bca-section__text">
                                <?php echo get_field('services_description'); ?>
                                <ul class="services-checklist"><?php echo get_field('services_list') ?></ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
                            
            <?php if((int) get_field('show_why_bca_section') === 1) : ?>
            <!-- ══ WHY CHOOSE BC&A ═════════════════ -->
            <section class="bca-sector-why">
                <div class="container">
                    <div class="bca-heading-section reveal">
                        <div class="bca-heading-container">
                            <span class="bca-section__eyebrow">Why Choose BC&A</span>
                            <h2 class="bca-heading__title">A <em>Specialist Team</em> you can trust</h2>
                            <div class="bca-heading__description">
                                <p>Most firms don't offer this service. We've built a dedicated team around it.</p>
                            </div>
                        </div>
                    </div>
                    <div class="bca-sector-why__grid">
                        <div class="bca-sector-why__card reveal reveal-delay-1">
                            <div class="bca-sector-why__icon">
                                <svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
                            </div>
                            <div class="bca-sector-why__title">35+ Years Experience</div>
                            <div class="bca-sector-why__desc">Supporting over 200+ local councils and public sector bodies.</div>
                        </div>
                        <div class="bca-sector-why__card reveal reveal-delay-2">
                            <div class="bca-sector-why__icon">
                                <svg viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg>
                            </div>
                            <div class="bca-sector-why__title">Dedicated Specialist Team</div>
                            <div class="bca-sector-why__desc">Not a side service. A full team focused entirely on this sector.</div>
                        </div>
                        <div class="bca-sector-why__card reveal reveal-delay-3">
                            <div class="bca-sector-why__icon">
                                <svg viewBox="0 0 24 24"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
                            </div>
                            <div class="bca-sector-why__title">Nationwide Coverage</div>
                            <div class="bca-sector-why__desc">Serving clients across the UK, not just the South of England.</div>
                        </div>
                        <div class="bca-sector-why__card reveal reveal-delay-4">
                            <div class="bca-sector-why__icon">
                                <svg viewBox="0 0 24 24"><path d="M9 12l2 2 4-4"/><path d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            </div>
                            <div class="bca-sector-why__title">Fixed Fees, No Surprises</div>
                            <div class="bca-sector-why__desc">Transparent pricing agreed upfront. No hidden extras.</div>
                        </div>
                    </div>
                </div>
            </section>
            <?php endif; ?>
            
            <!-- ══ FAQ ═════════════════ -->
            <?php if((int) get_field('show_faq') === 1) : ?>
            <section class="bca-faq">
                <div class="container">
                    <div class="bca-faq__inner">
                        <div class="bca-faq__inner-left reveal">
                            <span class="bca-section__eyebrow">FAQs</span>
                            <h2 class="bca-section__title"><?php echo get_field('faq_heading') ?></h2>
                            <p>Can't find what you're looking for? Our team is always happy to have a 
                                no-obligation conversation.
                            </p>
                            <div class="btn-wrapper"><a href="/contact/" class="bca-btn-primary">Speak To An Adviser<?php echo get_arrow_icon() ?></a></div>
                        </div>
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
                </div>
            </section>
            <?php endif; ?>
        </main>
        <?php
    } 
} 
?>

<!-- Explore more sectors -->
<?php if ($query->have_posts()): ?>
<section class="bca-explore">
    <div class="bca-explore__header reveal">
        <div>
            <span class="bca-section__eyebrow" style="color: var(--bca-text-desc);">Our sectors</span>
            <h2 class="bca-explore__title">Also explore these sectors</h2>
        </div>
    </div>    
 
    <!------ Sector Row ---------->
    <div class="bca-explore__row reveal reveal-delay-1">
        <div class="bca-explore__track" id="row1">
            <?php while($query->have_posts()) :  $query->the_post(); ?>
            <a href="<?php the_permalink(); ?>" class="bca-sector-card">
                <img class="bca-sector-card__img" 
                    src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'large'); ?>"/>
                <div class="bca-sector-card__overlay"></div>
                <span class="bca-sector-card__name"><?php the_title(); ?></span>
            </a>
            <?php endwhile; ?>
        </div>
    </div>
</section>
<?php endif; ?>

<!-- NEWS SHORTCODE -->
<section class="bca-news-shortcode">
    <div class="container">
        <div class="bca-heading-section left-align reveal">
            <div class="bca-heading-container left-align">
                <h2 class="bca-heading__title">See Our <span>Latest News</span></h2>
            </div>
            <a href="/about-us/news/" class="bca-heading__link">View all news<svg viewBox="0 0 16 16"><path d="M3 8h10M9 4l4 4-4 4"></path></svg></a>
        </div>
        <div class="reveal reveal-delay-1"><?php echo do_shortcode('[bca_mini_news_grid]') ?></div>
    </div>
</section>

<?php 
/* CONTACT SHORTCODE */
echo do_shortcode('[bca_cta_contact]');
get_footer(); ?>

<!-- ══ JAVASCRIPT ══════════════════════════════════ -->
<script>    
    // ── Explore more sectors ─── 
    document.querySelectorAll('.bca-explore__track').forEach(track => {
        track.innerHTML += track.innerHTML; //Duplicate each track's cards for a seamless infinite loop
    });
</script>