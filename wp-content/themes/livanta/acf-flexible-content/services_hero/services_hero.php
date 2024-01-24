<?php

/**
 * Services Hero - ACF Flexible Content section layout.
 *
 * @see Page with ACF Flexible Content template -> Flexible Content -> Services Hero
 *
 * @package WordPress
 * @subpackage livanta
 */

$overlay		= get_sub_field( 'overlay' );
$overlay_mob	= get_sub_field( 'overlay_mob' ) ?: $overlay;
$suptitle		= get_sub_field( 'suptitle' );
$title			= get_sub_field( 'title' );
$text			= get_sub_field( 'text' );
$scroll_down	= get_sub_field( 'scroll_down' );
?>

<section class="services-hero">
	<div class="container">
		<?php
		if( $overlay && $overlay_mob ){
			?>
			<div class="services-hero__bg">
				<picture>
					<source type="image/jpeg" media="(min-width: 0px) and (max-width: 768px)"
							srcset="<?php echo wp_get_attachment_image_url( $overlay_mob, 'banner-vertical-4' ) ?>">
					<source type="image/jpeg" media="(min-width: 768px)"
							srcset="<?php echo wp_get_attachment_image_url( $overlay, 'full-hd' ) ?>">
					<img src="<?php echo wp_get_attachment_image_url( $overlay, 'full-hd' ) ?>" width="500" height="500"
						 alt="Hand on black background">
				</picture>
			</div>
			<?php
		}
		?>

		<div class="services-hero__heading">
			<?php
			if( $suptitle ) echo '<div class="services-hero__subtitle">', esc_html( $suptitle ), '</div>';

			if( $title ) echo '<h1 class="h1">', esc_html( $title ), '</h1>';

			if( $text ) echo '<div class="services-hero__subtitle">', esc_html( $text ), '</div>';

			if( $scroll_down ){
				$url	= $scroll_down['url'];
				$title	= $scroll_down['title'];
				$target	= $scroll_down['target'] ? ' target="_blank"' : '';
				?>
				<div class="scroll__wrapper">
					<a href="<?php echo esc_url( $url ) ?>" class="scroll__down anchor"<?php echo $target ?>>
						<svg width="18" height="20" viewBox="0 0 18 20" fill="none"
							 xmlns="http://www.w3.org/2000/svg">
							<path d="M9.00002 19.952L0.519287 11.4712L2.10002 9.89047L9.00002 16.7674L15.9 9.89047L17.4808 11.4712L9.00002 19.952ZM9.00002 10.9808L0.519287 2.50005L2.10002 0.919312L9.00002 7.79625L15.9 0.919312L17.4808 2.50005L9.00002 10.9808Z" fill="white"/>
						</svg>
						<div class="scroll__down_text"><?php echo esc_html( $title ) ?></div>
					</a>
				</div>
				<?php
			}
			?>
		</div>
	</div>
</section>

