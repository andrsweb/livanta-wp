<?php

/**
 * Footer DUAL361 template.
 *
 * @see        Options -> Footer DUAL361.
 *
 * @package    WordPress
 * @subpackage livanta
 */

$logo      = get_field( 'logo_footer_dual', 'option' );
$logo_link = get_field( 'logo_footer_dual_link', 'option' );
$red_link  = get_field( 'red_link', 'option' );
$blue_link = get_field( 'blue_link', 'option' );
$copyright = get_field( 'copyright_dual', 'option' );
?>

<footer class="footer-dual">
	<div class="container">
		<div class="footer-dual-wrapper">
			<div class="footer-dual-row">
				<?php
				if( $logo ){
					$logo_url = $logo_link ? $logo_link['url'] : get_bloginfo( 'url' );
					?>
					<div class="footer-dual-col">
						<a href="<?php echo esc_url( $logo_url ) ?>" class="footer-dual-logo">
							<?php echo wp_get_attachment_image( $logo, 'full' ) ?>
						</a>
					</div>
					<?php
				}
				?>

				<div class="footer-dual-col">
					<?php
					wp_nav_menu( [
						'theme_location'	=> 'footer_menu_dual_1',
						'container'			=> 'nav',
						'container_class'	=> 'footer-dual-nav'
					] );
					?>
				</div>

				<div class="footer-dual-col">
					<?php
					wp_nav_menu( [
						'theme_location'	=> 'footer_menu_dual_2',
						'container'			=> 'nav',
						'container_class'	=> 'footer-dual-nav'
					] );

					if( $red_link )
						get_template_part( 'components/dual361/links/link', 'full', liv_get_acf_link_data( $red_link ) );
					?>
				</div>
				<div class="footer-dual-col">
					<?php
					wp_nav_menu( [
						'theme_location'	=> 'footer_menu_dual_3',
						'container'			=> 'nav',
						'container_class'	=> 'footer-dual-nav'
					] );

					if( $blue_link )
						get_template_part( 'components/dual361/links/link', 'full', array_merge( liv_get_acf_link_data( $blue_link ), [
							'type' => 'blue'
						] ) );
					?>
				</div>
			</div>

			<div class="footer-dual-bottom">
				<?php
				wp_nav_menu( [
					'theme_location'	=> 'footer_menu_dual_bottom',
					'container'			=> 'nav',
					'container_class'	=> 'footer-dual-nav'
				] );

				if( $copyright ) echo '<p>', $copyright, '</p>';
				?>
			</div>
		</div>
	</div>
</footer>

<?php wp_footer() ?>
</div><!-- .wrapper --></body></html>
