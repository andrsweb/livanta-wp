<?php

/**
 * Template Name: DUAL361 Article
 * Template Post Type: post
 *
 * @package WordPress
 * @subpackage livanta
 */

get_template_part( 'template-parts/headers/dual361' );

wp_enqueue_style( 'dual361-single', THEME_URI . '../static/css/dual361-single.min.css', [], THEME_VERSION );
?>

	<main class="main">
		<?php
		while( have_posts() ){
			the_post();
			get_template_part( 'template-parts/single/dual361' );
		}
		?>
	</main>

<?php
get_template_part( 'template-parts/footers/dual361' );
