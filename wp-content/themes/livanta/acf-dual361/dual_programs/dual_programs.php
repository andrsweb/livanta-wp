<?php

/**
 * Programs - DUAL361 section layout.
 *
 * @see        Page with DUAL361 template -> Flexible Content DUAL361 -> Programs
 *
 * @package    WordPress
 * @subpackage livanta
 */

wp_enqueue_style( 'dual_programs', THEME_URI . '/static/css/dual_programs/dual_programs.min.css', [], THEME_VERSION );

$title = get_sub_field( 'title' );
$icons = get_sub_field( 'icons' );
$link  = get_sub_field( 'link' );
?>

<section class="dual-programs">
	<div class="container">
		<div class="dual-programs-wrapper">
			<?php
			if( $title ) echo '<h2>', $title, '</h2>';

			if( ! empty( $icons ) ){
				echo '<div class="dual-programs-items">';

				foreach( $icons as $icon ){
					$img  = $icon['image'] ?? null;
					$desc = $icon['desc'] ?? '';

					echo '<div class="dual-programs-item">';

					if( $img )
						echo '<div class="dual-programs-item-img">',
						wp_get_attachment_image( $img, 'thumbnail', true, ['loading' => 'lazy'] ),
						'</div>';

					if( $desc ) echo '<p>', $desc, '</p>';

					echo '</div>';
				}

				echo '</div>';
			}

			if( $link )
				get_template_part( 'components/dual361/links/link', 'arrow', liv_get_acf_link_data( $link ) );
			?>
		</div>
	</div>
</section>

