<?php

/**
 * Work - ACF Flexible Content section layout.
 *
 * @see Page with ACF Flexible Content template -> Flexible Content -> Work
 *
 * @package WordPress
 * @subpackage livanta
 */

$sup_title	= get_sub_field( 'sup_title' );
$title		= get_sub_field( 'title' );
$links		= get_sub_field( 'links' );
?>

<section class="work" id="work">
	<div class="container">
		<div class="work__wrapper">
			<?php
			if( $sup_title || $title ){
				echo '<div class="h2__wrapper">';

				if( $sup_title ) echo '<div class="subtitle">', esc_html( $sup_title ), '</div>';

				if( $title ) echo '<h2 class="h2">', esc_html( $title ), '</h2>';

				echo '</div>';
			}

			if( ! empty( $links ) ){
				echo '<div class="work__links">';

				foreach( $links as $link_key => $link ){
					$link_title	= $link['title'];
					$tabs		= $link['tabs'];

					if( ! $link_title || empty( $tabs ) ) continue;
					?>
					<div class="work__link_wrapper">
						<div class="work__text"><?php echo esc_attr( $link_title ) ?></div>
						<button class="work__link call-contracts">
							<?php _e( 'SEE MORE', 'livanta' ) ?>
							<img src="<?php echo THEME_URI ?>/static/img/icons/more.svg" width="24" height="24" loading="lazy" alt="more arrow" />
						</button>

						<div class="popup-wrapper work-popup" id="contracts-popup-<?php echo esc_attr( $link_key ) ?>">
							<div class="box-shadow-wrapper popup">
								<div class="work-popup__heading">
									<h3 class="h3"><?php echo esc_html( $link_title ) ?></h3>
									<div class="popup-close">
										<img src="<?php echo THEME_URI ?>/static/img/icons/close.svg" width="40" height="40" alt="" />
									</div>
								</div>
								<div class="work-popup__tab_buttons">
									<?php
									foreach( $tabs as $key => $tab ){
										if( ! $tab_title = $tab['title'] ?: null ) continue;

										$class = $key === 0 ? ' active' : '';

										if( $key > 0 ) echo '<span>|</span>';

										echo '<button class="work-popup-button', esc_attr( $class ), '" data-id="', esc_attr( $key ), '">',
											esc_html( $tab_title ),
										'</button>';
									}
									?>
								</div>
								<div class="work-popup__content">
									<?php
									foreach( $tabs as $key => $tab ){
										if( ! $tab_text = $tab['text'] ?: null ) continue;

										$class = $key === 0 ? ' active' : '';

										echo '<div class="work-popup-content', esc_attr( $class ), '" data-id="', esc_attr( $key ), '">',
											$tab_text,
										'</div>';
									}
									?>
								</div>
							</div>
						</div>
					</div>
					<?php
				}

				echo '</div>';
			}
			?>
		</div>
	</div>
</section>

