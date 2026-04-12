<?php
/*
Template Name: File Upload
Author: Deven Warang
*/
get_header();
wp_enqueue_script('file-upload-js');
wp_enqueue_style('file-upload-style');
?>

<!-- HERO SECTION -->
<div class="bca-hero-section">
    <div class="bca-hero container transparent-header">
        <div class="bca-hero__content">
            <div class="bca-hero__eyebrow reveal">
                <p><strong><span>Client Portal</span></strong></p>
            </div>
            <div class="bca-hero__head-wrapper reveal reveal-delay-1">
                <h1 class="bca-hero__title">Secure <em>File Upload</em></h1>
                <p class="bca-hero__text">
                    Upload documents securely to your BC&A adviser. Select your office, 
                    add your details and drop your files — we'll take it from there.
                </p>
            </div>
        </div>
    </div>
</div>

<!-- FILE UPLOAD FORM -->
<section class="bca-upload">
    <div class="container">
        <div class="bca-upload__inner">
            <!-- Main upload card -->
            <form id="uploadForm" class="bca-form-card reveal" novalidate>
                <h2>Upload your documents</h2>
                <p>Fill in your details, select your office and upload your files below.</p>
                <div class="bca-form-row bca-form-row--full">
                    <div class="bca-field">
                        <label>Upload to Office</label>
                        <select id="office" required="">
                            <option value="" disabled="" selected="">—Please choose an option—</option>
                            <option value="portsmouth">Portsmouth — Head Office</option>
                            <option value="romsey">Romsey — Regional Hub</option>
                            <option value="swindon">Swindon — Expansion Site</option>
                        </select>
                    </div>
                </div>
                <!-- Dropbox -->
                <div class="bca-form-row bca-form-row--full">
                    <div class="bca-field">
                        <label>Upload Documents</label>
                        <div class="bca-dropzone" id="dropzone">
                            <input type="file" id="fileInput" multiple="" accept=".pdf,.doc,.docx,.xls,.xlsx,.csv,.jpg,.jpeg,.png,.gif,.zip,.txt,.msg" aria-label="File upload">
                            <div class="bca-dropzone__icon"><svg viewBox="0 0 24 24"><path d="M21 15v4a2 2 0 01-2 2H5a2 2 0 01-2-2v-4"></path><polyline points="17 8 12 3 7 8"></polyline><line x1="12" y1="3" x2="12" y2="15"></line></svg></div>
                            <div class="bca-dropzone__title">Drop files here or click to browse</div>
                            <div class="bca-dropzone__sub">Upload multiple files at once — all common document formats accepted</div>
                            <div class="bca-dropzone__btn">
                                <svg viewBox="0 0 16 16" width="13" height="13"><path d="M8 1v10M4 7l4-4 4 4" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round"></path><path d="M2 13h12" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round"></path></svg>
                                Choose Files
                            </div>
                            <div class="bca-dropzone__types">PDF · DOC · DOCX · XLS · XLSX · CSV · JPG · PNG · ZIP · Max 50MB per file</div>
                        </div>
                    </div>
                </div>

                <!-- File list -->
                <div class="bca-file-list" id="fileList"></div>

                <!-- Submit -->
                <div class="bca-form-submit">
                    <p>Your files are transmitted securely. By uploading you agree to our <a href="/privacy-policy/">Privacy Policy</a>.</p>
                    <button type="submit" class="bca-upload-submit__btn" id="submitBtn" disabled>
                        Send Files to BC&A
                        <svg viewBox="0 0 16 16"><path d="M3 8h10M9 4l4 4-4 4"/></svg>
                    </button>
                </div>
            </form>

            <!-- Sidebar -->
            <aside class="bca-upload-sidebar">
                <!-- Tips -->
                <div class="bca-info-card reveal reveal-delay-1">
                    <div class="bca-info-card__head">
                        <svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12.01" y2="16"></line></svg>
                        <h4>Tips for uploading</h4>
                    </div>
                    <div class="bca-info-card__body">
                        <ul class="bca-tips">
                            <li>
                                <svg viewBox="0 0 16 16"><polyline points="2,8 6,12 14,4"></polyline></svg>
                                Use clear file names so your adviser can identify them easily
                            </li>
                            <li>
                                <svg viewBox="0 0 16 16"><polyline points="2,8 6,12 14,4"></polyline></svg>
                                You can upload multiple files in one submission
                            </li>
                            <li>
                                <svg viewBox="0 0 16 16"><polyline points="2,8 6,12 14,4"></polyline></svg>
                                For large batches, zip your files before uploading
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Security note -->
                <div class="bca-security-note reveal reveal-delay-2">
                    <svg viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
                    <p>
                        <strong>Your files are secure</strong>
                        All uploads are encrypted in transit using SSL. Your documents are received only by authorised BC&amp;A staff and are never shared with third parties.
                    </p>
                </div>
            </aside>
        </div>

        <div class="bca-upload-help reveal">
            <div class="bca-upload-help__text">
                <strong>Having trouble uploading?</strong>
                Call or email us and we can arrange an alternative secure transfer method.
            </div>
            <div class="bca-cta__btns">
                <a href="tel:02392833300" class="bca-btn-primary" style="gap: 10px;display: flex;"><svg viewBox="0 0 16 16"><path d="M14 10.67v2a1.33 1.33 0 01-1.45 1.33 13.2 13.2 0 01-5.75-2.05 13 13 0 01-4-4 13.2 13.2 0 01-2.05-5.78A1.33 1.33 0 012.07 1h2a1.33 1.33 0 011.33 1.15c.085.64.24 1.27.467 1.87a1.33 1.33 0 01-.3 1.4L4.6 6.4a10.67 10.67 0 004 4l.98-.98a1.33 1.33 0 011.4-.3c.6.228 1.23.382 1.87.467A1.33 1.33 0 0114 10.67z"></path></svg>02392 833 300</a>
                <a href="mailto:info@bcaaccountants.com" class="bca-btn-outline">Email Us</a>
            </div>
        </div>
    </div>
</section>


<?php 
get_footer();
?>