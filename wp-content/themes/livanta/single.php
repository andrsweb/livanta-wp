<?php

/**
 * Template Name: Default
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
		get_template_part( 'template-parts/single/content' );
	}
	?>
</main>

<?php
get_footer();
