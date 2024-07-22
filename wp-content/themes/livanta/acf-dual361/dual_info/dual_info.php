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
$image_link = get_sub_field( 'image_link' );
?>

<section class="dual-info">
	<div class="container">
		<div class="dual-info-wrapper">
			<?php
			if( $title ) echo '<div class="dual-info-title"><h2>', $title, '</h2></div>';

			if( $text_title || $text || $image ){
				echo '<div class="dual-info-text">';

				if( $image ){
					echo '<div class="dual-text-img-wrapper">';

					if( $image_link ){
						$image_link_title  = $image_link['title'] ?? '';
						$image_link_url    = $image_link['url'] ?? '#';
						$image_link_target = $image_link['target'] ? ' target="_blank"' : '';
						?>
						<a
							class="dual-text-img"
							href="<?php echo esc_url( $image_link_url ) ?>"
							title="<?php echo esc_attr( $image_link_title ) ?>"
							<?php echo $image_link_target ?>
						>
						<?php
					}else {
						echo '<div class="dual-text-img">';
					}

					echo wp_get_attachment_image( $image, 'medium' );

					echo $image_link ? '</a>' : '</div>';

					echo '</div>';
				}

				if( $text_title ) echo '<div class="dual-text-title">', $text_title, '</div>';

				if( $text ) echo '<div class="dual-info-text-items">', $text, '</div>';

				echo '</div>';
			}
			?>
		</div>
	</div>
</section>

