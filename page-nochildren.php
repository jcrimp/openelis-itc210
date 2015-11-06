<?php
/**
 * Template Name: No Children
 * Description: Page template for a a page without children, and therefore no sidebar. Single column layout.
 */
get_header(); 
get_template_part('spotlight'); ?>
    
    <!-- Start Content -->

    <div id="content">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); // start the loop  ?>
        <?php the_content(''); // get page or posting written content ?>
        <?php endwhile; endif; // end the loop ?>

        <small>page-nochildren.php</small> 
    </div> 
    <!-- End Content -->
    
<?php get_footer(); ?>
