<?php

/*
 * Description: Custom shortcode to display team members
 */

if (!defined('ABSPATH')) {
    exit;
}

function team_grid_shortcode() {

    $office_terms = get_terms([
        'taxonomy'   => 'office',
        'hide_empty' => true,
    ]);


    $query = new WP_Query([
        'post_type'      => 'team',
        'posts_per_page' => -1,
        'post_status'    => 'publish',
        'orderby'        => 'date',
        'order'          => 'ASC',
    ]);
    
    return generateTeam($office_terms, $query);
}

function team_grid_portsmouth_shortcode() {
    $query = new WP_Query([
        'post_type'      => 'team',
        'posts_per_page' => -1,
        'post_status'    => 'publish',
        'orderby'        => 'date',
        'order'          => 'ASC',
        'tax_query'      => [
            [
                'taxonomy' => 'office',
                'field'    => 'slug',
                'terms'    => 'portsmouth',
            ]
        ],
    ]);

    return generateTeam(null, $query);
}

function generateTeam($office_terms, $query) {
    /* Import style and scripts */
    wp_enqueue_style('team-style');
    wp_enqueue_script('team-script');
    
    ob_start(); 

    /*-- Custom Team grid HTML -- */
    if($office_terms !== null && !empty($office_terms) && count($office_terms) > 1) {
        ?>
        <div class="bca-team-filter-bar">
            <select id="bca-office-filter" class="bca-dropdown">
                <option value="all">All Offices</option>
                <?php 
                foreach($office_terms as $term) {?>
                <option value="<?php echo esc_attr($term->slug); ?>">
                    <?php echo esc_attr($term->name) ?>
                </option>
                <?php
                }
                ?>
            </select>
        </div>
        <?php
    }
    
    ?>
    <div class="bca-team-grid">
        <?php
        while($query->have_posts()) {
            $query->the_post(); 

            $office_slug = [];
            $member_offices = get_the_terms(get_the_ID(), 'office');
            if (!empty($member_offices) && !is_wp_error($member_offices)) {
                foreach ($member_offices as $member_office) {
                    $office_slug[] = $member_office->slug;
                }
            }
            $office_data = implode(' ', $office_slug);
            ?>
            <div class="bca-team-card" data-office="<?php echo esc_attr($office_data); ?>">
                <div class="bca-profile-card">
                    <div class="bca-team-image">
                        <?php 
                        if(has_post_thumbnail()) {
                            the_post_thumbnail('full');
                        } else { ?>
                        <div style="height: 300px;background:#eee;"></div>
                        <?php
                        }    
                        ?>
                    </div>
                    <div class="bca-team-content">
                        <h2 class="bca-team-name"><?php the_title(); ?></h2>
                        <div class="bca-team-designation">
                            <?php echo get_post_meta(get_the_ID(), 'designation', true); ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php 
        } 
        wp_reset_postdata(); // Reseting the gobal post content back to what was before the while loop ?>
    </div>

    <?php
    return ob_get_clean();
}

add_shortcode('bca_team_grid', 'team_grid_shortcode');
add_shortcode('team_grid_portsmouth', 'team_grid_portsmouth_shortcode');
?>