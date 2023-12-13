<?php get_header("english"); ?>

		<div class="page-header" data-sub="News">
			<div class="page-header__title" data-sub="">News</div>
		</div>

		<section class="sec sec-post">
			<?php if(have_posts()): the_post(); ?>
			<?php
      //カスタム投稿タイプのタクソノミーからタームを抽出
      $terms = get_the_terms($post->ID, 'news-en-category');
      if(!empty($terms)) {
        foreach($terms as $term):
        $termName = $term->name;
        endforeach;
      } else {
        $termName = 'Uncategorized';
      }
			?>
			<header class="post-header">
				<div class="post-meta">
					<time class="post-date"><?php the_time('Y.m.d'); ?></time>
					<span class="post-category"><?php echo $termName; ?></span>
				</div>
				<h1 class="post-title"><?php the_title(); ?></h1>
			</header>

			<div class="post-body">
				<?php the_content(); ?>
			</div>
			<?php endif; ?>

			<?php //前後の記事
			get_template_part( 'block/prevnext-en' );
			?>
		</section>

		<section class="sec sec-medium sec-bread-navi">
			<?php //Breadcrumb NavXT
			echo '<aside class="bread-navi">';
			if(function_exists('bcn_display')){ bcn_display(); }
			echo '</aside>'."\n";;
			?>
		</section>
<?php get_footer("english"); ?>