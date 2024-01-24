<?php

/**
 * Talk - ACF Flexible Content section layout.
 *
 * @see Page with ACF Flexible Content template -> Flexible Content -> Talk
 *
 * @package WordPress
 * @subpackage livanta
 */

$bg		= get_sub_field( 'bg' );
$title	= get_sub_field( 'title' );
$link	= get_sub_field( 'link' );
?>

<section class="talk">
	<?php if( $bg ) echo wp_get_attachment_image( $bg, 'full-hd', false, ['loading' => 'lazy', 'class' => 'talk__img'] ) ?>

	<div class="container">
		<div class="talk__wrapper">
			<?php
			if( $title ) echo '<h2 class="h2">', esc_html( $title ), '</h2>';

			get_template_part( 'components/link-button', null, ['link' => $link, 'arrow_right' => 1] );
			?>
		</div>
	</div>
</section>

