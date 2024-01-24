<?php

/**
 * Template name: Contact
 *
 * @package WordPress
 * @subpackage livanta
 */

get_header();

$page_id	= get_the_ID();
$form_id	= get_field( 'contact_form' );
$map_src	= get_field( 'map_src' );
$info		= get_field( 'contacts_info' );
?>

<main class="main">
	<section class="contact-hero">
		<?php
		if( has_post_thumbnail() )
			echo '<div class="contact__img">', get_the_post_thumbnail( $page_id, 'full-hd' ), '</div>';
		?>

		<div class="container">
			<div class="contact__wrapper">
				<div class="contact__left">
					<h1 class="h1"><?php the_title() ?></h1>

					<div class="contact__info"><?php the_content() ?></div>

					<?php get_template_part( 'components/contact-learn-links', null, ['class' => 'desktop'] ) ?>
				</div>

				<?php if( $form_id ) echo do_shortcode( "[contact-form-7 id=\"$form_id\" html_class=\"form box-shadow-wrapper\"]" ); /*

				<form class="box-shadow-wrapper form" data-type="contact-form">
					<fieldset>
						<legend>Send us a message</legend>
						<label for="name">Full name</label> <input type="text" name="name" id="name"
																   placeholder="Full name"> <label for="phone">Mobile
							phone</label> <input type="tel" name="phone" id="phone" placeholder="Mobile phone"> <label
								for="email">Email address</label> <input type="email" name="email" id="email"
																		 placeholder="Email address">
						<div class="radio__wrapper">
							<div class="radio__title">Subject</div>
							<div class="radio__buttons">
								<div class="radio"><input type="radio" name="business" id="business"
														  value="business" checked="checked"> <label for="business">Business
										Inquiries</label></div>
								<div class="radio"><input type="radio" name="business" value="papers" id="papers">
									<label for="papers">Request White Paper(s)</label></div>
							</div>
						</div>
						<label for="text">Your message</label> <textarea name="text" id="text"
																		 placeholder="Your message"></textarea>
						<label for="captcha">Capcha</label>
						<div class="captcha__wrapper"><input type="text" name="captcha" id="captcha"
															 placeholder="Enter the CAPCHA code">
							<div class="captcha__items">123456</div>
						</div>
						<div class="required">*This contact form should be used for administrative contact only.
							Please do not include any identifiable health information in your message.
						</div>
						<button class="button" tabindex="0">submit</button>
					</fieldset>
					<div class="form-response"></div>
				</form>

				<?php */get_template_part( 'components/contact-learn-links', null, ['class' => 'mobile'] ) ?>
			</div>
		</div>
	</section>

	<section class="map">
		<div class="container">
			<div class="map__wrapper">
				<?php
				if( $map_src )
					echo '<iframe
						class="iframe-map"
						src="about:blank"
						width="700"
						height="692"
						loading="lazy"
						data-src="', esc_url( $map_src ), '"
					></iframe>';

				if( $info ){
					?>
					<div class="map__contacts">
						<?php
						foreach( $info as $item ){
							$icon	= $item['icon'];
							$title	= $item['title'];
							$text	= $item['text'];

							if( ! $title && ! $text ) continue;
							?>
							<div class="map__contact_wrapper">
								<div class="map__contact_item">
									<?php
									if( $icon ) echo wp_get_attachment_image( $icon, 'contact-icon', true, ['loading' => 'lazy'] );

									if( $title ) echo esc_html( $title );
									?>
								</div>

								<?php if( $text ) echo '<div class="map__contact_text">', $text, '</div>' ?>
							</div>
							<?php
						}
						?>
					</div>
					<?php
				}
				?>
			</div>
		</div>
	</section>
</main>

<?php
get_footer();

