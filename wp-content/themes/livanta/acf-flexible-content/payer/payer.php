<?php

/**
 * Payer - ACF Flexible Content section layout.
 *
 * @see Page with ACF Flexible Content template -> Flexible Content -> Payer
 *
 * @package WordPress
 * @subpackage livanta
 */

$banner		= get_sub_field( 'banner' );
$banner_mob	= get_sub_field( 'banner_mob' );
$sup_title	= get_sub_field( 'sup_title' );
$title		= get_sub_field( 'title' );
$text		= get_sub_field( 'text' );
$link		= get_sub_field( 'link' );
$list		= get_sub_field( 'list' );
?>

<section class="payer">
	<div class="container">
		<div class="payer__wrapper">
			<div class="payer__info">
				<?php
				if( $sup_title || $title ){
					echo '<div class="h2__wrapper">';

					if( $sup_title ) echo '<div class="subtitle">', esc_html( $sup_title ), '</div>';

					if( $title ) echo '<h2 class="h2">', esc_html( $title ), '</h2>';

					echo '</div>';
				}

				if( $text ) echo '<div class="section__text">', $text, '</div>';

				if( $banner_mob )
					echo '<div class="payer__img mobile">', wp_get_attachment_image( $banner_mob, 'medium', false, ['loading' => 'lazy'] ), '</div>';

				if( $list ){
					echo '<div class="payer__items">';

					foreach( $list as $item )
						get_template_part( 'components/payer-item', null, ['item' => $item] );

					echo '</div>';
				}

				if( $link ){
					echo '<div class="button__wrapper">';
						get_template_part( 'components/link-button', null, ['link' => $link] );
					echo '</div>';
				}
				?>
			</div>

			<?php
			if( $banner )
				echo '<div class="payer__img desktop">', wp_get_attachment_image( $banner, 'banner-vertical-2', false, ['loading' => 'lazy'] ), '</div>';
			?>
		</div>
	</div>
</section>

