<?php
/*
Template Name: Community Page
Author: Deven Warang
*/

get_header(); 
wp_enqueue_style('community-style');
?>

<!-- HERO SECTION -->
<div class="bca-hero-section">
    <div class="bca-hero__overlay"></div>
    <div class="bca-hero container transparent-header">
        <div class="bca-hero__content">
            <div class="bca-hero__eyebrow reveal">
                <p><strong><span>BC&A in the Community</span></strong></p>
            </div>
            <div class="bca-hero__head-wrapper reveal reveal-delay-1">
                <h1 class="bca-hero__title">Proud to serve in the <em>Community</em></h1>
                <p class="bca-hero__text">
                    Over the past 35 years, our commitment to Portsmouth and the surrounding areas has remained an 
                    important part of who we are. We are proud accountants, but we are also active members of this vibrant 
                    seaside city.
                </p>
            </div>
            <div class="bca-hero__btns reveal reveal-delay-4">
                <a href="#partners" class="bca-btn-primary">Our Partners<svg viewBox="0 0 16 16"><path d="M3 8H10M8.5 5.5L11 8L8.5 10.5"></path></svg></a>
                <a href="#community-work" class="bca-btn-ghost">Our Commitment</a>
            </div>
        </div>
    </div>
</div>

<!-- COMMITMENT -->
<section class="bca-commitment" id="community-work">
    <div class="container">
        <div class="bca-commitment__inner">
            <div class="bca-commitment__text reveal">
                <span class="bca-heading__eyebrow">Our Commitment</span>
                <h2>We love Portsmouth. <em>Supporting the community</em> is part of who we are.</h2>
                <p>We are proud accountants, but we are also active members of this vibrant seaside city. Our dedication to making Portsmouth a better place to live, work and raise families is at the heart of everything we do.</p>
                <p>BC&A has built long-standing relationships within the local community by offering practical support, professional guidance and a genuine commitment to causes that make a real difference. Since 2004, that commitment has never wavered.</p>
            </div>
            <div class="bca-commitment__pillars reveal reveal-delay-1">
                <div class="bca-commitment__pillar">
                    <div class="bca-commitment__pillar-num">35<span>+</span></div>
                    <div class="bca-commitment__pillar-label">Years Supporting Portsmouth</div>
                    <div class="bca-commitment__pillar-desc">Continuously investing in the local community since the day we opened our doors.</div>
                </div>
                <div class="bca-commitment__pillar">
                    <div class="bca-commitment__pillar-num">Free<span>.</span></div>
                    <div class="bca-commitment__pillar-label">Charity Consultancy</div>
                    <div class="bca-commitment__pillar-desc">We provide free financial advice to selected charities and non-profit organisations.</div>
                </div>
                <div class="bca-commitment__pillar">
                    <div class="bca-commitment__pillar-num">Local<span>.</span></div>
                    <div class="bca-commitment__pillar-label">Community Focus</div>
                    <div class="bca-commitment__pillar-desc">Our community-first outlook means we always put people before profit in everything we do.</div>
                </div>
                <div class="bca-commitment__pillar">
                    <div class="bca-commitment__pillar-num">Real<span>.</span></div>
                    <div class="bca-commitment__pillar-label">Meaningful Impact</div>
                    <div class="bca-commitment__pillar-desc">Long-standing partnerships with organisations that deliver real, lasting change in Portsmouth.</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ════════════════ SPARK FEATURED PARTNERSHIP ════════════════ -->
<section class="bca-spark reveal">
    <div class="container">
        <div class="bca-spark__card bca-reveal">
        <div class="bca-spark__image">
            <img src="/wp-content/uploads/2026/03/community_donation.webp" alt="Spark Community Space — Portsmouth"/>
        </div>
        <div class="bca-spark__content">
            <div class="bca-spark__badge">✦ Featured Partnership</div>
            <h2>Proud supporters of <em>Spark Community Space</em></h2>
            <p>We have been loyal supporters of Spark Community Space from the very beginning. Spark does outstanding work ensuring the most vulnerable and overlooked members of Portsmouth's community have a place to be recognised, supported and encouraged.</p>
            <p>Their work reflects the kind of local impact we are proud to stand behind, and we are honoured to support an organisation that plays such an important role in the city.</p>
            <a href="https://www.sparkcs.org.uk" target="_blank" rel="noopener" class="bca-spark__link">
            Learn more about Spark Community Space
            <svg viewBox="0 0 12 12"><path d="M2 6h8M6 2l4 4-4 4"/></svg>
            </a>
        </div>
        </div>
    </div>
</section>

<!-- ════════════════ TESTIMONIAL ════════════════ -->
<section class="bca-testimonial">
    <div class="container">
        <div class="bca-testimonial__inner reveal">
            <div class="bca-testimonial__quote-icon">
                <svg viewBox="0 0 24 24"><path d="M3 21c3 0 7-1 7-8V5c0-1.25-.756-2.017-2-2H4c-1.25 0-2 .75-2 1.972V11c0 1.25.75 2 2 2 1 0 1 0 1 1v1c0 1-1 2-2 2s-1 .008-1 1.031V20c0 1 0 1 1 1z"/><path d="M15 21c3 0 7-1 7-8V5c0-1.25-.757-2.017-2-2h-4c-1.25 0-2 .75-2 1.972V11c0 1.25.75 2 2 2h.75c0 2.25.25 4-2.75 4v3c0 1 0 1 1 1z"/></svg>
            </div>
            <blockquote class="bca-testimonial__text">
                "Dear Tahir and Kelly, thank you so much for supporting the PHS Careers Event on Tuesday. 
                I am so grateful to you both for your enthusiastic support of the evening and for the conversations 
                you had. The feedback that I have had from students, parents and colleagues has been hugely 
                positive."
            </blockquote>
            <div class="bca-testimonial__author">
                <div class="bca-testimonial__author-line"></div>
                <div>
                    <div class="bca-testimonial__author-name">Sammy Davies</div>
                    <div class="bca-testimonial__author-role">Head of Careers, Portsmouth High School GDST</div>
                </div>
                <div class="bca-testimonial__author-line"></div>
            </div>
        </div>
    </div>
</section>

<!-- ════════════════ FREE CONSULTANCY ════════════════ -->
<section class="bca-consultancy">
    <div class="container">
        <div class="bca-consultancy__inner">
            <div class="bca-consultancy__image reveal">
                <img src="https://images.unsplash.com/photo-1531206715517-5c0ba140b2b8?w=900&q=80" alt="BC&A community consultancy"/>
                <div class="bca-consultancy__stat">
                    <div class="bca-consultancy__stat-num">Free<span>.</span></div>
                    <div class="bca-consultancy__stat-label">Advice for charities &amp;<br/>non-profit organisations</div>
                </div>
            </div>
            <div class="bca-consultancy__text reveal reveal-delay-1">
                <span class="bca-heading__eyebrow">Our Commitment</span>
                <h2>Free consultancy for <em>charities &amp; community organisations</em></h2>
                <p>We understand that sound financial guidance can make a real difference to the success of any organisation, particularly within the not-for-profit sector.</p>
                <p>That is why we offer free advice and consultancy services to selected charities and non-profit organisations delivering vital work in our community. Our expertise in finance and accountancy helps these organisations maximise their impact, ensuring that every penny raised is used effectively and efficiently.</p>
            </div>
        </div>
    </div>
</section>

<!-- ════════════════ PARTNERS ════════════════ -->
<section class="bca-partners" id="partners">
    <div class="container">
        <div class="bca-heading-section reveal">
            <div class="bca-heading-container">
                <div class="bca-heading__eyebrow">Our Key Partners</div>
                <h2 class="bca-heading__title">Supporting local organisations <span>that make a difference</span></h2>
                <div class="bca-heading__description">
                    <p>Our team is passionate about supporting causes close to our hearts. We are proud to work alongside remarkable organisations across Portsmouth.</p>
                </div>
            </div>
        </div>

        <div class="bca-partners__grid">
            <div class="bca-partner-card reveal reveal-delay-1">
                <div class="bca-partner-card__img">
                    <img src="/wp-content/uploads/2026/03/spark_community_logo.svg" alt="Spark Community Space"/>
                </div>
                <div class="bca-partner-card__body">
                    <div class="bca-partner-card__name">Spark Community Space</div>
                    <div class="bca-partner-card__desc">An inspiring initiative focused on creating a shared space where people can connect, learn and grow. Our role includes supporting planning and financial guidance that helps sustain these valuable community hubs.</div>
                    <a href="https://sparkcommunityspace.co.uk/" target="_blank" rel="noopener" class="bca-partner-card__link">
                        Learn more
                        <svg viewBox="0 0 12 12"><path d="M2 6h8M6 2l4 4-4 4"/></svg>
                    </a>
                </div>
            </div>

            <div class="bca-partner-card reveal reveal-delay-2">
                <div class="bca-partner-card__img">
                    <img src="/wp-content/uploads/2026/03/mind_solent.svg" alt="Solent Mind"/>
                </div>
                <div class="bca-partner-card__body">
                    <div class="bca-partner-card__name">Solent Mind</div>
                    <div class="bca-partner-card__desc">Mental health is a cause we care deeply about. Solent Mind provides essential support for those facing mental health challenges, and we are proud to help raise awareness and support meaningful fundraising efforts.</div>
                    <a href="https://www.solentmind.org.uk" target="_blank" rel="noopener" class="bca-partner-card__link">
                        Learn more
                        <svg viewBox="0 0 12 12"><path d="M2 6h8M6 2l4 4-4 4"/></svg>
                    </a>
                </div>
            </div>

            <div class="bca-partner-card bca-partner-card--cta reveal reveal-delay-3">
                <div class="bca-partner-card__img">
                    <div class="bca-partner-card--cta-icon">
                        <svg viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg>
                    </div>
                </div>
                <div class="bca-partner-card__body">
                    <div class="bca-partner-card__name">Local Community Initiatives</div>
                    <div class="bca-partner-card__desc">Beyond formal partnerships, we continue to support schools, local events and charitable activity throughout the region, helping organisations that contribute positively to life across Portsmouth and the surrounding area.</div>
                    <a href="/contact/" class="bca-partner-card__link">
                        Get in touch
                        <svg viewBox="0 0 12 12"><path d="M2 6h8M6 2l4 4-4 4"/></svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ════════════════ CTA ════════════════ -->
<section class="bca-cta">
    <div class="container">
        <div class="bca-cta__inner reveal">
            <div class="bca-cta__text">
                <span class="bca-heading__eyebrow white">Work with BC&A</span>
                <h2>Accountants who care about <em>community as much as business</em></h2>
                <p>BC&A combines commercial expertise with a genuine commitment to the people and organisations around us. Speak to our team to find out how we can support your business, charity or organisation.</p>
            </div>
            <div class="bca-cta__btns">
                <a href="/contact/" class="bca-btn-primary gold">
                    Get in Touch
                    <svg viewBox="0 0 16 16"><path d="M3 8h10M9 4l4 4-4 4"/></svg>
                </a>
                <a href="/about-us/" class="bca-btn-ghost">About BC&A</a>
            </div>
        </div>
    </div>
</section>


<?php 
get_footer();
?>