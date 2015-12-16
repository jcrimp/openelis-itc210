<?php
/**
 * Template Name: Full Width
 * Description: Page template for a full-width (12 column) single column page layout.
 */
get_header(); 
get_template_part('spotlight'); ?>
    
    <!-- Start Content -->
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); // start the loop  ?>
        <?php the_content(''); // get page or posting written content ?>
        <?php endwhile; endif; // end the loop ?>
    <!-- End Content -->
    
<?php get_footer(); ?>
