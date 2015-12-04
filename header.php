<!doctype html>
<html class="no-js" lang="en">
<head>
    <title><?php bloginfo('name'); ?></title>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="style/css" />
    <link href="<?php bloginfo('template_directory'); ?>/scss/app.css" rel="stylesheet" type="text/css" media="all" />
    <link href="<?php bloginfo('template_directory'); ?>/stylesheets/flexslider.css" rel="stylesheet" type="text/css" media="all" />
    
    <script src="<?php bloginfo('template_directory'); ?>/bower_components/modernizr/modernizr.js"></script>
     
    
    <script type="text/javascript">
        
    </script>
    
    
    <!-- Begin WP Head -->
    <?php wp_head(); ?> 
<!-- End WP Head -->
</head>

<body <?php body_class(); ?>>
    <div class="header wrapper">
    <header class="row nav">
        <div class="large-12 columns">
            <a class="menu-button" href="javascript:;">&#9776;  MENU</a>
            <a class="search-button"><img src="<?php bloginfo('template_directory'); ?>/images/search-icon-white.png" alt="Search icon" /></a>
            <?php get_search_form(); ?>
        <!-- Begin header social nav -->
        
        <nav class="nav-social">
            <ul>
                <li><a href="https://www.facebook.com/Openelis-Foundation-301378923313438/" class="social" target="_blank"><i class="flaticon-facebook41"></i></a></li>
                <li><a href="javascript:;" class="social" target="_blank"><i class="flaticon-twitter1"></i></a></li>
            </ul>
        </nav>
        <!-- End header social nav -->

        <h1>
            <a href="<?=home_url()?>">
                <img src="<?php bloginfo('template_directory'); ?>/images/openelis-logo.png" alt="OpenELIS Logo" class="logo" />
                <span>OpenELIS Foundation</span>
            </a>  
        </h1>
        <!-- Begin Main Navigation -->
        <nav id="nav-main" class="main-menu-container">
        <?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'container' => false) ); ?> 
        </nav>
        <!-- End Main Navigation -->
            
        <!-- Begin Mobile Navigation -->
        <nav id="nav-mobile">
            <?php wp_nav_menu( array( 'theme_location' => 'mobile-menu', 'container' => false) ); ?>
        </nav>
        </div>
    </header>
    </div>
    
<!-- Begin main div -->
<div class="main-container wrapper"> 
