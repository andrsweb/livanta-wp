<?php

/**
 * Payer section item layout.
 *
 * @package WordPress
 * @subpackage livanta
 */

if( ! $item = $args['item'] ?? null ) return;

$icon	= $item['icon'];
$desc	= $item['desc'];

if( ! $icon && ! $desc ) return;
?>

<div class="payer__item">
	<div class="payer__item_inner">
		<?php
		if( $icon )
			echo '<div class="item__image">', wp_get_attachment_image( $icon, 'icon', true, ['loading' => 'lazy'] ), '</div>';

		if( $desc ) echo '<p class="payer__item_text">', $desc, '</p>';
		?>
	</div>
</div>

