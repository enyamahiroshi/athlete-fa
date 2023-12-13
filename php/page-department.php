<?php get_header(); ?>

    <header class="page-header" data-sub="<?php echo $slug = get_post(get_the_ID())->post_name; ?>">
      <h1 class="page-header__title" data-sub="<?php the_title(); ?>"><?php echo $slug = get_post(get_the_ID())->post_name; ?></h1>
    </header>

    <div class="has-column">
      <aside class="side-column">
        <ul class="category-list position-nav js-positionNav">
          <li class="cat-item is-active"><a href="#development">開発部</a></li>
          <li class="cat-item"><a href="#designing">設計部</a></li>
          <li class="cat-item"><a href="#manufacturing">製造部</a></li>
          <li class="cat-item"><a href="#quality-assuarance">品質保証部</a></li>
          <li class="cat-item"><a href="#production-management">生産管理部</a></li>
          <li class="cat-item"><a href="#sales">営業部</a></li>
          <li class="cat-item"><a href="#general-affairs">総務部</a></li>
        </ul>
      </aside><?php //.side-column ?>

      <section class="main-column">

        <?php //開発部 ?>
        <div id="development" class="dept development-dept js-positionNav-target">
          <h2 class="title05">開発部</h2>
          <div class="qa-wrapper">
            <section class="qa">
              <figure class="qa__image">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/department/img-development01.jpg" alt="" width="600" height="402">
              </figure>
              <div class="qa__data">
                <h2 class="qa__data__q" data-sub="Role">部署の役割は何？<span class="line"></span></h2>
                <div class="qa__data__a">
                  <p class="qa__data__a__text">Future Artsの創造を目指し、より良い製品を産み出すための技術開発を行っています。</p>
                </div>
              </div>
            </section>
            <section class="qa">
              <figure class="qa__image">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/department/img-development02.jpg" alt="" width="600" height="402">
              </figure>
              <div class="qa__data">
                <h2 class="qa__data__q" data-sub="Description">どんな仕事をしているの？<span class="line"></span></h2>
                <div class="qa__data__a">
                  <div class="qa__data__a__text">
                    <dl class="align-blocks">
                      <dt>要素開発G</dt>
                      <dd>新技術の立案・評価・検証 / 顧客製品のプロセス評価　など</dd>
                      <dt>制御開発G</dt>
                      <dd>制御、画像処理技術開発 / ソフトウェア設計・開発など</dd>
                      <dt>CAEG</dt>
                      <dd>数値解析業務 / 設計、製造への技術支援　など</dd>
                    </dl>
                  </div>
                </div>
              </div>
            </section>
            <section class="qa --only-text">
              <div class="qa__data">
                <h2 class="qa__data__q" data-sub="Point">採用担当者からのひとこと解説<span class="line"></span></h2>
                <div class="qa__data__a">
                  <p class="qa__data__a__text">開発部では新しい技術の創出、不足技術の充填、現保有技術の改良について3つのグループが連携しながら業務を行っています。<br>新技術の開発やお客様の求めるスペックまで製品の性能を引き上げることは簡単なことではありません。しかし、自分の仕事がお客様から直接評価されますので仕事をする上での大きなモチベーションとなります。<br>また、お客様に近いポジションで仕事をすることになりますので大手企業の開発部門と関わることができ、自らの発想を取り入れながら最先端の製品開発に携わることができます。</p>
                </div>
              </div>
            </section>
          </div>
        </div>

        <?php //設計部 ?>
        <div id="designing" class="dept designing-dept js-positionNav-target">
          <h2 class="title05">設計部</h2>
          <div class="qa-wrapper">
            <section class="qa">
              <figure class="qa__image">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/department/img-designing01.jpg" alt="" width="600" height="402">
              </figure>
              <div class="qa__data">
                <h2 class="qa__data__q" data-sub="Role">部署の役割は何？<span class="line"></span></h2>
                <div class="qa__data__a">
                  <p class="qa__data__a__text">市場のニーズを察知し、新しい技術を学び取り入れながら、装置の根幹となる機械構造体の設計を行っています。</p>
                </div>
              </div>
            </section>
            <section class="qa">
              <figure class="qa__image">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/department/img-designing02.jpg" alt="" width="600" height="402">
              </figure>
              <div class="qa__data">
                <h2 class="qa__data__q" data-sub="Description">どんな仕事をしているの？<span class="line"></span></h2>
                <div class="qa__data__a">
                  <p class="qa__data__a__text">装置の機構、構造設計 / 顧客との製品仕様打合せ / 新規プロセス、機械要素の調査・導入検討 / 見積作成　など</p>
                </div>
              </div>
            </section>
            <section class="qa --only-text">
              <div class="qa__data">
                <h2 class="qa__data__q" data-sub="Point">採用担当者からのひとこと解説<span class="line"></span></h2>
                <div class="qa__data__a">
                  <p class="qa__data__a__text">設計部の仕事は設計業務にとどまりません。<br>案件に対する顧客との仕様打合せや新規プロセス、機械要素の調査、開拓など、お客様や新しい技術と触れ合う機会も多くあります。働く上で幅広い知識が必要となりますが、その分仕事をやり遂げた時の達成感は大きなものです。これまでに身に着けた知識とこれから習得する知識を合わせて装置設計に携わることができます。</p>
                </div>
              </div>
            </section>
          </div>
        </div>

        <?php //製造部 ?>
        <div id="manufacturing" class="dept manufacturing-dept js-positionNav-target">
          <h2 class="title05">製造部</h2>
          <div class="qa-wrapper">
            <section class="qa">
              <figure class="qa__image">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/department/img-manufacturing01.jpg" alt="" width="600" height="402">
              </figure>
              <div class="qa__data">
                <h2 class="qa__data__q" data-sub="Role">部署の役割は何？<span class="line"></span></h2>
                <div class="qa__data__a">
                  <p class="qa__data__a__text">数千点に及ぶ部品から装置をつくりあげ、お客様のもとへ届ける役割を担っています。</p>
                </div>
              </div>
            </section>
            <section class="qa">
              <figure class="qa__image">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/department/img-manufacturing02.jpg" alt="" width="600" height="402">
              </figure>
              <div class="qa__data">
                <h2 class="qa__data__q" data-sub="Description">どんな仕事をしているの？<span class="line"></span></h2>
                <div class="qa__data__a">
                  <div class="qa__data__a__text">
                    <dl class="align-blocks">
                      <dt>製造G</dt>
                      <dd>装置組立･調整・出荷 / 納入先でのセットアップ調整 / オペレーション教育　など </dd>
                      <dt>制御G</dt>
                      <dd>電気配線、プログラム作成 / 納入先でのセットアップ調整 /  オペレーション教育　など</dd>
                      <dt>制御設計G</dt>
                      <dd>顧客打合せ（制御仕様） / 見積作成 / 電気設計　など</dd>
                    </dl>
                  </div>
                </div>
              </div>
            </section>
            <section class="qa --only-text">
              <div class="qa__data">
                <h2 class="qa__data__q" data-sub="Point">採用担当者からのひとこと解説<span class="line"></span></h2>
                <div class="qa__data__a">
                  <p class="qa__data__a__text">製造部では数千点に及ぶ部品から自分たちの手で装置を組み上げ、プログラムを作成して動かしてと、ものづくりの醍醐味を味わうことができます。また、それらの装置で製作した部品が普段何気なく手にしているスマホや車の部品として採用されていることも誇りの一つです。アスリートFAではお客様の要望に沿いながら装置を製作するため、常に新鮮な気持ちで製造業務に携わることができます。</p>
                </div>
              </div>
            </section>
          </div>
        </div>

        <?php //品質保証部 ?>
        <div id="quality-assuarance" class="dept quality-assuarance-dept js-positionNav-target">
          <h2 class="title05">品質保証部</h2>
          <div class="qa-wrapper">
            <section class="qa">
              <figure class="qa__image">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/department/img-quality-assuarance01.jpg" alt="" width="600" height="402">
              </figure>
              <div class="qa__data">
                <h2 class="qa__data__q" data-sub="Role">部署の役割は何？<span class="line"></span></h2>
                <div class="qa__data__a">
                  <p class="qa__data__a__text">装置の品質検査、メンテナンスを通して、アスリートFAのブランドイージを守り、高める役割を担っています。</p>
                </div>
              </div>
            </section>
            <section class="qa">
              <figure class="qa__image">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/department/img-quality-assuarance02.jpg" alt="" width="600" height="402">
              </figure>
              <div class="qa__data">
                <h2 class="qa__data__q" data-sub="Description">どんな仕事をしているの？<span class="line"></span></h2>
                <div class="qa__data__a">
                  <p class="qa__data__a__text">装置の出荷前検査 / 品質問題の是正、予防活動 / 出荷後装置のメンテナンス対応 / 顧客情報の収集　など</p>
                </div>
              </div>
            </section>
            <section class="qa --only-text">
              <div class="qa__data">
                <h2 class="qa__data__q" data-sub="Point">採用担当者からのひとこと解説<span class="line"></span></h2>
                <div class="qa__data__a">
                  <p class="qa__data__a__text">品質保証部は業務範囲が広く様々なスキルが求められる職種で、開発、製造、生産などの部署で経験を積んだメンバーで構成されています。製品企画から出荷後のフォローまで、装置が出来上がる一通りの工程に関わることができ、製造のすべてを知ることができます。品質検査による装置完成度の保証、出荷後装置の正常稼働の維持、メンテナンス対応と情報のフィードバック、製品の品質向上等、自社ブランドのイメージを守り、高める業務に携わることができます。</p>
                </div>
              </div>
            </section>
          </div>
        </div>

        <?php //生産管理部 ?>
        <div id="production-management" class="dept production-management-dept js-positionNav-target">
          <h2 class="title05">生産管理部</h2>
          <div class="qa-wrapper">
            <section class="qa">
              <figure class="qa__image">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/department/img-production-management01.jpg" alt="" width="600" height="402">
              </figure>
              <div class="qa__data">
                <h2 class="qa__data__q" data-sub="Role">部署の役割は何？<span class="line"></span></h2>
                <div class="qa__data__a">
                  <p class="qa__data__a__text">装置製作に関わる資材の手配と、製品を予定通り製作するための司令塔の役割を担っています。</p>
                </div>
              </div>
            </section>
            <section class="qa">
              <figure class="qa__image">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/department/img-production-management02.jpg" alt="" width="600" height="402">
              </figure>
              <div class="qa__data">
                <h2 class="qa__data__q" data-sub="Description">どんな仕事をしているの？<span class="line"></span></h2>
                <div class="qa__data__a">
                  <p class="qa__data__a__text">生産計画の立案、日程調整 / 部品手配（納期、価格交渉） / 仕入れ先の開拓、選定 / 仕入れ先評価 / 調達した資材の数量、品質管理 / 資材受入れ、仕分け、引き渡し  など</p>
                </div>
              </div>
            </section>
            <section class="qa --only-text">
              <div class="qa__data">
                <h2 class="qa__data__q" data-sub="Point">採用担当者からのひとこと解説<span class="line"></span></h2>
                <div class="qa__data__a">
                  <p class="qa__data__a__text">生産管理部では資材の調達管理と、装置製作スケジュールの調整を行っています。<br>必要なものが、必要な時に、必要な数だけ、適正な価格で調達できるかが、製品の価格や品質、納期に大きく影響します。その為、直接装置をつくる部署ではありませんが、顧客満足度を左右する重要な役割を担っていると言えます。取引先と良好な関係を保つコミュニケーション能力をはじめ、交渉力や注意力、いざという時の判断力を生かし、製造メーカーの要となる業務に携わることができます。</p>
                </div>
              </div>
            </section>
          </div>
        </div>

        <?php //営業部 ?>
        <div id="sales" class="dept sales-dept js-positionNav-target">
          <h2 class="title05">営業部</h2>
          <div class="qa-wrapper">
            <section class="qa">
              <figure class="qa__image">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/department/img-sales01.jpg" alt="" width="600" height="402">
              </figure>
              <div class="qa__data">
                <h2 class="qa__data__q" data-sub="Role">部署の役割は何？<span class="line"></span></h2>
                <div class="qa__data__a">
                  <p class="qa__data__a__text">世界中のお客様へアスリートFAの製品、技術を届ける役割を担っています。</p>
                </div>
              </div>
            </section>
            <section class="qa">
              <figure class="qa__image">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/department/img-sales02.jpg" alt="" width="600" height="402">
              </figure>
              <div class="qa__data">
                <h2 class="qa__data__q" data-sub="Description">どんな仕事をしているの？<span class="line"></span></h2>
                <div class="qa__data__a">
                  <p class="qa__data__a__text">営業活動（訪問、プレゼン、商談） / 見積書、契約書、請求書の作成 / マーケティング / 資金回収 / 営業事務 / 受注案件の社内登録、製作指示 / 出荷業務（国内、海外輸出）　など</p>
                </div>
              </div>
            </section>
            <section class="qa --only-text">
              <div class="qa__data">
                <h2 class="qa__data__q" data-sub="Point">採用担当者からのひとこと解説<span class="line"></span></h2>
                <div class="qa__data__a">
                  <p class="qa__data__a__text">営業としての喜びは、何といってもお客様に弊社の製品をご発注いただくことです。そのために、世界中のお客様をまわり、高いヒアリング能力でお客様のニーズを引き出します。また、お客様に安心安全に当社製品を使用していただく為のアフターフォローも営業部の重要な役割です。会社の顔としてアスリートFAの製品、技術を世界中に届ける業務に携わることができます。</p>
                </div>
              </div>
            </section>
          </div>
        </div>

        <?php //総務部 ?>
        <div id="general-affairs" class="dept general-affairs-dept js-positionNav-target">
          <h2 class="title05">総務部</h2>
          <div class="qa-wrapper">
            <section class="qa">
              <figure class="qa__image">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/department/img-general-affairs01.jpg" alt="" width="600" height="402">
              </figure>
              <div class="qa__data">
                <h2 class="qa__data__q" data-sub="Role">部署の役割は何？<span class="line"></span></h2>
                <div class="qa__data__a">
                  <p class="qa__data__a__text">会社を構成する、ヒト、モノ、カネ、情報の管理を担っています。</p>
                </div>
              </div>
            </section>
            <section class="qa">
              <figure class="qa__image">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/department/img-general-affairs02.jpg" alt="" width="600" height="402">
              </figure>
              <div class="qa__data">
                <h2 class="qa__data__q" data-sub="Description">どんな仕事をしているの？<span class="line"></span></h2>
                <div class="qa__data__a">
                  <p class="qa__data__a__text">経理業務 / 各種規定、稟議管理業務 / 採用、人材育成、労務管理等の人事業務 / システム・インフラの構築・運用・保守 / 出張管理業務 / 各種オフィスサービス業務 / 危機管理 / セキュリティ管理　など</p>
                </div>
              </div>
            </section>
            <section class="qa --only-text">
              <div class="qa__data">
                <h2 class="qa__data__q" data-sub="Point">採用担当者からのひとこと解説<span class="line"></span></h2>
                <div class="qa__data__a">
                  <p class="qa__data__a__text">経理、人事、システム・インフラ管理をはじめ、電話対応や来客対応などの各種オフィスサービス、出張管理、社員の御用聞きなど、総務部の業務は多岐にわたります。会社の経営を円滑にすること、社員が働きやすい環境を整えることを目標に、会社全体の幅広い業務に携わることができます。</p>
                </div>
              </div>
            </section>
          </div>
        </div>

        <div class="button-wrap --list">
          <a href="<?php echo esc_url(home_url()); ?>/recruit/new-graduates/" class="button-r-link-large button-circle-ani">
            <span>新卒採用ページへ戻る</span>
            <span class="svg-area">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" class="circle-ani">
                <circle cx="50%" cy="50%" r="28" class="circle-ani">
              </svg>
            </span>
          </a>
          <a href="<?php echo esc_url(home_url()); ?>/recruit/career/" class="button-r-link-large button-circle-ani">
            <span>キャリア採用ページへ戻る</span>
            <span class="svg-area">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" class="circle-ani">
                <circle cx="50%" cy="50%" r="28" class="circle-ani">
              </svg>
            </span>
          </a>
        </div>
      </section><?php //.main-column ?>
    </div><?php //.has-column ?>
<?php get_footer("recruit"); ?>