<?php get_header(); ?>

    <header class="page-header page-header--products --bg-earth" data-sub="">
      <h1 class="page-header__title" data-sub="製品情報">Our Products</h1>
      <p class="page-header__title-sub"><strong><?php single_term_title(); ?></strong></p>
    </header>

    <section class="sec sec-medium">
    <?php if( have_posts() ): ?>
      <ul class="product-list">
        <?php while( have_posts() ): the_post(); ?>
        <?php
        //カスタム投稿タイプのタクソノミーからタームを抽出
        $termTagTax = get_the_terms(get_the_ID(), 'products-tag');
        //カスタムフィールドより
        $mainImg = SCF::get('product-image');
        ?>
        <li class="product-list__item">
          <a href="<?php the_permalink(); ?>" class="product-link">
            <h2 class="product-name"><?php the_title(); ?></h2>
            <div class="product-item-data">
              <figure class="product-item-image">
                <?php
                if($mainImg){
                  echo wp_get_attachment_image($mainImg, 'full');
                } else {
                  echo '<img src="' . get_stylesheet_directory_uri() . '/assets/images/common/no-image.png" alt="" width="1840" height="1226">';
                }
                ?>
              </figure>
              <?php if($termTagTax): ?>
              <ul class="product-tag">
              <?php foreach ($termTagTax as $termTag): ?>
                <li class="product-tag__name"><?php echo $termTag->name; ?></li>
              <?php endforeach; ?>
              </ul>
              <?php endif; ?>
              <span class="button-r-link-large button-circle-ani">
                <span class="svg-area">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" class="circle-ani">
                    <circle cx="50%" cy="50%" r="28" class="circle-ani">
                  </circle></svg>
                </span>
              </span>
            </div>
          </a>
        </li>
        <?php endwhile; ?>
      </ul>
    <?php else: ?>
      <ul class="product-list">
        <li><div class="not-post">まだ記事はありません。</div></li>
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
          'screen_reader_text'	=> '',
        )
      ); ?>

      <section class="sec-bread-navi">
        <?php //Breadcrumb NavXT
        echo '<aside class="bread-navi">';
        if(function_exists('bcn_display')){ bcn_display(); }
        echo '</aside>'."\n";;
        ?>
      </section>
    </section>
<?php get_footer(); ?>