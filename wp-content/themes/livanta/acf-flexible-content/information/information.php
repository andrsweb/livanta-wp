<?php

/**
 * Information - ACF Flexible Content section layout.
 *
 * @see Page with ACF Flexible Content template -> Flexible Content -> Information
 *
 * @package WordPress
 * @subpackage livanta
 */

$title		= get_sub_field( 'title' );
$image		= get_sub_field( 'image' );
$dropdown	= get_sub_field( 'dropdown' );
?>

<section class="information quality" id="info">
	<div class="container">
		<div class="services-template quality__wrapper">
			<div class="quality__inner">
				<?php
				if( $title ) echo '<h2 class="h2">', esc_html( $title ), '</h2>';

				if( $image )
					echo '<div class="quality__img">',
						wp_get_attachment_image( $image, 'banner-vertical-2', false, ['loading' => 'lazy'] ),
					'</div>';
				?>
			</div>
		</div>

		<?php
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
</section>

