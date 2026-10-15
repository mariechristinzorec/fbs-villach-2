<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php if ( ! has_site_icon() ) : ?><link rel="icon" href="<?php echo esc_url( get_theme_file_uri( 'favicon.svg' ) ); ?>" type="image/svg+xml"><link rel="apple-touch-icon" href="<?php echo esc_url( get_theme_file_uri( 'favicon.png' ) ); ?>"><?php endif; ?>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="topbar"><?php fbs_teil( 'topbar' ); ?></div>

<header>
  <div class="wrap">
    <?php fbs_teil( 'logo' ); ?>
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
