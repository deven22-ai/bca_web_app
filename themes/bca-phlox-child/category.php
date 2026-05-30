<?php
/*
Description: News Listing Page : /category/..
Author: Deven Warang
*/

get_header();

$paged    = filter_input(INPUT_GET, 'paged') ? : get_query_var('paged');
$category = filter_input(INPUT_GET, 'category') ? : 'all'; 
$paged    = ($paged === null || $paged === 0) ? 1 : $paged;

get_template_part('template-parts/news-grid', null, [
    'category' => $category,
    'paged'    => $paged,
]);


get_footer();
?>
