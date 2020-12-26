<?php
/**
 * Template Name: Game Info
 *
 * @package Gamenavigation
 */

get_header();


// Получаем данные текущего термина (рубрики)
$term = get_queried_object();



?>

<div class="content">

  <!-- TITLE -->
  <div class="title text-center">
    <div class="row">
      <div class="col-12">
        <h1>Информация о <?= get_field('game_name', $term); ?></h1>
      </div>
    </div>
  </div>
  <!-- TITLE end -->

  <div class="container">
    <div class="row">

      <!-- CONTENT -->
      <section class="col-md-9 content order-md-1">

        <div class="tab-content">

          <!-- INFO -->
          <div class="tab-pane fade show active">
            <div class="col-md-12">
              <div class="row">
                <div class="col-md-4 content__game-cover">
                  <img src="<?= get_field('game_cover', $term); ?>" alt="dead_space_cover">
                </div>
                <div class="col-md-8 content__game-info">

                  <div class="paragraph-info">
                    <strong>Разработчик:</strong><br />               
                    <p><?= get_field('creator', $term); ?></p>

                    <strong>Издатель:</strong>                  
                    <p><?= get_field('label', $term); ?></p>

                    <strong>Платформы:</strong>                   
                    <p><?= get_field('platforms', $term); ?></p>

                    <strong>Релиз:</strong>
                    <p><?= get_field('realise', $term); ?></p>

                    <strong>Жанр:</strong>
                    <p><?= get_field('genre', $term); ?></p>

                    <strong>Модель игры:</strong>
                    <p><?= get_field('model', $term); ?></p>

                    <strong>Рейтинг:</strong>
                    <p><?= get_field('age_limit', $term); ?></p>    
                  </div>

                </div>
              </div>
            </div>
            <div class="content__about mt-5">
              <h3 class="text-center">Об игре:</h3>
              <div class="paragraph">
                <p><?= get_field('info', $term); ?></p>
              </div>
            </div>
            <div class="content__system mt-5">
              <h3 class="text-center">Системные требования</h3>
              <div class="paragraph-info">
                <div class="table-responsive">
                  <table class="table table-striped table-dark">
                    <thead>
                      <tr>
                        <th scope="col">Характеристика</th>
                        <th scope="col">Минимальные требования</th>
                        <th scope="col">Рекомендуемые требования</th>

                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">Процессор</th>
                        <td><?= get_field('processor_min', $term); ?></td>
                        <td><?= get_field('processor_max', $term); ?></td>                     
                      </tr>
                      <tr>
                        <th scope="row">Оперативная память</th>
                        <td><?= get_field('ram_min', $term); ?></td>
                        <td><?= get_field('ram_max', $term); ?></td>                       
                      </tr>
                      <tr>
                        <th scope="row">Видеокарта</th>
                        <td><?= get_field('video_card_min', $term); ?></td>
                        <td><?= get_field('video_card_max', $term); ?></td>
                      </tr>
                      <tr>
                        <th scope="row">Место на диске</th>
                        <td><?= get_field('hdd_space_min', $term); ?></td>
                        <td><?= get_field('hdd_space_max', $term); ?></td>           
                      </tr>
                      <tr>
                        <th scope="row">Операционная система</th>
                        <td><?= get_field('os_min', $term); ?></td>
                        <td><?= get_field('os_max', $term); ?></td>                     
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="content__facts mt-5">
              <h3 class="text-center">Интересные факты о <?= get_field('game_name', $term); ?></h3>
              <div class="paragraph">
                <p><?= get_field('facts', $term); ?></p>
              </div>
            </div>
          </div>
          <!-- INFO end -->
        </div>
      </section>
      <!-- CONTENT end -->


      <!-- SIDEBAR -->

      <?php get_template_part('template-part/game/sidebar'); ?>

      <!-- SIDEBAR end -->

    </div>
  </div>
</div>

<?php
get_footer();