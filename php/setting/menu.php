<?php

/* -------------------------------------------------------------
// ダッシュボード表示設定
// ------------------------------------------------------------*/
function remove_dashboard_meta() {
  // 被リンク 非表示
  remove_meta_box( 'dashboard_incoming_links', 'dashboard', 'normal' );
  // プラグイン 非表示
  // remove_meta_box( 'dashboard_plugins', 'dashboard', 'normal' );
  // WordPressブログ 非表示
  remove_meta_box( 'dashboard_primary', 'dashboard', 'normal' );
  // WordPressフォーラム 非表示
  remove_meta_box( 'dashboard_secondary', 'dashboard', 'normal' );
  // クイック投稿 非表示
  remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );
  // 最近の下書き 非表示
  // remove_meta_box( 'dashboard_recent_drafts', 'dashboard', 'side' );
  // 最近のコメント 非表示
  remove_meta_box( 'dashboard_recent_comments', 'dashboard', 'normal' );
  //概要 非表示
  // remove_meta_box( 'dashboard_right_now', 'dashboard', 'normal' );
  //アクティビティ 非表示
  // remove_meta_box( 'dashboard_activity', 'dashboard', 'normal');
}
add_action( 'admin_init', 'remove_dashboard_meta' );

/* -------------------------------------------------------------
// header内の不要な要素を非表示
// ------------------------------------------------------------*/
add_filter( 'wp_resource_hints', 'remove_dns_prefetch', 10, 2 );
function remove_dns_prefetch( $hints, $relation_type ) {
	if ( 'dns-prefetch' === $relation_type ) {
		return array_diff( wp_dependencies_unique_hosts(), $hints );
	}
	return $hints;
}

/* -------------------------------------------------------------
// 管理者以外の左メニューの非表示設定
// ------------------------------------------------------------*/
if ( !current_user_can( 'administrator' ) ) {
  function remove_menus () {
    // remove_menu_page( 'index.php' );                  // ダッシュボード
    // remove_menu_page( 'edit.php' );                   // 投稿
    // remove_menu_page( 'upload.php' );                 // メディア
    // remove_menu_page( 'edit.php?post_type=page' );    // 固定ページ
    remove_menu_page( 'edit-comments.php' );          // コメント
    remove_menu_page( 'themes.php' );                 // 外観
    remove_menu_page( 'plugins.php' );                // プラグイン
    // remove_menu_page( 'users.php' );                  // ユーザー
    remove_menu_page( 'tools.php' );                  // ツール
    // remove_menu_page( 'options-general.php' );        // 設定
    //以下プラグイン毎
    // remove_menu_page('wpcf7'); //contactform7

    //▼下でインストールプラグインのスラッグ名をダンプ表示できる
    // global $menu;
    // var_dump($menu);
  }
  add_action('admin_menu', 'remove_menus');
}

/* -------------------------------------------------------------
// 記事編集画面の右パネルの並び順を変更
// ------------------------------------------------------------*/


/* -------------------------------------------------------------
// 管理バーの項目を非表示設定
// ------------------------------------------------------------*/
function remove_bar_menus( $wp_admin_bar ) {
  $wp_admin_bar->remove_menu( 'wp-logo' );      // ロゴ
  $wp_admin_bar->remove_menu( 'themes' );       // サイト名 -> テーマ (公開側)
  // $wp_admin_bar->remove_menu( 'site-name' );    // サイト名
  // $wp_admin_bar->remove_menu( 'view-site' );    // サイト名 -> サイトを表示
  // $wp_admin_bar->remove_menu( 'dashboard' );    // サイト名 -> ダッシュボード (公開側)
  // $wp_admin_bar->remove_menu( 'customize' );    // サイト名 -> カスタマイズ (公開側)
  $wp_admin_bar->remove_menu( 'comments' );     // コメント
  $wp_admin_bar->remove_menu( 'updates' );      // 更新
  $wp_admin_bar->remove_menu( 'view' );         // 投稿を表示
  $wp_admin_bar->remove_menu( 'new-content' );  // 新規
  $wp_admin_bar->remove_menu( 'new-post' );     // 新規 -> 投稿
  $wp_admin_bar->remove_menu( 'new-media' );    // 新規 -> メディア
  $wp_admin_bar->remove_menu( 'new-link' );     // 新規 -> リンク
  $wp_admin_bar->remove_menu( 'new-page' );     // 新規 -> 固定ページ
  $wp_admin_bar->remove_menu( 'new-user' );     // 新規 -> ユーザー
  // $wp_admin_bar->remove_menu( 'my-account' );   // マイアカウント
  // $wp_admin_bar->remove_menu( 'user-info' );    // マイアカウント -> プロフィール
  // $wp_admin_bar->remove_menu( 'edit-profile' ); // マイアカウント -> プロフィール編集
  // $wp_admin_bar->remove_menu( 'logout' );       // マイアカウント -> ログアウト
  // $wp_admin_bar->remove_menu( 'search' );       // 検索 (公開側)
}
add_action('admin_bar_menu', 'remove_bar_menus', 201);

/* -------------------------------------------------------------
// 管理バーの項目を非表示設定
// ------------------------------------------------------------*/
function my_admin_head(){
  //表示オプションタブ
  // echo '<style type="text/css"> #screen-options-link-wrap {display:none !important;} </style>';
  // //ヘルプタブ
  // echo '<style type="text/css"> #contextual-help-link-wrap {display: none !important;} </style>';
}
add_action('admin_head', 'my_admin_head');

?>