<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo('template_url')?>/bootstrap/css/bootstrap.min.css">
	<link href="<?php echo get_bloginfo('template_url'); ?>/fontawesome/css/all.min.css" rel="stylesheet">
	<link href="<?php echo get_stylesheet_directory_uri(); ?>/style.css" rel="stylesheet">

	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<section class="covid">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center text">
					<span>COVID-19 Health Advisory Platform by Ministry of National .....</span>
					<a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/close.png"></a>
				</div>
			</div>
		</div>
	</section>

	<!-- Header Start -->
	<header>
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-5 logo">
					<a href="<?php echo site_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/header-logo.png"></a>
				</div>
				<div class="col-5 mob-num d-lg-none">
				    <a href="#">+44-123-5264-000</a>
				</div>

				<div class="col-lg-9 col-2 menu">
					<?php wp_nav_menu( array( 'theme_location' => 'primary') ); ?>
				</div>
			</div>
		</div>
	</header>
	<!-- Header End -->