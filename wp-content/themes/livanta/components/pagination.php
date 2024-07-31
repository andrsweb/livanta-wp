<?php

/**
 * Custom pagination template.
 *
 * @package    WordPress
 * @subpackage livanta
 */

if ( ! $posts_query = $args['query'] ?? null ) {
	global $wp_query;
	$posts_query = $wp_query;
}

$query_max_num_pages = $args['max_pages'] ?? $posts_query->max_num_pages;
$current_page        = $args['page'] ?? get_query_var( 'paged' );
$current_page        = $current_page ?: 1;
$term                = isset( $args['term'] ) ? ' data-term="' . esc_attr( $args['term'] ) . '"' : '';
$per_page            = $args['per_page'] ?? get_option( 'posts_per_page' );
$per_page            = ' data-per-page="' . $per_page . '"';

if ( ! $query_max_num_pages ) {
	return;
}
?>

<div class="pagination-wrapper"<?php echo $term, $per_page ?>>
	<nav class="navigation pagination" role="navigation">
		<?php
		echo paginate_links( [
			'base'               => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
			'total'              => $query_max_num_pages,
			'current'            => $current_page,
			'show_all'           => false,
			'end_size'           => 2,
			'mid_size'           => 2,
			'prev_next'          => true,
			'prev_text'          => '<img src="' .
			                        THEME_URI .
			                        '/static/img/news/prev.svg" width="30" height="30" alt="arrow prev" />',
			'next_text'          => '<img src="' .
			                        THEME_URI .
			                        '/static/img/news/next.svg" width="30" height="30" alt="arrow next" />',
			'add_args'           => false,
			'add_fragment'       => '',
			'screen_reader_text' => ' '
		] );
		?>
	</nav>
</div>

