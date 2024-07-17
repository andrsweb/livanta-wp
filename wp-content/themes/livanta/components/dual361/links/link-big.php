<?php

/**
 * Link layout, type big.
 *
 * @package WordPress
 * @subpackage livanta
 */

$id = 'mask-' . mt_rand( 10000, 99999 ) . '-' . mt_rand( 10000, 99999 );
?>

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
				 <!--Этот текст может меняться  -->
				for employees
			</span>
		</span>
	</span>
	<div class="link-big-second-img">
		<svg width="72" height="72" viewBox="0 0 72 72" fill="none" xmlns="http://www.w3.org/2000/svg">
			<circle cx="36" cy="36" r="36" fill="#FCF4F5"/>
			<mask id="<?php echo $id ?>" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="12" y="12" width="48" height="48">
				<rect x="12" y="60" width="48" height="48" transform="rotate(-90 12 60)" fill="#D9D9D9"/>
			</mask>
			<g mask="url(#<?php echo $id ?>)">
				<path d="M49.2699 36.0005L37.9623 47.3081L35.8546 45.2005L45.0239 36.0005L35.8546 26.8005L37.9623 24.6928L49.2699 36.0005ZM37.3084 36.0005L26.0007 47.3081L23.8931 45.2005L33.0623 36.0005L23.8931 26.8005L26.0007 24.6928L37.3084 36.0005Z" fill="#BF1E2E"/>
			</g>
		</svg>
	</div>
</a>
