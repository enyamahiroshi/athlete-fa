</main>

<?php if( is_page( array('new-graduates', 'job-description') ) ): ?>
<section class="sec sec-small sec-cta-entry">
  <a href="https://job.mynavi.jp/24/pc/search/corp91106/outline.html" target="_blank" rel="noopener noreferrer" class="cta-entry no-blank-image">
    <div class="inner">
      <h2 class="title02 --data-sub-ja" data-sub="新卒採用 / エントリー">ENTRY</h2>
      <div class="cta-entry__button">
        <div class="cta-entry__button__text">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/recruit/icon-mynavi-white.svg" alt="" width="187" height="34.71">
        </div>
        <div class="icon icon--blank">
          <span class="rotateChar1">J</span><span class="rotateChar2">o</span><span class="rotateChar3">i</span><span class="rotateChar4">n</span><span class="rotateChar5"></span><span class="rotateChar6">o</span><span class="rotateChar7">u</span><span class="rotateChar8">r</span><span class="rotateChar9"></span><span class="rotateChar10">T</span><span class="rotateChar11">E</span><span class="rotateChar12">A</span><span class="rotateChar13">M</span><span class="rotateChar14">!</span>
        </div>
      </div>
    </div>
  </a>
</section>
<?php elseif( is_page( 'career' ) ): ?>
<section class="sec sec-small sec-cta-entry">
  <a href="<?php echo esc_url(home_url()); ?>/recruit/entry/" target="_blank" rel="noopener noreferrer" class="cta-entry no-blank-image">
    <div class="inner">
      <h2 class="title02 --data-sub-ja" data-sub="キャリア採用 / エントリー">ENTRY</h2>
      <div class="cta-entry__button">
        <div class="cta-entry__button__text">
          <em>エントリーフォーム</em>
        </div>
        <div class="icon icon--blank">
          <span class="rotateChar1">J</span><span class="rotateChar2">o</span><span class="rotateChar3">i</span><span class="rotateChar4">n</span><span class="rotateChar5"></span><span class="rotateChar6">o</span><span class="rotateChar7">u</span><span class="rotateChar8">r</span><span class="rotateChar9"></span><span class="rotateChar10">T</span><span class="rotateChar11">E</span><span class="rotateChar12">A</span><span class="rotateChar13">M</span><span class="rotateChar14">!</span>
        </div>
      </div>
    </div>
  </a>
</section>
<?php elseif( is_page( 'internship' ) ): ?>
<section class="sec sec-small sec-cta-entry">
  <a href="https://job.mynavi.jp/24/pc/search/corp91106/outline.html" target="_blank" rel="noopener noreferrer" class="cta-entry cta-entry--black no-blank-image">
    <div class="inner">
      <div class="cta-titles">
        <h2 class="cta-titles__title">インターンシップ<br>お申込み</h2>
        <p class="cta-titles__text">マイナビよりコースを選択の上、エントリーをお願いいたします。</p>
      </div>
      <div class="cta-entry__button">
        <div class="cta-entry__button__text">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/recruit/icon-mynavi-white.svg" alt="" width="187" height="34.71">
        </div>
        <div class="icon icon--blank">
          <span class="rotateChar1">J</span><span class="rotateChar2">o</span><span class="rotateChar3">i</span><span class="rotateChar4">n</span><span class="rotateChar5"></span><span class="rotateChar6">o</span><span class="rotateChar7">u</span><span class="rotateChar8">r</span><span class="rotateChar9"></span><span class="rotateChar10">T</span><span class="rotateChar11">E</span><span class="rotateChar12">A</span><span class="rotateChar13">M</span><span class="rotateChar14">!</span>
        </div>
      </div>
    </div>
  </a>
</section>
<?php else: ?>
<section class="sec sec-full sec-cta-entry-column">
  <a href="https://job.mynavi.jp/24/pc/search/corp91106/outline.html" target="_blank" rel="noopener noreferrer" class="cta-entry__button">
    <div class="cta-entry__button__text">
      <span class="cta-entry__button__text__sub">新卒採用 / エントリー</span>
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/recruit/icon-mynavi-white.svg" alt="" width="187" height="34.71">
    </div>
    <div class="icon">
      <span class="rotateChar1">J</span><span class="rotateChar2">o</span><span class="rotateChar3">i</span><span class="rotateChar4">n</span><span class="rotateChar5"></span><span class="rotateChar6">o</span><span class="rotateChar7">u</span><span class="rotateChar8">r</span><span class="rotateChar9"></span><span class="rotateChar10">T</span><span class="rotateChar11">E</span><span class="rotateChar12">A</span><span class="rotateChar13">M</span><span class="rotateChar14">!</span>
    </div>
  </a>
  <a href="<?php echo esc_url(home_url()); ?>/recruit/entry/" class="cta-entry__button">
    <div class="cta-entry__button__text">
      <span class="cta-entry__button__text__sub">キャリア採用 / エントリー</span>
      <em>エントリーフォーム</em>
    </div>
    <div class="icon">
      <span class="rotateChar1">J</span><span class="rotateChar2">o</span><span class="rotateChar3">i</span><span class="rotateChar4">n</span><span class="rotateChar5"></span><span class="rotateChar6">o</span><span class="rotateChar7">u</span><span class="rotateChar8">r</span><span class="rotateChar9"></span><span class="rotateChar10">T</span><span class="rotateChar11">E</span><span class="rotateChar12">A</span><span class="rotateChar13">M</span><span class="rotateChar14">!</span>
    </div>
  </a>
</section>
<?php endif; ?>

<?php //採用 お問い合わせ CTA ?>
<section class="sec sec-small sec-cta-contact-recruit">
  <p class="info-text">ご不明点などはお気軽にご連絡ください。お電話もしくはお問い合わせフォームにて承っております。</p>
  <div class="cta-contact-recruit">
    <div class="cta-item cta-item--tel">
      <p class="cta-item__tel"><span>TEL:</span>0266-53-3369</p>
      <p class="cta-item__sub">採用担当宛</p>
    </div>
    <div class="cta-item cta-item--link">
      <a href="<?php echo esc_url(home_url()); ?>/contact/" class="link-item01">
        <div class="link-content">お問い合わせ</div>
        <i class="icon icon--gray"></i>
      </a>
    </div>
  </div>
</section>

<?php if( is_page( 'internship' ) ): ?>
<div class="button-wrap">
  <a href="<?php echo esc_url(home_url()); ?>/recruit/new-graduates/" class="button-r-link-large button-circle-ani">
    <span>新卒採用ページへ戻る</span>
    <span class="svg-area">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" class="circle-ani">
        <circle cx="50%" cy="50%" r="28" class="circle-ani">
      </svg>
    </span>
  </a>
</div>
<?php endif; ?>

<section class="sec sec-wide sec-bread-navi">
  <?php //Breadcrumb NavXT
  echo '<aside class="bread-navi">';
  if(function_exists('bcn_display')){ bcn_display(); }
  echo '</aside>'."\n";;
  ?>
</section>

<?php //採用 ページナビ ?>
<?php if( is_page( array('new-graduates', 'career', 'job-description', 'internship') ) ): ?>
<section class="sec sec-wide sec-page-navi">
  <?php if( is_page( array('new-graduates', 'internship') ) ): ?>
  <h2 class="page-navi-title">新卒採用情報</h2>
  <nav class="page-navi">
    <a href="<?php echo esc_url(home_url()); ?>/recruit/department/" class="link-item01">
      <div class="link-content">
        <em class="main-text">部署紹介</em><span class="sub-text">Department</span>
      </div>
      <i class="icon"></i>
    </a>
    <a href="<?php echo esc_url(home_url()); ?>/recruit/data/" class="link-item01">
      <div class="link-content">
        <em class="main-text">数字でわかる<br>アスリートFA</em><span class="sub-text">Data</span>
      </div>
      <i class="icon"></i>
    </a>
    <a href="<?php echo esc_url(home_url()); ?>/recruit/job-description/" class="link-item01">
      <div class="link-content">
        <em class="main-text">新卒募集要項</em><span class="sub-text">Job description</span>
      </div>
      <i class="icon"></i>
    </a>
    <a href="<?php echo esc_url(home_url()); ?>/recruit/internship/" class="link-item01">
      <div class="link-content">
        <em class="main-text">インターンシップ情報</em><span class="sub-text">Internship</span>
      </div>
      <i class="icon"></i>
    </a>
  </nav>
  <?php elseif( is_page('career') ): ?>
  <h2 class="page-navi-title">キャリア採用情報</h2>
  <nav class="page-navi">
    <a href="<?php echo esc_url(home_url()); ?>/recruit/department/" class="link-item01">
      <div class="link-content">
        <em class="main-text">部署紹介</em><span class="sub-text">Department</span>
      </div>
      <i class="icon"></i>
    </a>
    <a href="<?php echo esc_url(home_url()); ?>/recruit/data/" class="link-item01">
      <div class="link-content">
        <em class="main-text">数字でわかる<br>アスリートFA</em><span class="sub-text">Data</span>
      </div>
      <i class="icon"></i>
    </a>
  </nav>
  <?php endif; ?>

  <h2 class="page-navi-title">社員インタビュー</h2>
  <nav class="recruit-interview-navi">
    <a href="<?php echo esc_url(home_url()); ?>/recruit/interview01/" class="link-item01">
      <div class="link-content">
        <p class="staff-data__text">精密動作を可能とする機構設計、<br>おもしろさと社会への貢献を実感</p>
        <div class="staff-data__meta">
          <div class="staff-data__name">I.N.</div>
          <div class="staff-position">設計部 設計G</div>
          <div class="staff-join">2020年新卒入社</div>
        </div>
      </div>
      <div class="staff-data__photo">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/recruit/staff/img-staff-card-image01.jpg" alt="" width="418" height="590">
      </div>
    </a>
    <a href="<?php echo esc_url(home_url()); ?>/recruit/interview02/" class="link-item01">
      <div class="link-content">
        <p class="staff-data__text">風通しのよい環境が魅力、<br>仲間とともに頼れる技術者を目指す</p>
        <div class="staff-data__meta">
          <div class="staff-data__name">Y.W.</div>
          <div class="staff-position">製造部 制御G</div>
          <div class="staff-join">2021年新卒入社</div>
        </div>
      </div>
      <div class="staff-data__photo">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/recruit/staff/img-staff-card-image02.jpg" alt="" width="418" height="590">
      </div>
    </a>
    <a href="<?php echo esc_url(home_url()); ?>/recruit/interview03/" class="link-item01">
      <div class="link-content">
        <p class="staff-data__text">装置に命を吹き込むものづくり精神、<br>困難を乗り越えた先に喜びを実感</p>
        <div class="staff-data__meta">
          <div class="staff-data__name">Y.K.</div>
          <div class="staff-position">製造部 製造G</div>
          <div class="staff-join">2021年新卒入社</div>
        </div>
      </div>
      <div class="staff-data__photo">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/recruit/staff/img-staff-card-image03.jpg" alt="" width="418" height="590">
      </div>
    </a>
  </nav>
</section>
<?php endif; ?>

<aside class="page-top">
  <a href="#top" class="button-page-top"><span>Page Top</span></a>
</aside>

<?php //フッター ?>
<footer class="footer">
  <section class="footer__main">
    <div class="footer__main__company">
      <figure class="footer__main__company__logo">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="93.436" height="15.289" viewBox="0 0 93.436 15.289"><defs><clipPath id="a"><rect width="93.436" height="15.289"/></clipPath></defs><g transform="translate(0 0)"><rect width="4.946" height="15.154" transform="translate(46.409 0.004)"/><g transform="translate(0 0)"><g clip-path="url(#a)"><path d="M140.2,3.845a6.523,6.523,0,0,0-4.423,1.476V.015h-4.945V15.169h4.945V8.908A2.279,2.279,0,0,1,137.923,7.1c1.562,0,2.08,1.3,2.08,2.537v5.533h4.945V8.01c0-2.928-2.6-4.165-4.749-4.165" transform="translate(-99.645 -0.012)"/><path d="M90.991,17.527V14.816H89.171a1.448,1.448,0,0,1-1.625-1.63V9.671h3V6.809h-3v-3.5L82.6,5.117V6.809H79.676V9.671H82.6v5.123c0,1.693.763,2.733,2.276,2.879a26.513,26.513,0,0,0,6.115-.146" transform="translate(-60.684 -2.519)"/><path d="M292.538,17.527V14.816h-1.822a1.449,1.449,0,0,1-1.626-1.63V9.671h3V6.809h-3v-3.5l-4.945,1.81V6.809h-2.924V9.671h2.924v5.123c0,1.693.765,2.733,2.277,2.879a26.52,26.52,0,0,0,6.116-.146" transform="translate(-214.186 -2.519)"/><path d="M16.806,15.154h5.366L14.024,0H7.816L0,15.154H5.368l1.139-2.208h9.111ZM8.421,9.233,10.967,4.3l2.656,4.936Z" transform="translate(0 0)"/><path d="M232.8,20.5c0-3.82-2.245-5.529-5.456-5.87a12.594,12.594,0,0,0-3.676,0,5.876,5.876,0,0,0-5.7,5.87c0,3.18,2.227,5.3,5.634,5.694a12.349,12.349,0,0,0,3.635,0c2.2-.146,4.978-.878,5.562-4H227.77a2.359,2.359,0,0,1-4.585-.732H232.8ZM223.1,18.977c0-1.317,1.309-1.709,2.472-1.709s2.458.538,2.458,1.709Z" transform="translate(-166.008 -11.043)"/><path d="M344.587,20.5c0-3.82-2.244-5.529-5.455-5.87a12.6,12.6,0,0,0-3.676,0,5.876,5.876,0,0,0-5.7,5.87c0,3.18,2.225,5.3,5.633,5.694a12.353,12.353,0,0,0,3.635,0c2.2-.146,4.977-.878,5.562-4h-5.025a2.361,2.361,0,0,1-4.587-.732h9.612Zm-9.694-1.527c0-1.317,1.311-1.709,2.473-1.709s2.459.538,2.459,1.709Z" transform="translate(-251.152 -11.043)"/></g></g></g></svg>
      </figure>
      <p class="footer__main__company__data">〒392-0012<br>長野県諏訪市四賀2970-1</p>
      <p class="footer__main__company__data">
        TEL : <a href="tel:0266-53-3369">0266-53-3369</a><span>/</span>FAX : 0266-58-1755
      </p>
    </div>
    <div class="footer__main__navigation">
      <section class="footer__main__navigation__main">
        <?php //カスタムメニューの呼び出し
          wp_nav_menu( array ( 'menu'=>'menu1', 'container'=>'' , 'container_class' =>'' , 'menu_class'=>'menu',  'items_wrap'=>'<ul class="%2$s">%3$s</ul>'."\n" ) );
        ?>
        <?php //カスタムメニューの呼び出し
          wp_nav_menu( array ( 'menu'=>'menu2', 'container'=>'' , 'container_class' =>'' , 'menu_class'=>'menu',  'items_wrap'=>'<ul class="%2$s">%3$s</ul>'."\n" ) );
        ?>
        <?php //カスタムメニューの呼び出し
          wp_nav_menu( array ( 'menu'=>'menu3', 'container'=>'' , 'container_class' =>'' , 'menu_class'=>'menu',  'items_wrap'=>'<ul class="%2$s">%3$s</ul>'."\n" ) );
        ?>
      </section>
      <section class="footer__main__navigation__sub">
        <div class="switch-language">
          <a href="<?php echo esc_url(home_url()); ?>/" class="ja">JP</a>
          <span class="separate"></span>
          <a href="<?php echo esc_url(home_url()); ?>/en/" class="en">EN</a>
        </div>
        <a href="http://www.athlete-china.com/" target="_blank" rel="noopener noreferrer" class="link-cn">愛立発自動化設備有限公司<span>（CN）</span></a>
      </section>
    </div>
  </section>
  <section class="footer__bottom">
    <a href="<?php echo esc_url(home_url()); ?>/privacy-policy/">プライバシーポリシー</a>
    <div class="copyright">©　2023　Athlete FA Corporation</div>
  </section>
</footer>
<?php wp_footer(); ?>
</body>
</html>