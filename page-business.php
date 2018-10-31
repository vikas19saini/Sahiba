<?php

/* Template Name: Business */
?>

<?php get_header() ?>

<?php
    $business = new WP_Query(['post_type' => 'business', 'post_status' => 'publish', 'orderby' => 'date', 'order' => 'ASC']);
    $count = 2;
?>

<section class="busniess_area">
    <div class="container">
        <?php while ($business->have_posts()) : 
            $business->the_post();
            if($count%2 == 0):
        ?>            
        <div class="row" data-aos="" id="<?php echo str_replace(' ', '-', strtolower(get_the_title()))?>">
            <div class="busniess_left">
                <div class="busniess_left_image">
                    <?php if(get_the_excerpt() == 'empty'):?>
                        <?php the_post_thumbnail('full', ['class' => 'img-responsive']); ?>
                    <?php else:?>
                        <video class="" autoplay muted loop playsinline>
                            <source src="<?php echo get_template_directory_uri(), '/', get_the_excerpt() ?>" type="video/mp4">
                        </video>
                    <?php endif;?>
                </div>
            </div>
            <div class="busniess_right">
                <div class="busniess_right_content">
                    <h2><span><?php the_title()?></span></h2>
                    <p><?php the_content()?></p>
                    <span class="Enquiry_business"><a href="javascript:void(0);" data-toggle="modal" data-target="#myModal">ENQUIRE NOW</a></span>
                </div>
            </div>
        </div>
        <?php $count++; else:?>
        <div class="row row2" data-aos="" id="<?php echo str_replace(' ', '-', strtolower(get_the_title()))?>">
            <div class="busniess_right">
                <div class="busniess_right_content">
                    <h2><span><?php the_title()?></span></h2>
                    <p><?php the_content()?></p>
                    <span class="Enquiry_business"><a href="javascript:void(0);" data-toggle="modal" data-target="#myModal">ENQUIRE NOW</a></span>
                </div>
            </div>
            <div class="busniess_left">
                <div class="busniess_left_image">
                    <?php if(get_the_excerpt() == 'empty'):?>
                        <?php the_post_thumbnail('full', ['class' => 'img-responsive']); ?>
                    <?php else:?>
                        <video class="" autoplay muted loop playsinline>
                            <source src="<?php echo get_template_directory_uri(), '/', get_the_excerpt() ?>" type="video/mp4">
                        </video>
                    <?php endif;?>
                </div>
            </div>
        </div>
        <?php $count++; endif;?>
        <?php endwhile;?>
    </div>
</section>

<?php get_footer() ?>


