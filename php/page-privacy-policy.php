<?php get_header(); ?>

    <header class="page-header" data-sub="Privacy policy">
      <h1 class="page-header__title" data-sub="プライバシーポリシー（個人情報保護方針）">Privacy policy</h1>
    </header>

    <section class="sec sec-small sec-pp">
      <p class="pp-intro">アスリートFA株式会社（以下、「当社」という。）は、ユーザーの個人情報について以下のとおりプライバシーポリシー（以下、「本ポリシー」という。）を定めます。本ポリシーは、当社がどのような個人情報を取得し、どのように利用・共有するかをご説明するものです。</p>
    <?php include_once('./wp-content/themes/athletefa/block/block-privacy_policy.php'); ?>
    </section>

    <section class="sec sec-medium sec-bread-navi">
      <?php //Breadcrumb NavXT
      echo '<aside class="bread-navi">';
      if(function_exists('bcn_display')){ bcn_display(); }
      echo '</aside>'."\n";;
      ?>
    </section>
<?php get_footer(); ?>