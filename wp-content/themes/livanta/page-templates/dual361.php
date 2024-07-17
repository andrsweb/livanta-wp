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
<!-- без модификаторов - дефолтный хиро. На главной странице хиро с имейджем(bg), так же нужно учесть, что есть секции без картинки , но с бекграундом у хиро. если нужен синий h1 - blue. Но у нас роли разные же, правильно от шаблона оттталкиваться наверное в таких вещах? Но на данный момент у нас опять таки нихрена нет. -->
	<section class="hero-dual bg">
		<div class="container">
			<div class="hero-dual-wrapper">
				<div class="hero-dual-info">
					<div class="hero-dual-info-img">
						<img class="hero-dual-bg" src="<?php echo THEME_URI ?> /static/img/dual361/hero-bg.jpg" alt="">
						<!-- Если имейдж не нужен, должна быть возможность изменять цвет бекграунда этого блока. Или можно всего хиро. -->
					</div>
					<!-- Хлебные крошки для остальных херо. Ты там говорил плагин какой-то будет, я хз Стили готовы -->
					<!-- <div class="breadcrumbs">
						<div class="breadcrumb current">
							Home
						</div>
						<div class="breadcrumb">
							Together
						</div>
					</div> -->
					<h1>
						The health of your business is <i>our</i> business. 
						<!-- Тут our должно быть курсивом. Я писал за это. Надо.. -->
					</h1>
					<div class="hero-dual-text">
						<p>
							The DUAL361 promise is a healthier workforce and a healthier bottom line. 
						</p>
						<p>
							With world-class member engagement, powerful patient advocacy, unparalleled claim auditing expertise, absence management, and cutting-edge data wrapping, DUAL361 is a tailored solution to make your business healthier. 
						</p>
						<p>
							We stand with you together in health, stronger in business. 
						</p>
					</div>
					<!-- Так же может быть кнопка, голубая или красная и внутри ссылки ищменяться  текст -->
					<!-- <a href="#" class="link-big">
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
					</a> -->

				</div>
				<div class="hero-dual-img">
					<img class="hero-dual-bg" src="<?php echo THEME_URI ?> /static/img/dual361/hero-img.jpg" alt="">
				</div>
			</div>
		</div>
	</section>
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
					<img src="<?php echo THEME_URI ?> /static/img/dual361/dual-about-bg.svg" alt="">
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
						Learn about DUAL361's state-of-the-art data analytics
						<svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<mask id="a12" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="25" height="24">
								<rect x="0.5" width="24" height="24" fill="#D9D9D9"/>
							</mask>
							<g mask="url(#a12)">
								<path d="M17.1269 12.75H5V11.25H17.1269L11.4308 5.55383L12.5 4.5L20 12L12.5 19.5L11.4308 18.4461L17.1269 12.75Z" fill="#BF1E2E"/>
							</g>
						</svg>	
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
</main>
<?php
get_footer();

