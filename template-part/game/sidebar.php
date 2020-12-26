<?php
/**
 * Game part Sidebar
 *
 * @package Gamenavigation
 */

  global $post;

  $terms = get_the_terms( $post->ID, 'game' );
  if ( $terms ) {
    $term = array_shift($terms);
  }

?>

<section class="col-md-3 sidebar order-md-2">
  <!-- content-navigation -->
  <div class="nav flex-column">
    <a class="nav-link" href="<?= get_term_link( $term->term_id, 'game' ); ?>">
      Информация
    </a>
    <br />
    <h5>Главы</h5>
    <br />

    <?php

    $condition = [
      'post_type' => 'chapter',
      'post_status' => 'publish',
    ];

    $the_query = new WP_Query( $condition );
    
    if ( $the_query->have_posts() ) {     
      while ( $the_query->have_posts() ) {

        $the_query->the_post();

        if ( has_term( $term->slug, 'game', $post->ID ) ) {
        ?>
          <a class="nav-link" href="<?php the_permalink(); ?>">
            <?php the_field('chapter_name'); ?>
          </a>
        <?php 
        }
       
      }

      wp_reset_postdata();
    } else {
      // no posts
    }
    
    
    ?>

  </div>
  <!-- content-navigation end -->
</section>
