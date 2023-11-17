<?php get_header(); ?>

    <header class="page-header" data-sub="<?php echo $slug = get_post(get_the_ID())->post_name; ?>">
      <h1 class="page-header__title" data-sub="<?php the_title(); ?>"><?php echo $slug = get_post(get_the_ID())->post_name; ?></h1>
    </header>

    <section class="sec sec-medium">
      <div class="president">
        <div class="president__message">
          <p>創業から現在に至るまで、自動化設備、省力化設備の開発・設計・製造を続けてまいりました。時代の流れや変化に伴い、人の代わりにものをつくる装置、人には成しえないことができる装置の重要性は日々大きくなっています。アスリートFAはそんな世界のニーズに応えるべく、今と未来をつなぐ技術者集団として先進的な装置を創造します。</p>
          <p>ものづくりは今までにないものを想像する面白さと、それがカタチになる喜びを、私たちに与えてくれます。また、ものづくりは私たちの生活と密接に結びつき、ものづくりの進化が私たちの生活を支えてきました。</p>
          <p>経営理念に「私たち、AthleteFAはFuture Artsを創造します」とあります。Future Artsは社会や私たちの生活を豊かで、より過ごしやすいものとするための、現在から未来への架け橋となる技術を意味しています。<br>アスリートFAはFuture Artsの創造を通して、お客様のビジネスの可能性を拡げるチカラになるとともに、豊かな社会に貢献していきます。</p>
          <p class="president__message__catchcopy" data-sub="Create Future Arts">
            <strong>未来につながる技術の創造</strong>
          </p>
          <div class="president__message__sign">代表取締役社長<em>山㟢 晋</em></div>
        </div>
        <figure class="president__image">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/message/img-president.jpg" alt="" width="570" height="808">
        </figure>
      </div>
    </section>

    <section class="sec sec-medium sec-bread-navi">
      <?php //Breadcrumb NavXT
      echo '<aside class="bread-navi">';
      if(function_exists('bcn_display')){ bcn_display(); }
      echo '</aside>'."\n";;
      ?>
    </section>

    <section class="sec sec-medium sec-page-navi">
      <h2 class="page-navi-title --en" data-sub="企業情報">Company</h2>
      <nav class="page-navi --3column">
        <a href="<?php echo esc_url(home_url()); ?>/company/about/" class="link-item01">
          <div class="link-content">
            <em class="main-text">会社概要</em><span class="sub-text">Profile</span>
          </div>
          <i class="icon"></i>
        </a>
        <a href="<?php echo esc_url(home_url()); ?>/company/mission/" class="link-item01">
          <div class="link-content --en">
            <em class="main-text">経営理念・方針</em><span class="sub-text">Philosophy</span>
          </div>
          <i class="icon"></i>
        </a>
        <a href="<?php echo esc_url(home_url()); ?>/company/history/" class="link-item01">
          <div class="link-content --en">
            <em class="main-text">沿革</em><span class="sub-text">History</span>
          </div>
          <i class="icon"></i>
        </a>
      </nav>
    </section>
<?php get_footer(); ?>