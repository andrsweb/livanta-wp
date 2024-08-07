<?php

/**
 * Template name: DUAL361 Blog
 *
 * @package    WordPress
 * @subpackage livanta
 */

get_header();

wp_enqueue_style( 'articles', THEME_URI . '/static/css/articles.min.css', [], THEME_VERSION );

$per_page = 9;
$posts    = new WP_Query( [
	'post_type'      => 'dual361-article',
	'posts_per_page' => $per_page,
	'post_status'    => 'publish'
] );
?>

	<main class="main">
		<section class="blog-dual">
			<div class="container">
				<?php
				if ( function_exists( 'bcn_display' ) ) {
					echo '<div class="breadcrumbs">';
					bcn_display( $return = false, $linked = true, $reverse = false, $force = false );
					echo '</div>';
				}
				?>

				<h1 class="blog-dual-title"><?php the_title() ?></h1>

				<div class="blog-dual-cards">
					<?php
					if ( $posts->have_posts() ) {
						while( $posts->have_posts() ){
							$posts->the_post();
							get_template_part( 'components/post-card', null, [ 'id' => get_the_ID() ] );
						}
					}
					?>
				</div>

				<?php
				if ( $posts->have_posts() ) {
					get_template_part( 'components/pagination', null, [
						'query'     => $posts,
						'post_type' => 'dual361-article',
						'per_page'  => $per_page
					] );
				}
				?>
			</div>
		</section>
	</main>

<?php
get_footer();

