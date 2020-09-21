<?php get_header(); ?>

<main>
  <section>
    <div class="l-contents">
      <div class="l-wapper p-shoppingcart">
        <?php
            if (have_posts()):
              while (have_posts()): the_post(); ?>
        <h2 class="p-post__tit"><?php the_title(); ?></h2>

        <?php the_content(); ?>

        <?php
              endwhile;
      endif; ?>

      </div>
    </div>
  </section>
</main>




<?php get_footer(); ?>