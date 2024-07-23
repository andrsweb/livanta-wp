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

wp_enqueue_style( 'hero', THEME_URI . '/static/css/404/error_page.min.css', [], THEME_VERSION );

$title_404	= get_field( 'title_404', 'option' );
$text_404	= get_field( 'desc_404', 'option' );
$img_404	= get_field( 'img_404', 'option' );
?>

<main class="main">
	<section class="page-404">
		<div class="container">
			<div class="page-404-wrapper">
				<div class="page-404-info">
				<?php
					if( $title_404 ) echo '<h1>', $title_404, '</h1>';

					if( $text_404 ) echo '<div class="page-404-text">', $text_404, '</div>';
				?>
				</div>
				<?php
				if( $img_404 ){
					echo '<div class="page-404-img">';
					get_template_part( 'components/image', null, [
						'data' => crit_prepare_image_data( $img_404, 'full', [
							'class' => '404-img'
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

