<?php

/**
 * Link layout, type full.
 *
 * @package    WordPress
 * @subpackage livanta
 */

$id          = 'mask-' . mt_rand( 10000, 99999 ) . '-' . mt_rand( 10000, 99999 );
$title       = $args['title'] ?? '';
$url         = $args['url'] ?? '#';
$target      = $args['target'] ?? '';
$leading_svg = isset( $args['leading_svg'] ) && $args['leading_svg'] === 1;
?>

<a href="<?php echo esc_url( $url ) ?>" class="link-full"<?php echo $target ?>>
	<?php
	if( $leading_svg ){
		?>
		<svg width="46" height="26" viewBox="0 0 46 26" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path
				d="M27.11 6.57537C27.2928 6.56544 27.4756 6.56345 27.6584 6.57537C28.3996 6.62505 29.1328 6.74824 29.8222 7.02642C30.319 7.2271 30.8177 7.47945 31.235 7.81128C32.1709 8.55242 32.3437 9.70884 31.7456 10.7699C31.2688 11.6163 30.5475 12.2184 29.7408 12.7251C28.1572 13.7166 26.4126 14.2511 24.5746 14.5034C23.1301 14.7021 21.6895 14.6981 20.2688 14.3186C19.4303 14.0941 18.6514 13.7424 18.0613 13.045C17.5487 12.439 17.4076 11.5905 17.6957 10.8514C18.0931 9.83005 18.8621 9.15249 19.7324 8.57428C20.6007 7.99805 21.5485 7.58277 22.54 7.26883C22.7605 7.19929 24.3104 6.73831 27.11 6.57339V6.57537ZM15.2378 9.94529C15.2696 10.0347 15.2259 10.1341 15.1385 10.1758C12.7442 11.2825 11.7169 12.133 10.6519 13.4086C10.2247 13.9709 9.91271 14.5849 9.79945 15.2903C9.67824 16.0473 9.88886 16.6911 10.4532 17.2077C11.1665 17.8614 12.0527 18.1396 12.9766 18.3323C14.3317 18.6165 15.6908 18.5131 17.0499 18.3621C22.383 17.7641 27.263 15.8089 31.9801 13.3788C33.1087 12.7986 34.2214 12.1767 35.2924 11.4971C36.6694 10.6248 37.7821 9.4863 38.3802 7.93248C38.5809 7.41189 38.716 6.86547 38.8948 6.28726C38.247 6.22169 37.6728 6.16208 37.035 6.0985C38.0921 4.93413 39.1074 3.81347 40.1565 2.65705C40.5122 3.95654 40.852 5.20237 41.2057 6.48993L39.6081 6.35482C39.5445 6.63498 39.4889 6.90323 39.4233 7.16749C38.9584 9.00943 37.9073 10.4559 36.425 11.6183C35.2308 12.5522 33.8916 13.2457 32.5543 13.9411C29.401 15.5784 26.1602 17.0011 22.7347 17.9767C20.0821 18.7317 17.3897 19.2463 14.6199 19.2424C13.2628 19.2404 11.9434 18.998 10.7373 18.3323C9.20137 17.4839 8.67283 16.0731 9.25899 14.422C9.64645 13.3271 10.475 12.435 11.3294 11.6819C11.695 11.36 13.527 10.0844 14.8464 9.44855C14.9457 9.40086 15.063 9.45252 15.0987 9.55584L15.2378 9.95125V9.94529ZM11.3751 10.2731C8.37081 11.9204 5.26914 14.1021 2.91854 16.6295C2.05619 17.5574 1.29518 18.5628 0.923611 19.8007C0.607681 20.8538 0.64742 21.8513 1.48195 22.6818C2.00254 23.1984 2.65228 23.5044 3.33779 23.7349C4.33525 24.0687 5.36848 24.2158 6.41562 24.2972C8.12045 24.4284 9.81535 24.3112 11.5341 24.0509C11.5798 24.2833 11.6255 24.5099 11.6791 24.7841C11.0572 24.8596 10.4611 24.9529 9.86105 25.0006C8.02508 25.1497 6.19308 25.1318 4.37698 24.7721C3.45701 24.5913 2.56684 24.3191 1.76013 23.8263C0.257972 22.9083 -0.290434 21.5334 0.144714 19.8265C0.462631 18.5847 1.14814 17.5475 1.96081 16.5858C3.43714 14.8412 5.20555 13.4265 7.06934 12.129C17.5546 5.00765 28.3658 2.37291 29.0493 2.20004C31.2588 1.6417 33.4902 1.19861 35.7633 1.01382C37.9589 0.83499 40.1506 0.833003 42.2905 1.48275C43.3436 1.80265 44.2855 2.31132 45.118 3.04849C45.7121 3.57504 45.9168 4.23869 45.9804 4.97983C46.1055 6.41642 45.6207 7.68014 44.8518 8.85444C43.8066 10.454 42.4237 11.7356 40.9334 12.9059C38.4696 14.8392 35.7574 16.3672 32.9637 17.7601C29.7229 19.3755 26.3848 20.7604 22.9652 21.9506C22.6612 22.0559 22.5976 22.1791 22.6949 22.4752C22.8261 22.8686 22.9095 23.2779 23.0228 23.721C21.5663 23.5621 20.1536 23.4091 18.6673 23.2481C19.79 22.046 20.8669 20.8916 21.9796 19.6994C22.1326 20.2756 22.2697 20.7962 22.4168 21.3565C22.6214 21.287 22.8102 21.2274 22.999 21.1598C27.7935 19.4411 32.449 17.4203 36.8283 14.8054C38.9306 13.5517 40.9235 12.1469 42.6403 10.3884C43.6635 9.33926 44.5676 8.20669 45.0346 6.78599C45.2929 5.99915 45.3525 5.1984 45.114 4.39963C45.0524 4.191 44.8696 3.89096 44.7186 3.73201C43.753 2.72063 42.5031 2.24376 41.1659 1.96161C39.3717 1.58011 37.5615 1.596 35.7454 1.75894C32.8941 2.01526 27.873 2.84979 19.1204 6.44225C17.046 7.29267 13.9781 8.84451 11.3692 10.2751L11.3751 10.2731ZM22.8241 7.97421C21.6458 8.34379 20.5828 8.82265 19.6747 9.57969C19.2714 9.91748 18.8939 10.3149 18.6057 10.754C18.0673 11.5766 18.2342 12.4131 19.0627 12.9377C19.5635 13.2556 20.1397 13.5219 20.7159 13.6391C23.6189 14.2292 26.3589 13.6788 28.9519 12.3118C29.7467 11.8925 30.4601 11.3541 30.9667 10.5911C31.5887 9.65718 31.4198 8.80874 30.4938 8.18085C30.3846 8.10535 30.2673 8.03978 30.1481 7.98017C29.2659 7.54105 28.3221 7.39798 27.3465 7.36818C27.0544 7.35824 24.4892 7.52118 22.8201 7.97222L22.8241 7.97421Z"
				fill="white"
			/>
		</svg>
		<?php
	}

	if( $title ) echo esc_html( $title );
	?>

	<svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
		<mask
			id="<?php echo $id ?>" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="25" height="24"
		>
			<rect x="0.5" width="24" height="24" fill="#D9D9D9"/>
		</mask>
		<g mask="url(#<?php echo $id ?>)">
			<path
				d="M17.1269 12.75H5V11.25H17.1269L11.4308 5.55383L12.5 4.5L20 12L12.5 19.5L11.4308 18.4461L17.1269 12.75Z"
				fill="#BF1E2E"
			/>
		</g>
	</svg>
</a>
