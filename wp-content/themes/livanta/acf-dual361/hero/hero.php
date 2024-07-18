<?php

/**
 * Hero - DUAL361 section layout.
 *
 * @see        Page with DUAL361 template -> Flexible Content DUAL361 -> Hero
 *
 * @package    WordPress
 * @subpackage livanta
 */

wp_enqueue_style( 'hero', THEME_URI . '/static/css/hero/hero.min.css', [], THEME_VERSION );
wp_enqueue_script( 'hero', THEME_URI . '/static/js/hero/hero.min.js', ['jquery'], THEME_VERSION, true );

$type        = get_sub_field( 'type' );
$bg_img      = get_sub_field( 'bg_img' ) ?: null;
$bg_color    = get_sub_field( 'bg_color' ) ?: '';
$style       = $type === 'color' && $bg_color ? ' style="background-color:' . $bg_color . '"' : '';
$img         = get_sub_field( 'img' ) ?: null;
$title       = get_sub_field( 'title' );
$text        = get_sub_field( 'text' );
$button      = get_sub_field( 'button' );
$button_desc = get_sub_field( 'button_desc' );
$button_type = get_sub_field( 'button_type' ) ?: 'blue';
?>

<section class="hero-dual <?php echo esc_attr( $type ) ?>"<?php echo $style ?>>
	<div class="container">
		<div class="hero-dual-wrapper">
			<div class="hero-dual-info">
				<?php
				if( $type === 'bg' && $bg_img ){
					?>
					<div class="hero-dual-info-img">
						<?php echo wp_get_attachment_image( $bg_img, 'large', false, ['class' => 'hero-dual-bg'] ) ?>
					</div>
					<?php
				}
				?>

				<!-- <div class="breadcrumbs">
					<div class="breadcrumb current">
						Home
					</div>
					<div class="breadcrumb">
						Together
					</div>
				</div> -->

				<?php
				if( $title ) echo '<h1>', $title, '</h1>';

				if( $text ) echo '<div class="hero-dual-text">', $text, '</div>';

				if( $button ){
					get_template_part( 'components/dual361/links/link', 'big', array_merge( liv_get_acf_link_data( $button ), [
						'leading_svg' => 1,
						'desc'        => $button_desc,
						'type'        => $button_type
					] ) );
				}
				?>
			</div><!-- .hero-dual-info -->

			<?php
			if( $img ){
				?>
				<div class="hero-dual-img">
					<?php echo wp_get_attachment_image( $img, 'large', false, ['class' => 'hero-dual-bg'] ) ?>
				</div>
				<?php
			}
			?>
		</div><!-- .hero-dual-wrapper -->
	</div><!-- .container -->
</section>

