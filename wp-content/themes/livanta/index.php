<?php

/**
 * Index page default template.
 *
 * @package WordPress
 * @subpackage livanta
 */

get_header();

$posts_page_id		= get_option( 'page_for_posts', true );
$highlights_title	= get_field( 'highlights_title', $posts_page_id );
$highlights			= get_field( 'highlights', $posts_page_id );
$term_id			= get_queried_object()->term_id ?? 0;
?>

<main class="main">
	<section class="highlights">
		<div class="container">
			<img class="news-bg" src="<?php echo THEME_URI ?>/static/img/about/bg.svg" width="500" height="500" alt="News background" />

			<h1 class="h1"><?php echo get_the_title( $posts_page_id ) ?></h1>

			<?php
			if( ! empty( $highlights ) ){
				if( $highlights_title ) echo '<div class="h3">', esc_html( $highlights_title ), '</div>';
			}

			$highlights_first_id = $highlights[0]['post'];
			?>

			<div class="highlights__wrapper">
				<?php
				get_template_part( 'components/post-highlight', null, [
					'id' 	=> $highlights_first_id,
					'class'	=> 'highlights__left'
				] );
				?>

				<div class="highlights__right">
					<?php
					for( $i = 1; $i < count( $highlights ); $i++ ){
						$post_id	= $highlights[$i]['post'];
						$class		= $i === 1 ? 'highlight__top' : 'highlight__bottom';
						get_template_part( 'components/post-highlight', null, [
							'id' 	=> $post_id,
							'class'	=> $class
						] );
					}
					?>
				</div>
			</div>
		</div>
	</section>

	<section class="news-filters">
		<div class="container">
			<div class="select-wrapper">
				<div class="select">
					<?php _e( 'All', 'livanta' ) ?>
					<img class="select-arr" src="<?php echo THEME_URI ?>/static/img/news/arr.svg" width="20" height="20" loading="lazy" alt="select arrow" />
				</div>
				<div class="filters tabs-buttons">
					<?php echo liv_get_categories_nav( 'category', [], $term_id ) ?>
				</div>
			</div>

			<div class="news-cards active">
				<?php
				if( have_posts() ){
					while( have_posts() ){
						the_post();
						get_template_part( 'components/post-card', null, ['id' => get_the_ID()] );
					}
				}
				?>
			</div>

			<?php
			if( have_posts() )
				get_template_part( 'components/pagination', null, ['term' => $term_id] );
			?>
		</div>
	</section>
</main>

<?php
get_footer();

