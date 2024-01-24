<?php

/**
 * Hero Overlay - ACF Flexible Content section layout.
 *
 * @see Page with ACF Flexible Content template -> Flexible Content -> Hero Overlay
 *
 * @package WordPress
 * @subpackage livanta
 */

// Top part.
$overlay			= get_sub_field( 'overlay' );
$suptitle			= get_sub_field( 'suptitle' );
$title				= get_sub_field( 'title' );
$text				= get_sub_field( 'text' );
$scroll_down		= get_sub_field( 'scroll_down' );

// Bottom part.
$bottom_suptitle	= get_sub_field( 'bottom_suptitle' );
$bottom_title		= get_sub_field( 'bottom_title' );
$bottom_subtitle	= get_sub_field( 'bottom_subtitle' );
$image				= get_sub_field( 'image' );
$left_column_title	= get_sub_field( 'left_column_title' );
$left_column_text	= get_sub_field( 'left_column_text' );
$right_column_title	= get_sub_field( 'right_column_title' );
$right_column_text	= get_sub_field( 'right_column_text' );
?>

<div class="overlay">
	<?php if( $overlay ) echo wp_get_attachment_image( $overlay, 'full-hd', false, ['class' => 'about-overlay'] ) ?>

	<section class="hero-about">
		<div class="container">
			<div class="hero-about__wrapper">
				<div class="hero-about__heading">
					<?php
					if( $suptitle ) echo '<div class="subtitle">', esc_html( $suptitle ), '</div>';

					if( $title ) echo '<h1 class="h1">', esc_html( $title ), '</h1>';

					if( $text ) echo '<p class="section__text">', esc_html( $text ), '</p>';
					?>
				</div>
			</div>

			<?php
			if( $scroll_down ){
				$link_url		= $scroll_down['url'];
				$link_title		= $scroll_down['title'];
				$link_target	= $scroll_down['target'] ? ' target="_blank"' : '';
				?>
				<div class="scroll__wrapper">
					<a href="<?php echo esc_url( $link_url ) ?>" class="scroll__down anchor"<?php echo $link_target ?>>
						<svg width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M9.00002 19.952L0.519287 11.4712L2.10002 9.89047L9.00002 16.7674L15.9 9.89047L17.4808 11.4712L9.00002 19.952ZM9.00002 10.9808L0.519287 2.50005L2.10002 0.919312L9.00002 7.79625L15.9 0.919312L17.4808 2.50005L9.00002 10.9808Z" fill="white"/>
						</svg>
						<div class="scroll__down_text"><?php echo esc_html( $link_title ) ?></div>
					</a>
				</div>
				<?php
			}
			?>
		</div>
	</section>

	<section class="serves" id="scroll">
		<div class="container">
			<div class="serves__wrapper">
				<div class="serves__block">
					<div class="serves__block_left">
						<?php
						if( $bottom_suptitle ) echo '<p class="section__text">', esc_html( $bottom_suptitle ), '</p>';

						if( $bottom_title ) echo '<div class="serves__title">', $bottom_title, '</div>';

						if( $bottom_subtitle ) echo '<p class="section__text">', esc_html( $bottom_subtitle ), '</p>';
						?>
					</div>
				</div>

				<?php
				if( $image )
					echo '<div class="serves__img">',
						wp_get_attachment_image( $image, 'banner-vertical-3', false, ['loading' => 'lazy'] ),
					'</div>';
				?>

				<div class="box-shadow-wrapper serves__info">
					<div class="serves__info_wrapper">
						<?php
						if( $left_column_title || $left_column_text ){
							echo '<div class="serves__info_left">';

							if( $left_column_title ) echo '<h2 class="serves__info_title">', esc_html( $left_column_title ), '</h2>';

							if( $left_column_text ) echo '<p class="section__text">', esc_html( $left_column_text ), '</p>';

							echo '</div>';
						}

						if( $left_column_title || $left_column_text ){
							echo '<div class="serves__info_right">';

							if( $right_column_title ) echo '<h2 class="serves__info_title">', esc_html( $right_column_title ), '</h2>';

							if( $right_column_text ) echo '<p class="section__text">', esc_html( $right_column_text ), '</p>';

							echo '</div>';
						}
						?>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>

