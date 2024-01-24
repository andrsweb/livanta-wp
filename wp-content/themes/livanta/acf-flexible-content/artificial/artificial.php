<?php

/**
 * Artificial - ACF Flexible Content section layout.
 *
 * @see Page with ACF Flexible Content template -> Flexible Content -> Artificial
 *
 * @package WordPress
 * @subpackage livanta
 */

$sup_title		= get_sub_field( 'sup_title' );
$image			= get_sub_field( 'image' );
$mob_text		= get_sub_field( 'mobile_text' );
$title_1		= get_sub_field( 'title_1' );
$title_2		= get_sub_field( 'title_2' );
$title_3		= get_sub_field( 'title_3' );
$bottom_title	= get_sub_field( 'bottom_title' );
$bottom_list	= get_sub_field( 'bottom_list' );
?>

<section class="artificial">
	<div class="container">
		<div class="artificial__wrapper">
			<div class="artificial__left">
				<?php
				if( $sup_title ) echo '<p class="section__text">', esc_html( $sup_title ), '</p>';

				if( $image )
					echo '<div class="artificial__img">',
						wp_get_attachment_image( $image, 'banner-vertical-2' ),
					'</div>';
				?>
			</div>

			<div class="artificial__info">
				<?php
				if( $title_1 ) echo '<h2 class="artificial__heading">', esc_html( $title_1 ), '</h2>';

				if( $title_2 ) echo '<h2 class="artificial__heading">', esc_html( $title_2 ), '</h2>';

				if( $title_3 ) echo '<h2 class="artificial__heading last">', esc_html( $title_3 ), '</h2>';

				if( $mob_text ) echo '<p class="artificial__mobile_text">', esc_html( $mob_text ), '</p>';
				?>

				<div class="artificial__list_wrapper">
					<?php
					if( $bottom_title ) echo '<h3 class="artificial__list_text">', esc_html( $bottom_title ), '</h3>';

					if( ! empty( $bottom_list ) ){
						echo '<ul class="artificial__list">';

						foreach( $bottom_list as $item ){
							if( ! $text = $item['text'] ) continue;
							?>
							<li class="artificial__item">
								<img src="<?php echo THEME_URI ?>/static/img/icons/check.svg" width="32" height="32" loading="lazy" alt="check icon on transparent background">
								<?php echo esc_html( $text ) ?>
							</li>
							<?php
						}

						echo '</ul>';
					}
					?>
				</div>
			</div>
		</div>
	</div>
</section>

