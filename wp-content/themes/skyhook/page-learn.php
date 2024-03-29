<?php get_header(); ?>


<!-- Learn Banner Start -->
	<section class="learn-banner">
		<div class="container">
			<div class="row">
				<div class="col-md-12 page-heading">
					<h1><?php the_title();?></h1>
				</div>
			</div>
		</div>
	</section>
<!-- Learn Banner End -->

<!-- Help Center Section Start -->
	<section class="help-center">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center heading">
					<h2>Help Center</h2>
				</div>
				<div class="col-md-4 text-center">
					<div class="box box-1">
						<img src="<?php the_field('help_center_box_1_image');?>">
						<?php the_field('help_center_box_1_text');?>
					</div>
				</div>
				<div class="col-md-4 text-center">
					<div class="box box-2">
						<img src="<?php the_field('help_center_box_2_image');?>">
						<?php the_field('help_center_box_2_text');?>
					</div>
				</div>
				<div class="col-md-4 text-center">
					<div class="box box-3">
						<img src="<?php the_field('help_center_box_3_image');?>">
						<?php the_field('help_center_box_3_text');?>
					</div>
				</div>
				<div class="col-md-4 text-center">
					<div class="box box-4">
						<img src="<?php the_field('help_center_box_4_image');?>">
						<?php the_field('help_center_box_4_text');?>
					</div>
				</div>
				<div class="col-md-4 text-center">
					<div class="box box-5">
						<img src="<?php the_field('help_center_box_5_image');?>">
						<?php the_field('help_center_box_5_text');?>
					</div>
				</div>
				<div class="col-md-4 text-center">
					<div class="box box-6">
						<img src="<?php the_field('help_center_box_6_image');?>">
						<?php the_field('help_center_box_6_text');?>
					</div>
				</div>
			</div>
		</div>
	</section>
<!-- Help Center Section End -->


<!-- 	Why Skyhook Section Start -->
	<section class="why-skyhook">
		<div class="container">
			<div class="row">
				<div class="col-md-6 work-text skyhook-primary-button skyhook-primary-para">
					<h5><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/small-logo.png"> <?php the_field('why_skyook_subheading');?></h5>
					<?php the_field('why_skyook_text');?>
					<a href="#">Learn More</a>
					<div class="text-img">
						<img src="<?php the_field('why_skyook_image');?>">
					</div>
				</div>
				<div class="col-md-6 work-img">
					<img src="<?php the_field('why_skyook_image_2');?>">
				</div>
			</div>
		</div>
	</section>
<!-- 	Why Skyhook Section End -->

<!-- 	Customer Stories Section Start -->
	<section class="customer-stories">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center heading">
					<h2>Customer Stories</h2>
				</div>
				<!--loop start-->
				<?php
				    $args = array(
				        'post_type' => 'customerstorie',
				        'post_status' => 'publish',
				        'posts_per_page' => '-1',
				        'order' => 'ASC',
				    
				    );
				    $count=0;
				    $loop = new WP_Query($args);
				    while($loop->have_posts()): $loop->the_post(); ?>
				    <?php if($count%2==0){ ?>
				    <div class="col-md-4 stories">
				        <a href="<?php echo get_permalink()?>">
    					<div class="stories-box">
    						<?php the_post_thumbnail(); ?>
    						<?php the_content(); ?>
    					</div>
    					</a>
    				<?php $count++;} else{?>
    				<a href="<?php echo get_permalink()?>">
    				<div class="stories-box">
    						 <?php the_post_thumbnail(); ?>
    						 <?php the_content(); ?>
    					</div>
				    </div>
				    </a>
    				
				<?php  $count++; } 
				    endwhile;
				    wp_reset_postdata();
				?>
				<!--loop end-->
				
				
				<!--<div class="col-md-4 stories">-->
				<!--	<div class="stories-box">-->
				<!--		<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/stories-1.png" />-->
				<!--		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy. text ever since the 1500s, when an unknown printer took a galley of type and scrambled.</p>-->
				<!--	</div>-->
				<!--	<div class="stories-box">-->
				<!--		<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/stories-4.png" />-->
				<!--		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>-->
				<!--	</div>-->
				<!--</div>-->
				<!--<div class="col-md-4 stories">-->
				<!--	<div class="stories-box">-->
				<!--		<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/stories-2.png" />-->
				<!--		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>-->
				<!--	</div>-->
				<!--	<div class="stories-box">-->
				<!--		<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/stories-5.png" />-->
				<!--		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type.</p>-->
				<!--	</div>-->
				<!--</div>-->
				<!--<div class="col-md-4 stories">-->
				<!--	<div class="stories-box">-->
				<!--		<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/stories-3.png" />-->
				<!--		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy. text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>-->
				<!--	</div>-->
				<!--	<div class="stories-box">-->
				<!--		<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/stories-6.png" />-->
				<!--		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>-->
				<!--	</div>-->
				<!--</div>-->
				<div class="col-md-12 text-center stories-btn skyhook-primary-button">
					<a href="https://technologywisdom.com/devp/wp-skyhook/customerstorie/iberia/">More Customer Stories</a>
				</div>
			</div>
		</div>
	</section>
<!-- 	Customer Stories Section End -->

<!-- Easa-guide Section Start -->
<section class="easa-guide pricing">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="row justify-content-center faq-box">
                    <div class="col-md-12 heading">
                        <h1>Questions & Answers before buying</h1>
                    </div>
                    
                    <!--<div class="col-md-3 box fq-tail">-->
                    <!--    <a href="#">Article help center</a>-->
                    <!--</div>-->
                    <!--<div class="col-md-3 box fq-tail">-->
                    <!--    <a href="#">Custom Bots</a>-->
                    <!--</div>-->
                    <!--<div class="col-md-3 box fq-tail">-->
                    <!--    <a href="#">Reporting</a>-->
                    <!--</div>-->
                    <!--<div class="col-md-3 box fq-tail">-->
                    <!--    <a href="#">Commitment</a>-->
                    <!--</div>-->
                    <!--<div class="col-md-3 box fq-tail">-->
                    <!--    <a href="#">Payment Do You Accept</a>-->
                    <!--</div>-->
                    <!--<div class="col-md-3 box fq-tail">-->
                    <!--    <a href="#">Support Opations</a>-->
                    <!--</div>-->
                    <!--<div class="col-md-3 box fq-tail">-->
                    <!--        <a href="#">Owns My Data</a>-->
                    <!--</div>-->
                    <!--<div class="col-md-3 box fq-tail">-->
                    <!--        <a href="#">Free Trial Work</a>-->
                    <!--</div>-->
                    <?php 
                        $categories = get_categories();
                        foreach($categories as $category) {
                           echo '<div class="col-md-3 box fq-tail"><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></div>';
                        }
                    ?>
                    
                </div>
            </div>
        </div>
    </div>
</section>
<!--<section class="easa-guide">-->
<!--    <div class="container">-->
<!--        <div class="row justify-content-center">-->
<!--            <div class="col-md-12 text-center heading">-->
<!--                <h1>EASA Guides</h1>-->
<!--            </div>-->
<!--            <div class="col-md-3 text-center">-->
<!--                <div class="box box-1 active">-->
<!--                    <a href="#">Article help center</a>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-md-3 text-center">-->
<!--                <div class="box box-2">-->
<!--                    <a href="#">Custom Bots</a>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-md-3 text-center">-->
<!--                <div class="box box-3">-->
<!--                    <a href="#">The Massenger</a>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-md-3 text-center">-->
<!--                <div class="box box-4">-->
<!--                    <a href="#">Contacts</a>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-md-3 text-center">-->
<!--                <div class="box box-5">-->
<!--                    <a href="#">Inbox</a>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-md-3 text-center">-->
<!--                <div class="box box-6">-->
<!--                    <a href="#">Product Tours</a>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-md-3 text-center">-->
<!--                <div class="box box-7">-->
<!--                    <a href="#">Reporting</a>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-md-3 text-center">-->
<!--                <div class="box box-8">-->

<!--                    <a href="#">Interconnected</a>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->
<!-- Easa-guide Section End -->

	<!-- Easa-guide Section Start -->
<!--<section class="easa-guide">-->
<!--		<div class="container">-->
<!--			<div class="row justify-content-center">-->
<!--				<div class="col-md-12 text-center heading">-->
<!--					<h1>EASA Guides</h1>-->
<!--				</div>-->
<!--				<div class=" col-xl-12 col-md-12 questions">-->
<!--					<div class="panel-group" id="accordion">-->
<!--						<div class="row justify-content-center">-->
							<!-- start panel left -->
<!--							<div class="panel-left col-lg-12 col-md-12">-->
<!--								<div class="panel panel-default">-->
<!--									<div class="panel-heading active">-->
<!--										<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"-->
<!--											href="#faq_1">-->
<!--											<h4 class="panel-title">-->
<!--												Lorem Ipsum is simply dummy text of the printing and typesetting industry.-->
<!--												<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/faq-open.png" class="open">-->
<!--												<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/faq-close.png" class="closed">-->
<!--											</h4>-->
<!--										</a>-->
<!--									</div>-->
<!--									<div id="faq_1" class="panel-collapse collapse in show">-->
<!--										<div class="panel-body">-->
<!--											<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>-->
<!--										</div>-->
<!--									</div>-->
<!--								</div>-->
<!--								<div class="panel panel-default">-->
<!--									<div class="panel-heading">-->
<!--										<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"-->
<!--											href="#faq_2">-->
<!--											<h4 class="panel-title">-->
<!--												Lorem Ipsum is simply dummy text of the printing and typesetting industry.-->
<!--												<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/faq-open.png" class="open">-->
<!--												<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/faq-close.png" class="closed">-->
<!--											</h4>-->
<!--										</a>-->
<!--									</div>-->
<!--									<div id="faq_2" class="panel-collapse collapse in">-->
<!--										<div class="panel-body">-->
<!--											<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>-->
<!--										</div>-->
<!--									</div>-->
<!--								</div>-->
<!--								<div class="panel panel-default">-->
<!--									<div class="panel-heading">-->
<!--										<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#faq_3">-->
<!--											<h4 class="panel-title">-->
<!--												Lorem Ipsum is simply dummy text of the printing and typesetting industry.-->
<!--												<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/faq-open.png" class="open">-->
<!--												<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/faq-close.png" class="closed">-->
<!--											</h4>-->
<!--										</a>-->
<!--									</div>-->
<!--									<div id="faq_3" class="panel-collapse collapse in">-->
<!--										<div class="panel-body">-->
<!--											<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>-->
<!--										</div>-->
<!--									</div>-->
<!--								</div>-->
<!--								<div class="panel panel-default">-->
<!--									<div class="panel-heading">-->
<!--										<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#faq_4">-->
<!--											<h4 class="panel-title">-->
<!--												Lorem Ipsum is simply dummy text of the printing and typesetting industry.-->
<!--												<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/faq-open.png" class="open">-->
<!--												<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/faq-close.png" class="closed">-->
<!--											</h4>-->
<!--										</a>-->
<!--									</div>-->
<!--									<div id="faq_4" class="panel-collapse collapse in">-->
<!--										<div class="panel-body">-->
<!--											<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>-->
<!--										</div>-->
<!--									</div>-->
<!--								</div>-->
<!--								<div class="panel panel-default">-->
<!--									<div class="panel-heading">-->
<!--										<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#faq_5">-->
<!--											<h4 class="panel-title">-->
<!--												Lorem Ipsum is simply dummy text of the printing and typesetting industry.-->
<!--												<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/faq-open.png" class="open">-->
<!--												<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/faq-close.png" class="closed">-->
<!--											</h4>-->
<!--										</a>-->
<!--									</div>-->
<!--									<div id="faq_5" class="panel-collapse collapse in">-->
<!--										<div class="panel-body">-->
<!--											<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>-->
<!--										</div>-->
<!--									</div>-->
<!--								</div>-->
<!--							</div>-->
<!--						</div>-->
<!--					</div>-->
<!--				</div>-->
<!--			</div>-->
<!--		</div>-->
<!--	</section>-->
	<!-- Easa-guide Section End -->	

<!--Entries Section Start-->
<section class="entries-info">
	<div class="plane">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/planeimg.png" alt="plane image">
	</div>
	<div class="container">
		<div class="row justify-content-center entry">
			<div class="col-md-3 daily border-line">
				<h1>163</h1>
				<p>Total Entries Today</p>
			</div>

			<div class="col-md-3 weekly border-line">
				<h1>253</h1>
				<p>Total Entries This Week</p>
			</div>

			<div class="col-md-3 yearly">
				<h1>2,536</h1>
				<p>Total Entries This Year</p>
			</div>
		</div>
	</div>

	<div class="people">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/person.png" alt="persoon image">
	</div>
</section>

<!--Enteries Section End-->
		
	
	
	
	

<?php
get_footer();