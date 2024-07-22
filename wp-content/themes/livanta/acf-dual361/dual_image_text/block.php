<?php

/**
 * Image Text single block layout.
 *
 * @see        Page with DUAL361 template -> Flexible Content DUAL361 -> Image Text
 *
 * @package    WordPress
 * @subpackage livanta
 */

if( ! $block = $args['block'] ?? null ) return;

$color = $args['color'] ?? 'red';
$type  = $block['type'] ?? 'default';
$image = $block['image'] ?? null;
$title = $block['title'] ?? '';
$text  = $block['text'] ?? '';
$links = $block['links'] ?? null;
?>

<div class="dual-image-text-item <?php echo esc_attr( $type ) ?>">
	<div class="dual-image-text-wrapper">
		<div class="dual-image-text-inner">
			<?php
			if( $title ) echo '<h2>', $title, '</h2>';

			if( $text ) echo '<div class="dual-image-text-paragraphs">', $text, '</div>';

			if( ! empty( $links ) ){
				echo '<div class="dual-image-text-links">';

				foreach( $links as $link )
					get_template_part( 'components/dual361/links/link', 'arrow', array_merge( liv_get_acf_link_data( $link['link'] ), [
						'type' => $color
					] ) );

				echo '</div>';
			}
			?>
		</div>

		<?php
		if( $image )
			echo '<div class="dual-image-text-img">',
			wp_get_attachment_image( $image, 'large', false, ['loading' => 'lazy'] ),
			'</div>';
		?>
	</div>
</div>

