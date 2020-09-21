<?php get_header(); ?>
<main>
  <div id="is-target" class="p-hero">
    <div class="l-wapper ">
      <h2 class="c-hd__home-hero">変わること 変わらないこと。</h2>
      <p class="c-txt__center--white">
					安政3年の創業以来、時代を超えて所沢の食文化に深く関わってきました。<br />所沢の街並が大きく変わっていく中で、<br />深井醤油の周りだけが、江戸の名残と雰囲気を残しています。
				</p>
      <p class="c-txt__center--white">
					現 五代目社長を先頭に、<br />伝統の味、繊細な感覚を生かした職人技など昔ながらの良さを受け継ぎながらも<br />新しい味、モノ作りにチャレンジしている醤油屋です。
				</p>
      <p class="c-txt__center--white">
					変わっていくこと 変わらずにいること。<br />わたしたちは、そのどちらも大切にしています。
				</p>
      <div class="p-hero__btn">
        <a class="c-btn__re" href="<?php echo home_url(); ?>/about">深井醤油についてもっと知る</a>
      </div>
    </div>
  </div>
  <section>
    <div class="l-contents">
      <div class="l-wapper p-top__news">
        <h2 class="c-hd__02 ">
							お知らせ<span class="c-hd__02--EN">news</span>
						</h2>

        <ul class="p-card__home--news">
          <?php
          $args = array(
              'post_type' => 'news',
              'posts_per_page' => 6
          );
          $the_query = new WP_Query($args);
          if ($the_query->have_posts()) :
          while ($the_query->have_posts()) : $the_query->the_post();
         ?>
          <?php
              $terms = get_the_terms($post->ID, 'news_cat');
              // var_dump($terms);
              foreach ($terms as $term) {
              }
          ?>
          <li class="p-card__list">
            <div class="p-card__sub">
                <span class="c-cat"><a href="<?php echo home_url(); ?>/news_cat/<?php echo $term->slug; ?>"><?php echo $term->name;; ?></a></span>
                <span class="p-card__date"><?php echo get_post_time('Y.m.d'); ?></span>
            </div>
            <a class="p-card__link" href="<?php the_permalink(); ?>">
              <div class="p-card__img--wrap p-card">
                  <?php if (has_post_thumbnail()): ?>
                  <?php the_post_thumbnail('homeNews-thum'); ?>
                  <?php else: ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/no_image.jpg" alt="">
                  <?php endif; ?>
              </div>

              <div class="p-card__txt">
                <?php
                 $contents = get_field('contents');
                 $str = strip_tags($contents);
                  $text = mb_substr($str, 0, 37, 'utf-8');
                  echo $text.'...</p>';
                ?>
              </div>
            </a>
          </li>

          <?php
          endwhile;
          wp_reset_postdata();
          else :
            ?>
          <li class="p-card__list">データがありません。</li>
          <?php
          endif;
          ?>
        </ul>
        <div>
          <a class="c-btn" href="<?php echo home_url(); ?>/news">もっと見る</a>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="p-top__products">
      <div class="p-top__products-hd">
        <div class="c-hd__img">
          <h2 class="c-hd__02 p--re">
								商品のご案内<span class="c-hd__02--EN"
									>products</span
								>
							</h2>
        </div>
      </div>
      <div class="l-contents">
        <div class="l-wapper">
          <ul class="p-top__products-list">
            <li class="p-top__products-item">
              <div class="c-hd-03">
                <span class="c-hd-03--en">
                  YAMAHOSHOYU</span>
                <h3 class="c-hd-03--ja">
											<span class="c-hd-03--round"
												>ヤ</span
											>マホ醤油
										</h3>
              </div>

              <div class="p-top__products-column">
                <div class="p-top__products-txt-box">
                  <p class="p-top__products-txt">
												創業以来の製法と伝統を守りつつ<br class="u-use-pc">新しい技術を取り入れ、<br class="u-use-pc">安政三年からの味と風味を守り続けてきた、<br class="u-use-pc">老舗ならではの味です。
											</p>
                  <a class="c-btn" href="<?php echo home_url(); ?>/products-single/#mayaho">もっと見る</a>
                </div>
                <img class="p-top__products-img"
                  src="<?php echo get_template_directory_uri(); ?>/assets/img/top/kuradashi.jpg" alt="" />
              </div>
            </li>

            <li class="p-top__products-item u-re">
              <div class="c-hd-03">
                <span class="c-hd-03--en">
                  DASHISHOYU</span>
                <h3 class="c-hd-03--ja">
											<span class="c-hd-03--round"
												>だ</span
											>し醤油
										</h3>
              </div>

              <div class="p-top__products-column u-re">
                <div class="p-top__products-txt-box">
                  <p class="p-top__products-txt">
												かつお節、北海道利尻産の一等昆布の<br class="u-use-pc">旨みを絞り出し、ヤマホ醤油と調和させた<br class="u-use-pc">おいしいだし醤油です。
											</p>
                  <a class="c-btn" href="<?php echo home_url(); ?>/products-single/#dashi">もっと見る</a>
                </div>
                <img class="p-top__products-img"
                  src="<?php echo get_template_directory_uri(); ?>/assets/img/top/kastuodashi.jpg" alt="" />
              </div>
            </li>

            <li class="p-top__products-item">
              <div class="c-hd-03">
                <span class="c-hd-03--en">
                  TAMARIZUKE</span>
                <h3 class="c-hd-03--ja">
											<span class="c-hd-03--round"
												>た</span
											>まり漬け
										</h3>
              </div>

              <div class="p-top__products-column">
                <div class="p-top__products-txt-box">
                  <p class="p-top__products-txt">
												野菜を、ヤマホ醤油でじっくりと時間をかけて<br class="u-use-pc">漬け込みました。野菜とヤマホ醤油の旨味とが<br class="u-use-pc">しっかりとからみ合った、<br class="u-use-pc">醤油屋でしか出せない味です。
											</p>
                  <a class="c-btn" href="<?php echo home_url(); ?>/products-single/#tamari">もっと見る</a>
                </div>
                <img class="p-top__products-img"
                  src="<?php echo get_template_directory_uri(); ?>/assets/img/top/kuradashi.jpg" alt="" />
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="p-top__recipes">
      <div class="p-top__recipes-hd">
        <div class="c-hd__img">
          <h2 class="c-hd__02 p--re">
								おすすめレシピ<span class="c-hd__02--EN"
									>recipes</span
								>
							</h2>
        </div>
      </div>

      <div class="l-contents">
        <div class="l-wapper">
          <ul class="p-card-square__block">
            <?php
                $posts_t =  get_field('t-recipe');
                if ($posts_t):
              ?>
            <?php foreach ($posts_t as $val_t): ?>

            <li class="p-card-square__list">
              <a class="p-card-square__link" href="<?php echo get_permalink($val_t->ID); ?>">
                <img class="p-card-square__img" src="<?php echo the_field('image', $val_t->ID); ?>"
                  alt="<?php echo get_the_title($val_t->ID); ?>" />
                <div class="p-card-square__tit">
                  <?php echo get_the_title($val_t->ID); ?>
                </div>
              </a>
              <div>
                <div class="p-card-square__info">
                  <span class="p-card-square__time"><?php the_field('time', $val_t->ID); ?></span>
                  <?php
                      $term_t = get_field('cat', $val_t->ID);
                      // var_dump($term_t);
                    ?>
                  <span class="c-cat"><a href="<?php echo home_url(); ?>/recipe/#<?php echo $term_t->slug; ?>"><?php echo $term_t->name; ?></a></span>
                </div>
              </div>
            </li>
            <?php endforeach; ?>
            <?php else: ?>
            <li class="p-card-no__list">該当レシピの投稿がありません。</li>
            <?php endif; ?>
          </ul>
          <a class="c-btn" href="<?php echo home_url(); ?>/recipe">もっと見る</a>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="p-top__info">
      <div class="p-top__info-hd">
        <div class="c-hd__img">
          <h2 class="c-hd__02 p--re">
								店舗情報<span class="c-hd__02--EN"
									>shop info</span
								>
							</h2>
        </div>
      </div>

      <div class="l-wapper">
        <div class="l-contents">
          <ul class="p-card-shop__block">
            <li class="p-card-shop__box">
              <img class="p-card-shop__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/top/shop.jpg"
                alt="" />
              <div class="p-card-shop__txt">
                <span class="c-cat">直営店</span>
                <dl class="p-card-shop__wrap">
                  <dt class="p-card-shop__tit">
                    所沢本店
                  </dt>
                  <dd class="p-card-shop__info">
                    <span class="p-card-shop__add">埼玉県所沢市有楽町7-5</span>
                    <span class="p-card-shop__tel">0120-46-2015</span>
                  </dd>
                </dl>
                <a class="c-btn" href="<?php echo home_url(); ?>/information">詳細</a>
              </div>
            </li>
            <li class="p-card-shop__box">
              <img class="p-card-shop__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/top/shop.jpg"
                alt="" />
              <div class="p-card-shop__txt">
                <span class="c-cat">直営店</span>
                <dl class="p-card-shop__wrap">
                  <dt class="p-card-shop__tit">
                    所沢本店
                  </dt>
                  <dd class="p-card-shop__info">
                    <span class="p-card-shop__add">埼玉県所沢市有楽町7-5</span>
                    <span class="p-card-shop__tel">0120-46-2015</span>
                  </dd>
                </dl>
                <a class="c-btn" href="<?php echo home_url(); ?>/information">詳細</a>
              </div>
            </li>
            <li class="p-card-shop__box">
              <img class="p-card-shop__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/top/shop.jpg"
                alt="" />
              <div class="p-card-shop__txt">
                <span class="c-cat">直営店</span>
                <dl class="p-card-shop__wrap">
                  <dt class="p-card-shop__tit">
                    所沢本店
                  </dt>
                  <dd class="p-card-shop__info">
                    <span class="p-card-shop__add">埼玉県所沢市有楽町7-5</span>
                    <span class="p-card-shop__tel">0120-46-2015</span>
                  </dd>
                </dl>
                <a class="c-btn" href=".<?php echo home_url(); ?>information">詳細</a>
              </div>
            </li>
            <li class="p-card-shop__box">
              <img class="p-card-shop__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/top/shop.jpg"
                alt="" />
              <div class="p-card-shop__txt">
                <span class="c-cat">直営店</span>
                <dl class="p-card-shop__wrap">
                  <dt class="p-card-shop__tit">
                    所沢本店
                  </dt>
                  <dd class="p-card-shop__info">
                    <span class="p-card-shop__add">埼玉県所沢市有楽町7-5</span>
                    <span class="p-card-shop__tel">0120-46-2015</span>
                  </dd>
                </dl>
                <a class="c-btn" href="<?php echo home_url(); ?>/information">詳細</a>
              </div>
            </li>
          </ul>
        </div>
        <div class="p-top__story-hd">
          <h3 class="p-top__story__tit">
								深井醤油6代目が語る<br class="u-use-sp"><span class="u-use-pc">、</span>深井醤油の深い話
							</h3>
          <div class="p-top__story__btn">
            <a class="c-btn__re" href="<?php echo home_url(); ?>/story">深い話を読む</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="c-breadcrumb">
    <ul class="c-breadcrumb__block">
      <li class="c-breadcrumb__list home">
        <a class="c-breadcrumb__link" href="<?php echo home_url(); ?>">HOME</a>
      </li>
    </ul>
  </div>
</main>

<?php get_footer(); ?>
