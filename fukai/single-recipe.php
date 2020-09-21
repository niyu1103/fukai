<?php get_header(); ?>

<main class="p-recipe">
  <section>
    <div class="l-wapper">
      <div class="l-contents">
        <h1 class="c-hd__01-02">
							<span class="c-hd__01-02--EN">
                <?php if (get_field('title-en')) { ?>
                  <?php the_field('title-en'); ?>
                <?php } ?>
              </span>
						</h1>

        <div class="p-recipe__main">
          <div class="p-recipe__img-box">
            <?php if (get_field('image')) { ?>
            <img class="p-recipe__img" src="<?php the_field('image'); ?>" alt="" />
            <?php } ?>
          </div>
          <div class="p-recipe__txt-box">
            <h2 class="p-recipe__tit">
								<?php if (get_field('title-ja')) { ?>
                  <?php the_field('title-ja'); ?>
                <?php } ?>
								</h2>
            <div class="p-recipe__txt-sub-tit">
              【材料】
            </div>
            <p class="p-recipe__txt">
							<?php if (get_field('material')) { ?>
                <?php the_field('material'); ?>
              <?php } ?>
								</p>
            <div class="p-recipe__txt-sub-tit">
              【調理時間目安】
            </div>
            <p class="p-recipe__txt">
              <?php if (get_field('time')) { ?>
                  <?php the_field('time'); ?>
                <?php } ?>
            </p>
          </div>
        </div>

        <div class="c-step__block">
          <h3 class="c-step__tit-box">
								<span class="c-step__tit">
                  <?php if (get_field('phrase')) { ?>
                    <?php the_field('phrase'); ?>
                  <?php } ?>
                </span>
							</h3>
          <ul class="c-step__list">
            <?php if (get_field('step1')) { ?>
            <li class="c-step__item">
              <span class="c-step__num">Step1</span>
              <span class="c-step__txt">
                <?php the_field('step1'); ?>
              </span>
            </li>
            <?php } ?>
            <?php if (get_field('step2')) { ?>
            <li class="c-step__item">
              <span class="c-step__num">Step2</span>
              <span class="c-step__txt">
                <?php the_field('step2'); ?>
              </span>
            </li>
            <?php } ?>
            <?php if (get_field('step3')) { ?>
            <li class="c-step__item">
              <span class="c-step__num">Step3</span>
              <span class="c-step__txt">
                <?php the_field('step3'); ?>
              </span>
            </li>
            <?php } ?>
            <?php if (get_field('step4')) { ?>
            <li class="c-step__item">
              <span class="c-step__num">Step4</span>
              <span class="c-step__txt">
                <?php the_field('step4'); ?>
              </span>
            </li>
            <?php } ?>
            <?php if (get_field('step5')) { ?>
            <li class="c-step__item">
              <span class="c-step__num">Step5</span>
              <span class="c-step__txt">
                <?php the_field('step5'); ?>
              </span>
            </li>
            <?php } ?>
          </ul>
          <div class="c-step__caution">
            <span class="c-step__caution--txt">注意事項：<?php if (get_field('notes')) { ?>
              <?php the_field('notes'); ?>
              <?php } ?>
            </span>
          </div>
        </div>

        <div class="l-wapper-s">
          <div class="p-recipe__block">
            <h2 class="c-hd__02-02">
              <?php
                $term = get_field('cat');
                if ($term):
              ?>
                「<?php echo $term->name; ?>」を使った<br>他のレシピ
              <?php endif; ?>
						</h2>
            <ul class="p-card-square__block">
              <?php
                $posts =  get_field('other');
                // echo '<pre>';
                // var_dump($posts);
                // echo '</pre>';

                if ($posts):
              ?>
              <?php foreach ($posts as $val): ?>

              <li class="p-card-square__list">
                <a class="p-card-square__link" href="<?php echo get_permalink($val->ID); ?>">
                  <img class="p-card-square__img" src="<?php the_field('image', $val->ID); ?>"
                    alt="<?php echo get_the_title($val->ID); ?>" />
                  <div>
                    <dl>
                      <dt class="p-card-square__tit">
                        <?php echo get_the_title($val->ID); ?>
                      </dt>
                      <dd class="p-card-square__info">
                        <span class="p-card-square__time"><?php the_field('time', $val->ID); ?></span>
                        <span class="c-cat"><?php  echo $term->name; ?></span>
                      </dd>
                    </dl>
                  </div>
                </a>
              </li>
              <?php endforeach; ?>
              <?php else: ?>
              <li class="p-card-no__list">該当レシピの投稿がありません。</li>
              <?php endif; ?>
            </ul>
          </div>

          <div class="p-recipe__block">
            <h2 class="c-hd__02-02">
									他の人気商品を使った<br class="u-use-pc">レシピ
								</h2>

            <ul class="p-card-square__block">
              <?php
                $posts_popular =  get_field('popular');
                // echo '<pre>';
                // var_dump($posts);
                // echo '</pre>';

                if ($posts_popular):
              ?>
              <?php foreach ($posts_popular as $val_popular): ?>

              <li class="p-card-square__list">
                <a class="p-card-square__link" href="<?php echo get_permalink($val_popular->ID); ?>">
                  <img class="p-card-square__img" src="<?php the_field('image', $val_popular->ID); ?>"
                    alt="<?php echo get_the_title($val_popular->ID); ?>" />
                  <div>
                    <dl>
                      <dt class="p-card-square__tit">
                        <?php echo get_the_title($val_popular->ID); ?>
                      </dt>
                      <dd class="p-card-square__info">
                        <span class="p-card-square__time"><?php the_field('time', $val_popular->ID); ?></span>
                        <?php
                          $term_popular = get_field('cat', $val_popular->ID);
                          // var_dump($term_popular);
                        ?>
                        <span class="c-cat"><?php echo $term_popular->name; ?></span>
                      </dd>
                    </dl>
                  </div>
                </a>
              </li>
              <?php endforeach; ?>
              <?php else: ?>
              <li class="p-card-no__list">該当レシピの投稿がありません。</li>
              <?php endif; ?>
            </ul>
          </div>

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
      <li class="c-breadcrumb__list">
        <a class="c-breadcrumb__link" href="<?php echo home_url(); ?>/recipe–detail">レシピ詳細</a>
      </li>
    </ul>
  </div>
</main>

<?php get_footer(); ?>