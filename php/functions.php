<?php
get_template_part( 'setting/system' );
get_template_part( 'setting/include_files' );
get_template_part( 'setting/customize-plugins' );
get_template_part( 'setting/customize-block-editer' );

/* -------------------------------------------------------------
//  メインループの表示件数を制御
// ------------------------------------------------------------*/
// 表示件数制御
// -1ですべて表示

function my_pre_get_posts( $query ) {

  if(is_admin() || ! $query -> is_main_query()) { return; } //ダッシュボードはスルー

  // //フロントページ
  // if($query -> is_front_page()) {
  //   $query -> set('posts_per_page', 10); //表示件数
  //   return;
  // }
  // // アーカイブページ
  // if($query->is_home()){
  //   $query->set( 'posts_per_page', 5); //表示件数
  //   return;
  // }
  // // 月別アーカイブ
  // if($query->is_month()){
  //   $query->set('posts_per_page', -1); //表示件数
  //   return;
  // }
  // // 年別アーカイブ
  // if($query->is_year()){
  //   $query->set('posts_per_page', 10); //表示件数
  //   return;
  // }
  // // 作成者アーカイブ
  // if($query->is_author()){
  //   $query->set('posts_per_page', 10); //表示件数
  //   return;
  // }
  // // カテゴリーアーカイブ
  // if($query->is_category()){
  //   $query->set('posts_per_page', 10); //表示件数
  //   return;
  // }
  // // 検索結果ページ
  // if($query->is_search()){
  //   $query->set('posts_per_page', 10); //表示件数
  //   return;
  // }
  // // 固定ページ
  // if($query->is_page('journal')){
  //   $query->set('posts_per_page', 2); //表示件数
  //   return;
  // }
  // // カスタム投稿タイプのアーカイブ
  // if($query -> is_post_type_archive()){
  //   $query -> set('posts_per_page', 10); //表示件数
  //   $query -> set('order', 'ASC'); //ASC:昇順, DESC:降順
  //   $query -> set('orderby', 'date'); //日
  //   return;
  // }
  //カスタムタクソノミーのアーカイブ
  if($query -> is_tax('products-category', 'custom')){ //カテゴリー：カスタムのみ
    $query -> set('posts_per_page', 12); //表示件数
    $query -> set('order', 'DESC'); //ASC:昇順, DESC:降順
    // $query -> set('orderby', 'date'); //日
    return;
  }
  if($query -> is_tax()){
    $query -> set('posts_per_page', 30); //表示件数
    // $query -> set('order', 'ASC'); //ASC:昇順, DESC:降順
    // $query -> set('orderby', 'date'); //日
    return;
  }
}
add_action('pre_get_posts','my_pre_get_posts');


// the_posts_pagination で吐き出すページネーションの整形
function cut_screen_reader_text($template) {
	$template = '
		<nav class="navigation %1$s">
			<div class="nav-links">%3$s</div>
		</nav>';
	return $template;
}
add_filter('navigation_markup_template', 'cut_screen_reader_text');

/* -------------------------------------------------------------
// body_class
// ------------------------------------------------------------*/
add_filter('body_class','add_posttype_classes');
function add_posttype_classes( $classes ) {
  $posType = get_query_var('post_type');
  $classes[] = $posType;
  if( !$posType === "" ){
    $m_key = array_search('home', $classes);
    unset($classes[${'m_key'}]);
  } elseif( is_singular('products') ) {
    global $post;
    $taxonomy_terms = get_the_terms($post->ID, 'products-category'); //タクソノミーを指定
    if ( $taxonomy_terms ) {
      foreach ( $taxonomy_terms as $taxonomy_term ) {
      $classes[] = 'term-'. $taxonomy_term->slug;
      }
    }
  } elseif ( is_page() ) {
    $page = get_post( get_the_ID() );
    $classes[] = $page->post_name;
    $parent_id = $page->post_parent;
    if ( 0 == $parent_id ) {
      $classes[] = get_post($parent_id)->post_name;
    } else {
      // $progenitor_id = array_pop( get_ancestors( $page->ID, 'page', 'post_type' ) );
      // $classes[] = get_post($progenitor_id)->post_name . '-child';
      $classes[] = get_post($parent_id)->post_name;
    }
  } elseif ( is_single() || is_singular() ) {
    $terms = get_the_terms( get_the_ID(), get_query_var('taxonomy') );
    if ( $terms ) {
      foreach ( $terms as $term ) {
        $classes[] = 'term-' . $term->slug;
      }
    }
  }

  $classes[] = 'js-page-loading'; //ページローディング用に付与
  return $classes;
}

/* -------------------------------------------------------------
// previous_post_link() と next_post_link() にクラス付加
// ------------------------------------------------------------*/
add_filter( 'previous_post_link', 'add_prev_post_link_class' );
function add_prev_post_link_class($output) {
  return str_replace('<a href=', '<a class="prev-link" href=', $output);
}
add_filter( 'next_post_link', 'add_next_post_link_class' );
function add_next_post_link_class($output) {
  return str_replace('<a href=', '<a class="next-link" href=', $output);
}

/* -------------------------------------------------------------
// 親ページのスラッグを取得 (条件武器で is_parent_slug('xxx') 使用)
// ------------------------------------------------------------*/
function is_parent_slug() {
  global $post;
  if ($post->post_parent) {
    $post_data = get_post($post->post_parent);
    return $post_data->post_name;
  }
}

/* -------------------------------------------------------------
// the_excerpt() の内容変更
// ------------------------------------------------------------*/
// 区切り文字数を変える
function custom_excerpt_length( $length ) {
  return 125; //デフォルトは「110」
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
// 省略文字を変える
function new_excerpt_more($more) {
	return '...'; //デフォルトは「【...】」
}
add_filter('excerpt_more', 'new_excerpt_more');

/* -------------------------------------------------------------
// カスタムメニュー
// ------------------------------------------------------------*/
// 有効化
add_theme_support('menus');

// li から ID を削除する
function removeId( $id ){
  return $id = array();
}
add_filter('nav_menu_item_id', 'removeId', 10);
// li の class のコントロール
// function my_custom_nav( $classes, $item ) {
//   global $post;
//   $current_class = 'current';
//   $classes[] = $current_class;
//   if( $item -> current == true ) {
//     $classes[] = $current_class;
//   }
//   //カスタム投稿タイプでのカレント処理
//   if (is_singular('works') && $item->object_id == $post->ID) {
//     $classes[] = $current_class;
//   }
//   return $classes;
// }
// add_filter( 'nav_menu_css_class', 'my_custom_nav', 10, 2 );

/* -------------------------------------------------------------
// ウィジェットの使用
// ------------------------------------------------------------*/
// function my_theme_widgets_init() {
//   register_sidebar( array(
//     'name' => 'Main Sidebar',
//     'id' => 'main-sidebar',
//     'before_widget' => '<section class="widget %1$s">',
//     'after_widget' => '</section>',
//     'before_title' => '<h3 class="hl03 widget__title">',
//     'after_title'  => '</h3>',
//   ) );
// }
// add_action( 'widgets_init', 'my_theme_widgets_init' );

/* -------------------------------------------------------------
// 標準ギャラリーのCSSを停止
// ------------------------------------------------------------*/
add_filter( 'use_default_gallery_style', '__return_false' );

/* -------------------------------------------------------------
// アイキャッチの設定
// ------------------------------------------------------------*/
// アイキャッチを有効にする
add_theme_support( 'post-thumbnails' );
// アイキャッチの基本サイズ設定
set_post_thumbnail_size(300, 300, false) ;

/* -------------------------------------------------------------
//  記事作成後にカテゴリーの構造を保つようにする
// ------------------------------------------------------------*/
function lig_wp_category_terms_checklist_no_top( $args, $post_id = null ) {
  $args['checked_ontop'] = false;
  return $args;
}
add_action( 'wp_terms_checklist_args', 'lig_wp_category_terms_checklist_no_top' );

/* -------------------------------------------------------------
//  ダッシュボードにてカスタム投稿ポストをタクソノミーで絞り込みできるようにする
// ------------------------------------------------------------*/
add_action( 'restrict_manage_posts', 'add_post_taxonomy_restrict_filter' );
function add_post_taxonomy_restrict_filter() {
    global $post_type;
    if ( 'products' == $post_type ) {
        ?>
        <select name="products-category">
            <option value="">カテゴリー指定なし</option>
            <?php
            $terms = get_terms('products-category');
            foreach ($terms as $term) { ?>
                <option value="<?php echo $term->slug; ?>"><?php echo $term->name; ?></option>
            <?php } ?>
        </select>
        <?php
    }
}

/** Form related */
require_once (realpath(dirname(__FILE__) . '/libs/require.php'));