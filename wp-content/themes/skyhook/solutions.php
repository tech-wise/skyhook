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
		<div class="row">

			<div class="col-md-6  category-image">
				<img src="<?php the_field('categgories_status_image'); ?>">

			</div>

			<div class="col-md-6  category-section">
				<div class="logoss">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/small-logo.png">
					<P><?php the_field('categgories_status_subheading'); ?></P>
				</div>
				    <?php the_field('categgories_status_text'); ?>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/why-text-image.png">
			</div>
		</div>
	</div>
	</div>
</section>
<!---------------------------------------------- solution gategory  section-2  end ---------------------------->

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
			    <!--<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/sol-experience-image.jpg">-->
                <img src="<?php the_field('experience_logobooks_image');?>">
			</div>
				<div class="row list-section">
                    <div class="col-md-7 listing-color">
						<ul>
							<li>Aircraft Registration Number</li>
							<li>Choose from list or add new</li>
							<li>Type of Maintenance</li>
							<li>Base or line</li>
							<li>Type of Activity</li>
							<li>Performed, supervised, released or training</li>
							<li>Categories</li>
							<li>All EASA categories (A, B1, B2 etc.)</li>
							<li>ATA Chapters</li>
							<li>List of all needed ATA chapters</li>
							<li>Duration in Hours</li>
							<li>Break down the experience into hours</li>
							<li>Text field </li>
							<li> Add additional text information</li>
						</ul>
						<h6>Optional fields that are not noted in EASA’s regulations are:</h6>
						<ul>
							<li>Airline </li>
							<li>Choose from list or add new</li>
							<li>Job, Wo, Log page Nr.</li>
							<li>Number of job/wo/log page</li>
							<li>145 Approval Nr.</li>
							<li>Number of Approval</li>
							<li>Supervisor</li>
							<li>Choose from list or add new</li>
							<li>Attached files </li>
							<li> Dirty fingerprints upload (WO, task card, LP, ...)</li>
						</ul>
						<div class="second-list">
						    
						</div>
					</div>
					<div class="col-md-5  experience-image ex-secon-img">
			            <!--<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/sol-experience-image.jpg">-->
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
				<h5>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-text.png">Skyhook Expereince
				</h5>
				<h1>Experience Reports</1h>
					<p>Technicians themselves have the option to make detailed and
						professional reports based on their experience. The main
						report is the Experience Report. All fields in the experience
						logbook are available as a filter in the experience report. This
						makes the report extremely versatile and gives the technician
						almost endless possibilities of reporting. It can be sorted both
						by date and also by ATA chapter.</p>

					<!-- <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/why-text-image.png"> -->
					<div class="col-sm-12 col-md-10 reports-section-technicians">
						<p>For technicians who are still in training we have a version of the experience report
							with fields for their supervisor to sign for
							the technician’s experience</p>
					</div>

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
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/soution-report-image.png">

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
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/aircraft-demo-image.jpg">
			</div>

			<div class="col-md-6  aircraft-section logos">
				<h5>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/small-logo.png">Skyhook for Technicians
				</h5>
				<h1>Aircraft</1h>
					<p>On the aircraft page the technician sees all the
						aircraft he has logged experience on. He also sees
						other aircraft from his company that other techni-
						cians have logged experience on. He can add new
						aircraft to his list or get them from other members
						of his organization.</p>
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
				<h5>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/small-logo.png">Skyhook for Technicians
				</h5>
				<h1>Files</1h>
					<p>All files the technician has attached to his experi-
						ence entries can be accessed in a specific files
						page. There it is easy to get multiple files for a spe-
						cific period.</p>
			</div>

			<div class="col-md-6  file-image">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/file-image.jpg">

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
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/profile-image.png">

			</div>
			<div class="col-md-6  profile-section">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/small-logo.png">
				<h6>Skyhook for Technicians</h6>
				<h1>Profile</1h>
					<p>On the profile page the technician can manage
						his profile information, licenses, type ratings and
						his employment history.</p>
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
				<h1>About Skyhook</h1>
				<p class="about-mobile">Skyhook.is is a service that enables you to manage all your recent aviation
					experience, continuous requirements,
					licenses, certificates and much more. Their service also allows you to produce professional reports
					easily.
					Skyhook.is was founded in 2010, but the idea initially began in 2008 when they noticed the lack of a
					good online
					solution for thenewly established EASA regulations in regards to individual requirements for
					Aviation Technicians
					and their licenses. They launched in June 2011.</p>
				<!--<div class="about-mobile">-->
				<!--	<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/aboutt-girl-mob.png">-->
				<!--</div>-->
			</div>
			<div class="col-lg-8 col-md-11 text-center about-video">
				<!--<iframe src="https://www.youtube.com/embed/EngW7tLk6R8"></iframe>-->
				<iframe src="https://player.vimeo.com/video/347119375?h=1699409fe2&color=ef2200&byline=0&portrait=0" width="640" height="360" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
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

				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/categori-status-dashboard.png">
				<div class="features-heading">
					<h1>Categories Status Dashboard</h1>
					<p>Perfect for when your team has different departments that share some tasks, such as your engineering
						and success teams. </p>
				</div>
			</div>

			<div class="col-md-4  features-report features-row ">

				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/recnt-reports-image.png">
				<div class="features-heading">
					<h1>Experience Reports</h1>
					<p>Enjoy a real-time experience, where everything you do is live updated for all of your team,
						even when working on different projects.</p>
				</div>

			</div>
			<div class="col-md-4 features-logbook features-row">

				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/experinc-logbook.png">
				<div class="features-heading">
					<h1>Experience Logbook</h1>
					<p>We speak your language! Produck is currently available in English, German, and Spanish, including
						support in EST and Europe time zones. </p>
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
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/small-logo.png">
				<h6>Skyhook for Part-145</h6>
				<h1>Reports</1h>
					<p>Lorem Ipsum is simply dummy text of the printing and type -setting industry.
						Lorem Ipsum has been the industry'smmy text ever since the 1500s, when an unknown printer took
						a galley of type and scrambled it to make a type specimen book.</p>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/solution-reports-background-image.png">
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
