<?php

/**
 * Full Image - DUAL361 section layout.
 *
 * @see        Page with DUAL361 template -> Flexible Content DUAL361 -> Full Image
 *
 * @package    WordPress
 * @subpackage livanta
 */

wp_enqueue_style( 'dual_full_img', THEME_URI . '/static/css/dual_full_img/dual_full_img.min.css', [], THEME_VERSION );

$img_desktop = get_sub_field( 'image_desktop' );
$img_mobile  = get_sub_field( 'image_mobile' ) ?: $img_desktop;

if( ! $img_desktop ) return;
?>

<section class="dual-full-img">
	<div class="full-img">
		<?php
		get_template_part( 'components/image', null, [
			'data' => crit_prepare_image_data( $img_desktop, 'full', [
				'is_lazy'     => 1,
				'mobile'      => $img_mobile,
				'mobile_size' => 'full'
			] )
		] );
		?>
	</div>
</section>

