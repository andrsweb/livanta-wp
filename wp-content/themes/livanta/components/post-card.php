<?php

/**
 * Post card layout.
 *
 * @package WordPress
 * @subpackage livanta
 */

if( ! $post_id = $args['id'] ?? null ) return;

$permalink = get_the_permalink( $post_id );
?>

<div class="card">
	<div class="card__inner">
		<?php
		if( has_post_thumbnail( $post_id ) )
			echo '<a href="', $permalink, '" class="card__img">', get_the_post_thumbnail( $post_id, 'logo-footer' ), '</a>';
		?>

		<div class="card__info">
			<span class="card__type"><?php echo liv_get_categories_names( $post_id ) ?> </span><span class="card__separator">|</span><span class="card__date">
				<?php echo get_the_date( 'd F, Y', $post_id ) ?>
			</span>
		</div>

		<a href="<?php echo $permalink ?>" class="card__text">
			<?php echo get_the_title( $post_id ) ?>
		</a>

		<div class="card__link_wrapper">
			<a href="<?php echo $permalink ?>" class="card__link">
				<?php _e( 'Read more', 'livanta' ) ?>
				<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M12.6269 8.74995H0.5V7.25H12.6269L6.93077 1.55383L7.99997 0.5L15.5 7.99998L7.99997 15.5L6.93077 14.4461L12.6269 8.74995Z" fill="#BF1E2E"/>
				</svg>
			</a>
		</div>
	</div>
</div>

