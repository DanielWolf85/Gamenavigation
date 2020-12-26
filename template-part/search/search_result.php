<?php
/**
 * Search part Search Result
 *
 * @package Gamenavigation
 */

?>


<div class="row text-center">
  <div class="col-md-12 my-5">
    <h3>Вот что мы нашли по запросу <?= $_GET['s']; ?></h3>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="row">

      <?php

      // Получаем термины кастомной таксономии
      
      $terms = get_terms([
        'taxonomy' => 'game',
        'hide_empty' => true,
      ]);

      // пробегаемся по всем термам      

      foreach ($terms as $term):

      // получаем название игры из терма
      $field = get_field('game_name', $term);

      // приводим название игры из терма к нижнему регитстру
      $field_lower = mb_strtolower( get_field('game_name', $term) );

        // если название игры равно запросу пользователя
        // или название игры, приведенное в нижний регистр 
        // равно запросу пользователя, то выводим значения
        // и верстку
        
        if ( $field == $_GET['s'] || $field_lower == $_GET['s'] ):

        // привод поля в нижний регистр нужен для того,
        // чтобы если пользователь введет название 
        // в нижнем регистре,
        // игра все-равно нашлась
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
                  <p class="card-text">
                    <small class="text">
                      <?= mb_substr( get_field('info', $term), 0, 120 ) . '...'; ?>
                    </small>
                  </p>
                </div>
              </div>
            </div>
          </div> 
        </a>               
      </div>

      <?php

        else: 
      ?>
          

      <?php

        endif;

      endforeach;

      ?>

    </div>
  </div>
</div>
