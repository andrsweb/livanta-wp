<?php

/**
 * Image Text - DUAL361 section layout.
 *
 * @see        Page with DUAL361 template -> Flexible Content DUAL361 -> Image Text
 *
 * @package    WordPress
 * @subpackage livanta
 */

wp_enqueue_style( 'dual_image_text', THEME_URI . '/static/css/dual_image_text/dual_image_text.min.css', [], THEME_VERSION );

if( ! $blocks = get_sub_field( 'blocks' ) ) return;
?>

<section class="dual-image-text">
	<div class="container">
		<div class="dual-image-text-items">
			<?php
			foreach( $blocks as $block )
				get_template_part( 'acf-dual361/dual_image_text/block', null, ['block' => $block] );
			?>
		</div>
	</div>
</section>

