<?php get_header(); ?>

<main class="p-flow">
  <section>
    <div class="p-mainvisual">
      <div class="p-flow__hero">
        <div class="c-hd__img">
          <h1 class="c-hd__01">
								ご購入の流れ・注意点<span class="c-hd__01--EN"
									>How to order</span
								>
							</h1>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="l-wapper">
      <div class="l-contents">
        <h2 class="c-hd__02-02">
							深井醤油Webサイト<br class="u-use-sp"><span class="u-use-pc"> </span>オンラインショップでのご購入
						</h2>

        <div class="c-step__block">
          <ul class="c-step__list">
            <li class="c-step__item">
              <span class="c-step__num">Step1</span>
              <span class="c-step__txt">ショッピングカートから商品を選び、カートに入れてください。</span>
            </li>
            <li class="c-step__item">
              <span class="c-step__num">Step2</span>
              <span class="c-step__txt">お名前、ご住所、メールアドレス、お電話番号、お支払い方法等必要な項目をご入力
                いただき、「確定」ボタンを押すと注文が確定します。</span>
            </li>
            <li class="c-step__item">
              <span class="c-step__num">Step3</span>
              <span class="c-step__txt">折り返し担当の者からメールにてご連絡を差し上げます。
                決済はそちらから行っていただきます。</span>
            </li>
            <li class="c-step__item">
              <span class="c-step__num">Step4</span>
              <span class="c-step__txt">ご入金から3〜5営業日程度で発送いたします。</span>
            </li>
          </ul>

          <img class="p-flow__map u-use-pc" src="<?php echo get_template_directory_uri(); ?>/assets/img/flow/map.jpg"
            alt="" />
          <div class="p-flow__map--wrap u-use-sp">
            <img class="p-flow__map" src="<?php echo get_template_directory_uri(); ?>/assets/img/flow/sp_map.png"
              alt="" />
          </div>

        </div>

        <div class="p-flow__block">
          <h2 class="c-hd__02-02">お電話でのご購入</h2>

          <p class="p-flow__txt--big">TEL:0120-46-2015</p>
          <p class="p-flow__txt">
								受付時間&nbsp;10時〜19時（留守電の場合はメッセージでご注文も承りますので、内容と折り返しの
								ご連絡先をお残しください）
							</p>
        </div>

        <div class="p-flow__block">
          <h2 class="c-hd__02-02">お支払方法</h2>

          <p class="p-flow__txt">
								下記のいずれかよりお選びくださいませ。
							</p>
          <p class="p-flow__txt">
								ヤマト運輸：代金引換サービスをご利用になれます。ご注文の際にお申し出ください。<br />
								※フォームからもお申し込みできます。
							</p>
          <p class="p-flow__txt">
								郵便振替：ご依頼主の方へ郵便振替用紙を送付いたします。<br />お近くの郵便局にてお支払いくださいませ。<br />※ご注文後、お電話でご確認させていただきます。<br />商品のお引き渡しは、ご注文確認後3日以内に発送いたします。
							</p>
        </div>

        <div class="p-flow__block">
          <h2 class="c-hd__02-02">返品について</h2>

          <p class="p-flow__txt">
								食べる物ですので、申し訳ありませんが返品は受け付けておりません。<br />次の場合に限り、ご返品・お取替をさせていただきます。<br />・不良品<br />・ご注文と異なる商品をお届けした場合（返送料金は当社で負担させていただきます）
							</p>
        </div>
      </div>
    </div>
  </section>

  <div class="c-breadcrumb">
    <ul class="c-breadcrumb__block">
      <li class="c-breadcrumb__list">
        <a class="c-breadcrumb__link" href="<?php echo home_url(); ?>">HOME</a>
      </li>
      <li class="c-breadcrumb__list">
        <a class="c-breadcrumb__link" href="<?php echo home_url(); ?>/products-single">単品商品一覧</a>
      </li>
      <li class="c-breadcrumb__list">
        <a class="c-breadcrumb__link" href="<?php echo home_url(); ?>/products-detail">各商品ページ</a>
      </li>
      <li class="c-breadcrumb__list">
        <a class="c-breadcrumb__link" href="<?php echo home_url(); ?>/flow">ご購入の流れ・注意点</a>
      </li>
    </ul>
  </div>
</main>

<?php get_footer(); ?>