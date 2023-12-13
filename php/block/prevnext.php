<aside class="post-navi">

  <?php //前の記事 ?>
  <div class="prev-post">
    <?php if (get_previous_post()):?>
    <?php previous_post_link('%link', 'Prev', true); ?>
    <?php endif; ?>
  </div>

  <?php //一覧へ?>
  <div class="archive-post">
    <a href="<?php echo esc_url( home_url() ); ?>/news/" class="archive-link"> View All</a>
  </div>

  <?php //次の記事 ?>
  <div class="next-post">
    <?php if (get_next_post()):?>
    <?php next_post_link('%link', 'Next', true); ?>
    <?php endif; ?>
  </div>

</aside>