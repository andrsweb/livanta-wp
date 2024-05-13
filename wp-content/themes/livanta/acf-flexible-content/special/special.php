<?php

/**
 * Special - ACF Flexible Content section layout.
 *
 * @see Page with ACF Flexible Content template -> Flexible Content -> Special
 *
 * @package WordPress
 * @subpackage livanta
 */

$title		= get_sub_field( 'title' );
$icon		= get_sub_field( 'icon' );
$image		= get_sub_field( 'image' );
$image_mob	= get_sub_field( 'image_mob' );
$dropdown	= get_sub_field( 'dropdown' );
?>

<section class="program special" id="special">
	<div class="container">
		<div class="program__wrapper">
			<?php
			if( $image )
				echo '<div class="program__img desktop-img">',
					wp_get_attachment_image( $image, 'banner-vertical-3', false, ['loading' => 'lazy'] ),
				'</div>';
			?>

			<div class="special__wrapper">
				<?php
				if( $title ){
					echo '<div class="dropdown-heading">';

					if( $icon ) echo wp_get_attachment_image( $icon, 'dropdown-icon-2', true, ['loading' => 'lazy'] );

					echo '<h2 class="h2">', esc_html( $title ), '</h2></div>';
				}

				if( $image_mob )
					echo '<div class="program__img mobile-img">',
						wp_get_attachment_image( $image_mob, 'banner-vertical-4', false, ['loading' => 'lazy'] ),
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
				?>
			</div>
		</div>
	</div>
</section>

