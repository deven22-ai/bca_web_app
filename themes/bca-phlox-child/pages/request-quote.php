<?php
/*
Template Name: Request Quote
Author: Deven Warang
*/
get_header();
wp_enqueue_style('request-quote-style');
?>

<!-- ── HERO SECTION ─────────────────────────────── -->
<div class="bca-hero-section" style="background-image: url('/wp-content/uploads/2026/04/request_quote.jpg')">
    <div class="bca-hero__overlay"></div>
    <section class="bca-hero transparent-header">
        <div class="bca-hero__container">
            <div class="bca-hero__content">
                <div class="bca-hero__eyebrow">
                    <p><strong><span>Get Started</span></strong></p>
                </div>
                <div class="bca-hero__head-wrapper">
                    <h1 class="bca-hero__title">Request a Free Quote</h1>
                    <p class="bca-hero__text">
                        Fill in the form and one of our team will be in touch with a tailored, 
                        no-obligation quote. Prefer to talk? We're happy to meet online or at 
                        one of our Hampshire offices.
                    </p>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- ── TRUST BAR ─────────────────────────── -->
<div class="bca-rq-trust">
    <div class="bca-rq-trust__inner">
        <span class="bca-rq-trust__item">
            <svg viewBox="0 0 16 16"><path d="M8 1l2.1 4.3L15 6.1l-3.5 3.4.8 4.8L8 12l-4.3 2.3.8-4.8L1 6.1l4.9-.8z"/></svg>
            No-obligation quote
        </span>
        <span class="bca-rq-trust__item">
            <svg viewBox="0 0 16 16"><path d="M13 6.5A5.5 5.5 0 112 6.5 5.5 5.5 0 0113 6.5z"/><path d="M14.5 14.5l-3-3"/></svg>
            Response within 24 hours
        </span>
        <span class="bca-rq-trust__item">
            <svg viewBox="0 0 16 16"><path d="M8 14s-6-3.5-6-7.5a4 4 0 018 0 4 4 0 018 0C18 10.5 8 14 8 14z"/></svg>
            Regulated by ICAEW &amp; CIMA
        </span>
        <span class="bca-rq-trust__item">
            <svg viewBox="0 0 16 16"><rect x="1" y="4" width="14" height="10" rx="1"/><path d="M1 7h14"/></svg>
            Tailored pricing — no hidden fees
        </span>
    </div>
</div>

<!-- ── MAIN ──────────────────────────────── -->
<main class="bca-rq-body container">

    <!-- Form -->
    <div class="bca-rq-form-card">
        <h2>Tell us about your business</h2>
        <p>All fields marked <span style="color:var(--blue);font-weight:700;">*</span> are required. Your information is kept strictly confidential.</p>

        <form id="quoteForm" novalidate>

        <!-- 1. Your Details -->
        <div class="rq-form-section">
            <div class="rq-form-section__label">Your Details</div>

            <div class="rq-row">
            <div class="rq-field">
                <label for="fullName">Full Name <span>*</span></label>
                <input type="text" id="fullName" name="fullName" placeholder="e.g. James Wilson" required/>
            </div>
            <div class="rq-field">
                <label for="businessName">Business Name</label>
                <input type="text" id="businessName" name="businessName" placeholder="If applicable"/>
            </div>
            </div>

            <div class="rq-row">
            <div class="rq-field">
                <label for="email">Email Address <span>*</span></label>
                <input type="email" id="email" name="email" placeholder="you@company.com" required/>
            </div>
            <div class="rq-field">
                <label for="phone">Phone Number <span>*</span></label>
                <input type="tel" id="phone" name="phone" placeholder="e.g. 02392 833300" required/>
            </div>
            </div>
        </div>

        <!-- 2. Business Info -->
        <div class="rq-form-section">
            <div class="rq-form-section__label">Business Information</div>

            <div class="rq-row">
            <div class="rq-field">
                <label for="companyType">Company Type <span>*</span></label>
                <select id="companyType" name="companyType" required>
                <option value="" disabled selected>Select type…</option>
                <option>Sole Trader</option>
                <option>Limited Company</option>
                <option>Limited Liability Partnership</option>
                <option>Partnership</option>
                <option>Charity or CIC</option>
                </select>
            </div>
            <div class="rq-field">
                <label for="natureOfBusiness">Nature of Business <span>*</span></label>
                <input type="text" id="natureOfBusiness" name="natureOfBusiness" placeholder="e.g. Construction, Retail…" required/>
            </div>
            </div>

            <div class="rq-row">
            <div class="rq-field">
                <label for="employees">Number of Employees</label>
                <select id="employees" name="employees">
                <option value="" disabled selected>Select range…</option>
                <option>Just me</option>
                <option>2–5</option>
                <option>6–20</option>
                <option>21–50</option>
                <option>51–100</option>
                <option>100+</option>
                </select>
            </div>
            <div class="rq-field">
                <label for="turnover">Annual Turnover (£)</label>
                <select id="turnover" name="turnover">
                <option value="" disabled selected>Select range…</option>
                <option>Under £50k</option>
                <option>£50k – £150k</option>
                <option>£150k – £500k</option>
                <option>£500k – £1m</option>
                <option>£1m – £5m</option>
                <option>£5m+</option>
                </select>
            </div>
            </div>
        </div>

        <!-- 3. Services -->
        <div class="rq-form-section">
            <div class="rq-form-section__label">Services Required</div>

            <div class="rq-field" style="margin-bottom: 0;">
            <label>Which services do you require? <span>*</span></label>
            </div>
            <div class="rq-checkbox-grid" style="margin-top: 12px;">
            <label class="rq-checkbox-item">
                <input type="checkbox" name="services" value="Accounting / Book-keeping"/>
                <span>Accounting / Book-keeping</span>
            </label>
            <label class="rq-checkbox-item">
                <input type="checkbox" name="services" value="Taxation Services"/>
                <span>Taxation Services</span>
            </label>
            <label class="rq-checkbox-item">
                <input type="checkbox" name="services" value="Payroll & Pension Services"/>
                <span>Payroll &amp; Pension Services</span>
            </label>
            <label class="rq-checkbox-item">
                <input type="checkbox" name="services" value="Company Secretarial Services"/>
                <span>Company Secretarial Services</span>
            </label>
            <label class="rq-checkbox-item">
                <input type="checkbox" name="services" value="Business Start Up"/>
                <span>Business Start Up</span>
            </label>
            <label class="rq-checkbox-item">
                <input type="checkbox" name="services" value="R&D Tax Relief"/>
                <span>R&amp;D Tax Relief</span>
            </label>
            <label class="rq-checkbox-item">
                <input type="checkbox" name="services" value="Mergers & Acquisitions"/>
                <span>Mergers &amp; Acquisitions</span>
            </label>
            <label class="rq-checkbox-item">
                <input type="checkbox" name="services" value="Virtual Finance Director"/>
                <span>Virtual Finance Director</span>
            </label>
            <label class="rq-checkbox-item">
                <input type="checkbox" name="services" value="Audit"/>
                <span>Audit</span>
            </label>
            <label class="rq-checkbox-item">
                <input type="checkbox" name="services" value="Other"/>
                <span>Other</span>
            </label>
            </div>
        </div>

        <!-- 4. More Info -->
        <div class="rq-form-section">
            <div class="rq-form-section__label">Additional Information</div>

            <div class="rq-row rq-row--full" style="margin-bottom: 16px;">
            <div class="rq-field">
                <label for="message">Tell us more about how we can help</label>
                <textarea id="message" name="message" placeholder="Share any context that will help us provide an accurate quote…"></textarea>
            </div>
            </div>

            <div class="rq-field">
            <label>How would you like to receive your quote? <span>*</span></label>
            <div class="rq-radio-row" style="margin-top: 10px;">
                <label class="rq-radio-item">
                <input type="radio" name="quoteMethod" value="Phone" required/> Phone
                </label>
                <label class="rq-radio-item">
                <input type="radio" name="quoteMethod" value="Email"/> Email
                </label>
                <label class="rq-radio-item">
                <input type="radio" name="quoteMethod" value="Either"/> Either
                </label>
            </div>
            </div>
        </div>

        <div class="rq-submit">
            <p>By submitting this form you agree to our <a href="/privacy-policy/">Privacy Policy</a>. We will never share your data with third parties.</p>
            <button type="submit" class="rq-btn">
            Request My Quote
            <svg viewBox="0 0 16 16"><path d="M3 8h10M9 4l4 4-4 4"/></svg>
            </button>
        </div>

        </form>

        <!-- Success state -->
        <div class="rq-success" id="successMsg">
        <div class="rq-success__icon">
            <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>
        </div>
        <h3>Quote request received!</h3>
        <p>Thank you — a member of our team will be in touch within one business day with your tailored quote.</p>
        </div>

    </div>

    <!-- Sidebar -->
    <aside class="rq-sidebar">

        <!-- Contact -->
        <div class="rq-sidebar-card">
        <div class="rq-sidebar-card__head">
            <h3>Prefer to speak to someone?</h3>
        </div>
        <div class="rq-sidebar-card__body">
            <div class="rq-contact-item">
            <div class="rq-contact-item__icon">
                <svg viewBox="0 0 24 24"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg>
            </div>
            <div class="rq-contact-item__text">
                <p>Call us</p>
                <a href="tel:+442392833300">02392 833 300</a>
            </div>
            </div>
            <div class="rq-contact-item">
            <div class="rq-contact-item__icon">
                <svg viewBox="0 0 24 24"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
            </div>
            <div class="rq-contact-item__text">
                <p>Email us</p>
                <a href="mailto:info@bcaaccountants.com">info@bcaaccountants.com</a>
            </div>
            </div>
            <div class="rq-contact-item">
            <div class="rq-contact-item__icon">
                <svg viewBox="0 0 24 24"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
            </div>
            <div class="rq-contact-item__text">
                <p>Visit us</p>
                <span>161–163 Elm Grove, Southsea,<br/>Portsmouth, PO5 1LU</span>
            </div>
            </div>
        </div>
        </div>

        <!-- Why BC&A -->
        <div class="rq-sidebar-card rq-sidebar-card--dark">
        <div class="rq-sidebar-card__head">
            <h3>Why choose BC&amp;A?</h3>
        </div>
        <div class="rq-sidebar-card__body">
            <ul class="rq-why-list">
            <li>
                <svg viewBox="0 0 16 16"><polyline points="2,8 6,12 14,4"/></svg>
                Regulated by ICAEW &amp; CIMA
            </li>
            <li>
                <svg viewBox="0 0 16 16"><polyline points="2,8 6,12 14,4"/></svg>
                No-obligation, tailored quote — no hidden fees
            </li>
            <li>
                <svg viewBox="0 0 16 16"><polyline points="2,8 6,12 14,4"/></svg>
                Dedicated adviser — not a call centre
            </li>
            <li>
                <svg viewBox="0 0 16 16"><polyline points="2,8 6,12 14,4"/></svg>
                Hampshire-based with three local offices
            </li>
            <li>
                <svg viewBox="0 0 16 16"><polyline points="2,8 6,12 14,4"/></svg>
                Proactive year-round support, not just year end
            </li>
            <li>
                <svg viewBox="0 0 16 16"><polyline points="2,8 6,12 14,4"/></svg>
                Over 20 years of sector-specific expertise
            </li>
            </ul>
        </div>
        </div>
    </aside>
</main>

<?php get_footer(); ?>