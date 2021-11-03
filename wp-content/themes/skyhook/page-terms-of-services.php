<?php get_header(); ?>


<section class="learn-banner terms-sevices">
    <div class="container">
        <div class="row">
            <div class="col-md-12 page-heading">
                <h1><?php the_title(); ?></h1>
            </div>
        </div>
    </div>
</section>

<section class="inner-content general-content">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div>
                    <h5>Last updated: <?php the_field('last_update');?></h5>
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();