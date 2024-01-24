<?php

/**
 * Certifications - ACF Flexible Content section layout.
 *
 * @see Page with ACF Flexible Content template -> Flexible Content -> Certifications
 *
 * @package WordPress
 * @subpackage livanta
 */

$sup_title	= get_sub_field( 'sup_title' );
$title		= get_sub_field( 'title' );
$slider		= get_sub_field( 'slider' );
?>

<section class="certifications" id="certifications">
	<div class="container">
		<div class="certifications__wrapper">
			<div class="certifications__left">
				<?php
				if( ! empty( $slider ) ){

					echo '<div class="certifications__col">';

					foreach( $slider as $key => $slide ){
						if( ! $image = $slide['image'] ?: null ) continue;

						$class = ! $key ? ' active' : '';
						?>
						<div class="certifications__col_item<?php echo esc_attr( $class ) ?>" data-index="<?php echo esc_attr( $key ) ?>">
							<div class="certifications__col_img">
								<?php echo wp_get_attachment_image( $image, 'logo', false, ['loading' => 'lazy'] ) ?>
							</div>
						</div>
						<?php
					}

					echo '</div>';
				}
				?>
			</div>

			<div class="certifications__right">
				<?php
				if( $sup_title || $title ){
					echo '<div class="h2__wrapper">';

					if( $sup_title ) echo '<div class="subtitle">', esc_html( $sup_title ), '</div>';

					if( $title ) echo '<h2 class="h2">', esc_html( $title ), '</h2>';

					echo '</div>';
				}

				if( ! empty( $slider ) ){
					?>
					<div class="swiper slider-info">
						<div class="swiper-wrapper">
							<?php
							foreach( $slider as $slide ){
								$slide_title	= $slide['title'];
								$slide_text		= $slide['text'];

								if( ! $slide_title && ! $slide_text ) continue;
								?>
								<div class="swiper-slide">
									<?php
									if( $slide_title ) echo '<div class="slider-info__title">', esc_html( $slide_title ), '</div>';

									if( $slide_text ) echo '<div class="slider-info__text">', esc_html( $slide_text ), '</div>';
									?>
								</div>
								<?php
							}
							?>
						</div>
					</div>

					<div class="certifications__buttons">
						<div class="swiper-button certifications_prev">
							<svg width="24" height="16" viewBox="0 0 24 16" fill="none"
								 xmlns="http://www.w3.org/2000/svg">
								<path d="M7.96155 15.9614L0 7.99988L7.96155 0.0383301L9.02306 1.09988L2.8731 7.24988H24V8.74988H2.8731L9.02306 14.8999L7.96155 15.9614Z"
									  fill="#061021"/>
							</svg>
						</div>
						<div class="swiper-button certifications_next">
							<svg width="24" height="16" viewBox="0 0 24 16" fill="none"
								 xmlns="http://www.w3.org/2000/svg">
								<path d="M16.0385 0.0385697L24 8.00012L16.0384 15.9617L14.9769 14.9001L21.1269 8.75012L6.30454e-07 8.75012L7.61588e-07 7.25012L21.1269 7.25012L14.9769 1.10012L16.0385 0.0385697Z"
									  fill="#061021"/>
							</svg>
						</div>
					</div>
					<?php
				}
				?>
			</div>
		</div>
	</div>
</section>

