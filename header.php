<?php
/**
 * Header template.
 *
 * @package Gamenavigation
 */

?>

<!doctype html>
<html lang="<?php language_attributes(); ?>">

<head>
  <!-- Required meta tags -->
  <meta charset="<?php bloginfo( 'charset' ) ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title><?php bloginfo( 'title' ); ?></title>

  <!-- Google Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600,700&amp;subset=cyrillic">

  <!-- Font awesome -->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

  <!-- Baguette Css -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.1/baguetteBox.min.css">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>
  <?php 
    if (function_exists( 'wp_body_open' )) {
      wp_body_open();
    }
  ?>

  <!-- HEADER -->
  <header class="main-header">
    
    <?php get_template_part( 'template-part/header/nav' ); ?>

  </header>
  <!-- HEADER end -->