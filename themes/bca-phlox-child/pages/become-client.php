<?php
/*
Template Name: Become Client
Author: Deven Warang
*/
get_header();
wp_enqueue_style('become-client-style');

$faq_questions = [
    [ 
        'question' => 'How long does switching accountants take?',
        'answer'   => 'Most clients are fully onboarded within 1-2 weeks. The timeline depends on the complexity of your affairs and how quickly your previous accountant provides the necessary documentation. We manage this process on your behalf.'
    ],
    [ 
        'question' => 'Is there a cost to switching to BC&amp;A?',
        'answer'   => 'The initial consultation is completely free. We also handle the handover from your previous accountant at no additional charge in most cases. Your first fee will be the agreed fixed fee outlined in your engagement letter.'
    ],
    [ 
        'question' => 'Will I need to meet in person?',
        'answer'   => 'Not necessarily. We\'re happy to conduct the initial consultation by phone or video call. In-person meetings are always available at our Portsmouth, Romsey or Swindon offices if you prefer a face-to-face introduction.'
    ],
    [ 
        'question' => 'Can BC&amp;A handle both my personal and business accounts?',
        'answer'   => 'Yes. We regularly look after both personal and business finances for our clients — from self-assessment tax returns and personal tax planning through to company accounts, payroll, and VAT. Having everything under one roof means nothing falls through the cracks.'
    ],
    [ 
        'question' => 'What accounting software do you support?',
        'answer'   => 'We\'re a Xero Gold Partner and also work with QuickBooks, Sage, and Dext. If you\'re currently using different software, we\'ll advise on the best option for your needs and can manage migration where required.'
    ],
    [ 
        'question' => 'What if I\'ve never had an accountant before?',
        'answer'   => 'No problem at all. We regularly onboard first-time clients — whether sole traders, new limited companies or individuals with a growing tax position. We\'ll guide you through every step and set everything up properly from the start.'
    ],
];

?>

<!--- HERO SECTION --->
<div class="bca-hero-section">
    <div class="bca-hero__overlay"></div>
    <div class="bca-hero container transparent-header">
        <div class="bca-hero__content-grid">
            <div>
                <div class="bca-hero__eyebrow reveal">
                    <p><strong><span>New Clients</span></strong></p> 
                </div>
                <div class="bca-hero__head-wrapper reveal reveal-delay-1">
                    <h1 class="bca-hero__title">Switching Accountants <em>Made Simple.</em></h1>
                    <p class="bca-hero__text">
                        Joining BC&A is straightforward and stress-free. Whether you're switching from another firm or looking for 
                        an accountant for the first time, our team makes the transition seamless, with no disruption to your finances.
                    </p>
                </div>
                <div class="bca-hero__btns reveal reveal-delay-4">
                    <a href="#our-process" class="bca-btn-primary">See How It Works<?php echo get_arrow_icon(); ?></a>
                    <a href="#cta-contact" class="bca-btn-ghost">Start the Conversation</a>
                </div>
            </div>
            
            <div class="bca-hero__card reveal reveal-delay-1">
                <div class="bca-hero__card-head">
                    <h4>Quick Facts</h4>
                </div>
                <div class="bca-hero__card-body">
                    <ul class="bca-hero__card-list">
                        <li>
                            <svg viewBox="0 0 16 16"><polyline points="2,8 6,12 14,4"/></svg>
                            Free initial consultation
                        </li>
                        <li>
                            <svg viewBox="0 0 16 16"><polyline points="2,8 6,12 14,4"/></svg>
                            Typically onboarded in 1–2 weeks
                        </li>
                        <li>
                            <svg viewBox="0 0 16 16"><polyline points="2,8 6,12 14,4"/></svg>
                            We handle the handover from your old firm
                        </li>
                        <li>
                            <svg viewBox="0 0 16 16"><polyline points="2,8 6,12 14,4"/></svg>
                            No hidden fees — clear written proposal
                        </li>
                        <li>
                            <svg viewBox="0 0 16 16"><polyline points="2,8 6,12 14,4"/></svg>
                            Regulated by ICAEW &amp; CIMA
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="bca-hero__bottom reveal reveal-delay-4">
            <div class="bca-hero__bottom-inner">
                <span class="bca-hero__bottom-item">
                    <svg viewBox="0 0 16 16"><path d="M8 1l1.7 3.5 3.8.55-2.75 2.68.65 3.78L8 9.75l-3.4 1.78.65-3.78L2.5 5.05l3.8-.55z"></path></svg>
                    35+ Years Experience
                </span>
                <span class="bca-hero__bottom-item">
                    <svg viewBox="0 0 16 16"><path d="M2 4h12v8a1 1 0 01-1 1H3a1 1 0 01-1-1V4z"></path><path d="M2 4l6 5 6-5"></path></svg>    
                    Response Within 24 Hours
                </span>
                <span class="bca-hero__bottom-item">
                    <svg viewBox="0 0 24 24"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>    
                    4 Offices Across the South
                </span>
                <span class="bca-hero__bottom-item">
                    <svg viewBox="0 0 24 24"><path d="M22 11.08V12a10 10 0 11-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                    No-Obligation Free Quote
                </span>
            </div>
        </div>
    </div>
</div>


<!--- PROCESS STEPS — WHITE BG --->
<section class="bca-process" id="our-process">
    <div class="container">
        <div class="bca-heading-section reveal">
            <div class="bca-heading-container">
                <div class="bca-heading__eyebrow">How It Works</div>
                <h2 class="bca-heading__title">Your Journey to <span>Joining BC&amp;A</span></h2>
                <div class="bca-heading__description">
                    <p>From your first call to full onboarding — here's exactly what to expect when you switch to BC&amp;A.</p>
                </div>
            </div>
        </div>

        <div class="bca-steps">
            <div class="bca-step reveal reveal-delay-1">
                <div class="bca-step__num">01</div>
                <div class="bca-step__body">
                    <div class="bca-step__icon">
                        <svg viewBox="0 0 24 24"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg>
                    </div>
                    <h3>Initial Consultation</h3>
                    <p>We begin with a free, no-obligation conversation — by phone, video or in person at your nearest office. We'll listen to your situation, discuss your goals, and outline how BC&amp;A can help. There's no pressure and no commitment required at this stage.</p>
                </div>
            </div>
            <div class="bca-step reveal reveal-delay-1">
                <div class="bca-step__num">02</div>
                <div class="bca-step__body">
                    <div class="bca-step__icon">
                        <svg viewBox="0 0 24 24"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>
                    </div>
                    <h3>Written Proposal &amp; Clear Fees</h3>
                    <p>Following our consultation, we'll send you a detailed written proposal outlining exactly which services we'll provide and a transparent, fixed fee quote. No surprises — you'll know precisely what you're getting before signing anything.</p>
                </div>
            </div>
            <div class="bca-step reveal reveal-delay-1">
                <div class="bca-step__num">03</div>
                <div class="bca-step__body">
                    <div class="bca-step__icon">
                        <svg viewBox="0 0 24 24"><path d="M9 11l3 3L22 4"/><path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"/></svg>
                    </div>
                    <h3>Formal Engagement Letter</h3>
                    <p>Once you're happy to proceed, we'll issue a formal letter of engagement — the professional standard for accountancy firms. This confirms the services, your dedicated team, agreed fees, and the identity verification process required by UK regulations.</p>
                </div>
            </div>
            <div class="bca-step reveal reveal-delay-1">
                <div class="bca-step__num">04</div>
                <div class="bca-step__body">
                    <div class="bca-step__icon">
                        <svg viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg>
                    </div>
                    <h3>Seamless Handover from Your Old Firm</h3>
                    <p>We communicate directly with your previous accountant to request all relevant records and documentation on your behalf. This process is handled professionally and — in most cases — at no extra cost to you. You won't need to chase anyone.</p>
                </div>
            </div>
            <div class="bca-step reveal reveal-delay-1">
                <div class="bca-step__num">05</div>
                <div class="bca-step__body">
                    <div class="bca-step__icon">
                        <svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
                    </div>
                    <h3>Your Dedicated Team Takes Over</h3>
                    <p>You're assigned a named partner as your primary contact, supported by qualified managers and assistants. From day one they familiarise themselves with your accounts, systems and goals — so you always feel like a valued client, never a number.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- WHY SWITCH — soft grey bg
<section class="bac-why">
    <div class="bca-wrap">
        <div class="bac-section-head reveal">
            <span class="bca-eyebrow">Why BC&amp;A</span>
            <h2>Why Clients <em>Choose to Switch</em></h2>
            <p class="bac-section-desc">Many businesses and individuals reach a point where their current accountant no longer meets their needs. BC&amp;A is built to go further.</p>
        </div>

        <div class="bac-why__grid">

            <div class="bac-why__card reveal">
                <div class="bac-why__card-icon">
                    <svg viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                </div>
                <h3>Specialist Expertise</h3>
                <p>From medical professionals and R&amp;D claims to parish councils and property investors — we offer deep, dedicated expertise that most general practices simply can't match.</p>
            </div>

            <div class="bac-why__card reveal">
                <div class="bac-why__card-icon">
                    <svg viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg>
                </div>
                <h3>A Named Partner, Not a Call Centre</h3>
                <p>You'll always have a dedicated partner who knows your name, your business, and your financial history. You're never passed around or left waiting for a callback.</p>
            </div>

            <div class="bac-why__card reveal">
                <div class="bac-why__card-icon">
                    <svg viewBox="0 0 24 24"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg>
                </div>
                <h3>Proactive, Year-Round Support</h3>
                <p>We don't just appear at year-end. BC&amp;A monitors your finances throughout the year, flags opportunities and risks early, and keeps you ahead of HMRC deadlines.</p>
            </div>

            <div class="bac-why__card reveal">
                <div class="bac-why__card-icon">
                    <svg viewBox="0 0 24 24"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg>
                </div>
                <h3>Transparent, Fixed Fees</h3>
                <p>Every proposal includes a clear, fixed fee structure — no hourly surprises. You'll know exactly what you're paying before work begins, and fees won't creep up unexpectedly.</p>
            </div>

            <div class="bac-why__card reveal">
                <div class="bac-why__card-icon">
                    <svg viewBox="0 0 24 24"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
                </div>
                <h3>Local Presence Across the South</h3>
                <p>With offices in Portsmouth, Romsey and Swindon, you're never far from a face-to-face meeting with someone who understands your local market and business landscape.</p>
            </div>

            <div class="bac-why__card reveal">
                <div class="bac-why__card-icon">
                    <svg viewBox="0 0 24 24"><path d="M9 11l3 3L22 4"/><path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"/></svg>
                </div>
                <h3>ICAEW &amp; CIMA Regulated</h3>
                <p>BC&amp;A is regulated by both ICAEW and CIMA — two of the most respected professional bodies in accountancy. You're in qualified, accountable hands.</p>
            </div>

        </div>
    </div>
</section>  -->

<!-- BCA FAQ -->
<section class="bca-faq">
    <div class="container">
        <div class="bca-faq__inner">
            <div class="bca-faq__inner-left reveal">
                <span class="bca-section__eyebrow">FAQ</span>
                <h2 class="bca-section__title">Common <em>Questions</em></h2>
                <p>Everything you need to know before making the switch. Can't find your answer here? <br>Get in touch — we're happy to help.</p>
                <div class="btn-wrapper"><a href="/contact/" class="bca-btn-primary">Speak To An Adviser<?php echo get_arrow_icon() ?></a></div>
            </div>

            <div class="bca-faq-list drop-shadow reveal reveal-delay-1">
                <?php $i = 0; foreach($faq_questions as $q): ?>
                <div class="bca-faq__item <?php echo $i++ === 0 ? 'open' : ''; ?>">
                    <div class="bca-faq__question" aria-expanded="false">
                        <?php echo $q['question'] ?>
                        <span class="bca-faq__chevron"><svg viewBox="0 0 12 12"><polyline points="2,4 6,8 10,4"/></svg></span>
                    </div>
                    <div class="bca-faq__answer">
                        <div class="bca-faq__answer-inner">
                            <p><?php echo $q['answer'] ?></p>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<!-- CTA CONTACT FORM -->
<section class="bca-cta find" id="cta-contact">
    <div class="bca-find__inner container reveal">
        <div class="bca-cta__text">
            <div class="bca-heading__eyebrow" aria-hidden="true">Get Started</div>
            <h2 class="bca-heading__title">Start the <em>Conversation</em></h2>
            <div class="bca-cta__body">
                <p>
                    Ready to make the switch? Fill in the form and a member of our team will be in touch within one working day. No obligation, No pressure.
                </p>
            </div>
            <div class="bca-find__contact-row">
                <a href="tel:02392833300" class="bca-find__contact-item">
                    <div class="bca-find__contact-icon"><svg viewBox="0 0 24 24"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"></path></svg></div>
                    <div>
                        <div class="bca-find__contact-label">Portsmouth HQ</div>
                        <div class="bca-find__contact-value">02392 833 300</div>
                    </div>
                </a>
                <a href="mailto:info@bcaaccountants.com" class="bca-find__contact-item">
                    <div class="bca-find__contact-icon"><svg viewBox="0 0 24 24"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg></div>
                    <div>
                        <div class="bca-find__contact-label">Email</div>
                        <div class="bca-find__contact-value">info@bcaaccountants.com</div>
                    </div>
                </a>
                <a href="/request-quote/" class="bca-find__contact-item">
                    <div class="bca-find__contact-icon"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"></circle><path d="M12 6v6l4 2"></path></svg></div>
                    <div>
                        <div class="bca-find__contact-label">Office Hours</div>
                        <div class="bca-find__contact-value">Mon-Fri: 9:00am - 5:00pm</div>
                    </div>
                </a>
            </div>
        </div>
        <?php echo do_shortcode('[contact-form-7 id="e7e2d8b"]'); ?>
    </div>
</section>



<?php get_footer(); ?>