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

    <p class="form-information">入力内容をご確認ください。</p>

    <?php //フォーム ?>
    <form class="form-contents">

      <div class="item">
        <div class="item__label">
          <label for="kibojob" class="item__label__name">希望職種</label>
        </div>
        <div class="item__input">
          <div class="item__input__block">
            <input type="text" id="kibojob" name="kibojob" value="装置開発" readonly class="size-wide">
          </div>
        </div>
      </div>

      <div class="item">
        <div class="item__label">
          <label for="onamae" class="item__label__name">お名前</label>
        </div>
        <div class="item__input">
          <div class="item__input__block">
            <input type="text" id="onamae" name="onamae" value="山田太郎" readonly class="size-wide">
          </div>
        </div>
      </div>

      <div class="item">
        <div class="item__label">
          <label for="furigana" class="item__label__name">ふりがな</label>
        </div>
        <div class="item__input">
          <div class="item__input__block">
            <input type="text" id="furigana" name="furigana" value="やまだたろう" readonly class="size-wide">
          </div>
        </div>
      </div>

      <div class="item">
        <div class="item__label">
          <label for="mailaddress" class="item__label__name">メールアドレス</label>
        </div>
        <div class="item__input">
          <div class="item__input__block">
            <input type="email" id="mailaddress" name="mailaddress" value="example@example.com" readonly class="size-wide">
          </div>
        </div>
      </div>

      <div class="item">
        <div class="item__label">
          <label for="telnum" class="item__label__name">電話番号</label>
        </div>
        <div class="item__input">
          <div class="item__input__block">
            <input type="tel" id="telnum" name="telnum" value="0266-53-3369" readonly class="size-wide">
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
            <input type="text" id="zipnum" name="zipnum" value="392-0012" readonly class="size-small p-postal-code">
          </div>
          <div class="item__input__block">
            <input type="text" id="address" name="address" value="長野県諏訪市四賀2970-1" readonly class="size-wide p-region p-locality p-street-address p-extended-address">
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
            <span class="custom-file-selected-file">examplerireki.pdf</span>
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
            <span class="custom-file-selected-file">examplekeireki.pdf</span>
          </div>
        </div>
      </div>

      <div class="item">
        <div class="item__label">
          <label for="naiyo" class="item__label__name">ご相談内容</label>
        </div>
        <div class="item__input">
          <div class="item__input__block">
            <div id="naiyo" name="naiyo" class="size-wide">テキストが入ります。このテキストはダミーです。テキストが入ります。このテキストはダミーです。テキストが入ります。このテキストはダミーです。テキストが入ります。このテキストはダミーです。テキストが入ります。このテキストはダミーです。テキストが入ります。このテキストはダミーです。テキストが入ります。このテキストはダミーです。テキストが入ります。このテキストはダミーです。テキストが入ります。このテキストはダミーです。</div>
          </div>
        </div>
      </div>

      <div class="button-wrap">
        <button type="button" class="button button--gray">入力画面へ戻る</button>
        <button type="submit" class="button">送信</button>
      </div>

    </form>
  </section>
<?php get_footer("contact"); ?>