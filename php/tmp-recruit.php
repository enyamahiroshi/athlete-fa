<?php
/**
Template Name: リクルート
***/

if( is_page('new-graduates') ){
  $catSlug = 'new-graduates';
} elseif( is_page('career') ){
  $catSlug = 'career';
}

get_header(); ?>

    <section class="mv-recruit <?php if( is_page('new-graduates') ){ echo 'mv-recruit--new-graduates'; } elseif( is_page('career') ){ echo 'mv-recruit--career'; } ?>">
      <?php //キャッチ ?>
      <div class="mv-recruit__recruit-name"><?php if( is_page('new-graduates') ){ echo '新卒採用'; } elseif( is_page('career') ){ echo 'キャリア採用'; } ?></div>
      <?php //ループスライダー ?>
      <?php if( is_page('new-graduates') ): ?>
      <div class="loop-slider-wrap">
        <div class="loop-slider js-loop-slider">
          <div class="slider-item">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/recruit/new-graduates/loop-text-new-graduates.svg" alt="" width="1318" height="70">
          </div>
        </div>
      </div>
      <?php endif; ?>
      <h1 class="mv-recruit__catch-copy"><?php if( is_page('new-graduates') ){ echo 'さらにワクワクさせる未来へ'; } elseif( is_page('career') ){ echo '経験を活かし、新たなステージへ'; } ?></h1>
      <?php //ボタン ?>
      <?php if( is_page('new-graduates') ): ?>
      <div class="button-wrap">
        <a href="<?php echo esc_url(home_url()); ?>/recruit/job-description/" class="button-r-link-large button-circle-ani --white">
          新卒採用募集要項
          <span class="svg-area">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" class="circle-ani">
              <circle cx="50%" cy="50%" r="28" class="circle-ani">
            </svg>
          </span>
        </a>
        <a href="https://job.mynavi.jp/24/pc/search/corp91106/outline.html" target="_blank" rel="noopener noreferrer" class="button-r-link-large button-circle-ani --white --blank">
          <div class="cta-entry__button__text">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/recruit/icon-mynavi-white.svg" alt="" width="187" height="34.71">
          </div>
          <span class="svg-area">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" class="circle-ani">
              <circle cx="50%" cy="50%" r="28" class="circle-ani">
            </svg>
          </span>
        </a>
      </div>
      <?php elseif( is_page('career') ): ?>
      <div class="button-wrap">
        <a href="#flow" class="button-r-link-large button-circle-ani --white --vertical">
          キャリア採用フロー
          <span class="svg-area">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" class="circle-ani">
              <circle cx="50%" cy="50%" r="28" class="circle-ani">
            </svg>
          </span>
        </a>
        <a href="#matter" class="button-r-link-large button-circle-ani --white --vertical">
          キャリア採用募集要項
          <span class="svg-area">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" class="circle-ani">
              <circle cx="50%" cy="50%" r="28" class="circle-ani">
            </svg>
          </span>
        </a>
      </div>
      <?php endif; ?>
      <?php //CTAボタン ?>
      <?php if( is_page('new-graduates') ): ?>
      <a href="<?php echo esc_url(home_url()); ?>/recruit/internship/" class="cta-recruit cta-recruit--button --new-graduates">
        <div class="cta-recruit__title">INTERNSHIP</div>
        <div class="cta-recruit__subtext">アスリートFAを体験する！</div>
        <div class="cta-recruit__text">インターンシップ情報</div>
        <div class="cta-recruit__navi">
          <div class="button-r-link-small"></div>
        </div>
      </a>
      <?php elseif( is_page('career') ): ?>
      <a href="<?php echo esc_url(home_url()); ?>/recruit/entry/" class="cta-recruit cta-recruit--button">
        <div class="cta-recruit__title">ENTRY</div>
        <div class="cta-recruit__text">エントリーフォーム</div>
        <div class="cta-recruit__navi">
          <div class="button-r-link-small"></div>
        </div>
      </a>
      <?php endif; ?>
    </section>

    <?php //Block: content - news ?>
    <section class="sec sec-wide sec-news">
      <div class="layout-block">
        <div class="layout-block__left">
          <h2 class="title02 --data-sub-ja" data-sub="<?php if( is_page('new-graduates') ){ echo '新卒採用に関する&#10;'; } elseif( is_page('career') ){ echo 'キャリア採用に関する&#10;'; } ?>お知らせ">News</h2>
          <div class="button-wrap --right">
            <a href="<?php echo esc_url(home_url()); ?>/news/<?php echo $catSlug; ?>" class="button-r-link-large button-circle-ani">
              <span>一覧を見る</span>
              <span class="svg-area">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" class="circle-ani">
                <circle cx="50%" cy="50%" r="28" class="circle-ani">
              </svg>
            </span>
            </a>
          </div>
        </div>

        <ul class="post-list">
          <?php //記事リスト（先頭固定記事のみ）
          $argsStickyPost = array(
            'post_type' => 'post',
            'post__in' => get_option('sticky_posts'), // 先頭固定のみ
            'posts_per_page' => '1',
            'category_name' => $catSlug,
          );
          ?>
          <?php
          $the_query_sticky_post = new WP_Query( $argsStickyPost );
          if( $the_query_sticky_post->have_posts() ):
          $sticky = get_option('sticky_posts');
          if ( !empty($sticky) ):
          while( $the_query_sticky_post->have_posts() ):
          $the_query_sticky_post->the_post();
          $category = get_the_category();
          $cat_name = $category[0]->cat_name;
          $cat_slug = $category[0]->category_nicename;
          ?>
          <li class="post-list__item">
            <a href="<?php the_permalink(); ?>" class="post-link">
              <div class="post-meta">
                <div class="post-date"><?php the_time('Y.m.d'); ?></div>
                <div class="post-category post-category--<?php echo $cat_slug; ?>"><?php echo $cat_name; ?></div>
              </div>
              <h2 class="post-title"><?php the_title(); ?></h2>
            </a>
          </li>
          <?php endwhile; ?>
          <?php endif; endif; wp_reset_postdata(); ?>

          <?php //記事リスト（先頭固定記事は除外）
          if ( !empty($sticky) ){ //Totalで3件表示にするため：固定記事がある場合と無い場合で表示記事数を変更する
            $posts_per_page = 2;
          } else {
            $posts_per_page = 3;
          }
          $args = array(
            'post_type' => 'post',
            'ignore_sticky_posts' => 1, //「この投稿を先頭に固定表示」の無効化
            'post__not_in' => get_option('sticky_posts'), // 先頭固定は除外
            'posts_per_page' => $posts_per_page,
            'category_name' => $catSlug,
          );
          ?>
          <?php
          $the_query = new WP_Query( $args );
          if( $the_query->have_posts() ):
          while( $the_query->have_posts() ):
          $the_query->the_post();
          $category = get_the_category();
          $cat_name = $category[0]->cat_name;
          $cat_slug = $category[0]->category_nicename;
          ?>
          <li class="post-list__item">
            <a href="<?php the_permalink(); ?>" class="post-link">
              <div class="post-meta">
                <div class="post-date"><?php the_time('Y.m.d'); ?></div>
                <div class="post-category post-category--<?php echo $cat_slug; ?>"><?php echo $cat_name; ?></div>
              </div>
              <h2 class="post-title"><?php the_title(); ?></h2>
            </a>
          </li>
          <?php endwhile; ?>
          <?php else: ?>
          <li><div class="not-post">まだ記事はありません。</div></li>
          <?php endif; wp_reset_postdata(); ?>
        </ul>

      </div>
    </section>

    <section class="sec sec-full sec-future-arts">
      <div class="future-arts-concept">
        <strong>Future Arts</strong>
        <p>限界を超える技術で工場の未来を創る。</p>
      </div>
      <div class="future-arts">
        <div class="future-arts__data">
          <h2 class="title06" data-sub="About us">アスリートFAってどんな会社？</h2>
          <p class="future-arts__data__text">社名の通り、スポーツ用品メーカー､､､ではありません。<br>アスリートFA株式会社は、長野県諏訪市で工場自動化設備（FA装置）の開発、設計、製造、販売を行っている会社です。社名には弊社が属する産業技術のフィールドにおいて、アスリートのように力強く限界に挑戦し続け、Future Arts（未来につながる技術）の創造を成し遂げ続けたい、という思いが込められています。そして、その中で培われた技術力で、お客様の未到達領域への挑戦をサポートすることこそが我々の使命だと考えています。</p>
        </div>
        <figure class="future-arts__image">
          <img class="parallax js-parallax" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/recruit/<?php echo $catSlug; ?>/img-future-arts-image01.jpg" alt="" width="750" height="531">
        </figure>
      </div>
      <div class="future-arts">
        <div class="future-arts__data">
          <h2 class="title06" data-sub="Future Arts">Future Artsの創造を志向するために</h2>
          <p class="future-arts__data__text">「1.顧客価値を創造する」「2.技術を核とする」「3.広い視野で研鑽に励む」の3つの指針を経営方針として掲げています。</p>
          <ul class="list-disc">
            <li>常にアンテナを張り、顧客が求める技術を創出すること</li>
            <li>強い好奇心を持ち、新たな技術の開発や、今ある技術の高度化へ挑戦すること</li>
            <li>物事の本質を見抜くために広い視野を養い、自らの価値を高めるために自己研鑽に励むこと</li>
          </ul>
          <p class="future-arts__data__text">が、私たち社員ひとりひとりに求められています。</p>
        </div>
        <figure class="future-arts__image">
          <img class="parallax js-parallax" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/recruit/<?php echo $catSlug; ?>/img-future-arts-image02.jpg" alt="" width="750" height="531">
        </figure>
      </div>
      <div class="future-arts">
        <div class="future-arts__data">
          <h2 class="title06" data-sub="Join our TEAM"><?php if( is_page('new-graduates') ){ echo '私たちと一緒に働きましょう！'; } elseif( is_page('career') ){ echo 'あなたの力を貸してください！'; } ?></h2>
          <p class="future-arts__data__text"><?php if( is_page('new-graduates') ){ echo '装置の開発から設計、製造に至るまで、ありとあらゆる場面で新しい技術に触れることになります。新たなことへのチャレンジは決して楽な道のりではありませんし、苦悩することもあります。でも大丈夫。行き詰ったときには声をかけてください。必ず先輩社員や周りの仲間たちが力になってくれます。<br>私たちと一緒にFuture Artsの創造をしてみませんか？'; } elseif( is_page('career') ){ echo '技術の進歩、社会的背景に伴い、企業のあり方や人々の働き方は日々変化を続けています。これからの時代を生き抜く持続可能な企業であり続けるために、弊社も一歩ずつ着実に成長を重ねていかなければなりません。社会に対してより存在意義のある会社になるために、従業員にとってより働きやすい会社となるために、多様な人材の価値観を取り入れ、新しい風を吹かせていきたいと考えています。アスリートFAの未来への一歩に、ぜひあなたの力を貸してください。'; } ?></p>
        </div>
        <figure class="future-arts__image">
          <img class="parallax js-parallax" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/recruit/<?php echo $catSlug; ?>/img-future-arts-image03.jpg" alt="" width="750" height="531">
        </figure>
      </div>
    </section>

    <section class="sec sec-full sec-page-link">
      <a href="<?php echo esc_url(home_url()); ?>/recruit/department/" class="large-page-link">
        <figure class="large-page-link__image">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/recruit/img-page-link-department.jpg" alt="" width="960" height="678">
        </figure>
        <span class="button-r-link-large button-circle-ani --white">
          <span class="title" data-sub="Department">部署紹介</span>
          <span class="svg-area">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" class="circle-ani">
              <circle cx="50%" cy="50%" r="28" class="circle-ani">
            </circle></svg>
          </span>
        </span>
      </a>
      <a href="<?php echo esc_url(home_url()); ?>/recruit/data/" class="large-page-link">
        <figure class="large-page-link__image">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/recruit/img-page-link-data.jpg" alt="" width="960" height="678">
        </figure>
        <span class="button-r-link-large button-circle-ani --white">
          <span class="title" data-sub="Data">数字でわかるアスリートFA</span>
          <span class="svg-area">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" class="circle-ani">
              <circle cx="50%" cy="50%" r="28" class="circle-ani">
            </circle></svg>
          </span>
        </span>
      </a>
    </section>

    <section class="sec sec-full sec-interview">
      <div class="sec-medium interview-title">
        <h2 class="title02 --data-sub-ja" data-sub="社員インタビュー">Interview</h2>
        <p>アスリートFAで働く社員たちをご紹介いたします。</p>
      </div>
      <div class="staff-interview">
        <a href="<?php echo esc_url(home_url()); ?>/recruit/interview01/" class="staff-data">
          <figure class="staff-data__image">
            <div class="staff-data__photo">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/recruit/staff/img-staff-card-image01.jpg" alt="" width="418" height="590">
            </div>
            <div class="staff-data__name">I.N.</div>
            <div class="staff-data__sub"><span>Since 2020</span><span>Design</span></div>
          </figure>
          <p class="staff-data__text">精密動作を可能とする機構設計、おもしろさと社会への貢献を実感</p>
          <div class="staff-data__meta">
            <div class="staff-position">設計部 設計グループ</div>
            <div class="staff-join">2020年新卒入社</div>
          </div>
        </a>
        <a href="<?php echo esc_url(home_url()); ?>/recruit/interview02/" class="staff-data">
          <figure class="staff-data__image">
            <div class="staff-data__photo">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/recruit/staff/img-staff-card-image02.jpg" alt="" width="418" height="590">
            </div>
            <div class="staff-data__name">Y.W.</div>
            <div class="staff-data__sub"><span>Since 2021</span><span></span>System Control</div>
          </figure>
          <p class="staff-data__text">風通しのよい環境が魅力、仲間とともに頼れる技術者を目指す</p>
          <div class="staff-data__meta">
            <div class="staff-position">製造部 制御グループ</div>
            <div class="staff-join">2021年新卒入社</div>
          </div>
        </a>
        <a href="<?php echo esc_url(home_url()); ?>/recruit/interview03/" class="staff-data">
          <figure class="staff-data__image">
            <div class="staff-data__photo">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/recruit/staff/img-staff-card-image03.jpg" alt="" width="418" height="590">
            </div>
            <div class="staff-data__name">Y.K.</div>
            <div class="staff-data__sub"><span>Since 2021</span><span>Manufacturing</span></div>
          </figure>
          <p class="staff-data__text">装置に命を吹き込むものづくり精神、困難を乗り越えた先に喜びを実感</p>
          <div class="staff-data__meta">
            <div class="staff-position">製造部 製造グループ</div>
            <div class="staff-join">2021年新卒入社</div>
          </div>
        </a>
      </div>
    </section>

    <?php if( is_page('new-graduates') ): ?>
    <section class="sec sec-full sec-info-internship">
      <div class="info-internship">
        <h2 class="title02 --data-sub-ja" data-sub="インターンシップ情報">Internship</h2>
        <p>アスリートFAでは学生の皆さんを対象に、「社会人として働くこと」「自らの持つ能力、可能性」について、実体験を通して理解を深めていただくことを目的として、インターンシップを開催しています。弊社製品の製造工程に沿って様々なコースを用意しておりますので、ぜひご応募ください。</p>
        <a href="<?php echo esc_url(home_url()); ?>/recruit/internship/" class="button-r-link-large button-circle-ani">
          <span>詳しく見る</span>
          <span class="svg-area">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" class="circle-ani">
              <circle cx="50%" cy="50%" r="28" class="circle-ani">
            </svg>
          </span>
        </a>
      </div>
      <figure class="info-internship-image">
        <img class="parallax js-parallax" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/recruit/new-graduates/img-internship.jpg" alt="" width="906" height="641">
      </figure>
    </section>
    <?php endif; ?>

    <section id="flow" class="sec sec-medium sec-selection-flow">
      <h2 class="title02 --data-sub-ja" data-sub="<?php if( is_page('new-graduates') ){ echo '新卒採用選考フロー'; } elseif( is_page('career') ){ echo 'キャリア採用選考フロー'; } ?>">Flow</h2>
      <div class="selection-flow">
        <div class="selection-flow__num"><span>STEP</span>1</div>
        <div class="selection-flow__data">
          <h3 class="selection-flow__data__title"><?php if( is_page('new-graduates') ){ echo 'エントリー'; } elseif( is_page('career') ){ echo '応募'; } ?></h3>
          <?php if( is_page('new-graduates') ): ?>
          <p class="selection-flow__data__text">下記リンクよりエントリーください。<br>マイナビでは今後の会社説明会の開催日程等の情報を共有させていただきます。</p>
          <a href="https://job.mynavi.jp/24/pc/search/corp91106/outline.html" target="_blank" rel="noopener noreferrer" class="button button--white button--blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/recruit/icon-mynavi2024.svg" alt=""></a>
          <?php elseif( is_page('career') ): ?>
          <p class="selection-flow__data__text">下記エントリーフォームよりご応募ください。</p>
          <a href="<?php echo esc_url(home_url()); ?>/recruit/entry/" class="button button--white">エントリーフォーム</a>
          <?php endif; ?>
        </div>
      </div>
      <div class="selection-flow">
        <div class="selection-flow__num"><span>STEP</span>2</div>
        <div class="selection-flow__data">
          <h3 class="selection-flow__data__title"><?php if( is_page('new-graduates') ){ echo '会社説明会参加'; } elseif( is_page('career') ){ echo '書類選考'; } ?></h3>
          <?php if( is_page('new-graduates') ): ?>
          <p class="selection-flow__data__text">webにて会社説明会を開催しますのでご参加ください。<br>お申し込みはマイナビよりお願いいたします。</p>
          <?php elseif( is_page('career') ): ?>
          <p class="selection-flow__data__text">ご提出いただいた情報をもとに、書類選考を実施させていただきます。<br>選考通過者に一次面談（会社説明）のご案内をさせていただきます。</p>
          <?php endif; ?>
        </div>
      </div>
      <div class="selection-flow">
        <div class="selection-flow__num"><span>STEP</span>3</div>
        <div class="selection-flow__data">
          <h3 class="selection-flow__data__title"><?php if( is_page('new-graduates') ){ echo '応募'; } elseif( is_page('career') ){ echo '一次面談（会社説明）'; } ?></h3>
            <?php if( is_page('new-graduates') ): ?>
            <p class="selection-flow__data__text">履歴書の提出をお願いいたします。<br>提出方法につきましては会社説明会参加後にご案内させていただきます。</p>
            <?php elseif( is_page('career') ): ?>
            <p class="selection-flow__data__text">弊社の会社説明を行い、その後、一次面談を実施させていただきます。<br>選考通過者に適性検査のご案内をさせていただきます。</p>
            <?php endif; ?>
          </div>
        </div>
      </div>
      <div class="selection-flow">
        <div class="selection-flow__num"><span>STEP</span>4</div>
        <div class="selection-flow__data">
          <h3 class="selection-flow__data__title"><?php if( is_page('new-graduates') ){ echo '書類選考'; } elseif( is_page('career') ){ echo '適性検査受験'; } ?></h3>
              <?php if( is_page('new-graduates') ): ?>
              <p class="selection-flow__data__text">ご提出いただいた情報をもとに、書類選考を実施させていただきます。<br>選考通過者に適性検査のご案内をさせていただきます。</p>
              <?php elseif( is_page('career') ): ?>
              <p class="selection-flow__data__text">受験いただいた適性検査の結果をもとに選考させていただきます。<br>選考通過者に役員面接のご案内をさせていただきます。</p>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
      <div class="selection-flow">
        <div class="selection-flow__num"><span>STEP</span>5</div>
        <div class="selection-flow__data">
          <h3 class="selection-flow__data__title"><?php if( is_page('new-graduates') ){ echo '適性検査受験'; } elseif( is_page('career') ){ echo '作文、役員面接'; } ?></h3>
              <?php if( is_page('new-graduates') ): ?>
              <p class="selection-flow__data__text">受験いただいた適性検査の結果をもとに選考させていただきます。<br>選考通過者に役員面接のご案内をさせていただきます。</p>
              <?php elseif( is_page('career') ): ?>
              <p class="selection-flow__data__text">弊社指定のテーマについて作文を作成していただき、その後、役員面接に臨んでいただきます。<br>後日、選考結果のご連絡をさせていただきます。</p>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
      <div class="selection-flow">
        <div class="selection-flow__num"><span>STEP</span>6</div>
        <div class="selection-flow__data">
          <h3 class="selection-flow__data__title"><?php if( is_page('new-graduates') ){ echo '作文、役員面接'; } elseif( is_page('career') ){ echo '内定'; } ?></h3>
              <?php if( is_page('new-graduates') ): ?>
              <p class="selection-flow__data__text">弊社指定のテーマについて作文を作成していただき、その後、役員面接に臨んでいただきます。<br>後日、選考結果のご連絡をさせていただきます。</p>
              <?php elseif( is_page('career') ): ?>
              <p class="selection-flow__data__text">選考開始から内定までは、1～2カ月を想定しています。</p>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
      <?php if( is_page('new-graduates') ): ?>
      <div class="selection-flow">
        <div class="selection-flow__num"><span>STEP</span>7</div>
        <div class="selection-flow__data">
          <h3 class="selection-flow__data__title">内定（内々定）</h3>
          <p class="selection-flow__data__text">選考開始から内定（内々定）までは、1～2カ月を想定しています。</p>
        </div>
      </div>
      <div class="link-wrap">
        <a href="<?php echo esc_url(home_url()); ?>/recruit/job-description/" class="link-item01 page-link__item">
          <div class="link-content icon-document">
            <em class="main-text">新卒採用 <span class="red">[ 募集要項 ] </span>はこちら</em><span class="sub-text">Job description</span>
          </div>
          <i class="icon"></i>
        </a>
      </div>
      <?php endif; ?>
    </section>

    <?php if( is_page('career') ): ?>
    <section id="matter" class="sec sec-medium sec-job-description">
      <h2 class="title02 --data-sub-ja" data-sub="キャリア採用募集要項">Job description</h2>
      <?php include_once('./wp-content/themes/athletefa/block/block-job-description-career.php'); ?>
    </section>
    <figure class="sec sec-full sec-job-description-images">
      <img class="parallax js-parallax" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/recruit/career/img-job-description01.jpg" alt="" width="640" height="427">
      <img class="parallax js-parallax" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/recruit/career/img-job-description02.jpg" alt="" width="640" height="427">
      <img class="parallax js-parallax" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/recruit/career/img-job-description03.jpg" alt="" width="640" height="427">
    </figure>
    <?php endif; ?>

    <section class="sec sec-full sec-join-our-team-recruit">
      <?php //loop slider ?>
      <div class="scroll-infinity">
        <div class="scroll-infinity__wrap">
          <ul class="scroll-infinity__list scroll-infinity__list--left">
            <li class="scroll-infinity__item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/home/loop-slider/img001.jpg" alt="" width="400" height="400"></li>
            <li class="scroll-infinity__item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/home/loop-slider/img002.jpg" alt="" width="400" height="400"></li>
            <li class="scroll-infinity__item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/home/loop-slider/img003.jpg" alt="" width="400" height="400"></li>
            <li class="scroll-infinity__item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/home/loop-slider/img004.jpg" alt="" width="400" height="400"></li>
            <li class="scroll-infinity__item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/home/loop-slider/img005.jpg" alt="" width="400" height="400"></li>
            <li class="scroll-infinity__item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/home/loop-slider/img006.jpg" alt="" width="400" height="400"></li>
            <li class="scroll-infinity__item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/home/loop-slider/img007.jpg" alt="" width="400" height="400"></li>
          </ul>
          <ul class="scroll-infinity__list scroll-infinity__list--left">
            <li class="scroll-infinity__item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/home/loop-slider/img001.jpg" alt="" width="400" height="400"></li>
            <li class="scroll-infinity__item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/home/loop-slider/img002.jpg" alt="" width="400" height="400"></li>
            <li class="scroll-infinity__item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/home/loop-slider/img003.jpg" alt="" width="400" height="400"></li>
            <li class="scroll-infinity__item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/home/loop-slider/img004.jpg" alt="" width="400" height="400"></li>
            <li class="scroll-infinity__item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/home/loop-slider/img005.jpg" alt="" width="400" height="400"></li>
            <li class="scroll-infinity__item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/home/loop-slider/img006.jpg" alt="" width="400" height="400"></li>
            <li class="scroll-infinity__item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/home/loop-slider/img007.jpg" alt="" width="400" height="400"></li>
          </ul>
        </div>
      </div>
    </section>

    <?php /* 会社紹介動画 - 一時ストップ
    <section class="sec sec-medium sec-movie-company-information">
      <h2 class="title07" data-sub="Movie">会社紹介動画</h2>
      <figure class="movie-cover js-modal-video">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/common/cover-movie-company-information.jpg" alt="" width="980" height="552">
      </figure>
    </section>
    */ ?>
<?php get_footer("recruit"); ?>