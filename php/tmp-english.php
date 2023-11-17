<?php
/**
Template Name: 英語ページ
***/
get_header("english"); ?>

    <header class="page-header" data-sub="<?php echo $slug = get_post(get_the_ID())->post_name; ?>">
      <h1 class="page-header__title" data-sub="<?php the_title(); ?>"><?php echo $slug = get_post(get_the_ID())->post_name; ?></h1>
    </header>

    <section class="sec sec-medium">
      <?php the_content(); ?>
    </section>
<?php get_footer("english"); ?>