<?php get_header(); ?>
    
    <!-- Start Content -->
    <div id="content">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); // start the loop ?>

        <?php the_content(''); // get page or posting written content ?>
        <?php endwhile; endif; // end the loop ?>
        
        <small>front-page.php</small> 
    </div> 
    <!-- End Content -->
    
<?php get_footer(); ?>
