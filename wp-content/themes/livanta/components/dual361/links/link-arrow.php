<?php

/**
 * Link layout, type arrow.
 *
 * @package    WordPress
 * @subpackage livanta
 */

$id     = 'mask-' . mt_rand( 10000, 99999 ) . '-' . mt_rand( 10000, 99999 );
$title  = $args['title'] ?? '';
$url    = $args['url'] ?? '#';
$target = $args['target'] ?? '';
?>

<a href="<?php echo esc_url( $url ) ?>" class="link-arrow"<?php echo $target ?>>
	<?php if( $title ) echo esc_html( $title ) ?>

	<svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
		<mask
			id="<?php echo $id ?>" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="25" height="24"
		>
			<rect x="0.5" width="24" height="24" fill="#D9D9D9"/>
		</mask>
		<g mask="url(#<?php echo $id ?>)">
			<path
				d="M17.1269 12.75H5V11.25H17.1269L11.4308 5.55383L12.5 4.5L20 12L12.5 19.5L11.4308 18.4461L17.1269 12.75Z"
				fill="#BF1E2E"
			/>
		</g>
	</svg>
</a>
