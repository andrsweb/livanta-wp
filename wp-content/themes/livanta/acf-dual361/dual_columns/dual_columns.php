<?php

/**
 * Columns - DUAL361 section layout.
 *
 * @see        Page with DUAL361 template -> Flexible Content DUAL361 -> Columns
 *
 * @package    WordPress
 * @subpackage livanta
 */

wp_enqueue_style( 'dual_columns', THEME_URI . '/static/css/dual_columns/dual_columns.min.css', [], THEME_VERSION );

$left_column        = get_sub_field( 'left_column' );
$right_column       = get_sub_field( 'right_column' );
$left_column_links  = get_sub_field( 'left_column_links' );
$right_column_links = get_sub_field( 'right_column_links' );
$link               = get_sub_field( 'link' );
$link_type          = get_sub_field( 'link_type' ) ?: 'red';
?>

<section class="dual-columns">
	<div class="container">
		<div class="dual-columns-wrapper">
			<?php
			if( $left_column || $right_column ){
				echo '<div class="dual-columns-items">';

				if( $left_column ){
					echo '<div class="dual-columns-item">', $left_column;

					if( ! empty( $left_column_links ) ){
						echo '<div class="dual-columns-item-links">';

						foreach( $left_column_links as $item ){
							$col_link      = $item['link'] ?? [];
							$col_link_type = $item['type'] ?? 'red';
							get_template_part( 'components/dual361/links/link', 'arrow', array_merge( liv_get_acf_link_data( $col_link ), [
								'type' => $col_link_type
							] ) );
						}

						echo '</div>';
					}

					echo '</div>';
				}

				if( $right_column ){
					echo '<div class="dual-columns-item">', $right_column;

					if( ! empty( $right_column_links ) ){
						echo '<div class="dual-columns-item-links">';

						foreach( $right_column_links as $item ){
							$col_link      = $item['link'] ?? [];
							$col_link_type = $item['type'] ?? 'red';
							get_template_part( 'components/dual361/links/link', 'arrow', array_merge( liv_get_acf_link_data( $col_link ), [
								'type' => $col_link_type
							] ) );
						}

						echo '</div>';
					}

					echo '</div>';
				}

				echo '</div>';
			}

			if( $link )
				get_template_part( 'components/dual361/links/link', 'arrow', array_merge( liv_get_acf_link_data( $link ), [
					'type' => $link_type
				] ) );
			?>
		</div>
	</div>
</section>

