<?php get_header(); ?>
<!---------------------------------------------- solution banner  section-1  start ---------------------------->
<?php  $current_page_id = get_the_ID(); 
?>
<!-- Learn Banner Start -->
<section class="learn-banner">
    <div class="container">
        <div class="row">
            <div class="col-md-12 page-heading">
                <h1>Customer Stories</h1>
            </div>
        </div>
    </div>
</section>
<!-- Learn Banner End -->
<!--customer listing start-->
<section class="customer-post">
    <div class="container   ">
        <div class="row ">
            <div class="col-md-7  left-side-list ">
                <div class="top-bnr">
                    <img src="<?php the_field('feature_image'); ?>">
                </div>
                <div class="company-logo">
                   <?php the_post_thumbnail(); ?>
                    </div>
                    <div class="fist-pargraf ">
                        <div class="right-cort">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/right-invert-coma-logo.png">
               </div>
                    <div class="compny-paragraph">
                        <p><?php the_field('company_quotes_message'); ?></p>
                    </div>
                    <div class="left-cort">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/invert-coma-logo.png">
                        </div>
                </div>
                <div class="pantlies">
                  <img src="<?php the_field('company_quotes_image');?>">
                   <p><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/gry-line.png"><?php the_field('company_quotes_message_auther');?>,</p>
                     </div>
                     </div>
                     <div class="col-md-4 right-side-list ">
                <div class="left-heading">
                    <h3>Stories</h3>
                </div>
                <!--post list-->
                <div class="main-list-box">
                    <?php
                        $args= array(
                            'post_type' => 'customerstorie',
                            'post_status' => 'publish',
                            'posts_per_page' => -1,
                            'order' => 'ASC',
                        );
                        $loop = new WP_Query($args);
                        while($loop->have_posts()): $loop->the_post(); $post_id= get_the_ID();  ?>
                            
                            <div class="row list-box bottom-border <?php /*if($current_page_id==$post_id){?> active-list <?php  }*/ ?>">
                                <div class="col-md-5 first-logo">
                                    <a href="<?php echo get_permalink()?>">
                                       <span class="color-image"> <?php the_post_thumbnail(); ?></span>
                                        <span class="white-image"><img src="<?php the_field('company_image_active'); ?>"></span>
                                    </a>
                                </div>
                                <div class="col-md-7 ">
                                    <a href="<?php echo get_permalink()?>">
                                        <p><?php echo wp_trim_words( get_the_content(), 10, '...' ); ?> </p>
        							</a>
                                </div>
                            </div>
                        <?php endwhile;
                        wp_reset_postdata(); ?>
                    
                    
                    <!--<div class="row list-box">-->
                    <!--    <div class="col-md-5 first-logo">-->
                    <!--        <div class="second-logo">-->
                    <!--            <a href="#">-->
                    <!--          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/stories-2.png">-->
                    <!--            </a>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--    <div class="col-md-7">-->
                    <!--        <div class="left-para">-->
                    <!--            <a href="#">-->
                    <!--                <p>Lorem Ipsum is simply dummy text of the printing and typesetting </p>-->
                    <!--            </a>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
                    <!--<div class="row  box-color">-->
                    <!--    <div class="col-md-4 white-logo">-->
                    <!--        <div class="third-logo">-->
                    <!--            <a href="#">-->
                    <!--      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/gmt-blue-logo.png">-->
                    <!--            </a>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--    <div class="col-md-7">-->
                    <!--        <a href="#">-->
                    <!--            <p>Lorem Ipsum is simply dummy text of the printing and typesetting </p>-->
                    <!--        </a>-->
                    <!--    </div>-->
                    <!--</div>-->
                    <!--<div class="row list-box bottom-border">-->
                    <!--    <div class="col-md-5 first-logo fourth-logo">-->
                    <!--        <a href="#">-->
                    <!--            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/stories-4.png">-->
                    <!--        </a>-->
                    <!--        </div>-->
                    <!--    <div class="col-md-7">-->
                    <!--        <a href="#">-->
                    <!--            <p>Lorem Ipsum is simply dummy text of the printing and typesetting </p>-->
                    <!--        </a>-->
                    <!--    </div>-->
                    <!--</div>-->
                    <!--<div class="row list-box bottom-border">-->
                    <!--    <div class="col-md-5 first-logo">-->
                    <!--        <div class="fifth-logo">-->
                    <!--            <a href="#">-->
                    <!--          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/stories-5.png">-->
                    <!--            </a>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--    <div class="col-md-7">-->
                    <!--        <a href="#">-->
                    <!--            <p>Lorem Ipsum is simply dummy text of the printing and typesetting </p>-->
                    <!--        </a>-->
                    <!--    </div>-->
                    <!--</div>-->
                    <!--<div class="row list-box">-->
                    <!--    <div class="col-md-5 first-logo">-->
                    <!--        <div class="sixth-logo">-->
                    <!--            <a href="#">-->
                    <!--          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/stories-6.png">-->
                    <!--            </a>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--    <div class="col-md-7">-->
                    <!--        <div class="left-para">-->
                    <!--            <a href="#">-->
                    <!--                <p>Lorem Ipsum is simply dummy text of the printing and typesetting </p>-->
                    <!--            </a>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
                    
                </div>
                <!--post list end-->
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 fist-pargraf">
                <div class="mgt-para">
                    <?php the_field('company_text_before_images'); ?>
                </div>
                <div class="row three-images">
                    <div class="col-md-4">
                        <img src="<?php the_field('company_image_1'); ?>">
                        </div>
                    <div class="col-md-4 image-spacing">
                        <img src="<?php the_field('company_image_2'); ?>">
                        </div>
                        <div class="col-md-4 fist-pargraf image-spacing">
                        <img src="<?php the_field('company_image_3'); ?>">
                        </div>
                </div>
                <div class="last-para">
                    <?php the_field('company_text_after_image'); ?>
                        </div>
                        </div
                        </div>
                        </div>
                        </section>
<!--customer listing end-->
<?php
get_footer();
