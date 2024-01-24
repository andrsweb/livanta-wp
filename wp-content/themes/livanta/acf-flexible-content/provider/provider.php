<?php

/**
 * Provider - ACF Flexible Content section layout.
 *
 * @see Page with ACF Flexible Content template -> Flexible Content -> Provider
 *
 * @package WordPress
 * @subpackage livanta
 */

$banner		= get_sub_field( 'banner' );
$sup_title	= get_sub_field( 'sup_title' );
$title		= get_sub_field( 'title' );
$text		= get_sub_field( 'text' );
$link		= get_sub_field( 'link' );
$list		= get_sub_field( 'list' );
?>

<section class="provider">
	<div class="container">
		<div class="provider__wrapper">
			<?php
			if( $banner )
				echo '<div class="provider__img">', wp_get_attachment_image( $banner, 'large', false, ['loading' => 'lazy'] ), '</div>';

			if( $sup_title || $title ){
				echo '<div class="h2__wrapper">';

				if( $sup_title ) echo '<div class="subtitle">', esc_html( $sup_title ), '</div>';

				if( $title ) echo '<h2 class="h2">', esc_html( $title ), '</h2>';

				echo '</div>';
			}
			?>

			<div class="provider__info">
				<?php
				if( $text ) echo '<div class="provider__info_texts paragraphs">', $text, '</div>';

				if( $list ) {
					echo '<ul class="box-shadow-wrapper provider__list">';

					foreach ( $list as $item )
						get_template_part( 'components/list-item', null, [ 'item' => $item ] );

					echo '</ul>';
				}

				if( $link ){
					echo '<div class="button__wrapper">';
						get_template_part( 'components/link-button', null, ['link' => $link] );
					echo '</div>';
				}
				?>
			</div>
		</div>
	</div>
</section>

