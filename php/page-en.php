<?php get_header("english"); ?>

    <section class="mv">
      <div class="mv__movie">
        <video class="mv__movie__video" poster="<?php echo get_stylesheet_directory_uri(); ?>/assets/video/mv_movie-cover.jpg" webkit-playsinline playsinline muted autoplay loop>
          <?php /*
          poster: 動画ファイルが利用できない環境で代替表示される画像
          webkit-playsinline: iOS 9までのSafari用インライン再生指定
          playsinline: iOS 10以降のSafari用インライン再生指定
          muted: 音声をミュートさせる
          autoplay: 動画を自動再生させる
          loop: 動画をループさせる
          controls: コントロールバーを表示する
          */ ?>
          <source src="<?php echo get_stylesheet_directory_uri(); ?>/assets/video/mv_movie.mp4" type="video/mp4">
          <p>動画を再生できる環境ではありません</p>
        </video>
      </div>
      <h1 class="mv__catchcopy">
        <picture>
          <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/en/home/img-catchcopy-small.png" media="(max-width: 767px)">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/en/home/img-catchcopy-large.png" alt="Factory of the Future 限界を超える技術で向上の未来を創る。" width="662" height="303">
        </picture>
      </h1>
    </section>

    <section class="sec sec-medium sec-intro-products-info-1">
      <div class="block-layout1">
        <div class="block-item-data">
          <h2 class="title01 block-item-title" data-sub="Our mission is ...">
            <img class="logo-create-future-arts" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/common/logo-create-future-arts.svg" alt="Create Future Arts" width="408.8" height="27.7">
          </h2>
          <p class="block-item-text">In our manufacturing, "Future Arts" refers to technology that serves as a bridge from the present to the future. Through the creation of Future Arts, we aim to contribute to a prosperous society by expanding the possibilities of our customers' businesses.</p>
          <a href="<?php echo esc_url(home_url()); ?>/en/products/" class="button-r-link-large button-circle-ani">
            Products
            <span class="svg-area">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" class="circle-ani">
                <circle cx="50%" cy="50%" r="28" class="circle-ani">
              </svg>
            </span>
          </a>
        </div>
        <figure class="block-item-image">
          <img class="parallax js-parallax" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/home/img-intro.jpg" alt="" width="600" height="600">
        </figure>
      </div>
    </section>

    <?php //products slider ?>
    <section class="sec sec-full sec-intro-products-info-2">
      <div class="horizon-slider-trigger">

        <div class="sec-wide">
          <h2 class="title02 --data-sub-ja" data-sub="">Our<br>Products</h2>
        </div>
        <?php //スライダー ?>
        <section class="horizon-slider">
          <div class="horizon-slider__container">
            <div class="horizon-slider__container__inner">
              <?php //slide item -- blank ?>
              <section class="slider-item slider-item--blank"></section>
              <?php //slide item -- loop term ?>
              <?php
                $terms = get_terms(
                  array(
                    'taxonomy'=>'products-en-category',
                    'slug'=>array('ball-mounter','bonding','custom'),
                    'hide_empty'=>0,
                  )
                );
                foreach ( $terms as $term ):
                  $term_id = $term->term_id;
                  $term_slug = $term->slug;
                  $productCatName = $term->name;
                  $productCatDesc = $term->description;
                  $productCatEn = SCF::get_term_meta($term_id, 'products-en-category', 'product-category-english');
                  $productCatImg = SCF::get_term_meta($term_id, 'products-en-category', 'product-category-image');
              ?>
              <section class="slider-item count-item">
                <div class="inner">
                  <figure class="slider-item__image">
                  <?php
                    if($productCatImg){
                      echo wp_get_attachment_image($productCatImg, 'full');
                    } else {
                      echo '<img src="' . get_stylesheet_directory_uri() . '/assets/images/common/no-image.png" alt="" width="1840" height="1226">';
                    }
                  ?>
                  </figure>
                  <div class="slider-item__data">
                    <h2 class="slider-item__data__title" data-name="Ball&#10;mounter">
                      <?php if($productCatEn){ echo esc_html($productCatName); } ?>
                      <span class="slider-item__data__cat_en"><?php if($productCatEn){ echo nl2br($productCatEn); } ?></span>
                    </h2>
                    <p class="slider-item__data__text"><?php if($productCatDesc){ echo nl2br($productCatDesc); } ?></p>
                    <a href="<?php echo get_term_link($term_slug, 'products-en-category'); ?>" class="button-r-link-large button-circle-ani">
                      <span>More</span>
                      <span class="svg-area">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" class="circle-ani">
                          <circle cx="50%" cy="50%" r="28" class="circle-ani">
                        </svg>
                      </span>
                    </a>
                  </div>
                </div>
              </section>
              <?php endforeach; ?>
              <?php //slide item -- blank ?>
              <section class="slider-item slider-item--blank"></section>
            </div><?php //horizon-slider__container__inner ?>
          </div><?php // #horizon-slider__container ?>
        </section><?php // horizon-slider ?>

      </div><?php // horizon-slider-trigger ?>
    </section>

    <?php //企業情報 ?>
    <section class="sec sec-wide sec-company">
      <h2 class="title02 --data-sub-ja" data-sub="">Company</h2>
      <p class="intro-text">Our company was established in 1988 as a specialized firm in the production of automation and labor-saving equipment. Since then, leveraging the accumulated technical expertise, we have been contributing to the automation of factories as a group of engineers connecting the present and the future.</p>
      <?php //ページリンク ?>
      <div class="page-link">
        <a href="<?php echo esc_url(home_url()); ?>/en/company/message/" class="link-item01 page-link__item">
          <div class="link-content">
            <em class="main-text">Message</em>
          </div>
          <i class="icon"></i>
        </a>
        <a href="<?php echo esc_url(home_url()); ?>/en/company/about/" class="link-item01 page-link__item">
          <div class="link-content">
            <em class="main-text">Profile</em>
          </div>
          <i class="icon"></i>
        </a>
        <a href="<?php echo esc_url(home_url()); ?>/en/company/mission/" class="link-item01 page-link__item">
          <div class="link-content">
            <em class="main-text">Philosophy</em>
          </div>
          <i class="icon"></i>
        </a>
        <a href="<?php echo esc_url(home_url()); ?>/en/company/history/" class="link-item01 page-link__item">
          <div class="link-content">
            <em class="main-text">History</em>
          </div>
          <i class="icon"></i>
        </a>
      </div>
    </section>

    <section class="sec sec-full sec-company-image js-color-change">
      <div class="company-image sp">
        <img class="parallax js-parallax" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/home/bg-company-small.jpg" alt="" width="390" height="275">
      </div>
      <div class="company-image pc">
        <img class="parallax js-parallax" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/home/bg-company-large.jpg" alt="" width="1920" height="800">
      </div>
    </section>

    <?php //Block: content - news ?>
    <section class="sec sec-wide sec-news">
      <div class="layout-block">
        <div class="layout-block__left">
          <h2 class="title02 --data-sub-ja" data-sub="">News</h2>
          <div class="button-wrap --right">
            <a href="<?php echo esc_url(home_url()); ?>/en/news/" class="button-r-link-large button-circle-ani">
              <span>View All</span>
              <span class="svg-area">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" class="circle-ani">
                <circle cx="50%" cy="50%" r="28" class="circle-ani">
              </svg>
            </span>
            </a>
          </div>
        </div>
        <?php //記事リスト
        $args = array(
          'post_type' => 'news-en',
          'posts_per_page' => '3',
          // 'tax_query' => array(
          //   array(
          //     'taxonomy' => 'news-en-category',
          //     'field' => 'slug',
          //   ),
          // ),
          'paged' => $paged,
        );
        ?>
        <?php
        $the_query = new WP_Query( $args );
        if( $the_query->have_posts() ):
        ?>
        <ul class="post-list">
          <?php
          while( $the_query->have_posts() ): $the_query->the_post();
          //カスタム投稿タイプのタクソノミーからタームを抽出
          $termCatTax = get_the_terms(get_the_ID(), 'news-en-category');
          $cat_name = $termCatTax[0]->name;
          $cat_slug = $termCatTax[0]->slug;
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
      </div>
    </section>
<?php get_footer("english"); ?>