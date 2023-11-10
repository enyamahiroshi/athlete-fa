<?php
/**
 * From Action
 * 
 */
$objApp = new Entry();
$objApp->main();
add_action('wp_head', function(){
    echo '<style>.u-error{ color: #c80421; display: block;}.u-error__box{ color: #c80421; display: block;}</style>'."\n";
});
?>
<?php get_header(); ?>
  <header class="page-header page-header--contact">
    <h1 class="page-header__title" data-sub="<?php the_title(); ?>">
      <?php echo $slug = get_post(get_the_ID())->post_name; ?>
    </h1>
  </header>
  <section class="sec sec-medium contact contact-input">

    <?php //フォームステップ ?>
    <div class="form-step">
      <div class="form-step__item current"><span>1</span>情報入力</div>
      <div class="form-step__item"><span>2</span>入力内容の確認</div>
      <div class="form-step__item"><span>3</span>送信完了</div>
    </div>

    <?php if (!empty($objApp->exceptionErr)): ?>
        <p class="u-error__box"><?php echo $objApp->exceptionErr; ?></p>
    <?php endif; ?>
    <?php if (isset($objApp->arrErr['g-recaptcha-response'])) : ?>
        <p class="u-error__box"><?php echo $objApp->arrErr["g-recaptcha-response"]; ?></p>
    <?php endif; ?>

    <p class="form-information"><span class="required"></span>は必須項目です</p>

    <?php //フォーム ?>
    <script src="<?php echo get_theme_file_uri('assets/js/yubinbango.js'); ?>" charset="UTF-8"></script>
    <form class="form-contents h-adr" method="post" action="?" enctype="multipart/form-data">
      <input type="hidden" name="mode" value="confirm">
      <input type="hidden" name="<?php echo TRANSACTION_NAME; ?>" value="<?php echo Sessions::getToken(); ?>">
      <span class="p-country-name" style="display:none;">Japan</span>

      <div class="item">
        <div class="item__label">
          <label for="kibojob" class="item__label__name required">希望職種</label>
        </div>
        <div class="item__input">
          <div class="item__input__block">
            <select id="kibojob" name="kibojob" class="custom-select size-wide">
              <option value="" selected disabled>選択してください</option>
              <?php echo Utils::html_select(ITEM_KIBOJOB, $objApp->arrData['kibojob'] ?? ''); ?>
            </select>
          </div>
          <?php Utils::printErr($objApp->arrErr['kibojob'] ?? ''); ?>
        </div>
      </div>

      <div class="item">
        <div class="item__label">
          <label for="onamae" class="item__label__name required">お名前</label>
        </div>
        <div class="item__input">
          <div class="item__input__block">
            <input type="text" id="onamae" name="onamae" placeholder="例：山田太郎" class="size-wide" maxlength="50" value="<?php esc_attr_e($objApp->arrData['onamae'] ?? ''); ?>">
          </div>
          <?php Utils::printErr($objApp->arrErr['onamae'] ?? ''); ?>
        </div>
      </div>

      <div class="item">
        <div class="item__label">
          <label for="furigana" class="item__label__name">ふりがな</label>
        </div>
        <div class="item__input">
          <div class="item__input__block">
            <input type="text" id="furigana" name="furigana" placeholder="例：やまだたろう" class="size-wide" maxlength="50" value="<?php esc_attr_e($objApp->arrData['furigana'] ?? ''); ?>">
          </div>
          <?php Utils::printErr($objApp->arrErr['furigana'] ?? ''); ?>
        </div>
      </div>

      <div class="item">
        <div class="item__label">
          <label for="mailaddress" class="item__label__name required">メールアドレス</label>
        </div>
        <div class="item__input">
          <div class="item__input__block">
            <input type="email" id="mailaddress" name="mailaddress" placeholder="例：example@example.com" class="size-wide" maxlength="250" value="<?php esc_attr_e($objApp->arrData['mailaddress'] ?? ''); ?>">
          </div>
          <?php Utils::printErr($objApp->arrErr['mailaddress'] ?? ''); ?>
        </div>
      </div>

      <div class="item">
        <div class="item__label">
          <label for="telnum" class="item__label__name required">電話番号</label>
        </div>
        <div class="item__input">
          <div class="item__input__block">
            <input type="tel" id="telnum" name="telnum" placeholder="例：0266-53-3369" class="size-wide" maxlength="15" value="<?php esc_attr_e($objApp->arrData['telnum'] ?? ''); ?>">
          </div>
          <?php Utils::printErr($objApp->arrErr['telnum'] ?? ''); ?>
        </div>
      </div>

      <div class="item">
        <div class="item__label">
          <label for="zipnum" class="item__label__name">住所</label>
        </div>
        <div class="item__input">
          <div class="item__input__block">
            <span class="input-separate-text">郵便番号</span>
            <input type="text" id="zipnum" name="zipnum" placeholder="例：392-0012" class="size-small p-postal-code" maxlength="8" value="<?php esc_attr_e($objApp->arrData['zipnum'] ?? ''); ?>">
          </div>
          <?php Utils::printErr($objApp->arrErr['zipnum'] ?? ''); ?>
          <div class="item__input__block">
            <input type="text" id="address" name="address" placeholder="例：長野県諏訪市四賀2970-1" class="size-wide p-region p-locality p-street-address p-extended-address" maxlength="200" value="<?php esc_attr_e($objApp->arrData['address'] ?? ''); ?>">
          </div>
          <?php Utils::printErr($objApp->arrErr['address'] ?? ''); ?>
        </div>
      </div>

      <div class="item">
        <div class="item__label">
          <div class="item__label__name required">履歴書</div>
        </div>
        <div class="item__input">
          <div class="item__input__block">
            <span class="input-separate-text small">履歴書を添付してください。</span>
          </div>
          <div class="item__input__block js-file">
            <label for="rirekisho" class="custom-file">
              <input type="file" id="rirekisho" name="rirekisho" accept="<?php esc_attr_e(Utils::printFileAccept());?>">
              ファイルを選択
            </label>
            <span class="custom-file-selected-file js-fileName">
                <?php echo $objApp->arrData['rirekisho_disp_failname'] ?? '選択されていません'; ?>
                <input type="hidden" name="rirekisho_disp_failname" value="<?php esc_attr_e($objApp->arrData['rirekisho_disp_failname'] ?? ''); ?>">
                <input type="hidden" name="rirekisho_failname" value="<?php esc_attr_e($objApp->arrData['rirekisho_failname'] ?? ''); ?>">
            </span>
          </div>
          <?php Utils::printErr($objApp->arrErr['rirekisho'] ?? ''); ?>
          <?php Utils::printErr($objApp->arrErr['rirekisho_failname'] ?? ''); ?>
        </div>
      </div>

      <div class="item">
        <div class="item__label">
          <div class="item__label__name required">職務経歴書</div>
        </div>
        <div class="item__input">
          <div class="item__input__block">
            <span class="input-separate-text small">職務経歴書を添付してください。</span>
          </div>
          <div class="item__input__block js-file">
            <label for="keirekisho" class="custom-file">
              <input type="file" id="keirekisho" name="keirekisho" accept="<?php esc_attr_e(Utils::printFileAccept());?>">
              ファイルを選択
            </label>
            <span class="custom-file-selected-file js-fileName">
                <?php echo $objApp->arrData['keirekisho_disp_failname'] ?? '選択されていません'; ?>
                <input type="hidden" name="keirekisho_disp_failname" value="<?php esc_attr_e($objApp->arrData['keirekisho_disp_failname'] ?? ''); ?>">
                <input type="hidden" name="keirekisho_failname" value="<?php esc_attr_e($objApp->arrData['keirekisho_failname'] ?? ''); ?>">
            </span>
          </div>
          <?php Utils::printErr($objApp->arrErr['keirekisho'] ?? ''); ?>
          <?php Utils::printErr($objApp->arrErr['keirekisho_failname'] ?? ''); ?>
        </div>
      </div>

      <div class="item">
        <div class="item__label">
          <label for="naiyo" class="item__label__name required">ご相談内容</label>
          <span class="item__label__sub">（具体的にご記入ください）</span>
        </div>
        <div class="item__input">
          <div class="item__input__block">
            <textarea id="naiyo" name="naiyo" placeholder="ご相談内容をご記入ください。" class="size-wide" maxlength="3000"><?php esc_attr_e($objApp->arrData['naiyo'] ?? ''); ?></textarea>
          </div>
          <?php Utils::printErr($objApp->arrErr['naiyo'] ?? ''); ?>
        </div>
      </div>

      <div class="item item--privacy_policy">
        <div class="item__label">
          <div class="item__label__name required">個人情報の取り扱いについて</div>
        </div>
        <div class="item__input">
          <div class="include-privacy_policy">
            <div class="inner">
              <h2>プライバシーポリシー</h2>
              <?php include_once('./wp-content/themes/athletefa/block/block-privacy_policy.php'); ?>
            </div>
          </div>
          <div class="item__input__block item__input__block--center">
            <div class="checkbox-field">
              <label for="agree">
                <input type="checkbox" id="agree" name="agree" value="1"<?php Utils::checked(1, $objApp->arrData['agree'] ?? ''); ?>>
                <span class="checkbox-field-text">上記規約に同意する</span>
              </label>
            </div>
          </div>
          <?php if (isset($objApp->arrErr['agree'])) : ?><span class="u-error" style="text-align: center;"><?php esc_html_e($objApp->arrErr['agree'] ?? ''); ?></span><?php endif; ?>
        </div>
      </div>

      <div class="button-wrap">
        <button type="submit" class="button">入力内容の確認</button>
        <div id="g-recaptcha-wrapper"></div>
      </div>

    </form>
  </section>
<?php add_action('wp_footer', function() { ?>
<?php if (GOOGLE_SITE_KEY) : ?>
<script src="https://www.google.com/recaptcha/api.js?render=explicit&onload=onRecaptchaLoad"></script>
<script>
    function onRecaptchaLoad() {
        var clientId = grecaptcha.render('g-recaptcha-wrapper', {
            'sitekey': '<?php echo GOOGLE_SITE_KEY; ?>',
            'badge': 'bottomleft',
            'size': 'invisible'
        });
        grecaptcha.ready(function() {
            grecaptcha.execute(clientId, {
                action: 'submit'
            });
        });
    }
</script>
<?php endif; ?>
<script>

    const maxFileSize = <?php echo JS_CHECK_FILE_SIZE; ?>;
    const fileSizeInMB = maxFileSize / (1024 * 1024);

    let fileGroups = document.querySelectorAll('.js-file');

    for (let i = 0; i < fileGroups.length; i++) {

        let fileInput = fileGroups[i].querySelector('input[type="file"]');

        fileInput.addEventListener('change', function (e) {

            let existingError = fileGroups[i].nextElementSibling;
            if (existingError && existingError.classList.contains('u-error')) {
                existingError.remove();
            }

            var uploadedFile = this.files[0];
            var fileName = fileGroups[i].querySelector('.js-fileName');

            if (maxFileSize < uploadedFile.size) {
                var spanEl = document.createElement('span');
                spanEl.classList.add('u-error');
                spanEl.textContent = 'アップロードできるファイルサイズは' + fileSizeInMB.toFixed(1) + 'MBまでです。';
                fileGroups[i].after(spanEl);
                return false;
            }
            fileName.textContent = uploadedFile.name;
        });
    }
</script>
<?php }, 20); ?>
<?php get_footer("contact"); ?>