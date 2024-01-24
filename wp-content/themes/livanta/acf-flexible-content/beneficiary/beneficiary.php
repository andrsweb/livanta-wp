<?php

/**
 * Beneficiary - ACF Flexible Content section layout.
 *
 * @see Page with ACF Flexible Content template -> Flexible Content -> Beneficiary
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

<section class="beneficiary">
	<div class="container">
		<div class="beneficiary__wrapper">
			<?php
			if( $banner ){
				?>
				<div class="beneficiary__img">
					<picture class="video__thumbs">
						<?php
						if( $banner_mob )
							echo '<source type="image/png" media="(min-width: 0px) and (max-width: 768px)" srcset="',
							wp_get_attachment_image_url( $banner_mob, 'medium' ) , '">';

						echo wp_get_attachment_image( $banner, 'large', false, ['loading' => 'lazy'] );
						?>
					</picture>
				</div>
				<?php
			}

			if( $sup_title || $title ){
				echo '<div class="h2__wrapper">';

				if( $sup_title ) echo '<div class="subtitle">', esc_html( $sup_title ), '</div>';

				if( $title ) echo '<h2 class="h2">', esc_html( $title ), '</h2>';

				echo '</div>';
			}
			?>

			<div class="beneficiary__inner">
				<?php
				if( $text || $link ){
					?>
					<div class="box-shadow-wrapper beneficiary__contact_wrapper">
						<div class="beneficiary__contact_inner paragraphs">
							<?php
							if( $text ) echo $text;

							get_template_part( 'components/link-button', null, ['link' => $link] );
							?>
						</div>
					</div>
					<?php
				}

				if( $list ){
					echo '<ul class="beneficiary__list">';

					foreach( $list as $item )
						get_template_part( 'components/list-item', null, ['item' => $item] );

					echo '</ul>';
				}
				?>
			</div>
		</div>
	</div>
</section>

