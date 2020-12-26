<?php
/**
 * Template Name: Game Chapter
 *
 * @package Gamenavigation
 */

get_header();

global $post;   

$terms = get_the_terms( $post->ID, 'game' );
if ( $terms ) {
  $term = array_shift($terms);
}

?>

<div class="content">

  <!-- TITLE -->
  <div class="title text-center">
    <div class="row">
      <div class="col-12">
        <h1>Прохождение <?= get_field('game_name', $term); ?></h1>
      </div>
    </div>
  </div>
  <!-- TITLE end -->


  <div class="container">
    <div class="row">

      <!-- SIDEBAR -->

      <?php get_template_part('template-part/game/sidebar'); ?>

      <!-- SIDEBAR end -->


      <!-- CONTENT -->     
      <section class="col-md-9 content order-md-1">

        <div class="tab-content" id="v-pills-tabContent">
         
          <!-- CHAPTER -->
          <div>
            <h2 class="text-center"><?php the_field('chapter_name'); ?></h2>
            <div class="row">
              <div class="col-md-8 offset-md-2 text-center chapter-image">
                <img src="<?php the_field('first_image'); ?>" alt="chapter-photo">
              </div>
            </div>

            <div class="paragraph">
              <p><?php the_field('first_part_of_desc'); ?></p>
            </div>
            
            <?php if ( get_field("second_image") ): ?>
            <div class="row">
              <div class="col-md-8 offset-md-2 text-center chapter-image">
                <img src="<?php the_field('second_image'); ?>" alt="chapter-photo">
              </div>
            </div>
            <?php endif; ?>
          
            <?php if ( get_field('second_part_of_desc') ): ?>
            <div class="paragraph">
              <p><?php the_field('second_part_of_desc'); ?></p>
            </div>
            <?php endif; ?>
             
            <?php if ( get_field('third_image') ): ?>
            <div class="row">
              <div class="col-md-8 offset-md-2 text-center chapter-image">
                <img src="<?php the_field('third_image'); ?>" alt="chapter-photo">
              </div>
            </div>
            <?php endif; ?>

            <?php if ( get_field('third_part_of_desc') ): ?>
            <div class="paragraph">
              <p><?php the_field('third_part_of_desc'); ?></p>
            </div>
            <?php endif; ?>

          </div>

          <!-- CHAPTER end -->

        </div>
      </section>

      <!-- CONTENT end -->


    </div>
  </div>

</div>

<?php
get_footer();