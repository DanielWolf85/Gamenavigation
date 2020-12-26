<?php 
/**
 * Gaming Catalog part Catalog
 *
 * @package Gamenavigation
 */


?>


<div style="color: #ccc;">
  
  <?php

  // Получаем термины кастомной таксономии
  $terms = get_terms([
    'taxonomy' => 'game',
    'hide_empty' => true,
  ]);

  ?>


<section class="gaming-catalog my-md-5">
  <div class="row">
    <div class="col-md-12 text-center">
      <h3>Каталог прохождений</h3>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="row">
        <?php
        // Циклом выводим блоки
        
        foreach ($terms as $term):
          // print_r($term);die();
        ?> 
        
        <div class="col-md-6">
          <a href="<?= get_term_link( $term->term_id, 'game' ); ?>">
            <div class="card bg-dark mb-3">
              <div class="row no-gutters">
                <div class="col-md-4">
                  <img src="<?= get_field('game_cover', $term); ?>" class="card-img" alt="cover">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">Прохождение <?= get_field('game_name', $term); ?></h5>
                    <p class="card-text"></p>
                    <p class="card-text"><small class="text"><?= mb_substr( get_field('info', $term), 0, 120 ) . '...'; ?></small></p>
                  </div>
                </div>
              </div>
            </div> 
          </a>               
        </div>
        
        <?php 

      endforeach; ?>
        
      </div>
    </div>
  </div>
</section>