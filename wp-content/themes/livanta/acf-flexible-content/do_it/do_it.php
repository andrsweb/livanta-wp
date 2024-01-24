<?php

/**
 * Do It - ACF Flexible Content section layout.
 *
 * @see Page with ACF Flexible Content template -> Flexible Content -> Do It
 *
 * @package WordPress
 * @subpackage livanta
 */

$sup_title	= get_sub_field( 'sup_title' );
$title		= get_sub_field( 'title' );
$list		= get_sub_field( 'list' );
?>

<section class="do-it" id="do-it">
	<div class="container">
		<?php
		if( $sup_title || $title ){
			echo '<div class="h2__wrapper">';

			if( $sup_title ) echo '<div class="subtitle">', esc_html( $sup_title ), '</div>';

			if( $title ) echo '<h2 class="h2">', esc_html( $title ), '</h2>';

			echo '</div>';
		}

		if( ! empty( $list ) ){
			echo '<div class="do-it__items">';

			foreach ( $list as $item )
				get_template_part( 'components/payer-item', null, ['item' => $item] );

			echo '</div>';
		}
		?>
	</div>
</section>

