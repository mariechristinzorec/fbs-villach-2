<?php
/**
 * Aktuelle Lehrer*innen-Liste (Stand Oktober 2026, aus der Excel-Liste der Schule).
 *
 * Wird nach dem Theme-Update einmal abgeglichen: E-Mail-Adressen eintragen, fehlende Personen ergänzen,
 * Personen, die nicht mehr in der Liste stehen, als Entwurf ausblenden (nicht löschen).
 *
 * @package FBS_Villach_2
 */

defined( 'ABSPATH' ) || exit;

/**
 * Liste: [ Anzeigename, Vorname, Nachname, E-Mail ].
 *
 * @return array
 */
function fbs_team_liste() {
	return array(
		array( 'Thomas Bärnthaler', 'Thomas', 'Bärnthaler', 'tbaernthaler@fbs.ksn.at' ),
		array( 'Gernot Bierbaumer', 'Gernot', 'Bierbaumer', '' ),
		array( 'Bernd Brandner', 'Bernd', 'Brandner', 'bernd.brandner@bs.ksn.at' ),
		array( 'Martin Buchacher', 'Martin', 'Buchacher', 'martin.buchacher@bs.ksn.at' ),
		array( 'Harald Buchleitner', 'Harald', 'Buchleitner', 'harald.buchleitner@bs.ksn.at' ),
		array( 'Mag. Sigrid Diamante-Thelesklav, BEd', 'Sigrid', 'Diamante-Thelesklav', 'sigrid.diamante-thelesklav@bs.ksn.at' ),
		array( 'Daniel Ebner', 'Daniel', 'Ebner', 'danielmartin.ebner@bs.ksn.at' ),
		array( 'Ing. Marco Ebner, BEd', 'Marco', 'Ebner', 'marco.ebner@bs.ksn.at' ),
		array( 'Johannes Eggert', 'Johannes', 'Eggert', 'johannes.eggert@bs.ksn.at' ),
		array( 'Michaela Eichern', 'Michaela', 'Eichern', 'michaela.eichern@bs.ksn.at' ),
		array( 'Ing. Herbert Erlacher, BEd', 'Herbert', 'Erlacher', 'herbert.erlacher@bs.ksn.at' ),
		array( 'Claudia Felsinger', 'Claudia', 'Felsinger', 'claudia.felsinger@bs.ksn.at' ),
		array( 'Melanie Findenig', 'Melanie', 'Findenig', 'melanie.findenig@bs.ksn.at' ),
		array( 'Kerstin Gritschacher', 'Kerstin', 'Gritschacher', 'kerstin.gritschacher@bs.ksn.at' ),
		array( 'Daniel Haid, BEd', 'Daniel', 'Haid', 'daniel.haid@bs.ksn.at' ),
		array( 'Caroline Holzer, BEd', 'Caroline', 'Holzer', 'caroline.holzer@bs.ksn.at' ),
		array( 'Ing. Günther Hopfgartner', 'Günther', 'Hopfgartner', 'guenther.hopfgartner@bs.ksn.at' ),
		array( 'Mag. Karlheinz Juvan', 'Karlheinz', 'Juvan', 'karlheinz.juvan@bs.ksn.at' ),
		array( 'Bernd Käfer', 'Bernd', 'Käfer', 'bernd.kaefer@bs.ksn.at' ),
		array( 'RL Johann Kämmerer', 'Johann', 'Kämmerer', 'johann.kaemmerer@bs.ksn.at' ),
		array( 'Johann Klampferer', 'Johann', 'Klampferer', 'johann.klampferer@bs.ksn.at' ),
		array( 'Dalibor Krajisnik', 'Dalibor', 'Krajisnik', 'dalibor.krajisnik@bs.ksn.at' ),
		array( 'Verena Krall, BEd', 'Verena', 'Krall', 'verena.krall@bs.ksn.at' ),
		array( 'Manuel Kraxner', 'Manuel', 'Kraxner', 'manuel.kraxner@bs.ksn.at' ),
		array( 'Ing. Siegfried Kröpfl', 'Siegfried', 'Kröpfl', 'siegfried.kroepfl@bs.ksn.at' ),
		array( 'Andreas Kuttin', 'Andreas', 'Kuttin', 'andreas.kuttin@bs.ksn.at' ),
		array( 'Joachim Lamprecht', 'Joachim', 'Lamprecht', 'joachim.lamprecht@bs.ksn.at' ),
		array( 'BDS Ing. Alfred Madrutter, BEd', 'Alfred', 'Madrutter', 'alfred.madrutter@bs.ksn.at' ),
		array( 'Matthias Maurer, BEd', 'Matthias', 'Maurer', 'matthiasmartin.maurer@bs.ksn.at' ),
		array( 'Johannes Messner', 'Johannes', 'Messner', 'johannes.messner@bs.ksn.at' ),
		array( 'Ing. Dieter Nakent, BEd', 'Dieter', 'Nakent', 'dieter.nakent@bs.ksn.at' ),
		array( 'Philipp Novak', 'Philipp', 'Novak', 'philipp.novak@bs.ksn.at' ),
		array( 'Ing. Mario Olsacher, BEd', 'Mario', 'Olsacher', 'mario.olsacher@bs.ksn.at' ),
		array( 'Rudolf Petritsch, BEd', 'Rudolf', 'Petritsch', 'rudolf.petritsch@bs.ksn.at' ),
		array( 'Robert Ranacher, BEd', 'Robert', 'Ranacher', 'robert.ranacher@bs.ksn.at' ),
		array( 'Ing. Wolfgang Schöller', 'Wolfgang', 'Schöller', 'wolfgang.schoeller@bs.ksn.at' ),
		array( 'Wolfgang Schwinger', 'Wolfgang', 'Schwinger', 'wolfgang.schwinger@bs.ksn.at' ),
		array( 'Alexander Steiner, BEd', 'Alexander', 'Steiner', 'alexander.steiner@bs.ksn.at' ),
		array( 'Josef Stocker', 'Josef', 'Stocker', 'josef.stocker@bs.ksn.at' ),
		array( 'Othmar Strießnig, BEd', 'Othmar', 'Strießnig', 'othmar.striessnig@bs.ksn.at' ),
		array( 'Josef Trattnig', 'Josef', 'Trattnig', 'josef.trattnig@bs.ksn.at' ),
		array( 'Hannes Unterhohenwarter, BEd', 'Hannes', 'Unterhohenwarter', 'hannes.unterhohenwarter@bs.ksn.at' ),
		array( 'Joseph Unterlerchner', 'Joseph', 'Unterlerchner', 'joseph.unterlerchner@bs.ksn.at' ),
		array( 'Ing. Markus Wettl, BEd', 'Markus', 'Wettl', 'markus.wettl@bs.ksn.at' ),
		array( 'Eckhard Winkler', 'Eckhard', 'Winkler', 'eckhard.winkler@bs.ksn.at' ),
		array( 'Ing. Wilfried Wohlgemuth, BEd', 'Wilfried', 'Wohlgemuth', 'wilfried.wohlgemuth@bs.ksn.at' ),
		array( 'Dipl.-Ing. (FH) Wolfgang Zerza, BA BEd', 'Wolfgang', 'Zerza', 'wolfgang.zerza@bs.ksn.at' ),
		array( 'Marie-Christin Zorec', 'Marie-Christin', 'Zorec', 'zorec.marie@bs.ksn.at' ),
	);
}

/**
 * Vergleichsschlüssel aus Vor- und Nachname (ohne Titel, Groß-/Kleinschreibung, Umlaute).
 *
 * @param string $text Name.
 * @return string
 */
function fbs_team_schluessel( $text ) {
	$text = strtolower( remove_accents( str_replace( array( 'ß', 'ẞ' ), 'ss', (string) $text ) ) );
	return preg_replace( '/[^a-z]/', '', $text );
}

/**
 * Prüfen, ob ein Titel zu Vor- und Nachname passt.
 *
 * @param string $titel    Gespeicherter Name.
 * @param string $vorname  Vorname.
 * @param string $nachname Nachname.
 * @return bool
 */
function fbs_team_passt( $titel, $vorname, $nachname ) {
	$t = fbs_team_schluessel( $titel );
	return false !== strpos( $t, fbs_team_schluessel( $nachname ) ) && false !== strpos( $t, fbs_team_schluessel( $vorname ) );
}

/**
 * Abgleich der Team-Einträge mit der Liste.
 *
 * @return array Zusammenfassung.
 */
function fbs_team_abgleich() {
	$alle   = get_posts(
		array(
			'post_type'      => 'fbs_team',
			'post_status'    => array( 'publish', 'draft' ),
			'posts_per_page' => -1,
		)
	);
	$lehrer = array();
	$leitung = array();
	foreach ( $alle as $p ) {
		if ( 'leitung' === get_post_meta( $p->ID, 'fbs_bereich', true ) ) {
			$leitung[] = $p;
		} else {
			$lehrer[] = $p;
		}
	}
	$bericht  = array( 'neu' => 0, 'mail' => 0, 'ausgeblendet' => array() );
	$gefunden = array();
	foreach ( fbs_team_liste() as $i => $z ) {
		list( $name, $vor, $nach, $mail ) = $z;

		/* Direktion: nur E-Mail ergänzen, wenn noch leer. */
		foreach ( $leitung as $p ) {
			if ( fbs_team_passt( $p->post_title, $vor, $nach ) && $mail && ! get_post_meta( $p->ID, 'fbs_email', true ) ) {
				update_post_meta( $p->ID, 'fbs_email', $mail );
				$bericht['mail']++;
			}
		}

		$treffer = null;
		foreach ( $lehrer as $p ) {
			if ( ! isset( $gefunden[ $p->ID ] ) && fbs_team_passt( $p->post_title, $vor, $nach ) ) {
				$treffer = $p;
				break;
			}
		}
		if ( $treffer ) {
			$gefunden[ $treffer->ID ] = true;
			$daten = array(
				'ID'         => $treffer->ID,
				'post_title' => $name,
				'menu_order' => $i,
			);
			if ( 'draft' === $treffer->post_status ) {
				$daten['post_status'] = 'publish';
			}
			wp_update_post( $daten );
			if ( $mail && ! get_post_meta( $treffer->ID, 'fbs_email', true ) ) {
				update_post_meta( $treffer->ID, 'fbs_email', $mail );
				$bericht['mail']++;
			}
			continue;
		}
		$id = wp_insert_post(
			array(
				'post_type'   => 'fbs_team',
				'post_status' => 'publish',
				'post_title'  => $name,
				'menu_order'  => $i,
				'meta_input'  => array(
					'fbs_bereich' => 'lehrer',
					'fbs_email'   => $mail,
				),
			)
		);
		if ( $id && ! is_wp_error( $id ) ) {
			$bericht['neu']++;
			if ( $mail ) {
				$bericht['mail']++;
			}
		}
	}

	/* Nicht mehr in der Liste: ausblenden (Entwurf), nicht löschen. */
	foreach ( $lehrer as $p ) {
		if ( ! isset( $gefunden[ $p->ID ] ) && 'publish' === $p->post_status ) {
			wp_update_post(
				array(
					'ID'          => $p->ID,
					'post_status' => 'draft',
				)
			);
			$bericht['ausgeblendet'][] = $p->post_title;
		}
	}
	return $bericht;
}

/* Einmal nach dem Theme-Update abgleichen und das Ergebnis im Dashboard anzeigen. */
add_action(
	'admin_init',
	function () {
		if ( get_option( 'fbs_team_v2' ) || ! current_user_can( 'edit_posts' ) ) {
			return;
		}
		update_option( 'fbs_team_v2', 1 );
		set_transient( 'fbs_team_bericht', fbs_team_abgleich(), DAY_IN_SECONDS );
	},
	30
);

add_action(
	'admin_notices',
	function () {
		$b = get_transient( 'fbs_team_bericht' );
		if ( ! $b || ! current_user_can( 'edit_posts' ) ) {
			return;
		}
		delete_transient( 'fbs_team_bericht' );
		echo '<div class="notice notice-success is-dismissible"><p><strong>Team aktualisiert:</strong> ' . (int) $b['neu'] . ' Lehrer*innen neu angelegt, ' . (int) $b['mail'] . ' E-Mail-Adressen eingetragen.';
		if ( $b['ausgeblendet'] ) {
			echo ' Nicht mehr in der Liste und deshalb als Entwurf ausgeblendet (nicht gelöscht): ' . esc_html( implode( ', ', $b['ausgeblendet'] ) ) . '.';
		}
		echo ' <a href="' . esc_url( admin_url( 'edit.php?post_type=fbs_team' ) ) . '">Team ansehen</a></p></div>';
	}
);
