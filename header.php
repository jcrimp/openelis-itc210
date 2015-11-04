<!doctype html>
<html class="no-js" lang="en">
<head>
    <title><?php bloginfo('name'); ?></title>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="style/css" />
    <link href="<?php bloginfo('template_directory'); ?>/stylesheets/app.css" rel="stylesheet" type="text/css" media="all" />
    <link href="<?php bloginfo('template_directory'); ?>/stylesheets/flexslider.css" rel="stylesheet" type="text/css" media="all" />
    
    <script src="<?php bloginfo('template_directory'); ?>/bower_components/modernizr/modernizr.js"></script>
     
    
    <script type="text/javascript">
        
    </script>
    
    
    <!-- Begin WP Head -->
    <?php wp_head(); ?> 
<!-- End WP Head -->
</head>

<body <?php body_class(); ?>>
    <header class="row">
        <!-- Begin header social nav -->
        <?php get_search_form(); ?>
        <nav class="nav-social">
            <ul>
                <li><a href="javascript:;" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/facebook-blue-80.png" alt="Facebook" /></a></li>
                <li><a href="javascript:;" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/twitter-blue-80.png" alt="Twitter" /></a></li>
            </ul>
        </nav>
        <!-- End header social nav -->
        
        
    </header>
        
    <div class="row nav">
        <h1>
            <a href="<?=home_url()?>">
                <img src="http://placehold.it/200x100?text=logo" alt="OpenELIS Logo" class="logo" />
                <span>OpenELIS Foundation</span>
            </a>  
        </h1>
        <!-- Begin Main Navigation -->
        <?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'container' => 'nav','container_id' => 'nav-main' ) ); ?>    
        <!-- End Main Navigation -->
        
    </div>
    

    
    
<!-- Begin main div -->
<div id="main"> 