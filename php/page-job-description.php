<?php get_header(); ?>

    <header class="page-header" data-sub="Job description">
      <h1 class="page-header__title" data-sub="<?php the_title(); ?>">Job description</h1>
    </header>

    <section class="sec sec-medium sec-job-description">
    <?php include_once('./wp-content/themes/athletefa/block/block-job-description.php'); ?>
      <div class="button-wrap --list">
        <a href="<?php echo esc_url(home_url()); ?>/recruit/new-graduates/" class="button-r-link-large button-circle-ani">
          新卒採用ページへ戻る
          <span class="svg-area">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" class="circle-ani">
              <circle cx="50%" cy="50%" r="28" class="circle-ani">
            </circle></svg>
          </span>
        </a>
      </div>
    </section>
<?php get_footer("recruit"); ?>