<?php 
/**
 * Template Name: Gaming Catalog
 *
 * @package Gamenavigation
 */

get_header();
?>

<div class="content">

  <div class="container black-container">

    <!-- SECTION-CATALOG -->
    
    <?php get_template_part( 'template-part/gaming-catalog/catalog' ); ?>

    <!-- SECTION-CATALOG end -->


    <!-- SLIDER -->   
    
    <?php get_template_part( 'template-part/sliders/main_slider' ); ?>

    <!-- SLIDER end -->


    <!-- LAST GAMINGS -->
    
    <?php get_template_part( 'template-part/main-index/last_gamings' ); ?>

    <!-- LAST GAMINGS end -->

  </div>
    
</div>

<?php
get_footer();