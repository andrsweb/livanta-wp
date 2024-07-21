<?php

/**
 * Cases - DUAL361 section layout.
 *
 * @see        Page with DUAL361 template -> Flexible Content DUAL361 -> Cases
 *
 * @package    WordPress
 * @subpackage livanta
 */

wp_enqueue_style( 'dual_cases', THEME_URI . '/static/css/dual_cases/dual_cases.min.css', [], THEME_VERSION );

$type  = get_sub_field( 'type' ) ?: 'red';
$title = get_sub_field( 'title' );
$items = get_sub_field( 'items' );
?>

<section class="dual-cases <?php echo esc_attr( $type ) ?>">
	<div class="container">
		<div class="dual-cases-wrapper">
			<?php
			if( $title ) echo '<h2>', $title, '</h2>';

			if( ! empty( $items ) ){
				echo '<div class="dual-cases-items">';

				foreach( $items as $item ){
					$item_title = $item['title'] ?? '';
					$item_text  = $item['text'] ?? '';

					if( ! $item_title && ! $item_text ) continue;

					echo '<div class="dual-cases-item">';

					if( $item_title ) echo '<div class="dual-cases-item-top"><div class="dual-cases-item-title">', $item_title, '</div></div>';

					if( $item_text ) echo '<div class="dual-cases-item-bottom">', $item_text, '</div>';

					echo '</div>';
				}

				echo '</div>';
			}
			?>
		</div><!-- .dual-cases-wrapper -->
	</div><!-- .container -->
</section>

