<?php

/**
 * Software - ACF Flexible Content section layout.
 *
 * @see Page with ACF Flexible Content template -> Flexible Content -> Software
 *
 * @package WordPress
 * @subpackage livanta
 */

$title	= get_sub_field( 'title' );
$tabs	= get_sub_field( 'tabs' );
?>

<section class="software" id="software-platforms">
	<div class="container">
		<div class="software__wrapper">
			<div class="forAnchor" id="innovation-cloud" data-id="0"></div>
			<div class="forAnchor" id="teasa" data-id="1"></div>
			<div class="forAnchor" id="data-analytics" data-id="2"></div>
			<div class="forAnchor" id="compassWeb" data-id="3"></div>
			<div class="forAnchor" id="robotic-process" data-id="4"></div>
			<div class="forAnchor" id="trustfolio" data-id="5"></div>
			<div class="forAnchor" id="case-management" data-id="6"></div>

			<div class="software__bar">
				<?php
				if( $title ) echo '<h2 class="h2">', esc_html( $title ), '</h2>';

				if( ! empty( $tabs ) ){
					echo '<div class="software__tabs_buttons">';

					foreach( $tabs as $key => $tab ){
						if( ! $tab_title = $tab['title'] ?? null ) continue;

						$tab_id = $tab['id_attribute'] ?? '';
						$class = ! $key ? ' active' : '';
						echo '<div id="', esc_attr( $tab_id ), '" class="tab-button techTab', esc_attr( $class ), '" data-id="', esc_attr( $key ), '">',
							esc_html( $tab_title ),
						'</div>';
					}

					echo '</div>';
				}
				?>
			</div>

			<?php
			if( ! empty( $tabs ) ){
				echo '<div class="software__content">';

				foreach( $tabs as $key => $tab ){
					if( ! $tab_title = $tab['title'] ?? null ) continue;

					$content	= $tab['content'] ?? '';
					$link		= $tab['link'] ?? '';
					$image		= $tab['image'] ?? '';
					$class		= ! $key ? ' active' : '';
					?>
					<div class="software__item tab-content<?php echo esc_attr( $class ) ?>" data-id="<?php echo esc_attr( $key ) ?>">
						<div class="software__item_wrapper">
							<h3 class="h3"><?php echo esc_html( $tab_title ) ?></h3>

							<?php
							if( $content ) echo '<div class="software__item_text">', $content, '</div>';

							if( $link ){
								$link_url		= $link['url'];
								$link_title		= $link['title'];
								$link_target	= $link['target'] ? ' target="_blank"' : '';
								?>
								<a href="<?php echo esc_url( $link_url ) ?>" class="read-more"<?php echo $link_target ?>>
									<?php echo esc_html( $link_title ) ?>
									<img src="<?php echo THEME_URI ?>/static/img/icons/more-arrow.svg" width="24" height="24" loading="lazy" alt="Click here" />
								</a>
								<?php
							}
							?>
						</div>

						<?php
						if( $image )
							echo '<div class="software__img">',
								wp_get_attachment_image( $image, '', false, ['loading' => 'lazy'] ),
							'</div>';
						?>
					</div>
					<?php
				}

				echo '</div>';
			}
			?>
		</div>
	</div>
</section>

