<?php get_header(); ?>

    <header class="page-header" data-sub="Philosophy">
      <h1 class="page-header__title" data-sub="<?php the_title(); ?>">Philosophy</h1>
    </header>

    <div class="has-column">
      <aside class="side-column">
        <ul class="category-list position-nav js-positionNav">
          <li class="cat-item is-active"><a href="#bland">ブランド</a></li>
          <li class="cat-item"><a href="#philosophy">経営理念</a></li>
          <li class="cat-item"><a href="#policy">経営方針</a></li>
          <li class="cat-item"><a href="#quality">品質方針</a></li>
          <li class="cat-item"><a href="#environmental">環境方針</a></li>
        </ul>
      </aside><?php //.side-column ?>

      <section class="main-column">

        <div id="bland" class="cont js-positionNav-target">
          <h2 class="title05">ブランド</h2>
          <figure class="bland-logo">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/common/logo-red.svg" alt="" width="194" height="31.74">
          </figure>
          <div class="bland-item">
            <h3 class="bland-item__title"><em>A</em>dvance<span>（進歩）</span></h3>
            <p class="bland-item__text">時代に先駆けてゼロからイチを産み出すものづくり精神。<br>これまで培ってきた要素技術の組み合わせにより、<br>新たな顧客ニーズに合致するソリューション提案を可能にし、社会の進歩に貢献していきます。</p>
          </div>
          <div class="bland-item">
            <h3 class="bland-item__title"><em>A</em>ccuracy<span>（精密）</span></h3>
            <p class="bland-item__text">高精度なハンドリング、認識、位置合わせ、高速化、高精度化、高機能化の絶え間ない技術進歩に挑戦し、常に業界のトップランナーであるために精密技術を磨き続けます。</p>
          </div>
          <div class="bland-item">
            <h3 class="bland-item__title"><em>A</em>ssembly<span>（組立）</span></h3>
            <p class="bland-item__text">高い繰り返し精度、高品質なものづくり。<br>機械体とソフトウェアの自社開発、自社設計、さらには自社製造までの一貫体制を敷くことにより、改善、フィードバックに迅速に対応し、より良い製品を生み出していきます。</p>
          </div>
          <div class="bland-item">
            <h3 class="bland-item__title"><em>le</em>ading <em>te</em>chnology<span>（先進技術）</span></h3>
            <p class="bland-item__text">要素技術の組み合わせから生まれる時代を牽引するテクノロジー</p>
          </div>

          <figure class="bland-catchcopy">
            <img class="logo-create-future-arts" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/common/logo-create-future-arts.svg" alt="Create Future Arts" width="408.8" height="27.7">
          </figure>
          <div class="bland-item">
            <h3 class="bland-item__title"><em>F</em>uture <em>A</em>rts<span>（未来につながる技術）</span></h3>
            <p class="bland-item__text">社会や私たちの生活を豊かで、より過ごしやすいものとするための、現在から未来への架け橋となるテクノロジー</p>
          </div>
        </div>

        <div id="philosophy" class="cont js-positionNav-target">
          <h2 class="title05">経営理念</h2>
          <p class="philosophy-text">私たち、Athlete FAは<span>Future Arts</span>を創造します</p>
        </div>

        <div id="policy" class="cont js-positionNav-target">
          <h2 class="title05">経営方針</h2>
          <p class="policy-intro">Future Artsの創造を志向するために</p>
          <dl class="policy-list">
            <dt>顧客価値を創造する</dt>
            <dd>顧客が求める技術を創出し、存在価値のある企業を目指す</dd>
            <dt>技術を核とする</dt>
            <dd>
              <p>高性能の「要素技術」を確立する<br>高効率の「エンジニアリング技術」を開発する<br>高感度の「マーケティング」を展開する</p>
            </dd>
            <dt>広い視野で研鑽に励む</dt>
            <dd>自らの価値を高めるために自己研鑽に励み、広い視野を養い業務を推進する</dd>
          </dl>
        </div>

        <div id="quality" class="cont js-positionNav-target">
          <h2 class="title05">品質方針</h2>
          <div class="quality-info">
            <ul class="list-disc">
              <li>お客様のニーズを把握し、お客様の満足を最優先とします。</li>
              <li>スピーディーにPDCAを回します。</li>
              <li>全社員のベクトルを合わせ、一体となって行動します。</li>
            </ul>
          </div>
          <p>具体的に次の事項を含めて実行します。</p>
          <ul class="ordered-list list-quality">
            <li>品質方針は社会的意義、市場ニーズを考慮し、目的に対して適切なものとします。</li>
            <li>お客様の要求事項、法令・規制要求事項を確実に満たし、さらに品質マネジメントシステムの有効性の継続的な改善を行います。</li>
            <li>品質目標を設定し、社内の各階層への展開と達成状況の確認をするとともに、必要に応じて見直しを行います。</li>
            <li>この方針は弊社の運営に関わる全ての階層に理解させ、実行します。</li>
            <li>品質方針は継続して適切であるようにレビューし、見直しを行う事とします。</li>
          </ul>
        </div>

        <div id="environmental" class="cont js-positionNav-target">
          <h2 class="title05">環境方針</h2>
          <p>アスリートFA株式会社は、自動化設備及び省力化設備の開発、設計、製造、販売を行うにあたり、企業活動と地球環境との調和を目指し、資源の有効活用と環境汚染の予防に積極的に取り組み、良き企業市民としての社会的責任を果たしていきます。</p>
          <ul class="ordered-list">
            <li>技術的、経済的に可能な範囲で環境目標を定め、環境影響を継続的に改善していきます。<br>特に資源の節約、電力の節約、廃棄物の分別排出に全社を挙げて取り組むとともに、環境に調和した製品の開発製造に取り組みます。</li>
            <li>環境に関連する順守義務を果たし、汚染予防に努めます。</li>
            <li>トップマネジメントによるレビューを行い、環境監査を毎年実施し、環境管理システム及びそのパフォーマンスのスパイラルアップを図ります。</li>
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
            <a href="<?php echo esc_url(home_url()); ?>/company/history/" class="link-item01">
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