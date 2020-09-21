<?php get_header(); ?>

<main class="p-products p-products-detail">
  <section>
    <div class="l-wapper">
      <div class="l-contents">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <h1 class="c-hd__01-02">
							<span class="c-hd__01-02--ja"><?php the_title(); ?></span>
							<span class="c-hd__01-02--EN">
                 <?php if (get_field('p-title-en')) { ?>
                  <?php the_field('p-title-en'); ?>
                <?php } ?>
              </span>
            </h1>

        <span class="c-hd__01-02--sub">
          <?php if (get_field('p-phrase')) { ?>
          <?php the_field('p-phrase'); ?>
          <?php } ?>
        </span>

        <div class="p-products-detail__block">
          <img class="p-products-detail__img" src="<?php the_field('p-img'); ?>" />
          <div class="p-products-detail__txt-box">
            <p class="p-products-detail__txt">
						<?php if (get_field('p-text')) { ?>
              <?php the_field('p-text'); ?>
              <?php } ?>
            </p>

            <!-- <?php if (get_field('p-info')) { ?>
            <div class="p-products-detail__info">
              金額 / <?php echo get_field('p-info')['p-price']; ?>円<span class="p-products__info--space">内容量
                /<?php echo get_field('p-info')['p-quantity']; ?></span><span class="p-products__info--space">商品番号 /
                <?php echo get_field('p-info')['p-no']; ?></span>
            </div>
            <?php } ?>

            <?php if (get_field('p-info2')) { ?>
            <div class="p-products-detail__info">
              金額 / <?php echo get_field('p-info2')['p-price']; ?>円<span class="p-products__info--space">内容量
                /<?php echo get_field('p-info2')['p-quantity']; ?></span><span class="p-products__info--space">商品番号 /
                <?php echo get_field('p-info2')['p-no']; ?></span>
            </div>
            <?php } ?>

            <?php if (get_field('p-info3')) { ?>
            <div class="p-products-detail__info">
              金額 / <?php echo get_field('p-info3')['p-price']; ?>円<span class="p-products__info--space">内容量
                /<?php echo get_field('p-info3')['p-quantity']; ?></span><span class="p-products__info--space">商品番号 /
                <?php echo get_field('p-info3')['p-no']; ?></span>
            </div>
            <?php } ?> -->

            <div class="p-products-detail__btn-box">

              <!-- <a class="c-btn" href="<?php echo home_url(); ?>">カートに入れる</a> -->
              <a class="c-btn" href="<?php echo home_url(); ?>/flow">ご購入の流れ・注意点</a>
            </div>
          </div>
          <?php the_content(); ?>
        </div>

        <div class="p-products-detail__lead--block">
          <?php if (get_field('p-image')) { ?>
          <img class="p-products-detail__lead--img" src="<?php the_field('p-image'); ?>" alt="" />
          <?php } ?>
          <div class="p-products-detail__lead--txt-box">
            <p class="p-products-detail__lead--txt">
								<?php if (get_field('p-cv')) { ?>
                  <?php the_field('p-cv'); ?>
                <?php } ?>
						</p>
            <p class="p-products-detail__lead--txt-sub">
								<?php if (get_field('p-cv-s')) { ?>
                  <?php the_field('p-cv-s'); ?>
                <?php } ?>
						</p>
          </div>
        </div>

        <div class="l-wapper-s">
          <div class="p-products__block">
            <?php
              $term = get_field('p-cat');
              if ($term):
            ?>
            <h2 class="c-hd__02-02">
									「<?php echo $term; ?>」の他のシリーズ
								</h2>
            <?php endif; ?>
            <ul class="p-products__list">
              <?php
                $posts_p =  get_field('p-other');
                if ($posts_p):
              ?>
              <?php foreach ($posts_p as $val_p): ?>

              <li class="p-products__item">
                <a class="p-products__link" href="<?php echo get_permalink($val_p->ID); ?>">
                  <div class="p-products__img-wrap">
                    <img class="p-products__img" src="<?php the_field('p-img', $val_p->ID); ?>"
                      alt="<?php echo get_the_title($val_p->ID); ?>" />
                  </div>
                  <h4 class="p-products__tit">
											<?php echo get_the_title($val_p->ID); ?>
									</h4>
                </a>
              </li>
              <?php endforeach; ?>
              <?php else: ?>
              <li class="p-products__item">該当商品がありません。</li>
            </ul>
            <?php endif; ?>
          </div>

          <div class="p-products__block">
            <?php
              $term = get_field('p-cat');
              if ($term):
            ?>
            <h2 class="c-hd__02-02">
									「<?php echo $term; ?>」を使用したレシピ
								</h2>
            <?php endif; ?>
            <ul class="p-card-square__block">
              <?php
                $posts_recipe =  get_field('p-recipe');
                // echo '<pre>';
                // var_dump($posts);
                // echo '</pre>';

                if ($posts_recipe):
              ?>
              <?php foreach ($posts_recipe as $val_recipe): ?>
              <li class="p-card-square__list">
                <a class="p-card-square__link" href="<?php echo get_permalink($val_recipe->ID); ?>">
                  <img class="p-card-square__img" src="<?php the_field('image', $val_recipe->ID); ?>"
                    alt="<?php echo get_the_title($val_recipe->ID); ?>" />
                    <div class="p-card-square__tit">
                      <?php echo get_the_title($val_recipe->ID); ?>
                    </div>
                </a>
                <div class="p-card-square__info">
                  <span class="p-card-square__time"><?php the_field('time', $val_recipe->ID); ?></span>
                  <?php
                  $my_cat = get_field('cat', $val_recipe->ID);
                  // var_dump($my_cat);
                  ?>
                  <span class="c-cat"><a href="<?php echo home_url(); ?>/recipe/#<?php echo $my_cat->slug; ?>"><?php echo $my_cat -> name; ?></a></span>
                </div>
              </li>
              <?php endforeach; ?>
              <?php else: ?>
              <li class="p-card-square__list">該当レシピの投稿がありません。</li>
            </ul>
            <?php endif; ?>
          </div>
        </div>
        <?php endwhile; endif; ?>
      </div>
    </div>
  </section>

  <div class="c-breadcrumb">
    <ul class="c-breadcrumb__block">
      <li class="c-breadcrumb__list">
        <a class="c-breadcrumb__link" href="<?php echo home_url(); ?>">HOME</a>
      </li>
      <li class="c-breadcrumb__list">
        <?php
         $page_type = get_field('p-type');
         if ($page_type === 'set:セット'):
        ?>
        <a class="c-breadcrumb__link" href="<?php echo home_url(); ?>/products-set">セット商品一覧</a>
        <?php else:?>
        <a class="c-breadcrumb__link" href="<?php echo home_url(); ?>/products-single">単品商品一覧</a>
        <?php endif;?>
      </li>
      <li class="c-breadcrumb__list">
        各商品ページ
      </li>
    </ul>
  </div>
</main>

<?php get_footer(); ?>
