<?php

remove_filter('nav_menu_description', 'strip_tags');
add_filter( 'wp_setup_nav_menu_item', 'liv_wp_setup_nav_menu_item' );
function liv_wp_setup_nav_menu_item( $menu_item ){
	$menu_item->description = apply_filters( 'nav_menu_description',  $menu_item->post_content );
	return $menu_item;
}

/**
 * Custom submenu structure.
 */
class Liv_Walker_Nav_Menu extends Walker_Nav_Menu
{
	private string $description = '';

	function start_lvl( &$output, $depth = 0, $args = null ){
		$indent = $depth ? str_repeat( "\t", $depth ) : '';
		$output .= "\n" . $indent . '<div class="sub-menu-wrapper"><ul class="sub-menu">' . "\n";
	}

	function end_lvl( &$output, $depth = 0, $args = null ){
		if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
			$t = '';
			$n = '';
		} else {
			$t = "\t";
			$n = "\n";
		}
		$indent  = str_repeat( $t, $depth );
		$output .= "$indent</ul>{$n}{$this->description}</div>";
		$this->description = '';
	}

	function start_el( &$output, $data_object, $depth = 0, $args = null, $id = 0 ){
		$indent            = $depth ? str_repeat( "\t", $depth ) : '';
		$value             = '';
		$classes           = empty( $data_object->classes ) ? [] : ( array ) $data_object->classes;
		$classes[]         = "menu-item-{$data_object->ID}";
		$class_names       = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $data_object, $args ) );
		$class_names       = ' class="' . esc_attr( $class_names ) . '"';
		$this->description = empty( $this->description) && ! empty( $data_object->post_content )
			? '<div class="sub-menu-text">' . $data_object->post_content . '</div>' : $this->description;

		$id			= apply_filters( 'nav_menu_item_id', "menu-item-{$data_object->ID}", $data_object, $args );
		$id			= strlen( $id ) ? ' id="' . esc_attr( $id ) . '"' : '';
		$output		.= $indent . '<li' . $id . $value . $class_names .'>';
		$attributes	= ! empty( $data_object->attr_title ) ? ' title="' . esc_attr( $data_object->attr_title ) . '"' : '';
		$attributes	.= ! empty( $data_object->attr_data_anchor ) ? ' data-anchor="' . esc_attr( $data_object->attr_data_anchor ) . '"' : '';
		$attributes	.= ! empty( $data_object->target ) ? ' target="' . esc_attr( $data_object->target ) . '"' : '';
		$attributes	.= ! empty( $data_object->xfn ) ? ' rel="' . esc_attr( $data_object->xfn ) . '"' : '';
		$attributes	.= ! empty( $data_object->url ) ? ' href="' . esc_attr( $data_object->url ) . '"' : '';

		$item_output = $args->before . '<a' . $attributes . '>'
		               . $args->link_before . apply_filters( 'the_title', $data_object->title, $data_object->ID ) . $args->link_after
		               . '</a>' . $args->after;

		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $data_object, $depth, $args );
	}

	function end_el( &$output, $data_object, $depth = 0, $args = null, $id = 0 ){
		$output .= '</li>';
	}
}

