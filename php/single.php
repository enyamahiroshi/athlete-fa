<?php get_header(); ?>

		<div class="page-header" data-sub="News">
			<div class="page-header__title" data-sub="お知らせ">News</div>
		</div>

		<section class="sec sec-post">
			<?php if(have_posts()): the_post(); ?>
			<?php
			$category = get_the_category();
			$cat_name = $category[0]->cat_name;
			$cat_slug = $category[0]->category_nicename;
			?>
			<header class="post-header">
				<div class="post-meta">
					<time class="post-date"><?php the_time('Y.m.d'); ?></time>
					<span class="post-category post-category--<?php echo $cat_slug; ?>"><?php echo $cat_name; ?></span>
				</div>
				<h1 class="post-title"><?php the_title(); ?></h1>
			</header>

			<div class="post-body">
				<?php the_content(); ?>
			</div>
			<?php endif; ?>

			<?php //前後の記事
			get_template_part( 'block/prevnext' );
			?>
		</section>

		<section class="sec sec-medium sec-bread-navi">
			<?php //Breadcrumb NavXT
			echo '<aside class="bread-navi">';
			if(function_exists('bcn_display')){ bcn_display(); }
			echo '</aside>'."\n";;
			?>
		</section>
<?php get_footer(); ?>