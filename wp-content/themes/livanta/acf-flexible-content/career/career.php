<?php

/**
 * Career - ACF Flexible Content section layout.
 *
 * @see Page with ACF Flexible Content template -> Flexible Content -> Career
 *
 * @package WordPress
 * @subpackage livanta
 */

$bg_image	= get_sub_field( 'bg_image' );
$title		= get_sub_field( 'title' );
$cta_title	= get_sub_field( 'cta_title' );
$cta_text	= get_sub_field( 'cta_text' );
$cta_link	= get_sub_field( 'cta_link' );
$desc		= get_sub_field( 'desc' );
$note		= get_sub_field( 'note' );
?>

<section class="career">
	<div class="container">
		<?php
		if( $bg_image )
			echo '<div class="career__img">',
				wp_get_attachment_image( $bg_image, 'full-hd', false, ['class' => 'career__img'] ),
			'</div>';
		?>

		<div class="career__box">
			<?php if( $title ) echo '<h1 class="h1">', esc_html( $title ), '</h1>' ?>

			<div class="career__wrapper">
				<div class="box-shadow-wrapper career__join">
					<?php
					if( $cta_title ) echo '<h2 class="career__join_title">', esc_html( $cta_title ), '</h2>';

					if( $cta_text ) echo '<p class="section__text">', $cta_text, '</p>';

					if( $cta_link ){
						$link_title		= $cta_link['title'];
						$link_url		= $cta_link['url'];
						$link_target	= $cta_link['target'] ? ' target="_blank"' : '';
						?>
						<a href="<?php echo esc_url( $link_url ) ?>" class="button"<?php echo $link_target ?>>
							<?php echo esc_html( $link_title ) ?>
						</a>
						<?php
					}
					?>
				</div>

				<?php
				if( $desc || $note ){
					echo '<div class="career__join_info">';

					if( $desc ) echo '<div class="career__join_subtitle">', esc_html( $desc ), '</div>';

					if( $note ) echo '<p class="career__join_text">', esc_html( $note ), '</p>';

					echo '</div>';
				}
				?>
			</div>
		</div>
	</div>
</section>

