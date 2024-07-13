<?php

/**
 * Footer default template.
 *
 * @see Options -> Footer.
 *
 * @package WordPress
 * @subpackage livanta
 */

$logo		= get_field( 'logo', 'option' );
$address	= get_field( 'address', 'option' );
$phone		= get_field( 'phone', 'option' );
$soc		= get_field( 'social_buttons', 'option' );
$copy		= get_field( 'copyrights', 'option' );
$form_desc	= get_field( 'form_desc', 'option' );
?>

<footer class="footer">
	<div class="container">
		<div class="footer__wrapper">
			<div class="footer__left">
				<?php
				if( $logo ){
					?>
					<a href="<?php echo home_url( '/' ) ?>" class="footer__logo" aria-label="<?php esc_attr_e( 'Link to main page', 'livanta' ) ?>">
						<?php echo wp_get_attachment_image( $logo, 'logo-footer' ) ?>
					</a>
					<?php
				}

				if( $address || $phone ){
					echo '<div class="footer__left_info">';

					if( $address )
						echo '<address class="footer__info_item">', esc_html( $address ), '</address>';

					if( $phone )
						echo '<a href="tel:', esc_attr( liv_clean_phone( $phone ) ), '" class="footer__info_item item__link">',
						esc_html( $phone ),
						'</a>';

					echo '</div>';
				}

				if( $soc ){
					echo '<div class="footer__info_socials">';

					foreach ( $soc as $item ){
						if( ! $icon = $item['icon'] >> null ) continue;

						$url = $item['url'];
						?>
						<a href="<?php echo esc_url( $url ) ?>" class="footer__info_link" target="_blank">
							<?php echo wp_get_attachment_image( $icon, 'social' ) ?>
						</a>
						<?php
					}

					echo '</div>';
				}
				?>
			</div>

			<div class="footer__right">
				<!--
							<form class="form" data-type="footer-form">
								<fieldset>
									<?php if( $form_desc ) echo '<legend class="footer__text">', esc_html( $form_desc ), '</legend>' ?>

									<label class="footer__hidden_label" for="footer-input">Enter your email</label>
									<input id="footer-input" type="email" name="footer-email"
										   placeholder="Email address">
									<button class="button">SUBMIT</button>
								</fieldset>
								<div class="form-response"></div>
							</form>
							-->

				<div class="footer__nav_wrapper">
					<?php
					wp_nav_menu( [
						'theme_location'	=> 'footer_menu_1',
						'container'			=> 'nav',
						'container_class'	=> 'footer__nav',
						'items_wrap'		=> '<div id="%1$s" class="footer__nav_col %2$s">%3$s</div>'
					] );

					wp_nav_menu( [
						'theme_location'	=> 'footer_menu_2',
						'container'			=> 'nav',
						'container_class'	=> 'footer__nav',
						'items_wrap'		=> '<div id="%1$s" class="footer__nav_col %2$s">%3$s</div>'
					] );
					?>
				</div>
			</div>
		</div>
	</div>

	<?php if( $copy ) echo '<div class="footer__rights">', esc_html( $copy ), '</div>' ?>
</footer>

<?php wp_footer() ?>
</div><!-- .wrapper -->
</body>
</html>
