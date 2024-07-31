<?php

/**
 * Blog Articles - DUAL361 section layout.
 *
 * @see        Page with DUAL361 template -> Flexible Content DUAL361 -> Blog Articles
 *
 * @package    WordPress
 * @subpackage livanta
 */

wp_enqueue_style( 'blog_articles', THEME_URI . '/static/css/blog_articles/blog_articles.min.css', [], THEME_VERSION );
wp_enqueue_script( 'blog_articles', THEME_URI .
                                    '/static/js/blog_articles/blog_articles.min.js', [ 'jquery' ], THEME_VERSION, true );

$title    = get_sub_field( 'title' );
$count    = get_sub_field( 'articles_count' ) ?: 10;
$category = get_sub_field( 'category' ) ?: null;
$args     = [ 'post_status' => 'publish', 'posts_per_page' => $count ];

if( $category ) $args['category__in'] = $category;

$articles = get_posts( $args );
?>

<section class="blog-articles">
	<div class="container">
		<div class="blog-articles-wrapper">
			<div class="blog-articles-heading">
				<?php
				if ( $title ) {
					echo '<h2>', $title, '</h2>';
				}

				if ( ! empty( $articles ) ) {
					?>
					<div class="blog-articles-arrows">
						<div class="swiper-prev" tabindex="0">
							<svg
								width="24" height="16" viewBox="0 0 24 16" fill="none"
								xmlns="http://www.w3.org/2000/svg"
							>
								<path
									d="M7.96155 15.9614L0 7.99988L7.96155 0.0383301L9.02306 1.09988L2.8731 7.24988H24V8.74988H2.8731L9.02306 14.8999L7.96155 15.9614Z"
									fill="#061021"
								/>
							</svg>
						</div>
						<div class="swiper-next" tabindex="0">
							<svg
								width="24" height="16" viewBox="0 0 24 16" fill="none"
								xmlns="http://www.w3.org/2000/svg"
							>
								<path
									d="M16.0385 0.0385697L24 8.00012L16.0384 15.9617L14.9769 14.9001L21.1269 8.75012L6.30454e-07 8.75012L7.61588e-07 7.25012L21.1269 7.25012L14.9769 1.10012L16.0385 0.0385697Z"
									fill="#061021"
								/>
							</svg>
						</div>
					</div>
					<?php
				}
				?>
			</div><!-- .blog-articles-heading -->

			<?php
			if ( ! empty( $articles ) ) {
				?>
				<div class="blog-articles-items">
					<div class="swiper blog-articles-swiper">
						<div class="swiper-wrapper">
							<?php
							foreach ( $articles as $article ) {
								echo '<div class="swiper-slide">';
								get_template_part( 'components/dual361/blog-articles-card', null, [
									'id' => $article
								] );
								echo '</div>';
							}
							?>
						</div>
					</div>
				</div>
				<?php
			}
			?>
		</div>
	</div>
</section>

