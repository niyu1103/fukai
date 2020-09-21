<?php get_header(); ?>

<main class="cart">

  <section>
    <div class="l-wapper">
      <div class="l-contents__cart">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
        <?php endwhile; endif; ?>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>