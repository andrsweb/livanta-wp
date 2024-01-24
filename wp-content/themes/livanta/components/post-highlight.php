<?php

/**
 * Highlighted Post layout.
 *
 * @package WordPress
 * @subpackage livanta
 */

if( ! $post_id = $args['id'] ?? null ) return;

$class = isset( $args['class'] ) ? " {$args['class']}" : '';
?>

<a href="<?php echo get_the_permalink( $post_id ) ?>" class="<?php echo esc_attr( $class ) ?>">
	<?php
	if( has_post_thumbnail( $post_id ) )
		echo '<div class="highlights__img">',
			get_the_post_thumbnail( $post_id, 'banner-vertical-4' ),
		'</div>';
	?>

	<div class="highlight__headings">
		<h2 class="highlight__title">
			<span class="highlight__article">
				<?php echo liv_get_categories_names( $post_id ) ?>
			</span> | <span class="highlight__date">
				<?php echo get_the_date( 'd F, Y', $post_id ) ?>
			</span>
		</h2>
		<div class="highlight__name"><?php echo get_the_title( $post_id ) ?></div>
	</div>
</a>

