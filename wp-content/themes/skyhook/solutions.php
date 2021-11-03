<?php /* 
Template Name: Solution 
*/ ?>
<?php get_header(); ?>
<!---------solution banner  section-1  start ---------------------------->

<section class="sol-section-1">
	<div class="container ">
		<div class="row">
			<div class="col-md-12 solution-banner ">
				<h1>
					<?php the_title(); ?>
				</h1>
                <?php the_content(); ?>
			</div>
		</div>
	</div>
</section>
<!---------------------------------------------- solution banner  section-1  end ---------------------------->

<!---------------------------------------------- solution gategory  section-2  start ---------------------------->

<section class="sol-section-2">

    <div class="container">
        <div class="row justify-content-center">

            <div class="col-md-6  category-image">
                <img src="<?php the_field('categgories_status_image');?>">
                <!-- <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/catogery-hook-logo.png"> -->
            </div>

            <div class="col-md-6  category-section">
                <div class="logoss">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/small-logo.png">
                    <P>Skyhook Experience</P>
                </div>
                <?php the_field('categgories_status_text');?>
                <!--<h1>Categgories Status Dashboard</1h>-->
                <!--    <p>When a technician logs into skyhook.is he sees the dashboard. The dashboard gives him an overview-->
                <!--        of the whole system. There the technician can see his categories status, his statistic and most-->
                <!--        recent experience entries. The categories status is a visual representation of the logbook-->
                <!--        status. In the pic-ture blow the category status is on top of the screenshot. Here Adam Is-->
                <!--        logging experience on category B1, group 1 (the group number is inside the blue cogwheel). His-->
                <!--        status is-->
                <!--        100%. That means that he is current in accordance with EASA regulations.-->
                <!--        Technicians can log experience on as many categories and groups as needed</p>-->
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/why-text-image.png">
            </div>
        </div>
    </div>
    </div>
</section>
<!--------------------------- solution gategory  section-2  end ------------------------>

<!--- solution logobook section-3 start -->

<section class="sol-section-3">

	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-6 experience-section logos">
				<h5>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/small-logo.png"><?php the_field('experience_logobook_subheading');?>
				</h5>
				<?php the_field('experience_logobook_text');?>
			</div>
			<div class="col-md-6  experience-image"> 

                <img src="<?php the_field('experience_logobooks_image');?>">
			</div>
				<div class="row list-section">
                    <div class="col-md-7 listing-color">
                        <?php the_field('experience_logobook_list');?>
						<div class="second-list">
						    
						</div>
					</div>
					<div class="col-md-5  experience-image ex-secon-img">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logbook-2.png">
		        	</div>
			</div>
		</div>
	</div>


</section>

<!---- solution logobook  section-3  end --->

<!---- solution reports  section-4  start --->
<section class="sol-section-4">

	<div class="container sol-reports">
		<div class="row ">
			<div class="col-sm-12 col-md-7  reports-section logos">
				<div class="logo">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-text.png">
					<p><?php the_field('experience_report_subheading');?></p>
				</div>
			    <?php the_field('experience_report_text'); ?>
			</div>
		</div>
	</div>

</section>

<!--- solution reports  section-4  end-->


<!--- solution reports  section-5  start--->

<section class="sol-section-5">

	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-12  experience-report">
                <img src="<?php the_field('recent_experience_report_image'); ?>">
			</div>

		</div>
	</div>

</section>

<!-- solution reports  section-5  end ---->

<!---- solution reports  section-6  end-->
<section class="sol-section-6">

	<div class="container">
		<div class="row justify-content-center">

			<div class="col-md-6  aircraft-image">
				<img src="<?php the_field('aircraft_image');?>">
			</div>

			<div class="col-md-6  aircraft-section logos">
				<div class="logo">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-text.png">
					<p><?php the_field('aircraft_subheading');?></p>
				</div>
		            <?php the_field('aircraft_text');?>
					<div class="air-craft">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/air-craft-image.jpg">
					</div>
			</div>
		</div>
	</div>
	</div>
</section>

<!---solution reports  section-6  end --->


<!--- solution reports  section-7  end -->
<section class="sol-section-7">

	<div class="container">
		<div class="row ">
			<div class="col-md-6  file-section logos">
				<div class="logo">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-text.png">
					<p><?php the_field('files_subheading');?></p>
				</div>
				<?php the_field('files_text');?>
			</div>

			<div class="col-md-6  file-image">
				<img src="<?php the_field('files_image');?>">

			</div>
		</div>
	</div>

</section>



<!-- solution reports  section-7  end -->
<!-- solution reports  section-8  end-->
<section class="sol-section-8">

	<div class="container">
		<div class="row ">

			<div class="col-md-6  profile-image">
				<img src="<?php the_field('profile_image');?>">

			</div>
			<div class="col-md-6  profile-section">
				<div class="logo">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-text.png">
					<p><?php the_field('profile_subheading');?></p>
				</div>
			    <?php the_field('profile_text');?>
			</div>
		</div>
	</div>

</section>

<!-- solution reports  section-8  end -->


<!-- About Section-9 Start -->
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
<!-- About Section-9 End -->

<!--solution reports  section-10  start -->
<section class="sol-section-10">

	<div class="container">
		<div class="row ">
			<div class="col-md-12 feture-heading  text-center">
				<h1>Features</h1>
			</div>

			<div class="col-md-4  features-image  features-row">
				<img src="<?php the_field('feature_1_image');?>">
				<div class="features-heading">
					<?php the_field('feature_1_text');?>
				</div>
			</div>

			<div class="col-md-4  features-report features-row ">

				<img src="<?php the_field('feature_2_image');?>">
				<div class="features-heading">
					<?php the_field('feature_2_text');?>
				</div>

			</div>
			<div class="col-md-4 features-logbook features-row">

				<img src="<?php the_field('feature_3_image');?>">
				<div class="features-heading">
					<?php the_field('feature_3_text');?>
				</div>

			</div>
		</div>
	</div>
	</div>

</section>

<!-- solution reports  section-10  end -->


<!-- solution reports  section-11  end -->
<section class="sol-section-11">

	<div class="container">
		<div class="row justify-content-center ">
			<div class="col-md-6  sol-reports-section">
				<div class="logo">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-text.png">
					<p><?php the_field('report_subheading');?></p>
				</div>
				    <?php the_field('report_text');?>
					<img src="<?php the_field('report_image');?>">
			</div>

			<div class="col-md-6  sol-reports-image">
				<!-- <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/reminder-reports-image.jpg"> -->
				<!-- <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/catogery-hook-logo.png"> -->
			</div>
		</div>

	</div>
	</div>
</section>

<!-- solution reports  section-11  end -->
<?php
get_footer();
