<?php get_header(); ?>
<section class="hero" id="start">
  <div class="wrap">
    <div>
      <p class="eyebrow">Metall · Elektro · Kfz</p>
      <h1>Lernen, was <span>läuft.</span></h1>
      <p class="hero-lead">Wir sind die Berufsschule für Metall-, Elektro-, Kfz-, Nfz-, Land- und Baumaschinentechnik in Villach. Hier finden Sie alles für Ihren nächsten Lehrgang.</p>
    </div>
    <div class="quick" aria-label="Schnellzugriff">
      <a href="https://www.bs-villach.at/images/stories/fbs2/lehrgangslaufzeiten/lehrgangslaufzeiten.pdf">Wann ist mein Lehrgang? <span class="arr">→</span></a>
      <a href="#schueler">Was bringe ich mit? <span class="arr">→</span></a>
      <a href="https://www.moodle.bs-villach.at">Zu Moodle <span class="arr">→</span></a>
    </div>
    <?php fbs_photo( 'startseite', 'Schüler*innen in der Werkstatt' ); ?>
  </div>
</section>

<div class="facts">
  <div class="wrap">
    <div class="fact"><b>10</b><span>Wochen pro Lehrgang</span></div>
    <div class="fact"><b>9</b><span>Lehrberufe an der FBS 2</span></div>
    <div class="fact"><b><?php echo (int) fbs_team_count( 'lehrer' ); ?></b><span>Lehrer*innen im Team</span></div>
    <div class="fact"><b>Matura</b><span>Lehre mit Matura möglich</span></div>
  </div>
</div>

<section class="band soft" id="schueler">
  <div class="wrap">
    <div class="sec-head">
      <p class="eyebrow">Für Schüler*innen</p>
      <h2>Alles für Ihren Lehrgang</h2>
      <p>Die wichtigsten Unterlagen auf einen Blick. Lesen Sie diese vor dem ersten Schultag.</p>
    </div>
    <div class="tiles">
      <article class="tile">
        <span class="tag">Termine</span>
        <h3>Lehrgangszeiten 2026/27</h3>
        <p>Wann beginnt Ihr Lehrgang? Suchen Sie Ihren Lehrberuf und Ihre Schulstufe in der Liste.</p>
        <a class="go" href="https://www.bs-villach.at/images/stories/fbs2/lehrgangslaufzeiten/lehrgangslaufzeiten.pdf">Lehrgangszeiten (PDF) →</a>
      </article>
      <article class="tile">
        <span class="tag">Wohnen</span>
        <h3>Lehrlingsheim</h3>
        <p>3-Bett-Zimmer mit Dusche und WC, Vollverpflegung. Anreise am Vorabend zwischen 18 und 21 Uhr. Bettwäsche bitte mitbringen.</p>
        <a class="go" href="https://www.bs-villach.at/images/stories/lehrlingsheim/Heimanmeldung_Platzreservierung%20_nderung_Juli_2026.pdf">Heimanmeldung (PDF) →</a>
      </article>
      <article class="tile">
        <span class="tag">Wichtig</span>
        <h3>Fernbleiben vom Unterricht</h3>
        <p>Sie sind krank oder verhindert? Hier steht, wen Sie wann informieren müssen.</p>
        <a class="go" href="https://www.bs-villach.at/images/Einberufungen/Fernbleiben_vom_Unterricht_ab_SJ_2021_22.pdf">Regeln (PDF) →</a>
      </article>
      <article class="tile">
        <span class="tag">Hilfe</span>
        <h3>Schulsozialarbeit</h3>
        <p>Probleme in der Lehre, in der Familie oder mit Geld? Die Schulsozialarbeit hilft vertraulich und kostenlos.</p>
        <a class="go" href="https://www.bs-villach.at/images/schulso/Erreichbarkeit_Schulsozialarbeit_26_27.pdf">Erreichbarkeit (PDF) →</a>
      </article>
      <article class="tile">
        <span class="tag">Lernen</span>
        <h3>Moodle</h3>
        <p>Unterlagen, Aufgaben und Tests für Ihren Unterricht. Ihre Zugangsdaten bekommen Sie am ersten Schultag.</p>
        <a class="go" href="https://www.moodle.bs-villach.at">Moodle öffnen →</a>
      </article>
      <article class="tile">
        <span class="tag">Matura</span>
        <h3>Lehre mit Matura</h3>
        <p>Neben der Lehre zur Berufsreifeprüfung. Termine Herbst 2026: schriftlich 18.09., mündlich 02.10.</p>
        <a class="go" href="https://www.bs-villach.at/lehre-mit-matura">Mehr zur Lehre mit Matura →</a>
      </article>
    </div>
    <div class="checklist">
      <h3>Das bringen Sie am ersten Schultag mit</h3>
      <ul>
        <li>Einberufungsschreiben</li>
        <li>Schreibzeug, Taschenrechner, Mappe</li>
        <li>Arbeitskleidung und Sicherheitsschuhe</li>
        <li>Bettwäsche, wenn Sie im Lehrlingsheim wohnen</li>
      </ul>
    </div>
  </div>
</section>

<section class="band" id="berufe">
  <div class="wrap">
    <div class="sec-head">
      <p class="eyebrow">Ausbildung</p>
      <h2>Unsere Lehrberufe</h2>
      <p>Neun Lehrberufe aus Metall, Elektro und Kfz. Theorie und Praxis in modernen Werkstätten.</p>
    </div>
    <div class="teasers">
      <a class="teaser" href="<?php echo esc_url( fbs_page_url( 'lehrberufe' ) ); ?>"><?php fbs_photo( 'teaser_kfz', 'Kfz-Werkstatt' ); ?><h3>Kraftfahrzeugtechnik</h3><p>Pkw, Lkw, Motorräder und E-Mobilität am eMazda2</p></a>
      <a class="teaser" href="<?php echo esc_url( fbs_page_url( 'lehrberufe' ) ); ?>"><?php fbs_photo( 'teaser_metall', 'Maschinenbau' ); ?><h3>Maschinenbau &amp; Metall</h3><p>Maschinenbau-, Zerspanungs- und Metallbearbeitungstechnik</p></a>
      <a class="teaser" href="<?php echo esc_url( fbs_page_url( 'lehrberufe' ) ); ?>"><?php fbs_photo( 'teaser_elektro', 'Elektro' ); ?><h3>Doppellehre Elektro-Maschinenbau</h3><p>Zwei Lehrberufe in einer Ausbildung</p></a>
    </div>
    <a class="btn" href="<?php echo esc_url( fbs_page_url( 'lehrberufe' ) ); ?>">Alle Lehrberufe ansehen →</a>
  </div>
</section>

<section class="band soft" id="news">
  <div class="wrap">
    <div class="sec-head">
      <p class="eyebrow">Neuigkeiten</p>
      <h2>Was bei uns los ist</h2>
    </div>
    <div class="news">
<?php
$fbs_news = new WP_Query( array( 'posts_per_page' => 3, 'ignore_sticky_posts' => true ) );
$fbs_i    = 0;
if ( $fbs_news->have_posts() ) :
	while ( $fbs_news->have_posts() ) :
		$fbs_news->the_post();
		fbs_news_card( $fbs_i, 0 === $fbs_i );
		$fbs_i++;
	endwhile;
	wp_reset_postdata();
else :
	echo '<p>Noch keine News.</p>';
endif;
?>
    </div>
    <a class="btn" href="<?php echo esc_url( fbs_page_url( 'news' ) ); ?>" style="margin-top:24px">Alle News ansehen →</a>
  </div>
</section>

<section class="band" id="team">
  <div class="wrap">
    <div class="sec-head">
      <p class="eyebrow">Wer wir sind</p>
      <h2>Unser Team</h2>
      <p>Sie haben eine Frage? Das Sekretariat hilft Ihnen weiter oder verbindet Sie mit der richtigen Person.</p>
    </div>
    <div class="lead-team">
<?php foreach ( fbs_team( 'leitung' ) as $fbs_p ) : ?>
      <div class="person"><?php fbs_avatar( $fbs_p ); ?><h3><?php echo esc_html( get_the_title( $fbs_p ) ); ?></h3><span class="role"><?php echo esc_html( get_post_meta( $fbs_p->ID, 'fbs_rolle', true ) ); ?></span><?php $fbs_tel = get_post_meta( $fbs_p->ID, 'fbs_telefon', true ); if ( $fbs_tel ) : ?><span class="tel"><?php echo esc_html( $fbs_tel ); ?></span><?php endif; ?></div>
<?php endforeach; ?>
    </div>
    <a class="btn" href="<?php echo esc_url( fbs_page_url( 'lehrerinnen' ) ); ?>">Alle Lehrer*innen ansehen →</a>
  </div>
</section>

<section class="band soft" id="kontakt">
  <div class="wrap">
    <div class="sec-head">
      <p class="eyebrow">Kontakt</p>
      <h2>So erreichen Sie uns</h2>
    </div>
    <div class="contact">
      <div><h3>Fachberufsschule Villach 2</h3><p>Tiroler Straße 23<br>9500 Villach</p><p style="margin-top:8px"><a href="https://maps.google.com/maps?q=Tiroler+Stra%C3%9Fe+23,+Villach">Anfahrt in Google Maps →</a></p></div>
      <div><h3>Sekretariat</h3><p>Telefon <span class="num">04242 56257-200</span><br>Fax <span class="num">04242 56257-203</span></p></div>
      <div><h3>Lehrlingsheim</h3><p>St. Martiner Straße 13<br>9500 Villach<br>Heimleitung: Ing. Walter Werner, MA BEd</p></div>
    </div>
  </div>
</section>
<?php get_footer(); ?>
