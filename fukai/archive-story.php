<?php get_header(); ?>
<main class="p-post p-story">
  <section>
    <div class="p-mainvisual">
      <div class="p-story__hero">
        <div class="c-hd__img">
          <h1 class="c-hd__01">
								所沢と深井醤油<span class="c-hd__01--EN"
									>Brand story</span
								>
							</h1>

          <p class="p-story__hero--sub">
								江戸末期から所沢で醤油を造ってきた深井醤油の6代目が語る、所沢と醤油の深い縁。<br />醤油へのこだわりとソウルを不定期発信。
							</p>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="l-contents">
      <div class="l-wapper">

        <?php
        $paged = get_query_var('paged') ? get_query_var('paged') : 1;
        $args = array(
          'post_type' => 'story', // 投稿タイプのスラッグを指定
          'paged' => $paged,
          'order' => 'ASC'
        );
        $the_query = new WP_Query($args); if ($the_query->have_posts()):
      ?>
        <?php while ($the_query->have_posts()): $the_query->the_post(); ?>

        <div class="p-post__box">
          <div class="p-post__img-box">
            <?php if (has_post_thumbnail()) { //アイキャッチ画像を設定している場合
          the_post_thumbnail('archive-thum');
      } else { //アイキャッチ画像を設定していない場合?>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/no_image.jpg" />
            <?php } ?>
          </div>
          <div class="p-post__txt-box">
            <h2 class="p-post__tit"><?php the_title(); ?></h2>
            <div class="p-post__txt">
              <?php the_excerpt(); ?>
            </div>
            <div class="p-post__btn">
              <a class="c-btn" href="<?php the_permalink(); ?>">もっと読む</a>
            </div>
          </div>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
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
    </div>
  </section>

  <div class="c-breadcrumb">
    <ul class="c-breadcrumb__block">
      <li class="c-breadcrumb__list">
        <a class="c-breadcrumb__link" href="<?php echo home_url(); ?>">HOME</a>
      </li>
      <li class="c-breadcrumb__list">
        <a class="c-breadcrumb__link" href="<?php echo home_url(); ?>/story">所沢と深井醤油</a>
      </li>
    </ul>
  </div>
</main>

<?php get_footer(); ?>
