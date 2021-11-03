<?php get_header(); ?>


<!-- Pricing Banner Start -->
<section class="learn-banner price-banner">
    <div class="container">
        <div class="row">
            <div class="col-md-4 page-heading">
                <h1><?php the_title();?></h1>
            </div>
            <div class="col-md-8 price-nav-tab">
                <div class="row">
                    <div class="col-md-3 price-para">
                        <span>show prices in:</span>
                    </div>
                    <div class="col-md-9 price-tab">
                        <ul>
                            <li id="b-1" class="price-gbp-tab">GB<span> £GBP</span></li>
                            <li id="b-2" class="active EUR price-gbp-tab">EU<span> €EUR</span></li>
                            <li id="b-3" class="price-gbp-tab price-gbp-tab">US<span> $USD</span></li>
                            <li id="b-4" class="price-gbp-tab">CA<span> $CAD</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Pricing Banner End -->

<!-- Price Table banner start -->
<section class="pricing-table">
    <div class="container">
        <div class="row">
            <!-- Free Tier -->
            <div class="card-div free col-md-4">
                <div class="card1">
                    <div class="access-div">
                        <h5><?php the_field('free_package');?></h5>
                        <p><?php the_field('free_package_subheading');?></p>
                    </div>
                    <div class="card-body">
                        <div class="price-div">
                            <div class="heading-para">
                                <h5><?php the_field('free_package_price');?></h5>
                                <?php the_field('free_package_discount');?>
                            </div>

                        </div>
                        <div class="divider"> </div>
                        <div class="list">
                           <?php the_field('free_package_list');?>
                        </div>
                        <div class="divider"> </div>
                        <div class="get-button text-center">
                            <a href="https://app.skyhook.is/signup" target="_blank">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Plus Tier -->
            <div class="card-div premium col-md-4 active">
                <div class="card1">
                    <div class="access-div">
                        <h5><?php the_field('premium_package');?></h5>
                <p><?php the_field('premium_package_subheading');?></p>
                    </div>
                    <div class="card-body">
                        <div class="price-div">
                            <div class="eighty-number">
<!--                                 <h5>180.00</h5>
                                <p>€ / year (17% discount)</p>
                                <p>18.00€ / Monthly</p> -->
                            <span id=price-b-1 class="premium-price"><?php the_field('premium_gbp_price');?></span>
							<span id=price-b-2 class="premium-price active"><?php the_field('premium_package_price');?></span>
							<span id=price-b-3 class="premium-price"><?php the_field('premium_usd_price');?></span>
							<span id=price-b-4 class="premium-price"><?php the_field('premium_cad_price');?></span>
                            </div>
                            <div class="heading-para">
                                <p><?php the_field('premium_package_discount');?></p>
                            </div>
                        </div>
                        <div class="divider"> </div>
                        <div class="list">

							<?php the_field('premium_package_list');?>
                        </div>
                        <div class="divider"> </div>
                        <div class="get-button text-center">
                            <a href="https://app.skyhook.is/signup" target="_blank">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Pro Tier -->
            <div class="card-div business col-md-4">
                <div class="card1">
                    <div class="access-div">
                        <h5><?php the_field('business_package');?></h5>
                        <p><?php the_field('business_package_subheading');?></p>
                    </div>
                    <div class="card-body">
                        <div class="price-div">
                            <div class="heading-para">
                               <?php the_field('business_package_descount');?>
                            </div>
                            <div class="estimate">
                                <div class="row">
                                    <div class="col-md-8 col-8 estimate-name">
                                        <p><?php the_field('business_package_estimate_time_'); ?></p>
                                    </div>
                                    <div class="col-md-4 col-4 estimate-price estimate-price1">
                                        <!--price permont start-->
                                            <p id="slider-b-1" class="business-price"><?php the_field('1_employ_gbp_monthly_price'); ?></p>
                                            <span id="subheading-b-1" class="business-price"><?php the_field('1_employ_gbp_monthly_price_text');?></span>
                                            
                                            <p id="slider-b-2" class="business-price active"><?php the_field('1_employ_eur_monthly_price'); ?></p>
                                            <span id="subheading-b-2" class="business-price active"><?php the_field('business_package_currency_type');?></span>
                                            
                                            <p id="slider-b-3"class="business-price"><?php the_field('1_employ_usd_monthly_price'); ?></p>
                                            <span id="subheading-b-3" class="business-price"><?php the_field('1_employ_usd_monthly_price_text');?></span>
                                            
                                            <p id="slider-b-4" class="business-price"><?php the_field('1_employ_cad_monthly_price'); ?></p>
                                            <span id="subheading-b-4" class="business-price"><?php the_field('1_employ_cad_monthly_price_text');?></span>
                                        <!--price per month end-->
                                       
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8 col-8 estimate-name">
                                        <?php the_field('business_package_employ_text'); ?>
                                    </div>
                                    <div class="col-md-4 col-4 estimate-price estimate-price2">
                                        <!--NUMBER of employ start-->
                                            <p id="employ-value-b-1" class="business-employ"><?php the_field('number_of_employ'); ?></p>
                                            <span id="employ-prise-subheading-b-1" class="business-employ"><?php the_field('gbp_employ_subtext');?></span>
                                            
                                            <p id="employ-value-b-2" class="business-employ active"><?php the_field('business_package_employ_number'); ?></p>
                                            <span id="employ-prise-subheading-b-2" class="business-employ active"><?php the_field('number_of_employ_subheading');?></span>
                                            
                                            <p id="employ-value-b-3" class="business-employ"><?php the_field('number_of_employ'); ?></p>
                                            <span id="employ-prise-subheading-b-3" class="business-employ"><?php the_field('usd_employ_subtext');?></span>
                                            
                                            <p id="employ-value-b-4" class="business-employ"><?php the_field('number_of_employ'); ?></p>
                                            <span id="employ-prise-subheading-b-4" class="business-employ"><?php the_field('cad_employ_subtext');?></span>
                                        <!--number of employ end-->
                                    </div>
                                </div>
                                <div class="row progressbar">
                                    <div class="col-md-12">
                                        <input type="range" class="styled-slider slider-progress" id="slider" min="0" max="100" value="1" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="divider"> </div>
                        <div class="list">
							<?php the_field('business_package_list');?>
                        </div>
                        <div class="divider"> </div>
                        <div class="get-button text-center">
                            <a href="https://app.skyhook.is/signup" target="_blank">Get Started</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-xl-10 col-md-11 col-11 not-lose">
				<?php the_field('package_notes');?>
            </div>
        </div>
    </div>
</section>

<!-- Price table banner End-->

<!-- -FAQs Section Start -->
<section class="easa-guide pricing">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="row justify-content-center faq-box">
                    <div class="col-md-12 heading">
                        <h1>Questions & Answers before buying</h1>
                    </div>
                    
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



<!--<section class="easa-guide pricing">-->
<!--    <div class="container">-->
<!--        <div class="row justify-content-center">-->
<!--            <div class="col-md-12 text-center heading">-->
<!--                <h1>Questions & Answers before buying</h1>-->
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
<!-- FAQs Section End -->

		<!-- -FAQs Section Start -->
	<!--<section class="easa-guide pricing">-->
	<!--	<div class="container">-->
	<!--		<div class="row justify-content-center">-->
	<!--			<div class="col-md-12 text-center heading">-->
	<!--				<h1>Questions & Answers before buying</h1>-->
	<!--			</div>-->
	<!--			<div class=" col-xl-12 col-md-12 questions">-->
	<!--				<div class="panel-group" id="accordion">-->
	<!--					<div class="row justify-content-center">-->
							<!-- start panel left -->
	<!--						<div class="panel-left col-lg-12 col-md-12">-->
	<!--							<div class="panel panel-default">-->
	<!--								<div class="panel-heading active">-->
	<!--									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"-->
	<!--										href="#faq_1">-->
	<!--										<h4 class="panel-title">-->
	<!--											I have a Part-145 Company that i would like to setup with your service?-->
	<!--											<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/faq-open.png" class="open">-->
	<!--											<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/faq-close.png" class="closed">-->
	<!--										</h4>-->
	<!--									</a>-->
	<!--								</div>-->
	<!--								<div id="faq_1" class="panel-collapse collapse in show">-->
	<!--									<div class="panel-body">-->
	<!--										<p>Not a problem, sign up for the 30 days free trial account for Businesses and if you are satisfied you can explore the subscription plans available.</p>-->
	<!--									</div>-->
	<!--								</div>-->
	<!--							</div>-->
	<!--							<div class="panel panel-default">-->
	<!--								<div class="panel-heading">-->
	<!--									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"-->
	<!--										href="#faq_2">-->
	<!--										<h4 class="panel-title">-->
	<!--											Do I need to enter my credit card details to sign up?-->
	<!--											<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/faq-open.png" class="open">-->
	<!--											<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/faq-close.png" class="closed">-->
	<!--										</h4>-->
	<!--									</a>-->
	<!--								</div>-->
	<!--								<div id="faq_2" class="panel-collapse collapse in">-->
	<!--									<div class="panel-body">-->
	<!--										<p>Not a problem, sign up for the 30 days free trial account for Businesses and if you are satisfied you can explore the subscription plans available.</p>-->
	<!--									</div>-->
	<!--								</div>-->
	<!--							</div>-->
	<!--							<div class="panel panel-default">-->
	<!--								<div class="panel-heading">-->
	<!--									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#faq_3">-->
	<!--										<h4 class="panel-title">-->
	<!--											How does the 30-day free trial work?-->
	<!--											<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/faq-open.png" class="open">-->
	<!--											<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/faq-close.png" class="closed">-->
	<!--										</h4>-->
	<!--									</a>-->
	<!--								</div>-->
	<!--								<div id="faq_3" class="panel-collapse collapse in">-->
	<!--									<div class="panel-body">-->
	<!--										<p>Not a problem, sign up for the 30 days free trial account for Businesses and if you are satisfied you can explore the subscription plans available.</p>-->
	<!--									</div>-->
	<!--								</div>-->
	<!--							</div>-->
	<!--							<div class="panel panel-default">-->
	<!--								<div class="panel-heading">-->
	<!--									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#faq_4">-->
	<!--										<h4 class="panel-title">-->
	<!--											What kind of commitment am I making?-->
	<!--											<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/faq-open.png" class="open">-->
	<!--											<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/faq-close.png" class="closed">-->
	<!--										</h4>-->
	<!--									</a>-->
	<!--								</div>-->
	<!--								<div id="faq_4" class="panel-collapse collapse in">-->
	<!--									<div class="panel-body">-->
	<!--										<p>Not a problem, sign up for the 30 days free trial account for Businesses and if you are satisfied you can explore the subscription plans available.</p>-->
	<!--									</div>-->
	<!--								</div>-->
	<!--							</div>-->
	<!--							<div class="panel panel-default">-->
	<!--								<div class="panel-heading">-->
	<!--									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#faq_5">-->
	<!--										<h4 class="panel-title">-->
	<!--											What types of payment do you accept?-->
	<!--											<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/faq-open.png" class="open">-->
	<!--											<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/faq-close.png" class="closed">-->
	<!--										</h4>-->
	<!--									</a>-->
	<!--								</div>-->
	<!--								<div id="faq_5" class="panel-collapse collapse in">-->
	<!--									<div class="panel-body">-->
	<!--										<p>Not a problem, sign up for the 30 days free trial account for Businesses and if you are satisfied you can explore the subscription plans available.</p>-->
	<!--									</div>-->
	<!--								</div>-->
	<!--							</div>-->
	<!--							<div class="panel panel-default">-->
	<!--								<div class="panel-heading">-->
	<!--									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#faq_6">-->
	<!--										<h4 class="panel-title">-->
	<!--											What support options do you offer?-->
	<!--											<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/faq-open.png" class="open">-->
	<!--											<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/faq-close.png" class="closed">-->
	<!--										</h4>-->
	<!--									</a>-->
	<!--								</div>-->
	<!--								<div id="faq_6" class="panel-collapse collapse in">-->
	<!--									<div class="panel-body">-->
	<!--										<p>Not a problem, sign up for the 30 days free trial account for Businesses and if you are satisfied you can explore the subscription plans available.</p>-->
	<!--									</div>-->
	<!--								</div>-->
	<!--							</div>-->
	<!--							<div class="panel panel-default">-->
	<!--								<div class="panel-heading">-->
	<!--									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#faq_7">-->
	<!--										<h4 class="panel-title">-->
	<!--											Who owns my data?-->
	<!--											<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/faq-open.png" class="open">-->
	<!--											<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/faq-close.png" class="closed">-->
	<!--										</h4>-->
	<!--									</a>-->
	<!--								</div>-->
	<!--								<div id="faq_7" class="panel-collapse collapse in">-->
	<!--									<div class="panel-body">-->
	<!--										<p>Not a problem, sign up for the 30 days free trial account for Businesses and if you are satisfied you can explore the subscription plans available.</p>-->
	<!--									</div>-->
	<!--								</div>-->
	<!--							</div>-->
	<!--						</div>-->
	<!--					</div>-->
	<!--				</div>-->
	<!--			</div>-->
	<!--		</div>-->
	<!--	</div>-->
	<!--</section>-->
	<!-- FAQs Section End -->
<!--<section class="get-in-touch pricing">-->
<!--    <div class="container">-->
<!--        <div class="row justify-content-center">-->
<!--            <div class="col-xl-5 col-md-6 text">-->
<!--                <h1>Get in touch with <span>our friendly team.</span></h1>-->
<!--                <p>A wealth of styles and elements makes Ollie perfect for building websites for small, medium and large-->
<!--                    businesses.</p>-->
<!--            </div>-->
<!--            <div class="col-xl-5 col-md-6 form skyhook-primary-button">-->
<!--                <?php echo do_shortcode('[contact-form-7 id="6" title="Get in Touch"]'); ?>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->

<!--footer contact form-->
<?php get_template_part('template-parts/getin-tuch') ?>




<?php
get_footer();