<!DOCTYPE html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

<head>


    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title><?php wp_title(''); ?></title>
    
    <!-- <link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico" /> -->
    <link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico" type="image/x-icon">
<link rel="icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico" type="image/x-icon">

    <!--Carousel-->
    <link href="<?php bloginfo('stylesheet_directory'); ?>/jsImgSlider/themes/1/js-image-slider.css" rel="stylesheet" type="text/css" />
    <script src="<?php bloginfo('stylesheet_directory'); ?>/jsImgSlider/themes/1/js-image-slider.js" type="text/javascript"></script>

    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Great+Vibes' rel='stylesheet' type='text/css'>

    <?php wp_head(); ?>
    <?php get_wpbs_theme_options(); ?>
    
    <!-- css3-mediaqueries.js for IE less than 9 -->
    <!--[if lt IE 9]>
        <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->
    
    <!-- html5.js for IE less than 9 -->
    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <script type='text/javascript' src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>
    <![endif]-->

    
</head>

<body class="body-bg" <?php body_class();?>>
<?php get_template_part( 'partials/svg','icons'); ?>
<?php if (of_get_option('remove_top_bar') != 1) : ?> 
<?php endif; ?>
<header role="banner">
<div class="container trans">
	<div class="row">
            <div class="col-sm-6 col-md-6 col-lg-5">
                <?php $logo_header = of_get_option('logo_header');
				  if ($logo_header) { ?>
				   <a class="main-logo" href="<?php echo get_option('home'); ?>" title="<?php bloginfo('name'); ?>">
                        <img src="<?php echo $logo_header; ?>" alt="<?php bloginfo('name'); ?>" class="img-responsive "/>
                   </a>
				<?php } else { ?>
					<a class="main-logo" href="<?php echo get_option('home'); ?>" title="<?php bloginfo('name'); ?>">
						<img src="<?php bloginfo('template_url'); ?>/i/logo.png" alt="<?php bloginfo('name'); ?>" class="img-responsive"/>
					</a>
				<?php } ?>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-7">
                
                <div class="h-phone">
                	<?php
						$phone_new = contact_detail('phone_new', '' , '', false);
                        $phone_current = contact_detail('phone_current', '' , '', false);
					?>
                    <?php if (!empty($phone_new)) : ?>
                        New Patients: <span itemprop="telephone"><strong><?php echo $phone_new; ?></strong></span><br/>
                    <?php endif; ?>
                    <?php if (!empty($phone_new)) : ?>
                        Current Patients:
                    <?php else: ?>
                        Phone: 
                    <?php endif; ?>
                        <span itemprop="telephone"><strong><?php echo $phone_current; ?></strong></span>
                </div>
                <div class="h-address">
                    <span><?php if (function_exists('contact_detail')) { contact_detail('address_short'); } ?></span>
                </div>
            </div>
     </div>
</div>
<!-- <div class="container">
    <div class="top-bar">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <span class="hours-short"><span class="glyphicon glyphicon-time"></span> <?php if (function_exists('contact_detail')) { contact_detail('hours_short'); } ?> - <a href="#">Contact Us</a></span>
            </div>
        </div>
    </div>
</div> -->
</header>
<?php if (of_get_option('make_nav_sticky') == 1) : ?>
<div data-spy="affix" data-offset-top="210" data-offset-bottom="200">
<?php endif; ?> 
<!-- <div class="navbar navbar-default">-->
    <div class="containernav">
          <nav class="navigation navbar navbar-default" role="navigation">
              <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span>Menu</span>
                  </button>
              </div>
        
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <?php 
                        wp_nav_menu( array(
                        'theme_location'       => 'Main Menu',
                        'depth'      => 3,
                        'container'  => false,
                        'menu_class' => 'nav navbar-nav',
                        'walker' => new twitter_bootstrap_nav_walker(),
                        'fallback_cb'    => '__return_false')
                        );
                    ?>
            <div class="social-links login-hide pull-left margin-righ">
            <?php if ( is_user_logged_in() ) { ?>
            <a href="<?php echo wp_logout_url(''); ?>"><span class="glyphicon glyphicon-log-out white"> Logout</span></a>
                         
        <?php } else { ?>

            <a href="<?php echo wp_login_url(''); ?>"><span class="glyphicon glyphicon-log-in white"> Login</span></a>
            <a href="<?php echo get_option('home'); ?>/register"><span class="glyphicon glyphicon-new-window white"> Register</span></a>
        <?php } ?>
            </div>
               </div>
          </nav>
    </div>
</div>
<?php if (of_get_option('make_nav_sticky') == 1) : ?> 
<!-- </div> -->
<?php endif; ?>


