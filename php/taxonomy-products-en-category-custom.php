<?php get_header("english"); ?>

    <header class="page-header page-header--products --bg-earth" data-sub="Custom">
      <h1 class="page-header__title" data-sub="">Our Products</h1>
      <p class="page-header__title-sub"><strong><?php single_term_title(); ?></strong></p>
    </header>

    <div class="has-column">
      <aside class="side-column side-column--products">
        <ul class="category-list position-nav js-positionNav">
          <li class="cat-item is-active"><a href="#features">Features of Service</a></li>
          <li class="cat-item"><a href="#flow">Flow Chart</a></li>
          <li class="cat-item"><a href="#case">Custom Cases</a></li>
          <li class="cat-item"><a href="#other">Other Past Cases</a></li>
        </ul>
      </aside><?php //.side-column ?>

      <section class="main-column main-column--custom">

        <?php //Features of Service ?>
        <div id="features" class="custom-features js-positionNav-target">
          <div class="features__data">
            <h2 class="title05">Features of Service</h2>
            <p>Athlete FA is confiden to fullfill customer's demand. Combined elemental technologies, which we have cultivated over many years, enable us to propose a tecnically optimal solution for each customer's  process. Furthermore, an expart team is formd for each project and provide consistent suport ranging from determining specifications to after sales service.</p>
          </div>
          <figure class="features__image">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/products/term-custom/img-custom-feature-image_en.png" alt="Features of Service" width="529" height="525">
          </figure>
        </div>

        <?php //Flow Chart for Custom Application ?>
        <div id="flow" class="custom-flow js-positionNav-target">
          <h2 class="title05">Flow Chart for Custom Application</h2>
          <figure class="flow-list">
              <div class="flow-list__item">
                <span class="num">01</span>
                <div class="flow-list__item__data">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/products/term-custom/icon-custom-flow-01.svg" alt="Contact(Inquiry)" width="65" height="60">
                  <figcaption>Contact(Inquiry)</figcaption>
                </div>
              </div>
              <div class="flow-list__item">
                <span class="num">02</span>
                <div class="flow-list__item__data">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/products/term-custom/icon-custom-flow-02.svg" alt="Request check" width="65" height="60">
                  <figcaption>Request check</figcaption>
                </div>
              </div>
              <div class="flow-list__item">
                <span class="num">03</span>
                <div class="flow-list__item__data">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/products/term-custom/icon-custom-flow-03.svg" alt="Proposal" width="65" height="60">
                  <figcaption>Proposal</figcaption>
                </div>
              </div>
              <div class="flow-list__item">
                <span class="num">04</span>
                <div class="flow-list__item__data">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/products/term-custom/icon-custom-flow-04.svg" alt="Internal detail planning" width="65" height="60">
                  <figcaption>Internal detail planning</figcaption>
                </div>
              </div>
              <div class="flow-list__item">
                <span class="num">05</span>
                <div class="flow-list__item__data">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/products/term-custom/icon-custom-flow-05.svg" alt="Submit specifications & layout" width="65" height="60">
                  <figcaption>Submit<br>specifications & layout</figcaption>
                </div>
              </div>
              <div class="flow-list__item blank"></div>
              <div class="flow-list__item blank"></div>
              <div class="flow-list__item">
                <span class="num">06</span>
                <div class="flow-list__item__data">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/products/term-custom/icon-custom-flow-06.svg" alt="PO" width="65" height="60">
                  <figcaption>PO</figcaption>
                </div>
              </div>
              <div class="flow-list__item">
                <span class="num">07</span>
                <div class="flow-list__item__data">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/products/term-custom/icon-custom-flow-07.svg" alt="Manufacturing" width="65" height="60">
                  <figcaption>Manufacturing</figcaption>
                </div>
              </div>
              <div class="flow-list__item">
                <span class="num">08</span>
                <div class="flow-list__item__data">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/products/term-custom/icon-custom-flow-08.svg" alt="Final condition check" width="65" height="60">
                  <figcaption>Final condition check</figcaption>
                </div>
              </div>
              <div class="flow-list__item">
                <span class="num">09</span>
                <div class="flow-list__item__data">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/products/term-custom/icon-custom-flow-09.svg" alt="Instolation Acceptance" width="65" height="60">
                  <figcaption>Instolation<br>Acceptance</figcaption>
                </div>
              </div>
              <div class="flow-list__item">
                <span class="num">10</span>
                <div class="flow-list__item__data">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/products/term-custom/icon-custom-flow-10.svg" alt="After sales service" width="65" height="60">
                  <figcaption>After sales service</figcaption>
                </div>
              </div>
          </figure>
        </div>

        <?php //Custom Cases ?>
        <div id="case" class="custom-case js-positionNav-target">
          <h2 class="title05">Custom Cases</h2>
        <?php if( have_posts() ): ?>
          <ul class="product-list">
            <?php while( have_posts() ): the_post(); ?>
            <?php
            //カスタム投稿タイプのタクソノミーからタームを抽出
            $termTagTax = get_the_terms(get_the_ID(), 'products-en-tag');
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
                      echo '<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/common/no-image.png" alt="" width="1840" height="1226">';
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
            <li><div class="not-post">No content.</div></li>
          </ul>
        <?php endif; wp_reset_postdata(); ?>
        <?php //12件以上あればボタン表示
        $cntPost = $wp_query->found_posts;
        if( $cntPost > 12 ): ?>
          <div class="button-wrap">
            <a href="<?php echo esc_url(home_url()); ?>/en/products/custom/custom-list/" class="button-r-link-large button-circle-ani">
              More
              <span class="svg-area">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" class="circle-ani">
                  <circle cx="50%" cy="50%" r="28" class="circle-ani">
                </circle></svg>
              </span>
            </a>
          </div>
        <?php endif; ?>
        </div>

        <?php //Other Past Cases ?>
        <div id="other" class="custom-other js-positionNav-target">
          <h2 class="title05">Other Past Cases</h2>
          <div class="custom-other-list-wrap">
          <?php
          $the_postid = 599;//表示したい投稿または固定ページのIDを指定します
          $the_content = get_post($the_postid)->post_content;
          $the_content = apply_filters('the_content', $the_content);
          echo $the_content; //取得したコンテンツを出力します
          ?>
          </div>
          <div class="button-wrap --left">
            <a href="<?php echo esc_url(home_url()); ?>/en/products/" class="button-r-link-large button-circle-ani">
              Go back
              <span class="svg-area">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" class="circle-ani">
                  <circle cx="50%" cy="50%" r="28" class="circle-ani">
                </circle></svg>
              </span>
            </a>
          </div>
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
<?php get_footer("english"); ?>