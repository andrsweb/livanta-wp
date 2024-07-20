<?php

/**
 * Global Text - DUAL361 section layout.
 *
 * @see        Page with DUAL361 template -> Flexible Content DUAL361 -> Global Text
 *
 * @package    WordPress
 * @subpackage livanta
 */

wp_enqueue_style( 'dual_global_text', THEME_URI . '/static/css/dual_global_text/dual_global_text.min.css', [], THEME_VERSION );

$type  = get_sub_field( 'type' ) ?: 'red';
$icon  = get_sub_field( 'icon' );
$title = get_sub_field( 'title' );
$text  = get_sub_field( 'text' );
?>

<section class="dual-global-text <?php echo esc_attr( $type ) ?>">
	<div class="container">
		<div class="dual-global-text-wrapper">
			<?php
			if( $icon )
				echo '<div class="dual-global-text-img">',
				wp_get_attachment_image( $icon, 'thumbnail', true, ['loading' => 'lazy'] ),
				'</div>';

			if( $title ) echo '<h3>', $title, '</h3>';

			if( $text ) echo '<div class="dual-global-text-items">', $text, '</div>';
			?>
		</div>
	</div>
</section>

