<?php get_header(); ?>
<section class="page band" id="lehrberufe">
  <div class="wrap">
    <a class="back" href="<?php echo esc_url( home_url( '/' ) ); ?>">← Zur Startseite</a>
    <div class="sec-head">
      <p class="eyebrow">Ausbildung</p>
      <h2>Alle Lehrberufe</h2>
      <p>Hier sehen Sie alle Lehrberufe der FBS Villach 2. Wann Ihr Lehrgang beginnt, steht in den <a href="https://www.bs-villach.at/images/stories/fbs2/lehrgangslaufzeiten/lehrgangslaufzeiten.pdf">Lehrgangszeiten (PDF)</a>.</p>
    </div>
    <?php fbs_photo( 'lehrberufe', 'Werkstatt oder Kfz-Labor', 'photo wide-photo' ); ?>
<?php while ( have_posts() ) : the_post(); if ( trim( get_the_content() ) ) : ?><div class="wp-content" style="margin-bottom:24px"><?php the_content(); ?></div><?php endif; endwhile; ?>
    <div class="jobs">
      <div class="job"><span class="no">01</span><div><h3>Kraftfahrzeugtechnik</h3><p>Pkw, Lkw, Busse, Motorräder, computergestützte Diagnose</p></div></div>
      <div class="job"><span class="no">02</span><div><h3>Maschinenbautechnik</h3><p>Maschinenteile fertigen, montieren, warten. 3,5 Jahre</p></div></div>
      <div class="job"><span class="no">03</span><div><h3>Zerspanungstechnik</h3><p>Drehen, Fräsen, CNC, Qualitätskontrolle. 3,5 Jahre</p></div></div>
      <div class="job"><span class="no">04</span><div><h3>Metallbearbeitungstechnik</h3><p>Tore, Geländer, Metallkonstruktionen</p></div></div>
      <div class="job"><span class="no">05</span><div><h3>Prozesstechnik</h3><p>Fertigungsanlagen rüsten und überwachen</p></div></div>
      <div class="job"><span class="no">06</span><div><h3>Land- und Baumaschinentechnik</h3><p>Reparatur und Umbau von Land-, Forst- und Baumaschinen</p></div></div>
      <div class="job"><span class="no">07</span><div><h3>Fahrzeugbautechnik</h3><p>Aufbauten und Anhänger für Nutzfahrzeuge</p></div></div>
      <div class="job"><span class="no">08</span><div><h3>Schmiedetechnik</h3><p>Werkzeuge und Teile aus Eisen und Stahl</p></div></div>
      <div class="job"><span class="no">09</span><div><h3>Vulkanisierung</h3><p>Fahrzeugreifen prüfen und reparieren</p></div></div>
    </div>
    <div class="extra">
      <span class="chip">Doppellehre Elektro-Maschinenbau</span>
      <span class="chip">Lehre mit Matura</span>
    </div>
  </div>
</section>
<?php get_footer(); ?>
