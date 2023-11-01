<?php get_header(); ?>
  <header class="page-header page-header--contact">
    <h1 class="page-header__title" data-sub="お問い合わせ">Contact</h1>
  </header>
  <section class="sec sec-medium contact contact-complete">

    <?php //フォームステップ ?>
    <div class="form-step">
      <div class="form-step__item"><span>1</span>情報入力</div>
      <div class="form-step__item"><span>2</span>入力内容の確認</div>
      <div class="form-step__item current"><span>3</span>送信完了</div>
    </div>

    <p class="form-complete-message"><strong>お問い合わせありがとうございました。</strong></p>
    <p class="form-complete-message">後日担当者より返信させていただきます。<br>お手数をおかけしますが、3営業日以上経っても返信がない場合は、<br>再度お問い合わせいただくか、お電話でのご連絡をお願いいたします。</p>
    <div class="button-wrap">
      <a href="<?php echo esc_url(home_url()); ?>" class="button-r-link-large button-circle-ani">
        トップページへ戻る
        <span class="svg-area">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" class="circle-ani">
            <circle cx="50%" cy="50%" r="28" class="circle-ani">
          </circle></svg>
        </span>
      </a>
    </div>

  </section>
<?php get_footer("contact"); ?>