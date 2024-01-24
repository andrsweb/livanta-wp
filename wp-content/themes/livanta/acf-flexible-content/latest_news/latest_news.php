<?php

/**
 * Latest News - ACF Flexible Content section layout.
 *
 * @see Page with ACF Flexible Content template -> Flexible Content -> Latest News
 *
 * @package WordPress
 * @subpackage livanta
 */

$title		= get_sub_field( 'title' );
$news_count	= get_sub_field( 'news_count' ) ?: get_option( 'posts_per_page' );
$link		= get_sub_field( 'link' );
$news		= get_posts( [
	'post_status'	=> 'publish',
	'numberposts'	=> $news_count,
] );

if( ! count( $news ) ) return;
?>

<section class="latest-news">
	<div class="container">
		<div class="latest-news__wrapper">
			<div class="latest-news__heading">
				<?php
				if( $title ) echo '<h2 class="h2">', esc_html( $title ), '</h2>';

				if( count( $news ) > 3 ){
					?>
					<div class="latest-news__arrows">
						<div class="swiper-button latest__news_prev" tabindex="0">
							<svg width="24" height="16" viewBox="0 0 24 16" fill="none"
								 xmlns="http://www.w3.org/2000/svg">
								<path d="M7.96155 15.9614L0 7.99988L7.96155 0.0383301L9.02306 1.09988L2.8731 7.24988H24V8.74988H2.8731L9.02306 14.8999L7.96155 15.9614Z"
									  fill="#061021"/>
							</svg>
						</div>
						<div class="swiper-button latest__news_next" tabindex="0">
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

			<div class="latest-news__items">
				<div class="swiper latest-news-slider">
					<div class="swiper-wrapper">
						<?php
						foreach( $news as $article )
							get_template_part( 'components/post-slide', null, ['id' => $article->ID] );
						?>
					</div>
				</div>

				<?php
				if( $link ){
					echo '<div class="button__wrapper">';
						get_template_part( 'components/link-button', null, ['link' => $link, 'class' => 'view-all'] );
					echo '</div>';
				}
				?>
			</div>
		</div>
	</div>
</section>

