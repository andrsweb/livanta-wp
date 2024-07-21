<?php

/**
 * Items - DUAL361 section layout.
 *
 * @see        Page with DUAL361 template -> Flexible Content DUAL361 -> Items
 *
 * @package    WordPress
 * @subpackage livanta
 */

wp_enqueue_style( 'dual_items', THEME_URI . '/static/css/dual_items/dual_items.min.css', [], THEME_VERSION );

$img_desktop = get_sub_field( 'img_desktop' );
$img_mobile  = get_sub_field( 'img_mobile' ) ?: $img_desktop;
$items       = get_sub_field( 'items' );
?>

<section class="dual-items">
	<div class="container">
		<div class="dual-items-wrapper">
			<?php
			if( $img_desktop && $img_mobile ){
				echo '<div class="dual-items-bg">', get_template_part( 'components/image', null, [
					'data' => crit_prepare_image_data( $img_desktop, 'large', [
						'is_lazy'     => 1,
						'mobile'      => $img_mobile,
						'mobile_size' => 'large'
					] )
				] ), '</div>';
			}

			if( ! empty( $items ) ){
				echo '<div class="dual-items-box">';

				foreach( $items as $item ){
					$title = $item['title'] ?? '';
					$text  = $item['text'] ?? '';

					if( ! $title && ! $text ) continue;

					echo '<div class="dual-item">';

					if( $title ) echo '<h2>', $title, '</h2>';

					if( $text ) echo '<div class="dual-item-texts">', $text, '</div>';

					echo '</div>';
				}

				echo '</div>';
			}
			?>
		</div>
	</div>
</section>

