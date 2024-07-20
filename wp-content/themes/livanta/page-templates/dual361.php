<?php

/**
 * Template name: DUAL361
 *
 * @package WordPress
 * @subpackage livanta
 */

get_header();
wp_enqueue_style( 'dual_programs', THEME_URI . '/static/css/dual_programs/dual_programs.min.css', [], THEME_VERSION );
wp_enqueue_style( 'dual_desc', THEME_URI . '/static/css/dual_desc/dual_desc.min.css', [], THEME_VERSION );
// wp_enqueue_style( 'dual_programs', THEME_URI . '/static/css/dual_programs/dual_programs.min.css', [], THEME_VERSION );
// wp_enqueue_script( 'blog_articles', THEME_URI . '/static/js/blog_articles/blog_articles.min.js', ['jquery'], THEME_VERSION, true ); Не удаляй 2 строки, для примера будут.
?>

<main class="main">
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
	<section class="dual-programs">
		<div class="container">
			<div class="dual-programs-wrapper">
				<h2>
					Emphasizing preventive care and early intervention, our programs and materials include: 
				</h2>
				<div class="dual-programs-items">
					<div class="dual-programs-item">
						<div class="dual-programs-item-img">
							<img src="<?php echo THEME_URI ?>/static/img/dual361/dp1.svg" alt="">
						</div>
						<p>
							Resources and guidance to help employees adopt healthy lifestyles
						</p>
					</div>
					<div class="dual-programs-item">
						<div class="dual-programs-item-img">
							<img src="<?php echo THEME_URI ?>/static/img/dual361/dp2.svg" alt="">
						</div>
						<p>
							Regular health screenings
						</p>
					</div>
					<div class="dual-programs-item">
						<div class="dual-programs-item-img">
							<img src="<?php echo THEME_URI ?>/static/img/dual361/dp3.svg" alt="">
						</div>
						<p>
							Wellness programs
						</p>
					</div>
					<div class="dual-programs-item">
						<div class="dual-programs-item-img">
							<img src="<?php echo THEME_URI ?>/static/img/dual361/dp4.svg" alt="">
						</div>
						<p>
							Health education materials
						</p>
					</div>
					<div class="dual-programs-item">
						<div class="dual-programs-item-img">
							<img src="<?php echo THEME_URI ?>/static/img/dual361/dp5.svg" alt="">
						</div>
						<p>
							Support for employees who are returning to work after an illness or injury 
						</p>
					</div>
				</div>
				<a href="#" class="link-arrow">
					<span>
						Learn more about our Absenteeism Reduction program
						<svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<mask
								id="1" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="25" height="24"
							>
								<rect x="0.5" width="24" height="24" fill="#D9D9D9"/>
							</mask>
							<g mask="url(#1">
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
	<section class="dual-desc">
		<div class="container">
			<div class="dual-desc-wrapper">
				<h3>
					…and supporting your organization’s needs 
				</h3>
				<div class="dual-desc-inner">
					<div class="dual-desc-text">
						<p>
							What else? MEMBER361 offers resources and training for managers to create a more supportive and flexible work environment that can help reduce stress and prevent burnout. By promoting a healthy work culture and providing tools for stress management, the program aims to enhance overall employee satisfaction and reduce the likelihood of absenteeism.
						</p>
						<p>
							Leveraging our advanced analytics capabilities, we help track and analyze absenteeism patterns within your organization. With our platform, we can quickly identify trends and develop targeted interventions that address specific issues contributing to your employees’ absences. 
						</p>
					</div>
					<div class="dual-desc-links">
						<a href="#" class="link-arrow">
							<span>
								Learn about DUAL361's state-of-the-art data analytics
								<svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<mask
										id="1" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="25" height="24"
									>
										<rect x="0.5" width="24" height="24" fill="#D9D9D9"/>
									</mask>
									<g mask="url(#1">
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
				<div class="dual-desc-img">
					<img src="<?php echo THEME_URI ?>/static/img/dual361/desc-img.svg" alt="">
				</div>
			</div>
		</div>
	</section>
</main>
<?php
get_footer();

