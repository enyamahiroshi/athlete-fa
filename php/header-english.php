<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-W995SJZ9');</script>
  <!-- End Google Tag Manager -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="format-detection" content="telephone=no">
  <title><?php bloginfo('name'); wp_title('|', true, 'left'); ?></title>
  <?php wp_head(); ?>
  <script type="text/javascript">window.onunload = function(){};</script>
</head>
<body id="top" <?php body_class(); ?><?php if(is_page('en')){ echo 'data-flg="en-home"'; }?>>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W995SJZ9"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  <div class="progress">
    <div class="progress__bar"></div>
  </div>
  <?php //header ?>
  <header class="header">
    <a href="<?php echo esc_url( home_url() ); ?>/en/" class="header__logo">
      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="93.436" height="15.289" viewBox="0 0 93.436 15.289"><defs><clipPath id="a"><rect width="93.436" height="15.289"/></clipPath></defs><g transform="translate(0 0)"><rect width="4.946" height="15.154" transform="translate(46.409 0.004)"/><g transform="translate(0 0)"><g clip-path="url(#a)"><path d="M140.2,3.845a6.523,6.523,0,0,0-4.423,1.476V.015h-4.945V15.169h4.945V8.908A2.279,2.279,0,0,1,137.923,7.1c1.562,0,2.08,1.3,2.08,2.537v5.533h4.945V8.01c0-2.928-2.6-4.165-4.749-4.165" transform="translate(-99.645 -0.012)"/><path d="M90.991,17.527V14.816H89.171a1.448,1.448,0,0,1-1.625-1.63V9.671h3V6.809h-3v-3.5L82.6,5.117V6.809H79.676V9.671H82.6v5.123c0,1.693.763,2.733,2.276,2.879a26.513,26.513,0,0,0,6.115-.146" transform="translate(-60.684 -2.519)"/><path d="M292.538,17.527V14.816h-1.822a1.449,1.449,0,0,1-1.626-1.63V9.671h3V6.809h-3v-3.5l-4.945,1.81V6.809h-2.924V9.671h2.924v5.123c0,1.693.765,2.733,2.277,2.879a26.52,26.52,0,0,0,6.116-.146" transform="translate(-214.186 -2.519)"/><path d="M16.806,15.154h5.366L14.024,0H7.816L0,15.154H5.368l1.139-2.208h9.111ZM8.421,9.233,10.967,4.3l2.656,4.936Z" transform="translate(0 0)"/><path d="M232.8,20.5c0-3.82-2.245-5.529-5.456-5.87a12.594,12.594,0,0,0-3.676,0,5.876,5.876,0,0,0-5.7,5.87c0,3.18,2.227,5.3,5.634,5.694a12.349,12.349,0,0,0,3.635,0c2.2-.146,4.978-.878,5.562-4H227.77a2.359,2.359,0,0,1-4.585-.732H232.8ZM223.1,18.977c0-1.317,1.309-1.709,2.472-1.709s2.458.538,2.458,1.709Z" transform="translate(-166.008 -11.043)"/><path d="M344.587,20.5c0-3.82-2.244-5.529-5.455-5.87a12.6,12.6,0,0,0-3.676,0,5.876,5.876,0,0,0-5.7,5.87c0,3.18,2.225,5.3,5.633,5.694a12.353,12.353,0,0,0,3.635,0c2.2-.146,4.977-.878,5.562-4h-5.025a2.361,2.361,0,0,1-4.587-.732h9.612Zm-9.694-1.527c0-1.317,1.311-1.709,2.473-1.709s2.459.538,2.459,1.709Z" transform="translate(-251.152 -11.043)"/></g></g></g></svg>
    </a>
    <section class="global-menu">
      <section class="global-menu__sub">
        <div class="switch-language">
          <a href="<?php echo esc_url(home_url()); ?>/" class="ja">JP</a>
          <span class="separate"></span>
          <a href="<?php echo esc_url(home_url()); ?>/en/" class="en">EN</a>
        </div>
        <a href="http://www.athlete-china.com/" target="_blank" rel="noopener noreferrer" class="link-cn">Athlete Automation Equipment (Shanghai) Co.,Ltd.<span>（CN）</span></a>
      </section>
      <section class="header-navi">
        <?php //カスタムメニューの呼び出し
          wp_nav_menu( array ( 'menu'=>'mainEN', 'container'=>'' , 'container_class' =>'' , 'menu_class'=>'menu',  'items_wrap'=>'<ul class="%2$s">%3$s</ul>'."\n" ) );
        ?>
      </section>
      <div class="global-menu__contact">
        <a href="<?php echo esc_url(home_url()); ?>/en/contact/" class="button-contact">Contact Us</a>
      </div>
    </section>
    <button class="menu-bar js-tgl-menu" type="button">
      <span class="menu-bar-line"></span>
      <span class="menu-bar-image"></span>
    </button>
  </header>

  <main class="main">