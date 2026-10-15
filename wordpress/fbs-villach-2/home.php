<?php get_header(); ?>
<section class="band" id="news">
  <div class="wrap">
    <?php fbs_teil( 'ns_zurueck' ); ?>
<?php if ( is_category() ) : ?>
    <div class="sec-head"><p class="eyebrow">Neuigkeiten</p><h2><?php single_cat_title(); ?></h2></div>
<?php else : ?>
    <?php fbs_teil( 'ns_kopf' ); ?>
<?php endif; ?>
    <?php fbs_news_filter(); ?>
    <div class="news-grid">
<?php
$fbs_i = 0;
if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
		fbs_news_card( $fbs_i );
		$fbs_i++;
	endwhile;
else :
	echo '<p>Noch keine News.</p>';
endif;
?>
    </div>
    <?php fbs_news_seiten(); ?>
  </div>
</section>
<?php get_footer(); ?>
