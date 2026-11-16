<?php
/*
Template Name: About Us
Author: Deven Warang
*/

get_header();

wp_enqueue_style('about-us-style');
?>

<!-- HERO SECTION -->
<div class="bca-hero-section about-us">
    <div class="bca-hero__overlay"></div>
    <div class="bca-hero container transparent-header">
        <div class="bca-hero__content">
            <div class="bca-hero__eyebrow reveal">
                <p><strong><span>About us</span></strong></p>
            </div>
            <div class="bca-hero__head-wrapper reveal reveal-delay-1">
                <h1 class="bca-hero__title">More than accountants.<br><em>Your partners.</em></h1>
                <p class="bca-hero__text">
                    At BC&A, our integrated services across accountancy, tax, audit, advisory and wealth 
                    planning ensure you always have the right expertise on hand — delivered with clarity, 
                    commitment and genuine care.
                </p>
            </div>
            <div class="bca-hero__btns reveal reveal-delay-2">
                <a href="#BCAStory" class="bca-btn-primary">Discover Our Story<svg viewBox="0 0 16 16"><path d="M3 8H10M8.5 5.5L11 8L8.5 10.5"></path></svg></a>
                <a href="#senLderShip" class="bca-btn-ghost">Meet the Team</a>
            </div>
        </div>
        <div class="bca-hero__bottom big-text reveal reveal-delay-2">
            <div class="bca-hero__bottom-inner">
                <div class="bca-hero__bottom-stat">
                    <div class="bca-hero__bottom-num">4000<span>+</span></div>
                    <div class="bca-hero__bottom-label">Clients served</div>
                </div>
                <div class="bca-hero__bottom-stat">
                    <div class="bca-hero__bottom-num">35<span>+</span></div>
                    <div class="bca-hero__bottom-label">Years established</div>
                </div>
                <div class="bca-hero__bottom-stat">
                    <div class="bca-hero__bottom-num">50<span>+</span></div>
                    <div class="bca-hero__bottom-label">Staffs</div>
                </div>
                <div class="bca-hero__bottom-stat">
                    <div class="bca-hero__bottom-num">Multi</div>
                    <div class="bca-hero__bottom-label">Sector expertise</div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- WHO ARE WE -->
<section class="bca-who">
    <div class="container">
        <div class="bca-who__inner">
            <div class="bca-who__text reveal reveal-delay-1">
                <span class="bca-heading__eyebrow">Who We Are</span>
                <h2 class="bca-heading__title">A trusted firm, built on <em>35+ years</em> of excellence</h2>
                <p>
                    Established in Portsmouth, BC&amp;A Chartered Accountants has grown from a local practice 
                    into one of the South of England's most trusted independent accountancy firms — with four offices, 
                    a team of dedicated specialists and a reputation built entirely on results.
                </p>
                <p>
                    We are a friendly team of chartered accountants, bookkeepers, and business and tax consultants serving 
                    businesses across multiple industries, and private individuals, from our offices in Portsmouth, Romsey 
                    and Swindon.
                </p>
                <p>
                    Our integrated services across accountancy, tax, audit, advisory and wealth planning ensure you always 
                    have the right expertise on hand. We provide strategic insight and practical support designed to 
                    strengthen performance, manage risk and drive sustainable growth.
                </p>
                <div style="display:flex;gap:14px;flex-wrap:wrap;">
                    <a href="/offices" class="bca-btn-primary">Find Your Nearest Office<svg viewBox="0 0 16 16"><path d="M3 8H10M8.5 5.5L11 8L8.5 10.5"></path></svg></a>
                    <a href="/request-quote/" class="bca-btn-outline">Get Free Quote</a>
                </div>
            </div>
            <div class="bca-who__images reveal reveal-delay-2">
                <img class="bca-who__img-main" src="/wp-content/uploads/2026/04/team_portsmouth-scaled.jpg" alt="BC&A Portsmouth team"/>
            </div>
        </div>
    </div>
</section>

<!-- PILLARS | OUR VALUES -->
<div class="bca-pillars reveal reveal-delay-1">
    <div class="bca-pillars__inner">
        <div class="bca-pillar">
            <div class="bca-pillar__num">01</div>
            <div class="bca-pillar__icon">
                <svg viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"></path><circle cx="9" cy="7" r="4"></circle></svg>
            </div>
            <div class="bca-pillar__title">Client First, Always</div>
            <div class="bca-pillar__text">Every decision we make starts with your goals. We invest in understanding your business deeply so our advice is always relevant, timely and genuinely useful.</div>
        </div>
        <div class="bca-pillar">
            <div class="bca-pillar__num">02</div>
            <div class="bca-pillar__icon">
                <svg viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
            </div>
            <div class="bca-pillar__title">Complete Transparency</div>
            <div class="bca-pillar__text">Fixed fees. No surprises. No unexpected charges. We agree everything upfront and you'll never be charged for asking a question — that is exactly what we are here for.</div>
        </div>
        <div class="bca-pillar">
            <div class="bca-pillar__num">03</div>
            <div class="bca-pillar__icon">
                <svg viewBox="0 0 24 24"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline></svg>
            </div>
            <div class="bca-pillar__title">Proactive, Not Reactive</div>
            <div class="bca-pillar__text">We look beyond the numbers to identify what really matters. We reach out before deadlines and planning windows close — never after the opportunity has passed.</div>
        </div>
        <div class="bca-pillar">
            <div class="bca-pillar__num">04</div>
            <div class="bca-pillar__icon">
                <svg viewBox="0 0 24 24"><rect x="2" y="3" width="20" height="14" rx="2"></rect><line x1="8" y1="21" x2="16" y2="21"></line><line x1="12" y1="17" x2="12" y2="21"></line></svg>
            </div>
            <div class="bca-pillar__title">Modern Technology</div>
            <div class="bca-pillar__text">We use the latest cloud accounting technology to keep your data accurate and meaningful — giving you real-time visibility while freeing you to focus on running your business.</div>
        </div>
    </div>
</div>

<!-- BCA STORY -->
<section class="bca-story" id="BCAStory">
    <div class="container">
        <div class="bca-heading-section reveal">
            <div class="bca-heading-container">
                <div class="bca-heading__eyebrow">Our Journey</div>
                <h2 class="bca-heading__title">Two decades of <span>growth and trust</span></h2>
                <div class="bca-heading__description">
                    <p>From a single Portsmouth office to a multi-location firm — here's how BC&A has grown alongside our clients.</p>
                </div>
            </div>
        </div>

        <?php
        /*
         * Journey milestones.
         * To add one: drop a new entry under its year (or add a new year).
         * Years and entries render in the order listed here. 'month' is optional.
         */
        $bca_journey = [
            '2004' => [
                [
                    'tag'   => 'Founded',
                    'title' => 'Established in Portsmouth',
                    'text'  => 'BC&amp;A opens its doors in Southsea with a clear mission — big-firm expertise delivered with a genuinely personal approach to every client.',
                ],
            ],
            '2010' => [
                [
                    'tag'   => 'Growth',
                    'title' => 'Expanding our expertise',
                    'text'  => 'Growing reputation across Hampshire leads to significant team expansion and the introduction of specialist sector advisory services.',
                ],
            ],
            '2015' => [
                [
                    'tag'   => 'Innovation',
                    'title' => 'Cloud-first transformation',
                    'text'  => 'Full adoption of cloud accounting technology — enabling real-time reporting and more proactive financial management for every client.',
                ],
            ],
            '2021' => [
                [
                    'tag'   => 'New service',
                    'title' => 'R&amp;D Tax services',
                    'text'  => 'Started R&amp;D Tax services for SME and large businesses.',
                ],
            ],
            '2024' => [
                [
                    'tag'   => 'Expansion',
                    'title' => 'Kumar Associates &amp; Macklin &amp; Co.',
                    'text'  => 'Opened a dedicated accountant practice in Romsey for medical clients by acquiring Kumar Associates. Expanded general practice in Romsey by acquiring Macklin &amp; Co. Both firms established 35+ years ago.',
                ],
            ],
            '2025' => [
                [
                    'tag'   => 'Relocation',
                    'title' => 'Romsey office consolidation',
                    'text'  => 'Opened a new office in Romsey and moved both BC&amp;A Romsey and Kumar Associates to one office (29-31a The Hundred).',
                ],
            ],
            '2026' => [
                [
                    'month' => 'January',
                    'tag'   => 'Relocation',
                    'title' => 'A new home in Southsea',
                    'text'  => 'After more than 25 years at the heart of Southsea, we moved from Elm Grove to our new headquarters at 24 Landport Terrace. The larger premises give our growing team room to develop and enhance the support we provide to clients, while keeping us firmly rooted in the community where BC&amp;A began.',
                ],
                [
                    'month' => 'January',
                    'tag'   => 'Acquisition',
                    'title' => 'DCK Accounting Solutions joins BC&amp;A',
                    'text'  => 'Led by Derek, Swindon-based DCK Accounting Solutions joined BC&amp;A, expanding our presence into Wiltshire. Bringing more than 30 years of experience and specialist expertise in town and parish council accounting, Derek and the team strengthened our services while giving DCK&rsquo;s clients access to the wider support and resources of BC&amp;A Group.',
                ],
                [
                    'month' => 'February',
                    'tag'   => 'New division',
                    'title' => 'The launch of BC&amp;A Audits',
                    'text'  => 'We launched BC&amp;A Audits, expanding our specialist services for businesses, charities and UK subsidiaries of overseas groups. With a partner-led approach, fixed fees and clear communication, the new division strengthened our ability to support clients as they grow and their audit requirements evolve.',
                ],
                [
                    'month' => 'September',
                    'tag'   => 'Acquisition',
                    'title' => 'David Bailey joins BC&amp;A',
                    'text'  => 'We completed the acquisition of David Bailey Chartered Accountants, a Portsmouth practice established in 1976. Welcoming Wendy Hodgson, Martin Pierce and their experienced team strengthened our local presence and brought 50 years of accountancy heritage into BC&amp;A. The acquisition builds on a shared commitment to personal service and lasting client relationships, giving David Bailey&rsquo;s clients access to the wider expertise and resources of BC&amp;A Group.',
                ],
            ],
        ];
        $bca_journey_last = array_key_last($bca_journey);
        ?>

        <div class="bca-journey" id="bcaJourney">
            <div class="bca-journey__progress" aria-hidden="true"></div>
            <ol class="bca-journey__list">
                <?php foreach ($bca_journey as $bca_year => $bca_entries) : ?>
                <li class="bca-journey__group<?php echo $bca_year === $bca_journey_last ? ' is-latest' : ''; ?>">
                    <div class="bca-journey__year">
                        <span class="bca-journey__year-num"><?php echo esc_html($bca_year); ?></span>
                        <?php if (count($bca_entries) > 1) : ?>
                        <!-- <span class="bca-journey__year-count"><?php echo count($bca_entries); ?> milestones</span> -->
                        <?php endif; ?>
                    </div>
                    <span class="bca-journey__dot" aria-hidden="true"></span>
                    <div class="bca-journey__panel">
                        <?php foreach ($bca_entries as $bca_entry) : ?>
                        <article class="bca-journey__entry">
                            <div class="bca-journey__meta">
                                <?php if (!empty($bca_entry['month'])) : ?>
                                <span class="bca-journey__month"><?php echo esc_html($bca_entry['month']); ?></span>
                                <?php endif; ?>
                                <?php if (!empty($bca_entry['tag'])) : ?>
                                <span class="bca-journey__tag"><?php echo esc_html($bca_entry['tag']); ?></span>
                                <?php endif; ?>
                            </div>
                            <div class="bca-journey__body">
                                <h3 class="bca-journey__title"><?php echo $bca_entry['title']; ?></h3>
                                <p class="bca-journey__text"><?php echo $bca_entry['text']; ?></p>
                            </div>
                        </article>
                        <?php endforeach; ?>
                    </div>
                </li>
                <?php endforeach; ?>
            </ol>
        </div>

        <script>
            (function () {
                var root = document.getElementById('bcaJourney');
                if (!root) return;

                // Reveal each year as it scrolls into view
                if ('IntersectionObserver' in window) {
                    root.classList.add('is-ready');
                    var io = new IntersectionObserver(function (entries) {
                        entries.forEach(function (entry) {
                            if (entry.isIntersecting) {
                                entry.target.classList.add('in-view');
                                io.unobserve(entry.target);
                            }
                        });
                    }, { rootMargin: '0px 0px -12% 0px' });
                    root.querySelectorAll('.bca-journey__group').forEach(function (group) {
                        io.observe(group);
                    });
                }

                // Fill the rail as the reader scrolls through the timeline
                                // Fill the rail and mark the year being read
                var groups = Array.prototype.slice.call(root.querySelectorAll('.bca-journey__group'));
                var currentIndex = -1;
                var ticking = false;
                function update() {
                    ticking = false;
                    var line = window.innerHeight * 0.55;
                    var rect = root.getBoundingClientRect();
                    var fill = Math.min(Math.max(line - rect.top, 0), rect.height);
                    root.style.setProperty('--fill', fill + 'px');

                    // Current year = the last group whose top has crossed the fill line
                    var index = 0;
                    groups.forEach(function (group, i) {
                        if (group.getBoundingClientRect().top <= line) index = i;
                    });
                    if (index === currentIndex) return;
                    currentIndex = index;
                    groups.forEach(function (group, i) {
                        group.classList.toggle('is-past', i < index);
                        group.classList.toggle('is-current', i === index);
                        group.classList.toggle('is-upcoming', i > index);
                    });
                }

                function requestUpdate() {
                    if (!ticking) {
                        ticking = true;
                        window.requestAnimationFrame(update);
                    }
                }
                window.addEventListener('scroll', requestUpdate, { passive: true });
                window.addEventListener('resize', requestUpdate);
                update();
            })();
        </script>
    </div>
</section>

<!-- OUR APPROACH -->
<section class="bca-approach">
    <div class="container">
        <div class="bca-approach__inner">
            <div class="bca-approach__text reveal">
                <div class="bca-heading-section left-align">
                    <div class="bca-heading-container left-align">
                        <div class="bca-heading__eyebrow">Our Approach</div>
                        <h2 class="bca-heading__title">Clear advice. Fixed fees. <span> No surprises.</span></h2>
                    </div>
                </div>
                <p>We are a professional firm with integrity and honesty at all times. From your very first meeting, we agree the services you need and the fee we will charge — before any work begins.</p>
                <p>We simplify complex financial challenges and provide clear direction, helping you make informed decisions and achieve better outcomes. With a proactive and responsive approach, we look beyond the numbers to identify what really matters to your business.</p>
                <p>We will act as your bookkeeper, accountant, tax adviser and virtual finance director — taking responsibility for every piece of accounting and tax work we are engaged to provide, preparing and reviewing it with you ahead of every deadline.</p>
            </div>
            <div class="bca-approach__cards">
                <div class="bca-approach-card reveal reveal-delay-2">
                    <div class="bca-approach-card__icon"><svg viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path><path d="M9 12l2 2 4-4"></path></svg></div>
                    <div>
                        <h4>Fixed Fees — Always</h4>
                        <p>No hourly billing. No unexpected invoices. We agree everything upfront so you always know exactly what you're paying — and why.</p>
                    </div>
                </div>
                <div class="bca-approach-card reveal reveal-delay-3">
                    <div class="bca-approach-card__icon"><svg viewBox="0 0 24 24"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline></svg></div>
                    <div>
                        <h4>Proactive Communication</h4>
                        <p>We review your numbers regularly and communicate proactively — helping you gain competitive advantage, reduce costs and minimise tax liabilities before they become problems.</p>
                    </div>
                </div>
                <div class="bca-approach-card reveal reveal-delay-4">
                    <div class="bca-approach-card__icon"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"></circle><path d="M12 8v4l3 3"></path></svg></div>
                    <div>
                        <h4>Always Ahead of Deadlines</h4>
                        <p>We prepare and submit ahead of every filing deadline, once you have reviewed and approved. You will never miss a deadline or face a late penalty with BC&amp;A.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SENIOR LEADERSHIP -->
<section class="bca-senior" id="senLderShip">
    <div class="container">
        <div class="bca-heading-section left-align reveal">
            <div class="bca-heading-container left-align">
                <div class="bca-heading__eyebrow">Our Senior Leadership</div>
                <h2 class="bca-heading__title">The people behind <span>your advice</span></h2>
            </div>
            <a href="/about-us/our-team?office=all" class="bca-heading__link">View full team<svg viewBox="0 0 16 16"><path d="M3 8h10M9 4l4 4-4 4"></path></svg></a>
        </div>

        <?php echo do_shortcode('[bca_portsmouth_team]') ?>
    </div>
</section>

<?php 
echo do_shortcode('[bca_cta_contact]'); /* CONTACT SHORTCODE */
get_footer();
?>
