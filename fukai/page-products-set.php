<?php get_header(); ?>

<main class="p-products">
  <section>
    <div class="p-mainvisual">
      <div class="p-products__hero">
        <div class="c-hd__img">
          <h1 class="c-hd__01">
								セット商品のご紹介<span class="c-hd__01--EN"
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
              <a class="c-btn" href="#yakisoba">焼きそば醤油</a>
            </li>
            <li class="p-products__nav-item">
              <a class="c-btn" href="#yakiniku">焼肉のたれ</a>
            </li>
            <li class="p-products__nav-item">
              <a class="c-btn" href="#jinkichi">甚吉袋</a>
            </li>
            <li class="p-products__nav-item">
              <a class="c-btn" href="#other">その他</a>
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
            <?php
                $args = array(
                  'posts_per_page' => -1,
                  'meta_query' => array(
                        'relation' => 'AND',
                        array(
                            'key'     => 'p-type',
                            'value'   => 'set',
                            'compare' => 'LIKE',
                        ),
                        array(
                            'key'     => 'p-cat',
                            'value'    => 'ヤマホ醤油',
                             'compare' => 'LIKE',
                        ),
                  ),
              );

          $my_query = new WP_Query($args);
          if ($my_query->have_posts()) : while ($my_query->have_posts()) : $my_query->the_post();
          ?>

            <li class="p-products__item">
              <a class="p-products__link" href="<?php the_permalink(); ?>">
                <div class="p-products__img-wrap">
                  <img class="p-products__img" src="<?php the_field('p-img'); ?>" alt="" />
                </div>
                <h4 class="p-products__tit">
											<?php the_title(); ?>
										</h4>
              </a>
            </li>

            <?php endwhile;?>
            <?php else: ?>
            <li class="p-products__item">該当商品がありません。</li>
            <?php endif; wp_reset_postdata(); ?>
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

            <?php
                $args = array(
                  'posts_per_page' => -1,
                  'meta_query' => array(
                        'relation' => 'AND',
                        array(
                            'key'     => 'p-type',
                            'value'   => 'set',
                            'compare' => 'LIKE',
                        ),
                        array(
                            'key'     => 'p-cat',
                            'value'    => 'たまり漬け',
                             'compare' => 'LIKE',
                        ),
                  ),
              );

          $my_query = new WP_Query($args);
          if ($my_query->have_posts()) : while ($my_query->have_posts()) : $my_query->the_post();
          ?>

            <li class="p-products__item">
              <a class="p-products__link" href="<?php the_permalink(); ?>">
                <div class="p-products__img-wrap">
                  <img class="p-products__img" src="<?php the_field('p-img'); ?>" alt="" />
                </div>
                <h4 class="p-products__tit">
											<?php the_title(); ?>
										</h4>
              </a>
            </li>
            <?php endwhile;?>
            <?php else: ?>
            <li class="p-products__item">該当商品がありません。</li>
            <?php endif; wp_reset_postdata(); ?>
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
            <?php
                $args = array(
                  'posts_per_page' => -1,
                  'meta_query' => array(
                        'relation' => 'AND',
                        array(
                            'key'     => 'p-type',
                            'value'   => 'set',
                            'compare' => 'LIKE',
                        ),
                        array(
                            'key'     => 'p-cat',
                            'value'    => 'だし醤油',
                             'compare' => 'LIKE',
                        ),
                  ),
              );

          $my_query = new WP_Query($args);
          if ($my_query->have_posts()) : while ($my_query->have_posts()) : $my_query->the_post();
          ?>

            <li class="p-products__item">
              <a class="p-products__link" href="<?php the_permalink(); ?>">
                <div class="p-products__img-wrap">
                  <img class="p-products__img" src="<?php the_field('p-img'); ?>" alt="" />
                </div>
                <h4 class="p-products__tit">
											<?php the_title(); ?>
										</h4>
              </a>
            </li>
            <?php endwhile;?>
            <?php else: ?>
            <li class="p-products__item">該当商品がありません。</li>
            <?php endif; wp_reset_postdata(); ?>
          </ul>
        </div>

        <div id="yakisoba" class="p-products__block">
          <div class="c-hd-03">
            <span class="c-hd-03--en">YAKISOBA SHOYU</span>
            <h3 class="c-hd-03--ja">
									<span class="c-hd-03--round">や</span
									>きそば醤油
								</h3>
          </div>

          <ul class="p-products__list">
            <?php
                $args = array(
                  'posts_per_page' => -1,
                  'meta_query' => array(
                        'relation' => 'AND',
                        array(
                            'key'     => 'p-type',
                            'value'   => 'set',
                            'compare' => 'LIKE',
                        ),
                        array(
                            'key'     => 'p-cat',
                            'value'    => 'やきそば醤油',
                             'compare' => 'LIKE',
                        ),
                  ),
              );

          $my_query = new WP_Query($args);
          if ($my_query->have_posts()) : while ($my_query->have_posts()) : $my_query->the_post();
          ?>

            <li class="p-products__item">
              <a class="p-products__link" href="<?php the_permalink(); ?>">
                <div class="p-products__img-wrap">
                  <img class="p-products__img" src="<?php the_field('p-img'); ?>" alt="" />
                </div>
                <h4 class="p-products__tit">
											<?php the_title(); ?>
										</h4>
              </a>
            </li>
            <?php endwhile;?>
            <?php else: ?>
            <li class="p-products__item">該当商品がありません。</li>
            <?php endif; wp_reset_postdata(); ?>
          </ul>
        </div>

        <div id="jinkichi" class="p-products__block">
          <div class="c-hd-03">
            <span class="c-hd-03--en">JINKICHI-BAG</span>
            <h3 class="c-hd-03--ja">
									<span class="c-hd-03--round">甚</span>吉袋
								</h3>
          </div>

          <ul class="p-products__list">
            <?php
                $args = array(
                  'posts_per_page' => -1,
                  'meta_query' => array(
                        'relation' => 'AND',
                        array(
                            'key'     => 'p-type',
                            'value'   => 'set',
                            'compare' => 'LIKE',
                        ),
                        array(
                            'key'     => 'p-cat',
                            'value'    => '甚吉袋',
                             'compare' => 'LIKE',
                        ),
                  ),
              );

          $my_query = new WP_Query($args);
          if ($my_query->have_posts()) : while ($my_query->have_posts()) : $my_query->the_post();
          ?>

            <li class="p-products__item">
              <a class="p-products__link" href="<?php the_permalink(); ?>">
                <div class="p-products__img-wrap">
                  <img class="p-products__img" src="<?php the_field('p-img'); ?>" alt="" />
                </div>
                <h4 class="p-products__tit">
											<?php the_title(); ?>
										</h4>
              </a>
            </li>
            <?php endwhile;?>
            <?php else: ?>
            <li class="p-products__item">該当商品がありません。</li>
            <?php endif; wp_reset_postdata(); ?>
          </ul>
        </div>

        <div id="yakiniku" class="p-products__block">
          <div class="c-hd-03">
            <span class="c-hd-03--en">YAKINIKU-SAUCE</span>
            <h3 class="c-hd-03--ja">
									<span class="c-hd-03--round">焼</span
									>肉のたれ
								</h3>
          </div>

          <ul class="p-products__list">
            <?php
                $args = array(
                  'posts_per_page' => -1,
                  'meta_query' => array(
                        'relation' => 'AND',
                        array(
                            'key'     => 'p-type',
                            'value'   => 'set',
                            'compare' => 'LIKE',
                        ),
                        array(
                            'key'     => 'p-cat',
                            'value'    => '焼肉のたれ',
                             'compare' => 'LIKE',
                        ),
                  ),
              );

          $my_query = new WP_Query($args);
          if ($my_query->have_posts()) : while ($my_query->have_posts()) : $my_query->the_post();
          ?>

            <li class="p-products__item">
              <a class="p-products__link" href="<?php the_permalink(); ?>">
                <div class="p-products__img-wrap">
                  <img class="p-products__img" src="<?php the_field('p-img'); ?>" alt="" />
                </div>
                <h4 class="p-products__tit">
											<?php the_title(); ?>
										</h4>
              </a>
            </li>
            <?php endwhile;?>
            <?php else: ?>
            <li class="p-products__item">該当商品がありません。</li>
            <?php endif; wp_reset_postdata(); ?>
          </ul>
        </div>

        <div id="other" class="p-products__block">
          <div class="c-hd-03">
            <span class="c-hd-03--en">OTHERS</span>
            <h3 class="c-hd-03--ja">
									<span class="c-hd-03--round">そ</span>の他
								</h3>
          </div>

          <ul class="p-products__list">
            <?php
                $args = array(
                  'posts_per_page' => -1,
                  'meta_query' => array(
                        'relation' => 'AND',
                        array(
                            'key'     => 'p-type',
                            'value'   => 'set',
                            'compare' => 'LIKE',
                        ),
                        array(
                            'key'     => 'p-cat',
                            'value'    => 'その他',
                             'compare' => 'LIKE',
                        ),
                  ),
              );

          $my_query = new WP_Query($args);
          if ($my_query->have_posts()) : while ($my_query->have_posts()) : $my_query->the_post();
          ?>

            <li class="p-products__item">
              <a class="p-products__link" href="<?php the_permalink(); ?>">
                <div class="p-products__img-wrap">
                  <img class="p-products__img" src="<?php the_field('p-img'); ?>" alt="" />
                </div>
                <h4 class="p-products__tit">
											<?php the_title(); ?>
										</h4>
              </a>
            </li>
            <?php endwhile;?>
            <?php else: ?>
            <li class="p-products__item">該当商品がありません。</li>
            <?php endif; wp_reset_postdata(); ?>
          </ul>
        </div>
        <div class="p-products__block p-products__cv-hd u-products__set">
          <a class="p-products__cv-link" href="<?php echo home_url(); ?>/products-single">
            <h3 class="p-products__cv-tit">伝統のヤマホ醤油から、<br class="u-use-sp">たまり漬け、炊き込みご飯まで。<br>全国どこでも、深井醤油の味を、<br class="u-use-sp">ご家庭でお楽しみいただけます。
							</h3>
            <div class="p-products__cv-btn">
              <div class="c-btn__re" href="<?php echo home_url(); ?>/story">ご家庭用単品商品は<br class="u-use-sp">こちら
              </div>
            </div>
          </a>
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
        セット商品一覧
      </li>
    </ul>
  </div>
</main>

<?php get_footer(); ?>
