<?php

/**
 * Template name: DUAL361
 *
 * @package WordPress
 * @subpackage livanta
 */

get_header();
wp_enqueue_style( 'dual_columns', THEME_URI . '/static/css/dual_columns/dual_columns.min.css', [], THEME_VERSION );
wp_enqueue_style( 'dual_contact', THEME_URI . '/static/css/dual_contact/dual_contact.min.css', [], THEME_VERSION );
wp_enqueue_style( 'dual_items', THEME_URI . '/static/css/dual_items/dual_items.min.css', [], THEME_VERSION );
wp_enqueue_style( 'dual_dropdowns', THEME_URI . '/static/css/dual_dropdowns/dual_dropdowns.min.css', [], THEME_VERSION );
wp_enqueue_script( 'dual_dropdowns', THEME_URI . '/static/js/dual_dropdowns/dual_dropdowns.min.js', ['jquery'], THEME_VERSION, true );
wp_enqueue_style( 'dual_cases', THEME_URI . '/static/css/dual_cases/dual_cases.min.css', [], THEME_VERSION );
// wp_enqueue_style( 'dual_programs', THEME_URI . '/static/css/dual_programs/dual_programs.min.css', [], THEME_VERSION );
// wp_enqueue_script( 'blog_articles', THEME_URI . '/static/js/blog_articles/blog_articles.min.js', ['jquery'], THEME_VERSION, true ); Не удаляй 2 строки, для примера будут.
?>

<main class="main">
	<section class="dual-cases empower"> <!-- Дефолтный красный для стрелок, емпавер класс - синие стрелки -->
		<div class="container">
			<div class="dual-cases-wrapper">
				<h2>
					Need more reasons to choose us?
				</h2>
				<div class="dual-cases-items">
					<div class="dual-cases-item">
						<div class="dual-cases-item-top">
							<div class="dual-cases-item-img">
								<svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
									<mask id="22" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="28" height="28">
										<rect width="28" height="28" fill="#D9D9D9"/>
									</mask>
									<g mask="url(#22)">
										<path d="M17.3106 21.7747L16.0631 20.5564L21.7553 14.8643H2.91797V13.1146H21.7663L16.0923 7.42239L17.3106 6.2041L25.0957 13.9896L17.3106 21.7747Z" fill="#BF1E2E"/>
									</g>
								</svg> <!-- Рандомчик нужен для айдишников, так как стрелки могут синие и красные -->
							</div>
							<div class="dual-cases-item-title">
								We provide a comprehensive overview of your workforce’s health. 
							</div>
						</div>
						<div class="dual-cases-item-bottom">
							<p>
								Analytics provide detailed insights into health trends and risks, crucial for proactive health management.
							</p>
						</div>
					</div>
					<div class="dual-cases-item">
						<div class="dual-cases-item-top">
							<div class="dual-cases-item-img">
								<svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
									<mask id="22" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="28" height="28">
										<rect width="28" height="28" fill="#D9D9D9"/>
									</mask>
									<g mask="url(#22)">
										<path d="M17.3106 21.7747L16.0631 20.5564L21.7553 14.8643H2.91797V13.1146H21.7663L16.0923 7.42239L17.3106 6.2041L25.0957 13.9896L17.3106 21.7747Z" fill="#BF1E2E"/>
									</g>
								</svg> <!-- Рандомчик нужен для айдишников, так как стрелки могут синие и красные -->
							</div>
							<div class="dual-cases-item-title">
								We enable preventive strategies.
							</div>
						</div>
						<div class="dual-cases-item-bottom">
							<p>
								Data-driven insights enable the development of tailored wellness programs and early intervention strategies to mitigate long-term healthcare costs.
							</p>
						</div>
					</div>
					<div class="dual-cases-item">
						<div class="dual-cases-item-top">
							<div class="dual-cases-item-img">
								<svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
									<mask id="22" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="28" height="28">
										<rect width="28" height="28" fill="#D9D9D9"/>
									</mask>
									<g mask="url(#22)">
										<path d="M17.3106 21.7747L16.0631 20.5564L21.7553 14.8643H2.91797V13.1146H21.7663L16.0923 7.42239L17.3106 6.2041L25.0957 13.9896L17.3106 21.7747Z" fill="#BF1E2E"/>
									</g>
								</svg> <!-- Рандомчик нужен для айдишников, так как стрелки могут синие и красные -->
							</div>
							<div class="dual-cases-item-title">
								We help you manage your healthcare program costs. 
							</div>
						</div>
						<div class="dual-cases-item-bottom">
							<p>
								Through the analysis of healthcare utilization patterns, employers can negotiate better rates with providers and design cost-effective coverage policies. 
							</p>
						</div>
					</div>
					<div class="dual-cases-item">
						<div class="dual-cases-item-top">
							<div class="dual-cases-item-img">
								<svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
									<mask id="22" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="28" height="28">
										<rect width="28" height="28" fill="#D9D9D9"/>
									</mask>
									<g mask="url(#22)">
										<path d="M17.3106 21.7747L16.0631 20.5564L21.7553 14.8643H2.91797V13.1146H21.7663L16.0923 7.42239L17.3106 6.2041L25.0957 13.9896L17.3106 21.7747Z" fill="#BF1E2E"/>
									</g>
								</svg> <!-- Рандомчик нужен для айдишников, так как стрелки могут синие и красные -->
							</div>
							<div class="dual-cases-item-title">
								We help you customize your employee benefits.
							</div>
						</div>
						<div class="dual-cases-item-bottom">
							<p>
								Deep insights into the specific needs and preferences of employees allow for the creation of personalized healthcare benefits, enhancing satisfaction and outcomes.
							</p>
						</div>
					</div>
					<div class="dual-cases-item">
						<div class="dual-cases-item-top">
							<div class="dual-cases-item-img">
								<svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
									<mask id="22" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="28" height="28">
										<rect width="28" height="28" fill="#D9D9D9"/>
									</mask>
									<g mask="url(#22)">
										<path d="M17.3106 21.7747L16.0631 20.5564L21.7553 14.8643H2.91797V13.1146H21.7663L16.0923 7.42239L17.3106 6.2041L25.0957 13.9896L17.3106 21.7747Z" fill="#BF1E2E"/>
									</g>
								</svg> <!-- Рандомчик нужен для айдишников, так как стрелки могут синие и красные -->
							</div>
							<div class="dual-cases-item-title">
								We support your regulatory compliance needs.
							</div>
						</div>
						<div class="dual-cases-item-bottom">
							<p>
								Analytics support compliance with health regulations and streamline management processes.
							</p>
						</div>
					</div>
					<div class="dual-cases-item">
						<div class="dual-cases-item-top">
							<div class="dual-cases-item-img">
								<svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
									<mask id="22" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="28" height="28">
										<rect width="28" height="28" fill="#D9D9D9"/>
									</mask>
									<g mask="url(#22)">
										<path d="M17.3106 21.7747L16.0631 20.5564L21.7553 14.8643H2.91797V13.1146H21.7663L16.0923 7.42239L17.3106 6.2041L25.0957 13.9896L17.3106 21.7747Z" fill="#BF1E2E"/>
									</g>
								</svg> <!-- Рандомчик нужен для айдишников, так как стрелки могут синие и красные -->
							</div>
							<div class="dual-cases-item-title">
								We assist with your strategic planning.
							</div>
						</div>
						<div class="dual-cases-item-bottom">
							<p>
								Data-driven insights aid in strategic planning, helping align services with member needs. 
							</p>
						</div>
					</div>
					<div class="dual-cases-item">
						<div class="dual-cases-item-top">
							<div class="dual-cases-item-img">
								<svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
									<mask id="22" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="28" height="28">
										<rect width="28" height="28" fill="#D9D9D9"/>
									</mask>
									<g mask="url(#22)">
										<path d="M17.3106 21.7747L16.0631 20.5564L21.7553 14.8643H2.91797V13.1146H21.7663L16.0923 7.42239L17.3106 6.2041L25.0957 13.9896L17.3106 21.7747Z" fill="#BF1E2E"/>
									</g>
								</svg> <!-- Рандомчик нужен для айдишников, так как стрелки могут синие и красные -->
							</div>
							<div class="dual-cases-item-title">
								We offer essential insights. 
							</div>
						</div>
						<div class="dual-cases-item-bottom">
							<p>
								Overall, the analytics offer vital information for comprehensive health management, strategic decision-making, and cost control in self-funded plans. 
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="dual-dropdowns">
		<div class="container">
			<div class="dual-dropdowns-wrapper">
				<div class="dual-dropdowns-top">
					<div class="dual-dropdowns-info">
						<h2>
							Why Choose DUAL361
						</h2>
						<div class="dual-dropdowns-text">
							<p>
								Are you a self-funded employers looking for a solution that balances cost management with employee health and well-being? You value innovative approaches that offer comprehensive healthcare solutions and detailed data analytics. 
							</p>
							<p>
								DUAL361 is designed to meet these needs by integrating advanced patient analytics, efficient billing and coding reviews, and proactive healthcare management strategies. Our solution ensures that you can control healthcare expenses while enhancing the quality of care provided to your employees. 
							</p>
						</div>
					</div>
					<div class="dual-dropdowns-img">
						<img src="<?php echo THEME_URI ?>/static/img/dual361/dd1.jpg" alt="">
					</div>
				</div>
				<div class="dual-dropdowns-bottom">
					<div class="dual-dropdown">
						<button class="dual-dropdown-button">
							<span class="dual-dropdown-button-text">
								Cost Management
							</span>
							<span class="dual-dropdown-button-ico"></span>
						</button>
						<div class="dual-dropdown-open">
							<div class="dual-dropdown-inner">
								<div class="dual-dropdown-inner-left">
									<p>
										By offering a solution that helps employees navigate the healthcare system more effectively and receive the care they need promptly, you can significantly improve employee satisfaction and brand loyalty. 
									</p>
								</div>
								<div class="dual-dropdown-inner-right">
									<div class="dual-dropdown-img">
										<img src="<?php echo THEME_URI ?>/static/img/dual361/big-arr.svg" alt="">
									</div>
									<div class="dual-dropdown-texts">
										<p>
											This enhanced satisfaction is crucial for employee retention and attracting new talent, making your organization more competitive in the job market. 
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="dual-dropdown">
						<button class="dual-dropdown-button">
							<span class="dual-dropdown-button-text">
								Customization and Flexibility
							</span>
							<span class="dual-dropdown-button-ico"></span>
						</button>
						<div class="dual-dropdown-open">
							<div class="dual-dropdown-inner">
								<div class="dual-dropdown-inner-left">
									<p>
										By offering a solution that helps employees navigate the healthcare system more effectively and receive the care they need promptly, you can significantly improve employee satisfaction and brand loyalty. 
									</p>
								</div>
								<div class="dual-dropdown-inner-right">
									<div class="dual-dropdown-img">
										<img src="<?php echo THEME_URI ?>/static/img/dual361/big-arr.svg" alt="">
									</div>
									<div class="dual-dropdown-texts">
										<p>
											This enhanced satisfaction is crucial for employee retention and attracting new talent, making your organization more competitive in the job market. 
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="dual-dropdown">
						<button class="dual-dropdown-button">
							<span class="dual-dropdown-button-text">
								Data-Driven Decision Making
							</span>
							<span class="dual-dropdown-button-ico"></span>
						</button>
						<div class="dual-dropdown-open">
							<div class="dual-dropdown-inner">
								<div class="dual-dropdown-inner-left">
									<p>
										By offering a solution that helps employees navigate the healthcare system more effectively and receive the care they need promptly, you can significantly improve employee satisfaction and brand loyalty. 
									</p>
								</div>
								<div class="dual-dropdown-inner-right">
									<div class="dual-dropdown-img">
										<img src="<?php echo THEME_URI ?>/static/img/dual361/big-arr.svg" alt="">
									</div>
									<div class="dual-dropdown-texts">
										<p>
											This enhanced satisfaction is crucial for employee retention and attracting new talent, making your organization more competitive in the job market. 
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="dual-dropdown">
						<button class="dual-dropdown-button">
							<span class="dual-dropdown-button-text">
								Enhanced Employee Satisfaction
							</span>
							<span class="dual-dropdown-button-ico"></span>
						</button>
						<div class="dual-dropdown-open">
							<div class="dual-dropdown-inner">
								<div class="dual-dropdown-inner-left">
									<p>
										By offering a solution that helps employees navigate the healthcare system more effectively and receive the care they need promptly, you can significantly improve employee satisfaction and brand loyalty. 
									</p>
								</div>
								<div class="dual-dropdown-inner-right">
									<div class="dual-dropdown-img">
										<img src="<?php echo THEME_URI ?>/static/img/dual361/big-arr.svg" alt="">
									</div>
									<div class="dual-dropdown-texts">
										<p>
											This enhanced satisfaction is crucial for employee retention and attracting new talent, making your organization more competitive in the job market. 
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="dual-dropdown">
						<button class="dual-dropdown-button">
							<span class="dual-dropdown-button-text">
								Improved Employee Health Outcomes
							</span>
							<span class="dual-dropdown-button-ico"></span>
						</button>
						<div class="dual-dropdown-open">
							<div class="dual-dropdown-inner">
								<div class="dual-dropdown-inner-left">
									<p>
										By offering a solution that helps employees navigate the healthcare system more effectively and receive the care they need promptly, you can significantly improve employee satisfaction and brand loyalty. 
									</p>
								</div>
								<div class="dual-dropdown-inner-right">
									<div class="dual-dropdown-img">
										<img src="<?php echo THEME_URI ?>/static/img/dual361/big-arr.svg" alt="">
									</div>
									<div class="dual-dropdown-texts">
										<p>
											This enhanced satisfaction is crucial for employee retention and attracting new talent, making your organization more competitive in the job market. 
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="dual-dropdown">
						<button class="dual-dropdown-button">
							<span class="dual-dropdown-button-text">
								Regulatory Compliance and Reporting
							</span>
							<span class="dual-dropdown-button-ico"></span>
						</button>
						<div class="dual-dropdown-open">
							<div class="dual-dropdown-inner">
								<div class="dual-dropdown-inner-left">
									<p>
										By offering a solution that helps employees navigate the healthcare system more effectively and receive the care they need promptly, you can significantly improve employee satisfaction and brand loyalty. 
									</p>
								</div>
								<div class="dual-dropdown-inner-right">
									<div class="dual-dropdown-img">
										<img src="<?php echo THEME_URI ?>/static/img/dual361/big-arr.svg" alt="">
									</div>
									<div class="dual-dropdown-texts">
										<p>
											This enhanced satisfaction is crucial for employee retention and attracting new talent, making your organization more competitive in the job market. 
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="dual-dropdown">
						<button class="dual-dropdown-button">
							<span class="dual-dropdown-button-text">
								Risk Management
							</span>
							<span class="dual-dropdown-button-ico"></span>
						</button>
						<div class="dual-dropdown-open">
							<div class="dual-dropdown-inner">
								<div class="dual-dropdown-inner-left">
									<p>
										By offering a solution that helps employees navigate the healthcare system more effectively and receive the care they need promptly, you can significantly improve employee satisfaction and brand loyalty. 
									</p>
								</div>
								<div class="dual-dropdown-inner-right">
									<div class="dual-dropdown-img">
										<img src="<?php echo THEME_URI ?>/static/img/dual361/big-arr.svg" alt="">
									</div>
									<div class="dual-dropdown-texts">
										<p>
											This enhanced satisfaction is crucial for employee retention and attracting new talent, making your organization more competitive in the job market. 
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="dual-items">
		<div class="container">
			<div class="dual-items-wrapper">
				<div class="dual-items-bg">
					<picture>
						<source srcset="<?php echo THEME_URI; ?>/static/img/dual361/dual-about-bg-mob.svg" media="(max-width: 768px)" type="image/svg+xml">
						<source srcset="<?php echo THEME_URI; ?>/static/img/dual361/dual-about-bg.svg" media="(min-width: 769px)" type="image/svg+xml">
						<img src="<?php echo THEME_URI; ?>/static/img/dual361/dual-about-bg.svg" alt="Background Image">
					</picture>
				</div>

				<div class="dual-items-box">
					<div class="dual-item">
						<h2>
							Livanta’s DUAL361 Solution 
						</h2>
						<div class="dual-item-texts">
							<p>
								Livanta’s DUAL361 provides a tailored solution of healthcare programs for self-funded employers, adeptly balancing the management of healthcare costs with the vital goal of improving employee health and well-being. Leveraging extensive experience gained from decades servicing the Medicare program, Livanta brings a nuanced understanding of patient advocacy, optimizing healthcare outcomes, and streamlining healthcare utilization. 
							</p>
						</div>
					</div>
					<div class="dual-item">
						<h2>
							Cutting Edge. Holistic. Innovative. 
						</h2>
						<div class="dual-item-texts">
							<p>
								Livanta’s DUAL361 solution, which derives its name from a dual focus on both employer and employee needs, encapsulates comprehensive 361-degree data integration. With cutting-edge analytics, a holistic view of healthcare management, and technological innovation, we empower employees with the resources and guidance they need for effective healthcare navigation and that healthcare services are timely, appropriate, and optimally delivered. 
							</p>
						</div>
					</div>
					<div class="dual-item">
						<h2>
							Boosting Your Employees’ Health and Boosting Your Bottom Line 
						</h2>
						<div class="dual-item-texts">
							<p>
								By aligning the health needs of employees with the financial objectives of employers, we bridge the gap between employer financial goals and employee health needs, DUAL361 creates a synergistic approach that promotes both fiscal responsibility and improved health outcomes. 
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
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
	<section class="dual-contact">
		<div class="container">
			<div class="dual-contact-wrapper">
				<div class="dual-contact-info">
					<div class="dual-contact-text">
						<p>
							The team at DUAL361 team also has unparalleled experience in identifying billing and claims errors, as well as a world-class and award-winning marketing and communications and member services support. 
						</p>
						<p>
							Employing over 500 staff members, including doctors, nurses, and allied clinical personnel, we boast a workforce that is well-versed in the healthcare needs of individuals and families. With a comprehensive understanding of healthcare dynamics and patient needs, we continue to advance our mission of improving the quality and efficiency of medical care across the nation. 
						</p>
						<p>
							E-mail us today at <a href="mailto:dual361@livanta.com">dual361@livanta.com</a> or complete the form to have one of our team members contact you. 
						</p>
					</div>
				</div>
				<div class="dual-contact-form">
					<?php echo do_shortcode( '[contact-form-7 id="f509452" title="Dual contact form"]' ); ?>
				</div>
			</div>
		</div>
	</section>
<!-- CF7 CODE
	<legend>Send us a message</legend>
	<label>Full name [text* full-name placeholder "Full name"]</label>
	<label>Mobile phone [tel* phone placeholder "Mobile phone"]</label>
	<label>Email address [email* email placeholder "Email address"]</label>
	<label>Your message [textarea* message placeholder "Your message"]</label>
	<div class="dual-required">*This contact form should be used for administrative contact only. Please do not include any identifiable health information in your message.</div>
	<button class="button wpcf7-form-control wpcf7-submit dual-submit" type="submit">
	<span>Start the conversation</span>
	</button>
-->

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

