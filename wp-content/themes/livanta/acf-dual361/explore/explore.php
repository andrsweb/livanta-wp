<?php

/**
 * Explore - DUAL361 section layout.
 *
 * @see        Page with DUAL361 template -> Flexible Content DUAL361 -> Explore
 *
 * @package    WordPress
 * @subpackage livanta
 */

wp_enqueue_style( 'explore', THEME_URI . '/static/css/explore/explore.min.css', [], THEME_VERSION );

$title = get_sub_field( 'title' );
$links = get_sub_field( 'links' );
?>

<section class="explore">
	<div class="container">
		<div class="explore-wrapper">
			<img class="explore-bg" src="<?php echo THEME_URI ?>/static/img/dual361/exp-bg.svg" alt="">

			<?php
			if( $title ) echo '<div class="explore-info"><h2>', $title, '</h2></div>';

			if( ! empty( $links ) ){
				echo '<div class="explore-links">';

				foreach( $links as $link ){
					$button      = $link['link'] ?? [];
					$button_desc = $link['link_desc'] ?? '';
					$button_type = $link['link_type'] ?? 'blue';
					get_template_part( 'components/dual361/links/link', 'big', array_merge( liv_get_acf_link_data( $button ), [
						'leading_svg' => 1,
						'desc'        => $button_desc,
						'type'        => $button_type
					] ) );
				}

				echo '</div>';
			}
			?>
		</div>
	</div>
</section>

