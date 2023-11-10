<?php
/**
 * From Action
 * 
 */
$objApp = new Entry();
$objApp->confirm();
add_action('wp_head', function(){
    echo '<style>.u-error{ color: #c80421; display: block;}.u-error__box{ color: #c80421; display: block;}</style>'."\n";
});
?>
<?php get_header(); ?>
  <header class="page-header page-header--contact">
    <h1 class="page-header__title" data-sub="エントリーフォーム">Entry</h1>
  </header>
  <section class="sec sec-medium contact contact-confirm">

    <?php //フォームステップ ?>
    <div class="form-step">
      <div class="form-step__item"><span>1</span>情報入力</div>
      <div class="form-step__item current"><span>2</span>入力内容の確認</div>
      <div class="form-step__item"><span>3</span>送信完了</div>
    </div>

    <?php if (!empty($objApp->exceptionErr)): ?>
        <p class="u-error__box"><?php echo $objApp->exceptionErr; ?></p>
    <?php endif; ?>

    <p class="form-information">入力内容をご確認ください。</p>

    <?php //フォーム ?>
    <form class="form-contents" method="post" action="?">
      <input type="hidden" name="mode" value="complete">
      <input type="hidden" name="<?php echo TRANSACTION_NAME; ?>" value="<?php echo Sessions::getToken(); ?>">

      <div class="item">
        <div class="item__label">
          <label for="kibojob" class="item__label__name">希望職種</label>
        </div>
        <div class="item__input">
          <div class="item__input__block">
            <?php esc_html_e($objApp->arrData['kibojob'] ?? ''); ?>
          </div>
        </div>
      </div>

      <div class="item">
        <div class="item__label">
          <label for="onamae" class="item__label__name">お名前</label>
        </div>
        <div class="item__input">
          <div class="item__input__block">
            <?php esc_html_e($objApp->arrData['onamae'] ?? ''); ?>
          </div>
        </div>
      </div>

      <div class="item">
        <div class="item__label">
          <label for="furigana" class="item__label__name">ふりがな</label>
        </div>
        <div class="item__input">
          <div class="item__input__block">
            <?php esc_html_e($objApp->arrData['furigana'] ?? ''); ?>
          </div>
        </div>
      </div>

      <div class="item">
        <div class="item__label">
          <label for="mailaddress" class="item__label__name">メールアドレス</label>
        </div>
        <div class="item__input">
          <div class="item__input__block">
            <?php esc_html_e($objApp->arrData['mailaddress'] ?? ''); ?>
          </div>
        </div>
      </div>

      <div class="item">
        <div class="item__label">
          <label for="telnum" class="item__label__name">電話番号</label>
        </div>
        <div class="item__input">
          <div class="item__input__block">
            <?php esc_html_e($objApp->arrData['telnum'] ?? ''); ?>
          </div>
        </div>
      </div>

      <div class="item">
        <div class="item__label">
          <label for="zipnum" class="item__label__name">住所</label>
        </div>
        <div class="item__input">
          <div class="item__input__block">
            <span class="input-separate-text">〒</span>
            <?php esc_html_e($objApp->arrData['zipnum'] ?? ''); ?>
          </div>
          <div class="item__input__block">
            <?php esc_html_e($objApp->arrData['address'] ?? ''); ?>
          </div>
        </div>
      </div>

      <div class="item">
        <div class="item__label">
          <div class="item__label__name">履歴書</div>
        </div>
        <div class="item__input">
          <div class="item__input__block">
            <label for="rirekisho" class="custom-file">
              <input type="file" id="rirekisho" name="rirekisho" accept=".pdf,.doc,.docx,.xml,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document">
              ファイルを選択
            </label>
            <span class="custom-file-selected-file"><?php esc_html_e($objApp->arrData['rirekisho_disp_failname'] ?? ''); ?></span>
          </div>
        </div>
      </div>

      <div class="item">
        <div class="item__label">
          <div class="item__label__name">職務経歴書</div>
        </div>
        <div class="item__input">
          <div class="item__input__block">
            <label for="keirekisho" class="custom-file">
              <input type="file" id="keirekisho" name="keirekisho" accept=".pdf,.doc,.docx,.xml,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document">
              ファイルを選択
            </label>
            <span class="custom-file-selected-file"><?php esc_html_e($objApp->arrData['keirekisho_disp_failname'] ?? ''); ?></span>
          </div>
        </div>
      </div>

      <div class="item">
        <div class="item__label">
          <label for="naiyo" class="item__label__name">ご相談内容</label>
        </div>
        <div class="item__input">
          <div class="item__input__block">
            <div id="naiyo" name="naiyo" class="size-wide">
            <?php echo nl2br(esc_html($objApp->arrData['naiyo'] ?? '')); ?>
            </div>
          </div>
        </div>
      </div>

      <div class="button-wrap">
        <button type="button" class="button button--gray" onclick="location.href='<?php echo home_url(ENTRY_INPUT_SLUG); ?>'">入力画面へ戻る</button>
        <button type="submit" class="button">送信</button>
      </div>

    </form>
  </section>
<?php get_footer("contact"); ?>