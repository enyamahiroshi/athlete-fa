<?php

/**
 * From Action
 *
 */
$objApp = new ContactEng();
$objApp->main();
add_action('wp_head', function () {
    echo '<style>.u-error{ color: #c80421; display: block;}.u-error__box{ color: #c80421; display: block;}</style>' . "\n";
});
?>
<?php get_header("english"); ?>

<header class="page-header page-header--contact">
    <h1 class="page-header__title" data-sub="<?php the_title(); ?>">
        Contact
    </h1>
</header>
<section class="sec sec-medium contact contact-input">
    <p>Please use the form below to send us your requests and inquiries.</p>

    <?php //フォームステップ
    ?>
    <div class="form-step">
        <div class="form-step__item current"><span>1</span>Enter</div>
        <div class="form-step__item"><span>2</span>Verify</div>
        <div class="form-step__item"><span>3</span>Complete</div>
    </div>

    <?php if (!empty($objApp->exceptionErr)) : ?>
        <p class="u-error__box"><?php echo $objApp->exceptionErr; ?></p>
    <?php endif; ?>
    <?php if (isset($objApp->arrErr['g-recaptcha-response'])) : ?>
        <p class="u-error__box"><?php echo $objApp->arrErr["g-recaptcha-response"]; ?></p>
    <?php endif; ?>

    <p class="form-information"><span class="required"></span>is required field</p>

    <?php //フォーム
    ?>
    <script src="<?php echo get_theme_file_uri('assets/js/yubinbango.js'); ?>" charset="UTF-8"></script>
    <form class="form-contents h-adr" method="post" action="?">
        <input type="hidden" name="mode" value="confirm">
        <input type="hidden" name="<?php echo TRANSACTION_NAME; ?>" value="<?php echo Sessions::getToken(); ?>">
        <span class="p-country-name" style="display:none;">Japan</span>

        <div class="item">
            <div class="item__label">
                <label for="kaishamei" class="item__label__name required">Company</label>
            </div>
            <div class="item__input">
                <div class="item__input__block">
                    <input type="text" id="kaishamei" name="kaishamei" placeholder="" class="size-wide" maxlength="50" value="<?php esc_attr_e($objApp->arrData['kaishamei'] ?? ''); ?>">
                </div>
                <?php Utils::printErr($objApp->arrErr['kaishamei'] ?? ''); ?>
            </div>
        </div>

        <div class="item">
            <div class="item__label">
                <label for="firstname" class="item__label__name required">First name</label>
            </div>
            <div class="item__input">
                <div class="item__input__block">
                    <input type="text" id="firstname" name="firstname" placeholder="" class="size-wide" maxlength="50" value="<?php esc_attr_e($objApp->arrData['firstname'] ?? ''); ?>">
                </div>
                <?php Utils::printErr($objApp->arrErr['firstname'] ?? ''); ?>
            </div>
        </div>

        <div class="item">
            <div class="item__label">
                <label for="lastname" class="item__label__name required">Last name</label>
            </div>
            <div class="item__input">
                <div class="item__input__block">
                    <input type="text" id="lastname" name="lastname" placeholder="" class="size-wide" maxlength="50" value="<?php esc_attr_e($objApp->arrData['lastname'] ?? ''); ?>">
                </div>
                <?php Utils::printErr($objApp->arrErr['lastname'] ?? ''); ?>
            </div>
        </div>

        <div class="item">
            <div class="item__label">
                <label for="mailaddress" class="item__label__name required">E-mail</label>
            </div>
            <div class="item__input">
                <div class="item__input__block">
                    <input type="email" id="mailaddress" name="mailaddress" placeholder="" class="size-wide" maxlength="250" value="<?php esc_attr_e($objApp->arrData['mailaddress'] ?? ''); ?>">
                </div>
                <?php Utils::printErr($objApp->arrErr['mailaddress'] ?? ''); ?>
            </div>
        </div>

        <div class="item">
            <div class="item__label">
                <label for="telnum" class="item__label__name required">Phone number</label>
            </div>
            <div class="item__input">
                <div class="item__input__block">
                    <input type="tel" id="telnum" name="telnum" placeholder="ex) +81-266-53-3369" class="size-wide" maxlength="20" value="<?php esc_attr_e($objApp->arrData['telnum'] ?? ''); ?>">
                </div>
                <?php Utils::printErr($objApp->arrErr['telnum'] ?? ''); ?>
            </div>
        </div>

        <div class="item">
            <div class="item__label">
                <label for="zipnum" class="item__label__name">Country</label>
            </div>
            <div class="item__input">
                <div class="item__input__block">
                    <input type="text" id="country" name="country" placeholder="ex) Japan" class="size-wide" maxlength="50" value="<?php esc_attr_e($objApp->arrData['country'] ?? ''); ?>">
                </div>
                <?php Utils::printErr($objApp->arrErr['country'] ?? ''); ?>
            </div>
        </div>

        <div class="item">
            <div class="item__label">
                <label for="zipnum" class="item__label__name">Address</label>
            </div>
            <div class="item__input">
                <div class="item__input__block">
                    <input type="text" id="address" name="address" placeholder="ex) 2970-1 shiga, suwa-shi, nagano 392-0012" class="size-wide" maxlength="200" value="<?php esc_attr_e($objApp->arrData['address'] ?? ''); ?>">
                </div>
                <?php Utils::printErr($objApp->arrErr['address'] ?? ''); ?>
            </div>
        </div>

        <div class="item">
            <div class="item__label">
                <label for="naiyo" class="item__label__name required">Request</label>
            </div>
            <div class="item__input">
                <div class="item__input__block">
                    <textarea id="naiyo" name="naiyo" placeholder="" class="size-wide" maxlength="3000"><?php esc_attr_e($objApp->arrData['naiyo'] ?? ''); ?></textarea>
                </div>
                <?php Utils::printErr($objApp->arrErr['naiyo'] ?? ''); ?>
            </div>
        </div>

        <div class="item item--privacy_policy">
            <div class="item__label">
                <div class="item__label__name required">About provacu policy</div>
            </div>
            <div class="item__input">
                <div class="include-privacy_policy">
                    <div class="inner">
                        <h2>Privacy Policy</h2>
                        <dl class="ordered-list">
                            <dt>Definition of Personal Information</dt>
                            <dd>
                                <p>In this Policy, "personal information" refers to information about a living individual, including but not limited to, name, date of birth, gender, telephone number, email address, workplace, and any other information that can identify a specific individual.</p>
                            </dd>
                            <dt>Method of Personal Information Acquisition</dt>
                            <dd>
                                <p>When users use the inquiry form or entry form, the Company will collect the following information. The collection and use of personal information by the Company are based on the voluntary provision by the user, and the user is considered to have consented to the use of the provided personal information in accordance with this policy.<br>
                                    Inquiry form: Company name, name of person, email address, telephone number<br>
                                    Entry form: Name, email address, telephone number, information provided in the resume and curriculum vitae</p>
                            </dd>
                            <dt>Purpose of Personal Information Use</dt>
                            <dd>
                                <p>The Company will use the personal information obtained from users for the following purposes:</p>
                                <ul class="list-disc">
                                    <li>To provide support and assistance for various inquiries from users</li>
                                    <li>To evaluate the eligibility of applicants in the Company's recruitment activities</li>
                                </ul>
                            </dd>
                            <dt>Measures to Safely Manage Personal Information </dt>
                            <dd>
                                <p>The Company will implement necessary and appropriate supervision of employees to ensure the secure management of personal information, aiming to avoid risks such as loss, destruction, alteration, and leakage of personal information.</p>
                            </dd>
                            <dt>Outsourcing and Joint Use of Personal Information</dt>
                            <dd>
                                <p>In the course of performing business activities, such as providing services to users, the Company may disclose some personal information to external contractors. In such cases, appropriate supervision will be conducted to ensure that the external contractors handle personal information appropriately.</p>
                            </dd>
                            <dt>Third-Party Provision of Personal Information</dt>
                            <dd>
                                <p>Unless otherwise specified by laws and guidelines, the Company will not provide personal information to third parties without the user's consent.</p>
                            </dd>
                            <dt>Disclosure and Correction of Retained Personal Information</dt>
                            <dd>
                                <p>When requested by the individual for the disclosure of personal information, the Company will promptly disclose it to the individual. In the case of a request for correction or deletion of provided personal information, the Company will promptly address it after confirming the individual's identity.</p>
                            </dd>
                            <dt>About Cookies</dt>
                            <dd>
                                <p>A cookie is data sent from a web server to a web browser. By referencing cookies, a web server can identify the user's computer, allowing efficient use of the Company's website. The files sent as cookies by the Company's website do not contain information that identifies an individual. It is possible to disable cookies by adjusting your web browser settings.</p>
                            </dd>
                            <dt>Contact for Personal Information Handling</dt>
                            <dd>
                                <p>For questions, uncertainties, or other inquiries regarding the handling of personal information by the Company, please contact us via the inquiry form.</p>
                            </dd>
                            <dt>Establishment and Revision Dates of the Privacy Policy: December 20, 2023</dt>

                            <dt>Disclaimer</dt>
                            <dd>
                                <p>While we strive for the accuracy of the information on our website, the Company assumes no responsibility for any actions taken by users based on the information on the Company's website. The Company disclaims any responsibility for damage incurred by users or damage caused by users to third parties through the use of the Company's website.</p>
                            </dd>
                            <dt>Copyrights and Image Rights</dt>
                            <dd>
                                <p>All content, including text and images, on the Company's website is protected by copyright and image rights. Unauthorized use or reproduction is prohibited.</p>
                            </dd>
                        </dl>
                    </div>
                </div>
                <div class="item__input__block item__input__block--center">
                    <div class="checkbox-field">
                        <label for="agree">
                            <input type="checkbox" id="agree" name="agree" value="1" <?php Utils::checked(1, $objApp->arrData['agree'] ?? ''); ?>>
                            <span class="checkbox-field-text">I have read and accepted the privacy policy</span>
                        </label>
                    </div>
                </div>
                <?php if (isset($objApp->arrErr['agree'])) : ?><span class="u-error" style="text-align: center;"><?php esc_html_e($objApp->arrErr['agree'] ?? ''); ?></span><?php endif; ?>
            </div>
        </div>

        <div class="button-wrap">
            <button type="submit" class="button">Verify entered infromation</button>
            <div id="g-recaptcha-wrapper"></div>
        </div>

    </form>
</section>
<?php add_action('wp_footer', function () { ?>
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
<?php }, 20); ?>
<?php get_footer("contact-en"); ?>