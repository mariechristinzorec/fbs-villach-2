<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); $fbs_aktuell = get_the_ID(); ?>
<section class="band">
  <article class="wrap legal news-artikel">
    <a class="back" href="<?php echo esc_url( fbs_page_url( 'news' ) ); ?>">← Alle News</a>
    <span class="meta"><?php echo esc_html( fbs_category_name() ); ?> · <?php echo esc_html( get_the_date( 'd.m.Y' ) ); ?></span>
    <h2><?php the_title(); ?></h2>
<?php if ( has_post_thumbnail() ) : ?>
    <div class="single-hero"><?php the_post_thumbnail( 'large' ); ?></div>
<?php endif; ?>
<?php if ( trim( wp_strip_all_tags( get_the_content(), true ) ) || has_blocks() ) : ?>
    <div class="wp-content"><?php the_content(); ?></div>
<?php elseif ( has_excerpt() ) : ?>
    <div class="wp-content"><p><?php echo esc_html( get_the_excerpt() ); ?></p></div>
<?php else : ?>
    <p class="empty">Zu dieser News gibt es noch keinen Text.</p>
<?php endif; ?>
  </article>
</section>
<?php endwhile; ?>
<?php
$fbs_mehr = new WP_Query(
	array(
		'posts_per_page'      => 3,
		'post__not_in'        => array( $fbs_aktuell ),
		'ignore_sticky_posts' => true,
	)
);
if ( $fbs_mehr->have_posts() ) :
	?>
<section class="band soft">
  <div class="wrap">
    <div class="sec-head"><p class="eyebrow">Neuigkeiten</p><h2>Weitere News</h2></div>
    <div class="news-grid">
	<?php
	$fbs_i = 0;
	while ( $fbs_mehr->have_posts() ) :
		$fbs_mehr->the_post();
		fbs_news_card( $fbs_i );
		$fbs_i++;
	endwhile;
	wp_reset_postdata();
	?>
    </div>
  </div>
</section>
<?php endif; ?>
<?php get_footer(); ?>
