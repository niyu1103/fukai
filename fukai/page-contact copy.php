<?php get_header(); ?>

<main class="p-contact">
  <section>
    <div class="p-mainvisual">
      <div class="p-contact__hero">
        <div class="c-hd__img">
          <h1 class="c-hd__01">
								お問い合わせ<span class="c-hd__01--EN"
									>Contact us</span
								>
							</h1>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="l-contents">
      <form method="POST" class="p-contact__form">
        <div>
          <dl class="p-contact__form--item">
            <dt class="p-contact__form--label-tit">
              <label for="name">お名前</label>
            </dt>
            <dd class="p-contact__form--inputs-box">
              <input id="name" class="p-contact__form--inputs" type="text" name="name" placeholder="入力してください" />
            </dd>
          </dl>

          <dl class="p-contact__form--item">
            <dt class="p-contact__form--label-tit">
              ご連絡について
            </dt>
            <dd class="p-contact__form--inputs-box">
              <span class="p-contact__form--radio">
                <input id="request-tel" class="p-form__radio-input" type="radio" name="request" value="電話で折り返してほしい" />
                <label for="request-tel">電話で折り返してほしい</label>
              </span>
              <span class="p-contact__form--radio">
                <input id="request-mail" class="p-form__radio-input" type="radio" name="request" value="メールで折り返してほしい"
                  checked />
                <label for="request-mail">メールで折り返してほしい</label>
              </span>
            </dd>
          </dl>

          <dl class="p-contact__form--item p-form__mail">
            <dt class="p-contact__form--label-tit">
              <label for="name">メールアドレス</label>
            </dt>
            <dd class="p-contact__form--inputs-box">
              <input class="p-contact__form--inputs" type="email" name="email" placeholder="入力してください" />
            </dd>
          </dl>

          <dl class="p-contact__form--item">
            <dt class="p-contact__form--label-tit">
              <label class=" p-contact__form--label-tit" for="type">お問い合わせ種類</label>
            </dt>
            <dd class="p-contact__form--inputs-box">
              <div class="p-contact__form--select-box">
                <select name="type" id="type">
                  <option value="お問い合わせ種類１">お問い合わせ種類１</option>
                  <option value="お問い合わせ種類２">お問い合わせ種類２</option>
                  <option value="お問い合わせ種類３">お問い合わせ種類３</option>
                  <option value="お問い合わせ種類４">お問い合わせ種類４</option>
                  <option value="お問い合わせ種類５">お問い合わせ種類５</option>
                </select>
              </div>
            </dd>
          </dl>

          <dl class="p-contact__form--item">
            <dt class="p-contact__form--label-tit">
              <label class="p-contact__form--label-tit" for="comment">お問い合わせ内容詳細</label>
            </dt>
            <dd class="p-contact__form--inputs-box">
              <textarea id="comment" class="p-contact__form--inputs" name="comment" rows="5" cols="50"></textarea>
            </dd>
          </dl>

          <dl class="p-contact__form--item">
            <dt class="p-contact__form--label-tit"></dt>
            <dd class="p-contact__form--inputs-box p-form__check">
              <label>
                <input id="policy" class="p-contact__form--check" type="checkbox" name="policy" value="プライバシーポリシーに同意" />
                <span class="p-form__check--port"></span>
              </label>
              <span class="p-form__policy-box">
                <a class="p-form__policy" href="<?php echo home_url(); ?>">プライバシーポリシーに</a>同意
              </span>
            </dd>
          </dl>

          <dl class="p-contact__form--item p-form__btn">
            <dt class="p-contact__form--label-tit"></dt>
            <dd class="p-contact__form--inputs-box p-contact__form--submit">
              <input type="submit" value="確認する" class="c-btn" />
            </dd>
          </dl>

          <div class="p-contact__form--mes">
            お問い合わせ後、3営業日以内に返信いたします。
          </div>
        </div>
      </form>
    </div>
  </section>

  <div class="c-breadcrumb">
    <ul class="c-breadcrumb__block">
      <li class="c-breadcrumb__list">
        <a class="c-breadcrumb__link" href="<?php echo home_url(); ?>">HOME</a>
      </li>
      <li class="c-breadcrumb__list">
        <a class="c-breadcrumb__link" href="<?php echo home_url(); ?>/contact">お問い合わせ</a>
      </li>
    </ul>
  </div>
</main>

<?php get_footer(); ?>