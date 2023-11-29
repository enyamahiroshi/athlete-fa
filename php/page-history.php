<?php get_header(); ?>

    <header class="page-header" data-sub="<?php echo $slug = get_post(get_the_ID())->post_name; ?>">
      <h1 class="page-header__title" data-sub="<?php the_title(); ?>"><?php echo $slug = get_post(get_the_ID())->post_name; ?></h1>
    </header>

    <div class="has-column">
      <aside class="side-column">
        <ul class="category-list js-positionNav">
          <li class="cat-item is-active"><a href="#history1980">1980～</a></li>
          <li class="cat-item"><a href="#history1990">1990～</a></li>
          <li class="cat-item"><a href="#history2000">2000～</a></li>
          <li class="cat-item"><a href="#history2010">2010～</a></li>
          <li class="cat-item"><a href="#history2020">2020～</a></li>
        </ul>
      </aside><?php //.side-column ?>

      <section class="main-column">

        <p class="history-intro">1988年の設立から、現在まで築いてきたアスリートFAの歩みをご紹介。</p>

        <dl class="history-list">
          <div id="history1980" class="js-positionNav-target">
            <dt>1988</dt>
            <dd>
              <p>設立　資本金2,000万円<br>カメラレンズ組立機</p>
            </dd>
            <dt>1989</dt>
            <dd>
              <p>新社屋・工場竣工<br>マルチダイボンダ（MS-3000）<br>TABカッティング装置（MS-1700）<br>セミコン・ジャパンに出展開始</p>
            </dd>
          </div>
          <div id="history1990" class="js-positionNav-target">
            <dt>1990</dt>
            <dd>
              <p>COBポッティング装置（MS-1820）<br>ICカードテストハンドラ</p>
            </dd>
            <dt>1991</dt>
            <dd>
              <p>商標を「Athlete」と命名<br>ツインヘッドTABポッティング装置（MS-1850T）<br>TABマーキング装置<br>共晶ダイボンダ<br>フリップチップボンダ（CB-1000）を業界初の外販</p>
            </dd>
            <dt>1992</dt>
            <dd>
              <p>通信用LEDチップボンダ<br>マンマシンビジュアルインターフェース「MAT」開発<br>セルPCB自動半田付ライン（MTB-4000）を業界初の外販</p>
            </dd>
            <dt>1993</dt>
            <dd>
              <p>ACF仮圧着装置（MTB-1000）</p>
            </dd>
            <dt>1994</dt>
            <dd>
              <p>デュアルヘッドTABポッティング装置（MS-1870D）<br>低コストフリップチップボンダ（CB-500）</p>
            </dd>
            <dt>1995</dt>
            <dd>
              <p>セル-PCB自動ACF接合システム<br>ACF対応フルオートフリップチップ実装ライン（CB-2000）<br>業界初の小径ボール対応BGAボール搭載システム（BA-1000）</p>
            </dd>
            <dt>1996</dt>
            <dd>
              <p>資本金8,180万円に増資<br>量産対応のフリップチップボンダ（CB-1700）</p>
            </dd>
            <dt>1997</dt>
            <dd>
              <p>マイクロボールマウンタ（BM-1000）</p>
            </dd>
            <dt>1998</dt>
            <dd>
              <p>フリップチップボンダ（CB-1750）<br>業界初のウェハ対応BGAボール搭載機（BA-1100W）</p>
            </dd>
            <dt>1999</dt>
            <dd>
              <p>3シリンジTABポッティング装置（MS-1880DⅢ.）<br>搭載ヘッドを大型化したBGAボール搭載機（BA-1110）<br>社屋を倍に増設しクリーンルーム、トラックヤードを新設</p>
            </dd>
          </div>
          <div id="history2000" class="js-positionNav-target">
            <dt>2000</dt>
            <dd>
              <p>アスリートFA（株）へ社名変更<br>私募債20,000万円発行</p>
            </dd>
            <dt>2001</dt>
            <dd>
              <p>資本金8,580万円に増資<br>従業員持株会設立<br>COF対応TABポッティング装置（MS-1890Ⅲ.）が、グッドデザイン賞受賞<br>ISO9001認証取得</p>
            </dd>
            <dt>2002</dt>
            <dd>
              <p>超音波接合装置開発<br>上海事務所設置<br>ISO14001認証取得</p>
            </dd>
            <dt>2003</dt>
            <dd>
              <p>マイクロボールマウンタ（BM-1100）<br>現地法人　愛立発自動化設備（上海）有限公司設立</p>
            </dd>
            <dt>2005</dt>
            <dd>
              <p>私募債30,000万円発行</p>
            </dd>
            <dt>2007</dt>
            <dd>
              <p>マイクロボールマウンタ（BM-1100）が新機械振興賞受賞</p>
            </dd>
            <dt>2008</dt>
            <dd>
              <p>ISO9001､14001認証取得</p>
            </dd>
            <dt>2009</dt>
            <dd>
              <p>経営理念・経営方針制定</p>
            </dd>
          </div>
          <div id="history2010" class="js-positionNav-target">
            <dt>2010</dt>
            <dd>
              <p>CSP対応マイクロボールマウンタ（BM-4100）<br>セミコンジャパンにて超音波リフロー炉を発表</p>
            </dd>
            <dt>2011</dt>
            <dd>
              <p>高速P&P AP-1000、検査機能付きP&P AP-2000<br>BM-1100の改良型マイクロボールマウンタ（BM-1300）</p>
            </dd>
            <dt>2013</dt>
            <dd>
              <p>個片、集合基板に対応したBGA/CSPボールマウンタ（BA-1700）<br>超低荷重対応フリップチップボンダ（CB-600）</p>
            </dd>
            <dt>2014</dt>
            <dd>
              <p>レーザーマーキング装置</p>
            </dd>
            <dt>2015</dt>
            <dd>
              <p>Agシンター（sinter）装置</p>
            </dd>
            <dt>2016</dt>
            <dd>
              <p>CB-600の改良型フリップチップボンダ（CB-610､ CB-620）</p>
            </dd>
            <dt>2018</dt>
            <dd>
              <p>BM-1300の改良型マイクロボールマウンタ（BM-1400）<br>卓上型フリップチップボンダ（CB-200）</p>
            </dd>
            <dt>2019</dt>
            <dd>
              <p>社屋増築<br>CoSボンダ（CBZ-1000）</p>
            </dd>
          </div>
          <div id="history2020" class="js-positionNav-target">
            <dt>2022</dt>
            <dd>
              <p>アスリートFA株式会社第二工場竣工</p>
            </dd>
            <dt>2023</dt>
            <dd>
              <p>個片基板対応マイクロボールマウンタ（BM-3500SI）<br>高精度ダイボンダ(AB-1000)</p>
            </dd>
          </div>
        </dl>

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
            <a href="<?php echo esc_url(home_url()); ?>/company/message/" class="link-item01">
              <div class="link-content">
                <em class="main-text">社長メッセージ</em><span class="sub-text">Message</span>
              </div>
              <i class="icon"></i>
            </a>
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
          </nav>
        </section>
      </section><?php //.main-column ?>
    </div><?php //.has-column ?>
<?php get_footer(); ?>