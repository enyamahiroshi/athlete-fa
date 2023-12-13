<?php get_header("english"); ?>

    <header class="page-header" data-sub="Message">
      <h1 class="page-header__title" data-sub="Message">Message</h1>
    </header>

    <section class="sec sec-medium">
      <div class="president">
        <div class="president__message">
          <p>From our founding to the present, we have continued the development, design, and manufacturing of automation and labor-saving equipment. With the evolution of time and changes in trends, the importance of devices that can create things in place of humans and accomplish tasks beyond human capability is growing every day. In response to such global needs, Athlete FA strives to be a forward-thinking group of engineers, creating advanced devices that bridge the present and the future.</p>
          <p>The process of manufacturing provides us with the excitement of imagining something unprecedented and the joy of seeing it take shape. Moreover, manufacturing is closely intertwined with our lives, and the evolution of manufacturing has been a pillar supporting our way of life.</p>
          <p>Our Management Policy states, "We, Athlete FA, create Future Arts." Future Arts represents technology that serves as a bridge from the present to the future, enriching society and making our lives more comfortable and enjoyable. <br>Through the creation of Future Arts, Athlete FA aims to be a driving force in expanding the possibilities of our customers' businesses and contributing to a prosperous society.</p>
          <p class="president__message__catchcopy">
            <img class="logo-create-future-arts" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/common/logo-create-future-arts.svg" alt="Create Future Arts" width="408.8" height="27.7">
          </p>
          <div class="president__message__sign">President<em>Susumu Yamazaki</em></div>
        </div>
        <figure class="president__image">
          <img class="parallax js-parallax" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/message/img-president.jpg" alt="" width="570" height="808">
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
      <h2 class="page-navi-title --en" data-sub="">Company</h2>
      <nav class="page-navi --3column">
        <a href="<?php echo esc_url(home_url()); ?>/en/company/about/" class="link-item01">
          <div class="link-content">
            <em class="main-text">Profile</em>
          </div>
          <i class="icon"></i>
        </a>
        <a href="<?php echo esc_url(home_url()); ?>/en/company/mission/" class="link-item01">
          <div class="link-content --en">
            <em class="main-text">Philosophy</em>
          </div>
          <i class="icon"></i>
        </a>
        <a href="<?php echo esc_url(home_url()); ?>/en/company/history/" class="link-item01">
          <div class="link-content --en">
            <em class="main-text">History</em>
          </div>
          <i class="icon"></i>
        </a>
      </nav>
    </section>
<?php get_footer("english"); ?>