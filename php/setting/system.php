<?php

/* -------------------------------------------------------------
//  自動更新設定
// ------------------------------------------------------------*/
// add_filter( 'auto_update_theme', '__return_true' );
// add_filter( 'auto_update_plugin', '__return_true' );
// add_filter( 'allow_major_auto_core_updates', '__return_true' );
// add_filter( 'allow_minor_auto_core_updates', '__return_true' );

/* -------------------------------------------------------------
// ログイン画面のカスタマイズ
// ------------------------------------------------------------*/
// ロゴ・背景等のcss変更
function my_login_style() {
  wp_enqueue_style( 'custom-login', get_stylesheet_directory_uri() . '/assets/admin/login.css' );
  // wp_enqueue_script( 'custom-login', get_stylesheet_directory_uri() . '/assets/js/login.js' );
}
add_action( 'login_enqueue_scripts', 'my_login_style' );
// ロゴのリンク先を指定
function my_login_logo_url() {
  return "";
}
add_filter( 'login_headerurl', 'my_login_logo_url' );
// ロゴのtitleテキストを指定
function my_login_logo_tit() {
  return "";
}
add_filter( 'login_headertext', 'my_login_logo_tit' );

/* -------------------------------------------------------------
// ブロックエディタ用 block-editor-style.cssを読み込み
// ------------------------------------------------------------*/
function add_block_editor_styles() {
  wp_enqueue_style( 'block-style', get_stylesheet_directory_uri() . '/editor-style/block-editor-style.css' );
}
add_action( 'enqueue_block_editor_assets', 'add_block_editor_styles' );

/* -------------------------------------------------------------
// テーマフォルダ直下のeditor-style.cssを読み込み
// ------------------------------------------------------------*/
add_action('admin_init',function(){
  add_editor_style( '/editor-style/editor-style.css' );
});
// エディタースタイルのキャッシュクリア
function extend_tiny_mce_before_init($mce_init){
  $mce_init['cache_suffix']='v='.time();
  return $mce_init;
}
add_filter('tiny_mce_before_init','extend_tiny_mce_before_init');

/* -------------------------------------------------------------
// 出力されるコードの非表示設定
// ------------------------------------------------------------*/
//wpバージョンを非表示
remove_action('wp_head', 'wp_generator');
function vc_remove_wp_ver_css_js( $src ) {
if ( strpos( $src, 'ver=' . get_bloginfo( 'version' ) ) )
$src = remove_query_arg( 'ver', $src );
return $src;
}
add_filter( 'style_loader_src', 'vc_remove_wp_ver_css_js', 9999 );
add_filter( 'script_loader_src', 'vc_remove_wp_ver_css_js', 9999 );

//絵文字用のJavaScriptとCSSを停止
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

//コメントフォードを非表示
remove_action('wp_head', 'feed_links_extra', 3);

//外部ツールを使って記事を投稿する時のアドレス出力を非表示
remove_action('wp_head', 'rsd_link'); //Really Simple Discovery
remove_action('wp_head', 'wlwmanifest_link'); //Windows Live Writer

/* -------------------------------------------------------------
// 投稿者アーカイブを無効化してWordPressのユーザ名を隠す（「/?author=xx」実行時に404エラーを返す）
// ------------------------------------------------------------*/
// add_filter( 'author_rewrite_rules', '__return_empty_array' );
// function disable_author_archive() {
// if( $_GET['author'] || preg_match('#/author/.+#', $_SERVER['REQUEST_URI']) ){
// wp_redirect( home_url( '/404.php' ) );
// exit;
// }
// }
// add_action('init', 'disable_author_archive');

?>