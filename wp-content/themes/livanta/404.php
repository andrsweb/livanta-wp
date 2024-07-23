<?php

/**
 * 404 page default template.
 *
 * @see Options -> 404 Page.
 *
 * @package WordPress
 * @subpackage livanta
 */

get_header();

wp_enqueue_style( 'hero', THEME_URI . '/static/css/hero/hero.min.css', [], THEME_VERSION );

$title_404	= get_field( 'title_404', 'option' );
$text_404	= get_field( 'desc_404', 'option' );
$img_404	= get_field( 'img_404', 'option' );
?>

<main class="main">
	<section class="hero-dual member">
		<div class="container">
			<div class="hero-dual-wrapper">
				<div class="hero-dual-info">
					<?php
					if( $title_404 ) echo '<h1>', $title_404, '</h1>';

					if( $text_404 ) echo '<div class="hero-dual-text">', $text_404, '</div>';
					?>
				</div>

				<?php
				if( $img_404 ){
					echo '<div class="hero-dual-img">';
					get_template_part( 'components/image', null, [
						'data' => crit_prepare_image_data( $img_404, 'full', [
							'class' => 'hero-dual-bg'
						] )
					] );
					echo '</div>';
				}
				?>
			</div>
		</div>
	</section>
</main>

<?php
get_footer();

