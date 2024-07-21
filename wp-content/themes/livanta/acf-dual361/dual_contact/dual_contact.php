<?php

/**
 * Contact - DUAL361 section layout.
 *
 * @see        Page with DUAL361 template -> Flexible Content DUAL361 -> Contact
 *
 * @package    WordPress
 * @subpackage livanta
 */

wp_enqueue_style( 'dual_contact', THEME_URI . '/static/css/dual_contact/dual_contact.min.css', [], THEME_VERSION );

$text = get_sub_field( 'text' );
$form = get_sub_field( 'form' );
?>

<section class="dual-contact">
	<div class="container">
		<div class="dual-contact-wrapper">
			<?php
			if( $text ) echo '<div class="dual-contact-info"><div class="dual-contact-text">', $text, '</div></div>';

			if( $form ) echo '<div class="dual-contact-form">', do_shortcode( $form ), '</div>';
			?>
		</div>
	</div>
</section>

