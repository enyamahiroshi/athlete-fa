<?php
$path = $_SERVER['REQUEST_URI'];
if( strpos( $path, '/en/' ) !== false ): ?>
<?php get_header("english"); ?>
<header class="page-header" data-sub="404">
  <h1 class="page-header__title" data-sub="">NOT FOUND 404</h1>
</header>

<main class="main-wrap">

  <section class="sec">
    <div class="inner">
    </div>
  </section>

<?php get_footer("english"); ?>
<?php else: ?>
<?php get_header(); ?>
<header class="page-header" data-sub="404">
  <h1 class="page-header__title" data-sub="ページがみつかりません">NOT FOUND 404</h1>
</header>

<main class="main-wrap">

  <section class="sec">
    <div class="inner">
    </div>
  </section>

<?php get_footer(); ?>
<?php endif; ?>