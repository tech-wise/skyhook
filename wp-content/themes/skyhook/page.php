<?php get_header();  ?>



<section class="learn-banner terms-sevices">
    <div class="container">
        <div class="row">
            <div class="col-md-12 page-heading">
                <h1><?php the_title(); ?></h1>
            </div>
        </div>
    </div>
</section>

<section>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<?php 
					while ( have_posts() ) : the_post();
						the_content();
					endwhile; 
				?>
			</div>
		</div>
	</div>
</section>

<?php get_footer();
