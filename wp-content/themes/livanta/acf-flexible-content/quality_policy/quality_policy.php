<?php

/**
 * Quality Policy - ACF Flexible Content section layout.
 *
 * @see Page with ACF Flexible Content template -> Flexible Content -> Quality Policy
 *
 * @package WordPress
 * @subpackage livanta
 */

$title	= get_sub_field( 'title' );
$desc	= get_sub_field( 'description' );
$text	= get_sub_field( 'text' );

if( ! $title && ! $desc && ! $text ) return;
?>

<section class="quality-policy">
	<div class="container">
		<div class="quality-policy__wrapper">
			<?php
			if( $title || $desc ){
				echo '<div class="quality-policy__info">';

				if( $title ) echo '<div class="quality-policy__title">', esc_html( $title ), '</div>';

				if( $desc ) echo '<div class="section__text">', esc_html( $desc ), '</div>';

				echo '</div>';
			}

			if( $text ) echo $text;
			?>
		</div>
	</div>
</section>

