<?php

/**
 * Government - ACF Flexible Content section layout.
 *
 * @see Page with ACF Flexible Content template -> Flexible Content -> Government
 *
 * @package WordPress
 * @subpackage livanta
 */

$banner		= get_sub_field( 'banner' );
$banner_mob	= get_sub_field( 'banner_mob' );
$sup_title	= get_sub_field( 'sup_title' );
$title		= get_sub_field( 'title' );
$text		= get_sub_field( 'text' );
$link		= get_sub_field( 'link' );
$list		= get_sub_field( 'list' );
?>

<section class="government">
	<div class="container">
		<div class="government__wrapper">
			<?php
			if( $banner )
				echo '<div class="government__img desktop">', wp_get_attachment_image( $banner, 'large', false, ['loading' => 'lazy'] ), '</div>';
			?>

			<div class="government__info">
				<?php
				if( $sup_title || $title ){
					echo '<div class="h2__wrapper">';

					if( $sup_title ) echo '<div class="subtitle">', esc_html( $sup_title ), '</div>';

					if( $title ) echo '<h2 class="h2">', esc_html( $title ), '</h2>';

					echo '</div>';
				}

				if( $text ){
					echo '<div class="government__info_texts paragraphs">', $text;

					if( $banner_mob )
						echo '<div class="government__img mobile">', wp_get_attachment_image( $banner_mob, 'medium', false, ['loading' => 'lazy'] ), '</div>';

					echo '</div>';
				}

				if( $list ){
					?>
					<div class="government__list">
						<div class="government__items">
							<?php
							foreach( $list as $item )
								get_template_part( 'components/payer-item', null, ['item' => $item] );
							?>
						</div>
					</div>
					<?php
				}

				if( $link ){
					echo '<div class="button__wrapper">';
						get_template_part( 'components/link-button', null, ['link' => $link] );
					echo '</div>';
				}
				?>
			</div>
		</div>
	</div>
</section>

