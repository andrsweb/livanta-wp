<?php

/**
 * DUAL361 Article CPT single post template.
 *
 * @package    WordPress
 * @subpackage livanta
 */

get_template_part( 'template-parts/headers/dual361' );
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
