<?php

/**
 * Data - ACF Flexible Content section layout.
 *
 * @see Page with ACF Flexible Content template -> Flexible Content -> Data
 *
 * @package WordPress
 * @subpackage livanta
 */

$title		= get_sub_field( 'title' );
$icon		= get_sub_field( 'icon' );
$image		= get_sub_field( 'image' );
$dropdown	= get_sub_field( 'dropdown' );
?>

<section class="data" id="data">
	<div class="container">
		<div class="services-template quality__wrapper">
			<div class="quality__inner">
				<?php
				if( $title ){
					echo '<div class="dropdown-heading">';

					if( $icon ) echo wp_get_attachment_image( $icon, 'dropdown-icon-2', true, ['loading' => 'lazy'] );

					echo '<h2 class="h2">', esc_html( $title ), '</h2></div>';
				}

				if( $image )
					echo '<div class="quality__img data-img">',
						wp_get_attachment_image( $image, 'banner-vertical-2', false, ['loading' => 'lazy'] ),
					'</div>';
				?>
			</div>
		</div>

		<?php
		if( ! empty( $dropdown ) ){
			echo '<div class="box-shadow-wrapper services__dropdowns">';

			foreach( $dropdown as $key => $item )
				get_template_part( 'components/dropdown-item', 'null', [
					'item'	=> $item,
					'key'	=> $key,
					'id'	=> 'data'
				] );

			echo '</div>';
		}
		?>
	</div>
</section>

