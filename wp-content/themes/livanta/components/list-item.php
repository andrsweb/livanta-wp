<?php

/**
 * List item layout.
 *
 * @package WordPress
 * @subpackage livanta
 */

if( ! $item = $args['item'] ?? null ) return;

$icon	= $item['icon'];
$desc	= $item['desc'];

if( ! $icon && ! $desc ) return;
?>

<li class="list__item">
	<?php
	if( $icon )
		echo '<span class="item__image">', wp_get_attachment_image( $icon, 'icon', false, ['loading' => 'lazy'] ), '</span>';

	if( $desc ) echo '<p class="list__item_text">', esc_html( $desc ), '</p>';
	?>
</li>

