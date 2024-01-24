<?php

/**
 * About Us - ACF Flexible Content section layout.
 *
 * @see Page with ACF Flexible Content template -> Flexible Content -> About Us
 *
 * @package WordPress
 * @subpackage livanta
 */

$banner		= get_sub_field( 'banner' );
$banner_mob	= get_sub_field( 'banner_mob' );
$title		= get_sub_field( 'title' );
$text		= get_sub_field( 'text' );
$link		= get_sub_field( 'link' );
?>

<section class="about-us">
	<div class="container">
		<div class="about-us__wrapper">
			<div class="about-us__inner">
				<?php
				if( $banner ){
					echo '<picture class="about-us__img">';

					if( $banner_mob )
						echo '<source type="image/png" media="(min-width: 0px) and (max-width: 768px)" srcset="',
						wp_get_attachment_image_url( $banner_mob, 'medium' ), '">';

					echo wp_get_attachment_image( $banner, 'large', false, ['loading' => 'lazy'] );
					echo '</picture>';
				}
				?>

				<?php
				if( $title ) echo '<h2 class="h2">', esc_html( $title ), '</h2>';

				if( $text ) echo '<div class="about-us__text">', $text, '</div>';

				if( $link )
					get_template_part( 'components/link-button', null, ['link' => $link, 'class' => 'learn-more'] );
				?>
			</div>
		</div>
	</div>
</section>

