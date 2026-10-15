<?php
/**
 * Bearbeitbare Startinhalte als Blöcke.
 *
 * @package FBS_Villach_2
 */

defined( 'ABSPATH' ) || exit;

/**
 * Block-Vorlagen der Seiten. Platzhalter {{...}} werden beim Anlegen ersetzt.
 *
 * @return array
 */
function fbs_block_vorlagen() {
	return array(
		'start'       => '<!-- wp:group {"tagName":"section","anchor":"start","className":"hero","layout":{"type":"default"}} -->
<section id="start" class="wp-block-group hero"><!-- wp:group {"className":"wrap","layout":{"type":"default"}} -->
<div class="wp-block-group wrap"><!-- wp:group {"className":"hero-text","layout":{"type":"default"}} -->
<div class="wp-block-group hero-text"><!-- wp:paragraph {"className":"eyebrow"} -->
<p class="eyebrow">Metall · Elektro · Kfz</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading">Lernen, was <em>läuft.</em></h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"hero-lead"} -->
<p class="hero-lead">Wir sind die Berufsschule für Metall-, Elektro-, Kfz-, Nfz-, Land- und Baumaschinentechnik in Villach. Hier finden Sie alles für Ihren nächsten Lehrgang.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:buttons {"className":"quick"} -->
<div class="wp-block-buttons quick"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="https://www.bs-villach.at/images/stories/fbs2/lehrgangslaufzeiten/lehrgangslaufzeiten.pdf">Wann ist mein Lehrgang? →</a></div>
<!-- /wp:button --><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#schueler">Was bringe ich mit? →</a></div>
<!-- /wp:button --><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="https://www.moodle.bs-villach.at">Zu Moodle →</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->
<!-- wp:image {"id":{{id:startseite}},"sizeSlug":"full","linkDestination":"none","className":"photo has-img"} -->
<figure class="wp-block-image size-full photo has-img"><img src="{{url:startseite}}" alt="Schüler*innen in der Werkstatt" class="wp-image-{{id:startseite}}"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"className":"facts","layout":{"type":"default"}} -->
<div class="wp-block-group facts"><!-- wp:group {"className":"wrap","layout":{"type":"default"}} -->
<div class="wp-block-group wrap"><!-- wp:group {"className":"fact","layout":{"type":"default"}} -->
<div class="wp-block-group fact"><!-- wp:paragraph {"className":"num"} -->
<p class="num">10</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p>Wochen pro Lehrgang</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"fact","layout":{"type":"default"}} -->
<div class="wp-block-group fact"><!-- wp:paragraph {"className":"num"} -->
<p class="num">9</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p>Lehrberufe an der FBS 2</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"fact","layout":{"type":"default"}} -->
<div class="wp-block-group fact"><!-- wp:paragraph {"className":"num"} -->
<p class="num">39</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p>Lehrer*innen im Team</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"fact","layout":{"type":"default"}} -->
<div class="wp-block-group fact"><!-- wp:paragraph {"className":"num"} -->
<p class="num">Matura</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p>Lehre mit Matura möglich</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","anchor":"schueler","className":"band soft","layout":{"type":"default"}} -->
<section id="schueler" class="wp-block-group band soft"><!-- wp:group {"className":"wrap","layout":{"type":"default"}} -->
<div class="wp-block-group wrap"><!-- wp:group {"className":"sec-head","layout":{"type":"default"}} -->
<div class="wp-block-group sec-head"><!-- wp:paragraph {"className":"eyebrow"} -->
<p class="eyebrow">Für Schüler*innen</p>
<!-- /wp:paragraph -->
<!-- wp:heading -->
<h2 class="wp-block-heading">Alles für Ihren Lehrgang</h2>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>Die wichtigsten Unterlagen auf einen Blick. Lesen Sie diese vor dem ersten Schultag.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"tiles","layout":{"type":"default"}} -->
<div class="wp-block-group tiles"><!-- wp:group {"className":"tile","layout":{"type":"default"}} -->
<div class="wp-block-group tile"><!-- wp:paragraph {"className":"tag"} -->
<p class="tag">Termine</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Lehrgangszeiten 2026/27</h3>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>Wann beginnt Ihr Lehrgang? Suchen Sie Ihren Lehrberuf und Ihre Schulstufe in der Liste.</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"go"} -->
<p class="go"><a href="https://www.bs-villach.at/images/stories/fbs2/lehrgangslaufzeiten/lehrgangslaufzeiten.pdf">Lehrgangszeiten (PDF) →</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"tile","layout":{"type":"default"}} -->
<div class="wp-block-group tile"><!-- wp:paragraph {"className":"tag"} -->
<p class="tag">Wohnen</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Lehrlingsheim</h3>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>3-Bett-Zimmer mit Dusche und WC, Vollverpflegung. Anreise am Vorabend zwischen 18 und 21 Uhr. Bettwäsche bitte mitbringen.</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"go"} -->
<p class="go"><a href="https://www.bs-villach.at/images/stories/lehrlingsheim/Heimanmeldung_Platzreservierung%20_nderung_Juli_2026.pdf">Heimanmeldung (PDF) →</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"tile","layout":{"type":"default"}} -->
<div class="wp-block-group tile"><!-- wp:paragraph {"className":"tag"} -->
<p class="tag">Wichtig</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Fernbleiben vom Unterricht</h3>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>Sie sind krank oder verhindert? Hier steht, wen Sie wann informieren müssen.</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"go"} -->
<p class="go"><a href="https://www.bs-villach.at/images/Einberufungen/Fernbleiben_vom_Unterricht_ab_SJ_2021_22.pdf">Regeln (PDF) →</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"tile","layout":{"type":"default"}} -->
<div class="wp-block-group tile"><!-- wp:paragraph {"className":"tag"} -->
<p class="tag">Hilfe</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Schulsozialarbeit</h3>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>Probleme in der Lehre, in der Familie oder mit Geld? Die Schulsozialarbeit hilft vertraulich und kostenlos.</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"go"} -->
<p class="go"><a href="https://www.bs-villach.at/images/schulso/Erreichbarkeit_Schulsozialarbeit_26_27.pdf">Erreichbarkeit (PDF) →</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"tile","layout":{"type":"default"}} -->
<div class="wp-block-group tile"><!-- wp:paragraph {"className":"tag"} -->
<p class="tag">Lernen</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Moodle</h3>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>Unterlagen, Aufgaben und Tests für Ihren Unterricht. Ihre Zugangsdaten bekommen Sie am ersten Schultag.</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"go"} -->
<p class="go"><a href="https://www.moodle.bs-villach.at">Moodle öffnen →</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"tile","layout":{"type":"default"}} -->
<div class="wp-block-group tile"><!-- wp:paragraph {"className":"tag"} -->
<p class="tag">Matura</p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Lehre mit Matura</h3>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>Neben der Lehre zur Berufsreifeprüfung. Termine Herbst 2026: schriftlich 18.09., mündlich 02.10.</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"go"} -->
<p class="go"><a href="https://www.bs-villach.at/lehre-mit-matura">Mehr zur Lehre mit Matura →</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"checklist","layout":{"type":"default"}} -->
<div class="wp-block-group checklist"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Das bringen Sie am ersten Schultag mit</h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"check"} -->
<p class="check">Einberufungsschreiben</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"check"} -->
<p class="check">Schreibzeug, Taschenrechner, Mappe</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"check"} -->
<p class="check">Arbeitskleidung und Sicherheitsschuhe</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"check"} -->
<p class="check">Bettwäsche, wenn Sie im Lehrlingsheim wohnen</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","anchor":"berufe","className":"band","layout":{"type":"default"}} -->
<section id="berufe" class="wp-block-group band"><!-- wp:group {"className":"wrap","layout":{"type":"default"}} -->
<div class="wp-block-group wrap"><!-- wp:group {"className":"sec-head","layout":{"type":"default"}} -->
<div class="wp-block-group sec-head"><!-- wp:paragraph {"className":"eyebrow"} -->
<p class="eyebrow">Ausbildung</p>
<!-- /wp:paragraph -->
<!-- wp:heading -->
<h2 class="wp-block-heading">Unsere Lehrberufe</h2>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>Neun Lehrberufe aus Metall, Elektro und Kfz. Theorie und Praxis in modernen Werkstätten.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"teasers","layout":{"type":"default"}} -->
<div class="wp-block-group teasers"><!-- wp:group {"className":"teaser","layout":{"type":"default"}} -->
<div class="wp-block-group teaser"><!-- wp:image {"id":{{id:teaser_kfz}},"sizeSlug":"full","linkDestination":"none","className":"photo has-img"} -->
<figure class="wp-block-image size-full photo has-img"><img src="{{url:teaser_kfz}}" alt="Kfz-Werkstatt" class="wp-image-{{id:teaser_kfz}}"/></figure>
<!-- /wp:image -->
<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Kraftfahrzeugtechnik</h3>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>Pkw, Lkw, Motorräder und E-Mobilität am eMazda2</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"teaser","layout":{"type":"default"}} -->
<div class="wp-block-group teaser"><!-- wp:image {"id":{{id:teaser_metall}},"sizeSlug":"full","linkDestination":"none","className":"photo has-img"} -->
<figure class="wp-block-image size-full photo has-img"><img src="{{url:teaser_metall}}" alt="Maschinenbau" class="wp-image-{{id:teaser_metall}}"/></figure>
<!-- /wp:image -->
<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Maschinenbau &amp; Metall</h3>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>Maschinenbau-, Zerspanungs- und Metallbearbeitungstechnik</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"teaser","layout":{"type":"default"}} -->
<div class="wp-block-group teaser"><!-- wp:image {"id":{{id:teaser_elektro}},"sizeSlug":"full","linkDestination":"none","className":"photo has-img"} -->
<figure class="wp-block-image size-full photo has-img"><img src="{{url:teaser_elektro}}" alt="Elektro" class="wp-image-{{id:teaser_elektro}}"/></figure>
<!-- /wp:image -->
<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Doppellehre Elektro-Maschinenbau</h3>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>Zwei Lehrberufe in einer Ausbildung</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- wp:buttons {"className":"fbs-btn"} -->
<div class="wp-block-buttons fbs-btn"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="{{url_lehrberufe}}">Alle Lehrberufe ansehen →</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","anchor":"news","className":"band soft","layout":{"type":"default"}} -->
<section id="news" class="wp-block-group band soft"><!-- wp:group {"className":"wrap","layout":{"type":"default"}} -->
<div class="wp-block-group wrap"><!-- wp:group {"className":"sec-head","layout":{"type":"default"}} -->
<div class="wp-block-group sec-head"><!-- wp:paragraph {"className":"eyebrow"} -->
<p class="eyebrow">Neuigkeiten</p>
<!-- /wp:paragraph -->
<!-- wp:heading -->
<h2 class="wp-block-heading">Was bei uns los ist</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->
<!-- wp:shortcode -->
[fbs_news anzahl="3"]
<!-- /wp:shortcode -->
<!-- wp:buttons {"className":"fbs-btn"} -->
<div class="wp-block-buttons fbs-btn"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="{{url_news}}">Alle News ansehen →</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","anchor":"team","className":"band","layout":{"type":"default"}} -->
<section id="team" class="wp-block-group band"><!-- wp:group {"className":"wrap","layout":{"type":"default"}} -->
<div class="wp-block-group wrap"><!-- wp:group {"className":"sec-head","layout":{"type":"default"}} -->
<div class="wp-block-group sec-head"><!-- wp:paragraph {"className":"eyebrow"} -->
<p class="eyebrow">Wer wir sind</p>
<!-- /wp:paragraph -->
<!-- wp:heading -->
<h2 class="wp-block-heading">Unser Team</h2>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>Sie haben eine Frage? Das Sekretariat hilft Ihnen weiter oder verbindet Sie mit der richtigen Person.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:shortcode -->
[fbs_leitung]
<!-- /wp:shortcode -->
<!-- wp:buttons {"className":"fbs-btn"} -->
<div class="wp-block-buttons fbs-btn"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="{{url_lehrerinnen}}">Alle Lehrer*innen ansehen →</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","anchor":"kontakt","className":"band soft","layout":{"type":"default"}} -->
<section id="kontakt" class="wp-block-group band soft"><!-- wp:group {"className":"wrap","layout":{"type":"default"}} -->
<div class="wp-block-group wrap"><!-- wp:group {"className":"sec-head","layout":{"type":"default"}} -->
<div class="wp-block-group sec-head"><!-- wp:paragraph {"className":"eyebrow"} -->
<p class="eyebrow">Kontakt</p>
<!-- /wp:paragraph -->
<!-- wp:heading -->
<h2 class="wp-block-heading">So erreichen Sie uns</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"contact","layout":{"type":"default"}} -->
<div class="wp-block-group contact"><!-- wp:group {"className":"kontakt-box","layout":{"type":"default"}} -->
<div class="wp-block-group kontakt-box"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Fachberufsschule Villach 2</h3>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>Tiroler Straße 23<br>9500 Villach</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><a href="https://maps.google.com/maps?q=Tiroler+Stra%C3%9Fe+23,+Villach">Anfahrt in Google Maps →</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"kontakt-box","layout":{"type":"default"}} -->
<div class="wp-block-group kontakt-box"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Sekretariat</h3>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>Telefon 04242 56257-200<br>Fax 04242 56257-203<br>E-Mail villach2@bs.ksn.at</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"kontakt-box","layout":{"type":"default"}} -->
<div class="wp-block-group kontakt-box"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Lehrlingsheim</h3>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>St. Martiner Straße 13<br>9500 Villach<br>Heimleitung: Ing. Walter Werner, MA BEd</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->',
		'lehrberufe'  => '<!-- wp:group {"className":"sec-head","layout":{"type":"default"}} -->
<div class="wp-block-group sec-head"><!-- wp:paragraph {"className":"eyebrow"} -->
<p class="eyebrow">Ausbildung</p>
<!-- /wp:paragraph -->
<!-- wp:heading -->
<h2 class="wp-block-heading">Alle Lehrberufe</h2>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>Hier sehen Sie alle Lehrberufe der FBS Villach 2. Wann Ihr Lehrgang beginnt, steht in den <a href="https://www.bs-villach.at/images/stories/fbs2/lehrgangslaufzeiten/lehrgangslaufzeiten.pdf">Lehrgangszeiten (PDF)</a>.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:image {"id":{{id:lehrberufe}},"sizeSlug":"full","linkDestination":"none","className":"photo wide-photo has-img"} -->
<figure class="wp-block-image size-full photo wide-photo has-img"><img src="{{url:lehrberufe}}" alt="Werkstatt oder Kfz-Labor" class="wp-image-{{id:lehrberufe}}"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"jobs","layout":{"type":"default"}} -->
<div class="wp-block-group jobs"><!-- wp:group {"className":"job","layout":{"type":"default"}} -->
<div class="wp-block-group job"><!-- wp:paragraph {"className":"no"} -->
<p class="no">01</p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"job-text","layout":{"type":"default"}} -->
<div class="wp-block-group job-text"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Kraftfahrzeugtechnik</h3>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>Pkw, Lkw, Busse, Motorräder, computergestützte Diagnose</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"job","layout":{"type":"default"}} -->
<div class="wp-block-group job"><!-- wp:paragraph {"className":"no"} -->
<p class="no">02</p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"job-text","layout":{"type":"default"}} -->
<div class="wp-block-group job-text"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Maschinenbautechnik</h3>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>Maschinenteile fertigen, montieren, warten. 3,5 Jahre</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"job","layout":{"type":"default"}} -->
<div class="wp-block-group job"><!-- wp:paragraph {"className":"no"} -->
<p class="no">03</p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"job-text","layout":{"type":"default"}} -->
<div class="wp-block-group job-text"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Zerspanungstechnik</h3>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>Drehen, Fräsen, CNC, Qualitätskontrolle. 3,5 Jahre</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"job","layout":{"type":"default"}} -->
<div class="wp-block-group job"><!-- wp:paragraph {"className":"no"} -->
<p class="no">04</p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"job-text","layout":{"type":"default"}} -->
<div class="wp-block-group job-text"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Metallbearbeitungstechnik</h3>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>Tore, Geländer, Metallkonstruktionen</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"job","layout":{"type":"default"}} -->
<div class="wp-block-group job"><!-- wp:paragraph {"className":"no"} -->
<p class="no">05</p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"job-text","layout":{"type":"default"}} -->
<div class="wp-block-group job-text"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Prozesstechnik</h3>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>Fertigungsanlagen rüsten und überwachen</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"job","layout":{"type":"default"}} -->
<div class="wp-block-group job"><!-- wp:paragraph {"className":"no"} -->
<p class="no">06</p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"job-text","layout":{"type":"default"}} -->
<div class="wp-block-group job-text"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Land- und Baumaschinentechnik</h3>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>Reparatur und Umbau von Land-, Forst- und Baumaschinen</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"job","layout":{"type":"default"}} -->
<div class="wp-block-group job"><!-- wp:paragraph {"className":"no"} -->
<p class="no">07</p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"job-text","layout":{"type":"default"}} -->
<div class="wp-block-group job-text"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Fahrzeugbautechnik</h3>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>Aufbauten und Anhänger für Nutzfahrzeuge</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"job","layout":{"type":"default"}} -->
<div class="wp-block-group job"><!-- wp:paragraph {"className":"no"} -->
<p class="no">08</p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"job-text","layout":{"type":"default"}} -->
<div class="wp-block-group job-text"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Schmiedetechnik</h3>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>Werkzeuge und Teile aus Eisen und Stahl</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- wp:group {"className":"job","layout":{"type":"default"}} -->
<div class="wp-block-group job"><!-- wp:paragraph {"className":"no"} -->
<p class="no">09</p>
<!-- /wp:paragraph -->
<!-- wp:group {"className":"job-text","layout":{"type":"default"}} -->
<div class="wp-block-group job-text"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Vulkanisierung</h3>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>Fahrzeugreifen prüfen und reparieren</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"extra","layout":{"type":"default"}} -->
<div class="wp-block-group extra"><!-- wp:paragraph {"className":"chip"} -->
<p class="chip">Doppellehre Elektro-Maschinenbau</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"chip"} -->
<p class="chip">Lehre mit Matura</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->',
		'lehrerinnen' => '<!-- wp:group {"className":"sec-head","layout":{"type":"default"}} -->
<div class="wp-block-group sec-head"><!-- wp:paragraph {"className":"eyebrow"} -->
<p class="eyebrow">Unser Team</p>
<!-- /wp:paragraph -->
<!-- wp:heading -->
<h2 class="wp-block-heading">Lehrer*innen</h2>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>An der FBS Villach 2 unterrichten unsere Lehrer*innen. Suchen Sie nach einem Namen oder Fach.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->',
		'impressum'   => '<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Kontakt- &amp; Adressdaten</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><b>Adresse</b><br>Fachberufsschule Villach 2<br>Tiroler Straße 23<br>9500 Villach</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><b>Telefon &amp; Fax</b><br>Telefon: 04242 56257-200<br>Fax: 04242 56257-203</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><b>E-Mail</b><br>villach2@bs.ksn.at</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Leiter</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>BD Ing. Alfred Madrutter, BEd</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Für den Inhalt verantwortlich</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>BD Ing. Alfred Madrutter, BEd</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Kontakt</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Fragen zur Website richten Sie bitte an die oben genannte E-Mail-Adresse. Informationen zum Umgang mit Ihren Daten finden Sie in der <a href="{{url_datenschutz}}">Datenschutzerklärung</a>.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>© 2026 Fachberufsschule Villach 2</p>
<!-- /wp:paragraph -->',
		'datenschutz' => '<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Einleitung und Überblick</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Mit dieser Datenschutzerklärung informieren wir Sie darüber, welche personenbezogenen Daten wir verarbeiten, wenn Sie unsere Website besuchen, und welche Rechte Sie haben. Diese Website sammelt so wenige Daten wie möglich.</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Anwendungsbereich</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Diese Datenschutzerklärung gilt für die Website der Fachberufsschule Villach 2. Für andere Websites, auf die wir verlinken, gelten deren eigene Datenschutzerklärungen.</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Rechtsgrundlagen</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Wir verarbeiten personenbezogene Daten nur, wenn eine Rechtsgrundlage nach der Datenschutz-Grundverordnung (DSGVO) besteht. Das sind insbesondere Ihre Einwilligung (Art. 6 Abs. 1 lit. a DSGVO), die Erfüllung rechtlicher Pflichten (Art. 6 Abs. 1 lit. c DSGVO) und unser berechtigtes Interesse an einem sicheren Betrieb der Website (Art. 6 Abs. 1 lit. f DSGVO). Ergänzend gilt das österreichische Datenschutzgesetz (DSG).</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Kontaktdaten des Verantwortlichen</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Fachberufsschule Villach 2<br>BD Ing. Alfred Madrutter, BEd<br>Tiroler Straße 23, 9500 Villach<br>Telefon: 04242 56257-200<br>E-Mail: villach2@bs.ksn.at<br>Impressum: <a href="{{url_impressum}}">Impressum</a></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Speicherdauer</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Wir speichern personenbezogene Daten nur so lange, wie es für den jeweiligen Zweck nötig ist oder gesetzliche Aufbewahrungspflichten es verlangen. Danach werden sie gelöscht.</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Ihre Rechte laut DSGVO</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Sie haben das Recht auf Auskunft (Art. 15), Berichtigung (Art. 16), Löschung (Art. 17), Einschränkung der Verarbeitung (Art. 18), Datenübertragbarkeit (Art. 20) und Widerspruch (Art. 21). Eine erteilte Einwilligung können Sie jederzeit widerrufen. Wenden Sie sich dazu an die oben genannte Adresse.</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Österreichische Datenschutzbehörde</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Wenn Sie glauben, dass die Verarbeitung Ihrer Daten gegen das Datenschutzrecht verstößt, können Sie sich bei der Österreichischen Datenschutzbehörde beschweren: Barichgasse 40–42, 1030 Wien, <a href="https://www.dsb.gv.at">www.dsb.gv.at</a>.</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Datenübertragung in Drittländer</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Diese Website wird in Österreich gehostet. Eine Übertragung Ihrer Daten in Länder außerhalb der EU findet beim Besuch der Website nicht statt.</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Sicherheit der Datenverarbeitung</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Wir treffen technische und organisatorische Maßnahmen, um Ihre Daten zu schützen. Die Website verwendet keine Kontaktformulare und keine Kommentarfunktion, dadurch fallen kaum Daten an.</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">TLS-Verschlüsselung mit https</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Die Website wird ausschließlich verschlüsselt über https übertragen. Sie erkennen das am Schloss-Symbol in der Adresszeile Ihres Browsers.</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Kommunikation</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Wenn Sie uns per Telefon oder E-Mail kontaktieren, verarbeiten wir Ihre Angaben, um Ihre Anfrage zu bearbeiten. Nach Abschluss der Anfrage löschen wir die Daten, sofern keine gesetzliche Aufbewahrungspflicht besteht.</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Cookies</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Für Besucher*innen setzt diese Website keine Cookies und verwendet keine Analyse-, Tracking- oder Werbedienste. Deshalb gibt es auch kein Cookie-Banner. Nur wenn sich Mitarbeiter*innen der Schule zur Bearbeitung der Website anmelden, setzt WordPress technisch notwendige Anmelde-Cookies.</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Webhosting</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Die Website wird bei easyname GmbH, Canettistraße 5/10, 1100 Wien (<a href="https://www.easyname.at">www.easyname.at</a>) in Österreich gehostet. Beim Aufruf einer Seite speichert der Server automatisch technische Daten wie Ihre IP-Adresse, Datum und Uhrzeit, die aufgerufene Seite und den verwendeten Browser. Das ist nötig, um die Website sicher auszuliefern und Angriffe abzuwehren (berechtigtes Interesse, Art. 6 Abs. 1 lit. f DSGVO). Diese Daten werden nach <mark>[Speicherdauer laut easyname ergänzen, z. B. 14 Tagen]</mark> gelöscht.</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Schriften</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Die verwendeten Schriften sind direkt auf dieser Website gespeichert. Es wird keine Verbindung zu Google Fonts oder anderen Anbietern aufgebaut.</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Online-Kartendienste und externe Links</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Wir binden keine Karten oder Videos ein. Der Link „Anfahrt in Google Maps“ öffnet die Website von Google erst, wenn Sie ihn anklicken. Ab dann gilt die <a href="https://policies.google.com/privacy?hl=de">Datenschutzerklärung von Google</a>. Dasselbe gilt für Links zu Moodle und zur Website der FBS Villach 1.</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Fotos und Namen</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Namen und Fotos von Lehrer*innen und Schüler*innen veröffentlichen wir nur mit deren Einwilligung (Art. 6 Abs. 1 lit. a DSGVO). Die Einwilligung kann jederzeit widerrufen werden.</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Erklärung verwendeter Begriffe</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><b>Personenbezogene Daten</b> sind alle Informationen, die sich auf eine bestimmte Person beziehen, etwa Name, E-Mail-Adresse oder IP-Adresse.<br><b>Einwilligung</b> ist Ihre freiwillige und eindeutige Zustimmung zu einer bestimmten Verarbeitung Ihrer Daten.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Stand: Oktober 2026</p>
<!-- /wp:paragraph -->',
	);
}
