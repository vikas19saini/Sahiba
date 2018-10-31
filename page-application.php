<?php
/* Template Name: Job Applcation */
?>

<?php get_header()?>

<section class="description_area">
    <div class="container">
        <div class="row">
            <h2><?php echo $_GET['position']?> <span>No. of Positions: <?php echo $_GET['no_of_positions']?></span></h2>
        </div>
    </div>
</section>

<section class="apply_form">
    <div class="container">
        <div class="row">
            <h2>FILL IN THE FORM <span>(*All fields are mandatory)</span></h2>
            <?php 
            while (have_posts()):
                the_post();
                the_content();
            endwhile;
            wp_reset_query();
            ?>
        </div>
    </div>
</section>

<?php get_footer()?>