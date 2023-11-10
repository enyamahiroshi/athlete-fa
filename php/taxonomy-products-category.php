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

      <section class="sec-bread-navi">
        <?php //Breadcrumb NavXT
        echo '<aside class="bread-navi">';
        if(function_exists('bcn_display')){ bcn_display(); }
        echo '</aside>'."\n";;
        ?>
      </section>
    </section>
<?php get_footer(); ?>