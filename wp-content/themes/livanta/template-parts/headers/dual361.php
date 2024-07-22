<?php

/**
 * Header DUAL361 template.
 *
 * @see Options -> Header DUAL361.
 *
 * @package WordPress
 * @subpackage livanta
 */

global $page, $paged;

$site_desc     = get_bloginfo( 'description', 'display' );
$logo          = get_field( 'logo_dual', 'option' );
$logo_link     = get_field( 'logo_dual_link', 'option' );
$header_button = get_field( 'header_button_dual', 'option' );
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
	<header class="header-dual">
		<div class="header-dual-wrapper">
			<?php
			if( $logo ){
				$logo_url = $logo_link ? $logo_link['url'] : get_bloginfo( 'url' );
				?>
				<a href="<?php echo esc_url( $logo_url ) ?>" class="header-dual-logo">
					<?php echo wp_get_attachment_image( $logo, 'full' ) ?>
				</a>
				<?php
			}
			?>

			<div class="header-dual-box" id="header-box">
				<div class="header-dual-inner">
					<?php
					wp_nav_menu( [
						'theme_location'  => 'header_menu_dual',
						'container'       => 'nav',
						'container_class' => 'header-menu-dual',
						'walker'          => new Liv_Walker_Nav_Menu()
					] );
					wp_nav_menu( [
						'theme_location'  => 'header_menu_dual_burger',
						'container'       => 'nav',
						'container_class' => 'header-menu-dual-burger'
					] );
					?>
				</div>
				<div class="header-dual-ui">
					<?php
					if( $header_button ){
						$btn_title  = $header_button['title'] ?? '';
						$btn_url    = $header_button['url'] ?? '#';
						$btn_target = $header_button['target'] ? ' target="_blank"' : '';
						?>
						<a class="link-full" href="<?php echo esc_url( $btn_url ) ?>"<?php echo $btn_target ?>>
							<?php echo esc_html( $btn_title ) ?>
						</a>
						<?php
					}
					?>
					<button class="burger-button-dual">
						<span></span>
					</button>
				</div>
			</div>
		</div>
	</header>

