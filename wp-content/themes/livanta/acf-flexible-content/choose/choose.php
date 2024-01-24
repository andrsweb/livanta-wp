<?php

/**
 * Choose - ACF Flexible Content section layout.
 *
 * @see Page with ACF Flexible Content template -> Flexible Content -> Choose
 *
 * @package WordPress
 * @subpackage livanta
 */

$sup_title	= get_sub_field( 'sup_title' );
$title		= get_sub_field( 'title' );
$text		= get_sub_field( 'text' );
$image		= get_sub_field( 'image' );
$list		= get_sub_field( 'list' );
?>

<section class="choose" id="choose">
	<div class="container">
		<div class="choose__wrapper">
			<div class="choose__heading">
				<?php
				if( $sup_title || $title ){
					echo '<div class="h2__wrapper">';

					if( $sup_title ) echo '<div class="subtitle">', esc_html( $sup_title ), '</div>';

					if( $title ) echo '<h2 class="h2">', esc_html( $title ), '</h2>';

					echo '</div>';
				}

				if( $text ) echo $text;
				?>
			</div>

			<?php
			if( $image )
				echo '<div class="choose__img">',
					wp_get_attachment_image( $image, 'banner-vertical-4', false, ['loading' => 'lazy'] ),
				'</div>';
			?>
		</div>
	</div>
</section>

<?php if( empty( $list ) ) return ?>

<section class="choose__down">
	<div class="container">
		<div class="box-shadow-wrapper choose__dropdowns">
			<?php
			foreach( $list as $key => $item ){
				$class				= $key === 0 ? ' opened' : '';
				$item_title			= $item['title'];
				$item_inner_title	= $item['inner_title'];
				$item_icon			= $item['icon'];
				$content			= $item['content'];

				if( ! $item_title || ( ! $item_inner_title && ! $item_icon && ! $item_text ) ) continue;
				?>
				<div class="dropdown about-dropdown<?php echo esc_attr( $class ) ?>">
					<div class="dropdown-title about-dropdown-title">
						<h3 class="dropdown-start about-dropdown-start">
							<?php echo esc_html( $item_title ) ?><span></span>
						</h3>
					</div>
					<div class="dropdown-open about-dropdown-open">
						<div class="dropdown-inner about-dropdown-inner">
							<div class="dropdown__inner_items">
								<div class="dropdown__inner_left">
									<?php
									if( $item_icon )
										echo '<div class="dropdown__inner_img">',
											wp_get_attachment_image( $item_icon, 'dropdown-icon', true, ['loading' => 'lazy'] ),
										'</div>';

									if( $item_inner_title ) echo '<h3 class="h3">', esc_html( $item_inner_title ), '</h3>';
									?>
								</div>

								<?php
								if( ! empty( $content ) ){
									echo '<div class="dropdown__inner_right">';

									foreach( $content as $block ){
										$block_title	= $block['title'];
										$block_text		= $block['text'];

										if( ! $block_title && ! $block_text ) continue;

										echo '<div class="dropdown__inner_item">';

										if( $block_title ) echo '<h3 class="h5">', esc_html( $block_title ), '</h3>';

										if( $block_text ) echo '<p class="dropdown__inner_text">', esc_html( $block_text ), '</p>';

										echo '</div>';
									}

									echo '</div>';
								}
								?>
							</div>
						</div>
					</div>
				</div>
				<?php
			}
			?>
		</div>
	</div>
</section>

