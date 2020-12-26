<?php 
/**
 * Header Navigation template.
 *
 * @package Gamenavigation
 */

 ?>

 <nav class="navbar navbar-expand-lg">
  <div class="logo"> 
    <img src="<?= get_template_directory_uri() . '/assets/img/logo.png' ?>" alt="logo">
  </div>
  <a class="navbar-brand ml-3" href="<?= home_url(); ?>">GAMENAVIGATION.RU</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <i class="fas fa-bars"></i>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?= home_url(); ?>">Главная <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= get_page_link( 18 ); ?>">Прохождения </a>
      </li>
      <!-- <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li> -->

    </ul>
    <form action="/" method="GET" class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" id="s" name="s" value="<?= get_search_query(); ?>" placeholder="Поиск" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><em class="fa fa-search"></em></button>
    </form>
  </div>
</nav>