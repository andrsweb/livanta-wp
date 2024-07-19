<?php

/**
 * Quotes - DUAL361 section layout.
 *
 * @see        Page with DUAL361 template -> Flexible Content DUAL361 -> Quotes
 *
 * @package    WordPress
 * @subpackage livanta
 */

wp_enqueue_style( 'dual_quotes', THEME_URI . '/static/css/dual_quotes/dual_quotes.min.css', [], THEME_VERSION );
wp_enqueue_script( 'dual_quotes', THEME_URI . '/static/js/dual_quotes/dual_quotes.min.js', ['jquery'], THEME_VERSION, true );

if( ! $comments = get_sub_field( 'comments' ) ) return;
?>

<section class="dual-quotes">
	<div class="container">
		<div class="dual-quotes-wrapper">
			<div class="swiper blog-quotes-swiper">
				<div class="swiper-wrapper">
					<?php
					foreach( $comments as $comment ){
						echo '<div class="swiper-slide">';
						get_template_part( 'components/dual361/dual-quotes-item', null, ['item' => $comment] );
						echo '</div>';
					}
					?>
				</div>

				<div class="dual-quotes-ui">
					<div class="swiper-scrollbar"></div>
					<div class="dual-quotes-arrows">
						<div class="swiper-prev" tabindex="0">
							<svg width="24" height="16" viewBox="0 0 24 16" fill="none"
								xmlns="http://www.w3.org/2000/svg">
								<path d="M7.96155 15.9614L0 7.99988L7.96155 0.0383301L9.02306 1.09988L2.8731 7.24988H24V8.74988H2.8731L9.02306 14.8999L7.96155 15.9614Z"
									fill="#061021"/>
							</svg>
						</div>
						<div class="swiper-next" tabindex="0">
							<svg width="24" height="16" viewBox="0 0 24 16" fill="none"
								xmlns="http://www.w3.org/2000/svg">
								<path d="M16.0385 0.0385697L24 8.00012L16.0384 15.9617L14.9769 14.9001L21.1269 8.75012L6.30454e-07 8.75012L7.61588e-07 7.25012L21.1269 7.25012L14.9769 1.10012L16.0385 0.0385697Z"
									fill="#061021"/>
							</svg>
						</div>
					</div>
				</div>
			</div><!-- .swiper.blog-quotes-swiper -->
		</div><!-- .dual-quotes-wrapper -->
	</div><!-- .container -->
</section>

