<!-- BEGIN HEADER -->

<!doctype html>
<html>
    <head>
        
        <meta charset="utf-8" />
        <meta name="robots" content="noindex,nofollow" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
        <meta name="description" content="General contractor with a background in fine art woodworking. Available for hire in the greater Seattle area." />
        
        <link href='https://fonts.googleapis.com/css?family=Unkempt:400,700|Averia+Sans+Libre:400,700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Raleway:400,300,500,600,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css">
        <link rel="stylesheet" type="text/css" href="http://cdn.jsdelivr.net/jquery.slick/1.5.9/slick.css"/>
        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/slider.css" />
        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/loaderstyles.css" />
        
        <script src="https://code.jquery.com/jquery-2.2.0.js" type="text/javascript"></script>
        <script src="<?php bloginfo('template_directory'); ?>/js/jquery.visible.js" type="text/javascript"></script>
        <script src="<?php bloginfo('template_directory'); ?>/js/rpr.js" type="text/javascript"></script>
        

        <title><?php bloginfo('description'); ?> | <?php bloginfo('name'); ?> </title>
        
        <?php wp_head();?>
        
    </head>
<body <?php body_class(); ?>>
	<span id="loading">Loading...</span>
    <progress id='progress-loader' value="1" max="99"></progress>
    <script src="<?php bloginfo('template_directory'); ?>/js/loader.js" type="text/javascript"></script>
    <div class="site-wrapper">
		<div class="slider-wrapper">
            <div class="slider-image">
				<img src="<?php bloginfo('template_directory'); ?>/images/cabinets.jpg" alt="cabinets" />
			</div>
            <div class="slider-image">
				<img src="<?php bloginfo('template_directory'); ?>/images/bathroomplaceholder.jpg" alt="bathroom" />
			</div>
            <div class="slider-image">
				<img src="<?php bloginfo('template_directory'); ?>/images/bedroomplaceholder.jpg" alt="bedroom" />
			</div>
        </div>
    </div>
        <header class="logo-nav-header" id="nav-bar">
            
            <!-- LOGO -->
            <div class="logo">
				<a href="index.php"><img src="<?php bloginfo('template_directory'); ?>/images/RPRlogov2test4.png" alt="logo" /></a>
			</div>
            <figure class="mobile-logo"></figure>
            
            <?php wp_nav_menu( array( 
                'theme_location' => 'main-menu', 
                'container' => 'nav',
                'container_class' => 'top-menu',
                'container_id' => 'top-menu',
                'items_wrap' => '<ul class="medium-up-menu %2$s">%3$s</ul>',
            )); ?>
            
            <!-- BEGIN DESKTOP/TABLET NAV -->
           <!-- <nav class="top-menu" id="top-menu">
                <ul class="medium-up-menu">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="work.html">Our Work</a></li>
                    <li><a href="meetrobert.html">Meet Robert</a></li>
                    <li><a href="personal.html">Personal Work</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </nav> -->

            
            <div class="menu-collapsed logo-hide">
                
            <!-- BEGIN MOBILE NAV -->    
            <div class="bar"></div>
            <?php wp_nav_menu( array( 
                'theme_location' => 'main-menu', 
                'container' => 'nav',
                'container_class' => 'mobile-nav',
                'items_wrap' => '<ul class="%2$s">%3$s</ul>',
            )); ?>
				
			<!-- Hard Coded Mobile Nav -->	
            <!--<nav class="mobile-nav">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Work</a></li>
                    <li><a href="#">Meet Robert</a></li>
                    <li><a href="#">Personal</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
                </nav> --> 
				
            </div>       
        </header>