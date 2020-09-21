<?php get_header(); ?>

<main class="p-products">
  <section>
    <div class="p-mainvisual">
      <div class="p-products__hero">
        <div class="c-hd__img">
          <h1 class="c-hd__01">
								商品のご紹介<span class="c-hd__01--EN"
									>products</span
								>
							</h1>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="l-contents">
      <div class="l-wapper">
        <h2 class="c-hd__02-02">セット商品一覧</h2>

        <div class="p-products__nav">
          <ul class="p-products__nav-list">
            <li class="p-products__nav-item">
              <a class="c-btn" href="#yamaho">ヤマホ醤油</a>
            </li>
            <li class="p-products__nav-item">
              <a class="c-btn" href="#tamari">たまり漬け</a>
            </li>
            <li class="p-products__nav-item">
              <a class="c-btn" href="#dashi">だし醤油</a>
            </li>
            <li class="p-products__nav-item">
              <a class="c-btn" href="<?php echo home_url(); ?>">焼きそば醤油</a>
            </li>
            <li class="p-products__nav-item">
              <a class="c-btn" href="<?php echo home_url(); ?>">焼肉のたれ</a>
            </li>
            <li class="p-products__nav-item">
              <a class="c-btn" href="<?php echo home_url(); ?>">甚吉袋</a>
            </li>
            <li class="p-products__nav-item">
              <a class="c-btn" href="<?php echo home_url(); ?>">その他</a>
            </li>
          </ul>
        </div>

        <div id="yamaho" class="p-products__block">
          <div class="c-hd-03">
            <span class="c-hd-03--en">YAMAHO SHOYU</span>
            <h3 class="c-hd-03--ja">
									<span class="c-hd-03--round">ヤ</span
									>マホ醤油
								</h3>
          </div>

          <ul class="p-products__list">
            <li class="p-products__item">
              <a class="p-products__link" href="<?php echo home_url(); ?>/products-detail">
                <div class="p-products__img-wrap">
                  <img class="p-products__img"
                    src="<?php echo get_template_directory_uri(); ?>/assets/img/products/yamaho.jpg" alt="" />
                </div>
                <h4 class="p-products__tit">
											醤油・だし・たまり漬け<br />４点セット
										</h4>
              </a>
            </li>
            <li class="p-products__item">
              <a class="p-products__link" href="<?php echo home_url(); ?>/products-detail">
                <div class="p-products__img-wrap">
                  <img class="p-products__img"
                    src="<?php echo get_template_directory_uri(); ?>/assets/img/products/yamaho.jpg" alt="" />
                </div>
                <h4 class="p-products__tit">
											丸大豆3本セット
										</h4>
              </a>
            </li>
            <li class="p-products__item">
              <a class="p-products__link" href="<?php echo home_url(); ?>">
                <div class="p-products__img-wrap">
                  <img class="p-products__img"
                    src="<?php echo get_template_directory_uri(); ?>/assets/img/products/yamaho.jpg" alt="" />
                </div>
                <h4 class="p-products__tit">
											醤油・だし・たまり漬け<br />7点セット
										</h4>
              </a>
            </li>
            <li class="p-products__item">
              <a class="p-products__link" href="<?php echo home_url(); ?>/products-detail">
                <div class="p-products__img-wrap">
                  <img class="p-products__img"
                    src="<?php echo get_template_directory_uri(); ?>/assets/img/products/yamaho.jpg" alt="" />
                </div>
                <h4 class="p-products__tit">
											つゆ3本セット
										</h4>
              </a>
            </li>
          </ul>
        </div>

        <div id="tamari" class="p-products__block">
          <div class="c-hd-03">
            <span class="c-hd-03--en">TAMARI ZUKE</span>
            <h3 class="c-hd-03--ja">
									<span class="c-hd-03--round">た</span
									>まり漬け
								</h3>
          </div>

          <ul class="p-products__list">
            <li class="p-products__item">
              <a class="p-products__link" href="<?php echo home_url(); ?>/products-detail">
                <div class="p-products__img-wrap">
                  <img class="p-products__img"
                    src="<?php echo get_template_directory_uri(); ?>/assets/img/products/tamari.jpg" alt="" />
                </div>
                <h4 class="p-products__tit">
											たまり漬け10箱セット
										</h4>
              </a>
            </li>
            <li class="p-products__item">
              <a class="p-products__link" href="<?php echo home_url(); ?>/products-detail">
                <div class="p-products__img-wrap">
                  <img class="p-products__img"
                    src="<?php echo get_template_directory_uri(); ?>/assets/img/products/tamari.jpg" alt="" />
                </div>
                <h4 class="p-products__tit">
											たまり漬け6箱セット
										</h4>
              </a>
            </li>
            <li class="p-products__item">
              <a class="p-products__link" href="<?php echo home_url(); ?>/products-detail">
                <div class="p-products__img-wrap">
                  <img class="p-products__img"
                    src="<?php echo get_template_directory_uri(); ?>/assets/img/products/tamari.jpg" alt="" />
                </div>
                <h4 class="p-products__tit">
											たまり漬け4箱セット
										</h4>
              </a>
            </li>
          </ul>
        </div>

        <div id="dashi" class="p-products__block">
          <div class="c-hd-03">
            <span class="c-hd-03--en">DASHI SHOYU</span>
            <h3 class="c-hd-03--ja">
									<span class="c-hd-03--round">だ</span>し醤油
								</h3>
          </div>

          <ul class="p-products__list">
            <li class="p-products__item">
              <a class="p-products__link" href="<?php echo home_url(); ?>">
                <div class="p-products__img-wrap">
                  <img class="p-products__img"
                    src="<?php echo get_template_directory_uri(); ?>/assets/img/products/dashi.jpg" alt="" />
                </div>
                <h4 class="p-products__tit">
											だし・醤油3本セット
										</h4>
              </a>
            </li>
            <li class="p-products__item">
              <a class="p-products__link" href="<?php echo home_url(); ?>">
                <div class="p-products__img-wrap">
                  <img class="p-products__img"
                    src="<?php echo get_template_directory_uri(); ?>/assets/img/products/dashi.jpg" alt="" />
                </div>
                <h4 class="p-products__tit">
											だし3本セット<br />
										</h4>
              </a>
            </li>
            <li class="p-products__item">
              <a class="p-products__link" href="<?php echo home_url(); ?>">
                <div class="p-products__img-wrap">
                  <img class="p-products__img"
                    src="<?php echo get_template_directory_uri(); ?>/assets/img/products/dashi.jpg" alt="" />
                </div>
                <h4 class="p-products__tit">
											醤油・だし5本セット
										</h4>
              </a>
            </li>
            <li class="p-products__item">
              <a class="p-products__link" href="<?php echo home_url(); ?>">
                <div class="p-products__img-wrap">
                  <img class="p-products__img"
                    src="<?php echo get_template_directory_uri(); ?>/assets/img/products/dashi.jpg" alt="" />
                </div>
                <h4 class="p-products__tit">
											そうめんセット
										</h4>
              </a>
            </li>
            <li class="p-products__item">
              <a class="p-products__link" href="<?php echo home_url(); ?>">
                <div class="p-products__img-wrap">
                  <img class="p-products__img"
                    src="<?php echo get_template_directory_uri(); ?>/assets/img/products/dashi.jpg" alt="" />
                </div>
                <h4 class="p-products__tit">
											夏季限定5点セット
										</h4>
              </a>
            </li>
          </ul>
        </div>

        <div id="set" class="p-products__block">
          <div class="c-hd-03">
            <span class="c-hd-03--en">COMBINATION</span>
            <h3 class="c-hd-03--ja">
									<span class="c-hd-03--round">組</span
									>み合わせ
								</h3>
          </div>

          <ul class="p-products__list">
            <li class="p-products__item">
              <a class="p-products__link" href="<?php echo home_url(); ?>">
                <div class="p-products__img-wrap">
                  <img class="p-products__img"
                    src="<?php echo get_template_directory_uri(); ?>/assets/img/products/dashi.jpg" alt="" />
                </div>
                <h4 class="p-products__tit">
											たまり漬け・醤油・だしセット<span
												class="p-products__tit--sub"
												>大根・きゅうり・なす・たけのこ）</span
											>
										</h4>
              </a>
            </li>
            <li class="p-products__item">
              <a class="p-products__link" href="<?php echo home_url(); ?>">
                <div class="p-products__img-wrap">
                  <img class="p-products__img"
                    src="<?php echo get_template_directory_uri(); ?>/assets/img/products/dashi.jpg" alt="" />
                </div>
                <h4 class="p-products__tit">
											ミニ甚吉袋 小瓶2本セット
										</h4>
              </a>
            </li>
            <li class="p-products__item">
              <a class="p-products__link" href="<?php echo home_url(); ?>">
                <div class="p-products__img-wrap">
                  <img class="p-products__img"
                    src="<?php echo get_template_directory_uri(); ?>/assets/img/products/dashi.jpg" alt="" />
                </div>
                <h4 class="p-products__tit">
											日本酒・たまり漬けセット
										</h4>
              </a>
            </li>
          </ul>
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
        <a class="c-breadcrumb__link" href="<?php echo home_url(); ?>/products-set">セット商品一覧</a>
      </li>
    </ul>
  </div>
</main>

<?php get_footer(); ?>