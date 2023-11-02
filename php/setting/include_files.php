<?php

/* -------------------------------------------------------------
//  CSS,JSファイルの読込
// ------------------------------------------------------------*/
// ヘッダーにファイル追加
function import_files_to_header() {
  wp_enqueue_style( 'style', get_stylesheet_directory_uri() . '/style.css');
  //GSAP
  if(is_front_page()){
    wp_enqueue_script( 'gsap', get_stylesheet_directory_uri() . '/assets/js/gsap.min.js', true, array());
    wp_enqueue_script( 'ScrollTrigger', get_stylesheet_directory_uri() . '/assets/js/ScrollTrigger.min.js', true, array());
  }
}
add_action( 'wp_enqueue_scripts', 'import_files_to_header' );

// フッターにファイル追加
function import_files_to_footer() {
  wp_enqueue_script( 'jquery' );
  //GSAP
  if(is_front_page()){
    wp_enqueue_script( 'runGsap', get_stylesheet_directory_uri() . '/assets/js/run-gsap.min.js', true, array());
  }
  wp_enqueue_script( 'main', get_stylesheet_directory_uri() . '/assets/js/main.min.js', true, array());
}
add_action('wp_footer', 'import_files_to_footer');
?>