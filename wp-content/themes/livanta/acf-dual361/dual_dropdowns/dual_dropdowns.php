<?php

/**
 * Dropdowns - DUAL361 section layout.
 *
 * @see        Page with DUAL361 template -> Flexible Content DUAL361 -> Dropdowns
 *
 * @package    WordPress
 * @subpackage livanta
 */

wp_enqueue_style( 'dual_dropdowns', THEME_URI . '/static/css/dual_dropdowns/dual_dropdowns.min.css', [], THEME_VERSION );
wp_enqueue_script( 'dual_dropdowns', THEME_URI . '/static/js/dual_dropdowns/dual_dropdowns.min.js', ['jquery'], THEME_VERSION, true );

$title = get_sub_field( 'title' );
$text  = get_sub_field( 'text' );
$img   = get_sub_field( 'image' );
$items = get_sub_field( 'items' );
?>

<section class="dual-dropdowns">
	<div class="container">
		<div class="dual-dropdowns-wrapper">
			<div class="dual-dropdowns-top">
				<?php
				if( $title || $text ){
					echo '<div class="dual-dropdowns-info">';

					if( $title ) echo '<h2>', $title, '</h2>';

					if( $text ) echo '<div class="dual-dropdowns-text">', $text, '</div>';

					echo '</div>';
				}

				if( $img )
					echo '<div class="dual-dropdowns-img">',
					wp_get_attachment_image( $img, 'large', false, ['loading' => 'lazy'] ),
					'</div>';
				?>
			</div>

			<?php
			if( ! empty( $items ) ){
				echo '<div class="dual-dropdowns-bottom">';

				foreach( $items as $item ){
					$label      = $item['label'] ?? '';
					$left_text  = $item['left_text'] ?? '';
					$right_text = $item['right_text'] ?? '';

					if( ! $label || ( ! $left_text && ! $right_text ) ) continue;
					?>

					<div class="dual-dropdown">
						<button class="dual-dropdown-button">
							<span class="dual-dropdown-button-text"><?php echo $label ?></span>
							<span class="dual-dropdown-button-ico"></span>
						</button>

						<div class="dual-dropdown-open">
							<div class="dual-dropdown-inner">
								<?php
								if( $left_text ) echo '<div class="dual-dropdown-inner-left">', $left_text, '</div>';

								if( $right_text ){
									?>
									<div class="dual-dropdown-inner-right">
										<div class="dual-dropdown-img">
											<img src="<?php echo THEME_URI ?>/static/img/dual361/big-arr.svg" alt="">
										</div>
										<div class="dual-dropdown-texts">
											<?php echo $right_text ?>
										</div>
									</div>
									<?php
								}
								?>
							</div>
						</div>
					</div>
					<?php
				}

				echo '</div>';
			}
			?>
		</div>
	</div>
</section>

