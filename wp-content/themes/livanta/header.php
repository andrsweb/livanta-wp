<?php

/**
 * Header default template.
 *
 * @see Options -> Header.
 *
 * @package WordPress
 * @subpackage livanta
 */

global $page, $paged;

$site_desc	= get_bloginfo( 'description', 'display' );
$logo		= get_field( 'logo', 'option' );
$link		= get_field( 'link', 'option' );
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
		<header class="header color">
			<div class="header__wrapper">
				<?php
				if( $logo ){
					?>
					<a class="header__logo" aria-label="Link to main page" href="<?php echo home_url( '/' ) ?>">
						<?php echo wp_get_attachment_image( $logo, 'logo' ) ?>
					</a>
					<?php
				}
				?>

				<div class="header__inner" id="menu-lock">
					<?php
					wp_nav_menu( [
						'theme_location'	=> 'header_menu',
						'container'			=> 'nav',
						'container_class'	=> 'header__nav',
						'items_wrap'		=> '<ul id="%1$s" class="header__list %2$s">%3$s</ul>'
					] );

					if( $link ){
						echo '<div class="header__buttons">';
						get_template_part( 'components/link-button', null, ['link' => $link, 'class' => 'header-button'] );
						echo '</div>';
					}
					?>
				</div>

				<div class="burger__button">
					<svg class="burger__image" viewBox="20 18 65 65">
						<path class="burger__top"
							  d="m 30,33 h 40 c 0,0 9.044436,-0.654587 9.044436,-8.508902 0,-7.854315 -8.024349,-11.958003 -14.89975,-10.85914 -6.875401,1.098863 -13.637059,4.171617 -13.637059,16.368042 v 40"/>
						<path class="burger__middle" d="m 30,50 h 40"/>
						<path class="burger__bottom"
							  d="m 30,67 h 40 c 12.796276,0 15.357889,-11.717785 15.357889,-26.851538 0,-15.133752 -4.786586,-27.274118 -16.667516,-27.274118 -11.88093,0 -18.499247,6.994427 -18.435284,17.125656 l 0.252538,40"/>
					</svg>
				</div>
			</div>
		</header>

