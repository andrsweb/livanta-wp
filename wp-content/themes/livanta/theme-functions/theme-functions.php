<?php

/**
 * Theme custom functions.
 * Please place all your custom functions declarations inside this file.
 *
 * @package WordPress
 * @subpackage livanta
 */

add_filter( 'wp_check_filetype_and_ext', function( $data, $file, $filename, $mimes ){
	$filetype = wp_check_filetype( $filename, $mimes );
	return [
		'ext'             => $filetype['ext'],
		'type'            => $filetype['type'],
		'proper_filename' => $data['proper_filename']
	];

}, 10, 4 );

add_filter( 'upload_mimes', 'liv_cc_mime_types' );
function liv_cc_mime_types( $mimes ): array
{
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}

add_action( 'admin_head', 'liv_fix_svg' );
function liv_fix_svg(): void
{
	echo '<style>
		.attachment-266x266, .thumbnail img {
		     width: 100% !important;
		     height: auto !important
		}
    </style>';
}

/**
 * Returns clean phone for the URL.
 *
 * @param string $phone
 * @return string
 */
function liv_clean_phone( string $phone ): string
{
	if( ! $phone ) return '';

	return str_replace( [' ', '-', '(', ')'], '', $phone );
}

/**
 * Returns post's categories.
 *
 * @param int $post_id
 * @return string
 */
function liv_get_categories_names( int $post_id ): string
{
	$cats = wp_get_post_categories( $post_id, ['fields' => 'names'] );

	if( empty( $cats ) ) return '';

	return implode( ', ', $cats );
}

/**
 * Returns terms string.
 *
 * @param string $tax
 * @param array  $args
 * @param int    $active_term_id
 * @return string
 */
function liv_get_categories_nav( string $tax = 'category', array $args = [], int $active_term_id = 0 ): string
{
	$default_args = [
		'taxonomy'      => $tax,
		'hide_empty'    => 1
	];

	if( ! empty( $args ) ) $default_args = array_merge( $default_args, $args );

	$categories = get_categories( $default_args );

	if( ! $categories ) return '';

	$res = '<a
		href="' . get_the_permalink( get_option( 'page_for_posts', true ) ) . '"
		class="filter news-button' . ( ! $active_term_id ? ' active' : '' ) . '"
	>' . __( 'All', 'livanta' ) . '</a>';

	foreach( $categories as $cat ){
		$term_id    = $cat->term_id;
		$class      = $active_term_id === $term_id ? ' active' : '';
		$res        .= '<span>|</span><a
			class="filter news-button' . esc_attr( $class ) . '"
			href="' . get_term_link( $term_id, $tax ) . '"
		>' . esc_html( $cat->name ) . '</a>';
	}

	return $res;
}

/**
 * Output formatted data for debugging & testing.
 *
 * @param $data
 * @return void
 */
function liv_prettify_data( $data ): void
{
	echo '<pre>' , print_r( $data, 1 ), '</pre>';
}

/**
 * Clean incoming value from trash.
 *
 * @param	mixed	$value	Some value to clean.
 * @return	string
 */
function liv_clean( $value ): string
{
	$value	= wp_unslash( $value );
	$value	= trim( $value );
	$value	= stripslashes( $value );
	$value	= strip_tags( $value );

	return htmlspecialchars( $value );
}

/**
 * Helps to get template part into a variable.
 *
 * @param string		$template_name	Template file name.
 * @param string|null	$part_name		Template part file name.
 * @param array			$args			Arguments to pass.
 * @return string						HTML content from template.
 */
function liv_load_template_part( string $template_name, string $part_name = null, array $args = [] ): string
{
	ob_start();
	get_template_part( $template_name, $part_name, $args );
	$tp = ob_get_contents();
	ob_end_clean();

	return $tp;
}

/**
 * Remove auto paragraph wrap in Contact Form 7.
 */
add_filter( 'wpcf7_autop_or_not', '__return_false' );



