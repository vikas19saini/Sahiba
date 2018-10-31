<?php
/* Template Name: Brands */
?>

<?php get_header() ?>

<?php
    $brands = new WP_Query(['post_type' => 'brands', 'post_status' => 'publish', 'orderby' => 'date', 'order' => 'ASC']);
    $count = 2;
?>

<div class="new_brand_video">
    <div class="desk_video">
        <video autoplay muted loop playsinline>
            <source id="new_dynamic_video" src="<?php echo get_template_directory_uri() ?>/images/brand/inayat.mp4" type="video/mp4">
        </video>
    </div>
    <div class="mobile_video">	
        <video autoplay muted loop playsinline>
            <source id="new_dynamic_video" src="<?php echo get_template_directory_uri() ?>/images/brand/inayat_mobile.mp4" type="video/mp4">
        </video>
    </div>
    <div class="view_brand_logo">
        <div class="owl-carousel owl-theme">
            <?php while ($brands->have_posts()): $brands->the_post();?>
            <div class="item">
                <img src="<?php echo home_url()?>/<?php echo get_the_excerpt()?>" class="img-responsive brand_down" href="#brand-<?php the_ID()?>" />
            </div>
            <?php endwhile; wp_reset_query();?>
        </div>	
    </div>
    <div class="scroll_down" href="#section1">
        <span data-scroll="banner_scroll"></span>
    </div>
</div>
<?php while ($brands->have_posts()): $brands->the_post();?>
    <?php if($count%2 == 0):?>
    <div class="new_brand_area new_brand_area1" id="brand-<?php the_ID()?>" data-aos="">	 
        <div class="container">
            <div class="row">	
                <div class="brand_left">
                    <img src="<?php echo get_the_post_thumbnail_url()?>" class="img-responsive" />
                </div>
                <div class="brand_right">
                    <?php the_content()?>
                    <p class="brand_enquire" data-toggle="modal" data-target="#myModal">ENQUIRE <span>NOW</span></p>
                </div>
            </div>	
        </div>
    </div>
    <?php $count++; else:?>
    <div class="new_brand_area new_brand_area2" id="brand-<?php the_ID()?>" data-aos="">
        <img src="<?php echo get_template_directory_uri() ?>/images/brand/brand_bg.png" class="brand_bg">	
        <div class="container">
            <div class="row">	
                <div class="brand_right">
                    <?php the_content()?>
                    <p class="brand_enquire" data-toggle="modal" data-target="#myModal">ENQUIRE <span>NOW</span></p>
                </div>
                <div class="brand_left">
                    <img src="<?php echo get_the_post_thumbnail_url()?>" class="img-responsive" />
                </div>
            </div>	
        </div>
    </div>
    <?php 
        $count++; 
        endif; 
        endwhile;
        wp_reset_query();
    ?>

<?php
get_footer()?>