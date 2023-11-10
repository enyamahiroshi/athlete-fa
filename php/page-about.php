<?php get_header(); ?>

    <header class="page-header" data-sub="Company Profile">
      <h1 class="page-header__title" data-sub="<?php the_title(); ?>">Company Profile</h1>
    </header>

    <div class="has-column js-fix-area">
      <aside class="side-column js-fix-wrapper">
        <ul class="category-list js-fix-item">
          <li class="cat-item is-active"><a href="#outline">会社概要</a></li>
          <li class="cat-item"><a href="#access">アクセス</a></li>
        </ul>
      </aside><?php //.side-column ?>

      <section class="main-column">

        <div id="outline" class="cont">
          <h2 class="title05">会社概要</h2>
          <table class="tbl1 tbl-company">
            <tr>
              <th>会社名</th>
              <td>
                <p>アスリートFA株式会社</p>
              </td>
            </tr>
            <tr>
              <th>所在地</th>
              <td>
                <p>〒392-0012<br>長野県諏訪市四賀2970-1 <span class="ff-en">[</span><a href="<?php echo esc_url(home_url()); ?>" class="ff-en after-icon after-icon--map">Map</a><span>]</span></p>
              </td>
            </tr>
            <tr>
              <th>代表者</th>
              <td>
                <p>代表取締役社長　山㟢晋</p>
              </td>
            </tr>
            <tr>
              <th>設立</th>
              <td>
                <p>1988年9月1日</p>
              </td>
            </tr>
            <tr>
              <th>創業</th>
              <td>
                <p>1989年3月1日</p>
              </td>
            </tr>
            <tr>
              <th>資本金</th>
              <td>
                <p>8,580万円</p>
              </td>
            </tr>
            <tr>
              <th>事業内容</th>
              <td>
                <p>自動化設備、省力化設備の開発、設計、製造、販売</p>
              </td>
            </tr>
            <tr>
              <th>主要取引先</th>
              <td>
                <p><span class="before-disc-item">国内</span>オリンパス株式会社<br>京セラ株式会社<br>株式会社デンソー<br>ソニーセミコンダクタソリューションズ株式会社<br>TOPPAN株式会社<br>日亜化学工業株式会社<br>浜松ホトニクス株式会社<br>パナソニック ホールディングス株式会社<br>三菱電機株式会社<br>ローム株式会社</p>
                <p><span class="before-disc-item">海外</span>Amkor<br>ASE<br>AT&S<br>Infineon Technologies<br>Nanya Technology<br>STATS ChipPAC<br>TSMC<br>Texas Instruments<br>Unimicron</p>
              </td>
            </tr>
            <tr>
              <th>関連会社</th>
              <td>
                <p>愛立発自動化設備（上海）有限公司</p>
              </td>
            </tr>
            <tr>
              <th>取引先銀行</th>
              <td>
                <p>八十二銀行諏訪<br>三井住友銀行諏訪<br>商工中金諏訪<br>長野銀行諏訪<br>諏訪信用金庫飯島</p>
              </td>
            </tr>
          </table>
        </div>

        <div id="access" class="cont">
          <h2 class="title05">アクセス</h2>
          <div class="access">
            <div class="access__data">
              <div class="access__data__title">本社</div>
              <p>〒392-0012<br>長野県諏訪市四賀2970-1</p>
              <p><span class="before-disc-item">諏訪ICより車で約5分</span><span class="before-disc-item">上諏訪駅より車で約15分</span><span class="before-disc-item">茅野駅より車で約10分</span></p>
              <p></span><a href="<?php echo esc_url(home_url()); ?>" class="ff-en after-icon after-icon--map">Google Map</a></p>
            </div>
            <figure class="access__image">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/about/img-company-honsha.jpg" alt="" width="687" height="457">
            </figure>
          </div>
          <div class="access">
            <div class="access__data">
              <div class="access__data__title">第二工場</div>
              <p>〒392-0012<br>長野県諏訪市四賀2930-1</p>
              <p></span><a href="<?php echo esc_url(home_url()); ?>" class="ff-en after-icon after-icon--map">Google Map</a></p>
            </div>
            <figure class="access__image">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/about/img-company-daini.jpg" alt="" width="687" height="457">
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
          <h2 class="page-navi-title --en" data-sub="企業情報">Company</h2>
          <nav class="page-navi">
            <a href="<?php echo esc_url(home_url()); ?>/company/message" class="link-item01">
              <div class="link-content">
                <em class="main-text">社長メッセージ</em><span class="sub-text">Message</span>
              </div>
              <i class="icon"></i>
            </a>
            <a href="<?php echo esc_url(home_url()); ?>/company/mission" class="link-item01">
              <div class="link-content --en">
                <em class="main-text">経営理念・方針</em><span class="sub-text">Philosophy</span>
              </div>
              <i class="icon"></i>
            </a>
            <a href="<?php echo esc_url(home_url()); ?>/company/history" class="link-item01">
              <div class="link-content --en">
                <em class="main-text">沿革</em><span class="sub-text">History</span>
              </div>
              <i class="icon"></i>
            </a>
          </nav>
        </section>
      </section><?php //.main-column ?>
    </div><?php //.has-column ?>
<?php get_footer(); ?>