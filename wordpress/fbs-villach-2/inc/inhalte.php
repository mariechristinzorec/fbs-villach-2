<?php
/**
 * Alle Texte, Bilder und Icons der Seiten: live bearbeitbar unter „Website bearbeiten“ (Customizer).
 *
 * Jeder Teil einer Seite (Überschrift, Kachel, Foto …) ist ein eigener Bereich mit Stift-Symbol in der Vorschau.
 *
 * @package FBS_Villach_2
 */

defined( 'ABSPATH' ) || exit;

define( 'FBS_PDF_LG', 'https://www.bs-villach.at/images/stories/fbs2/lehrgangslaufzeiten/lehrgangslaufzeiten.pdf' );

/**
 * Felder eines Seitenkopfs (kleine Zeile, Überschrift, Text).
 *
 * @param string $eyebrow Kleine Zeile.
 * @param string $titel   Überschrift.
 * @param string $text    Text.
 * @return array
 */
function fbs_f_kopf( $eyebrow, $titel, $text = '' ) {
	return array(
		'eyebrow' => array( 'text', 'Kleine rote Zeile über der Überschrift', $eyebrow ),
		'titel'   => array( 'text', 'Überschrift', $titel ),
		'text'    => array( 'textarea', 'Text unter der Überschrift (leer = kein Text)', $text ),
	);
}

/**
 * Felder eines roten Knopfs.
 *
 * @param string $text Beschriftung.
 * @param string $url  Ziel.
 * @return array
 */
function fbs_f_knopf( $text, $url ) {
	return array(
		'text' => array( 'text', 'Beschriftung des roten Knopfs (leer = kein Knopf)', $text ),
		'url'  => array( 'url', 'Ziel des Knopfs (Adresse)', $url ),
	);
}

/**
 * Alle bearbeitbaren Bereiche.
 *
 * Aufbau: Panel => [ titel, seite, bereiche => [ id => [ titel, teile => [ teil-id => [ renderer, felder ] ] ] ] ].
 * Felder: key => [ typ, beschriftung, standard ]. Typen: text, textarea, url, bild, icon, liste.
 *
 * @return array
 */
function fbs_inhalte() {
	static $cache = null;
	if ( null !== $cache ) {
		return $cache;
	}

	$kacheln = array(
		array( '📅', 'Termine', 'Lehrgangszeiten 2026/27', 'Wann beginnt Ihr Lehrgang? Suchen Sie Ihren Lehrberuf und Ihre Schulstufe in der Liste.', 'Lehrgangszeiten (PDF) →', FBS_PDF_LG ),
		array( '🛏️', 'Wohnen', 'Lehrlingsheim', '3-Bett-Zimmer mit Dusche und WC, Vollverpflegung. Anreise am Vorabend zwischen 18 und 21 Uhr. Bettwäsche bitte mitbringen.', 'Heimanmeldung (PDF) →', 'https://www.bs-villach.at/images/stories/lehrlingsheim/Heimanmeldung_Platzreservierung%20_nderung_Juli_2026.pdf' ),
		array( '⚠️', 'Wichtig', 'Fernbleiben vom Unterricht', 'Sie sind krank oder verhindert? Hier steht, wen Sie wann informieren müssen.', 'Regeln (PDF) →', 'https://www.bs-villach.at/images/Einberufungen/Fernbleiben_vom_Unterricht_ab_SJ_2021_22.pdf' ),
		array( '🤝', 'Hilfe', 'Schulsozialarbeit', 'Probleme in der Lehre, in der Familie oder mit Geld? Die Schulsozialarbeit hilft vertraulich und kostenlos.', 'Erreichbarkeit (PDF) →', 'https://www.bs-villach.at/images/schulso/Erreichbarkeit_Schulsozialarbeit_26_27.pdf' ),
		array( '💻', 'Lernen', 'Moodle', 'Unterlagen, Aufgaben und Tests für Ihren Unterricht. Ihre Zugangsdaten bekommen Sie am ersten Schultag.', 'Moodle öffnen →', 'https://www.moodle.bs-villach.at' ),
		array( '🎓', 'Matura', 'Lehre mit Matura', 'Neben der Lehre zur Berufsreifeprüfung. Termine Herbst 2026: schriftlich 18.09., mündlich 02.10.', 'Mehr zur Lehre mit Matura →', 'https://www.bs-villach.at/lehre-mit-matura' ),
	);
	$teaser  = array(
		array( 'teaser_kfz', 'Kraftfahrzeugtechnik', 'Pkw, Lkw, Motorräder und E-Mobilität am eMazda2' ),
		array( 'teaser_metall', 'Maschinenbau & Metall', 'Maschinenbau-, Zerspanungs- und Metallbearbeitungstechnik' ),
		array( 'teaser_elektro', 'Doppellehre Elektro-Maschinenbau', 'Zwei Lehrberufe in einer Ausbildung' ),
	);
	$kontakt = array(
		array( 'Fachberufsschule Villach 2', "Tiroler Straße 23\n9500 Villach", 'Anfahrt in Google Maps →', 'https://maps.google.com/maps?q=Tiroler+Stra%C3%9Fe+23,+Villach' ),
		array( 'Sekretariat', "Telefon 04242 56257-200\nFax 04242 56257-203\nE-Mail villach2@bs.ksn.at", '', '' ),
		array( 'Lehrlingsheim', "St. Martiner Straße 13\n9500 Villach\nHeimleitung: Ing. Walter Werner, MA BEd", '', '' ),
	);
	$berufe  = array(
		array( 'Kraftfahrzeugtechnik', 'Pkw, Lkw, Busse, Motorräder, computergestützte Diagnose' ),
		array( 'Maschinenbautechnik', 'Maschinenteile fertigen, montieren, warten. 3,5 Jahre' ),
		array( 'Zerspanungstechnik', 'Drehen, Fräsen, CNC, Qualitätskontrolle. 3,5 Jahre' ),
		array( 'Metallbearbeitungstechnik', 'Tore, Geländer, Metallkonstruktionen' ),
		array( 'Prozesstechnik', 'Fertigungsanlagen rüsten und überwachen' ),
		array( 'Land- und Baumaschinentechnik', 'Reparatur und Umbau von Land-, Forst- und Baumaschinen' ),
		array( 'Fahrzeugbautechnik', 'Aufbauten und Anhänger für Nutzfahrzeuge' ),
		array( 'Schmiedetechnik', 'Werkzeuge und Teile aus Eisen und Stahl' ),
		array( 'Vulkanisierung', 'Fahrzeugreifen prüfen und reparieren' ),
	);
	$zahlen  = array(
		array( '10', 'Wochen pro Lehrgang' ),
		array( '9', 'Lehrberufe an der FBS 2' ),
		array( '[anzahl]', 'Lehrer*innen im Team' ),
		array( 'Matura', 'Lehre mit Matura möglich' ),
	);

	/* Startseite */
	$s = array();
	$s['start_kopf'] = array(
		'Kopfbereich (gelb)',
		array(
			'hero_text'  => array(
				'hero_text',
				array(
					'eyebrow' => array( 'text', 'Kleine rote Zeile', 'Metall · Elektro · Kfz' ),
					'titel'   => array( 'text', 'Große Überschrift. Tipp: Ein Wort zwischen *Sternchen* wird rot.', 'Lernen, was *läuft.*' ),
					'text'    => array( 'textarea', 'Text', 'Wir sind die Berufsschule für Metall-, Elektro-, Kfz-, Nfz-, Land- und Baumaschinentechnik in Villach. Hier finden Sie alles für Ihren nächsten Lehrgang.' ),
				),
			),
			'hero_links' => array(
				'hero_links',
				array(
					'text1' => array( 'text', 'Schwarzer Knopf 1: Beschriftung (leer = ausblenden)', 'Wann ist mein Lehrgang?' ),
					'url1'  => array( 'url', 'Schwarzer Knopf 1: Ziel', FBS_PDF_LG ),
					'text2' => array( 'text', 'Schwarzer Knopf 2: Beschriftung', 'Was bringe ich mit?' ),
					'url2'  => array( 'url', 'Schwarzer Knopf 2: Ziel', '#schueler' ),
					'text3' => array( 'text', 'Schwarzer Knopf 3: Beschriftung', 'Zu Moodle' ),
					'url3'  => array( 'url', 'Schwarzer Knopf 3: Ziel', 'https://www.moodle.bs-villach.at' ),
					'text4' => array( 'text', 'Schwarzer Knopf 4: Beschriftung (zusätzlich, leer = ausblenden)', '' ),
					'url4'  => array( 'url', 'Schwarzer Knopf 4: Ziel', '' ),
					'pfeil' => array( 'icon', 'Symbol am Ende der Knöpfe', '→' ),
				),
			),
			'hero_bild'  => array( 'bild:photo:startseite', array( 'bild' => array( 'bild', 'Großes Foto', 0 ), 'alt' => array( 'text', 'Bildbeschreibung (kurz, für blinde Menschen)', 'Schüler*innen in der Werkstatt' ) ) ),
		),
	);
	$teile = array();
	foreach ( $zahlen as $i => $z ) {
		$teile[ 'zahl_' . ( $i + 1 ) ] = array(
			'zahl',
			array(
				'zahl' => array( 'text', 'Zahl ' . ( $i + 1 ) . ' (gelb). [anzahl] = Anzahl der Lehrer*innen, wird automatisch gezählt', $z[0] ),
				'text' => array( 'text', 'Text darunter (leer = Feld ausblenden)', $z[1] ),
			),
		);
	}
	$s['start_zahlen'] = array( 'Zahlen-Leiste (grau)', $teile );

	$s['start_schueler'] = array( 'Für Schüler*innen: Überschrift', array( 'schueler_kopf' => array( 'kopf', fbs_f_kopf( 'Für Schüler*innen', 'Alles für Ihren Lehrgang', 'Die wichtigsten Unterlagen auf einen Blick. Lesen Sie diese vor dem ersten Schultag.' ) ) ) );
	for ( $i = 1; $i <= 9; $i++ ) {
		$k = $kacheln[ $i - 1 ] ?? array( '', '', '', '', '', '' );
		$s[ 'start_kachel_' . $i ] = array(
			'Kachel ' . $i . ( $k[2] ? '' : ' (frei)' ),
			array(
				'kachel_' . $i => array(
					'kachel',
					array(
						'icon'     => array( 'icon', 'Icon (Emoji, leer = kein Icon)', $k[0] ),
						'tag'      => array( 'text', 'Gelbes Schild', $k[1] ),
						'titel'    => array( 'text', 'Überschrift (leer = Kachel ausblenden)', $k[2] ),
						'text'     => array( 'textarea', 'Text', $k[3] ),
						'linktext' => array( 'text', 'Link-Text (leer = kein Link)', $k[4] ),
						'url'      => array( 'url', 'Link-Ziel (Adresse oder PDF)', $k[5] ),
					),
				),
			),
		);
	}
	$s['start_checkliste'] = array(
		'Checkliste (erster Schultag)',
		array(
			'checkliste' => array(
				'checkliste',
				array(
					'titel'  => array( 'text', 'Überschrift (leer = Checkliste ausblenden)', 'Das bringen Sie am ersten Schultag mit' ),
					'symbol' => array( 'icon', 'Symbol vor jedem Punkt (leer = Kästchen)', '' ),
					'punkte' => array( 'liste', 'Punkte (ein Punkt pro Zeile)', "Einberufungsschreiben\nSchreibzeug, Taschenrechner, Mappe\nArbeitskleidung und Sicherheitsschuhe\nBettwäsche, wenn Sie im Lehrlingsheim wohnen" ),
				),
			),
		),
	);
	$s['start_berufe'] = array(
		'Lehrberufe: Überschrift und Knopf',
		array(
			'berufe_kopf'  => array( 'kopf', fbs_f_kopf( 'Ausbildung', 'Unsere Lehrberufe', 'Neun Lehrberufe aus Metall, Elektro und Kfz. Theorie und Praxis in modernen Werkstätten.' ) ),
			'berufe_knopf' => array( 'knopf', fbs_f_knopf( 'Alle Lehrberufe ansehen →', 'seite:lehrberufe' ) ),
		),
	);
	for ( $i = 1; $i <= 6; $i++ ) {
		$t   = $teaser[ $i - 1 ] ?? array( $teaser[ ( $i - 1 ) % 3 ][0], '', '' );
		$s[ 'start_teaser_' . $i ] = array(
			'Lehrberuf-Bild ' . $i . ( $t[1] ? '' : ' (frei)' ),
			array(
				'teaser_' . $i => array(
					'teaser:' . $t[0],
					array(
						'bild'  => array( 'bild', 'Foto', 0 ),
						'titel' => array( 'text', 'Überschrift (leer = ausblenden)', $t[1] ),
						'text'  => array( 'text', 'Text', $t[2] ),
						'url'   => array( 'url', 'Link-Ziel beim Anklicken', 'seite:lehrberufe' ),
					),
				),
			),
		);
	}
	$s['start_news'] = array(
		'News: Überschrift und Knopf',
		array(
			'news_kopf'  => array( 'kopf', array_merge( fbs_f_kopf( 'Neuigkeiten', 'Was bei uns los ist' ), array( 'anzahl' => array( 'text', 'Wie viele News sollen angezeigt werden? (Zahl)', '3' ) ) ) ),
			'news_liste' => array( 'news', array() ),
			'news_knopf' => array( 'knopf', fbs_f_knopf( 'Alle News ansehen →', 'seite:news' ) ),
		),
	);
	$s['start_team'] = array(
		'Team: Überschrift und Knopf',
		array(
			'team_kopf'  => array( 'kopf', fbs_f_kopf( 'Wer wir sind', 'Unser Team', 'Sie haben eine Frage? Das Sekretariat hilft Ihnen weiter oder verbindet Sie mit der richtigen Person.' ) ),
			'team_knopf' => array( 'knopf', fbs_f_knopf( 'Alle Lehrer*innen ansehen →', 'seite:lehrerinnen' ) ),
		),
		'Fotos, Namen und E-Mail-Adressen der Personen ändern Sie im Menü links unter „Team“.',
	);
	$s['start_leitbild'] = array(
		'Team: Leitbild',
		array(
			'leitbild' => array(
				'leitbild',
				array(
					'icon'  => array( 'icon', 'Icon (Emoji, leer = kein Icon)', '🧭' ),
					'titel' => array( 'text', 'Überschrift (leer = Leitbild ausblenden)', 'Unser Leitbild' ),
					'text'  => array( 'textarea', 'Text des Leitbilds (Leerzeile = neuer Absatz)', 'Hier steht das Leitbild der FBS Villach 2. Klicken Sie auf den Stift und fügen Sie den Text ein.' ),
				),
			),
		),
	);
	$s['start_kontakt'] = array( 'Kontakt: Überschrift', array( 'kontakt_kopf' => array( 'kopf', fbs_f_kopf( 'Kontakt', 'So erreichen Sie uns' ) ) ) );
	for ( $i = 1; $i <= 6; $i++ ) {
		$k = $kontakt[ $i - 1 ] ?? array( '', '', '', '' );
		$s[ 'start_kontakt_' . $i ] = array(
			'Kontakt-Feld ' . $i . ( $k[0] ? '' : ' (frei)' ),
			array(
				'kontakt_' . $i => array(
					'kontakt',
					array(
						'titel'    => array( 'text', 'Überschrift (leer = Feld ausblenden)', $k[0] ),
						'text'     => array( 'textarea', 'Text (jede Zeile wird eine eigene Zeile)', $k[1] ),
						'linktext' => array( 'text', 'Link-Text (leer = kein Link)', $k[2] ),
						'url'      => array( 'url', 'Link-Ziel', $k[3] ),
					),
				),
			),
		);
	}

	/* Lehrberufe */
	$l = array();
	$l['lb_kopf'] = array(
		'Überschrift und Foto',
		array(
			'lb_zurueck' => array( 'zurueck', array( 'text' => array( 'text', 'Link zurück (oben)', '← Zur Startseite' ) ) ),
			'lb_kopf'    => array( 'kopf', array_merge( fbs_f_kopf( 'Ausbildung', 'Alle Lehrberufe', 'Hier sehen Sie alle Lehrberufe der FBS Villach 2. Wann Ihr Lehrgang beginnt, steht in den Lehrgangszeiten.' ), array( 'linktext' => array( 'text', 'Link unter dem Text (leer = kein Link)', 'Lehrgangszeiten (PDF) →' ), 'url' => array( 'url', 'Link-Ziel', FBS_PDF_LG ) ) ) ),
			'lb_bild'    => array( 'bild:photo wide-photo:lehrberufe', array( 'bild' => array( 'bild', 'Breites Foto', 0 ), 'alt' => array( 'text', 'Bildbeschreibung (kurz, für blinde Menschen)', 'Werkstatt oder Kfz-Labor' ) ) ),
		),
	);
	for ( $i = 1; $i <= 15; $i++ ) {
		$b = $berufe[ $i - 1 ] ?? array( '', '' );
		$l[ 'lb_beruf_' . $i ] = array(
			'Lehrberuf ' . $i . ( $b[0] ? '' : ' (frei)' ),
			array(
				'beruf_' . $i => array(
					'beruf',
					array(
						'nummer' => array( 'icon', 'Nummer oder Icon (rot)', sprintf( '%02d', $i ) ),
						'titel'  => array( 'text', 'Lehrberuf (leer = ausblenden)', $b[0] ),
						'text'   => array( 'textarea', 'Beschreibung', $b[1] ),
					),
				),
			),
		);
	}
	$l['lb_extra'] = array( 'Rote Schilder unten', array( 'lb_extra' => array( 'chips', array( 'punkte' => array( 'liste', 'Schilder (eines pro Zeile, leer = keine)', "Doppellehre Elektro-Maschinenbau\nLehre mit Matura" ) ) ) ) );

	/* Lehrer*innen */
	$t                 = array();
	$t['le_kopf'] = array(
		'Überschrift und Suche',
		array(
			'le_zurueck' => array( 'zurueck', array( 'text' => array( 'text', 'Link zurück (oben)', '← Zur Startseite' ) ) ),
			'le_kopf'    => array( 'kopf', fbs_f_kopf( 'Unser Team', 'Lehrer*innen', 'An der FBS Villach 2 unterrichten unsere Lehrer*innen. Suchen Sie nach einem Namen.' ) ),
			'le_suche'   => array(
				'suche',
				array(
					'label'       => array( 'text', 'Beschriftung des Suchfelds', 'Name suchen' ),
					'platzhalter' => array( 'text', 'Beispiel im Suchfeld', 'z. B. Maurer' ),
					'leer'        => array( 'text', 'Text, wenn nichts gefunden wird', 'Kein Treffer. Prüfen Sie die Schreibweise.' ),
				),
			),
		),
		'Fotos, Namen und E-Mail-Adressen der Personen ändern Sie im Menü links unter „Team“.',
	);

	/* News-Seite */
	$n = array(
		'news_seite' => array(
			'Überschrift',
			array(
				'ns_zurueck' => array( 'zurueck', array( 'text' => array( 'text', 'Link zurück (oben)', '← Zur Startseite' ) ) ),
				'ns_kopf'    => array( 'kopf', fbs_f_kopf( 'Neuigkeiten', 'Alle News' ) ),
			),
		),
	);

	/* Kopf- und Fußzeile */
	$k = array(
		'kopfzeile' => array(
			'Kopfzeile',
			array(
				'topbar' => array(
					'topbar',
					array(
						'schule1' => array( 'text', 'Link zur FBS Villach 1', 'FBS Villach 1 →' ),
						'text'    => array( 'text', 'Text in der dunklen Leiste ganz oben', get_theme_mod( 'fbs_topbar', 'Tiroler Straße 23 · 9500 Villach · 04242 56257-200' ) ),
					),
				),
				'logo'   => array( 'logo', array( 'bild' => array( 'bild', 'Logo (leer = Schullogo)', 0 ), 'alt' => array( 'text', 'Beschreibung des Logos', get_theme_mod( 'fbs_logo_alt', 'Fachberufsschule Villach 2, Land Kärnten' ) ) ) ),
			),
		),
		'fusszeile' => array( 'Fußzeile', array( 'fuss' => array( 'fuss', array( 'text' => array( 'text', 'Text in der Fußzeile', get_theme_mod( 'fbs_footer', '© Fachberufsschule Villach 2' ) ) ) ) ) ),
	);

	$cache = array(
		'fbs_p_start'       => array( 'Startseite', 'start', $s ),
		'fbs_p_lehrberufe'  => array( 'Seite Lehrberufe', 'lehrberufe', $l ),
		'fbs_p_lehrerinnen' => array( 'Seite Lehrer*innen', 'lehrerinnen', $t ),
		'fbs_p_news'        => array( 'Seite Alle News', 'news', $n ),
		'fbs_p_kopf'        => array( 'Kopf- und Fußzeile (alle Seiten)', '', $k ),
	);
	return $cache;
}

/**
 * Alle Teile flach: teil-id => [ renderer, felder, panel ].
 *
 * @return array
 */
function fbs_teile() {
	static $teile = null;
	if ( null === $teile ) {
		$teile = array();
		foreach ( fbs_inhalte() as $panel => $p ) {
			foreach ( $p[2] as $bereich ) {
				foreach ( $bereich[1] as $id => $teil ) {
					$teile[ $id ] = array( $teil[0], $teil[1], $panel );
				}
			}
		}
	}
	return $teile;
}

/**
 * Gespeicherter Wert eines Felds (oder Standard).
 *
 * @param string $teil Teil.
 * @param string $key  Feld.
 * @return mixed
 */
function fbs_wert( $teil, $key ) {
	$teile = fbs_teile();
	$def   = $teile[ $teil ][1][ $key ][2] ?? '';
	return get_theme_mod( 'fbs_' . $teil . '_' . $key, $def );
}

/**
 * Text mit *rot* und erlaubten Zeichen ausgeben.
 *
 * @param string $s     Text.
 * @param bool   $zeilen Zeilenumbrüche übernehmen.
 * @return string
 */
function fbs_html( $s, $zeilen = false ) {
	$s = wp_kses(
		(string) $s,
		array(
			'a'      => array( 'href' => array() ),
			'em'     => array(),
			'strong' => array(),
			'b'      => array(),
			'br'     => array(),
		)
	);
	$s = preg_replace( '/\*([^*\n]+)\*/u', '<em>$1</em>', $s );
	if ( $zeilen ) {
		$s = nl2br( trim( $s ), false );
	}
	return str_replace( '[anzahl]', (string) (int) fbs_team_count( 'lehrer' ), $s );
}

/**
 * Link-Ziel auflösen („seite:lehrberufe“ → Adresse der Seite).
 *
 * @param string $url Ziel.
 * @return string
 */
function fbs_ziel( $url ) {
	if ( 0 === strpos( (string) $url, 'seite:' ) ) {
		return fbs_page_url( substr( $url, 6 ) );
	}
	return (string) $url;
}

/**
 * Leerer, unsichtbarer Platzhalter, damit ein ausgeblendeter Teil in der Vorschau wieder erscheinen kann.
 *
 * @param string $teil Teil.
 * @return string
 */
function fbs_leer( $teil ) {
	return is_customize_preview() ? '<div data-fbs="' . esc_attr( $teil ) . '" hidden></div>' : '';
}

/**
 * Foto als HTML.
 *
 * @param int    $id      Anhang.
 * @param string $platz   Platzhalter-Datei.
 * @param string $alt     Beschreibung.
 * @return string
 */
function fbs_bild_html( $id, $platz, $alt ) {
	$id = absint( $id );
	if ( $id && wp_attachment_is_image( $id ) ) {
		return wp_get_attachment_image( $id, 'large', false, array( 'alt' => $alt, 'sizes' => '(max-width: 860px) 100vw, 1200px' ) );
	}
	return '<img src="' . esc_url( get_theme_file_uri( 'platzhalter/' . $platz . '.jpg' ) ) . '" alt="' . esc_attr( $alt ) . '" loading="lazy">';
}

/**
 * Einen Teil ausgeben.
 *
 * @param string $teil Teil.
 */
function fbs_teil( $teil ) {
	echo fbs_teil_html( $teil ); // phpcs:ignore WordPress.Security.EscapeOutput
}

/**
 * HTML eines Teils.
 *
 * @param string $teil Teil.
 * @return string
 */
function fbs_teil_html( $teil ) {
	$teile = fbs_teile();
	if ( ! isset( $teile[ $teil ] ) ) {
		return '';
	}
	$r    = explode( ':', $teile[ $teil ][0] );
	$w    = function ( $key ) use ( $teil ) {
		return fbs_wert( $teil, $key );
	};
	$attr = ' data-fbs="' . esc_attr( $teil ) . '"';
	$o    = '';
	switch ( $r[0] ) {
		case 'hero_text':
			$o = '<div class="hero-text"' . $attr . '><p class="eyebrow">' . fbs_html( $w( 'eyebrow' ) ) . '</p><h1>' . fbs_html( $w( 'titel' ) ) . '</h1>';
			if ( trim( $w( 'text' ) ) ) {
				$o .= '<p class="hero-lead">' . fbs_html( $w( 'text' ), true ) . '</p>';
			}
			$o .= '</div>';
			break;

		case 'hero_links':
			$o = '<div class="quick" aria-label="Schnellzugriff"' . $attr . '>';
			for ( $i = 1; $i <= 4; $i++ ) {
				if ( trim( $w( 'text' . $i ) ) ) {
					$o .= '<a href="' . esc_url( fbs_ziel( $w( 'url' . $i ) ) ) . '">' . fbs_html( $w( 'text' . $i ) ) . ' <span class="arr">' . esc_html( $w( 'pfeil' ) ) . '</span></a>';
				}
			}
			$o .= '</div>';
			break;

		case 'bild':
			$o = '<div class="' . esc_attr( $r[1] ) . ' has-img"' . $attr . '>' . fbs_bild_html( $w( 'bild' ), $r[2], $w( 'alt' ) ) . '</div>';
			break;

		case 'zahl':
			if ( ! trim( $w( 'text' ) ) && ! trim( $w( 'zahl' ) ) ) {
				return fbs_leer( $teil );
			}
			$o = '<div class="fact"' . $attr . '><b>' . fbs_html( $w( 'zahl' ) ) . '</b><span>' . fbs_html( $w( 'text' ) ) . '</span></div>';
			break;

		case 'kopf':
			$o = '<div class="sec-head"' . $attr . '>';
			if ( trim( $w( 'eyebrow' ) ) ) {
				$o .= '<p class="eyebrow">' . fbs_html( $w( 'eyebrow' ) ) . '</p>';
			}
			$o .= '<h2>' . fbs_html( $w( 'titel' ) ) . '</h2>';
			if ( trim( $w( 'text' ) ) ) {
				$o .= '<p>' . fbs_html( $w( 'text' ), true ) . '</p>';
			}
			if ( isset( $teile[ $teil ][1]['linktext'] ) && trim( $w( 'linktext' ) ) ) {
				$o .= '<p class="go"><a href="' . esc_url( fbs_ziel( $w( 'url' ) ) ) . '">' . fbs_html( $w( 'linktext' ) ) . '</a></p>';
			}
			$o .= '</div>';
			break;

		case 'knopf':
			if ( ! trim( $w( 'text' ) ) ) {
				return fbs_leer( $teil );
			}
			$o = '<a class="btn"' . $attr . ' href="' . esc_url( fbs_ziel( $w( 'url' ) ) ) . '">' . fbs_html( $w( 'text' ) ) . '</a>';
			break;

		case 'kachel':
			if ( ! trim( $w( 'titel' ) ) ) {
				return fbs_leer( $teil );
			}
			$o = '<article class="tile"' . $attr . '>';
			if ( trim( $w( 'icon' ) ) || trim( $w( 'tag' ) ) ) {
				$o .= '<div class="tile-top">';
				if ( trim( $w( 'icon' ) ) ) {
					$o .= '<span class="ico" aria-hidden="true">' . esc_html( $w( 'icon' ) ) . '</span>';
				}
				if ( trim( $w( 'tag' ) ) ) {
					$o .= '<span class="tag">' . fbs_html( $w( 'tag' ) ) . '</span>';
				}
				$o .= '</div>';
			}
			$o .= '<h3>' . fbs_html( $w( 'titel' ) ) . '</h3>';
			if ( trim( $w( 'text' ) ) ) {
				$o .= '<p>' . fbs_html( $w( 'text' ), true ) . '</p>';
			}
			if ( trim( $w( 'linktext' ) ) ) {
				$o .= '<a class="go" href="' . esc_url( fbs_ziel( $w( 'url' ) ) ) . '">' . fbs_html( $w( 'linktext' ) ) . '</a>';
			}
			$o .= '</article>';
			break;

		case 'checkliste':
			if ( ! trim( $w( 'titel' ) ) ) {
				return fbs_leer( $teil );
			}
			$sym = trim( $w( 'symbol' ) );
			$o   = '<div class="checklist' . ( $sym ? ' has-sym' : '' ) . '"' . $attr . '><h3>' . fbs_html( $w( 'titel' ) ) . '</h3><ul>';
			foreach ( preg_split( '/\R/', (string) $w( 'punkte' ) ) as $punkt ) {
				if ( trim( $punkt ) ) {
					$o .= '<li>' . ( $sym ? '<span class="sym" aria-hidden="true">' . esc_html( $sym ) . '</span>' : '' ) . fbs_html( $punkt ) . '</li>';
				}
			}
			$o .= '</ul></div>';
			break;

		case 'teaser':
			if ( ! trim( $w( 'titel' ) ) ) {
				return fbs_leer( $teil );
			}
			$o = '<a class="teaser"' . $attr . ' href="' . esc_url( fbs_ziel( $w( 'url' ) ) ) . '"><div class="photo has-img">' . fbs_bild_html( $w( 'bild' ), $r[1], wp_strip_all_tags( $w( 'titel' ) ) ) . '</div><h3>' . fbs_html( $w( 'titel' ) ) . '</h3><p>' . fbs_html( $w( 'text' ) ) . '</p></a>';
			break;

		case 'news':
			$anzahl = max( 1, min( 12, (int) fbs_wert( 'news_kopf', 'anzahl' ) ) );
			$o      = '<div' . $attr . '>' . do_shortcode( '[fbs_news anzahl="' . $anzahl . '"]' ) . '</div>';
			break;

		case 'kontakt':
			if ( ! trim( $w( 'titel' ) ) ) {
				return fbs_leer( $teil );
			}
			$o = '<div' . $attr . '><h3>' . fbs_html( $w( 'titel' ) ) . '</h3><p>' . fbs_html( $w( 'text' ), true ) . '</p>';
			if ( trim( $w( 'linktext' ) ) ) {
				$o .= '<p style="margin-top:8px"><a href="' . esc_url( fbs_ziel( $w( 'url' ) ) ) . '">' . fbs_html( $w( 'linktext' ) ) . '</a></p>';
			}
			$o .= '</div>';
			break;

		case 'leitbild':
			if ( ! trim( $w( 'titel' ) ) ) {
				return fbs_leer( $teil );
			}
			$o = '<div class="leitbild"' . $attr . '>';
			if ( trim( $w( 'icon' ) ) ) {
				$o .= '<span class="ico" aria-hidden="true">' . esc_html( $w( 'icon' ) ) . '</span>';
			}
			$o .= '<div><h3>' . fbs_html( $w( 'titel' ) ) . '</h3>';
			foreach ( preg_split( '/\R\s*\R/', trim( (string) $w( 'text' ) ) ) as $absatz ) {
				if ( trim( $absatz ) ) {
					$o .= '<p>' . fbs_html( $absatz, true ) . '</p>';
				}
			}
			$o .= '</div></div>';
			break;

		case 'zurueck':
			$o = '<a class="back"' . $attr . ' href="' . esc_url( 'le_zurueck' === $teil ? home_url( '/#team' ) : home_url( '/' ) ) . '">' . fbs_html( $w( 'text' ) ) . '</a>';
			break;

		case 'beruf':
			if ( ! trim( $w( 'titel' ) ) ) {
				return fbs_leer( $teil );
			}
			$o = '<div class="job"' . $attr . '><span class="no">' . esc_html( $w( 'nummer' ) ) . '</span><div><h3>' . fbs_html( $w( 'titel' ) ) . '</h3>';
			if ( trim( $w( 'text' ) ) ) {
				$o .= '<p>' . fbs_html( $w( 'text' ), true ) . '</p>';
			}
			$o .= '</div></div>';
			break;

		case 'chips':
			$o = '<div class="extra"' . $attr . '>';
			foreach ( preg_split( '/\R/', (string) $w( 'punkte' ) ) as $punkt ) {
				if ( trim( $punkt ) ) {
					$o .= '<span class="chip">' . fbs_html( $punkt ) . '</span>';
				}
			}
			$o .= '</div>';
			break;

		case 'suche':
			$o = '<div class="search-wrap"' . $attr . ' data-leer="' . esc_attr( $w( 'leer' ) ) . '"><label class="search" for="teacher-search"><span>' . fbs_html( $w( 'label' ) ) . '</span><input id="teacher-search" type="search" placeholder="' . esc_attr( $w( 'platzhalter' ) ) . '" autocomplete="off"></label></div>';
			break;

		case 'topbar':
			$o = '<div class="wrap"' . $attr . '><nav class="switch" aria-label="Schule wählen"><span aria-current="page">FBS Villach 2</span><a href="https://www.bs-villach.at/">' . fbs_html( $w( 'schule1' ) ) . '</a></nav><span>' . fbs_html( $w( 'text' ) ) . '</span></div>';
			break;

		case 'logo':
			$id  = absint( $w( 'bild' ) );
			$img = $id && wp_attachment_is_image( $id ) ? wp_get_attachment_image( $id, 'medium_large', false, array( 'alt' => $w( 'alt' ) ) ) : '<img src="' . esc_url( get_theme_file_uri( 'logo.png' ) ) . '" alt="' . esc_attr( $w( 'alt' ) ) . '" width="548" height="200">';
			$o   = '<a class="logo"' . $attr . ' href="' . esc_url( home_url( '/' ) ) . '">' . $img . '</a>';
			break;

		case 'fuss':
			$o = '<span' . $attr . '>' . fbs_html( $w( 'text' ) ) . ' · <a href="https://www.bs-villach.at/">Zur FBS Villach 1</a></span>';
			break;
	}
	return $o;
}

/* ------------------------------------------------------------------ */
/* Customizer: Panels, Bereiche, Felder und Stift-Symbole              */
/* ------------------------------------------------------------------ */

/**
 * Seite, die gerade in der Vorschau offen ist.
 *
 * @param string $seite Kurzname.
 * @return bool
 */
function fbs_ist_seite( $seite ) {
	switch ( $seite ) {
		case 'start':
			return is_front_page();
		case 'news':
			return is_home() || is_archive();
		case '':
			return true;
		default:
			return is_page( $seite );
	}
}

add_action(
	'customize_register',
	function ( $wp_customize ) {
		if ( ! class_exists( 'FBS_Link_Control' ) ) {
			/**
			 * Link-Feld mit Knopf zum Hochladen oder Auswählen einer Datei (z. B. PDF) aus der Mediathek.
			 */
			class FBS_Link_Control extends WP_Customize_Control {
				/**
				 * Typ.
				 *
				 * @var string
				 */
				public $type = 'fbs_link';

				/**
				 * Feld ausgeben.
				 */
				public function render_content() {
					echo '<label><span class="customize-control-title">' . esc_html( $this->label ) . '</span>';
					if ( $this->description ) {
						echo '<span class="description customize-control-description">' . esc_html( $this->description ) . '</span>';
					}
					echo '<input type="text" value="' . esc_attr( $this->value() ) . '" ';
					$this->link();
					echo '></label>';
					echo '<p style="margin:6px 0 0"><button type="button" class="button fbs-datei">📄 PDF hochladen / auswählen</button></p>';
				}
			}
		}
		$prio = 1;
		foreach ( fbs_inhalte() as $panel_id => $p ) {
			$seite = $p[1];
			$wp_customize->add_panel(
				$panel_id,
				array(
					'title'           => $p[0],
					'description'     => 'Klicken Sie in der Vorschau rechts auf ein blaues Stift-Symbol, dann öffnet sich hier genau das passende Feld. Änderungen sehen Sie sofort. Zum Schluss oben auf „Veröffentlichen“ klicken.',
					'priority'        => $prio++,
					'active_callback' => function () use ( $seite ) {
						return fbs_ist_seite( $seite );
					},
				)
			);
			$sp = 1;
			foreach ( $p[2] as $bereich_id => $bereich ) {
				$wp_customize->add_section(
					'fbs_s_' . $bereich_id,
					array(
						'title'       => $bereich[0],
						'description' => $bereich[2] ?? '',
						'panel'       => $panel_id,
						'priority' => $sp++,
					)
				);
				foreach ( $bereich[1] as $teil => $t ) {
					$settings = array();
					foreach ( $t[1] as $key => $f ) {
						$id         = 'fbs_' . $teil . '_' . $key;
						$settings[] = $id;
						$wp_customize->add_setting(
							$id,
							array(
								'default'           => $f[2],
								'transport'         => 'postMessage',
								'sanitize_callback' => 'fbs_sanitize_' . ( in_array( $f[0], array( 'bild', 'url' ), true ) ? $f[0] : ( 'icon' === $f[0] ? 'icon' : 'text' ) ),
							)
						);
						if ( 'bild' === $f[0] ) {
							$wp_customize->add_control(
								new WP_Customize_Media_Control(
									$wp_customize,
									$id,
									array(
										'label'       => $f[1],
										'description' => 'Foto auswählen oder hochladen. „Entfernen“ zeigt wieder den Platzhalter.',
										'section'     => 'fbs_s_' . $bereich_id,
										'mime_type'   => 'image',
									)
								)
							);
							continue;
						}
						if ( 'url' === $f[0] ) {
							$wp_customize->add_control(
								new FBS_Link_Control(
									$wp_customize,
									$id,
									array(
										'label'       => $f[1],
										'description' => 'PDF oder andere Datei: auf „PDF hochladen / auswählen“ klicken. Oder eine Internet-Adresse (https://…) eintippen.',
										'section'     => 'fbs_s_' . $bereich_id,
									)
								)
							);
							continue;
						}
						$wp_customize->add_control(
							$id,
							array(
								'label'       => $f[1],
								'description' => 'icon' === $f[0] ? 'Emoji einfügen: Windows-Taste + Punkt (am Mac: Control + Befehl + Leertaste).' : ( 'url' === $f[0] ? 'Ganze Adresse, z. B. https://… oder ein PDF-Link.' : '' ),
								'section'     => 'fbs_s_' . $bereich_id,
								'type'        => in_array( $f[0], array( 'textarea', 'liste' ), true ) ? 'textarea' : ( 'url' === $f[0] ? 'text' : 'text' ),
							)
						);
					}
					if ( ! $settings && 'news' === $t[0] ) {
						$settings = array( 'fbs_news_kopf_anzahl' );
					}
					$wp_customize->selective_refresh->add_partial(
						'fbs_p_' . $teil,
						array(
							'selector'            => '[data-fbs="' . $teil . '"]',
							'settings'            => $settings,
							'container_inclusive' => true,
							'render_callback'     => function () use ( $teil ) {
								return fbs_teil_html( $teil );
							},
							'fallback_refresh'    => true,
						)
					);
				}
			}
		}
	}
);

/**
 * Text bereinigen.
 *
 * @param string $v Wert.
 * @return string
 */
function fbs_sanitize_text( $v ) {
	return wp_kses(
		(string) $v,
		array(
			'a'      => array( 'href' => array() ),
			'em'     => array(),
			'strong' => array(),
			'b'      => array(),
			'br'     => array(),
		)
	);
}

/**
 * Icon bereinigen.
 *
 * @param string $v Wert.
 * @return string
 */
function fbs_sanitize_icon( $v ) {
	return mb_substr( sanitize_text_field( (string) $v ), 0, 8 );
}

/**
 * Adresse bereinigen (auch #anker und seite:…).
 *
 * @param string $v Wert.
 * @return string
 */
function fbs_sanitize_url( $v ) {
	$v = trim( (string) $v );
	if ( '' === $v || '#' === $v[0] || 0 === strpos( $v, 'seite:' ) ) {
		return sanitize_text_field( $v );
	}
	return esc_url_raw( $v );
}

/**
 * Bild bereinigen.
 *
 * @param mixed $v Anhang-ID.
 * @return int
 */
function fbs_sanitize_bild( $v ) {
	return absint( $v );
}

/* Knopf „PDF hochladen / auswählen“: öffnet die Mediathek und trägt die Adresse der Datei ein. */
add_action(
	'customize_controls_enqueue_scripts',
	function () {
		wp_enqueue_media();
		wp_add_inline_script(
			'customize-controls',
			'jQuery(function($){$(document).on("click",".fbs-datei",function(e){e.preventDefault();var input=$(this).closest(".customize-control").find("input[type=text]");var frame=wp.media({title:"Datei auswählen oder hochladen",button:{text:"Diese Datei verwenden"},multiple:false});frame.on("select",function(){var a=frame.state().get("selection").first().toJSON();input.val(a.url).trigger("change");});frame.open();});});'
		);
	}
);

/* Leere Teile in der Vorschau sichtbar machen, damit man sie wieder befüllen kann. */
add_action(
	'wp_head',
	function () {
		if ( is_customize_preview() ) {
			echo '<style>[data-fbs][hidden]{display:block!important;min-height:44px;border:2px dashed #bbb;opacity:.6}[data-fbs][hidden]::after{content:"Leer: zum Befüllen auf den Stift klicken";display:block;padding:12px;font:14px/1.3 sans-serif;color:#555}</style>';
		}
	}
);

/* ------------------------------------------------------------------ */
/* Admin: Menüpunkt „Website bearbeiten“ und Weiterleitungen           */
/* ------------------------------------------------------------------ */

/**
 * Adresse des Live-Editors für eine Seite.
 *
 * @param string $panel Panel.
 * @param string $url   Vorschau-Adresse.
 * @return string
 */
function fbs_live_url( $panel, $url ) {
	return add_query_arg(
		array(
			'url'              => rawurlencode( $url ),
			'autofocus[panel]' => $panel,
		),
		admin_url( 'customize.php' )
	);
}

/**
 * Live-Editor-Ziele.
 *
 * @return array
 */
function fbs_live_ziele() {
	return array(
		'start'       => array( 'Startseite', 'fbs_p_start', home_url( '/' ) ),
		'lehrberufe'  => array( 'Lehrberufe', 'fbs_p_lehrberufe', fbs_page_url( 'lehrberufe' ) ),
		'lehrerinnen' => array( 'Lehrer*innen', 'fbs_p_lehrerinnen', fbs_page_url( 'lehrerinnen' ) ),
		'news'        => array( 'Seite Alle News', 'fbs_p_news', fbs_page_url( 'news' ) ),
		'kopf'        => array( 'Kopf- und Fußzeile', 'fbs_p_kopf', home_url( '/' ) ),
	);
}

add_action(
	'admin_menu',
	function () {
		add_menu_page( 'Website bearbeiten', 'Website bearbeiten', 'edit_theme_options', 'fbs-live', 'fbs_live_seite', 'dashicons-edit-page', 2 );
		foreach ( fbs_live_ziele() as $slug => $z ) {
			add_submenu_page( 'fbs-live', $z[0], $z[0], 'edit_theme_options', 'fbs-live-' . $slug, '__return_null' );
		}
	}
);

/* Menüpunkte direkt in den Live-Editor leiten. */
add_action(
	'admin_init',
	function () {
		if ( ! isset( $_GET['page'] ) || ! current_user_can( 'edit_theme_options' ) ) { // phpcs:ignore WordPress.Security.NonceVerification
			return;
		}
		$page = sanitize_key( wp_unslash( $_GET['page'] ) ); // phpcs:ignore WordPress.Security.NonceVerification
		$z    = fbs_live_ziele();
		$slug = 'fbs-live' === $page ? 'start' : str_replace( 'fbs-live-', '', $page );
		if ( 0 === strpos( $page, 'fbs-live' ) && isset( $z[ $slug ] ) ) {
			wp_safe_redirect( fbs_live_url( $z[ $slug ][1], $z[ $slug ][2] ) );
			exit;
		}
	}
);

/**
 * Fallback, falls die Weiterleitung nicht greift.
 */
function fbs_live_seite() {
	echo '<div class="wrap"><h1>Website bearbeiten</h1><ul>';
	foreach ( fbs_live_ziele() as $z ) {
		echo '<li><a class="button button-primary" style="margin:6px 0" href="' . esc_url( fbs_live_url( $z[1], $z[2] ) ) . '">' . esc_html( $z[0] ) . ' bearbeiten</a></li>';
	}
	echo '</ul></div>';
}

/* „Seiten → Startseite / Lehrberufe / Lehrer*innen“ öffnet direkt den Live-Editor. */
add_action(
	'load-post.php',
	function () {
		$id = isset( $_GET['post'] ) ? absint( $_GET['post'] ) : 0; // phpcs:ignore WordPress.Security.NonceVerification
		if ( ! $id || ! current_user_can( 'edit_theme_options' ) || ( isset( $_GET['action'] ) && 'edit' !== $_GET['action'] ) ) { // phpcs:ignore WordPress.Security.NonceVerification
			return;
		}
		$post = get_post( $id );
		$z    = fbs_live_ziele();
		if ( $post && 'page' === $post->post_type && isset( $z[ $post->post_name ] ) && ! in_array( $post->post_name, array( 'kopf', 'news' ), true ) ) {
			wp_safe_redirect( fbs_live_url( $z[ $post->post_name ][1], $z[ $post->post_name ][2] ) );
			exit;
		}
	}
);

/* Hinweis in der Seitenliste. */
add_filter(
	'display_post_states',
	function ( $states, $post ) {
		if ( 'page' === $post->post_type && in_array( $post->post_name, array( 'start', 'lehrberufe', 'lehrerinnen' ), true ) ) {
			$states['fbs_live'] = 'Wird live bearbeitet (Website bearbeiten)';
		}
		return $states;
	},
	10,
	2
);

/* Oben in der schwarzen Leiste: „Diese Seite bearbeiten“ führt in den Live-Editor. */
add_action(
	'admin_bar_menu',
	function ( $bar ) {
		if ( is_admin() || ! current_user_can( 'edit_theme_options' ) ) {
			return;
		}
		$z    = fbs_live_ziele();
		$slug = is_front_page() ? 'start' : ( is_home() ? 'news' : ( is_page( array( 'lehrberufe', 'lehrerinnen' ) ) ? get_post_field( 'post_name', get_queried_object_id() ) : '' ) );
		if ( $slug && isset( $z[ $slug ] ) ) {
			$bar->remove_node( 'edit' );
			$bar->add_node(
				array(
					'id'    => 'fbs-live',
					'title' => '✏️ Diese Seite bearbeiten',
					'href'  => fbs_live_url( $z[ $slug ][1], $z[ $slug ][2] ),
				)
			);
		}
	},
	90
);

/**
 * Alle gespeicherten Inhalte eines Panels löschen (zurück zur Vorlage).
 *
 * @param string $panel Panel.
 */
function fbs_panel_zuruecksetzen( $panel ) {
	foreach ( fbs_teile() as $teil => $t ) {
		if ( $t[2] === $panel ) {
			foreach ( array_keys( $t[1] ) as $key ) {
				remove_theme_mod( 'fbs_' . $teil . '_' . $key );
			}
		}
	}
}
