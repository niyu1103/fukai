<?php get_header(); ?>

<main class="p-post">
  <section>
    <div class="p-mainvisual">
      <div class="p-post__hero">
        <div class="c-hd__img">
          <h1 class="c-hd__01">
								お知らせ
                <span class="c-hd__01--EN">news</span>
							</h1>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="l-contents">
      <div class="l-wapper-l p-post__block">
        <div class="p-post__contents">
          <?php
          if (have_posts()):
            while (have_posts()): the_post();
        ?>
          <?php
           $terms = get_the_terms($post->ID, 'news_cat');
     foreach ($terms as $term) {
     }

          ?>
          <div class="p-post__box">
            <div class="p-post__img-box">
              <?php if (has_post_thumbnail()) { //アイキャッチ画像を設定している場合
              the_post_thumbnail('archive-thum');
          } else { //アイキャッチ画像を設定していない場合?>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/no_image.jpg" />
              <?php } ?>
            </div>
            <div class="p-post__txt-box">
              <div class="p-post__info">
                <span class="c-cat"><a href="<?php echo home_url(); ?>/news_cat/<?php echo $term->slug; ?>"><?php echo $term->name; ?></a></span><span
                  class="p-post__date"><?php echo get_post_time('Y.m.d'); ?></span>
              </div>
              <h2 class="p-post__tit">
										<?php the_title(); ?>
									</h2>
              <div class="p-post__txt">
                <?php
                 $contents = get_field('contents');
                 $str = strip_tags($contents);
                  $text = mb_substr($str, 0, 74, 'utf-8');
                  echo $text.'...</p>';
                ?>
              </div>
              <div class="p-post__btn">
                <a class="c-btn" href="<?php the_permalink(); ?>">もっと読む</a>
              </div>
            </div>
          </div>

          <?php endwhile; else : ?>
          <p class="p-post__no">該当記事がありません。</p>
          <?php endif; ?>

          <div class="p-pagination">
            <div class="p-pagination__links">

              <?php
                the_posts_pagination(
                    array(
                  'mid_size' => 1,
                  'prev_text' => '<img class="p-pagination__arrow u-use-pc" src="'. get_template_directory_uri() . '/assets/img/common/ico_square_prev.svg" alt="" /><img class="p-pagination__arrow u-use-sp" src="'. get_template_directory_uri() . '/assets/img/common/ico_prev.svg" alt="" />',
              'next_text' => '<img class="p-pagination__arrow u-use-pc"
                src="'. get_template_directory_uri() . '/assets/img/common/ico_square_next.svg" alt="" /><img class="p-pagination__arrow u-use-sp" src="'. get_template_directory_uri() . '/assets/img/common/ico_next.svg" alt="" />',
              )
                );
              ?>
              <div class="u-use-sp p-pagination__page-count">
                <?php show_page_number(''); ?>/<?php max_show_page_number(''); ?>ページ</div>
            </div>
          </div>
        </div>

        <?php get_sidebar(); ?>

      </div>
    </div>
  </section>

  <div class="c-breadcrumb">
    <ul class="c-breadcrumb__block">
      <li class="c-breadcrumb__list">
        <a class="c-breadcrumb__link" href="<?php echo home_url(); ?>">HOME</a>
      </li>
      <li class="c-breadcrumb__list">
        <a class="c-breadcrumb__link" href="<?php echo home_url(); ?>/news">新着情報一覧</a>
      </li>
    </ul>
  </div>
</main>

<?php get_footer(); ?>
