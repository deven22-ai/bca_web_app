<?php
wp_enqueue_style('services-style'); // Load the services.css
get_header();
?>

<!-- HERO SECTION -->
<div class="bca-hero-section" style="background-image: url(/wp-content/uploads/2026/04/empty_meeting_room.jpg)">
    <div class="bca-hero__overlay"></div>
    <section class="bca-hero container transparent-header">
        <div class="bca-hero__content">
            <div class="bca-hero__eyebrow reveal">
                <p><strong><span>Our Services</span></strong></p>
            </div>
            <div class="bca-hero__head-wrapper">
                <h1 class="bca-hero__title reveal reveal-delay-1">
                    Expert advice for <em>every need</em>
                </h1>
                <p class="bca-hero__text reveal reveal-delay-2">
                    Whether you are a business owner or a private individual, BC&A provides a 
                    comprehensive range of accountancy, tax and advisory services — tailored to 
                    your goals.
                </p>
            </div>
        </div>
    </section>
</div>

<!-- SERVICES HUB -->
<section class="bca-types" id="servicesHub">
    <div class="container">
        <div class="bca-heading-section reveal">
            <div class="bca-heading-container">
                <div class="bca-heading__eyebrow">What we offer</div>
                <h2 class="bca-heading__title">Tailored Services For <span>Businessess & Individuals</span></h2>
                <div class="bca-heading__description">
                    <p>Choose the service area that fits your needs — or get in touch and we will point you in the right direction.</p>
                </div>
            </div>
        </div>

        <div class="bca-types__grid">
            <!-- Businesses -->
            <a href="/services/businesses/" class="bca-type-card bca-type-card--business reveal reveal-delay-1">
                <div class="bca-type-card__img">
                    <img src="/wp-content/uploads/2026/03/job-5382501_1280.jpg" alt="Services for Businesses">
                </div>
                <div class="bca-type-card__overlay"></div>
                <div class="bca-type-card__content">
                    <div class="bca-type-card__badge">For Businesses</div>
                    <h2 class="bca-type-card__title">Services for Businesses</h2>
                    <div class="bca-type-card__desc">From start-up to established enterprise — accountancy, tax, payroll, advisory and specialist services designed to help your business grow with confidence.</div>
                    <div class="bca-type-card__services">
                        <span class="bca-type-card__service-pill">Accounting Solutions</span>
                        <span class="bca-type-card__service-pill">Business Tax</span>
                        <span class="bca-type-card__service-pill">Payroll</span>
                        <span class="bca-type-card__service-pill">Audit Services</span>
                        <span class="bca-type-card__service-pill">R&amp;D Tax Relief</span>
                        <span class="bca-type-card__service-pill">Virtual Finance Director</span>
                        <span class="bca-type-card__service-pill">+ 14 more</span>
                    </div>
                    <div class="bca-btn-primary">View Business Services<svg viewBox="0 0 16 16"><path d="M3 8H10M8.5 5.5L11 8L8.5 10.5"></path></svg></div>
                </div>
            </a>
            <!-- Individuals -->
            <a href="/services/individuals/" class="bca-type-card bca-type-card--individuals reveal reveal-delay-2">
                <div class="bca-type-card__img">
                    <img src="/wp-content/uploads/2026/04/individual_business.jpg" alt="Services for Individuals">
                </div>
                <div class="bca-type-card__overlay"></div>
                <div class="bca-type-card__content">
                    <div class="bca-type-card__badge">For Individuals</div>
                    <h2 class="bca-type-card__title">Services for Individuals</h2>
                    <div class="bca-type-card__desc">Personal tax planning, wealth management and estate advice — helping you manage and plan your finances with clarity, confidence and a long-term view.</div>
                    <div class="bca-type-card__services">
                        <span class="bca-type-card__service-pill">Private Client Tax</span>
                        <span class="bca-type-card__service-pill">Self Assessment</span>
                        <span class="bca-type-card__service-pill">Personal Tax Planning</span>
                        <span class="bca-type-card__service-pill">Wealth Management</span>
                        <span class="bca-type-card__service-pill">Estate Planning</span>
                        <span class="bca-type-card__service-pill">Property Tax</span>
                    </div>
                    <div class="bca-btn-primary gold">View Individual Services<svg viewBox="0 0 16 16"><path d="M3 8H10M8.5 5.5L11 8L8.5 10.5"></path></svg></div>
                </div>
            </a>
        </div>
    </div>
</section>

<!-- CTA SECTION -->
<section class="bca-cta bca-cta-var2 service-hub-cta">
    <div class="container">
        <div class="bca-cta-var2__inner reveal visible">
            <div class="bca-cta-var2__text">
                <span class="bca-heading__eyebrow">Not sure where to start?</span>
                <h2>Let us <em>point you in the right direction</em></h2>
                <p>Our team is happy to have an initial no-obligation conversation to understand your needs and recommend the right services for you.</p>
            </div>
            <div class="bca-cta__btns">
                <a href="/contact/" class="bca-btn-primary">Get in Touch<svg viewBox="0 0 16 16"><path d="M3 8H10M8.5 5.5L11 8L8.5 10.5"></path></svg></a>
                <a href="/request-quote/" class="bca-btn-outline">Get a Free Quote</a>
            </div>
        </div>
    </div>
</section>

<!-- CTA ABOUT US -->
<?php echo do_shortcode('[bca_cta_about_us]'); ?>

<?php 
get_footer(); 
?>

<script>
    let params = new URLSearchParams(document.location.search);
    if(parseInt(params.get('content')) === 1) {
        const mainContent = document.getElementById('servicesHub');
        mainContent.scrollIntoView({
            behavior: 'smooth',
            block: 'start'
        });
    }
</script>