<?php

/**
 * Healthcare - ACF Flexible Content section layout.
 *
 * @see Page with ACF Flexible Content template -> Flexible Content -> Healthcare
 *
 * @package WordPress
 * @subpackage livanta
 */

$sup_title		= get_sub_field( 'sup_title' );
$text			= get_sub_field( 'text' );
$image			= get_sub_field( 'image' );
$title_1		= get_sub_field( 'title_1' );
$title_2		= get_sub_field( 'title_2' );
$title_3		= get_sub_field( 'title_3' );
$bottom_title	= get_sub_field( 'bottom_title' );
?>

<section class="healthcare" id="scroll">
	<div class="container">
		<div class="healthcare__wrapper">
			<?php if( $sup_title ) echo '<p class="section__text">', esc_html( $sup_title ), '</p>' ?>

			<div class="h2__wrapper">
				<?php
				if( $title_1 ) echo '<div class="subtitle">', esc_html( $title_1 ), '</div>';

				if( $title_2 || $title_3 ){
					echo '<h2 class="h2">';

					if( $title_2 ) echo '<span class="health-anim-1">', esc_html( $title_2 ), '</span>';

					if( $title_3 ) echo '<br /><span class="health-anim-2">', esc_html( $title_3 ), '</span>';

					echo '</h2>';
				}
				?>
			</div>

			<?php if( $image ) echo wp_get_attachment_image( $image, 'banner-vertical-4', false, ['class' => 'healthcare__img'] ) ?>
		</div>

		<?php
		if( $text ) echo '<p class="section__text last_text">', esc_html( $text ), '</p>';

		if( $bottom_title ) echo '<div class="subtitle healthcare__subtitle">', esc_html( $bottom_title ), '</div>';
		?>
	</div>
</section>

