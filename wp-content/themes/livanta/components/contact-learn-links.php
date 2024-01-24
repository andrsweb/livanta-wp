<?php

/**
 * Contact page template. Learn links layout.
 *
 * @package WordPress
 * @subpackage livanta
 */

$class          = isset( $args['class'] ) ? " {$args['class']}" : '';
$links_title	= get_field( 'links_title' );
$links			= get_field( 'links' );

if( empty( $links ) ) return;
?>

<div class="contact__learn<?php echo esc_attr( $class ) ?>">
	<?php
	if( $links_title ) echo '<div class="contact__learn_title">', esc_html( $links_title ), '</div>';

	foreach( $links as $item ){
		if( ! $link = $item['link'] ?? null ) continue;

		$link_url		= $link['url'];
		$link_title		= $link['title'];
		$link_target	= $link['target'] ? ' target="_blank"' : '';
		?>
		<a href="<?php echo esc_url( $link_url ) ?>" class="contact__learn_item"<?php echo $link_target ?>>
			<div class="contact__learn_text"><?php echo esc_html( $link_title ) ?></div>
			<img src="<?php echo THEME_URI ?>/static/img/icons/more-arrow.svg" width="24" height="24" alt="more arrow" />
		</a>
		<?php
	}
	?>
</div>

