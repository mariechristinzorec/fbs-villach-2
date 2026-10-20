<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
<section class="band">
  <article class="wrap legal news-artikel projekt-artikel">
    <a class="back" href="<?php echo esc_url( get_post_type_archive_link( 'fbs_projekt' ) ); ?>">← Alle Schülerprojekte</a>
    <span class="meta"><?php echo esc_html( fbs_projekt_art() ); ?> · <?php echo esc_html( get_the_date( 'd.m.Y' ) ); ?></span>
    <h2><?php the_title(); ?></h2>
    <div class="wp-content"><?php the_content(); ?></div>
  </article>
</section>
<?php endwhile; ?>
<?php get_footer(); ?>
