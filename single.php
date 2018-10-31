<?php

/* 
 * Display single post(Media)
 */
?>
<?php get_header()?>
<?php if(have_posts()): the_post();?>
    <section class="media_area">
      <div class="container-fuild"> 
       <div class="container">
           <div class="row">
                <div class="media_details">
                    <p class="blog_date"><span><?php the_date()?></span></p>
                    <p class="blog_content"><?php the_title()?></p>
                    <?php the_post_thumbnail('full', ['class' => 'img-responsive'])?>
                      <div class="blog_details_content">
                          <?php the_content()?>
                      </div>
                </div>
           </div>
       </div> 
      </div>  
    </section>
<?php endif;wp_reset_query();?>

<?php get_footer()?>
