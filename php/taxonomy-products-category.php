<?php get_header(); ?>

    <header class="page-header page-header--products --bg-earth" data-sub="">
      <h1 class="page-header__title" data-sub="製品情報">Our Products</h1>
      <p class="page-header__title-sub"><strong><?php single_term_title(); ?></strong></p>
    </header>

    <section class="sec sec-medium">
    <?php
    $taxonomy = get_query_var('taxonomy');
    $term = get_query_var('term');
    $args = array(
      'post_type' => 'products',
      'posts_per_page' => 3,
      'tax_query' => array(
        array(
          'taxonomy' => $taxonomy,
          'field' => 'slug',
          'terms' => array($term),
        ),
      ),
      'paged' => $paged,
    );
    $the_query = new WP_Query( $args );
    if( $the_query->have_posts() ): ?>
      <ul class="product-list">
        <?php while( $the_query->have_posts() ): $the_query->the_post(); ?>
        <?php
        //カスタム投稿タイプのタクソノミーからタームを抽出
        $termTagTax = get_the_terms(get_the_ID(), 'products-tag');
        $tag_name = $termTagTax[0]->name;
        $tag_slug = $termTagTax[0]->slug;
        //カスタムフィールドより
        $imageID = get_field('product-image');
        if($imageID){
          $imageSRC = wp_get_attachment_image_src($imageID, 'medium');
        }
        ?>
        <li class="product-list__item">
          <a href="<?php the_permalink(); ?>" class="product-link">
            <h2 class="product-name"><?php the_title(); ?></h2>
            <div class="product-item-data">
              <figure class="product-item-image">
                <img src="<?php echo $imageSRC[0]; ?>" >
              </figure>
              <ul class="product-tags">
                <li class="product-tag"><?php echo $tag_name; ?></li>
              </ul>
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
      $GLOBALS['wp_query']->max_num_pages = $the_query->max_num_pages;

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