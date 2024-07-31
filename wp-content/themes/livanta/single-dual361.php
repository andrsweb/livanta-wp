<?php

/**
 * Template Name: DUAL361 Article
 * Template Post Type: post
 *
 * @package WordPress
 * @subpackage livanta
 */

get_header();
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
get_footer();
