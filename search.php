<?php
/**
 * Template Name: Search Result
 *
 * @package Gamenavigation
 */

get_header();
?>

<div class="content">

  <div class="container black-container">

    <!-- SEARCH RESULT -->

    <?php get_template_part( 'template-part/search/search_result' ); ?>

    <!-- SEARCH RESULT -->


    <!-- LAST GAMINGS -->
    
    <?php get_template_part( 'template-part/main-index/last_gamings' ) ?>

    <!-- LAST GAMINGS end -->


    <!-- BUTTON-GAMING-CATALOG -->
    
    <?php get_template_part( 'template-part/main-index/button_gaming_catalog' ); ?>

    <!-- BUTTON-GAMING-CATALOG -->

  </div>

</div>

<?php
get_footer();
