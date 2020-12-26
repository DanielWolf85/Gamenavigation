<?php 
/**
 * Content part Last Gamings
 *
 * @package Gamenavigation
 */

  $last_terms = get_terms([
    'taxonomy' => 'game',
    'orderby' => 'id',
    'order' => 'DESC',
    'get' => 4
  ]);

 ?>

 <section class="last-gaming">
  <div class="row">
    <div class="col-md-12 text-center">
      <h3 class="last-gaming__title">Последние прохождения</h3>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12 py-md-4 px-md-5">
      <div class="row justify-content-around">

        <?php foreach ($last_terms as $term): ?>
        <div class="last-gaming__card col-md-3 col-6">
          <a href="<?= get_term_link( $term->term_id, 'game'); ?>">
            <div class="last-gamings__image text-center p-4">
              <img src="<?= get_field('game_cover', $term); ?>" alt="cover">
            </div>
            <div class="last-gaming__name text-center">
              <p><?= get_field('game_name', $term); ?></p>
            </div>
          </a>
        </div>
        <?php endforeach; ?>

      </div>
    </div>
  </div>     
</section>