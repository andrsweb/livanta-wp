<?php

/**
 * CTA - DUAL361 section layout.
 *
 * @see        Page with DUAL361 template -> Flexible Content DUAL361 -> CTA
 *
 * @package    WordPress
 * @subpackage livanta
 */

wp_enqueue_style( 'cta', THEME_URI . '/static/css/cta/cta.min.css', [], THEME_VERSION );

$type  = get_sub_field( 'type' ) ?: 'red';
$title = get_sub_field( 'title' );
$text  = get_sub_field( 'text' );
$link  = get_sub_field( 'link' );
?>

<section class="cta <?php echo esc_attr( $type ) ?>">
	<div class="container">
		<div class="cta-wrapper">
			<?php
			if( $title ) echo '<h2>', $title, '</h2>';

			if( $text || $link ){
				echo '<div class="cta-info">';

				if( $text ) echo $text;

				if( $link )
					get_template_part( 'components/dual361/links/link', 'full', array_merge( liv_get_acf_link_data( $link ), [
						'leading_svg' => 1
					] ) );

				echo '</div>';
			}
			?>

			<svg
				class="cta-bg-img" width="482" height="211" viewBox="0 0 482 211" fill="none"
				xmlns="http://www.w3.org/2000/svg"
			>
				<path
					d="M33.769 288.892L0.0996094 255.223L178.066 76.0535L274.265 172.252L399.322 48.3965H336.793V0.297363H481.091V144.595H432.992V82.0659L274.265 240.793L178.066 144.595L33.769 288.892Z"
					fill="white"
				/>
			</svg>
		</div>
	</div>
</section>

