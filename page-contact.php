<?php
/* Template Name: Contact */
?>
<?php get_header() ?>

<section class="contact_area">
    <img src="<?php echo get_template_directory_uri()?>/images/contact_banner.jpg" class="img-responsive contact_banner">
   <div class="container">
      <div class="row" data-aos="">
          <h2>We'd love to hear from you!</h2>
          <?php while (have_posts()): the_post();?>
           <?php the_content()?>
          <?php endwhile; wp_reset_query();?>
           <p class="office">OUR OFFICES</p>

           <div class="contact_icon">            
               <div class="address1 active" data-location="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7440.217650658776!2d72.8406126224211!3d21.187835443649554!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be04e513aa9c71d%3A0x3f7bd5f3fe95e079!2sSahiba+Group!5e0!3m2!1sen!2sin!4v1540631308853">
                 <h4>Surat - Head Office</h4>
                 <p>4, Basement Floor, Krishna Textile Market, Ring Road, Near Jj Ac Mar, Surat, Gujarat 395002</p>
                 <p>Phone No. : 0261- 2320524, 2320509</p>
                 <p>Email : <a href="mailto:surat@sahibaltd.com">surat@sahibaltd.com</a></p>
               </div>
               <div class="address1" data-location="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3719.944774586163!2d72.83835101432771!3d21.194352685908893!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be04e513aa9c71d%3A0x9e83c089e1d715cb!2sSahiba+Fabrics+Pvt+Ltd!5e0!3m2!1sen!2sin!4v1540630981390">
                 <h4>Surat - Sales Office</h4>
                 <p>J-138, To 142, J J A C Market, Ring Road, Surat, Gujarat 395002</p>
                 <p>Phone No. : 0261 232 2397</p>
                 <p>Email : <a href="mailto:surat@sahibaltd.com">surat@sahibaltd.com</a></p>
               </div>
               <div class="address1" data-location="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3720.669844163142!2d73.00074931432702!3d21.16553338592443!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be05cae77689fb5%3A0x4f95d8580e99789f!2sSahiba!5e0!3m2!1sen!2sin!4v1540631059589">
                 <h4>Surat - Manufacturing Facility</h4>
                 <p>Block No - 93/94 Jolva Patiya,Village - Bagumara, Ta-Palsana, Bardoli Road, Jolva, Gujarat 394310</p>
                 <p>Mobile No. : +91-9824480699</p>
                 <p>Email : <a href="mailto:surat@sahibaltd.com">surat@sahibaltd.com</a></p>
               </div>
               <div class="address1" data-location="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7539.885760677154!2d72.87086127225403!3d19.110161598273056!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c8397bee1bbd%3A0x8da956bbdefef0c!2sSahiba+Limited%2CMumbai!5e0!3m2!1sen!2sin!4v1540631121489">
                 <h4>Mumbai</h4>
                 <p>Regional Office- 3A- Third Floor B Wing 
                    Times Square - Nilkanth Technology Park 
                    Andheri-Kurla Road, Andheri(E), Mumbai - 400 059</p>
                 <p>Mobile No. : +91-8422922187</p>
                 <p>Email : <a href="mailto:ncr@sahibaltd.com">ncr@sahibaltd.com</a></p>
               </div>
               <div class="address1" data-location="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3505.813312927407!2d77.07909931450719!3d28.515263982464166!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d195e4eb416e1%3A0xb802a84f54da9d6!2sEBES+Seller+Ventures+Pvt+Ltd!5e0!3m2!1sen!2sin!4v1540631182417">
                 <h4>Delhi NCR</h4>
                 <p>Sahiba Limited, Ground Floor, Plot no. 36, Udyog Vihar, Phase1, Gurgaon</p>
                 <p>Mobile No. : +91-9990059955</p>
                 <p>Email : <a href="mailto:Contact@sahibaltd.com">Contact@sahibaltd.com</a></p>
               </div>
           </div>
      </div>
   </div>
</section>

<div class="map_contact">
   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7440.217650658776!2d72.8406126224211!3d21.187835443649554!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be04e513aa9c71d%3A0x3f7bd5f3fe95e079!2sSahiba+Group!5e0!3m2!1sen!2sin!4v1540631308853" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen class="location_change"></iframe>
</div>

<?php get_footer()?>