<?php

/**
 * Dropdown item layout.
 *
 * @package WordPress
 * @subpackage livanta
 */

if( ! $item = $args['item'] ?? null ) return;

$key		= $args['key'] ?? 0;
$id			= $item['id_attribute'] ?? '';
$item_title	= $item['title'];
$col_left	= $item['col_left'];
$col_right	= $item['col_right'];

if( ! $item_title || ( ! $col_left && ! $col_right ) ) return;
?>

<div class="dropdown servicesDropdown<?php echo esc_attr( $key ) ?>" id="<?php echo esc_attr( $id ) ?>">
	<div class="dropdown-title">
		<div class="dropdown-start">
			<div class="dropdown-start-text"><?php echo esc_html( $item_title ) ?></div>
			<span></span>
		</div>
	</div>
	<div class="dropdown-open">
		<div class="dropdown-inner">
			<div class="dropdown__inner_items">
				<?php
				if( $col_left ){
					?>
					<div class="dropdown__inner_left">
						<p class="dropdown__inner_text">
							<?php echo $col_left ?>
						</p>
					</div>
					<?php
				}

				if( $col_right ){
					?>
					<div class="dropdown__inner_right">
						<p class="dropdown__inner_text right_text">
							<?php echo $col_right ?>
						</p>
					</div>
					<?php
				}
				?>
			</div>
		</div>
	</div>
</div>

