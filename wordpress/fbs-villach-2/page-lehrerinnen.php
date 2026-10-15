<?php get_header(); ?>
<?php $fbs_lehrer = fbs_team( 'lehrer' ); ?>
<section class="band" id="lehrerinnen">
  <div class="wrap">
    <?php fbs_teil( 'le_zurueck' ); ?>
    <?php fbs_teil( 'le_kopf' ); ?>
    <?php fbs_teil( 'le_suche' ); ?>
    <div class="cards" id="teacher-cards">
<?php foreach ( $fbs_lehrer as $fbs_p ) : ?>
      <article class="card"><?php fbs_avatar( $fbs_p, 'avatar sm' ); ?><div><h3><?php echo esc_html( get_the_title( $fbs_p ) ); ?></h3><?php fbs_email_link( $fbs_p ); ?><?php fbs_team_edit_link( $fbs_p ); ?></div></article>
<?php endforeach; ?>
    </div>
    <p class="empty" id="teacher-empty" hidden><?php echo esc_html( fbs_wert( 'le_suche', 'leer' ) ); ?></p>
  </div>
</section>
<?php get_footer(); ?>
