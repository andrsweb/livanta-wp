<?php

/**
 * Offer - ACF Flexible Content section layout.
 *
 * @see Page with ACF Flexible Content template -> Flexible Content -> Offer
 *
 * @package WordPress
 * @subpackage livanta
 */

$title = get_sub_field( 'title' );
?>

<section class="offer" id="scroll">
	<div class="container">
		<div class="offer__wrapper">
			<?php if( $title ) echo '<div class="offer__title">', esc_html( $title ), '</div>' ?>
		</div>
	</div>
</section>

