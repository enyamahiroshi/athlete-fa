<?php get_header("english"); ?>

    <header class="page-header" data-sub="Company Profile">
      <h1 class="page-header__title" data-sub="<?php the_title(); ?>">Company Profile</h1>
    </header>

    <div class="has-column">
      <aside class="side-column">
        <ul class="category-list position-nav js-positionNav">
          <li class="cat-item is-active"><a href="#outline">Company profile</a></li>
          <li class="cat-item"><a href="#access">Access</a></li>
        </ul>
      </aside><?php //.side-column ?>

      <section class="main-column">

        <div id="outline" class="cont js-positionNav-target">
          <h2 class="title05">Company profile</h2>
          <table class="tbl1 tbl-company">
            <tr>
              <th>Company Name</th>
              <td>
                <p>Athlete FA Corporation</p>
              </td>
            </tr>
            <tr>
              <th>Address</th>
              <td>
                <p>2970-1 Shiga, Suwa City, Nagano 392-0012, Japan <span class="ff-en">[</span><a href="https://maps.app.goo.gl/dnEMheRagnespc1Z7" target="_blank" rel="noopener noreferrer" class="ff-en after-icon after-icon--map">Map</a><span>]</span></p>
              </td>
            </tr>
            <tr>
              <th>President</th>
              <td>
                <p>Susumu Yamazaki</p>
              </td>
            </tr>
            <tr>
              <th>Foundation</th>
              <td>
                <p>September 1, 1988</p>
              </td>
            </tr>
            <tr>
              <th>Establishment</th>
              <td>
                <p>March 1, 1989</p>
              </td>
            </tr>
            <tr>
              <th>Capital</th>
              <td>
                <p>JPY 85,800,000</p>
              </td>
            </tr>
            <tr>
              <th>Business</th>
              <td>
                <p>Development, design, manufacture, and sales of automation and labor-saving equipment</p>
              </td>
            </tr>
            <tr>
              <th>Main customers</th>
              <td>
                <p><span class="before-disc-item">Domestic</span>Olympus Corporation<br>KYOCERA Corporation<br>DENSO CORPORATION<br>Sony Semiconductor Solutions Corporation<br>TOPPAN Inc<br>NICHIA CORPORATION<br>HAMAMATSU PHOTONICS KOREA CO., LTD.<br>Mitsubishi Electric Corp.<br>ROHM Co., Ltd.</p>
                <p><span class="before-disc-item">Overseas</span>Amkor<br>ASE<br>AT&S<br>Infineon Technologies<br>Nanya Technology<br>STATS ChipPAC<br>TSMC<br>Texas Instruments<br>Unimicron</p>
              </td>
            </tr>
            <tr>
              <th>Affilicated Company</th>
              <td>
                <p>Athlete Automation Equipment (Shanghai) Co.,Ltd.</p>
              </td>
            </tr>
            <tr>
              <th>Main Banks</th>
              <td>
                <p>THE HACHIJUNI BANK,LTD.<br>Sumitomo Mitsui Banking Corporation<br>The Shoko Chukin Bank，Ltd.<br>THE NAGANO BANK,LTD.<br>Suwa Shinkin Bank</p>
              </td>
            </tr>
          </table>
        </div>

        <div id="access" class="cont js-positionNav-target">
          <h2 class="title05">Access</h2>
          <div class="access">
            <div class="access__data">
              <div class="access__data__title">Head office</div>
              <p>2970-1 Shiga, Suwa City, Nagano 392-0012, Japan</p>
              <p></span><a href="https://maps.app.goo.gl/dnEMheRagnespc1Z7" target="_blank" rel="noopener noreferrer" class="ff-en after-icon after-icon--map">Google Map</a></p>
            </div>
            <figure class="access__image">
              <img class="parallax js-parallax" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/about/img-company-honsha.jpg" alt="" width="687" height="457">
            </figure>
          </div>
          <div class="access">
            <div class="access__data">
              <div class="access__data__title">Second factory</div>
              <p>2930-1 Shiga, Suwa City, Nagano 392-0012, Japan</p>
              <p></span><a href="https://maps.app.goo.gl/BCdhpAB8PQP89Aim7" target="_blank" rel="noopener noreferrer" class="ff-en after-icon after-icon--map">Google Map</a></p>
            </div>
            <figure class="access__image">
              <img class="parallax js-parallax" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/about/img-company-daini.jpg" alt="" width="687" height="457">
            </figure>
          </div>
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
      </section><?php //.main-column ?>
    </div><?php //.has-column ?>
<?php get_footer("english"); ?>