<?php

/**
 * Single post content.
 *
 * @package WordPress
 * @subpackage livanta
 */

// If this is NOT single post page - do nothing.
if( ! is_singular( 'post' ) ) return;

$post_id	= get_the_ID();
$highlights	= get_field( 'single_post_highlights', 'option' );
$more_posts	= get_posts( [
	'post_type'		=> 'post',
	'numberposts'	=> 3,
	'tax_query'		=> [ [
		'taxonomy'	=> 'category',
		'field'		=> 'name',
		'terms'		=> explode( ', ', liv_get_categories_names( $post_id ) )
	] ],
	'post__not_in'	=> [$post_id]
] );
?>

<article class="post-single post-<?php echo esc_attr( $post_id ) ?>">
	<section class="news-link-hero">
		<div class="container">
			<a href="<?php echo get_the_permalink( get_option( 'page_for_posts', true ) ) ?>" class="back">
				<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M3.37308 7.25005L15.5 7.25005L15.5 8.75L3.37308 8.75L9.06923 14.4462L8.00003 15.5L0.500049 8.00002L8.00003 0.500048L9.06923 1.55387L3.37308 7.25005Z"
						  fill="#484C52"/>
				</svg>
				<?php _e( 'BACK TO NEWS', 'livanta' ) ?>
			</a>

			<h1 class="h1"><?php the_title() ?></h1>

			<?php
			if( has_post_thumbnail() ){
				?>
				<div class="news-link-hero__wrapper">
					<?php
					echo get_the_post_thumbnail( $post_id, 'banner-vertical-4', ['class' => 'news-link-hero__img-main'] ),
					get_the_post_thumbnail( $post_id, 'full-hd', ['class' => 'news-link-hero__img-backgound'] );
					?>

					<div class="news-link-hero__info">
						<div class="category">
							<div class="category__title"><?php _e( 'Category', 'livanta' ) ?></div>
							<div class="category__item"><?php echo liv_get_categories_names( $post_id ) ?></div>
						</div>
						<div class="publish">
							<div class="publish__title"><?php _e( 'Published on', 'livanta' ) ?></div>
							<div class="publish__date"><?php echo get_the_date( 'd F, Y', $post_id ) ?></div>
						</div>
						<div class="share">
							<div class="share__title"><?php _e( 'Share', 'livanta' ) ?></div>
							<div class="share__links">
								<a href="<?php the_permalink() ?>" class="copy-to-clipboard">
									<img src="<?php echo THEME_URI ?>/static/img/news/news-link/link.svg" width="28" height="28" alt="share" />
								</a>
								<?php echo do_shortcode( '[addtoany]' ) ?>
							</div>
						</div>
					</div>
				</div>
				<?php
			}
			?>
		</div>
	</section>

	<section class="news-info">
		<div class="container">
			<div class="news-info__wrapper">
				<div class="news-info__content paragraphs">
					<?php the_content() ?>
				</div>
				<div class="news-info__highlight">
					<h2 class="news-info__highlight_title"><?php _e( 'Highlights news', 'livanta' ) ?></h2>

					<?php
					if( ! empty( $highlights ) ){
						echo '<div class="highlights__items">';

						foreach( $highlights as $item )
							get_template_part( 'components/post-highlight', null, ['id' => $item['post'], 'class' => 'highlight__top'] );

						echo '</div>';
					}
					?>

				</div>
			</div>
		</div>
	</section>

	<?php
	if( ! empty( $more_posts ) ){
		?>
		<section class="more-like">
			<div class="container">
				<div class="more-like__title">
					<h3 class="h3"><?php _e( 'More like this', 'livanta' ) ?></h3>

					<div class="more-like__arrows">
						<div class="swiper-button more-like_prev">
							<img src="<?php echo THEME_URI ?>/static/img/icons/arrow.svg" width="24" height="16" loading="lazy" alt="previous arrow">
						</div>
						<div class="swiper-button more-like_next">
							<img class="arr-reverse" src="<?php echo THEME_URI ?>/static/img/icons/arrow.svg" width="24" height="16" loading="lazy" alt="arrow next">
						</div>
					</div>
				</div>
				<div class="more-like__cards">
					<div class="swiper more-like-swiper">
						<div class="swiper-wrapper">
							<?php
							foreach( $more_posts as $_post ){
								echo '<div class="swiper-slide">';
								get_template_part( 'components/post-card', null, [ 'id' => $_post->ID ] );
								echo '</div>';
							}
							?>
						</div>
					</div>
				</div>
			</div>
		</section>
		<?php
	}
	?>
</article><!-- .post-single -->

