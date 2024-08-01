<?php

/**
 * DUAL361 Article CPT single post template.
 *
 * @package    WordPress
 * @subpackage livanta
 */

get_template_part( 'template-parts/headers/dual361' );
wp_enqueue_style( 'dual_article', THEME_URI . '/static/css/dual361-single.min.css', [], THEME_VERSION );
?>

	<main class="main">
		<?php
		while( have_posts() ){
			the_post();
			get_template_part( 'template-parts/single/dual361-article' );
		}
		?>
	</main>

<?php
get_template_part( 'template-parts/footers/dual361' );
