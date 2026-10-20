<?php
/**
 * Schülerprojekte: Videos und Podcasts als eigener Bereich (Menü links „Schülerprojekte“).
 *
 * @package FBS_Villach_2
 */

defined( 'ABSPATH' ) || exit;

add_action(
	'init',
	function () {
		register_post_type(
			'fbs_projekt',
			array(
				'labels'        => array(
					'name'               => 'Schülerprojekte',
					'singular_name'      => 'Schülerprojekt',
					'menu_name'          => 'Schülerprojekte',
					'add_new'            => 'Projekt hinzufügen',
					'add_new_item'       => 'Neues Schülerprojekt',
					'edit_item'          => 'Schülerprojekt bearbeiten',
					'all_items'          => 'Alle Projekte',
					'view_item'          => 'Projekt ansehen',
					'search_items'       => 'Projekte durchsuchen',
					'not_found'          => 'Noch keine Projekte',
					'featured_image'     => 'Vorschaubild',
					'set_featured_image' => 'Vorschaubild festlegen',
					'item_published'     => 'Projekt veröffentlicht.',
					'item_updated'       => 'Projekt aktualisiert.',
				),
				'public'        => true,
				'has_archive'   => 'schuelerprojekte',
				'rewrite'       => array( 'slug' => 'schuelerprojekte', 'with_front' => false ),
				'menu_icon'     => 'dashicons-format-video',
				'menu_position' => 5,
				'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
				'show_in_rest'  => true,
				'template'      => array(
					array( 'core/paragraph', array( 'placeholder' => 'Worum geht es im Projekt? Welche Klasse hat es gemacht?' ) ),
					array( 'core/video' ),
				),
			)
		);
	}
);

/* Projektliste: 12 pro Seite, neueste zuerst. */
add_action(
	'pre_get_posts',
	function ( $q ) {
		if ( ! is_admin() && $q->is_main_query() && $q->is_post_type_archive( 'fbs_projekt' ) ) {
			$q->set( 'posts_per_page', 12 );
		}
	}
);

/**
 * Art eines Projekts (Video, Podcast) anhand des Inhalts.
 *
 * @param int|null $id Projekt.
 * @return string
 */
function fbs_projekt_art( $id = null ) {
	$post = get_post( $id );
	if ( ! $post ) {
		return '';
	}
	$c = $post->post_content;
	if ( has_block( 'core/video', $post ) || preg_match( '/youtube|vimeo|\.mp4|\.webm/i', $c ) ) {
		return '🎬 Video';
	}
	if ( has_block( 'core/audio', $post ) || preg_match( '/spotify|soundcloud|\.mp3|\.m4a|\.ogg|\.wav/i', $c ) ) {
		return '🎧 Podcast';
	}
	return 'Projekt';
}

/**
 * Projekt-Karte im Loop.
 *
 * @param int $i Position.
 */
function fbs_projekt_karte( $i ) {
	$tones = array( ' y', '', ' r' );
	$link  = get_permalink();
	echo '<article class="post projekt">';
	if ( has_post_thumbnail() ) {
		echo '<a class="img has-img" href="' . esc_url( $link ) . '" tabindex="-1" aria-hidden="true">' . get_the_post_thumbnail( null, 'large', array( 'alt' => '' ) ) . '</a>';
	} else {
		echo '<a class="img' . esc_attr( $tones[ $i % 3 ] ) . '" href="' . esc_url( $link ) . '" data-label="' . esc_attr( fbs_projekt_art() ) . '" tabindex="-1" aria-hidden="true"></a>';
	}
	echo '<div class="body"><span class="meta">' . esc_html( fbs_projekt_art() . ' · ' . get_the_date( 'd.m.Y' ) ) . '</span>';
	echo '<h3><a href="' . esc_url( $link ) . '">' . esc_html( get_the_title() ) . '</a></h3>';
	$auszug = has_excerpt() ? get_the_excerpt() : wp_trim_words( wp_strip_all_tags( strip_shortcodes( get_the_content() ) ), 25 );
	if ( $auszug ) {
		echo '<p>' . esc_html( $auszug ) . '</p>';
	}
	echo '</div></article>';
}

/* Menüpunkt „Schülerprojekte“ einmalig nach „News“ ins Hauptmenü einfügen. */
add_action(
	'admin_init',
	function () {
		if ( get_option( 'fbs_menu_projekte' ) || ! current_user_can( 'edit_theme_options' ) ) {
			return;
		}
		$orte = get_nav_menu_locations();
		if ( empty( $orte['haupt'] ) ) {
			return; // Das Hauptmenü wird zuerst angelegt; beim nächsten Aufruf geht es weiter.
		}
		update_option( 'fbs_menu_projekte', 1 );
		$punkte = wp_get_nav_menu_items( $orte['haupt'] );
		$pos    = count( (array) $punkte ) + 1;
		foreach ( (array) $punkte as $pk ) {
			if ( false !== strpos( $pk->url, 'schuelerprojekte' ) ) {
				return;
			}
			if ( 'News' === $pk->title ) {
				$pos = $pk->menu_order + 1;
			}
		}
		foreach ( (array) $punkte as $pk ) {
			if ( $pk->menu_order >= $pos ) {
				wp_update_post( array( 'ID' => $pk->ID, 'menu_order' => $pk->menu_order + 1 ) );
			}
		}
		wp_update_nav_menu_item(
			$orte['haupt'],
			0,
			array(
				'menu-item-title'    => 'Schülerprojekte',
				'menu-item-type'     => 'post_type_archive',
				'menu-item-object'   => 'fbs_projekt',
				'menu-item-status'   => 'publish',
				'menu-item-position' => $pos,
			)
		);
	},
	20
);
