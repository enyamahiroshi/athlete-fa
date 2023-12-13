<?php
/**
 * From Action
 *
 */
$objApp = new ContactEng();
$objApp->confirm();
add_action('wp_head', function(){
    echo '<style>.u-error{ color: #c80421; display: block;}.u-error__box{ color: #c80421; display: block;}</style>'."\n";
});
?>
<?php get_header("english"); ?>
  <header class="page-header page-header--contact">
    <h1 class="page-header__title" data-sub="">Contact</h1>
  </header>
  <section class="sec sec-medium contact contact-confirm">

    <?php //フォームステップ ?>
    <div class="form-step">
      <div class="form-step__item"><span>1</span>Enter</div>
      <div class="form-step__item current"><span>2</span>Verify</div>
      <div class="form-step__item"><span>3</span>Complete</div>
    </div>

    <?php if (!empty($objApp->exceptionErr)): ?>
        <p class="error-text"><?php echo $objApp->exceptionErr; ?></p>
    <?php endif; ?>

    <p class="form-information">Please confirm the entered infromation</p>

    <?php //フォーム ?>
    <form class="form-contents" method="post" action="?">
      <input type="hidden" name="mode" value="complete">
      <input type="hidden" name="<?php echo TRANSACTION_NAME; ?>" value="<?php echo Sessions::getToken(); ?>">

      <div class="item">
        <div class="item__label">
          <label for="kaishamei" class="item__label__name">Company</label>
        </div>
        <div class="item__input">
          <div class="item__input__block">
            <?php esc_html_e($objApp->arrData['kaishamei'] ?? ''); ?>
          </div>
        </div>
      </div>

      <div class="item">
        <div class="item__label">
          <label for="firstname" class="item__label__name">First name</label>
        </div>
        <div class="item__input">
          <div class="item__input__block">
            <?php esc_html_e($objApp->arrData['firstname'] ?? ''); ?>
          </div>
        </div>
      </div>

      <div class="item">
        <div class="item__label">
          <label for="lastname" class="item__label__name">Last name</label>
        </div>
        <div class="item__input">
          <div class="item__input__block">
            <?php esc_html_e($objApp->arrData['lastname'] ?? ''); ?>
          </div>
        </div>
      </div>

      <div class="item">
        <div class="item__label">
          <label for="mailaddress" class="item__label__name">E-mail</label>
        </div>
        <div class="item__input">
          <div class="item__input__block">
            <?php esc_html_e($objApp->arrData['mailaddress'] ?? ''); ?>
          </div>
        </div>
      </div>

      <div class="item">
        <div class="item__label">
          <label for="telnum" class="item__label__name">Phone number</label>
        </div>
        <div class="item__input">
          <div class="item__input__block">
            <?php esc_html_e($objApp->arrData['telnum'] ?? ''); ?>
          </div>
        </div>
      </div>

      <div class="item">
        <div class="item__label">
          <label for="telnum" class="item__label__name">Country</label>
        </div>
        <div class="item__input">
          <div class="item__input__block">
            <?php esc_html_e($objApp->arrData['country'] ?? ''); ?>
          </div>
        </div>
      </div>

      <div class="item">
        <div class="item__label">
          <label for="zipnum" class="item__label__name">Address</label>
        </div>
        <div class="item__input">
          <div class="item__input__block">
            <?php esc_html_e($objApp->arrData['address'] ?? ''); ?>
          </div>
        </div>
      </div>

      <div class="item">
        <div class="item__label">
          <label for="naiyo" class="item__label__name">Request</label>
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
        <button type="button" class="button button--gray" onclick="location.href='<?php echo home_url(CONTACT_EN_INPUT_SLUG); ?>'">Go back</button>
        <button type="submit" class="button">Submit</button>
      </div>

    </form>
  </section>
<?php get_footer("contact-en"); ?>