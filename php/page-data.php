<?php get_header(); ?>

    <header class="page-header" data-sub="<?php echo $slug = get_post(get_the_ID())->post_name; ?>">
      <h1 class="page-header__title" data-sub="<?php the_title(); ?>"><?php echo $slug = get_post(get_the_ID())->post_name; ?></h1>
    </header>


<?php // ------------- 会社について ------------- ?>
    <section class="sec sec-medium sec-data">
      <h2 class="title08" data-sub="Company">会社について</h2>
      <div class="data-layout data-layout-company">

        <?php //アイテム ?>
        <section class="data-set set-setsuritsu">
          <h3 class="data-set__title">設立</h3>
          <div class="data-set__content data-set-company --flex-s_between">
            <?php //アイコン ?>
            <figure class="data-icon">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/data/icon-company.svg" alt="">
            </figure>
            <?php //カウント ?>
            <div class="data-item js-start-counter">
              <span class="counter data-value" data-unit="年" data-num="35">0</span>
            </div>
          </div>
        </section>

        <?php //アイテム ?>
        <section class="data-set set-uriagehiritsu">
          <h3 class="data-set__title">売上比率</h3>
          <div class="data-set__content data-set-uriagehiritsu">
            <?php //カウント ?>
            <div class="data-item js-start-counter">
              <span class="counter data-value" data-label="国内" data-unit="%" data-num="20">0</span>
            </div>
            <?php //円グラフ ?>
            <div class="data-item chart-area js-data-circle-uriagehiritsu">
              <canvas id="data-circle-uriagehiritsu"></canvas>
            </div>
            <?php //カウント ?>
            <div class="data-item js-start-counter">
              <span class="counter data-value" data-label="海外" data-unit="%" data-num="80">0</span>
            </div>
          </div>
        </section>

        <?php //アイテム ?>
        <section class="data-set set-bumonbetsu">
          <h3 class="data-set__title">部門別人員割合</h3>
          <div class="data-set__content data-set-bumonbetsu">
            <?php //タテ棒グラフ ?>
            <figure class="data-item graph-vertical js-start-bar_chart" data-type="height">
              <div class="chart js-start-counter">
                <span class="block color-gray0" data-num="15">
                  <span class="data-label">管理</span>
                  <span class="data-value" data-unit="%">6</span>
                </span>
                <span class="block color-gray2" data-num="27.5">
                  <span class="data-label">営業</span>
                  <span class="data-value" data-unit="%">11</span>
                </span>
                <span class="block color-gray3" data-num="32.5">
                  <span class="data-label">生産</span>
                  <span class="data-value" data-unit="%">13</span>
                </span>
                <span class="block color-gray4" data-num="75">
                  <span class="data-label">設計開発</span>
                  <span class="data-value" data-unit="%">30</span>
                </span>
                <span class="block color-red" data-num="100">
                  <span class="data-label">製造</span>
                  <span class="data-value" data-unit="%">40</span>
                </span>
              </div>
            </figure>
          </div>
        </section>

      </div><?php //.layout- ?>
    </section>


<?php // ------------- 働く場所 ------------- ?>
    <section class="sec sec-medium sec-data">
      <h2 class="title08" data-sub="Place">働く場所</h2>
      <div class="data-layout data-layout-place">

        <?php //アイテム ?>
        <section class="data-set set-kinmuchi">
          <h3 class="data-set__title">勤務地</h3>
          <div class="data-set__content data-set-kinmuchi">
            <figure class="img-naganoken-map">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/data/img-data-naganoken.svg" alt="" width="146.85" height="229.17">
            </figure>
            <?php //カウント ?>
            <div class="data-item js-start-counter">
              <span class="counter data-value" data-label="長野県" data-unit="%" data-num="100">0</span>
            </div>
          </div>
        </section>

        <?php //アイテム ?>
        <section class="data-set set-syuchohiritsu">
          <h3 class="data-set__title">出張比率</h3>
          <div class="data-set__content data-set-syuchohiritsu">
            <?php //ヨコ棒グラフ ?>
            <figure class="data-item graph-horizon js-start-bar_chart" data-type="width">
              <div class="chart">
                <span class="block color-red" data-num="79">
                  <span class="data-value" data-label="国内" data-unit="%">79</span>
                </span>
                <span class="block color-gray1" data-num="21">
                  <span class="data-value" data-label="海外" data-unit="%">21</span>
                </span>
              </div>
            </figure>
          </div>
        </section>

        <?php //アイテム ?>
        <section class="data-set set-taizai">
          <h3 class="data-set__title">出張1回あたりの滞在日数</h3>
          <div class="data-set__content data-set-taizai">
            <?php //カウント ?>
            <div class="data-item js-start-counter">
              <figure class="img-taizai">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/data/img-data-taizai-japan.svg" alt="" width="183.265" height="62">
              </figure>
              <span class="counter data-value" data-label="国内｜" data-unit="日">1</span>
              <span class="counter data-value" data-label="～ " data-unit="週間">1</span>
            </div>
            <?php //カウント ?>
            <div class="data-item js-start-counter">
              <figure class="img-taizai">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/data/img-data-taizai-abroad.svg" alt="" width="207.85" height="62">
              </figure>
              <span class="counter data-value" data-label="海外｜" data-unit="週間">1</span>
              <span class="counter data-value" data-label="～ " data-unit="週間">2</span>
            </div>
          </div>
        </section>

        <?php //アイテム ?>
        <section class="data-set set-business-trip">
          <h3 class="data-set__title">主な出張先</h3>
          <div class="data-set__content data-set-business-trip">
            <div class="business-trip">
              <h4 class="business-trip__title" data-sub="Japan">国内</h4>
              <ul class="business-trip__list">
                <li>東京</li>
                <li>新潟</li>
                <li>山梨</li>
                <li>静岡</li>
              </ul>
              <ul class="business-trip__list">
                <li>愛知</li>
                <li>京都</li>
                <li>兵庫</li>
                <li>徳島</li>
                <li>福岡</li>
                <li>熊本</li>
              </ul>
              <p class="business-trip__other">など</p>
            </div>
            <div class="business-trip">
              <h4 class="business-trip__title" data-sub="Abroad">海外</h4>
              <ul class="business-trip__list">
                <li>台湾</li>
                <li>韓国</li>
                <li>中国</li>
                <li>シンガポール</li>
              </ul>
              <ul class="business-trip__list">
                <li>フィリピン</li>
                <li>マレーシア</li>
                <li>アメリカ</li>
                <li>オーストリア</li>
              </ul>
              <p class="business-trip__other">など</p>
            </div>
          </div>
        </section>

      </div><?php //.layout- ?>
    </section>

<?php // ------------- 働く人たち ------------- ?>
    <section class="sec sec-medium sec-data">
      <h2 class="title08" data-sub="Employee">働く人たち</h2>
      <div class="data-layout data-layout-employee">

        <?php //アイテム ?>
        <section class="data-set set-new_career">
          <h3 class="data-set__title">新卒・キャリア割合</h3>
          <div class="data-set__content data-set-2bars">
            <?php //タテ棒グラフ ?>
            <figure class="data-item graph-vertical js-start-bar_chart" data-type="height">
              <div class="chart">
                <span class="block color-red bar-newgrads" data-num="100">
                  <span class="data-label">新卒</span>
                  <span class="data-value"  data-unit="%">75</span>
                </span>
                <span class="block color-gray1 bar-career" data-num="33.33">
                  <span class="data-label">キャリア</span>
                  <span class="data-value" data-unit="%">25</span>
                </span>
              </div>
            </figure>
          </div>
        </section>

        <?php //アイテム ?>
        <section class="data-set set-bunri">
          <h3 class="data-set__title">文理割合</h3>
          <div class="data-set__content data-set-2bars">
            <?php //タテ棒グラフ ?>
            <figure class="data-item graph-vertical js-start-bar_chart" data-type="height">
              <div class="chart">
                <span class="block color-gray4 bar-humanities" data-num="19">
                  <span class="data-label">文系</span>
                  <span class="data-value" data-unit="%">16</span>
                </span>
                <span class="block color-red bar-science" data-num="100">
                  <span class="data-label">理系</span>
                  <span class="data-value" data-unit="%">84</span>
                </span>
              </div>
            </figure>
          </div>
        </section>

        <?php //アイテム ?>
        <section class="data-set set-nenreihi">
          <h3 class="data-set__title">年齢構成比</h3>
          <div class="data-set__content data-set-nenreihi">
            <?php //ドーナツ円グラフ ?>
            <div class="data-item chart-area js-chart-doughnut-nenreikoseihi">
              <canvas id="chart-doughnut-nenreikoseihi"></canvas>
              <?php //カウント ?>
              <div class="data-item data-count-1 js-start-counter">
                <span class="counter data-value" data-label="20代" data-unit="%" data-num="24">0</span>
              </div>
              <?php //カウント ?>
              <div class="data-item data-count-2 js-start-counter">
                <span class="counter data-value" data-label="30代" data-unit="%" data-num="18">0</span>
              </div>
              <?php //カウント ?>
              <div class="data-item data-count-3 js-start-counter">
                <span class="counter data-value" data-label="40代" data-unit="%" data-num="22">0</span>
              </div>
              <?php //カウント ?>
              <div class="data-item data-count-4 js-start-counter">
                <span class="counter data-value" data-label="50代以上" data-unit="%" data-num="36">0</span>
              </div>
              <?php //カウント ?>
              <div class="data-item data-count-age js-start-counter">
                <span class="data-label"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/common/logo-red.svg" alt="" width="194" height="31.74"></span>
                <span class="counter data-value" data-label="平均年齢" data-unit="歳" data-num="42.9">0</span>
              </div>
            </div>
          </div>
        </section>

        <?php //アイテム ?>
        <section class="data-set set-syusinchi">
          <h3 class="data-set__title">社員出身地割合</h3>
          <div class="data-set__content data-set-syusinchi">
            <?php //日本地図 ?>
            <div class="map-area"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/data/img-data-syusinchi.png" alt="" width="902" height="723"></div>
            <?php //カウント ?>
            <div class="data-item data-tohoku js-start-counter">
              <span class="counter data-value" data-label="東北" data-unit="%" data-num="1">0</span>
            </div>
            <?php //カウント ?>
            <div class="data-item data-kanto js-start-counter">
              <span class="counter data-value" data-label="関東" data-unit="%" data-num="16">0</span>
            </div>
            <?php //カウント ?>
            <div class="data-item data-chubu js-start-counter">
              <span class="data-label">中部<small>（長野以外）</small></span>
              <span class="counter data-value" data-unit="%" data-num="4">0</span>
            </div>
            <?php //カウント ?>
            <div class="data-item data-nagano js-start-counter">
              <span class="counter data-value" data-label="長野" data-unit="%" data-num="74">0</span>
            </div>
            <?php //カウント ?>
            <div class="data-item data-kinki js-start-counter">
              <span class="counter data-value" data-label="近畿" data-unit="%" data-num="1">0</span>
            </div>
            <?php //カウント ?>
            <div class="data-item data-chugoku-shikoku js-start-counter">
              <span class="counter data-value" data-label="中国/四国" data-unit="%" data-num="2">0</span>
            </div>
            <?php //カウント ?>
            <div class="data-item data-kyushu js-start-counter">
              <span class="counter data-value" data-label="九州" data-unit="%" data-num="2">0</span>
            </div>
          </div>
        </section>

      </div><?php //.layout- ?>
    </section>



<?php // ------------- 働きやすさ ------------- ?>
    <section class="sec sec-medium sec-data">
      <h2 class="title08" data-sub="Environment">働きやすさ</h2>
      <div class="data-layout data-layout-environment">

        <?php //アイテム ?>
        <section class="data-set set-heikinkinzokunensu">
          <h3 class="data-set__title">平均勤続年数</h3>
          <div class="data-set__content data-set-heikinkinzokunensu --flex-s_between">
            <?php //アイコン ?>
            <figure class="data-icon">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/data/icon-001.svg" alt="">
            </figure>
            <?php //カウント ?>
            <div class="data-item js-start-counter">
              <span class="counter data-value" data-unit="年" data-num="15.7">0</span>
            </div>
          </div>
        </section>

        <?php //アイテム ?>
        <section class="data-set set-teichakuritsu">
          <h3 class="data-set__title">定着率</h3>
          <div class="data-set__content data-set-teichakuritsu --flex-end">
            <?php //カウント ?>
            <div class="data-item js-start-counter">
              <span class="counter data-value" data-label="新卒" data-unit="%" data-num="96">0</span>
            </div>
            <div class="data-item js-start-counter">
              <span class="counter data-value" data-label="キャリア" data-unit="%" data-num="91">0</span>
            </div>
          </div>
        </section>

        <?php //アイテム ?>
        <section class="data-set set-rishokuritsu">
          <h3 class="data-set__title">離職率</h3>
          <div class="data-set__content data-set-rishokuritsu --flex-s_between">
            <?php //アイコン ?>
            <figure class="data-icon">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/data/icon-002.svg" alt="">
            </figure>
            <?php //カウント ?>
            <div class="data-item js-start-counter">
              <span class="counter data-value" data-unit="%" data-num="0.9">0</span>
            </div>
          </div>
        </section>

        <?php //アイテム ?>
        <section class="data-set set-heikinzangyojikan">
          <h3 class="data-set__title">平均残業時間</h3>
          <div class="data-set__content data-set-heikinzangyojikan --flex-s_between">
            <?php //アイコン ?>
            <figure class="data-icon">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/data/icon-003.svg" alt="">
            </figure>
            <?php //カウント ?>
            <div class="data-item js-start-counter">
              <span class="counter data-value" data-unit="時間/月" data-num="10.5">0</span>
            </div>
          </div>
        </section>

      </div><?php //.layout- ?>
      <div class="data-layout data-layout-environment2">

        <?php //アイテム ?>
        <section class="data-set set-yukyuheikinsyutokunissu">
          <h3 class="data-set__title">有給休暇平均取得日数</h3>
          <div class="data-set__content data-set-yukyuheikinsyutokunissu --flex-s_between">
            <?php //アイコン ?>
            <figure class="data-icon">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/data/icon-004.svg" alt="">
            </figure>
            <?php //カウント ?>
            <div class="data-item js-start-counter">
              <span class="counter data-value" data-unit="日/年" data-num="15.2">0</span>
            </div>
          </div>
        </section>

        <?php //アイテム ?>
        <section class="data-set set-yukyusyutokuritsu">
          <h3 class="data-set__title">有給休暇取得率</h3>
          <div class="data-set__content data-set-yukyusyutokuritsu">
            <?php //円グラフ ?>
            <div class="data-item chart-area js-data-circle-yukyusyutokuritsu">
              <canvas id="data-circle-yukyusyutokuritsu"></canvas>
            </div>
            <?php //カウント ?>
            <div class="data-item js-start-counter">
              <span class="counter data-value" data-unit="%" data-num="80">0</span>
            </div>
          </div>
        </section>

        <?php //アイテム ?>
        <section class="data-set set-fukkiritsu">
          <h3 class="data-set__title">育児休業後の復職率</h3>
          <div class="data-set__content data-set-fukkiritsu --flex-s_between">
            <?php //アイコン ?>
            <figure class="data-icon">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/data/icon-005.svg" alt="">
            </figure>
            <?php //カウント ?>
            <div class="data-item js-start-counter">
              <span class="counter data-value" data-unit="%" data-num="100">0</span>
            </div>
          </div>
        </section>

      </div><?php //.layout- ?>
    </section>


    <div class="button-wrap --list">
      <a href="<?php echo esc_url(home_url()); ?>/recruit/new-graduates/" class="button-r-link-large button-circle-ani">
        <span>新卒採用ページへ戻る</span>
        <span class="svg-area">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" class="circle-ani">
            <circle cx="50%" cy="50%" r="28" class="circle-ani">
          </svg>
        </span>
      </a>
      <a href="<?php echo esc_url(home_url()); ?>/recruit/career/" class="button-r-link-large button-circle-ani">
        <span>キャリア採用ページへ戻る</span>
        <span class="svg-area">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" class="circle-ani">
            <circle cx="50%" cy="50%" r="28" class="circle-ani">
          </svg>
        </span>
      </a>
    </div>
<?php get_footer("recruit"); ?>