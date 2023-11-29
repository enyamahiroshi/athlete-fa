<?php get_header(); ?>

    <header class="page-header page-header--products --bg-earth" data-sub="Our Products">
      <h1 class="page-header__title" data-sub="製品情報">Our Products</h1>
    </header>

    <section class="sec sec-medium">
      <ul class="product-list product-list--archive">
        <?php
          $terms = get_terms(
            'products-category',
            'hide_empty=0'
          );
          foreach ( $terms as $term ):
            $term_id = $term->term_id;
            $term_slug = $term->slug;
            $productCatName = $term->name;
            $productCatDesc = $term->description;
            $productCatEn = SCF::get_term_meta($term_id, 'products-category', 'product-category-english');
            $productCatImg = SCF::get_term_meta($term_id, 'products-category', 'product-category-image');
        ?>
        <li class="product-list__item">
          <a href="<?php echo get_term_link($term_slug, 'products-category'); ?>" class="product-link">
            <h2 class="product-name"><?php if($productCatEn){ echo esc_html($productCatName); } ?></h2>
            <div class="product-lead">
              <p><?php echo esc_html($productCatDesc); ?></p>
            </div>
            <div class="product-item-data">
              <figure class="product-item-image">
              <?php
                if($productCatImg){
                  echo wp_get_attachment_image($productCatImg, 'medium');
                } else {
                  echo '<img src="' . get_stylesheet_directory_uri() . '/assets/images/common/no-image.png" alt="" width="1840" height="1226">';
                }
              ?>
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
        <?php endforeach; ?>
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