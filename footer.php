<footer class="scroll_page">
    <div class="ft-center">
        <h4>COPYRIGHT 2018 &copy; ALL RIGHT RESERVED. SAHIBA LIMITED.</h4>
        <p>Locations we are present</p>
        <p>Surat  - Mumbai - Delhi</p>
        <div class="social-ico">
            <p>Follow us on</p>
            <ul>
                <li><a target="_blank" href="https://www.youtube.com/channel/UC--KR2Q0Ad2q4LltI96HF_A"><img src='<?php echo get_template_directory_uri() ?>/images/tw.png' alt='png_tw'></a></li>
                <li><a target="_blank" href="https://www.facebook.com/SahibaLtd/"><img src='<?php echo get_template_directory_uri() ?>/images/fb.png' alt='png_tw'></a></li>
                <li><a target="_blank" href="https://www.instagram.com/sahiba.ltd/"><img src='<?php echo get_template_directory_uri() ?>/images/Gplul.png' alt='png_tw'></a></li>
                <!--<li><a target="_blank" href="https://www.instagram.com/sahiba.ltd/"><img src='<?php echo get_template_directory_uri() ?>/images/pinterest.png' alt='png_tw'></a></li>
                <li><a target="_blank" href="https://www.instagram.com/sahiba.ltd/"><img src='<?php echo get_template_directory_uri() ?>/images/google-plus.png' alt='png_tw'></a></li> -->
                <!--<span>Designed By : Lamppost Designs</span> -->
            </ul>
        </div>
    </div>
</footer>
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content enquiry_section">
            <button type="button" class="close" data-dismiss="modal"><img src="<?php echo get_template_directory_uri() ?>/images/cancel.png" class="img-responsive" ></button>
            <img src="<?php echo get_template_directory_uri() ?>/images/co_logo2.png" alt="" class="enquiry_logo img-responsive">
            <h2>ENQUIRY FORM</h2>
            <p>Please fill in the form below for the enquiry and <span>our represenatative will get back to you as soon as possible</span></p>
            <?php echo do_shortcode('[contact-form-7 id="113" title="Enquir Popup"]') ?>
        </div>
    </div>
</div>
</div>
<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/bootstrap_swip_carousel.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/owl.carousel.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/jquery.scrollify.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/aos.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/shiba.js"></script>
<?php
wp_footer();
global $post;
?>
<?php if (is_home()): ?>
    <script>
        /* scroll section */
        $(document).ready(function () {
            if ($(window).width() >= 767) {
                $.scrollify({
                    section: ".scroll_page",
                    sectionName: "section-name",
                });
            }
        });
        $(document).ready(function () {
            var s = $(".business_area");
            var pos = s.position();
            $(window).scroll(function () {
                var windowpos = $(window).scrollTop();
                if (windowpos >= pos.top) {
                    $('body').addClass('active');
                } else {
                    $('body').removeClass('active');
                }
            });
            var ss = $(".responsbility_area");
            var poss = ss.position();
            $(window).scroll(function () {
                var windowpos = $(window).scrollTop();
                if (windowpos >= poss.top) {
                    $('body').removeClass('active');
                }
            });
            $(".business_tab4").click(function () {
                $(".home_business_video").addClass("active");
                $(".dynmaic_business").addClass("active");
                $(".home_business_video2").removeClass("active");
                $(".home_business_video3").removeClass("active");
                $(".home_business_video4").removeClass("active");
            });
            $(".business_tab7").click(function () {
                $(".home_business_video2").addClass("active");
                $(".dynmaic_business").addClass("active");
                $(".home_business_video").removeClass("active");
                $(".home_business_video3").removeClass("active");
                $(".home_business_video4").removeClass("active");
            });
            $(".business_tab1").click(function () {
                $(".home_business_video3").addClass("active");
                $(".dynmaic_business").addClass("active");
                $(".home_business_video").removeClass("active");
                $(".home_business_video2").removeClass("active");
                $(".home_business_video4").removeClass("active");
            });
            $(".business_tab2").click(function () {
                $(".home_business_video4").addClass("active");
                $(".dynmaic_business").addClass("active");
                $(".home_business_video").removeClass("active");
                $(".home_business_video2").removeClass("active");
                $(".home_business_video3").removeClass("active");
            });
            $(".business_tab3, .business_tab5, .business_tab6").click(function () {
                $(".home_business_video").removeClass("active");
                $(".home_business_video2").removeClass("active");
                $(".home_business_video3").removeClass("active");
                $(".home_business_video4").removeClass("active");
                $(".dynmaic_business").removeClass("active");
            });
        });
    </script>
<?php endif; ?>
<?php
if (is_page() || is_single()):
    $page = $post->post_name;
    switch ($page):
        case 'about-us':
            ?>
            <script>
                /* bootstrap carousel pause on hover not working */
                $('.carousel').carousel({
                    pause: "false",
                    interval: 7000
                });
                setInterval(function () {
                    if ($(window).width() <= 991) {
                        $(".mobile_map").attr("src", "<?php echo get_template_directory_uri() ?>/images/about/about_map2.jpg");
                    }
                });
                /* bootstrap carousel swipe & drag */
                $(document).ready(function () {
                    $("#myCarousel").swiperight(function () {
                        $(this).carousel('prev');
                    });
                    $("#myCarousel").swipeleft(function () {
                        $(this).carousel('next');
                    });
                });
                /* Scroll page */
                $(document).ready(function () {
                    if ($(window).width() >= 767) {
                        $.scrollify({
                            section: ".scroll_page",
                            sectionName: "section-name",

                        });
                    }
                });
                $(document).ready(function () {
                    $(".desktop_mission").click(function () {
                        var heading = $(this).text();
                        var text = $(this).find('h2').attr('data-text');
                        $(this).find('h2').text($("#dynamic_mission").find("h2").text());
                        $(this).find('h2').attr('data-text', $("#dynamic_mission").find("p").html());
                        $("#dynamic_mission").find("h2").text(heading);
                        $("#dynamic_mission").find("p").html(text);
                    });
                });
                $(document).ready(function () {
                    if ($(window).width() <= 767) {
                        $(document).ready(function () {
                            $(".main_vision>div").click(function () {
                                $(this).addClass('active');
                                $(this).siblings().removeClass('active');
                            });
                        });
                        $(document).ready(function () {
                            $(".value").click(function () {
                                var image = $(this).attr("data-img");
                                $(".vision_bg").attr("src", image);
                                $(".vision_bg").addClass('active');
                                $(".vision .main_visible").addClass('active');

                            });
                            $(".mission").click(function () {
                                var image2 = $(this).attr("data-img");
                                $(".vision_bg").attr("src", image2);
                                $(".vision_bg").removeClass('active');
                                $(".vision .main_visible").removeClass('active');
                            });
                        });
                        $(document).ready(function () {
                            $(".mission").click(function () {
                                $(".vision").addClass('active2');
                                $(".vision").removeClass('active3');
                            });
                            $(".value").click(function () {
                                $(".vision").addClass('active3');
                                $(".vision").removeClass('active2');
                            });
                            $(".vision").click(function () {
                                $(".vision").removeClass('active3');
                                $(".vision").removeClass('active2');
                            });
                        });
                    }
                });
                $('.managment_carousel').owlCarousel({
                    margin: 10,
                    nav: true,
                    navText: ['<i class="fa fa-angle-left"></i> Previous', 'Continue Reading <i class="fa fa-angle-right"></i>'],
                    autoplay: false,
                    animateIn: 'fadeIn',
                    animateOut: 'fadeOut',
                    responsive: {
                        0: {
                            items: 1
                        }
                    }
                });
                $(document).ready(function () {
                    $(".corporate_icon1").click(function () {
                        document.getElementById('corporate_Video').play();
                        $(".corporate_shap").addClass('active');
                        $(".corporate_icon").addClass('active');
                    });
                    $(".corporate_icon2").click(function () {
                        document.getElementById('corporate_Video').pause();
                        $(".corporate_shap").removeClass('active');
                        $(".corporate_icon").removeClass('active');
                    });
                });
                $(document).ready(function () {
                    if ($(window).width() <= 767) {
                        //document.getElementById('corporate_Video').play();
                        //document.getElementById('corporate_Video').currentTime = 0;
                    }
                });
                $('.testimonial-carousel').owlCarousel({
                    loop: true,
                    margin: 10,
                    nav: true,
                    navText: ['', ''],
                    autoplay: true,
                    autoplayTimeout: 7000,
                    responsive: {
                        0: {
                            items: 1
                        }
                    }
                });
            </script>
            <?php
            break;
        case 'brands':
            ?>
            <script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/owl.js"></script>
            <script>
                $('.owl-carousel').owlCarousel({
                    margin: 10,
                    item:6,
                    nav: false,
                    autoplay: true,
                    slideTransition: 'linear',
                    autoplayTimeout: 0,
                    autoplaySpeed: 3000,
                    autoplayHoverPause: false,
                    loop: true,
                    responsive: {
                        0: {
                            items: 3,
                            loop: true,
                        },
                        575: {
                            items: 5
                        },
                        767: {
                            items: 5
                        }
                    }
                });
            </script>
            <?php
            break;
        case 'contact-us':
            ?>
            <script>
                $(document).ready(function () {
                    $(".contact_icon>div").click(function () {
                        var dataLocation = $(this).attr("data-location");
                        $('.location_change').attr("src", dataLocation);
                        $(this).addClass("active");
                        $(this).siblings().removeClass("active");

                    });
                });
                setInterval(function () {
                    if ($(window).width() <= 767) {
                        $(".contact_banner").attr("src", "<?php echo get_template_directory_uri() ?>/images/contact_banner_mobile.jpg")
                    }
                });
            </script>
            <?php
            break;
    endswitch;
endif;
?>
</body>
</html>