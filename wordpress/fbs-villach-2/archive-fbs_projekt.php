<?php get_header(); ?>
<section class="band" id="projekte">
  <div class="wrap">
    <?php fbs_teil( 'pr_zurueck' ); ?>
    <?php fbs_teil( 'pr_kopf' ); ?>
    <div class="news-grid">
<?php
$fbs_i = 0;
if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
		fbs_projekt_karte( $fbs_i );
		$fbs_i++;
	endwhile;
endif;
?>
    </div>
<?php if ( ! $fbs_i ) { fbs_teil( 'pr_leer' ); } ?>
    <?php fbs_news_seiten(); ?>
  </div>
</section>
<?php get_footer(); ?>
