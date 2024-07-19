<?php

/**
 * Template name: DUAL361
 *
 * @package WordPress
 * @subpackage livanta
 */

get_header();

wp_enqueue_style( 'hero', THEME_URI . '/static/css/hero/hero.min.css', [], THEME_VERSION );
wp_enqueue_script( 'hero', THEME_URI . '/static/js/hero/hero.min.js', ['jquery'], THEME_VERSION, true );
wp_enqueue_style( 'explore', THEME_URI . '/static/css/explore/explore.min.css', [], THEME_VERSION );
wp_enqueue_style( 'dual_about', THEME_URI . '/static/css/dual_about/dual_about.min.css', [], THEME_VERSION );
wp_enqueue_style( 'blog_articles', THEME_URI . '/static/css/blog_articles/blog_articles.min.css', [], THEME_VERSION );
wp_enqueue_script( 'blog_articles', THEME_URI . '/static/js/blog_articles/blog_articles.min.js', ['jquery'], THEME_VERSION, true );
wp_enqueue_style( 'dual_info', THEME_URI . '/static/css/dual_info/dual_info.min.css', [], THEME_VERSION );
wp_enqueue_style( 'dual_icons', THEME_URI . '/static/css/dual_icons/dual_icons.min.css', [], THEME_VERSION );
wp_enqueue_style( 'dual_quotes', THEME_URI . '/static/css/dual_quotes/dual_quotes.min.css', [], THEME_VERSION );
wp_enqueue_script( 'dual_quotes', THEME_URI . '/static/js/dual_quotes/dual_quotes.min.js', ['jquery'], THEME_VERSION, true );
wp_enqueue_style( 'cta', THEME_URI . '/static/css/cta/cta.min.css', [], THEME_VERSION );
wp_enqueue_style( 'dual_global_text', THEME_URI . '/static/css/dual_global_text/dual_global_text.min.css', [], THEME_VERSION );
wp_enqueue_style( 'dual_image_text', THEME_URI . '/static/css/dual_image_text/dual_image_text.min.css', [], THEME_VERSION );
wp_enqueue_style( 'learn_more', THEME_URI . '/static/css/learn_more/learn_more.min.css', [], THEME_VERSION );
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
	<!-- Main page -->
	<section class="explore">
		<div class="container">
			<div class="explore-wrapper">
			<img class="explore-bg" src="<?php echo THEME_URI ?> /static/img/dual361/exp-bg.svg" alt="">
				<div class="explore-info">
					<h2>
						Explore DUAL361’s two key services
					</h2>
				</div>
				<div class="explore-links">
					<a href="#" class="link-big">
						<span class="link-big-inner">
							<div class="link-big-first-img">
								<svg width="96" height="52" viewBox="0 0 96 52" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M56.5774 12.5921C56.9589 12.5713 57.3404 12.5672 57.7219 12.5921C59.2687 12.6957 60.7988 12.9528 62.2377 13.5334C63.2744 13.9522 64.3152 14.4788 65.1861 15.1713C67.1392 16.7181 67.4999 19.1315 66.2518 21.3458C65.2566 23.1123 63.7513 24.3688 62.0677 25.4262C58.7628 27.4954 55.1219 28.6109 51.2862 29.1376C48.2715 29.5522 45.2651 29.5439 42.3002 28.7519C40.5503 28.2833 38.9248 27.5494 37.6932 26.0938C36.6233 24.8291 36.3289 23.0584 36.9302 21.5158C37.7595 19.3844 39.3643 17.9704 41.1806 16.7637C42.9927 15.5611 44.9707 14.6945 47.0399 14.0393C47.5002 13.8941 50.7347 12.9321 56.5774 12.5879V12.5921ZM31.8007 19.6249C31.867 19.8115 31.7758 20.0189 31.5933 20.106C26.5965 22.4157 24.4526 24.1905 22.23 26.8527C21.3384 28.0262 20.6874 29.3076 20.451 30.7797C20.1981 32.3596 20.6376 33.7031 21.8153 34.7813C23.304 36.1455 25.1534 36.7261 27.0817 37.1283C29.9097 37.7213 32.7461 37.5057 35.5825 37.1905C46.7123 35.9424 56.8967 31.862 66.7411 26.7905C69.0964 25.5797 71.4186 24.2817 73.6537 22.8635C76.5274 21.0431 78.8496 18.667 80.0977 15.4243C80.5166 14.3378 80.7985 13.1975 81.1717 11.9908C79.8199 11.8539 78.6215 11.7295 77.2904 11.5968C79.4965 9.16685 81.6154 6.82809 83.8049 4.41469C84.5472 7.12666 85.2563 9.72666 85.9944 12.4138L82.6604 12.1318C82.5277 12.7165 82.4116 13.2763 82.2748 13.8278C81.3044 17.6718 79.1108 20.6906 76.0173 23.1165C73.5252 25.0655 70.7303 26.5127 67.9395 27.964C61.3586 31.3809 54.5953 34.35 47.4463 36.3861C41.9104 37.9618 36.2916 39.0358 30.511 39.0275C27.6788 39.0234 24.9254 38.5175 22.4083 37.1283C19.2029 35.3577 18.0998 32.4135 19.3231 28.9675C20.1317 26.6827 21.8609 24.8208 23.644 23.2492C24.407 22.5774 28.2303 19.9152 30.9837 18.5882C31.1911 18.4887 31.4357 18.5965 31.5104 18.8122L31.8007 19.6374V19.6249ZM23.7394 20.3091C17.4695 23.7468 10.9965 28.2999 6.09086 33.5746C4.29118 35.5111 2.70298 37.6093 1.92754 40.1928C1.2682 42.3905 1.35114 44.4722 3.09277 46.2055C4.17922 47.2837 5.5352 47.9223 6.96583 48.4033C9.04749 49.1 11.2038 49.4068 13.3891 49.5768C16.947 49.8505 20.4842 49.6059 24.0711 49.0626C24.1665 49.5478 24.2619 50.0205 24.3738 50.5928C23.0759 50.7504 21.8319 50.9453 20.5796 51.0448C16.748 51.3558 12.9247 51.3185 9.13457 50.5679C7.21463 50.1906 5.35689 49.6225 3.67331 48.5941C0.538377 46.6783 -0.606123 43.8087 0.302013 40.2467C0.965491 37.655 2.39612 35.4904 4.09213 33.4833C7.17316 29.8425 10.8638 26.89 14.7534 24.1822C36.6358 9.32028 59.1982 3.82171 60.6246 3.46094C65.2358 2.29571 69.8926 1.37098 74.6365 0.985336C79.2186 0.612129 83.7925 0.607982 88.2585 1.96397C90.4563 2.63159 92.4219 3.69316 94.1593 5.2316C95.3992 6.33048 95.8263 7.7155 95.959 9.26223C96.2203 12.2603 95.2085 14.8977 93.6037 17.3484C91.4225 20.6865 88.5364 23.3611 85.4263 25.8036C80.2843 29.8384 74.624 33.0272 68.7937 35.9341C62.0304 39.3054 55.0639 42.1956 47.9273 44.6795C47.2929 44.8993 47.1602 45.1564 47.3634 45.7743C47.6371 46.5953 47.8112 47.4496 48.0476 48.3743C45.008 48.0425 42.0597 47.7232 38.9579 47.3874C41.3008 44.8786 43.5484 42.4693 45.8705 39.9813C46.1898 41.1838 46.476 42.2703 46.7828 43.4397C47.2099 43.2945 47.6039 43.1701 47.9978 43.0291C58.0039 39.4422 67.7197 35.225 76.8591 29.7679C81.2464 27.1513 85.4056 24.2195 88.9884 20.5497C91.1239 18.3602 93.0107 15.9965 93.9852 13.0316C94.5243 11.3895 94.6487 9.71837 94.151 8.05138C94.0225 7.61597 93.641 6.98982 93.3258 6.65808C91.3105 4.54739 88.7022 3.55217 85.9115 2.96333C82.167 2.16716 78.3893 2.20033 74.5992 2.54036C68.6486 3.07529 58.1698 4.81692 39.9034 12.3142C35.5742 14.089 29.1716 17.3276 23.727 20.3133L23.7394 20.3091ZM47.6329 15.5114C45.1739 16.2827 42.9554 17.282 41.0603 18.8619C40.2185 19.5669 39.4307 20.3962 38.8294 21.3127C37.7056 23.0294 38.0539 24.7752 39.7831 25.8699C40.8281 26.5334 42.0307 27.0891 43.2332 27.3337C49.2916 28.5653 55.01 27.4167 60.4215 24.5637C62.0802 23.6887 63.5688 22.565 64.6263 20.9726C65.9242 19.0237 65.5717 17.253 63.6393 15.9426C63.4113 15.7851 63.1666 15.6482 62.9178 15.5238C61.0766 14.6074 59.1069 14.3088 57.0709 14.2466C56.4613 14.2259 51.1079 14.5659 47.6246 15.5072L47.6329 15.5114Z" fill="#BF1E2E"/>
								</svg>
							</div>
							<span class="link-big-info">
								<span class="link-big-title">
									MEMBER361
								</span>
								<span class="link-big-text">
									for employees
								</span>
							</span>
						</span>
						<div class="link-big-second-img">
							<svg width="72" height="72" viewBox="0 0 72 72" fill="none" xmlns="http://www.w3.org/2000/svg">
								<circle cx="36" cy="36" r="36" fill="#FCF4F5"/>
								<mask id="123" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="12" y="12" width="48" height="48">
									<rect x="12" y="60" width="48" height="48" transform="rotate(-90 12 60)" fill="#D9D9D9"/>
								</mask>
								<g mask="url(#123)">
									<path d="M49.2699 36.0005L37.9623 47.3081L35.8546 45.2005L45.0239 36.0005L35.8546 26.8005L37.9623 24.6928L49.2699 36.0005ZM37.3084 36.0005L26.0007 47.3081L23.8931 45.2005L33.0623 36.0005L23.8931 26.8005L26.0007 24.6928L37.3084 36.0005Z" fill="#BF1E2E"/>
								</g>
							</svg>
						</div>
					</a>
					<a href="#" class="link-big blue">
						<span class="link-big-inner">
							<div class="link-big-first-img">
								<svg width="96" height="52" viewBox="0 0 96 52" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M56.5774 12.5921C56.9589 12.5713 57.3404 12.5672 57.7219 12.5921C59.2687 12.6957 60.7988 12.9528 62.2377 13.5334C63.2744 13.9522 64.3152 14.4788 65.1861 15.1713C67.1392 16.7181 67.4999 19.1315 66.2518 21.3458C65.2566 23.1123 63.7513 24.3688 62.0677 25.4262C58.7628 27.4954 55.1219 28.6109 51.2862 29.1376C48.2715 29.5522 45.2651 29.5439 42.3002 28.7519C40.5503 28.2833 38.9248 27.5494 37.6932 26.0938C36.6233 24.8291 36.3289 23.0584 36.9302 21.5158C37.7595 19.3844 39.3643 17.9704 41.1806 16.7637C42.9927 15.5611 44.9707 14.6945 47.0399 14.0393C47.5002 13.8941 50.7347 12.9321 56.5774 12.5879V12.5921ZM31.8007 19.6249C31.867 19.8115 31.7758 20.0189 31.5933 20.106C26.5965 22.4157 24.4526 24.1905 22.23 26.8527C21.3384 28.0262 20.6874 29.3076 20.451 30.7797C20.1981 32.3596 20.6376 33.7031 21.8153 34.7813C23.304 36.1455 25.1534 36.7261 27.0817 37.1283C29.9097 37.7213 32.7461 37.5057 35.5825 37.1905C46.7123 35.9424 56.8967 31.862 66.7411 26.7905C69.0964 25.5797 71.4186 24.2817 73.6537 22.8635C76.5274 21.0431 78.8496 18.667 80.0977 15.4243C80.5166 14.3378 80.7985 13.1975 81.1717 11.9908C79.8199 11.8539 78.6215 11.7295 77.2904 11.5968C79.4965 9.16685 81.6154 6.82809 83.8049 4.41469C84.5472 7.12666 85.2563 9.72666 85.9944 12.4138L82.6604 12.1318C82.5277 12.7165 82.4116 13.2763 82.2748 13.8278C81.3044 17.6718 79.1108 20.6906 76.0173 23.1165C73.5252 25.0655 70.7303 26.5127 67.9395 27.964C61.3586 31.3809 54.5953 34.35 47.4463 36.3861C41.9104 37.9618 36.2916 39.0358 30.511 39.0275C27.6788 39.0234 24.9254 38.5175 22.4083 37.1283C19.2029 35.3577 18.0998 32.4135 19.3231 28.9675C20.1317 26.6827 21.8609 24.8208 23.644 23.2492C24.407 22.5774 28.2303 19.9152 30.9837 18.5882C31.1911 18.4887 31.4357 18.5965 31.5104 18.8122L31.8007 19.6374V19.6249ZM23.7394 20.3091C17.4695 23.7468 10.9965 28.2999 6.09086 33.5746C4.29118 35.5111 2.70298 37.6093 1.92754 40.1928C1.2682 42.3905 1.35114 44.4722 3.09277 46.2055C4.17922 47.2837 5.5352 47.9223 6.96583 48.4033C9.04749 49.1 11.2038 49.4068 13.3891 49.5768C16.947 49.8505 20.4842 49.6059 24.0711 49.0626C24.1665 49.5478 24.2619 50.0205 24.3738 50.5928C23.0759 50.7504 21.8319 50.9453 20.5796 51.0448C16.748 51.3558 12.9247 51.3185 9.13457 50.5679C7.21463 50.1906 5.35689 49.6225 3.67331 48.5941C0.538377 46.6783 -0.606123 43.8087 0.302013 40.2467C0.965491 37.655 2.39612 35.4904 4.09213 33.4833C7.17316 29.8425 10.8638 26.89 14.7534 24.1822C36.6358 9.32028 59.1982 3.82171 60.6246 3.46094C65.2358 2.29571 69.8926 1.37098 74.6365 0.985336C79.2186 0.612129 83.7925 0.607982 88.2585 1.96397C90.4563 2.63159 92.4219 3.69316 94.1593 5.2316C95.3992 6.33048 95.8263 7.7155 95.959 9.26223C96.2203 12.2603 95.2085 14.8977 93.6037 17.3484C91.4225 20.6865 88.5364 23.3611 85.4263 25.8036C80.2843 29.8384 74.624 33.0272 68.7937 35.9341C62.0304 39.3054 55.0639 42.1956 47.9273 44.6795C47.2929 44.8993 47.1602 45.1564 47.3634 45.7743C47.6371 46.5953 47.8112 47.4496 48.0476 48.3743C45.008 48.0425 42.0597 47.7232 38.9579 47.3874C41.3008 44.8786 43.5484 42.4693 45.8705 39.9813C46.1898 41.1838 46.476 42.2703 46.7828 43.4397C47.2099 43.2945 47.6039 43.1701 47.9978 43.0291C58.0039 39.4422 67.7197 35.225 76.8591 29.7679C81.2464 27.1513 85.4056 24.2195 88.9884 20.5497C91.1239 18.3602 93.0107 15.9965 93.9852 13.0316C94.5243 11.3895 94.6487 9.71837 94.151 8.05138C94.0225 7.61597 93.641 6.98982 93.3258 6.65808C91.3105 4.54739 88.7022 3.55217 85.9115 2.96333C82.167 2.16716 78.3893 2.20033 74.5992 2.54036C68.6486 3.07529 58.1698 4.81692 39.9034 12.3142C35.5742 14.089 29.1716 17.3276 23.727 20.3133L23.7394 20.3091ZM47.6329 15.5114C45.1739 16.2827 42.9554 17.282 41.0603 18.8619C40.2185 19.5669 39.4307 20.3962 38.8294 21.3127C37.7056 23.0294 38.0539 24.7752 39.7831 25.8699C40.8281 26.5334 42.0307 27.0891 43.2332 27.3337C49.2916 28.5653 55.01 27.4167 60.4215 24.5637C62.0802 23.6887 63.5688 22.565 64.6263 20.9726C65.9242 19.0237 65.5717 17.253 63.6393 15.9426C63.4113 15.7851 63.1666 15.6482 62.9178 15.5238C61.0766 14.6074 59.1069 14.3088 57.0709 14.2466C56.4613 14.2259 51.1079 14.5659 47.6246 15.5072L47.6329 15.5114Z" fill="#BF1E2E"/>
								</svg>
							</div>
							<span class="link-big-info">
								<span class="link-big-title">
									EMPOWER361
								</span>
								<span class="link-big-text">
									for employees
								</span>
							</span>
						</span>
						<div class="link-big-second-img">
							<svg width="72" height="72" viewBox="0 0 72 72" fill="none" xmlns="http://www.w3.org/2000/svg">
								<circle cx="36" cy="36" r="36" fill="#FCF4F5"/>
								<mask id="123" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="12" y="12" width="48" height="48">
									<rect x="12" y="60" width="48" height="48" transform="rotate(-90 12 60)" fill="#D9D9D9"/>
								</mask>
								<g mask="url(#123)">
									<path d="M49.2699 36.0005L37.9623 47.3081L35.8546 45.2005L45.0239 36.0005L35.8546 26.8005L37.9623 24.6928L49.2699 36.0005ZM37.3084 36.0005L26.0007 47.3081L23.8931 45.2005L33.0623 36.0005L23.8931 26.8005L26.0007 24.6928L37.3084 36.0005Z" fill="#BF1E2E"/>
								</g>
							</svg>
						</div>
					</a>
				</div>
			</div>
		</div>
	</section>
	<section class="dual-about">
		<div class="container">
			<div class="dual-about-wrapper">
				<div class="dual-about-bg">
					<picture>
						<source srcset="<?php echo THEME_URI; ?>/static/img/dual361/dual-about-bg-mob.svg" media="(max-width: 768px)" type="image/svg+xml">
						<source srcset="<?php echo THEME_URI; ?>/static/img/dual361/dual-about-bg.svg" media="(min-width: 769px)" type="image/svg+xml">
						<img src="<?php echo THEME_URI; ?>/static/img/dual361/dual-about-bg.svg" alt="Background Image">
					</picture>
				</div>
				<div class="dual-about-info">
					<h2>
						About
					</h2>
					<div class="dual-about-info-text">
						<p>
							DUAL361 is a revolutionary approach that transforms the employer and employee experience by using analytics, technology, and healthcare expertise to improve employee healthcare while reducing healthcare costs for the employer.
						</p>
						<p>
							DUAL361 provides a tailored suite of healthcare solutions for self-funded employers, helping to manage overall healthcare costs and improve employee health and well-being. DUAL361 has two tracks: 
						</p>
					</div>
					<div class="dual-about-info-items">
						<div class="dual-about-info-item">
							<div class="dual-info-item-title">
								MEMBER361
							</div>
							<p>
								a robust suite of programs for employees 
							</p>
						</div>
						<span class="dual-info-item-separator"></span>
						<div class="dual-about-info-item">
							<div class="dual-info-item-title">
								EMPOWER361
							</div>
							<p>
								a powerful suite of business solutions
							</p>
						</div>
					</div>
						<p>
							Each core service offers a features designed to optimize the health of your employees and the health of your organization. Contact us today to learn more.
						</p>
					<a href="#" class="link-arrow">
						<span>
							Learn about DUAL361's state-of-the-art data analytics
							<svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
								<mask id="a12" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="25" height="24">
									<rect x="0.5" width="24" height="24" fill="#D9D9D9"/>
								</mask>
								<g mask="url(#a12)">
									<path d="M17.1269 12.75H5V11.25H17.1269L11.4308 5.55383L12.5 4.5L20 12L12.5 19.5L11.4308 18.4461L17.1269 12.75Z" fill="#BF1E2E"/>
								</g>
							</svg>	
						</span>
					</a>
				</div>
			</div>
		</div>
	</section>
	<section class="blog-articles">
		<div class="container">
			<div class="blog-articles-wrapper">
				<div class="blog-articles-heading">
					<h2>
						Blog Articles
					</h2>
					<div class="blog-articles-arrows">
						<div class="swiper-prev" tabindex="0">
							<svg width="24" height="16" viewBox="0 0 24 16" fill="none"
								xmlns="http://www.w3.org/2000/svg">
								<path d="M7.96155 15.9614L0 7.99988L7.96155 0.0383301L9.02306 1.09988L2.8731 7.24988H24V8.74988H2.8731L9.02306 14.8999L7.96155 15.9614Z"
									fill="#061021"/>
							</svg>
						</div>
						<div class="swiper-next" tabindex="0">
							<svg width="24" height="16" viewBox="0 0 24 16" fill="none"
								xmlns="http://www.w3.org/2000/svg">
								<path d="M16.0385 0.0385697L24 8.00012L16.0384 15.9617L14.9769 14.9001L21.1269 8.75012L6.30454e-07 8.75012L7.61588e-07 7.25012L21.1269 7.25012L14.9769 1.10012L16.0385 0.0385697Z"
									fill="#061021"/>
							</svg>
						</div>
					</div>
				</div>
				<div class="blog-articles-items">
					<div class="swiper blog-articles-swiper">
						<div class="swiper-wrapper">
							<div class="swiper-slide">
								<div class="blog-articles-card">
									<div class="blog-articles-inner">
										<a href="#" class="blog-articles-img">
											<img src="<?php echo THEME_URI ?> /static/img/dual361/blog1.jpg" alt="">
										</a>
										<div class="blog-articles-info">
											<span class="blog-articles-date">01 May, 2023</span>
											<p>
												Lorem ipsum dolor sit amet consec tetur adipisci elit
											</p>
											<div class="link-wrapper">
												<a href="#" class="link-arrow">
													Read more
													<svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<mask id="b1" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="25" height="24">
															<rect x="0.5" width="24" height="24" fill="#D9D9D9"/>
														</mask>
														<g mask="url(#b1">
															<path d="M17.1269 12.75H5V11.25H17.1269L11.4308 5.55383L12.5 4.5L20 12L12.5 19.5L11.4308 18.4461L17.1269 12.75Z" fill="#BF1E2E"/>
														</g>
													</svg>	
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="blog-articles-card">
									<div class="blog-articles-inner">
										<a href="#" class="blog-articles-img">
											<img src="<?php echo THEME_URI ?> /static/img/dual361/blog2.jpg" alt="">
										</a>
										<div class="blog-articles-info">
											<span class="blog-articles-date">01 May, 2023</span>
											<p>
												Lorem ipsum dolor sit amet consec tetur adipisci elit
											</p>
											<div class="link-wrapper">
												<a href="#" class="link-arrow">
													Read more
													<svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<mask id="b1" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="25" height="24">
															<rect x="0.5" width="24" height="24" fill="#D9D9D9"/>
														</mask>
														<g mask="url(#b1">
															<path d="M17.1269 12.75H5V11.25H17.1269L11.4308 5.55383L12.5 4.5L20 12L12.5 19.5L11.4308 18.4461L17.1269 12.75Z" fill="#BF1E2E"/>
														</g>
													</svg>	
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="blog-articles-card">
									<div class="blog-articles-inner">
										<a href="#" class="blog-articles-img">
											<img src="<?php echo THEME_URI ?> /static/img/dual361/blog3.jpg" alt="">
										</a>
										<div class="blog-articles-info">
											<span class="blog-articles-date">01 May, 2023</span>
											<p>
												Lorem ipsum dolor sit amet consec tetur adipisci elit
											</p>
											<div class="link-wrapper">
												<a href="#" class="link-arrow">
													Read more
													<svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<mask id="b1" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="25" height="24">
															<rect x="0.5" width="24" height="24" fill="#D9D9D9"/>
														</mask>
														<g mask="url(#b1">
															<path d="M17.1269 12.75H5V11.25H17.1269L11.4308 5.55383L12.5 4.5L20 12L12.5 19.5L11.4308 18.4461L17.1269 12.75Z" fill="#BF1E2E"/>
														</g>
													</svg>	
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="swiper-slide">
								<div class="blog-articles-card">
									<div class="blog-articles-inner">
										<a href="#" class="blog-articles-img">
											<img src="<?php echo THEME_URI ?> /static/img/dual361/blog1.jpg" alt="">
										</a>
										<div class="blog-articles-info">
											<span class="blog-articles-date">01 May, 2023</span>
											<p>
												Lorem ipsum dolor sit amet consec tetur adipisci elit
											</p>
											<div class="link-wrapper">
												<a href="#" class="link-arrow">
													Read more
													<svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<mask id="b1" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="25" height="24">
															<rect x="0.5" width="24" height="24" fill="#D9D9D9"/>
														</mask>
														<g mask="url(#b1">
															<path d="M17.1269 12.75H5V11.25H17.1269L11.4308 5.55383L12.5 4.5L20 12L12.5 19.5L11.4308 18.4461L17.1269 12.75Z" fill="#BF1E2E"/>
														</g>
													</svg>	
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="dual-info">
		<div class="container">
			<div class="dual-info-wrapper">
				<div class="dual-info-title">
					<h2>
						Our Strategic Partner
					</h2>
				</div>
				<div class="dual-info-text">
					<div class="dual-text-img-wrapper">
						<div class="dual-text-img">
							<img src="<?php echo THEME_URI ?> /static/img/dual361/optum.png" alt="">
						</div>
					</div>
					<div class="dual-text-title">
						Optum Advisory Services 
					</div>
					<div class="dual-info-text-items">
						<p>
							DUAL361’s operations and decision-making are deeply rooted in data analytics and powered by our trusted strategic partner, Optum Advisory Services. 
						</p>
						<p>
							Optum Advisory Services, a leading consulting firm, provides deep data and technology expertise to the healthcare industry, enabling leaders to transform care. Using high-end analytics from a broad spectrum of data, <a href="https://www.optum.com/en/business/health-plans/advisory-healthcare-consulting.html" target="_blank">Optum Advisory Services</a> bridges the gaps in a fragmented system by helping clients understand problem areas in organizations and make data-informed decisions to improve areas of concern. 
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="dual-icons">
		<div class="container">
			<div class="dual-icons-wrapper">
				<h2>
					Health and Health Care by the Numbers 
				</h2>
				<div class="dual-icons-items">
					<div class="dual-icons-item">
						<div class="dual-icons-item-inner">
							<div class="dual-icons-img">
								<img src="<?php echo THEME_URI ?> /static/img/dual361/i1.svg" alt="">
							</div>
							<p>
								Absenteeism is a huge problem 
							</p>
						</div>
					</div>
					<div class="dual-icons-item">
						<div class="dual-icons-item-inner">
							<div class="dual-icons-img">
								<img src="<?php echo THEME_URI ?> /static/img/dual361/i2.svg" alt="">
							</div>
							<p>
								Many employee don’t have healthcares 
							</p>
						</div>
					</div>
					<div class="dual-icons-item">
						<div class="dual-icons-item-inner">
							<div class="dual-icons-img">
								<img src="<?php echo THEME_URI ?> /static/img/dual361/i3.svg" alt="">
							</div>
							<p>
								Employers spend beaucoup bucks 
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="dual-quotes">
		<div class="container">
			<div class="dual-quotes-wrapper">
				<div class="swiper blog-quotes-swiper">
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<div class="dual-quotes-inner">
								<div class="dual-quotes-img">
									<img src="<?php echo THEME_URI ?> /static/img/dual361/q1.jpg" alt="">
								</div>
								<div class="dual-quotes-info">
									<img src="<?php echo THEME_URI ?> /static/img/dual361/quote-ico.svg" alt="">
									<p>
										“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus.”
									</p>
									<div class="dual-quotes-author">
										<div class="dual-quotes-name">
											Billy Shakes
										</div>
										<div class="dual-quotes-position">
											Automotive Tech and Avid Yankees Fan 
										</div>
									</div>
								</div>
							</div>
							
						</div>
						<div class="swiper-slide">
							<div class="dual-quotes-inner">
								<div class="dual-quotes-img">
									<img src="<?php echo THEME_URI ?> /static/img/dual361/q1.jpg" alt="">
								</div>
								<div class="dual-quotes-info">
									<img src="<?php echo THEME_URI ?> /static/img/dual361/quote-ico.svg" alt="">
									<p>
										“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus.”
									</p>
									<div class="dual-quotes-author">
										<div class="dual-quotes-name">
											Billy Shakes
										</div>
										<div class="dual-quotes-position">
											Automotive Tech and Avid Yankees Fan 
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="dual-quotes-inner">
								<div class="dual-quotes-img">
									<img src="<?php echo THEME_URI ?> /static/img/dual361/q1.jpg" alt="">
								</div>
								<div class="dual-quotes-info">
									<img src="<?php echo THEME_URI ?> /static/img/dual361/quote-ico.svg" alt="">
									<p>
										“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus.”
									</p>
									<div class="dual-quotes-author">
										<div class="dual-quotes-name">
											Billy Shakes
										</div>
										<div class="dual-quotes-position">
											Automotive Tech and Avid Yankees Fan 
										</div>
									</div>
								</div>
							</div>
							
						</div>
						<div class="swiper-slide">
							<div class="dual-quotes-inner">
								<div class="dual-quotes-img">
									<img src="<?php echo THEME_URI ?> /static/img/dual361/q1.jpg" alt="">
								</div>
								<div class="dual-quotes-info">
									<img src="<?php echo THEME_URI ?> /static/img/dual361/quote-ico.svg" alt="">
									<p>
										“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus.”
									</p>
									<div class="dual-quotes-author">
										<div class="dual-quotes-name">
											Billy Shakes
										</div>
										<div class="dual-quotes-position">
											Automotive Tech and Avid Yankees Fan 
										</div>
									</div>
								</div>
							</div>
							
						</div>
					</div>
					<div class="dual-quotes-ui">
							<div class="swiper-scrollbar"></div>
							<div class="dual-quotes-arrows">
								<div class="swiper-prev" tabindex="0">
									<svg width="24" height="16" viewBox="0 0 24 16" fill="none"
										xmlns="http://www.w3.org/2000/svg">
										<path d="M7.96155 15.9614L0 7.99988L7.96155 0.0383301L9.02306 1.09988L2.8731 7.24988H24V8.74988H2.8731L9.02306 14.8999L7.96155 15.9614Z"
											fill="#061021"/>
									</svg>
								</div>
								<div class="swiper-next" tabindex="0">
									<svg width="24" height="16" viewBox="0 0 24 16" fill="none"
										xmlns="http://www.w3.org/2000/svg">
										<path d="M16.0385 0.0385697L24 8.00012L16.0384 15.9617L14.9769 14.9001L21.1269 8.75012L6.30454e-07 8.75012L7.61588e-07 7.25012L21.1269 7.25012L14.9769 1.10012L16.0385 0.0385697Z"
											fill="#061021"/>
									</svg>
								</div>
							</div>	
						</div>
				</div>		
			</div>
		
		
	</section>
	<section class="cta">
		<div class="container">
			<div class="cta-wrapper">
				<h2>
					It’s Time to Advocate for a Healthier Business. 
				</h2>
				<div class="cta-info">
					<p>
						The team at DUAL361 has unparalleled experience in supporting individuals and families through their healthcare journeys, as well as identifying billing and claims errors. We also have a world-class and award-winning marketing and communications team and member services support programs that will help your employees be stronger and healthier. 
					</p>
					<a href="#" class="link-full">
						<svg width="46" height="26" viewBox="0 0 46 26" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M27.11 6.57537C27.2928 6.56544 27.4756 6.56345 27.6584 6.57537C28.3996 6.62505 29.1328 6.74824 29.8222 7.02642C30.319 7.2271 30.8177 7.47945 31.235 7.81128C32.1709 8.55242 32.3437 9.70884 31.7456 10.7699C31.2688 11.6163 30.5475 12.2184 29.7408 12.7251C28.1572 13.7166 26.4126 14.2511 24.5746 14.5034C23.1301 14.7021 21.6895 14.6981 20.2688 14.3186C19.4303 14.0941 18.6514 13.7424 18.0613 13.045C17.5487 12.439 17.4076 11.5905 17.6957 10.8514C18.0931 9.83005 18.8621 9.15249 19.7324 8.57428C20.6007 7.99805 21.5485 7.58277 22.54 7.26883C22.7605 7.19929 24.3104 6.73831 27.11 6.57339V6.57537ZM15.2378 9.94529C15.2696 10.0347 15.2259 10.1341 15.1385 10.1758C12.7442 11.2825 11.7169 12.133 10.6519 13.4086C10.2247 13.9709 9.91271 14.5849 9.79945 15.2903C9.67824 16.0473 9.88886 16.6911 10.4532 17.2077C11.1665 17.8614 12.0527 18.1396 12.9766 18.3323C14.3317 18.6165 15.6908 18.5131 17.0499 18.3621C22.383 17.7641 27.263 15.8089 31.9801 13.3788C33.1087 12.7986 34.2214 12.1767 35.2924 11.4971C36.6694 10.6248 37.7821 9.4863 38.3802 7.93248C38.5809 7.41189 38.716 6.86547 38.8948 6.28726C38.247 6.22169 37.6728 6.16208 37.035 6.0985C38.0921 4.93413 39.1074 3.81347 40.1565 2.65705C40.5122 3.95654 40.852 5.20237 41.2057 6.48993L39.6081 6.35482C39.5445 6.63498 39.4889 6.90323 39.4233 7.16749C38.9584 9.00943 37.9073 10.4559 36.425 11.6183C35.2308 12.5522 33.8916 13.2457 32.5543 13.9411C29.401 15.5784 26.1602 17.0011 22.7347 17.9767C20.0821 18.7317 17.3897 19.2463 14.6199 19.2424C13.2628 19.2404 11.9434 18.998 10.7373 18.3323C9.20137 17.4839 8.67283 16.0731 9.25899 14.422C9.64645 13.3271 10.475 12.435 11.3294 11.6819C11.695 11.36 13.527 10.0844 14.8464 9.44855C14.9457 9.40086 15.063 9.45252 15.0987 9.55584L15.2378 9.95125V9.94529ZM11.3751 10.2731C8.37081 11.9204 5.26914 14.1021 2.91854 16.6295C2.05619 17.5574 1.29518 18.5628 0.923611 19.8007C0.607681 20.8538 0.64742 21.8513 1.48195 22.6818C2.00254 23.1984 2.65228 23.5044 3.33779 23.7349C4.33525 24.0687 5.36848 24.2158 6.41562 24.2972C8.12045 24.4284 9.81535 24.3112 11.5341 24.0509C11.5798 24.2833 11.6255 24.5099 11.6791 24.7841C11.0572 24.8596 10.4611 24.9529 9.86105 25.0006C8.02508 25.1497 6.19308 25.1318 4.37698 24.7721C3.45701 24.5913 2.56684 24.3191 1.76013 23.8263C0.257972 22.9083 -0.290434 21.5334 0.144714 19.8265C0.462631 18.5847 1.14814 17.5475 1.96081 16.5858C3.43714 14.8412 5.20555 13.4265 7.06934 12.129C17.5546 5.00765 28.3658 2.37291 29.0493 2.20004C31.2588 1.6417 33.4902 1.19861 35.7633 1.01382C37.9589 0.83499 40.1506 0.833003 42.2905 1.48275C43.3436 1.80265 44.2855 2.31132 45.118 3.04849C45.7121 3.57504 45.9168 4.23869 45.9804 4.97983C46.1055 6.41642 45.6207 7.68014 44.8518 8.85444C43.8066 10.454 42.4237 11.7356 40.9334 12.9059C38.4696 14.8392 35.7574 16.3672 32.9637 17.7601C29.7229 19.3755 26.3848 20.7604 22.9652 21.9506C22.6612 22.0559 22.5976 22.1791 22.6949 22.4752C22.8261 22.8686 22.9095 23.2779 23.0228 23.721C21.5663 23.5621 20.1536 23.4091 18.6673 23.2481C19.79 22.046 20.8669 20.8916 21.9796 19.6994C22.1326 20.2756 22.2697 20.7962 22.4168 21.3565C22.6214 21.287 22.8102 21.2274 22.999 21.1598C27.7935 19.4411 32.449 17.4203 36.8283 14.8054C38.9306 13.5517 40.9235 12.1469 42.6403 10.3884C43.6635 9.33926 44.5676 8.20669 45.0346 6.78599C45.2929 5.99915 45.3525 5.1984 45.114 4.39963C45.0524 4.191 44.8696 3.89096 44.7186 3.73201C43.753 2.72063 42.5031 2.24376 41.1659 1.96161C39.3717 1.58011 37.5615 1.596 35.7454 1.75894C32.8941 2.01526 27.873 2.84979 19.1204 6.44225C17.046 7.29267 13.9781 8.84451 11.3692 10.2751L11.3751 10.2731ZM22.8241 7.97421C21.6458 8.34379 20.5828 8.82265 19.6747 9.57969C19.2714 9.91748 18.8939 10.3149 18.6057 10.754C18.0673 11.5766 18.2342 12.4131 19.0627 12.9377C19.5635 13.2556 20.1397 13.5219 20.7159 13.6391C23.6189 14.2292 26.3589 13.6788 28.9519 12.3118C29.7467 11.8925 30.4601 11.3541 30.9667 10.5911C31.5887 9.65718 31.4198 8.80874 30.4938 8.18085C30.3846 8.10535 30.2673 8.03978 30.1481 7.98017C29.2659 7.54105 28.3221 7.39798 27.3465 7.36818C27.0544 7.35824 24.4892 7.52118 22.8201 7.97222L22.8241 7.97421Z" fill="white"/>
						</svg>
						Start the conversation
						<svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<mask id="cta1" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="25" height="24">
								<rect x="0.5" width="24" height="24" fill="#D9D9D9"/>
							</mask>
							<g mask="url(#cta1">
								<path d="M17.1269 12.75H5V11.25H17.1269L11.4308 5.55383L12.5 4.5L20 12L12.5 19.5L11.4308 18.4461L17.1269 12.75Z" fill="#BF1E2E"/>
							</g>
						</svg>	
					</a>
				</div>
				<svg class="cta-bg-img" width="482" height="211" viewBox="0 0 482 211" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M33.769 288.892L0.0996094 255.223L178.066 76.0535L274.265 172.252L399.322 48.3965H336.793V0.297363H481.091V144.595H432.992V82.0659L274.265 240.793L178.066 144.595L33.769 288.892Z" fill="white"/>
				</svg>
			</div>
		</div>
	</section>

	<!-- Together health -->
	<section class="dual-global-text"> <!-- Red is default -->
		<div class="container">
			<div class="dual-global-text-wrapper">
				<div class="dual-global-text-img">
					<img src="<?php echo THEME_URI ?>/static/img/dual361/tactic.svg" alt="">
				</div>
				<h3>
					We’re there – from the break room to the waiting room. 
				</h3>
				<div class="dual-global-text-items">
					<p>
						DUAL361 gives your employees access to a range of clinical support services to help them get healthy and stay healthy longer. From preventive care to chronic disease management, from the break room to the waiting room, DUAL361 is there when your employees have questions, need guidance, or are in the throes of a healthcare emergency or hospitalization. We support your employees on their healthcare journey and keep them engaged as they return to work. 
					</p>
				</div>
			</div>
		</div>
	</section>
	<section class="dual-image-text">
		<div class="container">
			<div class="dual-image-text-items">
				<div class="dual-image-text-item">
					<div class="dual-image-text-wrapper">
						<div class="dual-image-text-inner">
							<h2>
								Member Health
							</h2>
							<div class="dual-image-text-paragraphs">
								<p>
									Member Health is an essential aspect of MEMBER361’s offerings, because a healthier workforce is a more engaged and productive workforce. Our Member Health component supports your employees in their health and contributes to the broader goals of reducing overall healthcare costs and enhancing productivity. 
								</p>
							</div>
							<div class="dual-image-text-links">
								<a href="#" class="link-arrow">
									Learn more about our Member Health program
									<svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<mask
											id="it" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="25" height="24"
										>
											<rect x="0.5" width="24" height="24" fill="#D9D9D9"/>
										</mask>
										<g mask="url(#it">
											<path
												d="M17.1269 12.75H5V11.25H17.1269L11.4308 5.55383L12.5 4.5L20 12L12.5 19.5L11.4308 18.4461L17.1269 12.75Z"
												fill="#BF1E2E"
											/>
										</g>
									</svg>
								</a>
								<a href="#" class="link-arrow">
									Learn more about our we help reduce absenteeism
									<svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<mask
											id="it" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="25" height="24"
										>
											<rect x="0.5" width="24" height="24" fill="#D9D9D9"/>
										</mask>
										<g mask="url(#it">
											<path
												d="M17.1269 12.75H5V11.25H17.1269L11.4308 5.55383L12.5 4.5L20 12L12.5 19.5L11.4308 18.4461L17.1269 12.75Z"
												fill="#BF1E2E"
											/>
										</g>
									</svg>
								</a>
							</div>
						</div>
						<div class="dual-image-text-img">
							<img src="<?php echo THEME_URI?>/static/img/dual361/it1.jpg" alt="">
						</div>
					</div>				
				</div>
				<div class="dual-image-text-item reverse">
					<div class="dual-image-text-wrapper">
						<div class="dual-image-text-inner">
							<h2>
								Member Advocacy 
							</h2>
							<div class="dual-image-text-paragraphs">
								<p>
									Our Member Advocacy program addresses employees’ healthcare needs, encompassing a wide range of support for medical decisions to everyday healthcare navigation. Our advocates help resolve pharmacy issues, assist with billing problems, and ensure comprehensive support for healthcare needs including social determinants of health. 
								</p>
								<p>
									Member Advocacy is a foundational element of our member services, offering comprehensive support for medical care and optimizing health outcomes. Our highly skilled patient advocates stand as a beacon of support, playing a crucial role in helping your employees avoid costly hospital readmissions and emergency visits. With individualized support, our advocates guide your employees throughout their healthcare journeys. 
								</p>
							</div>
							<div class="dual-image-text-links">
								<a href="#" class="link-arrow">
									Learn more about our Member Advocacy program
									<svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<mask
											id="it" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="25" height="24"
										>
											<rect x="0.5" width="24" height="24" fill="#D9D9D9"/>
										</mask>
										<g mask="url(#it">
											<path
												d="M17.1269 12.75H5V11.25H17.1269L11.4308 5.55383L12.5 4.5L20 12L12.5 19.5L11.4308 18.4461L17.1269 12.75Z"
												fill="#BF1E2E"
											/>
										</g>
									</svg>
								</a>
								<a href="#" class="link-arrow">
									Learn more about how we help prevent avoidable rehospitalizations
									<svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<mask
											id="it" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="25" height="24"
										>
											<rect x="0.5" width="24" height="24" fill="#D9D9D9"/>
										</mask>
										<g mask="url(#it">
											<path
												d="M17.1269 12.75H5V11.25H17.1269L11.4308 5.55383L12.5 4.5L20 12L12.5 19.5L11.4308 18.4461L17.1269 12.75Z"
												fill="#BF1E2E"
											/>
										</g>
									</svg>
								</a>
							</div>
						</div>
						<div class="dual-image-text-img">
							<img src="<?php echo THEME_URI?>/static/img/dual361/it2.jpg" alt="">
						</div>
					</div>
				</div>
				<div class="dual-image-text-item">
					<div class="dual-image-text-wrapper">
						<div class="dual-image-text-inner">
							<h2>
								Member Engagement 
							</h2>
							<div class="dual-image-text-paragraphs">
								<p>
									Member Engagement complements our Member Advocacy program by focusing on comprehensive educational activities and outreach. As a vital service area, member engagement fosters employee health through a variety of tools and motivational campaigns designed to maximize your employees’ involvement in their own health management. 
								</p>
							</div>
							<div class="dual-image-text-links">
								<a href="#" class="link-arrow">
									Learn more about our Member Engagement program
									<svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<mask
											id="it" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="25" height="24"
										>
											<rect x="0.5" width="24" height="24" fill="#D9D9D9"/>
										</mask>
										<g mask="url(#it">
											<path
												d="M17.1269 12.75H5V11.25H17.1269L11.4308 5.55383L12.5 4.5L20 12L12.5 19.5L11.4308 18.4461L17.1269 12.75Z"
												fill="#BF1E2E"
											/>
										</g>
									</svg>
								</a>
							</div>
						</div>
						<div class="dual-image-text-img">
							<img src="<?php echo THEME_URI?>/static/img/dual361/it3.jpg" alt="">
						</div>
					</div>				
				</div>
			</div>
		</div>
	</section>
	<section class="learn-more">
		<div class="container">
			<div class="learn-more-wrapper">
				<svg class="learn-more-img" width="720" height="379" viewBox="0 0 720 379" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M424.331 88.6539C427.192 88.4984 430.053 88.4673 432.914 88.6539C444.515 89.4314 455.991 91.3596 466.783 95.7137C474.558 98.8549 482.364 102.805 488.895 107.998C503.544 119.599 506.25 137.699 496.888 154.307C489.424 167.556 478.135 176.979 465.508 184.91C440.721 200.429 413.414 208.795 384.646 212.745C362.036 215.855 339.488 215.793 317.252 209.853C304.127 206.338 291.936 200.834 282.699 189.917C274.675 180.432 272.467 167.152 276.976 155.582C283.196 139.597 295.232 128.991 308.854 119.941C322.445 110.922 337.28 104.422 352.799 99.508C356.252 98.4194 380.51 91.2041 424.331 88.6228V88.6539ZM238.505 141.4C239.003 142.8 238.318 144.355 236.95 145.008C199.474 162.331 183.395 175.642 166.725 195.609C160.038 204.41 155.155 214.02 153.383 225.061C151.486 236.91 154.782 246.987 163.615 255.073C174.78 265.305 188.651 269.659 203.112 272.676C224.323 277.123 245.596 275.506 266.869 273.142C350.342 263.781 426.725 233.178 500.558 195.142C518.223 186.061 535.64 176.326 552.403 165.69C573.955 152.037 591.372 134.216 600.733 109.896C603.874 101.747 605.989 93.1946 608.788 84.1443C598.649 83.118 589.661 82.185 579.678 81.1897C596.223 62.9648 612.116 45.4241 628.537 27.3236C634.104 47.6633 639.422 67.1634 644.958 87.3166L619.953 85.2017C618.958 89.5869 618.087 93.7855 617.061 97.9218C609.783 126.752 593.331 149.393 570.13 167.587C551.439 182.204 530.477 193.058 509.546 203.944C460.19 229.57 409.465 251.838 355.847 267.109C314.328 278.927 272.187 286.982 228.833 286.92C207.591 286.889 186.94 283.095 168.062 272.676C144.021 259.396 135.749 237.315 144.923 211.47C150.988 194.334 163.957 180.369 177.33 168.582C183.053 163.544 211.727 143.577 232.378 133.625C233.933 132.879 235.768 133.687 236.328 135.305L238.505 141.494V141.4ZM178.045 146.532C131.021 172.314 82.4734 206.463 45.6815 246.023C32.1838 260.547 20.2723 276.284 14.4565 295.659C9.51153 312.142 10.1335 327.755 23.1958 340.755C31.3441 348.841 41.514 353.631 52.2437 357.238C67.8562 362.463 84.0285 364.765 100.418 366.04C127.103 368.092 153.632 366.257 180.533 362.183C181.249 365.822 181.964 369.367 182.804 373.659C173.069 374.841 163.739 376.303 154.347 377.049C125.61 379.382 96.9352 379.102 68.5093 373.473C54.1097 370.643 40.1767 366.382 27.5498 358.669C4.03783 344.3 -4.54593 322.779 2.2651 296.063C7.24119 276.626 17.9709 260.391 30.691 245.338C53.7987 218.032 81.4782 195.889 110.651 175.58C274.768 64.1155 443.986 22.8762 454.685 20.1705C489.269 11.4312 524.195 4.49578 559.774 1.60343C594.14 -1.19562 628.444 -1.22672 661.939 8.94316C678.422 13.9503 693.164 21.9121 706.195 33.4504C715.494 41.692 718.697 52.0796 719.693 63.6801C721.652 86.1658 714.063 105.946 702.028 124.326C685.669 149.362 664.023 169.422 640.697 187.74C602.133 218.001 559.68 241.917 515.953 263.719C465.228 289.004 412.979 310.681 359.455 329.31C354.697 330.958 353.701 332.887 355.225 337.521C357.278 343.678 358.584 350.085 360.357 357.021C337.56 354.533 315.448 352.138 292.184 349.619C309.756 330.803 326.613 312.733 344.029 294.073C346.424 303.092 348.57 311.241 350.871 320.011C354.075 318.922 357.029 317.989 359.984 316.932C435.029 290.03 507.898 258.401 576.444 217.472C609.348 197.848 640.542 175.86 667.413 148.336C683.429 131.915 697.58 114.187 704.889 91.9505C708.932 79.6347 709.865 67.1012 706.133 54.5988C705.169 51.3332 702.307 46.637 699.944 44.149C684.829 28.3188 665.267 20.8547 644.336 16.4384C616.252 10.4671 587.92 10.7159 559.494 13.2661C514.864 17.2781 436.273 30.3403 299.275 86.5701C266.806 99.8812 218.787 124.171 177.952 146.563L178.045 146.532ZM357.247 110.549C338.804 116.333 322.165 123.829 307.952 135.678C301.639 140.965 295.73 147.185 291.22 154.058C282.792 166.934 285.405 180.027 298.373 188.238C306.211 193.214 315.23 197.381 324.249 199.216C369.687 208.453 412.575 199.838 453.161 178.441C465.601 171.879 476.766 163.451 484.697 151.508C494.431 136.891 491.788 123.611 477.295 113.783C475.584 112.601 473.749 111.575 471.883 110.642C458.075 103.769 443.302 101.53 428.032 101.063C423.46 100.908 383.309 103.458 357.185 110.518L357.247 110.549Z" fill="#4D5765"/>
				</svg>
				<h2>Learn more about MEMBER361</h2>
				<div class="learn-more-subtitle">
					Empowering Proactive Healthcare Management
				</div>
				<a href="#" class="link-big">
					<span class="link-big-inner">
						<div class="link-big-first-img">
							<svg width="96" height="52" viewBox="0 0 96 52" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path
									d="M56.5774 12.5921C56.9589 12.5713 57.3404 12.5672 57.7219 12.5921C59.2687 12.6957 60.7988 12.9528 62.2377 13.5334C63.2744 13.9522 64.3152 14.4788 65.1861 15.1713C67.1392 16.7181 67.4999 19.1315 66.2518 21.3458C65.2566 23.1123 63.7513 24.3688 62.0677 25.4262C58.7628 27.4954 55.1219 28.6109 51.2862 29.1376C48.2715 29.5522 45.2651 29.5439 42.3002 28.7519C40.5503 28.2833 38.9248 27.5494 37.6932 26.0938C36.6233 24.8291 36.3289 23.0584 36.9302 21.5158C37.7595 19.3844 39.3643 17.9704 41.1806 16.7637C42.9927 15.5611 44.9707 14.6945 47.0399 14.0393C47.5002 13.8941 50.7347 12.9321 56.5774 12.5879V12.5921ZM31.8007 19.6249C31.867 19.8115 31.7758 20.0189 31.5933 20.106C26.5965 22.4157 24.4526 24.1905 22.23 26.8527C21.3384 28.0262 20.6874 29.3076 20.451 30.7797C20.1981 32.3596 20.6376 33.7031 21.8153 34.7813C23.304 36.1455 25.1534 36.7261 27.0817 37.1283C29.9097 37.7213 32.7461 37.5057 35.5825 37.1905C46.7123 35.9424 56.8967 31.862 66.7411 26.7905C69.0964 25.5797 71.4186 24.2817 73.6537 22.8635C76.5274 21.0431 78.8496 18.667 80.0977 15.4243C80.5166 14.3378 80.7985 13.1975 81.1717 11.9908C79.8199 11.8539 78.6215 11.7295 77.2904 11.5968C79.4965 9.16685 81.6154 6.82809 83.8049 4.41469C84.5472 7.12666 85.2563 9.72666 85.9944 12.4138L82.6604 12.1318C82.5277 12.7165 82.4116 13.2763 82.2748 13.8278C81.3044 17.6718 79.1108 20.6906 76.0173 23.1165C73.5252 25.0655 70.7303 26.5127 67.9395 27.964C61.3586 31.3809 54.5953 34.35 47.4463 36.3861C41.9104 37.9618 36.2916 39.0358 30.511 39.0275C27.6788 39.0234 24.9254 38.5175 22.4083 37.1283C19.2029 35.3577 18.0998 32.4135 19.3231 28.9675C20.1317 26.6827 21.8609 24.8208 23.644 23.2492C24.407 22.5774 28.2303 19.9152 30.9837 18.5882C31.1911 18.4887 31.4357 18.5965 31.5104 18.8122L31.8007 19.6374V19.6249ZM23.7394 20.3091C17.4695 23.7468 10.9965 28.2999 6.09086 33.5746C4.29118 35.5111 2.70298 37.6093 1.92754 40.1928C1.2682 42.3905 1.35114 44.4722 3.09277 46.2055C4.17922 47.2837 5.5352 47.9223 6.96583 48.4033C9.04749 49.1 11.2038 49.4068 13.3891 49.5768C16.947 49.8505 20.4842 49.6059 24.0711 49.0626C24.1665 49.5478 24.2619 50.0205 24.3738 50.5928C23.0759 50.7504 21.8319 50.9453 20.5796 51.0448C16.748 51.3558 12.9247 51.3185 9.13457 50.5679C7.21463 50.1906 5.35689 49.6225 3.67331 48.5941C0.538377 46.6783 -0.606123 43.8087 0.302013 40.2467C0.965491 37.655 2.39612 35.4904 4.09213 33.4833C7.17316 29.8425 10.8638 26.89 14.7534 24.1822C36.6358 9.32028 59.1982 3.82171 60.6246 3.46094C65.2358 2.29571 69.8926 1.37098 74.6365 0.985336C79.2186 0.612129 83.7925 0.607982 88.2585 1.96397C90.4563 2.63159 92.4219 3.69316 94.1593 5.2316C95.3992 6.33048 95.8263 7.7155 95.959 9.26223C96.2203 12.2603 95.2085 14.8977 93.6037 17.3484C91.4225 20.6865 88.5364 23.3611 85.4263 25.8036C80.2843 29.8384 74.624 33.0272 68.7937 35.9341C62.0304 39.3054 55.0639 42.1956 47.9273 44.6795C47.2929 44.8993 47.1602 45.1564 47.3634 45.7743C47.6371 46.5953 47.8112 47.4496 48.0476 48.3743C45.008 48.0425 42.0597 47.7232 38.9579 47.3874C41.3008 44.8786 43.5484 42.4693 45.8705 39.9813C46.1898 41.1838 46.476 42.2703 46.7828 43.4397C47.2099 43.2945 47.6039 43.1701 47.9978 43.0291C58.0039 39.4422 67.7197 35.225 76.8591 29.7679C81.2464 27.1513 85.4056 24.2195 88.9884 20.5497C91.1239 18.3602 93.0107 15.9965 93.9852 13.0316C94.5243 11.3895 94.6487 9.71837 94.151 8.05138C94.0225 7.61597 93.641 6.98982 93.3258 6.65808C91.3105 4.54739 88.7022 3.55217 85.9115 2.96333C82.167 2.16716 78.3893 2.20033 74.5992 2.54036C68.6486 3.07529 58.1698 4.81692 39.9034 12.3142C35.5742 14.089 29.1716 17.3276 23.727 20.3133L23.7394 20.3091ZM47.6329 15.5114C45.1739 16.2827 42.9554 17.282 41.0603 18.8619C40.2185 19.5669 39.4307 20.3962 38.8294 21.3127C37.7056 23.0294 38.0539 24.7752 39.7831 25.8699C40.8281 26.5334 42.0307 27.0891 43.2332 27.3337C49.2916 28.5653 55.01 27.4167 60.4215 24.5637C62.0802 23.6887 63.5688 22.565 64.6263 20.9726C65.9242 19.0237 65.5717 17.253 63.6393 15.9426C63.4113 15.7851 63.1666 15.6482 62.9178 15.5238C61.0766 14.6074 59.1069 14.3088 57.0709 14.2466C56.4613 14.2259 51.1079 14.5659 47.6246 15.5072L47.6329 15.5114Z"
									fill="#BF1E2E"
								/>
							</svg>
						</div>
						<span class="link-big-info">
							<span class="link-big-title">MEMBER361</span>
							<span class="link-big-text">for employees</span>
						</span>
					</span>
					<div class="link-big-second-img">
						<svg width="72" height="72" viewBox="0 0 72 72" fill="none" xmlns="http://www.w3.org/2000/svg">
							<circle cx="36" cy="36" r="36" fill="#FCF4F5"/>
							<mask
								id="13" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="12" y="12" width="48"
								height="48"
							>
								<rect x="12" y="60" width="48" height="48" transform="rotate(-90 12 60)" fill="#D9D9D9"/>
							</mask>
							<g mask="url(#13">
								<path
									d="M49.2699 36.0005L37.9623 47.3081L35.8546 45.2005L45.0239 36.0005L35.8546 26.8005L37.9623 24.6928L49.2699 36.0005ZM37.3084 36.0005L26.0007 47.3081L23.8931 45.2005L33.0623 36.0005L23.8931 26.8005L26.0007 24.6928L37.3084 36.0005Z"
									fill="#BF1E2E"
								/>
							</g>
						</svg>
					</div>
				</a>
			</div>
		</div>
	</section>
</main>
<?php
get_footer();

