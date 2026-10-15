<?php get_header(); ?>
<section class="band" id="news">
  <div class="wrap">
    <?php fbs_teil( 'ns_zurueck' ); ?>
    <?php fbs_teil( 'ns_kopf' ); ?>
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
