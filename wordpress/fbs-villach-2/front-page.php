<?php get_header(); ?>
<section class="hero" id="start">
  <div class="wrap">
    <?php fbs_teil( 'hero_text' ); ?>
    <?php fbs_teil( 'hero_links' ); ?>
    <?php fbs_teil( 'hero_bild' ); ?>
  </div>
</section>

<div class="facts">
  <div class="wrap">
<?php for ( $fbs_i = 1; $fbs_i <= 4; $fbs_i++ ) { fbs_teil( 'zahl_' . $fbs_i ); } ?>
  </div>
</div>

<section class="band soft" id="schueler">
  <div class="wrap">
    <?php fbs_teil( 'schueler_kopf' ); ?>
    <div class="tiles">
<?php for ( $fbs_i = 1; $fbs_i <= 9; $fbs_i++ ) { fbs_teil( 'kachel_' . $fbs_i ); } ?>
    </div>
    <?php fbs_teil( 'checkliste' ); ?>
  </div>
</section>

<section class="band" id="berufe">
  <div class="wrap">
    <?php fbs_teil( 'berufe_kopf' ); ?>
    <div class="teasers">
<?php for ( $fbs_i = 1; $fbs_i <= 6; $fbs_i++ ) { fbs_teil( 'teaser_' . $fbs_i ); } ?>
    </div>
    <?php fbs_teil( 'berufe_knopf' ); ?>
  </div>
</section>

<section class="band soft" id="news">
  <div class="wrap">
    <?php fbs_teil( 'news_kopf' ); ?>
    <?php fbs_teil( 'news_liste' ); ?>
    <div style="margin-top:24px"><?php fbs_teil( 'news_knopf' ); ?></div>
  </div>
</section>

<section class="band" id="team">
  <div class="wrap">
    <?php fbs_teil( 'team_kopf' ); ?>
    <?php fbs_teil( 'leitbild' ); ?>
    <?php echo do_shortcode( '[fbs_leitung]' ); // phpcs:ignore WordPress.Security.EscapeOutput ?>
    <?php fbs_teil( 'team_knopf' ); ?>
  </div>
</section>

<section class="band soft" id="kontakt">
  <div class="wrap">
    <?php fbs_teil( 'kontakt_kopf' ); ?>
    <div class="contact">
<?php for ( $fbs_i = 1; $fbs_i <= 6; $fbs_i++ ) { fbs_teil( 'kontakt_' . $fbs_i ); } ?>
    </div>
  </div>
</section>
<?php get_footer(); ?>
