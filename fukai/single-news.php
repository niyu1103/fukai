<?php get_header(); ?>

<main class="p-post p-post–details">
  <section>
    <div class="l-contents">
      <div class="l-wapper-s">

        <?php
            if (have_posts()):
              while (have_posts()): the_post(); ?>
        <?php

     $terms = get_the_terms($post->ID, 'news_cat');
     foreach ($terms as $term) {
     }

      ?>
        <div class="p-post–details__hero">
          <?php if (has_post_thumbnail()) { //アイキャッチ画像を設定している場合
          the_post_thumbnail('single-thum');
      } else { //アイキャッチ画像を設定していない場合?>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/no_image.jpg" />
          <?php } ?>

        </div>
        <div class="p-post__info">
          <span class="c-cat"><?php  echo $term->name;?></span>
          <span class="p-post__date"><?php echo get_post_time('Y.m.d'); ?></span>
        </div>
        <h2 class="p-post__tit"><?php the_title(); ?></h2>
        <div class="p-post__txt">
          <?php the_field('contents'); ?>
        </div>
        <?php
              endwhile;
      endif; ?>

        <div class="p-pagination">
          <div class="p-pagination__links">
            <?php previous_post_link('%link', '<img class="p-pagination__arrow" src="'. get_template_directory_uri().'/assets/img/common/ico_square_prev.svg" alt="前のニュースへ"/>'); ?>
            <?php next_post_link('%link', '<img class="p-pagination__arrow" src="'. get_template_directory_uri().'/assets/img/common/ico_square_next.svg" alt="次のニュースへ"/>'); ?>
          </div>
        </div>
        <div class="p-post–details__btn">
          <a class="c-btn" href="<?php echo home_url(); ?>/news">新着情報一覧に戻る</a>
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
        <a class="c-breadcrumb__link" href="<?php echo home_url(); ?>/news">新着情報一覧</a>
      </li>
      <li class="c-breadcrumb__list">
        <a class="c-breadcrumb__link" href="<?php echo home_url(); ?>/news–details">新着情報各記事</a>
      </li>
    </ul>
  </div>
</main>

<?php get_footer(); ?>
