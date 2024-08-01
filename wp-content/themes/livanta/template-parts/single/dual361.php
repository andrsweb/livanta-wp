<?php

/**
 * DUAL361 single post content.
 *
 * @package WordPress
 * @subpackage livanta
 */

// If this is NOT single post page - do nothing.
if( ! is_singular( 'post' ) ) return;

$post_id = get_the_ID();
?>

<article class="post-single-dual post-<?php echo esc_attr( $post_id ) ?>">
	<section class="post-single-dual-hero">
		<div class="container">
			<div class="post-single-dual-wrapper">
				<?php
				if( function_exists( 'bcn_display' ) ){
					echo '<div class="breadcrumbs">';
					bcn_display( $return = false, $linked = true, $reverse = false, $force = false );
					echo '</div>';
				}
				?>

				<h1 class="h1"><?php the_title() ?></h1>

				<div class="post-single-dual-info">
					<div class="publish">
						<div class="publish__title"><?php _e( 'Published on:', 'livanta' ) ?></div>
						<div class="publish__date"><?php echo get_the_date( 'd F, Y', $post_id ) ?></div>
					</div>
					<span>|</span>
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

				<?php
				if( has_post_thumbnail() ){
					?>
					<div class="post-single-dual-thumb">
						<?php echo get_the_post_thumbnail( $post_id, 'full' ) ?>
					</div>
					<?php
				}
				?>
			</div>

		</div>
	</section>

	<section class="post-single-dual-content">
		<div class="container">
			<div class="post-single-dual-wrapper">
				<div class="post-single-dual-text">
					<?php the_content() ?>
				</div>
			</div>
		</div>
	</section>
</article><!-- .post-single-dual -->

