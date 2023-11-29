<?php get_header(); ?>

    <header class="page-header" data-sub="News">
      <h1 class="page-header__title" data-sub="お知らせ">News</h1>
    </header>

    <div class="has-column">
      <aside class="side-column">
        <ul class="category-list">
          <li class="cat-item"><a href="<?php echo esc_url(home_url()); ?>/news/">すべて</a>
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

      <?php if( have_posts() ): ?>
        <ul class="post-list">
          <?php
          while( have_posts() ): the_post();
          $category = get_the_category();
          $cat_name = $category[0]->cat_name;
          $cat_slug = $category[0]->category_nicename;
          ?>
          <li class="post-list__item">
            <a href="<?php the_permalink(); ?>" class="post-link">
              <div class="post-meta">
                <div class="post-date"><?php the_time('Y.m.d'); ?></div>
                <div class="post-category post-category--<?php echo $cat_slug; ?>"><?php echo $cat_name; ?></div>
              </div>
              <h2 class="post-title"><?php the_title(); ?></h2>
            </a>
          </li>
          <?php endwhile; ?>
        </ul>
      <?php else: ?>
        <ul class="post-list">
          <li><div class="not-post">まだ記事はありません。</div></li>
        </ul>
      <?php endif; wp_reset_postdata(); ?>

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