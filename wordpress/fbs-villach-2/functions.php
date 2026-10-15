<?php
/**
 * FBS Villach 2: Theme-Funktionen.
 *
 * @package FBS_Villach_2
 */

defined( 'ABSPATH' ) || exit;

require_once get_template_directory() . '/inc/startinhalte.php';
require_once get_template_directory() . '/inc/bloecke.php';
require_once get_template_directory() . '/inc/inhalte.php';

/* ------------------------------------------------------------------ */
/* Grundeinstellungen                                                  */
/* ------------------------------------------------------------------ */

add_action(
	'after_setup_theme',
	function () {
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'html5', array( 'search-form', 'gallery', 'caption', 'style', 'script' ) );
		add_theme_support( 'responsive-embeds' );
		add_theme_support( 'editor-styles' );
		add_editor_style( array( 'style.css', 'editor.css' ) );
		register_nav_menus( array( 'haupt' => 'Hauptmenü' ) );
	}
);

add_action( 'after_switch_theme', 'fbs_startinhalte_anlegen' );

/* Bestehende Installationen (Theme-Update per ZIP) einmalig auf bearbeitbare Blöcke umstellen. */
add_action(
	'init',
	function () {
		if ( get_option( 'fbs_startinhalte_v1' ) && ! get_option( 'fbs_inhalte_v2' ) ) {
			fbs_inhalte_v2();
		}
	},
	20
);

add_action(
	'wp_enqueue_scripts',
	function () {
		$version = wp_get_theme()->get( 'Version' );
		wp_enqueue_style( 'fbs-villach-2', get_stylesheet_uri(), array(), $version );
		if ( is_page( 'lehrerinnen' ) ) {
			wp_enqueue_script( 'fbs-lehrer-suche', get_theme_file_uri( 'js/lehrer-suche.js' ), array(), $version, true );
		}
	}
);

/* Gruppen-Blöcke ohne zusätzlichen inneren Container ausgeben, damit das Raster der Bereiche greift. */
remove_filter( 'render_block_core/group', 'wp_restore_group_inner_container', 10 );

/* Keine Verbindungen zu Drittanbietern (DSGVO): Emojis von s.w.org abschalten. */
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );
add_filter( 'emoji_svg_url', '__return_false' );

/* Kommentare komplett abschalten. */
add_filter( 'comments_open', '__return_false', 20 );
add_filter( 'pings_open', '__return_false', 20 );
add_filter( 'comments_array', '__return_empty_array', 10 );
add_action(
	'admin_menu',
	function () {
		remove_menu_page( 'edit-comments.php' );
	}
);

/* ------------------------------------------------------------------ */
/* Team (Direktion, Sekretariat, Lehrer*innen)                         */
/* ------------------------------------------------------------------ */

add_action(
	'init',
	function () {
		register_post_type(
			'fbs_team',
			array(
				'labels'       => array(
					'name'               => 'Team',
					'singular_name'      => 'Person',
					'add_new'            => 'Person hinzufügen',
					'add_new_item'       => 'Neue Person hinzufügen',
					'edit_item'          => 'Person bearbeiten',
					'all_items'          => 'Alle Personen',
					'search_items'       => 'Personen suchen',
					'not_found'          => 'Keine Personen gefunden',
					'featured_image'     => 'Foto',
					'set_featured_image' => 'Foto festlegen',
				),
				'public'       => false,
				'show_ui'      => true,
				'menu_icon'    => 'dashicons-groups',
				'menu_position' => 6,
				'supports'     => array( 'title', 'thumbnail', 'page-attributes' ),
				'show_in_rest' => false,
			)
		);
	}
);

add_filter(
	'enter_title_here',
	function ( $text, $post ) {
		return 'fbs_team' === $post->post_type ? 'Name mit Titel, z. B. Ing. Max Muster, BEd' : $text;
	},
	10,
	2
);

add_action(
	'add_meta_boxes',
	function () {
		add_meta_box( 'fbs_team_daten', 'Angaben', 'fbs_team_metabox', 'fbs_team', 'normal', 'high' );
		remove_meta_box( 'postimagediv', 'fbs_team', 'side' );
		add_meta_box( 'postimagediv', 'Foto (anklicken zum Hochladen oder Austauschen)', 'post_thumbnail_meta_box', 'fbs_team', 'normal', 'high' );
	}
);

/**
 * Formular für die Angaben einer Person.
 *
 * @param WP_Post $post Person.
 */
function fbs_team_metabox( $post ) {
	wp_nonce_field( 'fbs_team_speichern', 'fbs_team_nonce' );
	$bereich = get_post_meta( $post->ID, 'fbs_bereich', true );
	$bereich = $bereich ? $bereich : 'lehrer';
	$felder  = array(
		'fbs_rolle'   => array( 'Funktion', 'z. B. Direktor, Sekretariat (nur für Startseite)' ),
		'fbs_telefon' => array( 'Telefon', 'z. B. 04242 56257-200 (optional)' ),
		'fbs_email'   => array( 'E-Mail', 'z. B. vorname.nachname@bs.ksn.at' ),
	);
	echo '<p><label for="fbs_bereich"><strong>Wo soll die Person erscheinen?</strong></label><br>';
	echo '<select id="fbs_bereich" name="fbs_bereich">';
	echo '<option value="leitung"' . selected( $bereich, 'leitung', false ) . '>Startseite: Direktion und Sekretariat</option>';
	echo '<option value="lehrer"' . selected( $bereich, 'lehrer', false ) . '>Seite Lehrer*innen</option>';
	echo '</select></p>';
	foreach ( $felder as $key => $f ) {
		printf(
			'<p><label for="%1$s"><strong>%2$s</strong></label><br><input type="text" class="widefat" id="%1$s" name="%1$s" value="%3$s" placeholder="%4$s"></p>',
			esc_attr( $key ),
			esc_html( $f[0] ),
			esc_attr( get_post_meta( $post->ID, $key, true ) ),
			esc_attr( $f[1] )
		);
	}
	echo '<p class="description">Das Foto legen Sie unten im Feld „Foto“ fest. Die Reihenfolge ändern Sie rechts unter „Reihenfolge“ (kleinere Zahl steht weiter vorne).</p>';
}

add_action(
	'save_post_fbs_team',
	function ( $post_id ) {
		if ( ! isset( $_POST['fbs_team_nonce'] ) || ! wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['fbs_team_nonce'] ) ), 'fbs_team_speichern' ) ) {
			return;
		}
		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
			return;
		}
		if ( ! current_user_can( 'edit_post', $post_id ) ) {
			return;
		}
		$bereich = isset( $_POST['fbs_bereich'] ) && 'leitung' === $_POST['fbs_bereich'] ? 'leitung' : 'lehrer';
		update_post_meta( $post_id, 'fbs_bereich', $bereich );
		foreach ( array( 'fbs_rolle', 'fbs_telefon', 'fbs_email' ) as $key ) {
			$wert = isset( $_POST[ $key ] ) ? sanitize_text_field( wp_unslash( $_POST[ $key ] ) ) : '';
			update_post_meta( $post_id, $key, $wert );
		}
	}
);

/* Übersicht im Admin: Spalten Bereich und Funktion/Fächer. */
add_filter(
	'manage_fbs_team_posts_columns',
	function ( $cols ) {
		return array(
			'cb'          => $cols['cb'],
			'title'       => 'Name',
			'fbs_bereich' => 'Erscheint auf',
			'fbs_foto'    => 'Foto',
			'fbs_info'    => 'Funktion / E-Mail',
		);
	}
);
add_action(
	'manage_fbs_team_posts_custom_column',
	function ( $col, $post_id ) {
		if ( 'fbs_bereich' === $col ) {
			echo 'leitung' === get_post_meta( $post_id, 'fbs_bereich', true ) ? 'Startseite' : 'Lehrer*innen';
		}
		if ( 'fbs_foto' === $col ) {
			echo has_post_thumbnail( $post_id ) ? get_the_post_thumbnail( $post_id, array( 48, 48 ), array( 'style' => 'width:48px;height:48px;object-fit:cover' ) ) : '<span style="color:#888">kein Foto</span>'; // phpcs:ignore WordPress.Security.EscapeOutput
		}
		if ( 'fbs_info' === $col ) {
			echo esc_html( implode( ' · ', array_filter( array( get_post_meta( $post_id, 'fbs_rolle', true ), get_post_meta( $post_id, 'fbs_email', true ) ) ) ) );
		}
	},
	10,
	2
);
add_action(
	'pre_get_posts',
	function ( $q ) {
		if ( is_admin() && $q->is_main_query() && 'fbs_team' === $q->get( 'post_type' ) && ! $q->get( 'orderby' ) ) {
			$q->set( 'orderby', array( 'menu_order' => 'ASC', 'title' => 'ASC' ) );
		}
	}
);

/**
 * Personen eines Bereichs.
 *
 * @param string $bereich leitung oder lehrer.
 * @return WP_Post[]
 */
function fbs_team( $bereich ) {
	return get_posts(
		array(
			'post_type'      => 'fbs_team',
			'posts_per_page' => -1,
			'orderby'        => array( 'menu_order' => 'ASC', 'title' => 'ASC' ),
			'meta_key'       => 'fbs_bereich', // phpcs:ignore WordPress.DB.SlowDBQuery
			'meta_value'     => $bereich, // phpcs:ignore WordPress.DB.SlowDBQuery
		)
	);
}

/**
 * Anzahl der Personen eines Bereichs.
 *
 * @param string $bereich leitung oder lehrer.
 * @return int
 */
function fbs_team_count( $bereich ) {
	return count( fbs_team( $bereich ) );
}

/**
 * Initialen aus einem Namen mit Titeln.
 *
 * @param string $name Name.
 * @return string
 */
function fbs_initialen( $name ) {
	$name  = preg_replace( '/,.*$/', '', $name );
	$teile = array_values(
		array_filter(
			preg_split( '/\s+/', $name ),
			function ( $w ) {
				return '' !== $w && '.' !== substr( $w, -1 ) && '(' !== substr( $w, 0, 1 ) && ! in_array( $w, array( 'BD', 'BDS', 'RL', 'pL' ), true );
			}
		)
	);
	if ( ! $teile ) {
		return '';
	}
	$erst = mb_substr( $teile[0], 0, 1 );
	$letz = count( $teile ) > 1 ? mb_substr( end( $teile ), 0, 1 ) : '';
	return mb_strtoupper( $erst . $letz );
}

/**
 * E-Mail-Link einer Person.
 *
 * @param WP_Post $p Person.
 */
function fbs_email_link( $p ) {
	$mail = sanitize_email( (string) get_post_meta( $p->ID, 'fbs_email', true ) );
	if ( $mail ) {
		echo '<a class="mail" href="mailto:' . esc_attr( antispambot( $mail ) ) . '">' . esc_html( antispambot( $mail ) ) . '</a>';
	}
}

/**
 * Foto oder Initialen einer Person.
 *
 * @param WP_Post $p     Person.
 * @param string  $class CSS-Klassen.
 */
function fbs_avatar( $p, $class = 'avatar' ) {
	if ( has_post_thumbnail( $p ) ) {
		echo '<div class="' . esc_attr( $class ) . ' has-img">' . get_the_post_thumbnail( $p, 'medium', array( 'alt' => get_the_title( $p ) ) ) . '</div>';
		return;
	}
	echo '<div class="' . esc_attr( $class ) . '" aria-hidden="true">' . esc_html( fbs_initialen( get_the_title( $p ) ) ) . '</div>';
}

/**
 * Text aus dem Customizer.
 *
 * @param string $key     Einstellung.
 * @param string $default Standard.
 * @return string
 */
function fbs_text( $key, $default ) {
	return (string) get_theme_mod( $key, $default );
}

/* ------------------------------------------------------------------ */
/* Bausteine für die Seiteninhalte: [fbs_news] und [fbs_leitung]        */
/* ------------------------------------------------------------------ */

add_shortcode(
	'fbs_news',
	function ( $atts ) {
		$atts = shortcode_atts( array( 'anzahl' => 3 ), $atts, 'fbs_news' );
		$q    = new WP_Query(
			array(
				'posts_per_page'      => max( 1, (int) $atts['anzahl'] ),
				'ignore_sticky_posts' => true,
			)
		);
		ob_start();
		echo '<div class="news">';
		$i = 0;
		if ( $q->have_posts() ) {
			while ( $q->have_posts() ) {
				$q->the_post();
				fbs_news_card( $i, 0 === $i );
				$i++;
			}
			wp_reset_postdata();
		} else {
			echo '<p>Noch keine News.</p>';
		}
		echo '</div>';
		return str_replace( array( "\r", "\n" ), ' ', ob_get_clean() );
	}
);

add_shortcode(
	'fbs_leitung',
	function () {
		ob_start();
		echo '<div class="lead-team">';
		foreach ( fbs_team( 'leitung' ) as $p ) {
			echo '<div class="person">';
			fbs_avatar( $p );
			echo '<h3>' . esc_html( get_the_title( $p ) ) . '</h3><span class="role">' . esc_html( get_post_meta( $p->ID, 'fbs_rolle', true ) ) . '</span>';
			$tel = get_post_meta( $p->ID, 'fbs_telefon', true );
			if ( $tel ) {
				echo '<span class="tel">' . esc_html( $tel ) . '</span>';
			}
			fbs_email_link( $p );
			echo '</div>';
		}
		echo '</div>';
		return str_replace( array( "\r", "\n" ), ' ', ob_get_clean() );
	}
);

/* ------------------------------------------------------------------ */
/* News                                                                */
/* ------------------------------------------------------------------ */

/**
 * Name der ersten Kategorie eines Beitrags.
 *
 * @return string
 */
function fbs_category_name() {
	$cats = get_the_category();
	if ( ! $cats || 'uncategorized' === $cats[0]->slug || 'allgemein' === $cats[0]->slug ) {
		return 'News';
	}
	return $cats[0]->name;
}

/**
 * Eine News-Karte (Blog-Vorschau) im Loop.
 *
 * @param int  $i   Position (für die Platzhalterfarbe).
 * @param bool $big Große Karte.
 */
function fbs_news_card( $i, $big = false ) {
	$tones = array( '', ' y', ' r' );
	$link  = get_permalink();
	echo '<article class="post' . ( $big ? ' big' : '' ) . '">';
	if ( has_post_thumbnail() ) {
		echo '<a class="img has-img" href="' . esc_url( $link ) . '" tabindex="-1" aria-hidden="true">' . get_the_post_thumbnail( null, 'large', array( 'alt' => '' ) ) . '</a>';
	} else {
		echo '<a class="img' . esc_attr( $tones[ $i % 3 ] ) . '" href="' . esc_url( $link ) . '" data-label="Foto folgt" tabindex="-1" aria-hidden="true"></a>';
	}
	echo '<div class="body"><span class="meta">' . esc_html( fbs_category_name() . ' · ' . get_the_date( 'd.m.Y' ) ) . '</span>';
	echo '<h3><a href="' . esc_url( $link ) . '">' . esc_html( get_the_title() ) . '</a></h3>';
	$auszug = has_excerpt() ? get_the_excerpt() : wp_trim_words( wp_strip_all_tags( strip_shortcodes( get_the_content() ) ), 30 );
	if ( $auszug ) {
		echo '<p>' . esc_html( $auszug ) . '</p>';
	}
	echo '<a class="more" href="' . esc_url( $link ) . '">Weiterlesen →</a>';
	echo '</div></article>';
}

/* News-Übersicht: 9 Beiträge pro Seite. */
add_action(
	'pre_get_posts',
	function ( $q ) {
		if ( ! is_admin() && $q->is_main_query() && ( $q->is_home() || $q->is_archive() ) ) {
			$q->set( 'posts_per_page', 9 );
		}
	}
);

/**
 * Kategorie-Filter über der News-Übersicht.
 */
function fbs_news_filter() {
	$kats = get_categories( array( 'hide_empty' => true ) );
	$kats = array_filter(
		$kats,
		function ( $k ) {
			return ! in_array( $k->slug, array( 'uncategorized', 'allgemein' ), true );
		}
	);
	if ( count( $kats ) < 2 ) {
		return;
	}
	$aktiv = is_category() ? get_queried_object_id() : 0;
	echo '<nav class="news-filter" aria-label="Nach Thema filtern"><a href="' . esc_url( fbs_page_url( 'news' ) ) . '"' . ( $aktiv ? '' : ' aria-current="page"' ) . '>Alle</a>';
	foreach ( $kats as $k ) {
		echo '<a href="' . esc_url( get_category_link( $k ) ) . '"' . ( $aktiv === $k->term_id ? ' aria-current="page"' : '' ) . '>' . esc_html( $k->name ) . '</a>';
	}
	echo '</nav>';
}

/**
 * Seitenzahlen unter der News-Übersicht.
 */
function fbs_news_seiten() {
	$links = paginate_links(
		array(
			'prev_text' => '← Neuere',
			'next_text' => 'Ältere →',
			'type'      => 'plain',
		)
	);
	if ( $links ) {
		echo '<nav class="pager" aria-label="Seiten">' . $links . '</nav>'; // phpcs:ignore WordPress.Security.EscapeOutput
	}
}

/* Im Admin heißen Beiträge „News“. */
add_filter(
	'post_type_labels_post',
	function ( $l ) {
		$l->name               = 'News';
		$l->singular_name      = 'News';
		$l->menu_name          = 'News';
		$l->name_admin_bar     = 'News';
		$l->all_items          = 'Alle News';
		$l->add_new            = 'News schreiben';
		$l->add_new_item       = 'Neue News schreiben';
		$l->edit_item          = 'News bearbeiten';
		$l->new_item           = 'Neue News';
		$l->view_item          = 'News ansehen';
		$l->search_items       = 'News durchsuchen';
		$l->not_found          = 'Keine News gefunden';
		$l->featured_image     = 'Foto der News';
		$l->set_featured_image = 'Foto festlegen';
		$l->item_published     = 'News veröffentlicht.';
		$l->item_updated       = 'News aktualisiert.';
		return $l;
	}
);

/* „Seiten → News“ öffnet die Liste aller News. */
add_action(
	'load-post.php',
	function () {
		$id = isset( $_GET['post'] ) ? absint( $_GET['post'] ) : 0; // phpcs:ignore WordPress.Security.NonceVerification
		if ( $id && (int) get_option( 'page_for_posts' ) === $id && ( ! isset( $_GET['action'] ) || 'edit' === $_GET['action'] ) ) { // phpcs:ignore WordPress.Security.NonceVerification
			wp_safe_redirect( admin_url( 'edit.php' ) );
			exit;
		}
	}
);

add_filter(
	'display_post_states',
	function ( $states, $post ) {
		if ( (int) get_option( 'page_for_posts' ) === $post->ID ) {
			$states['page_for_posts'] = 'News-Übersicht (Inhalte unter „News“)';
		}
		return $states;
	},
	20,
	2
);

/* Oben in der schwarzen Leiste auf den News-Seiten: „News schreiben“. */
add_action(
	'admin_bar_menu',
	function ( $bar ) {
		if ( is_admin() || ! current_user_can( 'edit_posts' ) || ! ( is_home() || is_archive() || is_singular( 'post' ) || is_front_page() ) ) {
			return;
		}
		$bar->add_node(
			array(
				'id'    => 'fbs-news-neu',
				'title' => '📰 News schreiben',
				'href'  => admin_url( 'post-new.php' ),
			)
		);
	},
	91
);

/* ------------------------------------------------------------------ */
/* Navigation                                                          */
/* ------------------------------------------------------------------ */

/**
 * URL einer Seite anhand ihres Kurznamens.
 *
 * @param string $slug Kurzname.
 * @return string
 */
function fbs_page_url( $slug ) {
	$page = get_page_by_path( $slug );
	return $page ? get_permalink( $page ) : home_url( '/' . $slug . '/' );
}

/**
 * Einträge des Hauptmenüs.
 *
 * @return array
 */
function fbs_nav_items() {
	$home      = home_url( '/' );
	$locations = get_nav_menu_locations();
	if ( ! empty( $locations['haupt'] ) ) {
		$items = wp_get_nav_menu_items( $locations['haupt'] );
		if ( $items ) {
			$current = trailingslashit( home_url( add_query_arg( array() ) ) );
			return array_map(
				function ( $it ) use ( $current ) {
					return array(
						'label'   => $it->title,
						'url'     => $it->url,
						'current' => trailingslashit( $it->url ) === $current,
					);
				},
				array_filter(
					$items,
					function ( $it ) {
						return ! $it->menu_item_parent;
					}
				)
			);
		}
	}
	return array(
		array( 'label' => 'Schüler*innen', 'url' => $home . '#schueler', 'current' => false ),
		array( 'label' => 'Lehrberufe', 'url' => fbs_page_url( 'lehrberufe' ), 'current' => is_page( 'lehrberufe' ) ),
		array( 'label' => 'News', 'url' => fbs_page_url( 'news' ), 'current' => is_home() || is_singular( 'post' ) || is_archive() ),
		array( 'label' => 'Team', 'url' => $home . '#team', 'current' => false ),
		array( 'label' => 'Lehrer*innen', 'url' => fbs_page_url( 'lehrerinnen' ), 'current' => is_page( 'lehrerinnen' ) ),
		array( 'label' => 'Kontakt', 'url' => $home . '#kontakt', 'current' => false ),
	);
}
