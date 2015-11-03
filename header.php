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
        $('.spotlight.flexslider').flexslider({
            animation: "slide"
  	    });
        
        $('.carousel.flexslider').flexslider({
            animation: "slide",
            animationLoop: false,
            itemWidth: 160,
            itemMargin: 20,
            minItems: 2,
            maxItems: 6
  	     });
        
        function close_accordion_section() {
        $('.accordion .accordion-section-title').removeClass('active');
		$('.accordion .accordion-section-title span').text('+');
        $('.accordion .accordion-section-content').slideUp(300).removeClass('open');
        }
    
        $('.accordion-section-title').click(function(e) {
            // Grab current anchor value
            var currentAttrValue = $(this).attr('href');
    
            if($(e.target).is('.active')) {
                close_accordion_section();
            }else {
                close_accordion_section();
    
                // Add active class to section title
                $(this).addClass('active');
                // Open up the hidden content panel
                $('.accordion ' + currentAttrValue).slideDown(300).addClass('open');
	   		$('.accordion .accordion-section-title span').text('-'); 
            }
    
            e.preventDefault();
        });
    })
</script>

    
<!-- Begin WP Head -->
<?php wp_head(); ?> 
<!-- End WP Head -->
</head>

<body <?php body_class(); ?>>
<header>
    <!-- Begin header social nav -->
    <nav class="nav-social">
        <ul>
            <li><a href="javascript:;" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/facebook-blue-80.png" alt="Facebook" /></a></li>
            <li><a href="javascript:;" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/twitter-blue-80.png" alt="Twitter" /></a></li>
        </ul>
    </nav>
    <!-- End header social nav -->
    
    <?php get_search_form(); ?>
    
    <h1>
        <a href="<?=home_url()?>">
            <img src="http://placehold.it/200x100?text=logo" alt="OpenELIS Logo" class="logo" />
        </a>
    </h1>
    
</header>
<!-- Begin Main Navigation -->
<?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'container' => 'nav','container_id' => 'nav-main' ) ); ?>    
<!-- End Main Navigation -->
<!-- Begin main div -->
<div id="main"> 