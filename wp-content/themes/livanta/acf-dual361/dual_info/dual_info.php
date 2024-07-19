<?php

/**
 * Info - DUAL361 section layout.
 *
 * @see        Page with DUAL361 template -> Flexible Content DUAL361 -> Info
 *
 * @package    WordPress
 * @subpackage livanta
 */

wp_enqueue_style( 'dual_info', THEME_URI . '/static/css/dual_info/dual_info.min.css', [], THEME_VERSION );

$title      = get_sub_field( 'title' );
$text_title = get_sub_field( 'text_title' );
$text       = get_sub_field( 'text' );
$image      = get_sub_field( 'image' );
?>

<section class="dual-info">
	<div class="container">
		<div class="dual-info-wrapper">
			<?php
			if( $title ) echo '<div class="dual-info-title"><h2>', $title, '</h2></div>';

			if( $text_title || $text || $image ){
				echo '<div class="dual-info-text">';

				if( $image ){
					?>
					<div class="dual-text-img-wrapper">
						<div class="dual-text-img">
							<?php echo wp_get_attachment_image( $image, 'medium' ) ?>
						</div>
					</div>
					<?php
				}

				if( $text_title ) echo '<div class="dual-text-title">', $text_title, '</div>';

				if( $text ) echo '<div class="dual-info-text-items">', $text, '</div>';

				echo '</div>';
			}
			?>
		</div>
	</div>
</section>

