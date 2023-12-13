<?php get_header(); ?>

    <?php if(have_posts()): the_post(); ?>
    <?php
    //カスタム投稿タイプのタクソノミーからタームを抽出
    $termCatTax = get_the_terms(get_the_ID(), 'products-category');
    $cat_name = $termCatTax[0]->name;
    $cat_slug = $termCatTax[0]->slug;
    $termTagTax = get_the_terms(get_the_ID(), 'products-tag');
    //カスタムフィールドより
    $mainImg = SCF::get('product-image');
    $featuresTitle = esc_html(SCF::get('features-title'));
    $featuresText = SCF::get('features-text');
    $spec1Title = esc_html(SCF::get('spec-group1-title'));
    $spec1Group = SCF::get('spec-group1');
    $spec2Title = esc_html(SCF::get('spec-group2-title'));
    $spec2Group = SCF::get('spec-group2');
    ?>

    <header class="product-header">
      <div class="inner">
        <div class="product-meta">
          <h1 class="product-name"><?php the_title(); ?></h1>
          <div class="product-category"><?php echo $cat_name; ?></div>
          <?php if($termTagTax): ?>
          <ul class="product-tag">
          <?php foreach ($termTagTax as $termTag): ?>
            <li class="product-tag__name"><?php echo $termTag->name; ?></li>
          <?php endforeach; ?>
          </ul>
          <?php endif; ?>
        </div>
        <figure class="product-main-image">
          <?php
          if($mainImg){
            echo wp_get_attachment_image($mainImg, 'full');
          } else {
            echo '<img class="no-image--border" src="' . get_stylesheet_directory_uri() . '/assets/images/common/no-image.png" alt="" width="1840" height="1226">';
          }
          ?>
        </figure>
      </div>
    </header>

    <div class="has-column">
      <aside class="side-column side-column--products">
        <ul class="category-list position-nav js-positionNav">
          <li class="cat-item is-active"><a href="#features">特徴</a></li>
          <li class="cat-item"><a href="#spec">基本仕様</a></li>
        </ul>
      </aside><?php //.side-column ?>
      <section class="main-column main-column--products-singular">
        <?php //特徴（ブロックエディタ） ?>
        <?php if($featuresTitle || $featuresText): ?>
        <h2 id="features" class="title05 js-positionNav-target">特徴</h2>
        <div class="post-body">
          <?php if($featuresTitle){ echo '<h3>' . $featuresTitle . '</h3>'; } ?>
          <?php if($featuresText){ echo $featuresText; } ?>
        </div>
        <?php endif; ?>

<?php //基本仕様（カスタムフィールド） ?>
<?php if($spec1Title || !empty($spec1Group[0]['spec-group1-label']) || $spec2Title || !empty($spec2Group[0]['spec-group2-label'])): ?>
        <h2 id="spec" class="title05 js-positionNav-target">基本仕様</h2>
        <div class="product-spec">
<?php endif; ?>
          <?php if($spec1Title){ echo '<h3>' . $spec1Title . '</h3>'; } ?>
          <?php if(!empty($spec1Group[0]['spec-group1-label'])): ?>
          <table class="tbl2">
            <tbody>
              <?php foreach ( $spec1Group as $spec1 ): ?>
              <tr>
                <th><?php echo $spec1['spec-group1-label']; ?></th>
                <td><?php echo $spec1['spec-group1-data']; ?></td>
              </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
          <?php endif; ?>
          <?php if($spec2Title){ echo '<h3>' . $spec2Title . '</h3>'; } ?>
          <?php if(!empty($spec2Group[0]['spec-group2-label'])): ?>
          <table class="tbl2">
            <tbody>
              <?php foreach ( $spec2Group as $spec2 ): ?>
              <tr>
                <th><?php echo $spec2['spec-group2-label']; ?></th>
                <td><?php echo $spec2['spec-group2-data']; ?></td>
              </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
          <?php endif; ?>
<?php if($spec1Title || !empty($spec1Group[0]['spec-group1-label']) || $spec2Title || !empty($spec2Group[0]['spec-group2-label'])): ?>
        </div>
<?php endif; ?>

        <div class="button-wrap --left">
          <a href="<?php echo esc_url(home_url()); ?>/products/" class="button-r-link-large button-circle-ani">
            製品一覧へ戻る
            <span class="svg-area">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" class="circle-ani">
                <circle cx="50%" cy="50%" r="28" class="circle-ani">
              </circle></svg>
            </span>
          </a>
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
    <?php endif; ?>

    <?php //英語表記 ?>
    <?php
    $terms = get_the_terms($post->ID, 'products-category');
    if($terms):
      foreach($terms as $term):
        $term_id = $term->term_id;
        $productCatEn = SCF::get_term_meta($term_id, 'products-category', 'product-category-english');
      endforeach;
    endif;
    ?>
    <aside class="product-english-name"><span><?php if($productCatEn){ echo $productCatEn; } ?></span></aside>
<?php get_footer(); ?>