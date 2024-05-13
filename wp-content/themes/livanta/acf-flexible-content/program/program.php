<?php

/**
 * Program - ACF Flexible Content section layout.
 *
 * @see Page with ACF Flexible Content template -> Flexible Content -> Program
 *
 * @package WordPress
 * @subpackage livanta
 */

$title		= get_sub_field( 'title' );
$icon		= get_sub_field( 'icon' );
$image		= get_sub_field( 'image' );
$dropdown	= get_sub_field( 'dropdown' );
?>

<section class="program" id="program">
	<div class="container">
		<?php
		if( $title ){
			echo '<div class="dropdown-heading">';

			if( $icon ) echo wp_get_attachment_image( $icon, 'dropdown-icon-2', true, ['loading' => 'lazy'] );

			echo '<h2 class="h2">', esc_html( $title ), '</h2></div>';
		}

		if( $image || $dropdown ){
			echo '<div class="program__wrapper">';

			if( $image )
				echo '<div class="program__img">',
					wp_get_attachment_image( $image, 'large', false, ['loading' => 'lazy'] ),
				'</div>';

			if( ! empty( $dropdown ) ){
				echo '<div class="services__dropdowns">';

				foreach( $dropdown as $key => $item )
					get_template_part( 'components/dropdown-item', 'null', [
						'item'	=> $item,
						'key'	=> $key
					] );

				echo '</div>';
			}

			echo '</div>';
		}
		?>
	</div>
</section>

