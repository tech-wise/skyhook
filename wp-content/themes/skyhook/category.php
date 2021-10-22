<?php get_header();  ?>

<!--get category name -->
<?php $page_object = get_queried_object(); ?>
<?php $cat_name = $page_object->cat_name;
// echo $cat_name;
?>
<!--get category name-->

<!--Banner section start-->
<section class="learn-banner">
	<div class="container">
		<div class="row">
			<div class="col-md-12 page-heading">
				<h1>Questions & Answers</h1>
			</div>
		</div>
	</div>
</section>
<!--Banner section end-->

<!--Faq Detail section start-->

<!----faq list section--->
<section class="faq-list mt-5">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<h1>Articles Help Center</h1>
				   <div class="faq-box">				
					<!-- for loop start -->
                    <?php    $args = array(
                            'post_type' => 'post',
                            'post_status' => 'publish',
                            'posts_per_page' => -1,
                            'category_name' => $cat_name,
                            'orderby' => 'title',
                            'order' => 'ASC',
                        );
                        $loop = new WP_Query( $args );
                        while ( $loop->have_posts() ) : $loop->the_post(); ?>
                            <h4><?php the_title(); ?></h4>
                    	    <p><?php the_content(); ?></p>
                        <?php endwhile;  
                        wp_reset_postdata(); ?>
                    <!-- for loop end -->
				 <div class="divider"> 
			     </div>
		     </div>
		</div>
			<div class="col-md-4 flex">
				 <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/7ht_24.png" class="img-fluid">
			</div>
		</div>
	</div>
	<!--<div class="container">-->
	<!--	<div class="row">-->
	<!--		<div class="col-md-8">-->
	<!--			<div class="box-list pb-4">-->
	<!--			     <h4>Do i need to enter my credit card details to sign up?</h4>-->
	<!--			      <p>Not a problem,Sign up for the 30 days free trail account for the busniesses and if you are-->
	<!--				     satisfied you can explore the subscription plans available.</p>-->
	<!--		    </div>-->
	<!--		</div>-->
	<!--	</div>-->
	<!--</div>-->
	
      
</section>

<?php get_template_part('template-parts/getin-tuch'); ?>	

<?php get_footer(); ?>



