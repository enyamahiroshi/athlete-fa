<?php get_header("english"); ?>

    <header class="page-header" data-sub="Privacy policy">
      <h1 class="page-header__title" data-sub="プライバシーポリシー（個人情報保護方針）">Privacy policy</h1>
    </header>

    <section class="sec sec-small sec-pp">
      <p class="pp-intro">Athlete FA Corporation (hereinafter referred to as "the Company") establishes the following privacy policy (hereinafter referred to as "this Policy") regarding the personal information of users. This Policy explains what kind of personal information the Company collects and how it is used and shared.</p>
    <?php include_once('./wp-content/themes/athletefa/block/block-privacy_policy-en.php'); ?>
    </section>

    <section class="sec sec-medium sec-bread-navi">
      <?php //Breadcrumb NavXT
      echo '<aside class="bread-navi">';
      if(function_exists('bcn_display')){ bcn_display(); }
      echo '</aside>'."\n";;
      ?>
    </section>
<?php get_footer("english"); ?>