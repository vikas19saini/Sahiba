<?php
/*
 * Display jobs
 */
?>
<?php get_header() ?>

<?php if (have_posts()) : the_post(); ?>
    <section class="description_area">
        <div class="container">
            <div class="row">
                <h2><?php the_title() ?><span>No. of Positions: <?php echo get_post_meta(get_the_ID(), 'positions', true) ?></span></h2>
            </div>
        </div>
    </section>

    <section class="description_mid">
        <div class="container">
            <div class="row">
                <?php the_content() ?>
                <?php
                $apply_page_url = new WP_Query(['post_type' => 'page',
                        'meta_key' => '_wp_page_template',
                        'meta_value' => 'page-application.php'
                ]);
                $apply_page_url = $apply_page_url->posts[0]->post_name;
                ?>
                <div class="apply_btn">
                    <a href="<?php echo home_url()?>/<?php echo $apply_page_url?>?position=<?php echo the_title()?>&no_of_positions=<?php echo get_post_meta(get_the_ID(), 'positions', true)?>"><button>APPLY NOW</button></a>
                </div>
            </div>
        </div>
    </section>
<?php endif;
wp_reset_query(); ?>
<?php
get_footer()?>