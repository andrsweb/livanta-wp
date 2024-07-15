<?php

/**
 * Footer DUAL361 template.
 *
 * @see Options -> Footer DUAL361.
 *
 * @package WordPress
 * @subpackage livanta
 */

$logo = get_field( 'logo_dual', 'option' );
?>

<footer class="footer-dual">
	<div class="container">
		<div class="footer-dual-wrapper">
			<div class="footer-dual-row">
				<div class="footer-dual-col">
					<a href="/" class="footer-dual-logo">
						<img src="<?php echo THEME_URI ?>/static/img/dual361/logo-footer.png" alt="">
					</a>
				</div>
				<div class="footer-dual-col">
					<nav class="footer-dual-nav">
						<ul id="footer-dual-top-1" class="menu">
							<li id="menu-item-243" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-243">
								<a href="#">About</a>
							</li>
							<li id="menu-item-2431" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-243">
								<a href="#">The DUAL361 Difference </a>
							</li>
						</ul>
					</nav>
				</div>
				<div class="footer-dual-col">
					<nav class="footer-dual-nav">
						<ul id="footer-dual-top-2" class="menu">
							<li id="menu-item-2432" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-575">
								<a href="#">Together in Health</a>
								<ul class="sub-menu">
									<li id="menu-item-2433" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-243">
										<a href="#">Member Health </a>
									</li>
									<li id="menu-item-2434" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-243">
										<a href="#">Absenteeism Reduction</a>
									</li>
									<li id="menu-item-24344" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-243">
										<a href="#">Member Advocacy</a>
									</li>
									<li id="menu-item-24355" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-243">
										<a href="#">Member Engagement</a>
									</li>
								</ul>
							</li>
						</ul>
					</nav>
					<a href="#" class="link-full">
						MEMBER361 Log In 
						<svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<mask id="mask0_402_303a" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="25" height="24">
								<rect x="0.5" width="24" height="24" fill="#D9D9D9"/>
							</mask>
							<g mask="url(#mask0_402_303a)">
								<path d="M17.1269 12.75H5V11.25H17.1269L11.4308 5.55383L12.5 4.5L20 12L12.5 19.5L11.4308 18.4461L17.1269 12.75Z" fill="#BF1E2E"/>
							</g>
						</svg>	
					</a>
				</div>
				<div class="footer-dual-col">
					<nav class="footer-dual-nav">
						<ul id="footer-dual-top-3" class="menu">
							<li id="menu-item-24366" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-575">
								<a href="#">Stronger in Business </a>
								<ul class="sub-menu">
									<li id="menu-item-24312" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-243">
									<a href="#">Analytics and Forecasting</a>
									</li>
									<li id="menu-item-243252" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-243">
										<a href="#">Provider Report Cards</a>
									</li>
									<li id="menu-item-243333" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-243">
										<a href="#">Network Optimization</a>
									</li>
									<li id="menu-item-2434444" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-243">
										<a href="#">Claims Analysis</a>
									</li>
									<li id="menu-item-2431231" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-243">
										<a href="#">Pharmacy Benefits Management</a>
									</li>
								</ul>
							</li>
						</ul>
					</nav>
					<a href="#" class="link-full blue">
						EMPOWER361 Log In 
						<svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<mask id="mask0_402_303a" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="25" height="24">
								<rect x="0.5" width="24" height="24" fill="#D9D9D9"/>
							</mask>
							<g mask="url(#mask0_402_303a)">
								<path d="M17.1269 12.75H5V11.25H17.1269L11.4308 5.55383L12.5 4.5L20 12L12.5 19.5L11.4308 18.4461L17.1269 12.75Z" fill="#BF1E2E"/>
							</g>
						</svg>	
					</a>
				</div>
			</div>
		</div>
	</div>
</footer>

<?php wp_footer() ?>
</div><!-- .wrapper -->
</body>
</html>
