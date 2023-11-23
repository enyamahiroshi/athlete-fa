<?php get_header(); ?>

    <header class="page-header" data-sub="News">
      <h1 class="page-header__title" data-sub="お知らせ">News</h1>
    </header>

    <div class="has-column js-fix-area">
      <aside class="side-column">
        <ul class="category-list">
          <li class="cat-item is-active"><a href="<?php echo esc_url(home_url()); ?>/news/">すべて</a>
          <?php
          $args = array(
            'hide_empty'         => 0,
            'use_desc_for_title' => 0,
            'title_li'           => '',
            'taxonomy'           => 'category',
          );
          wp_list_categories( $args );
          ?>
        </ul>
      </aside><?php //.side-column ?>

      <section class="main-column">

        <?php //記事リスト
        $args = array(
          'post_type' => 'post',
          // 'posts_per_page' => '-1',
          // 'category_name' => 'cat_slug',
        );
        get_template_part( 'block/post_list', null, $args );
        ?>

        <?php //ページネーション
        the_posts_pagination(
          array(
            'mid_size' => 1, // 現在ページの左右に表示するページ番号の数
            'prev_text' => '', // 「前へ」リンクのテキスト
            'next_text' => '', // 「次へ」リンクのテキスト
            'type' => 'list', // 戻り値の指定 (plain/list)
          )
        ); ?>

        <section class="sec-bread-navi">
          <?php //Breadcrumb NavXT
          echo '<aside class="bread-navi">';
          if(function_exists('bcn_display')){ bcn_display(); }
          echo '</aside>'."\n";;
          ?>
        </section>
      </section><?php //.main-column ?>
    </div><?php //.has-column ?>
<?php get_footer(); ?>