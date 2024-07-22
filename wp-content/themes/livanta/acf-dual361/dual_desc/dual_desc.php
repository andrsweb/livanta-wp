<?php

/**
 * Description - DUAL361 section layout.
 *
 * @see        Page with DUAL361 template -> Flexible Content DUAL361 -> Description
 *
 * @package    WordPress
 * @subpackage livanta
 */

wp_enqueue_style( 'dual_desc', THEME_URI . '/static/css/dual_desc/dual_desc.min.css', [], THEME_VERSION );

$type  = get_sub_field( 'type' ) ?: 'red';
$title = get_sub_field( 'title' );
$text  = get_sub_field( 'text' );
$links = get_sub_field( 'links' );
$image = get_sub_field( 'image' );
?>

<section class="dual-desc <?php echo esc_attr( $type ) ?>">
	<div class="container">
		<div class="dual-desc-wrapper">
			<?php if( $title ) echo '<h3>', $title, '</h3>' ?>

			<div class="dual-desc-inner">
				<?php
				if( $text )
					echo '<div class="dual-desc-text">', $text, '</div>';

				if( ! empty( $links ) ){
					echo '<div class="dual-desc-links">';

					foreach( $links as $link )
						get_template_part( 'components/dual361/links/link', 'arrow', array_merge( liv_get_acf_link_data( $link['link'] ), [
							'type' => $type
						] ) );

					echo '</div>';
				}
				?>
			</div>

			<?php
			if( $image )
				echo '<div class="dual-desc-img">',
				wp_get_attachment_image( $image, 'large', false, ['loading' => 'lazy'] ),
				'</div>';
			?>
		</div><!-- .dual-desc-wrapper -->
	</div><!-- .container -->
</section>

