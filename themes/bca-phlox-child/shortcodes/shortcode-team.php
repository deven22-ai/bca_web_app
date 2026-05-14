<?php
if (!defined('ABSPATH')) {
    exit;
}

function team_grid_shortcode() {

    $offTerm = get_terms([
        'taxonomy'   => 'office',
        'hide_empty' => true,
        'meta_key' => 'order',
        'orderby' => 'meta_value_num',
        'order' => 'ASC'
    ]);

    $query = new WP_Query([
        'post_type'      => 'team',
        'posts_per_page' => -1,
        'post_status'    => 'publish',
        'orderby'        => 'menu_order',
        'order'          => 'ASC',
    ]);
    
    return bca_render_team_grid($offTerm, $query->posts);
}

function portsmouthTeam() {
    return bca_render_team_grid(null, new WP_Query([
        'post_type'      => 'team',
        'posts_per_page' => -1,
        'post_status'    => 'publish',
        'meta_key'       => '_order_office_portsmouth',
        'orderby'        => 'meta_value_num',
        'order'          => 'ASC',
        'meta_query'     => [
            [
                'key'     => '_order_office_portsmouth',
                'value'   => '0',
                'compare' => '>',
                'type'    => 'NUMERIC',
            ]
        ],
        'tax_query'      => [
            [
                'taxonomy' => 'office',
                'field'    => 'slug',
                'terms'    => 'portsmouth',
            ]
        ],
    ])->posts, 'portsmouth');
}

function romseyTeam() {
    return bca_render_team_grid(null, new WP_Query([
        'post_type'      => 'team',
        'posts_per_page' => -1,
        'post_status'    => 'publish',
        'meta_key'       => '_order_office_romsey',
        'orderby'        => 'meta_value_num',
        'order'          => 'ASC',
        'meta_query'     => [
            [
                'key'     => '_order_office_romsey',
                'value'   => '0',
                'compare' => '>',
                'type'    => 'NUMERIC',
            ]
        ],
        'tax_query'      => [
            [
                'taxonomy' => 'office',
                'field'    => 'slug',
                'terms'    => 'romsey',
            ]
        ],
    ])->posts);
}

function kumarTeam() {
    return bca_render_team_grid(null, new WP_Query([
        'post_type'      => 'team',
        'posts_per_page' => -1,
        'post_status'    => 'publish',
        'meta_key'       => '_order_office_kumar',
        'orderby'        => 'meta_value_num',
        'order'          => 'ASC',
        'meta_query'     => [
            [
                'key'     => '_order_office_kumar',
                'value'   => '0',
                'compare' => '>',
                'type'    => 'NUMERIC',
            ]
        ],
        'tax_query'      => [
            [
                'taxonomy' => 'office',
                'field'    => 'slug',
                'terms'    => 'kumar',
            ]
        ],
    ])->posts, 'kumar');
}

function swindonTeam() {
    $query = new WP_Query([
        'post_type'      => 'team',
        'posts_per_page' => 4,
        'post_status'    => 'publish',
        'orderby'        => 'date',
        'order'          => 'ASC',
        'tax_query'      => [
            [
                'taxonomy' => 'office',
                'field'    => 'slug',
                'terms'    => 'swindon',
            ]
        ],
    ]);

    return bca_render_team_grid(null, $query->posts, 'swindon');
}

/**
 * @param WP_Term[] $offTerm - list of office terms (for pills and filtering)
 */
function bca_render_team_grid(?array $offTerm, array $posts, $team='') {
    /* Import style and scripts */
    wp_enqueue_style('team-style');
    wp_enqueue_script('team-script');
    
    // pass the $office variable
    $selectedOffice = isset($_GET['office']) ? sanitize_text_field($_GET['office']) : '';
    wp_localize_script('team-script', 'selectedOffice', array( 'office' => $selectedOffice ));

    $isFullTeam = $offTerm != null && !empty($offTerm) && count($offTerm) > 1;

    ob_start(); 

    /*-- Custom Team grid HTML -- */
    if($isFullTeam) : ?>
    <div class="bca-team__filter-wrap reveal">
        <div class="bca-team__pills">
            <div class="bca-team__pill active" data-office="all">
                <span class="bca-team__pill-dot"></span>All Practices
            </div>
            <?php 
            foreach($offTerm as $term) : ?>
            <div class="bca-team__pill" data-office="<?php echo esc_attr($term->slug); ?>">
                <span class="bca-team__pill-dot"></span><?php echo esc_attr($term->name) ?>
            </div>
            <?php endforeach; ?>
        </div>
        <div class="bca-team__filter-count">
            Showing <strong id="visibleCount">5</strong> team members
        </div>
    </div>
    <?php endif; ?>

     <!-- Grid — all members in one flat grid, filtered by JS -->
    <div class="bca-team__grid" id="teamGrid">
    <?php 
    global $post;
    foreach($posts as $post) : 
        setup_postdata($post);

        $offTerm = get_the_terms(get_the_ID(), 'office');        
        $ofc_slug_arr = !empty($offTerm) && !is_wp_error($offTerm) ? array_column($offTerm, 'slug') : [];
        
        $data_attrs = '';
        $offices = get_terms(['taxonomy' => 'office', 'hide_empty' => false]);
        foreach ($offices as $office) {
            $val = get_post_meta(get_the_ID(), '_order_ourteam_' . $office->slug, true);
            $data_attrs .= ' data-order-' . $office->slug . '="' . intval($val) . '"';
        }

        /* 
        $ofc_name_arr = !empty($offTerm) && !is_wp_error($offTerm) ? array_column($offTerm, 'name') : [];
        $office_member = "";
        foreach($ofc_slug_arr as $i) :
            $office_member = $office_member . " bca-member--" . $i;
        endforeach; 
        */ 
        ?>

        <div class="bca-member <?php echo !$isFullTeam && $team != '' ? 'bca-member--' . $team : '' ?> reveal reveal-delay-3" 
                data-office="<?php echo implode(',', $ofc_slug_arr) ?>" <?php echo $data_attrs ?>>
            <div class="bca-member__photo <?php /* Adds soft-bg under images --> echo !$isFullTeam ? 'soft-bg' : '' */ ?>">
                <?php if(has_post_thumbnail()): ?>
                <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full') ?>" alt="<?php the_title(); ?>"/>
                <?php else : ?>
                <div class="no-img"></div>
                <?php endif; ?>
                <?php /*if(!empty($ofc_name_arr) && $isFullTeam): ?>
                <span class="bca-member__tag"><?php echo implode(', ', $ofc_name_arr); ?></span>
                <?php endif; */ ?>
            </div>
            <div class="bca-member__body">
                <div class="bca-member__title-wrap">
                    <div class="bca-member__name"><?php the_title(); ?></div>
                    <div class="bca-member__quals"><?php echo get_post_meta(get_the_ID(), 'qualification', true); ?></div>
                </div>
                <div class="bca-member__role"><?php echo get_post_meta(get_the_ID(), 'designation', true); ?></div>
                <!--<div class="bca-member__contact">
                    <a href="mailto:david@bcaaccountants.com" class="bca-member__btn" title="Email">
                        <svg viewBox="0 0 24 24"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                    </a>
                    <a href="tel:02392833300" class="bca-member__btn" title="Call">
                        <svg viewBox="0 0 24 24"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z"/></svg>
                    </a>
                    <a href="https://linkedin.com" target="_blank" class="bca-member__btn bca-member__btn--li" title="LinkedIn">
                        <svg viewBox="0 0 24 24"><path d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6z"/><rect x="2" y="9" width="4" height="12"/><circle cx="4" cy="4" r="2"/></svg>
                    </a>
                </div> -->
            </div>
        </div>
    <?php 
    endforeach;
    wp_reset_postdata(); // Reseting the gobal post content back to what was before the while loop ?>
    
    </div>
    <script>
        var elVisibleCount = document.getElementById('visibleCount');
        if(elVisibleCount) elVisibleCount.textContent = document.querySelectorAll('.bca-member').length;
    </script>

    <?php
    return ob_get_clean();
}

add_shortcode('bca_team_grid', 'team_grid_shortcode');
add_shortcode('bca_portsmouth_team', 'portsmouthTeam');
add_shortcode('bca_kumar_team', 'kumarTeam');
add_shortcode('bca_romsey_team', 'romseyTeam');
add_shortcode('bca_swindon_team', 'swindonTeam');
?>