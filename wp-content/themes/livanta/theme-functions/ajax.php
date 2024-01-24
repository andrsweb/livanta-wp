<?php

/**
 * Theme AJAX functions.
 *
 * @package WordPress
 * @subpackage livanta
 */

add_action( 'wp_head', 'liv_js_vars_for_frontend' );
/**
 * JS variables for frontend, such as AJAX URL.
 */
function liv_js_vars_for_frontend(): void
{
	$variables = ['ajaxUrl' => admin_url( 'admin-ajax.php' )];
	echo '<script type="text/javascript">window.wpData = ' . json_encode( $variables ) . ';</script>';
}

add_action( 'wp_ajax_liv_ajax_pagination', 'liv_ajax_pagination' );
add_action( 'wp_ajax_nopriv_liv_ajax_pagination', 'liv_ajax_pagination' );
/**
 * AJAX pagination.
 */
function liv_ajax_pagination(): void
{
	$page		= liv_clean( $_POST['page'] );
	$term		= liv_clean( $_POST['term'] );
	$per_page	= isset( $_POST['per-page'] ) ? liv_clean( $_POST['per-page'] ) : get_option( 'posts_per_page' );
	$offset		= $per_page * $page - $per_page;
	$args		= [
		'post_type'			=> 'post',
		'post_status'		=> 'publish',
		'offset'			=> $offset,
		'posts_per_page'	=> $per_page
	];

	if( $term )
		$args['tax_query'] = [ [
          'taxonomy'	=> 'category',
          'field'		=> 'id',
          'terms'		=> [$term]
      ] ];

	$posts_query	= new WP_Query( $args );
	$pagination		= $posts = '';

	if( $posts_query->have_posts() ){
		while( $posts_query->have_posts() ){
			$posts_query->the_post();
			$posts .= liv_load_template_part( 'components/post-card', null, ['id' => get_the_ID()] );
		}

		$pagination = liv_load_template_part( 'components/pagination', null, [
			'query'		=> $posts_query,
			'max_pages'	=> $posts_query->max_num_pages,
			'page'		=> $page,
			'per_page'	=> $per_page,
			'term'		=> $term
		] );

		wp_reset_query();
	}	else {
		$posts = '<p class="posts-not-found">'
		         . esc_html__( 'No posts were found matching your selection.', 'lightscalpel' ) .
		         '</p>';
	}

	wp_send_json_success( ['posts' => $posts, 'pagination' => $pagination] );
}

