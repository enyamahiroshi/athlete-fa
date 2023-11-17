<?php

/* -------------------------------------------------------------
//  CSS,JSファイルの読込
// ------------------------------------------------------------*/
// ヘッダーにファイル追加
function import_files_to_header() {
  wp_enqueue_style( 'style', get_stylesheet_directory_uri() . '/style.css');
}
add_action( 'wp_enqueue_scripts', 'import_files_to_header' );

// フッターにファイル追加
function import_files_to_footer() {
  wp_enqueue_script( 'jquery' );
  //GSAP
  if(is_front_page()){
    wp_enqueue_script( 'gsap', get_stylesheet_directory_uri() . '/assets/js/gsap.min.js', true, array());
    wp_enqueue_script( 'ScrollTrigger', get_stylesheet_directory_uri() . '/assets/js/ScrollTrigger.min.js', true, array());
    wp_enqueue_script( 'runGsap', get_stylesheet_directory_uri() . '/assets/js/run-gsap.min.js', true, array());
    wp_enqueue_script( 'mouseStalker', get_stylesheet_directory_uri() . '/assets/js/mouse-stalker.min.js', true, array());
  }
  //Movie モーダルウィンドウ
  if(is_page( array('new-graduates','career') )){
    wp_enqueue_script( 'modalVideo', get_stylesheet_directory_uri() . '/assets/js/jquery-modal-video.min.js', true, array());
    wp_enqueue_script( 'runMovie', get_stylesheet_directory_uri() . '/assets/js/run-movie.min.js', true, array());
  }
  //infiniteslidev2 無限ループ
  if(is_parent_slug('recruit')){
    wp_enqueue_script( 'Infiniteslidev2', get_stylesheet_directory_uri() . '/assets/js/infiniteslidev2.min.js', true, array());
    wp_enqueue_script( 'runInfiniteslidev2', get_stylesheet_directory_uri() . '/assets/js/run-infiniteslidev2.min.js', true, array());
  }
  //インフォグラフィック data
  if(is_parent_slug('data')){
    wp_enqueue_script( 'inviewJS', get_stylesheet_directory_uri() . '/assets/js/jquery.inview.min.js', true, array());
    wp_enqueue_script( 'numerator', get_stylesheet_directory_uri() . '/assets/js/jquery-numerator.min.js', true, array());
    wp_enqueue_script( 'chartJS', get_stylesheet_directory_uri() . '/assets/js/Chart.min.js', true, array());
    wp_enqueue_script( 'runInfographic', get_stylesheet_directory_uri() . '/assets/js/run-infographic.min.js', true, array());
  }
  wp_enqueue_script( 'main', get_stylesheet_directory_uri() . '/assets/js/main.min.js', true, array());
}
add_action('wp_footer', 'import_files_to_footer');
?>