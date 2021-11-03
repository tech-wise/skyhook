	<section class="book-demo">
		<div class="container">
			<div class="row justify-content-between">
				<div class="col-xl-4 col-md-5 form-text text-center">
					<?php the_field('form_2_text', 23);?>
					<div class="form skyhook-primary-button">
						<?php echo do_shortcode('[contact-form-7 id="25" title="Book a Demo"]'); ?>
					</div>
				</div>
				<div class="col-md-7 form-img">

					<?php the_post_thumbnail( );?>
				</div>
			</div>
		</div>
	</section>

