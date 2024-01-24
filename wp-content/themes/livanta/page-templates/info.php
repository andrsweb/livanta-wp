<?php

/**
 * Template name: Info Page
 *
 * @package WordPress
 * @subpackage livanta
 */

get_header();

$title = get_field( 'custom_title' ) ?: get_the_title();
?>

<main class="main">
	<section class="ethics">
		<div class="container">
			<div class="ethics__heading">
				<a href="<?php echo home_url( '/' ) ?>" class="back">
					<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M3.37308 7.25005L15.5 7.25005L15.5 8.75L3.37308 8.75L9.06923 14.4462L8.00003 15.5L0.500049 8.00002L8.00003 0.500048L9.06923 1.55387L3.37308 7.25005Z" fill="#484C52"/>
					</svg>
					<?php _e( 'BACK TO HOME', 'livanta' ) ?>
				</a>

				<h1 class="h1"><?php echo esc_html( $title ) ?></h1>
			</div>

			<div class="ethics__texts paragraphs">
				<div class="container"><?php the_content() ?></div>
			</div>
		</div>
	</section>
</main>

<?php
get_footer();

