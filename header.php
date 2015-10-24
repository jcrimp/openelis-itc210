<!doctype html>
<html>
<head>
<title><?php bloginfo('name'); ?></title>
    
<meta charset="UTF-8">
    
<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="style/css" />
<link href="<?php bloginfo('template_directory'); ?>/css/flexslider.css" rel="stylesheet" type="text/css" media="all" />

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/scripts/jquery.flexslider-min.js"></script> 
    
<script type="text/javascript">
    $(document).ready(function(){
        $('.flexslider').flexslider({
            animation: "fade",
            slideshow: false,
        });
    })
</script>

    
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