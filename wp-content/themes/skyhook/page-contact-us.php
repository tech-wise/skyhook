<?php get_header(); ?>

	<section class="get-in-touch">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-xl-5 col-md-6 text">
<!-- 					<h1>Get in touch with <span>our friendly team.</span></h1>
					<p>A wealth of styles and elements makes Ollie perfect for building websites for small, medium and large businesses.</p> -->
					<?php the_field('form_1_text');?> 
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

    <!--GET FOOTER foorm -->
    <?php get_template_part('template-parts/footer-contact-form') ?>
<?php
get_footer();