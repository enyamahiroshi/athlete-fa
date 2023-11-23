<?php get_header(); ?>

    <header class="page-header page-header--products --bg-earth" data-sub="Custom">
      <h1 class="page-header__title" data-sub="製品情報">Our Products</h1>
      <p class="page-header__title-sub"><strong><?php single_term_title(); ?></strong></p>
    </header>

    <div class="has-column js-fix-area">
      <aside class="side-column side-column--products">
        <ul class="category-list js-positionNav">
          <li class="cat-item is-active"><a href="#features">サービスの特徴</a></li>
          <li class="cat-item"><a href="#flow">導入までの流れ</a></li>
          <li class="cat-item"><a href="#case">カスタム事例</a></li>
          <li class="cat-item"><a href="#other">その他実績装置</a></li>
        </ul>
      </aside><?php //.side-column ?>

      <section class="main-column main-column--custom">

        <?php //サービスの特徴 ?>
        <div id="features" class="custom-features js-positionNav-target">
          <div class="features__data">
            <h2 class="title05">サービスの特徴</h2>
            <p>アスリートFAのカスタム装置はお客様の「欲しい」を実現します。長年に渡り培ってきた要素技術の組み合わせが、お客様の想定したプロセスに対し、技術的裏付けのある最適な装置提案を可能とします。また、各案件ごとにプロジェクトチームを編成し、仕様詰めから納入、アフターフォローにいたるまで一貫サポート致します。</p>
          </div>
          <figure class="features__image">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/products/term-custom/img-custom-feature-image.png" alt="サービスの特徴:イメージ" width="529" height="525">
          </figure>
        </div>

        <?php //導入までの流れ ?>
        <div id="flow" class="custom-flow js-positionNav-target">
          <h2 class="title05">カスタム導入までの流れ</h2>
          <figure class="flow-list">
              <div class="flow-list__item">
                <span class="num">01</span>
                <div class="flow-list__item__data">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/products/term-custom/icon-custom-flow-01.svg" alt="流れ:お問い合わせ" width="65" height="60">
                  <figcaption>お問い合わせ</figcaption>
                </div>
              </div>
              <div class="flow-list__item">
                <span class="num">02</span>
                <div class="flow-list__item__data">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/products/term-custom/icon-custom-flow-02.svg" alt="流れ:要求仕様ヒアリング" width="65" height="60">
                  <figcaption>要求仕様<br>ヒアリング</figcaption>
                </div>
              </div>
              <div class="flow-list__item">
                <span class="num">03</span>
                <div class="flow-list__item__data">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/products/term-custom/icon-custom-flow-03.svg" alt="流れ:装置ご提案" width="65" height="60">
                  <figcaption>装置ご提案</figcaption>
                </div>
              </div>
              <div class="flow-list__item">
                <span class="num">04</span>
                <div class="flow-list__item__data">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/products/term-custom/icon-custom-flow-04.svg" alt="流れ:社内詳細詰め" width="65" height="60">
                  <figcaption>社内詳細詰め</figcaption>
                </div>
              </div>
              <div class="flow-list__item">
                <span class="num">05</span>
                <div class="flow-list__item__data">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/products/term-custom/icon-custom-flow-05.svg" alt="流れ:仕様書・見積書レイアウトご提出" width="65" height="60">
                  <figcaption>仕様書・見積書<br>レイアウトご提出</figcaption>
                </div>
              </div>
              <div class="flow-list__item blank"></div>
              <div class="flow-list__item blank"></div>
              <div class="flow-list__item">
                <span class="num">06</span>
                <div class="flow-list__item__data">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/products/term-custom/icon-custom-flow-06.svg" alt="流れ:発注" width="65" height="60">
                  <figcaption>発注</figcaption>
                </div>
              </div>
              <div class="flow-list__item">
                <span class="num">07</span>
                <div class="flow-list__item__data">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/products/term-custom/icon-custom-flow-07.svg" alt="流れ:製作・調整" width="65" height="60">
                  <figcaption>製作・調整</figcaption>
                </div>
              </div>
              <div class="flow-list__item">
                <span class="num">08</span>
                <div class="flow-list__item__data">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/products/term-custom/icon-custom-flow-08.svg" alt="流れ:出荷前立ち合い" width="65" height="60">
                  <figcaption>出荷前立ち合い</figcaption>
                </div>
              </div>
              <div class="flow-list__item">
                <span class="num">09</span>
                <div class="flow-list__item__data">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/products/term-custom/icon-custom-flow-09.svg" alt="流れ:納入・検収" width="65" height="60">
                  <figcaption>納入・検収</figcaption>
                </div>
              </div>
              <div class="flow-list__item">
                <span class="num">10</span>
                <div class="flow-list__item__data">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/products/term-custom/icon-custom-flow-10.svg" alt="流れ:アフターサポート" width="65" height="60">
                  <figcaption>アフターサポート</figcaption>
                </div>
              </div>
          </figure>
        </div>

        <?php //カスタム事例 ?>
        <div id="case" class="custom-case js-positionNav-target">
          <h2 class="title05">カスタム事例</h2>
        <?php if( have_posts() ): ?>
          <ul class="product-list">
            <?php while( have_posts() ): the_post(); ?>
            <?php
            //カスタム投稿タイプのタクソノミーからタームを抽出
            $termTagTax = get_the_terms(get_the_ID(), 'products-tag');
            $tag_name = $termTagTax[0]->name;
            $tag_slug = $termTagTax[0]->slug;
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
                      echo wp_get_attachment_image($mainImg, 'medium');
                    } else {
                      echo '<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/common/no-image.png" alt="" width="1840" height="1226">';
                    }
                    ?>
                  </figure>
                  <ul class="product-tag">
                  <?php foreach ($termTagTax as $termTag): ?>
                    <li class="product-tag__name"><?php echo $termTag->name; ?></li>
                  <?php endforeach; ?>
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

        <?php
        $cntPost = $wp_query->found_posts;
        if( $cntPost > 12 ): ?>
          <div class="button-wrap">
            <a href="<?php echo esc_url(home_url()); ?>/products/custom/custom-list/" class="button-r-link-large button-circle-ani">
              カスタム事例一覧
              <span class="svg-area">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" class="circle-ani">
                  <circle cx="50%" cy="50%" r="28" class="circle-ani">
                </circle></svg>
              </span>
            </a>
          </div>
        </div>
        <?php endif; ?>

        <?php //その他実績装置 ?>
        <div id="other" class="custom-other js-positionNav-target">
          <h2 class="title05">その他実績装置</h2>
          <ul class="list-disc custom-other-list">
            <li>ＡＧシンタ対応加熱加圧装置</li>
            <li>ＵＶ樹脂転写装置</li>
            <li>ハイブリッドＩＣ組立システム</li>
            <li>樹脂封止硬化装置</li>
            <li>パネル検査装置</li>
            <li>ＩＣテストハンドラ</li>
            <li>圧力計組立装置</li>
            <li>外観検査装置</li>
            <li>セラミック基板融着システム</li>
            <li>素子用ダイボンダ</li>
            <li>レーザマーキング装置</li>
            <li>ＣＯＢ実装システム</li>
            <li>異形部品インサータ</li>
            <li>特殊大型ダイボンダ</li>
            <li>半導体センサ組立システム</li>
            <li>ポッティング装置</li>
            <li>基板テープ剥がし機</li>
            <li>車載用パワーモジュール組立システム</li>
            <li>検査機能付きＰ＆Ｐ</li>
            <li>ＨＥＭＴテストシステム</li>
            <li>パターン認識応用システム</li>
            <li>ＬＥＤ/ＰＤダイボンダ</li>
            <li>ＡＣＦボンダ</li>
            <li>レンズ組立システム</li>
            <li>ＯＬＢボンダ</li>
            <li>共晶ダイボンダ</li>
            <li>ＩＣカード組立システム</li>
            <li>地震センサ組付機</li>
            <li>ソルダダイボンダ</li>
            <li>ＰＷＢ接合システム</li>
          </ul>
        </div>

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