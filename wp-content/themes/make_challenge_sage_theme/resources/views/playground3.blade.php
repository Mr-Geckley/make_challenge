{{--
  Template Name: Playground3
--}}

<!-- ABOUT THE SYNTAX: I very much would have liked to utlize Blade 
to greater effect, however, time was limited and I decided to forego 
trying to implement a framework with which I am unfamiliar.  -->

<!-- ABOUT BOOTSTRAP: I was initially unsuccessful in 
following the Sage convention. Styling is on the tail-end of 
my development process, so in the spirit of forward momentum, I decided to pull Boostrap CDN directly into 'head.blade.php'.  -->

<!doctype html>
<html {!! get_language_attributes() !!}>
<!-- the line below brings in the <head> tag -->
@include('partials.head')

<!-- HEADER -->
<header class="banner">
    <div class="container-fluid hide-on-mobile green-nav-bar">
        
            <div class="green-nav-bar"></div>
        
    </div>

<!-- DESKTOP GLOBAL NAV -->

    <div class="hide-on-mobile">
        <div class="row header-row">
    <!-- COLUMN 1, left-side nav -->
            <div class="col-md-5">
                <div class="left-menu-container">
                    <ul class="navi-menu left-side-menu" >
                        <li  class="nav-item dark-text" style="color: #5B5C5E">

                        <?php $sub_nav_header = get_field('sub_nav_header');?>

                            <a href="<?php echo $sub_nav_header['url']; ?>"><?php echo $sub_nav_header['title']; ?></a>
                        </li>

                        <?php $main_nav_item_1 = get_field('main_nav_item_1');?>

                        <li  class="nav-item dark-text">
                        <a href="<?php echo $main_nav_item_1['url']; ?>"><?php echo $main_nav_item_1['title']; ?></a>
                        </li>
                    </ul>
                </div>
            </div>
    <!-- COLUMN 2, logo -->
            <div class="cod-md-2">
            <?php $main_logo_link = get_field('main_logo_link');?>

                <a href= "<?php echo $main_logo_link['url']; ?>">
                <img src="<?php echo get_field ('main_logo')['url'];?>" alt="company logo" width="100%">
                </a>
            </div>
    <!-- COLUMN 3, right-side nav -->
            <div class="col-md-5">
                <div class="right-menu-container">
                    <ul class="nav-menu right-side-menu">
                        <li class="nav-item dark-text">
                        <?php $main_nav_item_2 = get_field('main_nav_item_2');?>

                            <a href="<?php echo $main_nav_item_2['url']; ?>"><?php echo $main_nav_item_2['title']; ?></a>
                        </li>

                        <li class="nav-item dark-text">
                        <?php $main_nav_item_3 = get_field('main_nav_item_3');?>

                        <a href="<?php echo $main_nav_item_3['url']; ?>"><?php echo $main_nav_item_3['title']; ?></a>
                        </li>


                        <li class="nav-item dark-text">
                        <?php $main_nav_item_4 = get_field('main_nav_item_4');?>

                        <a href="<?php echo $main_nav_item_4['url']; ?>"><?php echo $main_nav_item_4['title']; ?></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>



    <div class="wrap" role="document">
        <div class="content row">
            <main class="main">
               
                <style>
                    .hero-bg {
                        /* background-image: url(https://images.pexels.com/photos/675951/pexels-photo-675951.jpeg?auto=format%2Ccompress&cs=tinysrgb&dpr=2&h=650&w=940); */
                        background-size: cover;
                        background-position: 50%;
                        
                    }
                    
                </style>
<!-- HERO CONTAINER START -->
                    
                <div class="container-fluid hero-bg" style="background-image: url('<?php echo get_field ('background_image')['url'];?>')">
                    <div class="col-12 container-max-width">
                    
                        <div class="row homepage-hero-row">
                            <div class="col-md-12 homepage-hero-col">
                                <div class="row" style="margin-top: 50px;">
                                    <div class="col-md-6 homepage-hero-text-col">
                                        <h1 class="hero-header">
                                            <?php the_field('hero_1_title'); ?>
                                            <div class="bold">
                                            <?php the_field('hero_1_subtitle'); ?>
                                            </div>
                                        </h1>
                                       
                                       <?php
                                        $hero_1_button = get_field('hero_1_button');
                                        ?>

                                        <a href="<?php echo $hero_1_button['url']; ?>"
                                            target="<?php echo $hero_1_button['target']; ?>"
                                        >
                                            <div class="button-on-image">
                                            <?php echo $hero_1_button['title']; ?>
                                            </div>
                                        </a>

                                        <?php
                                        $phone_number = get_field('phone_number');
                                        ?>
                                        <a href="<?php echo $hero_1_button['url']; ?>">
                                            <h1 class="phone-number"><?php echo $phone_number['title']; ?></h1>
                                        </a>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
<!-- HERO CONTAINER END -->

                <!-- SERVICES SECTION START -->
                <div class="" >
                    <div class="row homepage-services-row" >
                        <div class="offset-md-2 col-md-8 homepage-services-col" >
                            <h1><?php the_field('text_block_1_header'); ?></h1>
                            <p></p>
                            <p>
                            <?php the_field('text_block_1_paragraph'); ?>
                            </p>
                            <p></p>

                            <?php $text_block_1_link = get_field('text_block_1_link');?>
                            <a href="<?php echo $text_block_1_link['url']; ?>">
                                <div class="button-on-white">
                                <?php echo $text_block_1_link['title']; ?>
                                </div>
                            </a>


                        </div>
                    </div>
                </div>
                <!-- SERVICES SECTION END -->

                <!-- SECOND HERO START -->
                <style>
                    .second-hero-bg {
                        /* background-image: url(https://images.pexels.com/photos/675951/pexels-photo-675951.jpeg?auto=format%2Ccompress&cs=tinysrgb&dpr=2&h=650&w=940); */
                        background-size: cover;
                        background-position: 50%;
                    }
                </style>
                <div class="container-fluid second-hero-bg" style="background-image: url('<?php echo get_field ('hero_2_bg_image')['url'];?>')">
                    <div class="container-max-width">
                        <div class="row second-homepage-hero-row">
                            <div class="col-md-12 second-homepage-hero-col">
                                <div class="row">
                                    <div class="offset-md-6 col-md-6 text-col">
                                        <h1 class="hero-header">
                                        <?php the_field('hero_2_title'); ?>
                                            <div class="bold">
                                        <?php the_field('hero_2_subtitle'); ?>

                                            </div>
                                        </h1>


                                        <?php
                                        $hero_2_button = get_field('hero_2_button');
                                        ?>

                                        <a href="<?php echo $hero_2_button['url']; ?>"
                                            target="<?php echo $hero_2_button['target']; ?>"
                                        >
                                            <div class="button-on-image">
                                            <?php echo $hero_2_button['title']; ?>
                                            </div>
                                        </a>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- SECOND HERO END -->

                <!-- MENU SECTION START -->
                <div class="">
                    <div class="row homepage-menu-row">
                        <div class="offset-md-2 col-md-8 text-col">
                            <h1><?php the_field('text_block_2_header'); ?></h1>
                            <p></p>
                            <p>
                            <?php the_field('text_block_2_paragraph'); ?>
                            </p>
                            <p></p>


                            <?php $text_block_2_link = get_field('text_block_2_link');?>
                            <a href="<?php echo $text_block_2_link['url']; ?>">
                                <div class="button-on-white">
                                <?php echo $text_block_2_link['title']; ?>
                                </div>
                            </a>


                        </div>
                    </div>
                </div>
                <!-- MENU SECTION END -->
               
                <!-- SERVICE CAROUSEL START -->
                    <div style="width: 60vw; margin-left: auto; margin-right: auto; margin-top: 5rem;">
                        <?php 
                            the_field('carousel');  
                        ?>
                    </div>
                <!-- SERVICE CAROUSEL END -->
                <?php $call_to_action_button = get_field('call_to_action_button');?>
                            <a href="<?php echo $call_to_action_button['url']; ?>">
                                <div class="button-on-white call-to-action">
                                <?php echo $call_to_action_button['title']; ?>
                                </div>
                            </a>
            </main>
            <!-- END MAIN -->
        </div>
        <!-- END CONTENT -->
    </div>
    <!-- END WRAP -->

    <div class="void-balloon"></div>

    <div class="container-fluid footer-container">
        <div class="row links-row">
            <div class="col-md-3 logo-col"> <!-- COMPANY LOGO -->
                <img src="<?php echo get_field ('footer_logo')['url'];?>" alt="company logo">
                <p style="color: white;"><?php the_field('footer_address'); ?></p>
            </div>
            <div class="col-md-3 link-col"> <!-- LINKS COLUMN -->
                <div class="menu-footer-menu-container">
                    <ul id="menu-footer-menu" class="nav">

                        <?php $footer_link_1 = get_field('footer_link_1');?>
                        <li id="menu-item-124" class="footer-nav-link">
                            <a href="<?php echo $footer_link_1['url']; ?>" aria-current="page"><?php echo $footer_link_1['title']; ?></a>
                        </li>


                        <?php $footer_link_2 = get_field('footer_link_2');?>
                        <li id="menu-item-124" class="footer-nav-link">
                            <a href="<?php echo $footer_link_2['url']; ?>" aria-current="page"><?php echo $footer_link_2['title']; ?></a>
                        </li>


                        <?php $footer_link_3 = get_field('footer_link_3');?>
                        <li id="menu-item-124" class="footer-nav-link">
                            <a href="<?php echo $footer_link_3['url']; ?>" aria-current="page"><?php echo $footer_link_3['title']; ?></a>
                        </li>


                        <?php $footer_link_4 = get_field('footer_link_4');?>
                        <li id="menu-item-124" class="footer-nav-link">
                            <a href="<?php echo $footer_link_4['url']; ?>" aria-current="page"><?php echo $footer_link_4['title']; ?></a>
                        </li>


                        <?php $footer_link_5 = get_field('footer_link_5');?>
                        <li id="menu-item-124" class="footer-nav-link">
                            <a href="<?php echo $footer_link_5['url']; ?>" aria-current="page"><?php echo $footer_link_5['title']; ?></a>
                        </li>


                        <?php $footer_link_6 = get_field('footer_link_6');?>
                        <li id="menu-item-124" class="footer-nav-link">
                            <a href="<?php echo $footer_link_6['url']; ?>" aria-current="page"><?php echo $footer_link_6['title']; ?></a>
                        </li>

                    </ul>
                </div>
            </div>
            <div class="col-md-3 contact-col"> <!-- CONTACTS COLUMN -->
                <div class="column-header" style="color: white;">
                <?php the_field('footer_contact_header'); ?>
                    <hr class="short-green-hr">
                </div>
                <div class="contact-links footer-text">

                    <?php $contact_link_1 = get_field('contact_link_1');?>
                    <a href="<?php echo $contact_link_1['url']; ?>">
                    <?php echo $contact_link_1['title']; ?>
                    </a>


                    <br>


                    <?php $contact_link_2 = get_field('contact_link_2');?>
                    <a href="<?php echo $contact_link_2['url']; ?>">
                    <?php echo $contact_link_2['title']; ?>
                    </a>


                    <br>
                    <div class="email">


                    <?php $contact_link_3 = get_field('contact_link_3');?>
                    <a href="<?php echo $contact_link_3['url']; ?>">
                    <?php echo $contact_link_3['title']; ?>
                    </a>


                    </div>
                </div>
            </div>
            <div class="col-md-3 social-col footer-text"> <!-- SOCIAL COLUMN -->
                <div class="column-header" style="color: white;">
                <?php the_field('footer_social_icon_header'); ?>
                    <hr class="short-green-hr">
                </div>
                <div class="social-links">

                    <?php $footer_social_link_1 = get_field('footer_social_link_1');?>
                    <a href="<?php echo $footer_social_link_1['url']; ?>" target="<?php echo $footer_social_link_1['target']; ?>">
                        <img src="<?php echo get_field ('footer_social_icon_1')['url'];?>" alt="facebook logo">
                    </a>


                    <?php $footer_social_link_2 = get_field('footer_social_link_2');?>
                    <a href="<?php echo $footer_social_link_2['url']; ?>" target="<?php echo $footer_social_link_2['target']; ?>">
                        <img src="<?php echo get_field ('footer_social_icon_2')['url'];?>" alt="facebook logo">
                    </a>


                    <?php $footer_social_link_3 = get_field('footer_social_link_3');?>
                    <a href="<?php echo $footer_social_link_3['url']; ?>" target="<?php echo $footer_social_link_3['target']; ?>">
                        <img src="<?php echo get_field ('footer_social_icon_3')['url'];?>" alt="facebook logo">
                    </a>


                </div>
            </div>
        </div>
        <div class="row">
            <div class="cold-md-12">
                <hr>
            </div>
        </div>
        <div class="row" >
            <div class="col-md-23" style="color: white; margin-left: auto; margin-right: auto; margin-bottom: 1.5rem;">
            <?php the_field('footer_copyright_statement'); ?>
            </div>
        </div>
    </div>

<!-- the line below brings in the WP menue you see during the page preview -->
    @php wp_footer() @endphp
  </body>
</html>