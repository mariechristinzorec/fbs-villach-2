<?php get_header(); ?>
<section class="page band" id="lehrberufe">
  <div class="wrap">
    <?php fbs_teil( 'lb_zurueck' ); ?>
    <?php fbs_teil( 'lb_kopf' ); ?>
    <?php fbs_teil( 'lb_bild' ); ?>
    <div class="jobs">
<?php for ( $fbs_i = 1; $fbs_i <= 15; $fbs_i++ ) { fbs_teil( 'beruf_' . $fbs_i ); } ?>
    </div>
    <?php fbs_teil( 'lb_extra' ); ?>
  </div>
</section>
<?php get_footer(); ?>
