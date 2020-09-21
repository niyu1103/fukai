<?php get_header(); ?>

<main class="p-products p-recipe">
  <section>
    <div class="p-mainvisual">
      <div class="p-recipe__hero">
        <div class="c-hd__img">
          <h1 class="c-hd__01">
								おすすめレシピ<span class="c-hd__01--EN"
									>recipes</span
								>
							</h1>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="l-contents">
      <div class="l-wapper">
        <h2 class="c-hd__02-02">製品から探すレシピ</h2>

        <div class="p-products__nav">
          <ul class="p-products__nav-list">
            <li class="p-products__nav-item">
              <a class="c-btn" href="#yamaho-shoyu">ヤマホ醤油</a>
            </li>
            <li class="p-products__nav-item">
              <a class="c-btn" href="#tamarizuke">たまり漬け</a>
            </li>
            <li class="p-products__nav-item">
              <a class="c-btn" href="#dashi-shoyu">だし醤油</a>
            </li>
            <li class="p-products__nav-item">
              <a class="c-btn" href="#yakisoba-shoyu">焼きそば醤油</a>
            </li>
            <li class="p-products__nav-item">
              <a class="c-btn" href="#yakiniku-sauce">焼肉のたれ</a>
            </li>
          </ul>
        </div>

        <div id="yamaho-shoyu" class="p-products__block">

          <div class="c-hd-03">
            <span class="c-hd-03--en">YAMAHO SHOYU</span>
            <h3 class="c-hd-03--ja">
									<span class="c-hd-03--round">ヤ</span
									>マホ醤油
								</h3>
          </div>

          <ul class="p-card-square__block">
            <?php
              //$argsのプロパティを変えていく
              $args = array(
                  'post_type' => 'recipe',
                  'posts_per_page' => -1,
                  'tax_query' => array(
                        array(
                          'taxonomy' => 'recipe_cat',
                          'field'    => 'slug',
                          'terms'    => 'yamaho-shoyu',
                        ),
                      ),
              );

              $the_query = new WP_Query($args);
              if ($the_query->have_posts()) :
                while ($the_query->have_posts()) : $the_query->the_post();
                ?>

            <li class="p-card-square__list">
              <a class="p-card-square__link" href="<?php the_permalink(); ?>">
                <img class="p-card-square__img" src="<?php echo the_post_thumbnail_url('Recipes-thum'); ?>"
                  alt="<?php the_title(); ?>" />
                <div>
                  <dl>
                    <dt class="p-card-square__tit">
                      <?php the_title(); ?>
                    </dt>
                    <dd class="p-card-square__info">
                      <span class="p-card-square__time"><?php echo get_field('time'); ?></span>
                      <?php
                          $term_recipe = get_field('cat');
                        ?>
                      <span class="c-cat"><?php echo $term_recipe->name; ?></span>
                    </dd>
                  </dl>
                </div>
              </a>
            </li>

            <?php  endwhile;
              wp_reset_postdata();
              else:
          ?>
            <li class="p-card-no__list">該当レシピの投稿がありません。</li>
            <?php endif; ?>

          </ul>

        </div>

        <div id="tamarizuke" class="p-products__block">
          <div class="c-hd-03">
            <span class="c-hd-03--en">TAMARI ZUKE</span>
            <h3 class="c-hd-03--ja">
									<span class="c-hd-03--round">た</span
									>まり漬け
								</h3>
          </div>

          <ul class="p-card-square__block">

            <?php
              //$argsのプロパティを変えていく
              $args = array(
                  'post_type' => 'recipe',
                  'posts_per_page' => -1,
                  'tax_query' => array(
                        array(
                          'taxonomy' => 'recipe_cat',
                          'field'    => 'slug',
                          'terms'    => 'tamarizuke',
                        ),
                      ),
              );

              $the_query = new WP_Query($args);
              if ($the_query->have_posts()) :
                while ($the_query->have_posts()) : $the_query->the_post();
                ?>

            <li class="p-card-square__list">
              <a class="p-card-square__link" href="<?php the_permalink(); ?>">
                <img class="p-card-square__img" src="<?php echo the_post_thumbnail_url('Recipes-thum'); ?>"
                  alt="<?php the_title(); ?>" />
                <div>
                  <dl>
                    <dt class="p-card-square__tit">
                      <?php the_title(); ?>
                    </dt>
                    <dd class="p-card-square__info">
                      <span class="p-card-square__time"><?php echo get_field('time'); ?></span>
                      <?php
                          $term_recipe = get_field('cat');
                        ?>
                      <span class="c-cat"><?php echo $term_recipe->name; ?></span>
                    </dd>
                  </dl>
                </div>
              </a>
            </li>

            <?php  endwhile;
              wp_reset_postdata();
              else:
          ?>
            <li class="p-card-no__list">該当レシピの投稿がありません。</li>
            <?php endif; ?>

          </ul>
        </div>

        <div id="dashi-shoyu" class="p-products__block">
          <div class="c-hd-03">
            <span class="c-hd-03--en">DASHI SHOYU</span>
            <h3 class="c-hd-03--ja">
									<span class="c-hd-03--round">だ</span>し醤油
								</h3>
          </div>

          <ul class="p-card-square__block">

            <?php
              //$argsのプロパティを変えていく
              $args = array(
                  'post_type' => 'recipe',
                  'posts_per_page' => -1,
                  'tax_query' => array(
                        array(
                          'taxonomy' => 'recipe_cat',
                          'field'    => 'slug',
                          'terms'    => 'dashi-shoyu',
                        ),
                      ),
              );

              $the_query = new WP_Query($args);
              if ($the_query->have_posts()) :
                while ($the_query->have_posts()) : $the_query->the_post();
                ?>

            <li class="p-card-square__list">
              <a class="p-card-square__link" href="<?php the_permalink(); ?>">
                <img class="p-card-square__img" src="<?php echo the_post_thumbnail_url('Recipes-thum'); ?>"
                  alt="<?php the_title(); ?>" />
                <div>
                  <dl>
                    <dt class="p-card-square__tit">
                      <?php the_title(); ?>
                    </dt>
                    <dd class="p-card-square__info">
                      <span class="p-card-square__time"><?php echo get_field('time'); ?></span>
                      <?php
                          $term_recipe = get_field('cat');
                        ?>
                      <span class="c-cat"><?php echo $term_recipe->name; ?></span>
                    </dd>
                  </dl>
                </div>
              </a>
            </li>

            <?php  endwhile;
              wp_reset_postdata();
              else:
          ?>
            <li class="p-card-no__list">該当レシピの投稿がありません。</li>
            <?php endif; ?>

          </ul>
        </div>

        <div id="yakisoba-shoyu" class="p-products__block">
          <div class="c-hd-03">
            <span class="c-hd-03--en">YAKISOBA SHOYU</span>
            <h3 class="c-hd-03--ja">
									<span class="c-hd-03--round">や</span
									>きそば醤油
								</h3>
          </div>

          <ul class="p-card-square__block">

            <?php
              //$argsのプロパティを変えていく
              $args = array(
                  'post_type' => 'recipe',
                  'posts_per_page' => -1,
                  'tax_query' => array(
                        array(
                          'taxonomy' => 'recipe_cat',
                          'field'    => 'slug',
                          'terms'    => 'yakisoba-shoyu',
                        ),
                      ),
              );

              $the_query = new WP_Query($args);
              if ($the_query->have_posts()) :
                while ($the_query->have_posts()) : $the_query->the_post();
                ?>

            <li class="p-card-square__list">
              <a class="p-card-square__link" href="<?php the_permalink(); ?>">
                <img class="p-card-square__img" src="<?php echo the_post_thumbnail_url('Recipes-thum'); ?>"
                  alt="<?php the_title(); ?>" />
                <div>
                  <dl>
                    <dt class="p-card-square__tit">
                      <?php the_title(); ?>
                    </dt>
                    <dd class="p-card-square__info">
                      <span class="p-card-square__time"><?php echo get_field('time'); ?></span>
                      <?php
                          $term_recipe = get_field('cat');
                        ?>
                      <span class="c-cat"><?php echo $term_recipe->name; ?></span>
                    </dd>
                  </dl>
                </div>
              </a>
            </li>

            <?php  endwhile;
              wp_reset_postdata();
              else:
          ?>
            <li class="p-card-no__list">該当レシピの投稿がありません。</li>
            <?php endif; ?>

          </ul>
        </div>

        <div id="yakiniku-sauce" class="p-products__block">
          <div class="c-hd-03">
            <span class="c-hd-03--en">YAKINIKU-SAUCE</span>
            <h3 class="c-hd-03--ja">
									<span class="c-hd-03--round">焼</span
									>肉のたれ
								</h3>
          </div>

          <ul class="p-card-square__block">

            <?php
              //$argsのプロパティを変えていく
              $args = array(
                  'post_type' => 'recipe',
                  'posts_per_page' => -1,
                  'tax_query' => array(
                        array(
                          'taxonomy' => 'recipe_cat',
                          'field'    => 'slug',
                          'terms'    => 'yakiniku-sauce',
                        ),
                      ),
              );

              $the_query = new WP_Query($args);
              if ($the_query->have_posts()) :
                while ($the_query->have_posts()) : $the_query->the_post();
                ?>

            <li class="p-card-square__list">
              <a class="p-card-square__link" href="<?php the_permalink(); ?>">
                <img class="p-card-square__img" src="<?php echo the_post_thumbnail_url('Recipes-thum'); ?>"
                  alt="<?php the_title(); ?>" />
                <div>
                  <dl>
                    <dt class="p-card-square__tit">
                      <?php the_title(); ?>
                    </dt>
                    <dd class="p-card-square__info">
                      <span class="p-card-square__time"><?php echo get_field('time'); ?></span>
                      <?php
                          $term_recipe = get_field('cat');
                        ?>
                      <span class="c-cat"><?php echo $term_recipe->name; ?></span>
                    </dd>
                  </dl>
                </div>
              </a>
            </li>

            <?php  endwhile;
              wp_reset_postdata();
              else:
          ?>
            <li class="p-card-no__list">該当レシピの投稿がありません。</li>
            <?php endif; ?>

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
        <a class="c-breadcrumb__link" href="<?php echo home_url(); ?>/recipe">おすすめレシピ</a>
      </li>
    </ul>
  </div>
</main>

<?php get_footer(); ?>
