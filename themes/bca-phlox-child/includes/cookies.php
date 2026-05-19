<?php 

function bca_cookie_banner() {
    wp_enqueue_style('cookies-style');
    wp_enqueue_script('cookies-js');
   
    ?>
 
    <!-- ── Cookie Banner ── -->
    <div id="bca-cookie-banner" style="display:none;">
        <div class="bca-banner-inner">
            <div class="bca-banner-text">
                <div class="bca-heading__eyebrow">Cookie Policy</div>
                <div class="bca-banner-title">We use cookies on this website</div>
                <p class="bca-banner-desc">
                    We use strictly necessary cookies to keep this site running, and optional cookies for embedded maps and analytics. 
                    You can choose which you accept. Read our <a href="/privacy-policy">Privacy Policy</a> for details.
                </p>
            </div>
            <div class="bca-banner-actions">
                <a class="bca-btn-primary" onclick="acceptAll()">Accept All</a>
                <a class="bca-btn-ghost" onclick="openPrefs()">Manage Preferences</a>
                <!-- <a class="bca-btn-txt" onclick="rejectNonEssential()">Reject Non-Essential</a> -->
            </div>
        </div>
    </div>

    <!-- ── Preferences Modal ── -->
    <div id="bca-prefs-modal">
        <div class="bca-modal">
            <div class="bca-modal-header">
                <div class="bca-heading__eyebrow">Cookie Preferences</div>
                <div class="bca-modal-title">Manage your cookie settings</div>
                <p class="bca-modal-subtitle">Choose which cookies you allow. You can change these settings at any time via our cookie preferences link in the footer.</p>
                <div class="bca-modal-close" onclick="closePrefs()" aria-label="Close">×</div>
            </div>

            <div class="bca-modal-body">
                <!-- Strictly Necessary -->
                <div class="bca-category">
                    <div class="bca-category-info">
                        <div class="bca-category-name">Strictly Necessary<span class="bca-badge bca-badge--required">Always On</span></div>
                        <p class="bca-category-desc">
                            Required for the website to function. These cookies enable core features like page navigation, security, and the contact form. They cannot be disabled.
                        </p>
                    </div>
                    <div class="bca-toggle-wrap">
                        <label class="bca-toggle bca-toggle--locked" title="Required — cannot be disabled">
                            <input type="checkbox" checked disabled>
                            <span class="bca-toggle-slider"></span>
                        </label>
                    </div>
                </div>

                <!-- Embedded Maps -->
                <div class="bca-category">
                    <div class="bca-category-info">
                        <div class="bca-category-name">
                            Embedded Maps
                            <span class="bca-badge bca-badge--maps">Google Maps</span>
                        </div>
                        <p class="bca-category-desc">
                            Our Portsmouth, Romsey, and Swindon office pages include embedded Google Maps to help you find us. 
                            Enabling this allows Google to load interactive maps and may set its own cookies.
                        </p>
                    </div>
                    <div class="bca-toggle-wrap">
                        <label class="bca-toggle" for="toggle-maps">
                            <input type="checkbox" id="toggle-maps">
                            <span class="bca-toggle-slider"></span>
                        </label>
                    </div>
                </div>

                <!-- Marketing
                <div class="bca-category">
                    <div class="bca-category-info">
                        <div class="bca-category-name">Marketing &amp; Remarketing</div>
                        <p class="bca-category-desc">
                            Allows us to show relevant advertising to visitors who have previously visited our site. 
                            We do not currently run remarketing campaigns but this consent covers any future activity.
                        </p>
                    </div>
                    <div class="bca-toggle-wrap">
                        <label class="bca-toggle" for="toggle-marketing">
                            <input type="checkbox" id="toggle-marketing">
                            <span class="bca-toggle-slider"></span>
                        </label>
                    </div>
                </div>  -->
            </div>

            <div class="bca-modal-footer">
                <a class="bca-btn-primary" onclick="savePrefs()">Save My Preferences</a>
                <a class="bca-btn-outline" onclick="acceptAllFromModal()" style="cursor: pointer;">Accept All</a>
            </div>
        </div>
    </div>

    <?php
}

?>