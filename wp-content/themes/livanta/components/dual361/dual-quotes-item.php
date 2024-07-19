<?php

/**
 * Dual Quotes single item layout.
 *
 * @see        Page with DUAL361 template -> Flexible Content DUAL361 -> Quotes
 *
 * @package    WordPress
 * @subpackage livanta
 */

if( ! $item = $args['item'] ?? null ) return;

$image    = $item['image'] ?? null;
$text     = $item['text'] ?? '';
$name     = $item['name'] ?? '';
$position = $item['position'] ?? '';
?>

<div class="dual-quotes-inner">
	<?php
	if( $image ) echo '<div class="dual-quotes-img">', wp_get_attachment_image( $image, 'large' ), '</div>';
	?>

	<div class="dual-quotes-info">
		<img src="<?php echo THEME_URI ?> /static/img/dual361/quote-ico.svg" alt="">

		<?php
		if( $text ) echo '<p>', $text, '</p>';

		if( $name || $position ){
			echo '<div class="dual-quotes-author">';

			if( $name ) echo '<div class="dual-quotes-name">', $name, '</div>';

			if( $position ) echo '<div class="dual-quotes-position">', $position, '</div>';

			echo '</div>';
		}
		?>
	</div>
</div>

