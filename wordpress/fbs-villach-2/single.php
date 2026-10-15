<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
<section class="band">
  <div class="wrap legal">
    <a class="back" href="<?php echo esc_url( fbs_page_url( 'news' ) ); ?>">← Alle News</a>
    <span class="meta"><?php echo esc_html( fbs_category_name() ); ?> · <?php echo esc_html( get_the_date( 'd.m.Y' ) ); ?></span>
    <h2><?php the_title(); ?></h2>
<?php if ( has_post_thumbnail() ) : ?>
    <div class="single-hero"><?php the_post_thumbnail( 'large' ); ?></div>
<?php endif; ?>
    <div class="wp-content"><?php the_content(); ?></div>
  </div>
</section>
<?php endwhile; ?>
<?php get_footer(); ?>
