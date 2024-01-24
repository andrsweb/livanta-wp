<?php

/**
 * Tech - ACF Flexible Content section layout.
 *
 * @see Page with ACF Flexible Content template -> Flexible Content -> Tech
 *
 * @package WordPress
 * @subpackage livanta
 */

if( ! $text = get_sub_field( 'text' ) ?: null ) return;
?>

<section class="tech" id="scroll">
	<img class="tech__bg" src="<?php echo THEME_URI ?>/static/img/about/bg.svg" width="500" height="500" alt="" />

	<div class="container">
		<div class="tech__wrapper">
			<div class="tech__inner">
				<p class="tech__text"><?php echo $text ?></p>
			</div>
		</div>
	</div>
</section>

