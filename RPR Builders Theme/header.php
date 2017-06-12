<!-- BEGIN HEADER -->

<!doctype html>
<html>
    <head>
        
        <meta charset="utf-8" />
        <meta name="robots" content="noindex,nofollow" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
        <meta name="description" content="<?php echo strip_tags(get_the_excerpt()); ?>"/>
        
        <link href='https://fonts.googleapis.com/css?family=Unkempt:400,700|Averia+Sans+Libre:400,700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Raleway:400,300,500,600,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css">
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.5.9/slick.css"/>
        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/slider.css" />
        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/loaderstyles.css" />
        
        <script src="https://code.jquery.com/jquery-2.2.0.js" type="text/javascript"></script>
        <script src="<?php bloginfo('template_directory'); ?>/js/jquery.visible.js" type="text/javascript"></script>
        <script src="<?php bloginfo('template_directory'); ?>/js/rpr.js" type="text/javascript"></script>
        

        <title><?php get_my_title_tag(); ?></title>
        
        <?php wp_head();?>
        
    </head>
<body <?php body_class(); ?>>
    <div class="site-wrapper">
    </div>
        <header class="nav-sticky" id="nav-bar-two">
            
            <!-- LOGO -->
            <div class="logo"><a href="http://www.seagill.com/web170"><img src="<?php bloginfo('template_directory'); ?>/images/RPRlogov2test4.png" alt="logo" /></a></div>
            <figure class="mobile-logo"></figure>
            
            <?php wp_nav_menu( array( 
                'theme_location' => 'main-menu', 
                'container' => 'nav',
                'container_class' => 'top-menu',
                'container_id' => 'top-menu',
                'items_wrap' => '<ul class="medium-up-menu %2$s">%3$s</ul>',
            )); ?>
            
            <div class="menu-collapsed logo-hide">
                
            <!-- BEGIN MOBILE NAV -->    
            <div class="bar"></div>
            <?php wp_nav_menu( array( 
                'theme_location' => 'main-menu', 
                'container' => 'nav',
                'container_class' => 'mobile-nav',
                'items_wrap' => '<ul class="%2$s">%3$s</ul>',
            )); ?>
				
				
            </div>       
        </header>