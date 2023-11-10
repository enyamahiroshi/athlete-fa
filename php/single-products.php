<?php get_header(); ?>

    <?php if(have_posts()): the_post(); ?>
    <?php
    //カスタム投稿タイプのタクソノミーからタームを抽出
    $termCatTax = get_the_terms(get_the_ID(), 'products-category');
    $cat_name = $termCatTax[0]->name;
    $cat_slug = $termCatTax[0]->slug;
    $termTagTax = get_the_terms(get_the_ID(), 'products-tag');
    $tag_name = $termTagTax[0]->name;
    $tag_slug = $termTagTax[0]->slug;
    //カスタムフィールドより
    $imageID = get_field('product-image');
    if($imageID){
      $imageSRC = wp_get_attachment_image_src($imageID, 'full');
    }
    ?>

    <header class="product-header">
      <div class="inner">
        <div class="product-meta">
          <h1 class="product-name"><?php the_title(); ?></h1>
          <div class="product-category"><?php echo $cat_name; ?></div>
          <div class="product-tag"><?php echo $tag_name; ?></div>
        </div>
        <figure class="product-main-image">
          <img src="<?php echo $imageSRC[0]; ?>" >
        </figure>
      </div>
    </header>

    <div class="has-column js-fix-area">
      <aside class="side-column side-column--products js-fix-wrapper">
        <ul class="category-list js-fix-item">
          <li class="cat-item is-active"><a href="#features">特徴</a></li>
          <li class="cat-item"><a href="#spec">基本仕様</a></li>
        </ul>
      </aside><?php //.side-column ?>

      <section class="main-column main-column--products-singular">
        <?php //特徴（ブロックエディタ） ?>
        <h2 id="features" class="title05">特徴</h2>
        <div class="post-body">
          <?php the_content(); ?>
        </div>

        <?php //基本仕様（カスタムフィールド） ?>
        <h2 id="spec" class="title05">基本仕様</h2>
        <?php
        $specStageSize = get_field('spec-stage_size');
        $specBallKei = get_field('spec-ball_kei');
        $specSmallBallPitch = get_field('spec-small_ball_pitch');
        $specMachineAA = get_field('spec-machine_alignment_accuracy');
        $specExternalDimensions = get_field('spec-external_dimensions');
        $specWeight = get_field('spec-weight');
        $specLoaderUnloader = get_field('spec-loader_unloader');
        $specBiko = get_field('spec-biko');
        ?>
        <div class="product-spec">
          <table class="tbl2">
            <tbody>
              <?php if($specStageSize): ?><tr><th><?php echo 'ステージサイズ'; ?></th><td><?php echo $specStageSize; ?></td></tr><?php endif; ?>
              <?php if($specBallKei): ?><tr><th><?php echo 'ボール径'; ?></th><td><?php echo $specBallKei; ?></td></tr><?php endif; ?>
              <?php if($specSmallBallPitch): ?><tr><th><?php echo '最小ボールピッチ'; ?></th><td><?php echo $specSmallBallPitch; ?></td></tr><?php endif; ?>
              <?php if($specMachineAA): ?><tr><th><?php echo '機械アライメント精度'; ?></th><td><?php echo $specMachineAA; ?></td></tr><?php endif; ?>
              <?php if($specExternalDimensions): ?><tr><th><?php echo '外形寸法（Ｗ×Ｄ×Ｈ）'; ?></th><td><?php echo $specExternalDimensions; ?></td></tr><?php endif; ?>
              <?php if($specWeight): ?><tr><th><?php echo '重量'; ?></th><td><?php echo $specWeight; ?></td></tr><?php endif; ?>
              <?php if($specLoaderUnloader): ?><tr><th><?php echo 'ローダ、アンローダ'; ?></th><td><?php echo $specLoaderUnloader; ?></td></tr><?php endif; ?>
              <?php if($specBiko): ?><tr><th><?php echo 'ステージサイズ'; ?></th><td><?php echo $specBiko; ?></td></tr><?php endif; ?>
            </tbody>
          </table>
        </div>

        <div class="button-wrap --left">
          <a href="<?php echo esc_url(home_url()); ?>/products" class="button-r-link-large button-circle-ani">
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

<?php get_footer(); ?>