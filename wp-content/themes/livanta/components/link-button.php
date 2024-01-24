<?php

/**
 * Link with custom class layout.
 *
 * @package WordPress
 * @subpackage livanta
 */

if( ! $link = $args['link'] ?? null ) return;

$class			= isset( $args['class'] ) ? " {$args['class']}" : '';
$arrow_right	= $args['arrow_right'] ?? null;
$url			= $link['url'];
$title			= $link['title'];
$target			= $link['target'] ? ' target="_blank"' : '';
?>

<a href="<?php echo esc_url( $url ) ?>" class="button<?php echo esc_attr( $class ) ?>"<?php echo $target ?>>
	<?php
	echo esc_html( $title );

	if( $arrow_right ){
		?>
		<svg width="16" height="16" viewBox="0 0 16 16" fill="none"
			 xmlns="http://www.w3.org/2000/svg">
			<path d="M12.6269 8.74995H0.5V7.25H12.6269L6.93077 1.55383L7.99997 0.5L15.5 7.99998L7.99997 15.5L6.93077 14.4461L12.6269 8.74995Z"
				  fill="white"/>
		</svg>
		<?php
	}
	?>
</a>

