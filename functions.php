<?php
/**
 * Theme Functions.
 *
 * @package Gamenavigation
 */


function gamenavigation_enqueue_scripts() {
  // deleting old jquery
  wp_deregister_script( 'jquery' );

  // Register
  wp_register_style( 
    'normalize-css', 
    get_template_directory_uri() . '/assets/css/normalize.css' 
  );

  wp_register_style( 
    'style-css', 
    get_stylesheet_uri() 
  );

  wp_register_style( 
    'main-css', 
    get_template_directory_uri() . '/assets/css/main.css'
  );

  wp_register_script( 
    'jquery-3.5.1-min', 
    'https://code.jquery.com/jquery-3.5.1.min.js', 
    [], 
    true 
  );

  wp_register_script(
    'bootstrap-min-js',
    'https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js',
    [],
    true
  );

  wp_register_script(
    'baguette-js',
    'https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.1/baguetteBox.min.js',
    [],
    true
  );

  wp_register_script(
    'main-js',
    get_template_directory_uri() . '/assets/js/main.js',
    [],
    true
  );

  // Enqueue
  wp_enqueue_style( 'normalize-css' );
  wp_enqueue_style( 'google-fonts' );
  wp_enqueue_style( 'font-awesome' );
  wp_enqueue_style( 'baguette-css' );
  wp_enqueue_style( 'bootstrap-css' );
  wp_enqueue_style( 'style-css' );
  wp_enqueue_style( 'main-css' );

  wp_enqueue_script( 'jquery-3.5.1-min' );
  wp_enqueue_script( 'bootstrap-min-js' );
  wp_enqueue_script( 'baguette-js' );
  wp_enqueue_script( 'main-js' );

}

function my_custom_init() {
  // Таксономия Игра - game
  // register_taxonomy( 'game', ['chapter', 'info'], [
  //   'label' => 'Игра',
  //   'labels' => [
  //     'name' => 'Игры',
  //     'singular_name' => 'Игра',
  //     'search_items' => 'Искать Игры',
  //     'all_items' => 'Все Игры',
  //     'parent_item' => 'Родит. игра',
  //     'parent_item_colon' => 'Родит. игра',
  //     'edit_item' => 'Редактировать игру',
  //     'update_item' => 'Обновить игру',
  //     'add_new_item' => 'Добавить новую игру',
  //     'new_item_name' => 'Новая игра',
  //     'menu_name' => 'Игра',
  //   ],

  //   'description' => 'Игры с информацией и прохождением',
  //   'public' => true,
  //   'show_in_nav_menus' => false,
  //   'show_ui' => true,
  //   'show_tagcloud' => false,
  //   'hierarchical' => true,
  //   'rewrite' => [
  //     'slug'=>'game', 
  //     'hierarchical'=>false, 
  //     'with_front'=>false, 
  //     'feed'=>false ,
  //   ],
  //   'show_admin_column' => true, // Позволить или нет авто-создание колонки таксономии в таблице ассоциированного типа записи. (с версии 3.5)
  // ]);

  // тип записи - глава - chapter
  // register_post_type( 'chapter', [
  //     'labels' => [
  //       'name' => 'Главы',
  //       'singular_name' => 'Глава',
  //       'add_new' => 'Добавить новую',
  //       'add_new_item' => 'Добавить новую главу',
  //       'edit_item' => 'Редактировать главу',
  //       'new_item' => 'Новая глава',
  //       'view_item' => 'Посмотреть главу',
  //       'search_items' => 'Найти главу',
  //       'not_found' => 'Глав не найдено',
  //       'not_found_in_trash' => 'В корзине глав не найдено',
  //       'parent_item_colon' => '',
  //       'menu_name' => 'Главы'
  //     ],
  //     'public' => true,
  //     'publicly_queryable' => true,
  //     'show_ui' => true,
  //     'show_in_menu' => true,
  //     'query_var' => true,
  //     'rewrite' => true,
  //     'capability_type' => 'post',
  //     'has_archive' => true,
  //     'hierarchical' => false,
  //     'menu_position' => null,
  //     'supports' => ['title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments'],
  //   ]
  // );
}

// function chapter_updated_messages( $messages ) {
//   global $post;

//   $messages['chapter'] = [
//     0 => '',
//     1 => sprintf( 'Chapter обновлено. <a href="%s">Посмотреть запись chapter</a>', esc_url( get_permalink($post->ID) ) ),
//     2 => 'Произвольное поле обновлено.',
//     3 => 'Произвольное поле удалено.',
//     4 => 'Запись Chapter обновлена.',
//     /* %s: дата и время ревизии */
//     5 => isset($_GET['revision']) ? sprintf( 'Запись Chapter восстановлена из ревизии %s', wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
//     6 => sprintf( 'Запись Chapter опубликована. <a href="%s">Перейти к записи chapter</a>', esc_url( get_permalink($post->ID) ) ),
//     7 => 'Запись Chapter сохранена.',
//     8 => sprintf( 'Запись Chapter сохранена. <a target="_blank" href="%s">Предпросмотр записи book</a>', esc_url( add_query_arg( 'preview', 'true', get_permalink($post->ID) ) ) ),
//     9 => sprintf( 'Запись Book запланирована на: <strong>%1$s</strong>. <a target="_blank" href="%2$s">Предпросмотр записи book</a>',
//     // Как форматировать даты в PHP можно посмотреть тут: http://php.net/date
//     date_i18n( __( 'M j, Y @ G:i' ), strtotime( $post->post_date ) ), esc_url( get_permalink($post->ID) ) ),
//     10 => sprintf( 'Черновик записи Book обновлен. <a target="_blank" href="%s">Предпросмотр записи book</a>', esc_url( add_query_arg( 'preview', 'true', get_permalink($post->ID) ) ) ),
//   ];

//   return $messages;
// }

// function game_permalink( $permalink, $post ) {
//   // выходим если это не наш тип записи: без холдера %products%
//   if ( strpos($permalink, '%game%') === false ) {
//     return $permalink;
//   }

//   // Получаем элементы таксономии
//   $terms = get_the_terms( $post, 'game' );
//   // Если есть элемент, заменим холдер
//   if ( ! is_wp_error($terms) && !empty($terms) && is_object($terms[0]) ) {
//     $term_slug = array_pop($terms)->slug;
//   } else {
//     // если элемента нет, а должен быть
//     $term_slug = 'no-game';
//   }

//   return str_replace( '%game%', $term_slug, $permalink );
// }

add_action( 'wp_enqueue_scripts', 'gamenavigation_enqueue_scripts' );
// add_action( 'init', 'my_custom_init' );


// add_filter('post_updated_messages', 'chapter_updated_messages');
## Отфильтруем ЧПУ произвольного типа
// фильтр: apply_filters( 'post_type_link', $post_link, $post, $leavename, $sample );
// add_filter( 'post_type_link', 'game_permalink', 1, 2 );

// загрузка изображений для таксономий
// require 'my-scripts/tax_image.php';