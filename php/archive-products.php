<?php get_header(); ?>

    <header class="page-header page-header--products --bg-earth" data-sub="Our Products">
      <h1 class="page-header__title" data-sub="製品情報">Our Products</h1>
    </header>

    <section class="sec sec-medium">
      <ul class="product-list product-list--archive">
        <li class="product-list__item">
          <a href="<?php echo esc_url(home_url()); ?>/products/products-category/ball-mounter/" class="product-link">
            <h2 class="product-name">ボールマウンタ</h2>
            <div class="product-lead">
              <p>微小はんだボールをウェハや基板の上に配列させるための装置です。はんだボール配列には当社独自の技術を採用し高スループットの生産性を実現しています。最終製品はデータセンタ(DC)/ハイパフォーマンスコンピュータ(HPC)/5G等最先端のデバイスに展開されています。</p>
            </div>
            <div class="product-item-data">
              <figure class="product-item-image">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/products/img-products-archive-01.jpg" alt="ボールマウンタ" width="309" height="245">
              </figure>
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
        <li class="product-list__item">
          <a href="<?php echo esc_url(home_url()); ?>/products/products-category/bonding/" class="product-link">
            <h2 class="product-name">ボンディング</h2>
            <div class="product-lead">
              <p>フリップチップボンダおよびダイボンダは、幅広いラインナップ(R＆D～量産機)をご用意しており、フォトニクス/LD/イメージセンサを始めとした各種アプリケーションおよび各種実装プロセス向けに、高精度・高スループット装置として提供しています。</p>
            </div>
            <div class="product-item-data">
              <figure class="product-item-image">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/products/img-products-archive-02.jpg" alt="ボンディング" width="309" height="245">
              </figure>
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
        <li class="product-list__item">
          <a href="<?php echo esc_url(home_url()); ?>/products/products-category/custom/" class="product-link">
            <h2 class="product-name">カスタム</h2>
            <div class="product-lead">
              <p>長年に渡り培った豊富な要素技術を組み合わせ、安全性と信頼性を確保し、多岐にわたるお客様のニーズを満たす新しい装置を生み出していきます。</p>
            </div>
            <div class="product-item-data">
              <figure class="product-item-image">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/products/img-products-archive-03.jpg" alt="カスタム" width="309" height="245">
              </figure>
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
      </ul>
      <section class="sec-bread-navi">
        <?php //Breadcrumb NavXT
        echo '<aside class="bread-navi">';
        if(function_exists('bcn_display')){ bcn_display(); }
        echo '</aside>'."\n";
        ?>
      </section>
    </section>
<?php get_footer(); ?>