<?php
$the_query = new WP_Query( $args );
if( $the_query->have_posts() ):
?>
  <ul class="post-list">
    <?php
    while( $the_query->have_posts() ): $the_query->the_post();
    $category = get_the_category();
    $cat_name = $category[0]->cat_name;
    $cat_slug = $category[0]->category_nicename;
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