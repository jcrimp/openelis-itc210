<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="style/css" />
<title><?php bloginfo('name'); ?></title>
    
<!-- Begin WP Head -->
<?php wp_head(); ?> 
<!-- End WP Head -->
</head>

<body <?php body_class(); ?>>
<!-- Begin Main Navigation -->
<?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'container' => 'nav','container_id' => 'nav-main' ) ); ?>    
<!-- End Main Navigation -->

<!-- Begin main div -->
<div id="main"> 