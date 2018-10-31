<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="images/favicon.png" type=""/>
        <link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
        <?php wp_head()?>
    </head>
    <?php
        global $post;
        $class = '';
        if(is_home() || $post->post_name == "brands"){
            $class = 'home-page';
        }elseif ($post->post_name == "about-us") {
            $class = 'about-page';
        }elseif ($post->post_name == "media") {
            $class = 'media-page';
        } elseif($post->post_name == 'contact-us'){
            $class = 'contact-page header-section';
        }else {
            if(is_singular('post')){
                $class = 'media-page media-details-page';
            }else{
                $class = 'business_page career-page header-section';
            }
        }
    ?>
    <body class="<?php echo $class?>">
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v3.2&appId=1544781035563148&autoLogAppEvents=1';
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
        </script>
        <!-- header area start -->
        <header>
            <div class="header-container">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3 col-md-3">
                            <div class="logo">
                                <?php if(has_custom_logo()):?>
                                    <?php
                                        $custom_logo_id = get_theme_mod( 'custom_logo' );
                                        $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                                    ?>
                                    <a href="<?php echo home_url()?>" class="img_logo"> 
                                        <img src="<?php echo $image[0] ?>">
                                    </a>
                                <?php endif;?>
                                <a href="<?php echo home_url()?>">
                                    <img src="<?php echo home_url()?>/wp-content/uploads/2018/10/co_logo2.png" alt="" class="img_logo2">
                                </a>
                                <div class="mobile-trigger"><i></i></div>
                            </div>
                        </div>
                        <div class="col-sm-9 col-md-9">
                            <div class="custom-menu-primary clearfix">
                                <?php wp_nav_menu(['container' => false, 'menu_id' => 'primary'])?>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </header>
        <!-- header area end -->
        <div class="mobile_area">