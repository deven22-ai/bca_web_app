<?php 

if (!defined('ABSPATH')) {
    exit;
}

function getAllSectors() {
    wp_enqueue_style('sector-style');

   /* $sectors = array(
        array('name' => 'Property and construction', 'image' => 'http://bca-new2.local/wp-content/uploads/2026/03/property_construction.jpg'),
        array('name' => 'Retail', 'image' => 'http://bca-new2.local/wp-content/uploads/2026/02/retail.jpg'),
        array('name' => 'Hospitality, tourism and leisure', 'image' => 'http://bca-new2.local/wp-content/uploads/2026/02/hospitality.jpg'),
        array('name' => 'Healthcare', 'image' => 'http://bca-new2.local/wp-content/uploads/2026/02/medical.jpg'),
        array('name' => 'Agriculture', 'image' => 'http://bca-new2.local/wp-content/uploads/2026/03/agriculture.jpg'),
        array('name' => 'Real Estate & Landlords', 'image' => 'http://bca-new2.local/wp-content/uploads/2026/03/real_estate_landlord.jpg'),
        array('name' => 'City and Parish Councils', 'image' => 'http://bca-new2.local/wp-content/uploads/2026/03/city_parish_council.jpg'),
        array('name' => 'Banking', 'image' => 'http://bca-new2.local/wp-content/uploads/2026/03/banking.jpg'),
        array('name' => 'Charities and CIC', 'image' => 'http://bca-new2.local/wp-content/uploads/2026/03/charity_cic.jpg'),
        array('name' => 'Manufacturing & engineering', 'image' => 'http://bca-new2.local/wp-content/uploads/2026/03/manufacturing.jpg'),
        array('name' => 'Motorsport', 'image' => 'http://bca-new2.local/wp-content/uploads/2026/03/motorsport.jpg'),
        array('name' => 'Influences', 'image' => 'http://bca-new2.local/wp-content/uploads/2026/03/influencers.jpg'),
        array('name' => 'Sports professional', 'image' => 'http://bca-new2.local/wp-content/uploads/2026/03/athlete.jpg'),
        array('name' => 'Technology', 'image' => 'http://bca-new2.local/wp-content/uploads/2026/03/technology.jpg'),
        array('name' => 'Owner managed and family businesses', 'image' => 'http://bca-new2.local/wp-content/uploads/2026/03/family_businesses.jpg'),
        array('name' => 'Private client', 'image' => 'http://bca-new2.local/wp-content/uploads/2026/03/private_client.jpg'),
        array('name' => 'Start-ups and scale up', 'image' => '')
    ); 
    */
    
    $query = new WP_Query(array(
        'post_type'      => 'sector',
        'posts_per_page' => -1,
        'post_status'    => 'publish',
        'orderby'        => 'title',
        'order'          => 'ASC'
    ));

    ob_start();

    if ($query->have_posts()) {
        ?>
        <div class="bca-sectors-grid">
        <?php
        while ($query->have_posts()) {
            $query->the_post();
            ?>
            <a class="bca-sector-card-minimal" href="<?php the_permalink(); ?>">
                <div class="bca-sector-card-minimal__image">
                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'large'); ?>">
                </div>
                <div class="bca-sector-card-minimal__content">
                    <h4><?php the_title(); ?></h4>
                </div>
            </a>
            <?php
        }
        wp_reset_postdata();
        ?>
        </div>
    <?php
    } else  {
        ?>
        <p>No sectors found.</p>
        <?php 
    }

    return ob_get_clean();
}

function getSectorRow() {
    wp_enqueue_style('sectors-style');
    ob_start();

    /* Query Sector */
    $query = new WP_Query(array(
        'post_type'      => 'sector',
        'posts_per_page' => -1,
        'post_status'    => 'publish',
        'orderby'        => 'title',
        'order'          => 'ASC'
    ));

    if ($query->have_posts()): ?>
    <section class="bca-explore">
        <div class="bca-explore__header">
            <div>
                <span class="bca-section__eyebrow" style="color: var(--bca-text-desc);">Sectors We Support</span>
                <h2 class="bca-explore__title">Specialist insight across a range of sectors</h2>
            </div>
        </div>    
 
        <!------ Sector Row ---------->
        <div class="bca-explore__row">
            <div class="bca-explore__track" id="row1">
                <?php while($query->have_posts()) :  $query->the_post(); ?>
                <a href="<?php the_permalink(); ?>" class="bca-sector-card">
                    <img class="bca-sector-card__img" 
                        src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'large'); ?>"/>
                    <div class="bca-sector-card__overlay"></div>
                    <span class="bca-sector-card__name"><?php the_title(); ?></span>
                </a>
                <?php endwhile; ?>
            </div>
        </div>
    </section>
    <?php endif;

    return ob_get_clean();
}


add_shortcode('bca_sectors', 'getAllSectors');
add_shortcode('bca_sector_row', 'getSectorRow');
?>
