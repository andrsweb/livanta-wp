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

$site_desc = get_bloginfo( 'description', 'display' );
$logo      = get_field( 'logo_dual', 'option' );
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
			<a href="/" class="header-dual-logo">
				<img src="<?php echo THEME_URI ?>/static/img/dual361/logo-header.png" alt="">
			</a>
			<div class="header-dual-box" id="header-box">
				<div class="header-dual-inner">
					<nav class="header-menu-dual">
						<ul id="menu-header-menu-dual" class="menu">
							<li id="menu-item-572" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-572">
								<a href="#">Together in Health</a>
								<div class="sub-menu-wrapper">
									<ul class="sub-menu">
										<li id="menu-item-575" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-575">
											<a href="#">Together in Health</a>
										</li>
										<li id="menu-item-579" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-579">
												<a href="#">Member Health</a>
										</li>
										<li id="menu-item-576" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-576">
											<a href="#">Absenteeism Reduction</a>
										</li>
										<li id="menu-item-580" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-580">
											<a href="#">Member Advocacy</a>
										</li>
										<li id="menu-item-581" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-581">
											<a href="#">Member Engagement</a>
										</li>
									</ul>
									<div class="sub-menu-text">
										<p>
											Your employees are the heart of your business – and when their health impacts their lives, it also impacts your business. 
										</p>
										<p>
											No one understands health like we do. 
										</p>
										<p>
											DUAL361’s clinical programs help your employees manage chronic disease, navigate the healthcare continuum, and get the support they need to be healthy, engaged members of your workforce. 
										</p>
									</div>
								</div>
								
							</li>
							<li id="menu-item-573" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-573">
								<a href="#">Stronger in Business</a>
								<div class="sub-menu-wrapper blue">
									<ul class="sub-menu">
										<li id="menu-item-591" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-591">
											<a href="#">Stronger in Business&nbsp;</a>
										</li>
										<li id="menu-item-592" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-592">
											<a href="#">Analytics and Forecasting</a>
										</li>
										<li id="menu-item-593" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-593">
											<a href="#">Provider Report Cards</a>
										</li>
										<li id="menu-item-594" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-594">
											<a href="#">Network Optimization</a>
										</li>
										<li id="menu-item-595" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-595">
											<a href="#">Claims Analysis</a>
										</li>
										<li id="menu-item-596" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-596">
											<a href="#">Pharmacy Benefits Management</a>
										</li>
									</ul>
									<div class="sub-menu-text">
										<p>
											Keeping employees healthy is a primary concern for every company, not to mention a major expense that must be managed.
										</p>
										<p>
											No one understands the business of health care like we do.
										</p>
										<p>
											DUAL361’s programs support your company’s bottom line, harnessing the power of data and our health experts who know the business of health care. 
										</p>
									</div>
								</div>
							</li>
							<li id="menu-item-578" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-578">
								<a href="#">Log In</a>
							</li>
						</ul>
					</nav>	
					<?php
							wp_nav_menu( [
					'theme_location'  => 'header_menu_dual_burger',
					'container'       => 'nav',
					'container_class' => 'header-menu-dual-burger'
					] );
					?>
				</div>
				<div class="header-dual-ui">
					<a class="link-full" href="#">
						Contact us
					</a>
					<button class="burger-button-dual">
						<span></span>
					</button>
				</div>
			</div>
		</div>
	</header>

