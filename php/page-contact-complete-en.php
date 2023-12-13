<?php
/**
 * From Action
 *
 */
$objApp = new ContactEng();
$objApp->thanks();
?>
<?php get_header("english"); ?>
  <header class="page-header page-header--contact">
    <h1 class="page-header__title" data-sub="">Contact</h1>
  </header>
  <section class="sec sec-medium contact contact-complete">

    <?php //フォームステップ ?>
    <div class="form-step">
      <div class="form-step__item"><span>1</span>Enter</div>
      <div class="form-step__item"><span>2</span>Verify</div>
      <div class="form-step__item current"><span>3</span>Complete</div>
    </div>

    <p class="form-complete-message"><strong>Thank you for your inquiry</strong></p>
    <p class="form-complete-message">We will respond to you as soon as possible.<br>If you do not receive a response within three business days, please do not hesitate to contact us again.</p>
    <div class="button-wrap">
      <a href="<?php echo esc_url(home_url()); ?>/en/" class="button-r-link-large button-circle-ani">
        Go back to HOME
        <span class="svg-area">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" class="circle-ani">
            <circle cx="50%" cy="50%" r="28" class="circle-ani">
          </circle></svg>
        </span>
      </a>
    </div>

  </section>
<?php get_footer("contact-en"); ?>