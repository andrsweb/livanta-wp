<?php

/**
 * Staff - ACF Flexible Content section layout.
 *
 * @see Page with ACF Flexible Content template -> Flexible Content -> Staff
 *
 * @package WordPress
 * @subpackage livanta
 */

$sup_title		= get_sub_field( 'sup_title' );
$image			= get_sub_field( 'image' );
$title			= get_sub_field( 'title' );
$text			= get_sub_field( 'text' );
$second_title	= get_sub_field( 'second_title' );
$second_text	= get_sub_field( 'second_text' );
?>

<section class="staff" id="staff">
	<div class="container">
		<div class="staff__wrapper">
			<?php
			if( $image )
				echo '<div class="staff__img">',
					wp_get_attachment_image( $image, 'banner-vertical-2', false, ['loading' => 'lazy'] ),
				'</div>';
			?>

			<div class="staff__lists">
				<?php
				if( $sup_title || $title ){
					echo '<div class="h2__wrapper">';

					if( $sup_title ) echo '<div class="subtitle">', esc_html( $sup_title ), '</div>';

					if( $title ) echo '<h2 class="h2">', esc_html( $title ), '</h2>';

					echo '</div>';
				}

				if( $text ) echo $text;

				if( $second_title ) echo '<h2 class="h2 staff__h2">', esc_html( $second_title ), '</h2>';

				if( $second_text ) echo $second_text;
				?>
			</div>
		</div>
	</div>
</section>

