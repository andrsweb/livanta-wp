<?php

/**
 * Template name: DUAL361
 *
 * @package WordPress
 * @subpackage livanta
 */

get_header();
wp_enqueue_style( 'dual_columns', THEME_URI . '/static/css/dual_columns/dual_columns.min.css', [], THEME_VERSION );
// wp_enqueue_style( 'dual_programs', THEME_URI . '/static/css/dual_programs/dual_programs.min.css', [], THEME_VERSION );
// wp_enqueue_script( 'blog_articles', THEME_URI . '/static/js/blog_articles/blog_articles.min.js', ['jquery'], THEME_VERSION, true ); Не удаляй 2 строки, для примера будут.
?>

<main class="main">
<section class="dual-columns">
		<div class="container">
			<div class="dual-columns-wrapper">
				<div class="dual-columns-items">
					<div class="dual-columns-item">
						<h3>Data for Member Engagement </h3>
						<p>
							EMPOWER361’s powerful data feeds into our Member Engagement, Member Advocacy, and Absenteeism Reduction programs, and provides high-risk employees the educational tools and resources to help them manage their conditions effectively. Empowering individuals to take an active role in their healthcare leads to better health outcomes and embodies the vision of predictive healthcare, where data-driven insights pave the way for a healthier future. 
						</p>
					</div>
					<div class="dual-columns-item">
						<h3>Data for Healthcare Providers, too</h3>
						<p>
							Healthcare providers benefit from automated alerts about patients whose data indicate significant risks, enabling timely interventions such as scheduling additional follow-ups, adjusting treatment plans, or initiating preventive health measures. EMPOWER361 also continuously monitors the effectiveness of these interventions, providing feedback on patient outcomes to refine predictive models over time and aid healthcare providers in optimizing their care strategies. 
						</p>
					</div>
				</div>
				<a href="#" class="link-arrow blue">
					<span>
						Ready to reach out? Contact us today.
						<svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<mask
								id="1" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="25" height="24"
							>
								<rect x="0.5" width="24" height="24" fill="#D9D9D9"/>
							</mask>
							<g mask="url(#1)">
								<path
									d="M17.1269 12.75H5V11.25H17.1269L11.4308 5.55383L12.5 4.5L20 12L12.5 19.5L11.4308 18.4461L17.1269 12.75Z"
									fill="#BF1E2E"
								/>
							</g>
						</svg>
					</span>
				</a>
			</div>
		</div>
	</section>
	<?php
	/**
	 * 1. Please create ACF Flexible Content setting
	 * for pages with slug 'dual361'.
	 *
	 * 2. Then set names of sections PHP-files
	 * the same as ACF Flexible Content sections slugs.
	 *
	 * 3. Put all JavaScript and SCSS files for your section
	 * right inside its PHP-file directory.
	 *
	 * 4. Include these scripts & styles right inside your
	 * PHP-file code from theme_name/static/dual361.
	 *
	 * @example
	 * 'hero_section' in ACF Flexible Content sections
	 * will use template from 'theme_name/acf-dual361/hero_section/hero_section.php'
	 */
	if( have_rows( 'dual361' ) ){
		while( have_rows( 'dual361' ) ){
			the_row();
			$slug = get_row_layout();
			get_template_part( "acf-dual361/$slug/$slug" );
		}
	}
	?>
</main>
<?php
get_footer();

