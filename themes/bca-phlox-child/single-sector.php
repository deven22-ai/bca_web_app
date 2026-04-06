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
                            <div class="btn-wrapper"><a href="/contact/" class="bca-btn-primary">Speak To An Adviser</a></div>
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
    // ── FAQ ───
    document.querySelectorAll('.bca-faq__question').forEach(btn => {
        btn.addEventListener('click', () => {
            const item = btn.closest('.bca-faq__item');
            const isOpen = item.classList.contains('open');

            // Close all
            document.querySelectorAll('.bca-faq__item').forEach(i => {
                i.classList.remove('open');
                i.querySelector('.bca-faq__question').setAttribute('aria-expanded', 'false');
            });

            // Open clicked if it was closed
            if (!isOpen) {
                item.classList.add('open');
                btn.setAttribute('aria-expanded', 'true');
            }
        });
    });
    
    // ── Explore more sectors ─── 
    document.querySelectorAll('.bca-explore__track').forEach(track => {
        track.innerHTML += track.innerHTML; //Duplicate each track's cards for a seamless infinite loop
    });
</script>