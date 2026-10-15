<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="<?php echo esc_url( get_theme_file_uri( 'favicon.svg' ) ); ?>" type="image/svg+xml">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="topbar"><div class="wrap">
  <nav class="switch" aria-label="Schule wählen"><span aria-current="page">FBS Villach 2</span><a href="https://www.bs-villach.at/">FBS Villach 1 →</a></nav>
  <span>Tiroler Straße 23 · 9500 Villach · 04242 56257-200</span>
</div></div>

<header>
  <div class="wrap">
    <a class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
      <span class="logo-mark">2</span>
      <span class="logo-text">FBS Villach 2<small>Fachberufsschule · Kompetenzzentrum</small></span>
    </a>
    <nav aria-label="Hauptmenü">
      <ul>
<?php foreach ( fbs_nav_items() as $item ) : ?>
        <li><a href="<?php echo esc_url( $item['url'] ); ?>"<?php echo $item['current'] ? ' aria-current="page"' : ''; ?>><?php echo esc_html( $item['label'] ); ?></a></li>
<?php endforeach; ?>
      </ul>
    </nav>
  </div>
</header>

<main>
