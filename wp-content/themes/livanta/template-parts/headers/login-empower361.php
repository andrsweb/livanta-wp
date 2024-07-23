<?php

/**
 * Header for the Login EMPOWER361 template.
 *
 * @package WordPress
 * @subpackage livanta
 */

global $page, $paged;

$site_desc = get_bloginfo( 'description', 'display' );
?>

<!doctype html>
<html class="no-js" <?php language_attributes() ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ) ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

	<!-- Favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png" />
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png" />
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png" />
	<link rel="manifest" href="/site.webmanifest" />
	<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5" />
	<link rel="shortcut icon" href="/favicon.ico" />
	<meta name="msapplication-TileColor" content="#da532c" />
	<meta name="msapplication-config" content="/browserconfig.xml" />
	<meta name="theme-color" content="#ffffff" />
	<!-- /Favicon -->

	<title>
		<?php
		wp_title( '|', true, 'right' );
		bloginfo( 'name' );

		if( $site_desc && ( is_home() || is_front_page() ) ) echo " | $site_desc";

		if( $paged > 1 || $page > 1 ) echo ' | ' . sprintf( __( 'Page %s', 'livanta' ), max( $paged, $page ) );
		?>
	</title>

	<?php wp_head() ?>
</head>

<body <?php body_class() ?>>
<?php wp_body_open() ?>

<div class="wrapper">

