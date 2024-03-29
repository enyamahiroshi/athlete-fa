<?php get_header("english"); ?>

    <header class="page-header" data-sub="News">
      <h1 class="page-header__title" data-sub="">News</h1>
    </header>

    <div class="has-column">
      <aside class="side-column">
        <ul class="category-list">
          <li class="cat-item"><a href="<?php echo esc_url(home_url()); ?>/en/news-en/">All</a>
          <?php
          $args = array(
            'hide_empty'         => 0,
            'use_desc_for_title' => 0,
            'title_li'           => '',
            'taxonomy'           => 'news-en-category',
          );
          wp_list_categories( $args );
          ?>
        </ul>
      </aside><?php //.side-column ?>

      <section class="main-column">
        <?php
        $args = array(
          'posts_per_page' => 10,
          'ignore_sticky_posts' => 1, //「この投稿を先頭に固定表示」の無効化
          'paged' => $paged,
        );
        $the_query = new WP_Query( $args );?>
        <?php
        if( have_posts() ):
        ?>
        <ul class="post-list">
          <?php
          while( have_posts() ): the_post();
          //カスタム投稿タイプのタクソノミーからタームを抽出
          $terms = get_the_terms($post->ID, 'news-en-category');
          if(!empty($terms)) {
            foreach($terms as $term):
            $termName = $term->name;
            endforeach;
          } else {
            $termName = 'Uncategorized';
          }
          ?>
          <li class="post-list__item">
            <a href="<?php the_permalink(); ?>" class="post-link">
              <div class="post-meta">
                <div class="post-date"><?php the_time('Y.m.d'); ?></div>
                <div class="post-category"><?php echo $termName; ?></div>
              </div>
              <h2 class="post-title"><?php the_title(); ?></h2>
            </a>
          </li>
          <?php endwhile; ?>
        </ul>
        <?php else: ?>
        <ul class="post-list">
          <li><div class="not-post">No content.</div></li>
        </ul>
        <?php endif; wp_reset_postdata(); ?>

        <?php //ページネーション

        //WP_Queryでメインクエリではないループを使用している場合必要（'paged' => $paged,も）
        $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
        // $GLOBALS['wp_query']->max_num_pages = $the_query->max_num_pages;

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
<?php get_footer("english"); ?>