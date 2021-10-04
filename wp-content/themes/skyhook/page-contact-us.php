<?php get_header(); ?>

	<section class="get-in-touch">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-xl-5 col-md-6 text">
					<h1>Get in touch with <span>our friendly team.</span></h1>
					<p>A wealth of styles and elements makes Ollie perfect for building websites for small, medium and large businesses.</p>
					<div class="get-in-touch-img">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/get-in-touch-img.png">
					</div>
				</div>
				<div class="col-xl-5 col-md-6 form skyhook-primary-button">
					<?php echo do_shortcode('[contact-form-7 id="6" title="Get in Touch"]'); ?>
				</div>
			</div>
		</div>
	</section>

	<section class="book-demo">
		<div class="container">
			<div class="row justify-content-between">
				<div class="col-xl-4 col-md-5 form-text text-center">
					<h2>Book a Demo</h2>
					<p>Get a live 1:1 demo and your questions answered with one of our customer champions.</p>
					<div class="form skyhook-primary-button">
						<?php echo do_shortcode('[contact-form-7 id="25" title="Book a Demo"]'); ?>
					</div>
				</div>
				<div class="col-md-7 form-img">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/home-banner-img.png"/>
				</div>
			</div>
		</div>
	</section>

<?php
get_footer();