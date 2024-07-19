<?php

/**
 * About - DUAL361 section layout.
 *
 * @see        Page with DUAL361 template -> Flexible Content DUAL361 -> About
 *
 * @package    WordPress
 * @subpackage livanta
 */

wp_enqueue_style( 'dual_about', THEME_URI . '/static/css/dual_about/dual_about.min.css', [], THEME_VERSION );

$title           = get_sub_field( 'title' );
$text            = get_sub_field( 'text' );
$left_col_title  = get_sub_field( 'left_col_title' );
$left_col_text   = get_sub_field( 'left_col_text' );
$right_col_title = get_sub_field( 'right_col_title' );
$right_col_text  = get_sub_field( 'right_col_text' );
$bottom_text     = get_sub_field( 'bottom_text' );
$link            = get_sub_field( 'link' );
?>

<section class="dual-about">
	<div class="container">
		<div class="dual-about-wrapper">
			<div class="dual-about-bg">
				<picture>
					<source srcset="<?php echo THEME_URI; ?>/static/img/dual361/dual-about-bg-mob.svg" media="(max-width: 768px)" type="image/svg+xml">
					<source srcset="<?php echo THEME_URI; ?>/static/img/dual361/dual-about-bg.svg" media="(min-width: 769px)" type="image/svg+xml">
					<img src="<?php echo THEME_URI; ?>/static/img/dual361/dual-about-bg.svg" alt="Background Image">
				</picture>
			</div>

			<div class="dual-about-info">
				<?php
				if( $title ) echo '<h2>', $title, '</h2>';

				if( $text ) echo '<div class="dual-about-info-text">', $text, '</div>';

				if( $left_col_title || $left_col_text || $right_col_title || $right_col_text ){
					?>
					<div class="dual-about-info-items">
						<div class="dual-about-info-item">
							<?php
							if( $left_col_title ) echo '<div class="dual-info-item-title">', $left_col_title, '</div>';

							if( $left_col_text ) echo '<p>', $left_col_text, '</p>';
							?>
						</div>
						<span class="dual-info-item-separator"></span>
						<div class="dual-about-info-item">
							<?php
							if( $right_col_title ) echo '<div class="dual-info-item-title">', $right_col_title, '</div>';

							if( $right_col_text ) echo '<p>', $right_col_text, '</p>';
							?>
						</div>
					</div>
					<?php
				}

				if( $bottom_text ) echo '<p>', $bottom_text, '</p>';

				if( $link )
					get_template_part( 'components/dual361/links/link', 'arrow', liv_get_acf_link_data( $link ) );
				?>
			</div><!-- .dual-about-info -->
		</div><!-- .dual-about-wrapper -->
	</div><!-- .container -->
</section>

