<?php

/**
 * Template name: Login MEMBER361
 *
 * @package WordPress
 * @subpackage livanta
 */

get_header();

wp_enqueue_style( 'login-member', THEME_URI . '/static/css/login-member.min.css', [], THEME_VERSION );

$logo      = get_field( 'logo' );
$logo_link = get_field( 'logo_link' );
$tabs      = get_field( 'tabs' );
?>

<main class="main">
	<section class="login361">
		<?php
		if( $logo ){
			$logo_url = $logo_link['url'] ?? get_bloginfo( 'url' );
			?>
			<a href="<?php echo esc_url( $logo_url ) ?>" class="login361-logo">
				<?php echo wp_get_attachment_image( $logo, 'medium' ) ?>
			</a>
			<?php
		}

		if( ! empty( $tabs ) ){
			echo '<div class="login361-links">';

			foreach( $tabs as $tab ){
				$tab_link    = $tab['link'] ?? [];
				$link_title  = $tab_link['title'] ?? '';
				$link_url    = $tab_link['url'] ?? '#';
				$link_target = $tab_link['target'] ? ' target="_blank"' : '';
				$is_active   = ( isset( $tab['is_active'] ) && $tab['is_active'] ) ? ' active' : '';
				?>
				<a class="login361-link<?php echo $is_active ?>" href="<?php echo $link_url ?>"<?php echo $link_target ?>>
					<?php echo esc_html( $link_title ) ?>
				</a>
				<?php
			}

			echo '</div>';
		}
		?>
	</section>
</main>

<?php
get_footer();

