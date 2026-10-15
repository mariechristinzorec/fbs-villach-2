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
		'impressum'   => array( 'Impressum', '' ),
		'datenschutz' => array( 'Datenschutzerklärung', '' ),
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
	fbs_inhalte_v2();
}

/**
 * Platzhalterbild eines Bildplatzes in die Mediathek holen (einmalig).
 *
 * @param string $key Bildplatz.
 * @return int Anhang-ID.
 */
function fbs_platzhalter_id( $key ) {
	$alt = absint( get_theme_mod( 'fbs_bild_' . $key, 0 ) );
	if ( $alt && wp_attachment_is_image( $alt ) ) {
		return $alt;
	}
	$ids = get_option( 'fbs_platzhalter_ids', array() );
	if ( ! empty( $ids[ $key ] ) && wp_attachment_is_image( $ids[ $key ] ) ) {
		return (int) $ids[ $key ];
	}
	require_once ABSPATH . 'wp-admin/includes/image.php';
	require_once ABSPATH . 'wp-admin/includes/file.php';
	require_once ABSPATH . 'wp-admin/includes/media.php';
	$quelle = get_template_directory() . '/platzhalter/' . $key . '.jpg';
	$tmp    = wp_tempnam( $key . '.jpg' );
	copy( $quelle, $tmp );
	$id = media_handle_sideload(
		array(
			'name'     => 'platzhalter-' . str_replace( '_', '-', $key ) . '.jpg',
			'tmp_name' => $tmp,
		),
		0,
		'Platzhalter: bitte ersetzen'
	);
	if ( is_wp_error( $id ) ) {
		return 0;
	}
	$ids[ $key ] = $id;
	update_option( 'fbs_platzhalter_ids', $ids );
	return $id;
}

/**
 * Seiteninhalte als bearbeitbare Blöcke anlegen. Läuft einmal, auch bei bestehenden Installationen.
 * Seiten, die schon eigene Inhalte haben, bleiben unverändert.
 */
function fbs_inhalte_v2( $nur = '' ) {
	if ( ! $nur && get_option( 'fbs_inhalte_v2' ) ) {
		return;
	}
	if ( ! $nur ) {
		update_option( 'fbs_inhalte_v2', 1 );
	}

	$ersetzen = array(
		'{{url_lehrberufe}}'  => esc_url( fbs_page_url( 'lehrberufe' ) ),
		'{{url_news}}'        => esc_url( fbs_page_url( 'news' ) ),
		'{{url_lehrerinnen}}' => esc_url( fbs_page_url( 'lehrerinnen' ) ),
		'{{url_impressum}}'   => esc_url( fbs_page_url( 'impressum' ) ),
		'{{url_datenschutz}}' => esc_url( fbs_page_url( 'datenschutz' ) ),
	);
	$vorlagen = fbs_block_vorlagen();
	foreach ( $vorlagen as $slug => $vorlage ) {
		if ( $nur && $nur !== $slug ) {
			continue;
		}
		$seite = get_page_by_path( $slug );
		if ( ! $seite ) {
			continue;
		}
		$inhalt  = trim( $seite->post_content );
		$alt_html = 0 === strpos( $inhalt, '<!-- wp:html -->' ) && $seite->post_modified === $seite->post_date;
		if ( ! $nur && '' !== $inhalt && ! $alt_html ) {
			continue;
		}
		if ( preg_match_all( '/\{\{(?:id|url):([a-z_]+)\}\}/', $vorlage, $treffer ) ) {
			foreach ( array_unique( $treffer[1] ) as $key ) {
				$id                          = fbs_platzhalter_id( $key );
				$ersetzen[ '{{id:' . $key . '}}' ]  = (string) $id;
				$ersetzen[ '{{url:' . $key . '}}' ] = esc_url( (string) wp_get_attachment_url( $id ) );
			}
		}
		wp_update_post(
			array(
				'ID'           => $seite->ID,
				'post_content' => wp_slash( strtr( $vorlage, $ersetzen ) ),
			)
		);
	}
}

/* Website bearbeiten > Vorlage wiederherstellen: eine Seite auf den Ausgangsinhalt zurücksetzen. */
add_action(
	'admin_menu',
	function () {
		add_submenu_page( 'fbs-live', 'Vorlage wiederherstellen', 'Vorlage wiederherstellen', 'edit_theme_options', 'fbs-vorlage', 'fbs_vorlage_seite' );
	},
	20
);

/**
 * Seite „Vorlage wiederherstellen“.
 */
function fbs_vorlage_seite() {
	$namen = array(
		'start'       => 'Startseite (alle Texte, Bilder und Icons)',
		'lehrberufe'  => 'Seite Lehrberufe',
		'lehrerinnen' => 'Seite Lehrer*innen (Texte über den Karteikarten)',
		'news'        => 'Seite Alle News (Überschrift)',
		'kopf'        => 'Kopf- und Fußzeile',
		'impressum'   => 'Impressum',
		'datenschutz' => 'Datenschutzerklärung',
	);
	if ( isset( $_POST['fbs_seite'], $_POST['fbs_vorlage_nonce'] ) && wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['fbs_vorlage_nonce'] ) ), 'fbs_vorlage' ) && current_user_can( 'edit_theme_options' ) ) {
		$slug = sanitize_key( wp_unslash( $_POST['fbs_seite'] ) );
		if ( isset( $namen[ $slug ] ) ) {
			if ( in_array( $slug, array( 'impressum', 'datenschutz' ), true ) ) {
				fbs_inhalte_v2( $slug );
			} else {
				fbs_panel_zuruecksetzen( 'fbs_p_' . $slug );
			}
			echo '<div class="notice notice-success"><p>' . esc_html( $namen[ $slug ] ) . ' wurde auf die Vorlage zurückgesetzt.</p></div>';
		}
	}
	echo '<div class="wrap"><h1>Vorlage wiederherstellen</h1>';
	echo '<p>Hier setzen Sie eine Seite auf den ursprünglichen Inhalt mit allen Bereichen zurück. <strong>Ihre Änderungen an dieser Seite gehen dabei verloren.</strong> News, Team und Fotos in der Mediathek bleiben erhalten.</p>';
	echo '<form method="post">';
	wp_nonce_field( 'fbs_vorlage', 'fbs_vorlage_nonce' );
	echo '<p><label for="fbs_seite">Seite: </label><select id="fbs_seite" name="fbs_seite">';
	foreach ( $namen as $slug => $name ) {
		echo '<option value="' . esc_attr( $slug ) . '">' . esc_html( $name ) . '</option>';
	}
	echo '</select></p>';
	submit_button( 'Zurücksetzen', 'secondary' );
	echo '</form></div>';
}
