<?php

/* Template Name: Media */
?>
<?php get_header()?>

<?php
    $medias = new WP_Query(['post_type' => 'post', 'post_status' => 'publish', 'orderby' => 'date', 'order' => 'DESC']);
    $count = 2;
?>

<section class="media_area">
  <div class="container-fuild"> 
   <div class="container">
       <div class="row">
            <div class="media_heading">  
                <!---<h2>Stories & Media</h2> -->
             </div>
             <?php
            while ($medias->have_posts()):
                $medias->the_post();
                if($count%2 == 0):
             ?>
                <div class="media_div" data-aos="">
                 <div class="right_media">
                     <a href="<?php the_permalink()?>">
                         <?php the_post_thumbnail('full', ['class' => 'img-responsive'])?>
                      </a>
                 </div>
                  <div class="left_media">
                      <p class="blog_date"><span><?php the_date()?></span> </p>
                      <p class="blog_content">
                          <a href="<?php the_permalink()?>"><?php the_title()?></a> 
                      </p>
                      <p class="blog_btn"><a href="<?php the_permalink()?>">READ MORE</a></p>
                      <div class="blog_line"></div>
                 </div>
             </div>
             <?php $count++; else:?>
              <div class="media_div media_div2" data-aos="">
                 <div class="right_media">
                      <a href="<?php the_permalink()?>">
                         <?php the_post_thumbnail('full', ['class' => 'img-responsive'])?>
                      </a>
                 </div>
                  <div class="left_media">
                      <p class="blog_date"><span><?php the_date()?></span> </p>
                      <p class="blog_content">
                          <a href="<?php the_permalink()?>"><?php the_title()?></a>
                      </p>
                      <p class="blog_btn"><a href="<?php the_permalink()?>">READ MORE</a></p>
                      <div class="blog_line"></div>
                 </div>
             </div>
           <?php $count++; endif; endwhile; wp_reset_query()?>
       </div>
   </div> 
  </div>  
</section>

<?php get_footer()?>