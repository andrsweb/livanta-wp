<?php

/**
 * Blog Articles single card layout.
 *
 * @package WordPress
 * @subpackage livanta
 */

if( ! $post_id = $args['id'] ?? null ) return;

$permalink = get_the_permalink( $post_id );
?>

<div class="blog-articles-card">
	<div class="blog-articles-inner">
		<?php
		if( has_post_thumbnail( $post_id ) )
			echo '<a href="', $permalink, '" class="blog-articles-img">', get_the_post_thumbnail( $post_id, 'medium' ), '</a>';
		?>

		<div class="blog-articles-info">
			<span class="blog-articles-date"><?php echo get_the_date( 'd F, Y', $post_id ) ?></span>
			<p><?php echo get_the_title( $post_id ) ?></p>
			<div class="link-wrapper">
				<a href="<?php echo $permalink ?>" class="link-arrow">
					<?php _e( 'Read more', 'livanta' ) ?>
					<svg
						width="25" height="24" viewBox="0 0 25 24" fill="none"
						xmlns="http://www.w3.org/2000/svg"
					>
						<mask
							id="b1" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0"
							y="0" width="25" height="24"
						>
							<rect x="0.5" width="24" height="24" fill="#D9D9D9"/>
						</mask>
						<g mask="url(#b1">
							<path
								d="M17.1269 12.75H5V11.25H17.1269L11.4308 5.55383L12.5 4.5L20 12L12.5 19.5L11.4308 18.4461L17.1269 12.75Z"
								fill="#BF1E2E"
							/>
						</g>
					</svg>
				</a>
			</div>
		</div>
	</div>
</div>

