<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
<section class="band">
  <div class="wrap legal">
    <h2><?php the_title(); ?></h2>
    <div class="wp-content"><?php the_content(); ?></div>
  </div>
</section>
<?php endwhile; ?>
<?php get_footer(); ?>
