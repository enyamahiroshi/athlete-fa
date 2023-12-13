<?php get_header("english"); ?>

    <header class="page-header" data-sub="Philosophy">
      <h1 class="page-header__title" data-sub="Philosophy">Philosophy</h1>
    </header>

    <div class="has-column">
      <aside class="side-column">
        <ul class="category-list position-nav js-positionNav">
          <li class="cat-item is-active"><a href="#bland">Brand</a></li>
          <li class="cat-item"><a href="#philosophy">Management Principle</a></li>
          <li class="cat-item"><a href="#policy">Management Policies</a></li>
          <li class="cat-item"><a href="#quality">Quality Policies</a></li>
          <li class="cat-item"><a href="#environmental">Environment Policies</a></li>
        </ul>
      </aside><?php //.side-column ?>

      <section class="main-column">

        <div id="bland" class="cont js-positionNav-target">
          <h2 class="title05">Brand</h2>
          <figure class="bland-logo">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/common/logo-red.svg" alt="" width="194" height="31.74">
          </figure>
          <div class="bland-item">
            <h3 class="bland-item__title"><em>A</em>dvance</h3>
            <p class="bland-item__text">The spirit of creating from scratch, pioneering ahead of our time in the world of manufacturing, is at the core of our approach. Through the combination of our accumulated core technologies, we enable the proposal of solutions that align with new customer needs, contributing to the "progress" of society.</p>
          </div>
          <div class="bland-item">
            <h3 class="bland-item__title"><em>A</em>ccuracy</h3>
            <p class="bland-item__text">Our focus lies in achieving high precision in handling, recognition, and alignment. We embrace the challenge of constant advancements in speed, precision, and functionality, continuously honing our "precision" technology to maintain our position as an industry frontrunner.</p>
          </div>
          <div class="bland-item">
            <h3 class="bland-item__title"><em>A</em>ssembly</h3>
            <p class="bland-item__text">Our commitment lies in achieving high repeatability and delivering high-quality craftsmanship in our manufacturing processes. By establishing an integrated system that encompasses in-house development, design, and manufacturing of both hardware and software, we swiftly respond to improvement feedback, yielding superior products.</p>
          </div>
          <div class="bland-item">
            <h3 class="bland-item__title"><em>le</em>ading <em>te</em>chnology</h3>
            <p class="bland-item__text">Driving the era with the combination of essential technologies.</p>
          </div>

          <figure class="bland-catchcopy">
            <img class="logo-create-future-arts" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/common/logo-create-future-arts.svg" alt="Create Future Arts" width="408.8" height="27.7">
          </figure>
          <div class="bland-item">
            <h3 class="bland-item__title"><em>F</em>uture <em>A</em>rts</h3>
            <p class="bland-item__text">Technology that serves as a bridge from the present to the future, enriching society and making our lives more comfortable and enjoyable.</p>
          </div>
        </div>

        <div id="philosophy" class="cont js-positionNav-target">
          <h2 class="title05">Management Principle</h2>
          <p class="philosophy-text">We at Athlete FA create <span>"Future Arts"</span></p>
        </div>

        <div id="policy" class="cont js-positionNav-target">
          <h2 class="title05">Management Policies</h2>
          <p class="policy-intro">To aspire to the creation of Future Arts, we have established the following principles:</p>
          <dl class="policy-list">
            <dt>Create Customer Values</dt>
            <dd>We aim to be a company with significant value by creating technologies that meet the needs of our customers.</dd>
            <dt>Focus on technologies</dt>
            <dd>
              <p>Establishing high-performance "core technology."<br>Developing efficient "engineering technology."<br>Deploying sophisticated "marketing."</p>
            </dd>
            <dt>Strive for improvement with a broad view</dt>
            <dd>Striving for self-improvement to enhance one's own value, cultivating a broad perspective, and driving business forward.</dd>
          </dl>
        </div>

        <div id="quality" class="cont js-positionNav-target">
          <h2 class="title05">Quality Policies</h2>
          <div class="quality-info">
            <p>We prioritize understanding customer needs and ensuring customer satisfaction as our top priority.<br>We swiftly implement the PDCA cycle.<br>We align the vectors of all employees and act together as one cohesive unit.</p>
          </div>
          <p>We will specifically implement the followings: </p>
          <ul class="ordered-list list-quality">
            <li>The quality policy will be developed, considering social significance and market needs, ensuring its appropriateness for our objectives.</li>
            <li>We will reliably meet customer requirements and legal/regulatory requirements, and furthermore, we will continuously improve the effectiveness of the quality management system. </li>
            <li>We will establish quality objectives, deploy them to various levels within the organization, monitor the achievement status, and, when necessary, conduct reviews for potential revisions. </li>
            <li>This policy will be comprehended and implemented by all levels involved in our operation. </li>
            <li>The quality policy will be periodically reviewed to ensure its ongoing appropriateness and subject to revision as needed.</li>
          </ul>
        </div>

        <div id="environmental" class="cont js-positionNav-target">
          <h2 class="title05">Environment Policies</h2>
          <p>Environmental Policies:<br>Athlete FA Corporation, in the development, design, manufacturing, and sales of automation and labor-saving equipment, is committed to pursuing harmony between corporate activities and the Earth's environment. We actively strive for the effective use of resources and the prevention of environmental pollution, fulfilling our role as responsible corporate citizens.</p>
          <ul class="ordered-list">
            <li>We will establish environmental goals within technically and economically feasible limits and continuously improve environmental impacts. Specifically, we are committed to resource conservation, energy savings, and comprehensive waste separation and discharge efforts across the entire organization. Additionally, we focus on the development and manufacturing of environmentally friendly products.</li>
            <li>We will fulfill compliance obligations related to the environment and endeavor to prevent pollution.</li>
            <li>We will conduct regular reviews by top management, perform annual environmental audits, and strive for the continuous improvement of the environmental management system and its performance.</li>
          </ul>
        </div>

        <section class="sec-bread-navi">
          <?php //Breadcrumb NavXT
          echo '<aside class="bread-navi">';
          if(function_exists('bcn_display')){ bcn_display(); }
          echo '</aside>'."\n";;
          ?>
        </section>

        <section class="sec-page-navi">
          <h2 class="page-navi-title --en" data-sub="">Company</h2>

          <nav class="page-navi">
            <a href="<?php echo esc_url(home_url()); ?>/en/company/message/" class="link-item01">
              <div class="link-content">
                <em class="main-text">Message</em>
              </div>
              <i class="icon"></i>
            </a>
            <a href="<?php echo esc_url(home_url()); ?>/en/company/about/" class="link-item01">
              <div class="link-content">
                <em class="main-text">Profile</em>
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
      </section><?php //.main-column ?>
    </div><?php //.has-column ?>
<?php get_footer("english"); ?>