<?php get_header(); ?>
    
<?php get_sidebar(); ?>
    
    <!-- Start Content -->
    <div id="content">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); // start the loop ?>
        <h1><?php the_title(); // get the page or posting title ?></h1>
        <?php the_content(''); // get page or posting written content ?>
        
        <?php endwhile; endif; // end the loop ?>
        <small>page.php</small> 
    </div> 
    <!-- End Content -->
    
<?php get_footer(); ?>