<?php get_header();
    $page_id = 57;  //Page ID
    $page_data = get_page( $page_id ); 
    $title = $page_data->post_title; 
    $content = apply_filters('the_content', $page_data->post_content); 
    $image= $page_data->post_thumbnail;
    $url = wp_get_attachment_url( get_post_thumbnail_id(57) );
?>
	<!-- Main Banner Section Start -->
	<section class="main-banner">
		<div class="container">
			<div class="row">
				<div class="col-md-6 banner-text skyhook-primary-button">
					<?php echo $content; ?>
				</div>
				<div class="col-md-6 banner-img">
					<img src="<?php echo $url; ?>">
				</div>
			</div>
		</div>
	</section>
	<!-- Main Banner Section End -->

	<!-- Banner Logos Section Start -->
		<section class="banner-logos">
		<div class="container">
			<div class="row d-none d-md-block">
				<div class="col-md-12 logos">
				    <ul>
				    <?php $args = array(
                        'post_type' => 'our_customer_logo',
                        'post_status' => 'publish',
                        'posts_per_page' => -1,
                        'orderby' => 'title',
                        'order' => 'ASC',
                    );
                        $loop = new WP_Query( $args );
                        while ( $loop->have_posts() ) : $loop->the_post(); ?>
                            <li><?php the_content(); ?>
                            </li>
                        <?php endwhile;  wp_reset_postdata(); ?>
				    </ul>
				</div>
			</div>
			<div class="row our-customer d-block d-md-none my-5">
			    <div class="col-md-12 text-center logo-slider">
					<h3>
						Our Customers
					</h3>
	                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                      <ol class="carousel-indicators">
                          
                        <!--<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>-->
                        <!--<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>-->
                        <!--<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>-->
                        <!--<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>-->
                        <!--<li data-target="#carouselExampleIndicators" data-slide-to="4"></li>-->
                        <!--<li data-target="#carouselExampleIndicators" data-slide-to="5"></li>-->
                        
                        <?php
                                $counte=0;
                                $args = array(
                                    'post_type' => 'customer_review',
                                    'post_status' => 'publish',
                                    'posts_per_page' => '-1',
                                    'orderby' => 'title',
                                    'order' => 'ASC',
                                
                                );
                                $loop = new WP_Query( $args );
                                while ( $loop->have_posts() ) : $loop->the_post(); 
                                if($counte==0){?>
                                 <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $counte; ?>" class="active"></li>
                                <?php $counte++;
                                }else{ ?>
                                
                                <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $counte; ?>"></li>
                                <?php $counte++; } endwhile;
                                wp_reset_postdata();
                            ?>
                      </ol>
                    <div class="carousel-inner">
                        
                        <!--Loop start-->
                        <?php $args =array(
                            'post_type'     =>'our_customer_logo',
                            'post_statu'    =>'publish',
                            'post_per_page' => '-1',
                            'orderby'       =>'title',
                            'order'         => 'ASC',
                            
                            );
                            $count=1;
                            $loop = new WP_Query($args);
                            while($loop->have_posts()) : $loop->the_post(); ?>
                                <?php
                                    if($count==1){
                                         $count=$count+1 ?>
                                        <div class="carousel-item text-center active">
                                           <?php the_content(); ?>
                                        </div>        
                                <?php }else{ ?>
                                            <div class="carousel-item text-center">
                                               <?php the_content(); ?>
                                            </div>
                                <?php }
                                $count=$count+1 ?>
                            <?php endwhile;
                            wp_reset_postdata(); ?>
                    </div>
                    </div>
	            </div>
			</div>
		</div>
	</section>
	
	<!-- Banner Logos Section End -->

	<!-- Tabs Sections Start -->

	<section class="nav-tabs">
		<div class="container">
			<div class="row">
				<div class="col-md-12 tabs">
					<ul>
						<li class="active"><a href="#technicians">Skyhook for Technicians</a></li>
						<li><a href="#part-145">Skyhook for Part-145</a></li>
						<li><a href="#aoc">Skyhook for AOC's</a></li>
					</ul>
				</div>
			</div>
		</div>
	</section>

	<!-- Technicians -->
	<section class="technicians" id="technicians">
		<div class="container">
			<div class="row justify-content-between">
				<div class="col-md-6 technicians-img  order-last">
					<img src="<?php the_field('solution_1_image', 57);?> ">
					<a class="d-md-none" href="<?php the_field('solution_1_button_link', 57); ?>">Learn More</a>
				</div>
				<div class="col-lg-5 col-md-6 technicians-text order-md-last skyhook-primary-button skyhook-primary-para">
					<h5><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/small-logo.png"><?php the_field('solution_1_subheading', 57);?></h5>
					<?php the_field('solution_1_descruption',57);?>
				</div>
			</div>
		</div>
	</section>
	<!-- Technicians -->

	<!-- Part 145 -->
	<section class="part-145" id="part-145">
		<div class="container">
			<div class="row justify-content-between">
				<div class="col-md-6 col-9 part-145-text skyhook-primary-button">
					<h5><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/small-logo.png"><?php the_field('solution_2_subheading', 57);?></h5>
					<?php the_field('solution_2_descruption',57);?>
					<div class="text-img">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/part-145-text.png">
					</div>
				</div>
				<div class="col-lg-5 col-md-6 part-145-text part-145-img skyhook-primary-button skyhook-primary-para">
					<img src="<?php the_field('solution_2_image', 57);?> ">
					<a class="d-md-none" href="<?php the_field('solution_2_button_link', 57); ?>">Learn More</a>
				</div>
			</div>
		</div>
	</section>
	<!-- Part 145 -->

	<!-- AOC Section -->
	<section class="aoc" id="aoc">
		<div class="container">
			<div class="row justify-content-between">
				<div class="col-md-6 aoc-text aoc-img text-center order-2 skyhook-primary-button">
					<img src="<?php the_field('solution_3_image', 57);?> ">
					<a class="d-md-none" href="<?php the_field('solution_3_button_link', 57); ?>">Learn More</a>
				</div>
				<div class="col-lg-5 col-md-6 aoc-text order-md-2 skyhook-primary-para skyhook-primary-button">
					<h5><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/small-logo.png"><?php the_field('solution_3_subheading', 57);?></h5>
					<!--<h1>Work together to explore & grow your product.</h1>-->
					<div class="text-img d-md-none">
						<img src="<?php the_field('solution_3_image', 57);?> ">
					</div>
					<?php the_field('solution_3_descruption',57);?>
					<!--<p>All attributes are completely customizable, which means that you can use them as many times as-->
					<!--	you like, in a way that works best for your projects.</p>-->
					<!--<a href="<?php echo get_site_url(); ?>/solution-for-aocs/">Learn More</a>-->
					<div class="text-img d-none d-md-block">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/AOC-text.png">
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- AOC Section -->

	<!-- Tabs Sections End -->

	<!-- About Section Start -->
	<section class="about">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-12 about-text text-md-center">
				    <?php the_field('about_skyhook',57); ?>
					<!--<h1>About Skyhook</h1>-->
					<!--<p class="about-mobile">Skyhook.is is a service that enables you to manage all your recent aviation experience, continuous requirements, -->
					<!--licenses, certificates and much more. Their service also allows you to produce professional reports easily. -->
					<!--Skyhook.is was founded in 2010, but the idea initially began in 2008 when they noticed the lack of a good online -->
					<!--solution for thenewly established EASA regulations in regards to individual requirements for Aviation Technicians -->
					<!--and their licenses. They launched in June 2011.</p>-->
					<!--<div class="about-mobile">-->
					<!--	<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/aboutt-girl-mob.png">-->
					<!--</div>-->
				</div>
				<div class="col-lg-8 col-md-11 text-center about-video">
					<!--<iframe src="https://www.youtube.com/embed/EngW7tLk6R8"></iframe>-->
				<?php the_field('about_skyhook_video',57); ?>
 
				</div>
				<div class="col-md-12 text-center about-btn">
					<a href="#">Start Free Trial</a>
					<div class="about-img about-desktop">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/about-img.png">
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- About Section End -->


	<!-- Testimonials Section Start -->
	<section class="testimonials">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-9 col-md-11 text-center">
					<h1>What Our Customers Say!</h1>
					<div id="testmonialsControls" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
						    <?php
						    $counte=0;
						    $args = array(
						        'post_type' => 'customer_review',
						        'post_status' => 'publish',
						        'posts_per_page' => '-1',
						        'orderby' => 'title',
						        'order' => 'ASC',
						    
						    );
						    $loop = new WP_Query( $args );
                            while ( $loop->have_posts() ) : $loop->the_post();  
						    if($counte==0){?>
						        <li data-target="#testmonialsControls" data-slide-to="<?php echo $counte;?>" class="active"></li>
						    <?php $counte++;
						    }else{ ?>
						    
						        <li data-target="#testmonialsControls" data-slide-to="<?php echo $counte;?>"></li>
						    <?php $counte++; } endwhile;
						    wp_reset_postdata();
						    ?>
						    
						    
						    
							<!--<li data-target="#testmonialsControls" data-slide-to="0" class="active"></li>-->
							<!--<li data-target="#testmonialsControls" data-slide-to="1"></li>-->
							<!--<li data-target="#testmonialsControls" data-slide-to="2"></li>-->
						</ol>
						<div class="carousel-inner">
						    <!--sldier 1-->
						    <?php
						        $count=0;
						        $custom_review = array(
						            'post_type' => 'customer_review',
						            'post_status' => 'publish',
						            'posts_per_page' => -1,
						            'orderby' => 'title',
						            'order' => 'ABC',
						        );
						        $custom =new WP_Query($custom_review);
						        while($custom->have_posts()): $custom->the_post(); 
						        if($count==0){ ?>
						            <div class="carousel-item active">
								        <div class="slider">
									        <div class="row">
        										<div class="col-md-4 customer-img d-none d-md-block">
        											<?php the_post_thumbnail( );?>
        										</div>
        										<div class="col-md-8 customer-text">
        											<!--<p>'s super fun, and makes managing continuous training requirements an absolute breeze.</p>-->
        											<?php the_content(); ?>
        											<div class="row">
        												<div class="col-md-8 col-9 customer-name d-none d-md-block">
        													<h5><?php the_title();?></h5>
        													<p><?php the_field('designation'); ?></p>
        													
        												</div>
        												<div class="col-md-4 col-3 logo d-none d-md-block">
        													<img src="<?php the_field('customer_company_logo');?>">
        												</div>
        											</div>
        										</div>
        										<div class="col-12 d-md-none">
        											<div class="row">
        												<div class="col-6 customer-img">
        													<?php the_post_thumbnail(); ?>
        												</div>
        												<div class="col-6 customer-name logo">
        													<h5><?php the_title();?></h5>
        													<p><?php the_field('designation'); ?></p>
        													<img src="<?php the_field('customer_company_logo');?>">
        												</div>
        											</div>
        										</div>
									        </div>
								        </div>
							        </div>
						       <?php $count++;
						       }else{ ?>
						            <!--sldier 2-->
							<div class="carousel-item">
								<div class="slider">
									<div class="row">
										<div class="col-md-4 customer-img d-none d-md-block">
											<?php the_post_thumbnail(); ?>
										</div>
										<div class="col-md-8 customer-text">
												<?php the_content(); ?>
											<div class="row">
												<div class="col-md-8 col-9 customer-name d-none d-md-block">
													<h5><?php the_title();?></h5>
        											<p><?php the_field('designation'); ?></p>
												</div>
												<div class="col-md-4 col-3 logo d-none d-md-block">
													<img src="<?php the_field('customer_company_logo');?>">
												</div>
											</div>
										</div>
										<div class="col-12 d-md-none">
											<div class="row">
												<div class="col-6 customer-img">
													<?php the_post_thumbnail(); ?>
												</div>
												<div class="col-6 customer-name logo">
													<h5><?php the_title();?></h5>
        											<p><?php the_field('designation'); ?></p>
													<img src="<?php the_field('customer_company_logo');?>">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						       
						    
						    
						        
						    <?php  $count++; }  
						          endwhile;
						          wp_reset_postdata(); 
						    ?>
							
							
							<!--sldier 3-->
							<!--<div class="carousel-item">-->
							<!--	<div class="slider">-->
							<!--		<div class="row">-->
							<!--			<div class="col-md-4 customer-img d-none d-md-block">-->
							<!--				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/customer.png">-->
							<!--			</div>-->
							<!--			<div class="col-md-8 customer-text">-->
							<!--				<p>Gone are the days when I’m left feeling that my technicians are not keeping their recent experience records up to date. mymxlog isn't just simple, it's super fun, and makes managing continuous training requirements an absolute breeze.</p>-->
							<!--				<div class="row">-->
							<!--					<div class="col-md-8 col-9 customer-name d-none d-md-block">-->
							<!--						<h5>Eðvald Line Maintenance</h5>-->
							<!--						<p>Manager</p>-->
							<!--					</div>-->
							<!--					<div class="col-md-4 col-3 logo d-none d-md-block">-->
							<!--						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/customer-logo.png">-->
							<!--					</div>-->
							<!--				</div>-->
							<!--			</div>-->
							<!--			<div class="col-12 d-md-none">-->
							<!--				<div class="row">-->
							<!--					<div class="col-6 customer-img">-->
							<!--						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/customer.png">-->
							<!--					</div>-->
							<!--					<div class="col-6 customer-name logo">-->
							<!--						<h5>Eðvald Line Maintenance</h5>-->
							<!--						<p>Manager</p>-->
							<!--						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/customer-logo.png">-->
							<!--					</div>-->
							<!--				</div>-->
							<!--			</div>-->
							<!--		</div>-->
							<!--	</div>-->
							<!--</div>-->
							<!--slider end-->
						</div>
						<a class="carousel-control-prev" href="#testmonialsControls" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/left-side.png"></span>
						</a>
						<a class="carousel-control-next" href="#testmonialsControls" role="button" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/right-side.png"></span>
						</a>

					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Testimonials Section End -->



	<!--Entries Section Start-->
	<section class="entries-info">
	    <div class="plane">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/planeimg.png" alt="plane image">
		</div>
		<div class="container">
			<div class="row justify-content-center entry">
				<div class="col-md-3 daily border-line">
					<h1><?php the_field('total_entries_today', 57) ?></h1>
					<p>Total Entries Today</p>
				</div>
				
				<div class="col-md-3 weekly border-line">
					<h1><?php the_field('total_entries_this_week', 57) ?></h1>
					<p>Total Entries This Week</p>
				</div>
				
				<div class="col-md-3 yearly">
					<h1><?php the_field('total_entries_this_year', 57) ?></h1>
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