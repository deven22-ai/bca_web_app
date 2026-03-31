<?php 
get_header(); 
wp_enqueue_style('sectors-style');
?>

<?php if (have_posts()) {
    while (have_posts()) {
        the_post(); ?>

        <!-- HERO -->
        <div class="bca-hero-section" style="background-image: url('<?php echo get_the_post_thumbnail_url(get_the_ID(), 'large')?>');">
            <div class="bca-hero__overlay"></div>
            <section class="bca-hero transparent-header">
                <div class="bca-hero__container">
                    <div class="bca-hero__content">
                        <div class="bca-hero__eyebrow">
                            <p><strong><span><?php the_title(); ?></span></strong></p>
                        </div>
                        <div class="bca-hero__head-wrapper">
                            <h1 class="bca-hero__title"><?php echo get_field('hero_title'); ?></h1>
                            <p class="bca-hero__text"><?php echo get_field('hero_description'); ?></p>
                        </div>
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
                        <span class="bca-section__eyebrow">Our Expertise</span>
                        <h2 class="bca-section__title"><?php echo get_field('intro_heading'); ?></h2>
                        <div class="bca-section__text"><?php echo get_field('intro_description'); ?></div>
                    </div>
                </div>
            </section>
            <?php endif; ?>

            <!-- ══ WHAT WE CAN PROVIDE ═════════════════ -->
            <section class="bca-sector-services">
                <div class="container">
                    <div class="bca-sector-services__inner">
                        <div class="bca-sector-services__image-wrap drop-shadow">
                            <img src="<?php echo get_field('services_image') ?>" alt=""/>
                        </div>
                        <div class="bca-sector-services__right">
                            <span class="bca-section__eyebrow">What we can provide</span>
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
            <section class="bca-faq">
                <div class="container">
                    <div class="bca-faq__inner">
                        <div class="bca-faq__inner-left reveal">
                        <span class="bca-section__eyebrow">FAQs</span>
                        <h2 class="bca-section__title">Common questions about our agricultural services</h2>
                        <p>Can't find what you're looking for? Our team is always happy to have a no-obligation conversation.</p>
                        <a href="/contact/" class="bca-btn-primary">Speak to an adviser</a>
                        </div>
                        <div class="bca-faq-list">
                            <?php 
                            $raw_faqs = get_field('faq');
                            if( $raw_faqs ) {
                                // Split into individual Q&A blocks by blank line
                                error_log($raw_faqs); 
                                $blocks = array_filter(array_map('trim', explode("===", $raw_faqs)));
                                error_log(count($blocks));
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
        </main>

        <?php
    } 
} 
?>

<section class="bca-heading-section">
    <div class="bca-heading-container">
        <div class="bca-heading__border"></div>
        <h2 class="bca-heading__title">See Our &nbsp;<span>Latest News</span></h2>
    </div>
</section>
<section style="margin-bottom: 40px;">
    <div class="container">
        <?php echo do_shortcode('[bca_mini_news_grid]'); ?>
    </div>
</section>
<?php echo do_shortcode('[bca_cta_contact]'); ?>

<?php get_footer(); ?>

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
</script>