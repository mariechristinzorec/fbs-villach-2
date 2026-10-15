<?php
/**
 * Startinhalte: werden beim ersten Aktivieren des Themes einmalig angelegt.
 *
 * @package FBS_Villach_2
 */

defined( 'ABSPATH' ) || exit;

/**
 * Legt Seiten, Team und erste News an. Läuft nur einmal.
 */
function fbs_startinhalte_anlegen() {
	if ( get_option( 'fbs_startinhalte_v1' ) ) {
		return;
	}

	$seiten = array(
		'start'       => array( 'Startseite', '' ),
		'news'        => array( 'News', '' ),
		'lehrberufe'  => array( 'Lehrberufe', '' ),
		'lehrerinnen' => array( 'Lehrer*innen', '' ),
		'impressum'   => array( 'Impressum', '<h3>Kontakt- &amp; Adressdaten</h3>
    <p><b>Adresse</b><br>Fachberufsschule Villach 2<br>Tiroler Straße 23<br>9500 Villach</p>
    <p><b>Telefon &amp; Fax</b><br>Telefon: 04242 56257-200<br>Fax: 04242 56257-203</p>
    <p><b>E-Mail</b><br>villach2@bs.ksn.at</p>
    <h3>Leiter</h3>
    <p>BD Ing. Alfred Madrutter, BEd</p>
    <h3>Für den Inhalt verantwortlich</h3>
    <p>BD Ing. Alfred Madrutter, BEd</p>
    <h3>Kontakt</h3>
    <p>Fragen zur Website richten Sie bitte an die oben genannte E-Mail-Adresse. Informationen zum Umgang mit Ihren Daten finden Sie in der <a href="datenschutz.html">Datenschutzerklärung</a>.</p>
    <p>© 2026 Fachberufsschule Villach 2</p>' ),
		'datenschutz' => array( 'Datenschutzerklärung', '<h3>Einleitung und Überblick</h3>
    <p>Mit dieser Datenschutzerklärung informieren wir Sie darüber, welche personenbezogenen Daten wir verarbeiten, wenn Sie unsere Website besuchen, und welche Rechte Sie haben. Diese Website sammelt so wenige Daten wie möglich.</p>

    <h3>Anwendungsbereich</h3>
    <p>Diese Datenschutzerklärung gilt für die Website der Fachberufsschule Villach 2. Für andere Websites, auf die wir verlinken, gelten deren eigene Datenschutzerklärungen.</p>

    <h3>Rechtsgrundlagen</h3>
    <p>Wir verarbeiten personenbezogene Daten nur, wenn eine Rechtsgrundlage nach der Datenschutz-Grundverordnung (DSGVO) besteht. Das sind insbesondere Ihre Einwilligung (Art. 6 Abs. 1 lit. a DSGVO), die Erfüllung rechtlicher Pflichten (Art. 6 Abs. 1 lit. c DSGVO) und unser berechtigtes Interesse an einem sicheren Betrieb der Website (Art. 6 Abs. 1 lit. f DSGVO). Ergänzend gilt das österreichische Datenschutzgesetz (DSG).</p>

    <h3>Kontaktdaten des Verantwortlichen</h3>
    <p>Fachberufsschule Villach 2<br>BD Ing. Alfred Madrutter, BEd<br>Tiroler Straße 23, 9500 Villach<br>Telefon: 04242 56257-200<br>E-Mail: villach2@bs.ksn.at<br>Impressum: <a href="impressum.html">Impressum</a></p>

    <h3>Speicherdauer</h3>
    <p>Wir speichern personenbezogene Daten nur so lange, wie es für den jeweiligen Zweck nötig ist oder gesetzliche Aufbewahrungspflichten es verlangen. Danach werden sie gelöscht.</p>

    <h3>Ihre Rechte laut DSGVO</h3>
    <p>Sie haben das Recht auf Auskunft (Art. 15), Berichtigung (Art. 16), Löschung (Art. 17), Einschränkung der Verarbeitung (Art. 18), Datenübertragbarkeit (Art. 20) und Widerspruch (Art. 21). Eine erteilte Einwilligung können Sie jederzeit widerrufen. Wenden Sie sich dazu an die oben genannte Adresse.</p>

    <h3>Österreichische Datenschutzbehörde</h3>
    <p>Wenn Sie glauben, dass die Verarbeitung Ihrer Daten gegen das Datenschutzrecht verstößt, können Sie sich bei der Österreichischen Datenschutzbehörde beschweren: Barichgasse 40–42, 1030 Wien, <a href="https://www.dsb.gv.at">www.dsb.gv.at</a>.</p>

    <h3>Datenübertragung in Drittländer</h3>
    <p>Diese Website wird in Österreich gehostet. Eine Übertragung Ihrer Daten in Länder außerhalb der EU findet beim Besuch der Website nicht statt.</p>

    <h3>Sicherheit der Datenverarbeitung</h3>
    <p>Wir treffen technische und organisatorische Maßnahmen, um Ihre Daten zu schützen. Die Website verwendet keine Kontaktformulare und keine Kommentarfunktion, dadurch fallen kaum Daten an.</p>

    <h3>TLS-Verschlüsselung mit https</h3>
    <p>Die Website wird ausschließlich verschlüsselt über https übertragen. Sie erkennen das am Schloss-Symbol in der Adresszeile Ihres Browsers.</p>

    <h3>Kommunikation</h3>
    <p>Wenn Sie uns per Telefon oder E-Mail kontaktieren, verarbeiten wir Ihre Angaben, um Ihre Anfrage zu bearbeiten. Nach Abschluss der Anfrage löschen wir die Daten, sofern keine gesetzliche Aufbewahrungspflicht besteht.</p>

    <h3>Cookies</h3>
    <p>Für Besucher*innen setzt diese Website keine Cookies und verwendet keine Analyse-, Tracking- oder Werbedienste. Deshalb gibt es auch kein Cookie-Banner. Nur wenn sich Mitarbeiter*innen der Schule zur Bearbeitung der Website anmelden, setzt WordPress technisch notwendige Anmelde-Cookies.</p>

    <h3>Webhosting</h3>
    <p>Die Website wird bei <span class="todo">[Name, Adresse und Website des Hosting-Anbieters ergänzen]</span> in Österreich gehostet. Beim Aufruf einer Seite speichert der Server automatisch technische Daten wie Ihre IP-Adresse, Datum und Uhrzeit, die aufgerufene Seite und den verwendeten Browser. Das ist nötig, um die Website sicher auszuliefern und Angriffe abzuwehren (berechtigtes Interesse, Art. 6 Abs. 1 lit. f DSGVO). Diese Daten werden nach <span class="todo">[Speicherdauer laut Hoster, z. B. 14 Tagen]</span> gelöscht.</p>

    <h3>Schriften</h3>
    <p>Die verwendeten Schriften sind direkt auf dieser Website gespeichert. Es wird keine Verbindung zu Google Fonts oder anderen Anbietern aufgebaut.</p>

    <h3>Online-Kartendienste und externe Links</h3>
    <p>Wir binden keine Karten oder Videos ein. Der Link „Anfahrt in Google Maps“ öffnet die Website von Google erst, wenn Sie ihn anklicken. Ab dann gilt die <a href="https://policies.google.com/privacy?hl=de">Datenschutzerklärung von Google</a>. Dasselbe gilt für Links zu Moodle und zur Website der FBS Villach 1.</p>

    <h3>Fotos und Namen</h3>
    <p>Namen und Fotos von Lehrer*innen und Schüler*innen veröffentlichen wir nur mit deren Einwilligung (Art. 6 Abs. 1 lit. a DSGVO). Die Einwilligung kann jederzeit widerrufen werden.</p>

    <h3>Erklärung verwendeter Begriffe</h3>
    <p><b>Personenbezogene Daten</b> sind alle Informationen, die sich auf eine bestimmte Person beziehen, etwa Name, E-Mail-Adresse oder IP-Adresse.<br><b>Einwilligung</b> ist Ihre freiwillige und eindeutige Zustimmung zu einer bestimmten Verarbeitung Ihrer Daten.</p>

    <p>Stand: Oktober 2026</p>' ),
	);
	update_option( 'permalink_structure', '/%postname%/' );
	$links = array(
		'href="impressum.html"'   => 'href="' . esc_url( home_url( '/impressum/' ) ) . '"',
		'href="datenschutz.html"' => 'href="' . esc_url( home_url( '/datenschutz/' ) ) . '"',
	);
	$ids   = array();
	foreach ( $seiten as $slug => $daten ) {
		$vorhanden = get_page_by_path( $slug );
		if ( $vorhanden ) {
			$ids[ $slug ] = $vorhanden->ID;
			continue;
		}
		$ids[ $slug ] = wp_insert_post(
			array(
				'post_type'    => 'page',
				'post_status'  => 'publish',
				'post_name'    => $slug,
				'post_title'   => $daten[0],
				'post_content' => $daten[1] ? "<!-- wp:html -->\n" . strtr( $daten[1], $links ) . "\n<!-- /wp:html -->" : '',
			)
		);
	}
	update_option( 'blogname', 'Fachberufsschule Villach 2' );
	update_option( 'blogdescription', 'Metall · Elektro · Kfz' );
	update_option( 'show_on_front', 'page' );
	update_option( 'page_on_front', $ids['start'] );
	update_option( 'page_for_posts', $ids['news'] );
	update_option( 'wp_page_for_privacy_policy', $ids['datenschutz'] );
	update_option( 'default_comment_status', 'closed' );
	update_option( 'default_ping_status', 'closed' );

	$team = array(
		array( 'BD Ing. Alfred Madrutter, BEd', 'leitung', 'Direktor', '', '', 0 ),
		array( 'Ing. Markus Wettl, BEd', 'leitung', 'Direktor-Stellvertreter', '', '', 1 ),
		array( 'Maria Fischbacher', 'leitung', 'Sekretariat', '04242 56257-210', '', 2 ),
		array( 'Elisabeth Managau', 'leitung', 'Sekretariat', '04242 56257-200', '', 3 ),
		array( 'Gebhard Bergner', 'lehrer', '', '', '', 0 ),
		array( 'Harald Buchleitner', 'lehrer', '', '', '', 1 ),
		array( 'Mag. Sigrid Diamante-Thelesklav, BEd', 'lehrer', '', '', '', 2 ),
		array( 'Daniel Ebner', 'lehrer', '', '', '', 3 ),
		array( 'Ing. Marco Ebner, BEd', 'lehrer', '', '', '', 4 ),
		array( 'Ing. Herbert Erlacher, BEd', 'lehrer', '', '', '', 5 ),
		array( 'Claudia Felsinger', 'lehrer', '', '', '', 6 ),
		array( 'Daniel Haid, BEd', 'lehrer', '', '', '', 7 ),
		array( 'Caroline Holzer, BEd', 'lehrer', '', '', '', 8 ),
		array( 'Ing. Günther Hopfgartner', 'lehrer', '', '', '', 9 ),
		array( 'Mag. Karlheinz Juvan', 'lehrer', '', '', '', 10 ),
		array( 'Johann Kämmerer', 'lehrer', '', '', '', 11 ),
		array( 'Johann Klampferer', 'lehrer', '', '', '', 12 ),
		array( 'Dalibor Krajisnik', 'lehrer', '', '', '', 13 ),
		array( 'Verena Krall, BEd', 'lehrer', '', '', '', 14 ),
		array( 'Manuel Kraxner', 'lehrer', '', '', '', 15 ),
		array( 'Ing. Siegfried Kröpfl', 'lehrer', '', '', '', 16 ),
		array( 'Joachim Lamprecht', 'lehrer', '', '', '', 17 ),
		array( 'Ing. Alfred Madrutter, BEd', 'lehrer', '', '', '', 18 ),
		array( 'Dipl.-Päd. Ing. Joachim Maierwieser', 'lehrer', '', '', '', 19 ),
		array( 'Matthias Maurer, BEd', 'lehrer', '', '', '', 20 ),
		array( 'Johannes Messner', 'lehrer', '', '', '', 21 ),
		array( 'Ing. Dieter Nakent, BEd', 'lehrer', '', '', '', 22 ),
		array( 'Philipp Novak', 'lehrer', '', '', '', 23 ),
		array( 'Ing. Mario Olsacher, BEd', 'lehrer', '', '', '', 24 ),
		array( 'Rudolf Petritsch, BEd', 'lehrer', '', '', '', 25 ),
		array( 'Christian Prugger', 'lehrer', '', '', '', 26 ),
		array( 'Robert Ranacher, BEd', 'lehrer', '', '', '', 27 ),
		array( 'Mag. Horst Rischnig', 'lehrer', '', '', '', 28 ),
		array( 'Ing. Wolfgang Schöller', 'lehrer', '', '', '', 29 ),
		array( 'Alexander Steiner, BEd', 'lehrer', '', '', '', 30 ),
		array( 'Othmar Strießnig, BEd', 'lehrer', '', '', '', 31 ),
		array( 'Josef Trattnig', 'lehrer', '', '', '', 32 ),
		array( 'Hannes Unterhohenwarter, BEd', 'lehrer', '', '', '', 33 ),
		array( 'Joseph Unterlerchner', 'lehrer', '', '', '', 34 ),
		array( 'Ing. Markus Wettl, BEd', 'lehrer', '', '', '', 35 ),
		array( 'Eckhard Winkler', 'lehrer', '', '', '', 36 ),
		array( 'Ing. Wilfried Wohlgemuth, BEd', 'lehrer', '', '', '', 37 ),
		array( 'Dipl.-Ing. (FH) Wolfgang Zerza, BA BEd', 'lehrer', '', '', '', 38 ),
	);
	if ( ! get_posts( array( 'post_type' => 'fbs_team', 'posts_per_page' => 1, 'post_status' => 'any' ) ) ) {
		foreach ( $team as $p ) {
			wp_insert_post(
				array(
					'post_type'   => 'fbs_team',
					'post_status' => 'publish',
					'post_title'  => $p[0],
					'menu_order'  => $p[5],
					'meta_input'  => array(
						'fbs_bereich' => $p[1],
						'fbs_rolle'   => $p[2],
						'fbs_telefon' => $p[3],
						'fbs_faecher' => $p[4],
					),
				)
			);
		}
	}

	$news = array(
		array( 'Maturatermine Herbst 2026', '2026-09-01 08:00:00', 'Lehre mit Matura', '<!-- wp:paragraph -->
<p>Schriftliche Prüfung: 18.09.2026, Beginn 8:00 Uhr.</p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p>Mündliche Prüfung: 02.10.2026, Beginn 8:00 Uhr.</p>
<!-- /wp:paragraph -->
' ),
		array( 'Ein eMazda2 für unsere Werkstatt', '2026-06-01 08:00:00', 'Kfz-Technik', '<!-- wp:paragraph -->
<p>Die WKO hat uns ein Elektroauto für den Kfz-Unterricht übergeben. So lernen unsere Lehrlinge E-Mobilität direkt am Fahrzeug.</p>
<!-- /wp:paragraph -->
' ),
		array( 'Stromaggregat für die Feuerwehr', '2026-05-01 08:00:00', 'Projekte', '<!-- wp:paragraph -->
<p>Unsere Klassen haben ein Stromaggregat revitalisiert und an die Hauptfeuerwache Villach übergeben.</p>
<!-- /wp:paragraph -->
' ),
	);
	foreach ( $news as $n ) {
		$kat = term_exists( $n[2], 'category' );
		if ( ! $kat ) {
			$kat = wp_insert_term( $n[2], 'category' );
		}
		wp_insert_post(
			array(
				'post_status'    => 'publish',
				'post_title'     => $n[0],
				'post_date'      => $n[1],
				'post_content'   => $n[3],
				'post_category'  => array( (int) ( is_array( $kat ) ? $kat['term_id'] : $kat ) ),
				'comment_status' => 'closed',
			)
		);
	}

	// Die Beispielinhalte einer frischen WordPress-Installation entfernen.
	$hallo = get_page_by_path( 'hallo-welt', OBJECT, 'post' );
	if ( ! $hallo ) {
		$hallo = get_page_by_path( 'hello-world', OBJECT, 'post' );
	}
	if ( $hallo ) {
		wp_delete_post( $hallo->ID, true );
	}
	foreach ( array( 'beispiel-seite', 'sample-page' ) as $slug ) {
		$beispiel = get_page_by_path( $slug );
		if ( $beispiel ) {
			wp_delete_post( $beispiel->ID, true );
		}
	}

	update_option( 'fbs_startinhalte_v1', 1 );
	flush_rewrite_rules();
}
