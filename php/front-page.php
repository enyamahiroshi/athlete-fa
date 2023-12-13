<?php get_header(); ?>

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
          <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/home/img-catchcopy-small.png" media="(max-width: 767px)">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/home/img-catchcopy-large.png" alt="Factory of the Future 限界を超える技術で向上の未来を創る。" width="662" height="303">
        </picture>
      </h1>
      <div class="cta-recruit">
        <div class="cta-recruit__title">RECRUIT</div>
        <div class="cta-recruit__text">共に挑戦する仲間を募集しています。</div>
        <div class="cta-recruit__navi">
          <a href="<?php echo esc_url(home_url()); ?>/recruit/new-graduates/" class="button-r-link-small">新卒採用</a>
          <a href="<?php echo esc_url(home_url()); ?>/recruit/career/" class="button-r-link-small">キャリア採用</a>
        </div>
      </div>
    </section>

    <section class="sec sec-medium sec-intro-products-info-1">
      <div class="block-layout1">
        <div class="block-item-data">
          <h2 class="title01 block-item-title" data-sub="Our mission is ...">
            <img class="logo-create-future-arts" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/common/logo-create-future-arts.svg" alt="Create Future Arts" width="408.8" height="27.7"><br>私たちは未来につながる技術を創造します
          </h2>
          <p class="block-item-text">私たちのものづくりにおいて、Future Arts(未来につながる技術)は現在から未来への架け橋となる技術を意味します。<br>私たちはFuture Artsの創造を通して、お客様のビジネスの可能性を広げるチカラになるとともに豊かな社会に貢献します。</p>
          <a href="<?php echo esc_url(home_url()); ?>/products/" class="button-r-link-large button-circle-ani">
            製品情報
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
          <h2 class="title02 --data-sub-ja" data-sub="製品情報">Our<br>Products</h2>
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
                    'taxonomy'=>'products-category',
                    'slug'=>array('ball-mounter','bonding','custom'),
                    'hide_empty'=>0,
                  )
                );
                foreach ( $terms as $term ):
                  $term_id = $term->term_id;
                  $term_slug = $term->slug;
                  $productCatName = $term->name;
                  $productCatDesc = $term->description;
                  $productCatEn = SCF::get_term_meta($term_id, 'products-category', 'product-category-english');
                  $productCatImg = SCF::get_term_meta($term_id, 'products-category', 'product-category-image');
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
                    <a href="<?php echo get_term_link($term_slug, 'products-category'); ?>" class="button-r-link-large button-circle-ani">
                      <span>詳しく見る</span>
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

    <?php //Join our TEAM ?>
    <section class="sec sec-full sec-join-our-team">
      <h2 class="title03 --data-sub-ja" data-sub="採用情報">Join our TEAM</h2>
      <p class="join-intro">限界を超える技術で工場の未来を創る。</p>
      <p class="join-text">アスリートFAの使命は、お客様の未到達領域への挑戦をサポートすること。<br>その使命を果たすため、私たちはアスリートのように力強く限界に挑戦し続けます。<br>あなたの手が、創造力が、工場の未来を創ります。</p>
      <?php //loop slider ?>
      <div class="scroll-infinity">
        <div class="scroll-infinity__wrap">
          <ul class="scroll-infinity__list scroll-infinity__list--left">
            <li class="scroll-infinity__item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/home/loop-slider/img001.jpg" alt="" width="400" height="400"></li>
            <li class="scroll-infinity__item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/home/loop-slider/img002.jpg" alt="" width="400" height="400"></li>
            <li class="scroll-infinity__item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/home/loop-slider/img003.jpg" alt="" width="400" height="400"></li>
            <li class="scroll-infinity__item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/home/loop-slider/img004.jpg" alt="" width="400" height="400"></li>
            <li class="scroll-infinity__item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/home/loop-slider/img005.jpg" alt="" width="400" height="400"></li>
            <li class="scroll-infinity__item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/home/loop-slider/img006.jpg" alt="" width="400" height="400"></li>
            <li class="scroll-infinity__item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/home/loop-slider/img007.jpg" alt="" width="400" height="400"></li>
          </ul>
          <ul class="scroll-infinity__list scroll-infinity__list--left">
            <li class="scroll-infinity__item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/home/loop-slider/img001.jpg" alt="" width="400" height="400"></li>
            <li class="scroll-infinity__item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/home/loop-slider/img002.jpg" alt="" width="400" height="400"></li>
            <li class="scroll-infinity__item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/home/loop-slider/img003.jpg" alt="" width="400" height="400"></li>
            <li class="scroll-infinity__item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/home/loop-slider/img004.jpg" alt="" width="400" height="400"></li>
            <li class="scroll-infinity__item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/home/loop-slider/img005.jpg" alt="" width="400" height="400"></li>
            <li class="scroll-infinity__item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/home/loop-slider/img006.jpg" alt="" width="400" height="400"></li>
            <li class="scroll-infinity__item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/home/loop-slider/img007.jpg" alt="" width="400" height="400"></li>
          </ul>
        </div>
      </div>
    </section>

    <?php //新卒採用 ?>
    <section class="sec sec-full sec-new-graduate">
      <div class="contents-wrap">
        <div class="sec-header">
          <h2 class="title04" data-sub="new &#10;graduate">新卒採用</h2>
          <a href="<?php echo esc_url(home_url()); ?>/recruit/new-graduates/" class="button-r-link-large button-circle-ani">
            新卒採用トップ
            <span class="svg-area">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" class="circle-ani">
                <circle cx="50%" cy="50%" r="28" class="circle-ani">
              </svg>
            </span>
          </a>
        </div>
        <div class="recruit-link-area">
          <?php //採用項目リンク ?>
          <a href="<?php echo esc_url(home_url()); ?>/recruit/department/" class="recruit-link-item">
            <div class="recruit-link-item__link">
              <em>部署紹介</em><span>Department</span><i class="icon"></i>
            </div>
            <figure class="recruit-link-item__image">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/home/img-recruit-link-image-01.jpg" alt="" width="958" height="677">
            </figure>
          </a>
          <?php //採用項目リンク ?>
          <a href="<?php echo esc_url(home_url()); ?>/recruit/data/" class="recruit-link-item">
            <div class="recruit-link-item__link">
              <em>数字でわかるアスリートFA</em><span>Data</span><i class="icon"></i>
            </div>
            <figure class="recruit-link-item__image">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/home/img-recruit-link-image-02.jpg" alt="" width="958" height="677">
            </figure>
          </a>
          <?php //採用項目リンク ?>
          <a href="<?php echo esc_url(home_url()); ?>/recruit/internship/" class="recruit-link-item">
            <div class="recruit-link-item__link">
              <em>インターンシップ情報</em><span>Internship</span><i class="icon"></i>
            </div>
            <figure class="recruit-link-item__image">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/home/img-recruit-link-image-03.jpg" alt="" width="958" height="677">
            </figure>
          </a>
          <?php //採用項目リンク ?>
          <a href="<?php echo esc_url(home_url()); ?>/recruit/job-description/" class="recruit-link-item">
            <div class="recruit-link-item__link">
              <em>新卒募集要項</em><span>Requirements</span><i class="icon"></i>
            </div>
            <figure class="recruit-link-item__image">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/home/img-recruit-link-image-04.jpg" alt="" width="958" height="677">
            </figure>
          </a>
        </div>
      </div>
    </section>
    <div id="cursor" class="cursor"></div>
    <div id="follower" class="follower"></div>

    <?php //キャリア採用 ?>
    <section class="sec sec-medium sec-career">
      <a href="<?php echo esc_url(home_url()); ?>/recruit/career/" class="link-to-career">
        <div class="link-to-career__data">
          <h2 class="title04" data-sub="career">キャリア採用</h2>
          <p class="link-to-career__text">アスリートFAではキャリア人材の採用を随時行っています。<br>経験を活かし、新しい挑戦を始めましょう。</p>
          <div class="button-r-link-large button-circle-ani">
            <span>キャリア採用トップ</span>
            <span class="svg-area">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" class="circle-ani">
                <circle cx="50%" cy="50%" r="28" class="circle-ani">
              </svg>
            </span>
          </div>
        </div>
        <figure class="link-to-career__image">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/home/img-recruit-career.jpg" alt="" width="600" height="424">
        </figure>
      </a>
    </section>

    <?php //採用リンクボタン ?>
    <section class="recruit-links">
      <a href="#" target="_blank" rel="noopener noreferrer" class="recruit-links__button --blank">
        <span>新卒採用</span>
        <div class="button-mynavi"></div>
      </a>
      <a href="<?php echo esc_url(home_url()); ?>/recruit/entry/" class="recruit-links__button">
        <span>キャリア採用</span>
        エントリーフォーム
      </a>
    </section>

    <?php //企業情報 ?>
    <section class="sec sec-wide sec-company">
      <h2 class="title02 --data-sub-ja" data-sub="企業情報">Company</h2>
      <p class="intro-text">当社は自動化設備、省力化設備を製作する専門企業として1988年に設立いたしました。<br>以来、積み重ねてきた技術力をバックボーンに、今と未来をつなぐ技術者集団として工場の自動化に貢献しています。</p>
      <?php //ページリンク ?>
      <div class="page-link">
        <a href="<?php echo esc_url(home_url()); ?>/company/message/" class="link-item01 page-link__item">
          <div class="link-content">
            <em class="main-text">社長メッセージ</em><span class="sub-text">Message</span>
          </div>
          <i class="icon"></i>
        </a>
        <a href="<?php echo esc_url(home_url()); ?>/company/about/" class="link-item01 page-link__item">
          <div class="link-content">
            <em class="main-text">会社概要</em><span class="sub-text">Profile</span>
          </div>
          <i class="icon"></i>
        </a>
        <a href="<?php echo esc_url(home_url()); ?>/company/mission/" class="link-item01 page-link__item">
          <div class="link-content">
            <em class="main-text">経営理念・方針</em><span class="sub-text">Philosophy</span>
          </div>
          <i class="icon"></i>
        </a>
        <a href="<?php echo esc_url(home_url()); ?>/company/history/" class="link-item01 page-link__item">
          <div class="link-content">
            <em class="main-text">沿革</em><span class="sub-text">History</span>
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
          <h2 class="title02 --data-sub-ja" data-sub="お知らせ">News</h2>
          <div class="button-wrap --right">
            <a href="<?php echo esc_url(home_url()); ?>/news/" class="button-r-link-large button-circle-ani">
              <span>一覧を見る</span>
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
          'post_type' => 'post',
          'posts_per_page' => '3',
          // 'category_name' => 'cat_slug',
        );
        get_template_part( 'block/post_list', null, $args );
        ?>
        <?php //the_content(); ?>
      </div>
    </section>
<?php get_footer(); ?>