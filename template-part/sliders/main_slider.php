<?php 
/**
 * Content Main Slider
 *
 * @package Gamenavigation
 */
 ?>

 <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?= get_template_directory_uri() . '/assets/img/slider/slide_1.jpg' ?>" class="d-block w-100" alt="...">
      <div class="carousel-caption mb-md-5">
        <h5>ПРОХОЖДЕНИЯ ВАШИХ ЛЮБИМЫХ ИГР И НЕ ТОЛЬКО...</h5>
        <p>Добро пожаловать на наш сайт! Здесь Вы найдете прохождения на Ваши любимые игры.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="<?= get_template_directory_uri() . '/assets/img/slider/slide_4.jpg' ?>" class="d-block w-100" alt="...">
      <div class="carousel-caption mb-md-5">
        <h5>ИНТЕРЕСНЫЕ ФАКТЫ О СОЗДАНИИ ВАШИХ ЛЮБИМЫХ ИГР...</h5>
        <p>Как разрабатывались и как выпускались шедевры!</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="<?= get_template_directory_uri() . '/assets/img/slider/slide_5.jpg' ?>" class="d-block w-100" alt="...">
      <div class="carousel-caption mb-md-5">
        <h5>ОПИСАНИЕ ПРОХОЖДЕНИЙ ИГР ОЛДСКУЛ, ТАК И СВЕЖИХ...</h5>
        <p>Мы любим и ценим как игры старой школы, так и новой!</p>
      </div>
    </div>
          <!-- <div class="carousel-item">
            <img src="assets/img/slider/slide_2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>First slide label</h5>
              <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
            </div>
          </div> -->
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>   