<?php
/* Template Name: Career */
?>

<?php get_header() ?>


<section class="career_banner">
    <div class="row">
        <img src="<?php echo get_template_directory_uri() ?>/images/career/banner.jpg" class="img-responsive" style="width:100%;" />
        <!---<h2>WORK WITH US <span>We Inspire to work & do more</span></h2>-->
        <div class="open_position" >
            <span href="#section1">JOB OPENINGS<span class="down_arrow"><i class="fa fa-angle-down"></i></span></span>
        </div>
    </div>
</section>


<section class="career_mid">
    <div class="container">
        <div class="row">
            <div class="career_content">
                <div class="career_left career_left_color1">
                    <div class="career_shap"><img src="<?php echo get_template_directory_uri() ?>/images/career/medical.png" class="img-responsive"></div>
                </div>
                <div class="career_right color1">
                    <h2>In house Medical facilities</h2>
                </div>
            </div>
            <div class="career_line" data-aos="">
                <img src="<?php echo get_template_directory_uri() ?>/images/career/line.png" class="img-responsive" />
            </div>
            <div class="career_content career_content2 career_animation" data-aos="">
                <div class="career_right color2">
                    <h2>In house Lunch Facilities</h2>
                </div>
                <div class="career_left career_left_color2">
                    <div class="career_shap"><img src="<?php echo get_template_directory_uri() ?>/images/career/lunch.png" class="img-responsive"></div>
                </div>
            </div>
            <div class="career_line2" data-aos="">
                <img src="<?php echo get_template_directory_uri() ?>/images/career/line2.png" class="img-responsive" />
            </div>
            <div class="career_content career_animation" data-aos="">
                <div class="career_left career_left_color3">
                    <div class="career_shap"><img src="<?php echo get_template_directory_uri() ?>/images/career/cab.png" class="img-responsive"></div>
                </div>
                <div class="career_right color3">
                    <h2>In House pick up and Drop off facilities</h2>
                </div>
            </div>
            <div class="career_line" data-aos="">
                <img src="<?php echo get_template_directory_uri() ?>/images/career/line.png" class="img-responsive" />
            </div>
            <div class="career_content career_content2 career_animation" data-aos="">
                <div class="career_right color4">
                    <h2>Retirement Benefits</h2>
                </div>
                <div class="career_left career_left_color4">
                    <div class="career_shap"><img src="<?php echo get_template_directory_uri() ?>/images/career/reteirment.png" class="img-responsive"></div>
                </div>
            </div>
            <div class="career_line2" data-aos="">
                <img src="<?php echo get_template_directory_uri() ?>/images/career/line2.png" class="img-responsive" />
            </div>
            <div class="career_content career_animation" data-aos="">
                <div class="career_left career_left_color5">
                    <div class="career_shap"><img src="<?php echo get_template_directory_uri() ?>/images/career/kids1.png" class="img-responsive"></div>
                </div>
                <div class="career_right color5">
                    <h2>Educational benefits for children of Employees</h2>
                </div>
            </div>
            <div class="career_line" data-aos="">
                <img src="<?php echo get_template_directory_uri() ?>/images/career/line.png" class="img-responsive" />
            </div>
            <div class="career_content career_content2 career_animation" data-aos="">
                <div class="career_right color6">
                    <h2>Residential benefits</h2>
                </div>
                <div class="career_left career_left_color6">
                    <div class="career_shap"><img src="<?php echo get_template_directory_uri() ?>/images/career/house.png" class="img-responsive"></div>
                </div>
            </div>
            <div class="career_line2" data-aos="">
                <img src="<?php echo get_template_directory_uri() ?>/images/career/line2.png" class="img-responsive" />
            </div>
            <div class="career_content career_animation" data-aos="">
                <div class="career_left career_left_color5">
                    <div class="career_shap"><img src="<?php echo get_template_directory_uri() ?>/images/career/kids.png" class="img-responsive"></div>
                </div>
                <div class="career_right color5">
                    <h2>Women Empowerment</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
$jobs = new WP_Query(['post_type' => 'jobs', 'post_status' => 'publish', 'orderby' => 'date', 'order' => 'DESC']);
?>
<section class="job_details" id="section1">
    <div class="container">
        <div class="row">
            <h3>JOB OPENINGS</h3>
            <p>We are looking for people to join our team who are enthusiastic, hard working, and have the potential to learn and improve.</p>
            <?php if($jobs->have_posts()):?>
                <div class="career_job">
                    <?php
                    while ($jobs->have_posts()): $jobs->the_post();
                        ?>
                        <div>
                            <a href="<?php the_permalink() ?>">
                                <div class="container_inner_hiring">
                                    <p><span><?php echo get_post_meta(get_the_ID(), 'positions', true) ?></span> <span>Open Positions</span>
                                    </p>
                                    <div class="graphic_div">
                                        <h3><?php the_title() ?></h3>
                                        <span><?php echo get_post_meta(get_the_ID(), 'location', true) ?></span>
                                    </div>
                                    <span class="position_aply">APPLY NOW</span>
                                </div>
                            </a>
                        </div>
                    <?php endwhile;
                    wp_reset_query();
                    ?>
                </div>
            <?php else:?>
            <div class="career_job">
                <h3 style="width: 100%;text-align: center">Coming Soon..</h3>
            </div>
            <?php endif;?>
        </div>
    </div>
</section>


<?php
get_footer()?>