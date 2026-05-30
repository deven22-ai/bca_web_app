<?php
/**
 * 404 Page Template
 * BC&A Chartered Accountants — Phlox Child Theme
 * Author : Deven Warang
 */
get_header(); ?>

<style>
    .bca-404-section {
        background: var(--bca-dark-navy);
        min-height: 88vh;
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
        overflow: hidden;
        padding: 80px 0;
        border-bottom: 1px solid var(--bca-dark-border);
    }

    /* Grid texture */
    .bca-404-section::before {
        content: '';
        position: absolute;
        inset: 0;
        background-image:
            linear-gradient(rgba(255,255,255,0.018) 1px, transparent 1px),
            linear-gradient(90deg, rgba(255,255,255,0.018) 1px, transparent 1px);
        background-size: 52px 52px;
        pointer-events: none;
    }

    /* Radial glow */
    .bca-404-section::after {
        content: '';
        position: absolute;
        inset: 0;
        background: radial-gradient(ellipse 60% 80% at 85% 50%, rgba(26,86,219,0.1) 0%, transparent 65%);
        pointer-events: none;
    }

    .bca-404-inner {
        position: relative;
        z-index: 2;
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 36px;
        display: grid;
        grid-template-columns: 1fr 1fr;
        align-items: center;
        gap: 80px;
    }

    /* Left — content */
    .bca-404-content {}

    .bca-404-code {
        font-family: 'Outfit', sans-serif;
        font-size: clamp(100px, 14vw, 160px);
        font-weight: 800;
        line-height: 1;
        color: transparent;
        -webkit-text-stroke: 1.5px rgba(255,255,255,0.08);
        letter-spacing: -4px;
        margin-bottom: -16px;
        user-select: none;
    }

    .bca-404-title {
        font-family: 'Outfit', sans-serif;
        font-size: clamp(28px, 4vw, 42px);
        font-weight: 700;
        color: #fff;
        line-height: 1.2;
        margin-bottom: 16px;
    }

    .bca-404-title em {
        font-style: italic;
        color: var(--gold);
    }

    .bca-404-text {
        font-family: 'Nunito', sans-serif;
        font-size: 16px;
        font-weight: 400;
        color: rgba(255,255,255,0.55);
        line-height: 1.7;
        margin-bottom: 36px;
        max-width: 440px;
    }

    .bca-404-actions {
        display: flex;
        align-items: center;
        gap: 12px;
        flex-wrap: wrap;
    }

    /* Right — links card */
    .bca-404-card {
        background: rgba(255,255,255,0.04);
        border: 1px solid rgba(255,255,255,0.08);
        border-radius: var(--border-radius);
        padding: 36px;
    }

    .bca-404-card__label {
        font-family: 'Outfit', sans-serif;
        font-size: 10px;
        font-weight: 700;
        letter-spacing: 2.5px;
        text-transform: uppercase;
        color: rgba(255,255,255,0.35);
        margin-bottom: 20px;
        display: flex;
        align-items: center;
        gap: 8px;
    }
    .bca-404-card__label::before {
        content: '';
        width: 16px;
        height: 1px;
        background: var(--bca-secondary);
        flex-shrink: 0;
    }

    .bca-404-links {
        list-style: none;
        padding: 0;
        margin: 0;
        display: flex;
        flex-direction: column;
        gap: 2px;
    }

    .bca-404-links li a {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 14px 16px;
        font-family: 'Outfit', sans-serif;
        font-size: 14px;
        font-weight: 500;
        color: rgba(255,255,255,0.65);
        text-decoration: none;
        border-radius: var(--border-radius);
        transition: background 0.2s ease, color 0.2s ease, padding-left 0.2s ease;
        border-bottom: 1px solid rgba(255,255,255,0.05);
    }
    .bca-404-links li:last-child a {
        border-bottom: none;
    }
    .bca-404-links li a:hover {
        background: rgba(255,255,255,0.06);
        color: #fff;
        padding-left: 20px;
    }

    .bca-404-links li a svg {
        width: 14px;
        height: 14px;
        stroke: currentColor;
        fill: none;
        stroke-width: 2;
        opacity: 0.4;
        flex-shrink: 0;
        transition: opacity 0.2s, transform 0.2s;
    }
    .bca-404-links li a:hover svg {
        opacity: 1;
        transform: translateX(3px);
    }

    .bca-404-divider {
        width: 100%;
        height: 1px;
        background: rgba(255,255,255,0.07);
        margin: 20px 0;
    }

    .bca-404-contact {
        display: flex;
        align-items: center;
        gap: 10px;
        font-family: 'Nunito', sans-serif;
        font-size: 13px;
        color: rgba(255,255,255,0.35);
    }
    .bca-404-contact a {
        color: rgba(255,255,255,0.6);
        text-decoration: none;
        font-weight: 600;
        transition: color 0.2s;
    }
    .bca-404-contact a:hover { color: #fff; }

    /* Animations */
    .bca-404-code,
    .bca-404-eyebrow,
    .bca-404-title,
    .bca-404-text,
    .bca-404-actions,
    .bca-404-card {
        opacity: 0;
        transform: translateY(20px);
        animation: bca404in 0.6s ease forwards;
    }
    .bca-404-eyebrow  { animation-delay: 0.05s; }
    .bca-404-code     { animation-delay: 0.1s;  }
    .bca-404-title    { animation-delay: 0.18s; }
    .bca-404-text     { animation-delay: 0.25s; }
    .bca-404-actions  { animation-delay: 0.32s; }
    .bca-404-card     { animation-delay: 0.2s;  }

    @keyframes bca404in {
        to { opacity: 1; transform: translateY(0); }
    }

    /* Mobile */
    @media (max-width: 768px) {
        .bca-404-inner {
            grid-template-columns: 1fr;
            gap: 48px;
            text-align: center;
        }
        .bca-404-eyebrow { justify-content: center; }
        .bca-404-code { font-size: 100px; }
        .bca-404-text { max-width: 100%; margin-left: auto; margin-right: auto; }
        .bca-404-actions { justify-content: center; }
    }
    @media (max-width: 640px) {
        .bca-404-inner { padding: 0 20px; }
        .bca-404-card  { padding: 24px; }
    }
</style>

<section class="bca-404-section">
    <div class="bca-404-inner">

        <!-- Left: Content -->
        <div class="bca-404-content">
            <div class="bca-hero__eyebrow bca-404-eyebrow">Error 404</div>
            <div class="bca-404-code">404</div>
            <h1 class="bca-404-title">Page <em>Not Found</em></h1>
            <p class="bca-404-text">
                The page you're looking for has moved, been removed, or doesn't exist. 
                Let us point you in the right direction.
            </p>
            <div class="bca-404-actions">
                <a href="<?php echo home_url('/'); ?>" class="bca-btn-primary">Back to Home<?php echo get_arrow_icon() ?></a>
                <a href="<?php echo home_url('/contact-us/'); ?>" class="bca-btn-ghost">Contact Us</a>
            </div>
        </div>

        <!-- Right: Quick links -->
        <div class="bca-404-card">
            <div class="bca-404-card__label">Quick Links</div>
            <ul class="bca-404-links">
                <li>
                    <a href="<?php echo home_url('/'); ?>">
                        Homepage
                        <svg viewBox="0 0 24 24"><polyline points="9 18 15 12 9 6"/></svg>
                    </a>
                </li>
                <li>
                    <a href="<?php echo home_url('/about-us/'); ?>">
                        About BC&A
                        <svg viewBox="0 0 24 24"><polyline points="9 18 15 12 9 6"/></svg>
                    </a>
                </li>
                <li>
                    <a href="<?php echo home_url('/about-us/news/'); ?>">
                        News & Insights
                        <svg viewBox="0 0 24 24"><polyline points="9 18 15 12 9 6"/></svg>
                    </a>
                </li>
                <li>
                    <a href="<?php echo home_url('/our-offices/'); ?>">
                        Our Offices
                        <svg viewBox="0 0 24 24"><polyline points="9 18 15 12 9 6"/></svg>
                    </a>
                </li>
                <li>
                    <a href="<?php echo home_url('/request-quote/'); ?>">
                        Request a Quote
                        <svg viewBox="0 0 24 24"><polyline points="9 18 15 12 9 6"/></svg>
                    </a>
                </li>
                <li>
                    <a href="<?php echo home_url('/contact/'); ?>">
                        Contact Us
                        <svg viewBox="0 0 24 24"><polyline points="9 18 15 12 9 6"/></svg>
                    </a>
                </li>
            </ul>

            <div class="bca-404-divider"></div>

            <div class="bca-404-contact">
                Need help?&nbsp;
                <a href="tel:02392833300">02392 833 300</a>
                &nbsp;·&nbsp;
                <a href="mailto:info@bcaaccountants.com">info@bcaaccountants.com</a>
            </div>
        </div>

    </div>
</section>

<?php get_footer(); ?>