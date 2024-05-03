<?php

/**
 * Leadership - ACF Flexible Content section layout.
 *
 * @see Page with ACF Flexible Content template -> Flexible Content -> Leadership
 *
 * @package WordPress
 * @subpackage livanta
 */

$sup_title	= get_sub_field( 'sup_title' );
$title		= get_sub_field( 'title' );
$text		= get_sub_field( 'text' );
$people		= get_sub_field( 'people' );
?>

<section class="leadership" id="lead">
	<div class="container">
		<div class="leadership__headings">
			<div class="leadership__headings_left">
			<?php
			if( $sup_title || $title ){
				echo '<div class="h2__wrapper">';

				if( $sup_title ) echo '<div class="subtitle">', esc_html( $sup_title ), '</div>';

				if( $title ) echo '<h2 class="h2">', esc_html( $title ), '</h2>';

				echo '</div>';
			}
			?>
			<?php
				if( $text ) echo '<p class="section__text">', esc_html( $text ), '</p>';
			?>
			</div>
		<?php
		?>
			<?php
			if( ! empty( $people ) && count( $people ) > 3 ){
				?>
				<div class="leadership__buttons">
					<div class="swiper-button leadership_prev">
						<svg width="24" height="16" viewBox="0 0 24 16" fill="none"
							xmlns="http://www.w3.org/2000/svg">
							<path d="M7.96155 15.9614L0 7.99988L7.96155 0.0383301L9.02306 1.09988L2.8731 7.24988H24V8.74988H2.8731L9.02306 14.8999L7.96155 15.9614Z"
								fill="#061021"/>
						</svg>
					</div>
					<div class="swiper-button leadership_next">
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

		<?php
		if( ! empty( $people ) ){
			?>
			<div class="leadership__swiper">
				<div class="swiper leadership-swiper">
					<div class="swiper-wrapper">
						<?php
						foreach( $people as $key => $person ){
							$person_id	= $person['person'];
							$position	= get_field( 'position', $person_id );
							?>
							<div class="swiper-slide">
								<div class="leadership__swiper_wrapper">
									<?php
									if( has_post_thumbnail( $person_id ) )
										echo '<div class="leadership__swiper_img">',
											get_the_post_thumbnail( $person_id ),
										'</div>';
									?>

									<div class="leadership__swiper_info">
										<div class="leadership__name"><?php echo get_the_title( $person_id ) ?></div>

										<?php
										if( $position ) echo '<div class="leadership__job">', esc_html( $position ), '</div>';
										?>
										<div class="leadership__link_wrapper">
											<button class="leadership__link call-lead-<?php echo $key + 1 ?>">
												<?php _e( 'see more', 'livanta' ) ?>
												<img src="<?php echo THEME_URI ?>/static/img/icons/more.svg" width="24" height="24" loading="lazy" alt="See more arrow" />
											</button>
										</div>
									</div>
								</div>
							</div>
							<?php
						}
						?>
					</div>
					<div class="swiper-scrollbar"></div>
				</div>
			</div>
			<?php
		}
		?>
	</div>

	<?php
	if( ! empty( $people ) ){
		foreach( $people as $key => $person ){
			$person_id	= $person['person'];
			$position	= get_field( 'position', $person_id );
			$col_left	= get_field( 'first_col', $person_id );
			$col_right	= get_field( 'second_col', $person_id );
			$index		= $key + 1;
			?>
			<div class="popup-wrapper leadership__popup leadership-popup-<?php echo esc_html( $index ) ?>" id="leadership-popup-<?php echo esc_html( $index ) ?>">
				<div class="box-shadow-wrapper popup">
					<div class="leadership__inner">
						<div class="leadership__heading">
							<div class="leadership__popup_avatar">
								<?php
								if( has_post_thumbnail( $person_id ) )
									echo '<div class="leadership__img">',
										get_the_post_thumbnail( $person_id ),
									'</div>';
								?>

								<div class="leadership__popup_info">
									<div class="leadership__name"><?php echo get_the_title( $person_id ) ?></div>

									<?php if( $position ) echo '<div class="leadership__job">', esc_html( $position), '</div>' ?>
								</div>
							</div>
							<div class="popup-close">
								<img src="<?php echo THEME_URI ?>/static/img/icons/close.svg" width="40" height="40" alt="" />
							</div>
						</div>

						<?php
						if( $col_left || $col_right ){
							echo '<div class="leadership__texts">';

							if( $col_left ) echo '<p class="leadership__text">', $col_left, '</p>';

							if( $col_right ) echo '<p class="leadership__text">', $col_right, '</p>';

							echo '</div>';
						}
						?>
					</div>
				</div>
			</div>
			<?php
		}
	}
	?>
</section>

