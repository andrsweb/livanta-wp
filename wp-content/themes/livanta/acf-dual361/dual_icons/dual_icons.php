<?php

/**
 * Icons - DUAL361 section layout.
 *
 * @see        Page with DUAL361 template -> Flexible Content DUAL361 -> Icons
 *
 * @package    WordPress
 * @subpackage livanta
 */

wp_enqueue_style( 'dual_icons', THEME_URI . '/static/css/dual_icons/dual_icons.min.css', [], THEME_VERSION );

$title = get_sub_field( 'title' );
$icons = get_sub_field( 'icons' );
?>

<section class="dual-icons">
	<div class="container">
		<div class="dual-icons-wrapper">
			<?php
			if( $title ) echo '<h2>', $title, '</h2>';

			if( ! empty( $icons ) ){
				echo '<div class="dual-icons-items">';

				foreach( $icons as $icon ){
					$img = $icon['icon'] ?? [];
					$desc = $icon['desc'] ?? '';

					if( empty( $img ) && ! $desc ) continue;
					?>
					<div class="dual-icons-item">
						<div class="dual-icons-item-inner">
							<?php
							if( ! empty( $img ) )
								echo '<div class="dual-icons-img">',
								wp_get_attachment_image( $img ),
								'</div>';

							if( $desc ) echo '<p>', $desc, '</p>';
							?>
						</div>
					</div>
					<?php
				}

				echo '</div>';
			}
			?>
		</div><!-- .dual-icons-wrapper -->
	</div><!-- .container -->
</section>

