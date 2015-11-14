<?php
/**
 * Template Name: FAQ
 * Description: Page template for FAQ page
 */
get_header(); 
get_template_part('spotlight');
get_sidebar(); ?>
    
    <!-- Start Content -->
    <div class="content large-8 medium-8 columns">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); // start the loop  ?>
        <?php the_content(''); // get page or posting written content ?>
        <?php endwhile; endif; // end the loop ?>

        <small>page-faq.php</small> 
    </div> 
    <!-- End Content -->
    
<?php get_footer(); ?>
