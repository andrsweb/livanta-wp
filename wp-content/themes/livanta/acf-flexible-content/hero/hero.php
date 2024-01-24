<?php

/**
 * Hero - ACF Flexible Content section layout.
 *
 * @see Page with ACF Flexible Content template -> Flexible Content -> Hero
 *
 * @package WordPress
 * @subpackage livanta
 */

$overlay			= get_sub_field( 'overlay' );
$title				= get_sub_field( 'title' );
$text				= get_sub_field( 'text' );
$play_button_text	= get_sub_field( 'play_button_text' );
$video				= get_sub_field( 'video' );
$scroll_down		= get_sub_field( 'scroll_down' );
?>

<section class="hero">
	<?php
	if( $overlay )
		echo '<div class="hero__overlay">', wp_get_attachment_image( $overlay, 'full-hd', false, ['class' => 'hero-bg__img'] ), '</div>';
	?>

	<div class="container">
		<div class="hero__wrapper">
			<div class="hero__heading">
				<?php
				if( $title ) echo '<h1 class="h1">', esc_html( $title ), '</h1>';

				if( $text ) echo '<p class="hero__text">', esc_html( $text ), '</p>';

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

			<?php
			if( $video ){
				?>
				<div class="play__button" tabindex="0">
					<svg width="130" height="130" viewBox="0 0 130 130" fill="none"
						 xmlns="http://www.w3.org/2000/svg">
						<circle id="circle-bg" cx="65" cy="65" r="44.5" fill="black" fill-opacity="0.2"
								stroke="white"/>
						<circle id="svg__circle-1" opacity="0.3" cx="65" cy="65" r="54.5" stroke="white"/>
						<circle id="svg__circle-2" opacity="0.3" cx="65" cy="65" r="64.5" stroke="white"/>
						<mask id="mask0_18_140" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="43"
							  y="43" width="44" height="44">
							<rect x="43" y="43" width="44" height="44" fill="#D9D9D9"/>
						</mask>
						<g mask="url(#mask0_18_140)">
							<path d="M58.5833 76.1762V53.8239L76.1408 65L58.5833 76.1762Z" fill="white"/>
						</g>
					</svg>

					<?php if( $play_button_text ) echo '<div class="play__button_text">', esc_html( $play_button_text ), '</div>' ?>
				</div>
				<?php
			}
			?>
		</div>
	</div>

	<?php
	if( $video ){
		?>
		<div class="popup-wrapper video-wrapper" id="video-popup">
			<div class="popup">
				<div class="video-popup__wrapper">
					<div class="popup-close">
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M2.66653 23.0896L0.910156 21.3332L10.2435 11.9999L0.910156 2.66653L2.66653 0.910156L11.9999 10.2435L21.3332 0.910156L23.0896 2.66653L13.7562 11.9999L23.0896 21.3332L21.3332 23.0896L11.9999 13.7562L2.66653 23.0896Z"
								  fill="white"/>
						</svg>
					</div>
					<video class="video" src="<?php echo esc_url( $video ) ?>" playsinline muted controls preload="auto"></video>
				</div>
			</div>
		</div>
		<?php
	}
	?>
</section>

