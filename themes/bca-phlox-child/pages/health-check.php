<?php
/*
Template Name: Health Check
Author: Deven Warang
*/

get_header();
wp_enqueue_style('request-quote-style');
?>

<!-- HERO SECTION -->
<section class="bca-hero-section bca-hero-section--health-check">
    <div class="bca-hero__overlay"></div>
    <div class="bca-hero container transparent-header">
        <div class="bca-hero__content">
            <div class="bca-hero__eyebrow reveal">
                <p><strong><span>Complimentary Service</span></strong></p>
            </div>
            <div class="bca-hero__head-wrapper reveal reveal-delay-1">
                <h1 class="bca-hero__title">Get <em>Free Health Check</em></h1>
                <p class="bca-hero__text">
                    Our BC&A Chartered Accountants will review your tax, VAT, cash flow, and business structure to identify risks, opportunities, and 
                    ways to save money and plan ahead with confidence.
                </p>
            </div>
            <div class="bca-hero__btns reveal reveal-delay-4">
                <a href="#bca-health-check-form" class="bca-btn-primary">Book Your Free Review<?php echo get_arrow_icon(); ?></a>
                <a href="#bca-hc-what-we-review" class="bca-btn-ghost">What We Review</a>
            </div>
        </div>
        <div class="bca-hero__bottom reveal reveal-delay-4">
            <div class="bca-hero__bottom-inner">
                <span class="bca-hero__bottom-item">
                    <svg viewBox="0 0 16 16"><path d="M2 4h12v8a1 1 0 01-1 1H3a1 1 0 01-1-1V4z"></path><path d="M2 4l6 5 6-5"></path></svg>
                    100% Free
                </span>
                <span class="bca-hero__bottom-item">
                    <svg viewBox="0 0 16 16"><path d="M13 7.5A5.5 5.5 0 112 7.5 5.5 5.5 0 0113 7.5z"></path><path d="M15 15l-3-3"></path></svg>
                    No Commitment, Results within 48 hrs
                </span>
                <span class="bca-hero__bottom-item">
                    <svg viewBox="0 0 16 16"><path d="M8 1l1.7 3.5 3.8.55-2.75 2.68.65 3.78L8 9.75l-3.4 1.78.65-3.78L2.5 5.05l3.8-.55z"></path></svg>
                    Regulated by ICAEW &amp; CIMA
                </span>
            </div>
        </div>
    </div>
</section>

<!-- WHAT WE REVIEW -->
<section class="bca-hc-review" id="bca-hc-what-we-review">
    <div class="container">
        <div class="bca-heading-section reveal">
            <div class="bca-heading-container">
                <div class="bca-heading__eyebrow">What We Review</div>
                <h2 class="bca-heading__title">A complete look at your <span>financial health</span></h2>
                <div class="bca-heading__description">
                    <p>
                        We assess six critical areas — uncovering missed opportunities, compliance risks, and savings most people never discover until it's too late. 
                        Suitable for both individuals and businesses.
                    </p>
                </div>
            </div>
        </div>
 
        <div class="bca-hc-review__grid">
            <div class="bca-hc-area reveal reveal-delay-1">
                <div class="bca-hc-area__icon-wrap">
                    <svg viewBox="0 0 24 24"><path d="M12 2L2 7l10 5 10-5-10-5z"/><path d="M2 17l10 5 10-5"/><path d="M2 12l10 5 10-5"/></svg>
                </div>
                <div class="bca-hc-area__body">
                    <h3>Tax Efficiency</h3>
                    <p>Are you claiming every allowance and relief available? We review your full tax position to surface legitimate savings you may be leaving on the table.</p>
                </div>
            </div>
 
            <div class="bca-hc-area reveal reveal-delay-1">
                <div class="bca-hc-area__icon-wrap">
                    <svg viewBox="0 0 24 24"><rect x="2" y="3" width="20" height="14" rx="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg>
                </div>
                <div class="bca-hc-area__body">
                    <h3>VAT &amp; PAYE</h3>
                    <p>Compliance checks, missed reclaims, and payroll accuracy. We ensure you're not overpaying or at risk of HMRC penalties.</p>
                </div>
            </div>
 
            <div class="bca-hc-area reveal reveal-delay-1">
                <div class="bca-hc-area__icon-wrap">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 6a4 4 0 00-8 0c0 2.5 2 4.5 2 6.5S9.5 16 7 18h10"></path><line x1="7" y1="11" x2="15" y2="11"></line></svg>
                </div>
                <div class="bca-hc-area__body">
                    <h3>Cash Flow &amp; Forecasting</h3>
                    <p>Understand your financial runway, plan ahead confidently, and identify the gaps before they become serious problems.</p>
                </div>
            </div>
 
            <div class="bca-hc-area reveal reveal-delay-4">
                <div class="bca-hc-area__icon-wrap">
                    <svg viewBox="0 0 24 24"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><polyline points="9,22 9,12 15,12 15,22"/></svg>
                </div>
                <div class="bca-hc-area__body">
                    <h3>Business Structure</h3>
                    <p>Sole trader, LLP, or limited company — we assess whether your current structure is the most tax-efficient for your situation today.</p>
                </div>
            </div>
 
            <div class="bca-hc-area reveal reveal-delay-4">
                <div class="bca-hc-area__icon-wrap">
                    <svg viewBox="0 0 24 24"><path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"/></svg>
                </div>
                <div class="bca-hc-area__body">
                    <h3>Pension &amp; Retirement</h3>
                    <p>Are you maximising pension contributions and the associated tax relief? We review your long-term financial planning position.</p>
                </div>
            </div>
 
            <div class="bca-hc-area reveal reveal-delay-4">
                <div class="bca-hc-area__icon-wrap">
                    <svg viewBox="0 0 24 24"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><polyline points="14,2 14,8 20,8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10,9 9,9 8,9"/></svg>
                </div>
                <div class="bca-hc-area__body">
                    <h3>Year-End Accounts</h3>
                    <p>Spot missed deductions, optimise your accounts position, and ensure your statutory filings are accurate and submitted on time.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- BOOK A HEALTH CHECK -->
<section class="bca-hc-form" id="bca-health-check-form">
    <div class="container">
        <div class="bca-heading-section reveal">
            <div class="bca-heading-container">
                <div class="bca-heading__eyebrow">Fill Out the Form</div>
                <h2 class="bca-heading__title">Book Your <span>Free Health Check</span></h2>
                <div class="bca-heading__description">
                    <p>Fill in your details and we'll confirm your appointment within 24 hours. Your information is kept strictly confidential.</p>
                </div>
            </div>
        </div>

        <?php echo do_shortcode('[contact-form-7 id="133f604" title="Health Check"]'); ?>
    </div>
</section>

<section class="bca-cta">
    <div class="bca-cta__inner container">
        <div class="bca-cta__text reveal">
            <div class="bca-heading__eyebrow" aria-hidden="true">Work with BC&A</div>
            <h2 class="bca-heading__title">Big firm expertise. Personal service. Real results.</span></h2>
            <div class="bca-cta__body">
                <p>
                    Whether you're a sole trader, growing business, or securing your personal finances, 
                    BC&A Chartered Accountants have the experience to help you get more from your money.
                </p>
            </div>
        </div> 
        <div class="bca-cta__right">
            <div class="bca-cta__btns">
                <a href="/offices/" class="bca-btn-primary">About BC&A<?php echo get_arrow_icon()?></a>
                <a href="/contact/" class="bca-btn-outline">Contact Us</a>
            </div>
        </div>
    </div>
</section>


<?php 
get_footer(); 
?>