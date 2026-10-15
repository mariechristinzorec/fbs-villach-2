<?php get_header(); ?>
<section class="band fbs-blocks" id="lehrberufe">
  <div class="wrap">
    <a class="back" href="<?php echo esc_url( home_url( '/' ) ); ?>">← Zur Startseite</a>
<?php
while ( have_posts() ) :
	the_post();
	the_content();
endwhile;
?>
  </div>
</section>
<?php get_footer(); ?>
