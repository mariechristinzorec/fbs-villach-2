<?php get_header(); ?>
<?php $fbs_lehrer = fbs_team( 'lehrer' ); ?>
<section class="band" id="lehrerinnen">
  <div class="wrap">
    <a class="back" href="<?php echo esc_url( home_url( '/#team' ) ); ?>">← Zur Startseite</a>
    <div class="sec-head">
      <p class="eyebrow">Unser Team</p>
      <h2>Lehrer*innen</h2>
      <p>An der FBS Villach 2 unterrichten <?php echo (int) count( $fbs_lehrer ); ?> Lehrer*innen. Suchen Sie nach einem Namen oder Fach.</p>
    </div>
    <label class="search" for="teacher-search"><span>Name oder Fach suchen</span><input id="teacher-search" type="search" placeholder="z. B. Maurer" autocomplete="off"></label>
    <div class="cards" id="teacher-cards">
<?php foreach ( $fbs_lehrer as $fbs_p ) : $fbs_f = get_post_meta( $fbs_p->ID, 'fbs_faecher', true ); ?>
      <article class="card"><?php fbs_avatar( $fbs_p, 'avatar sm' ); ?><div><h3><?php echo esc_html( get_the_title( $fbs_p ) ); ?></h3><p class="subj"><?php echo esc_html( $fbs_f ? $fbs_f : 'Fächer folgen' ); ?></p></div></article>
<?php endforeach; ?>
    </div>
    <p class="empty" id="teacher-empty" hidden>Kein Treffer. Prüfen Sie die Schreibweise.</p>
  </div>
</section>
<?php get_footer(); ?>
