<?php get_header(); ?>
<section class="band" id="news">
  <div class="wrap">
    <a class="back" href="<?php echo esc_url( home_url( '/' ) ); ?>">← Zur Startseite</a>
    <div class="sec-head">
      <p class="eyebrow">Neuigkeiten</p>
      <h2>Alle News</h2>
    </div>
    <div class="news-all">
<?php
$fbs_i = 0;
if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
		fbs_news_card( $fbs_i, false, true );
		$fbs_i++;
	endwhile;
else :
	echo '<p>Noch keine News.</p>';
endif;
?>
    </div>
    <div class="pager"><?php previous_posts_link( '← Neuere News' ); ?> <?php next_posts_link( 'Ältere News →' ); ?></div>
  </div>
</section>
<?php get_footer(); ?>
