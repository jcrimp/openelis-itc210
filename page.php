<?php get_header(); ?>
<?php get_template_part("spotlight") ?>
<?php get_sidebar(); ?>
<?php the_post() ?>
    <!-- Start Content -->
    <div class="content large-9 columns">
        
        <?php the_content(); // get page or posting written content ?>
        
        <small>page.php</small> 
    </div> 
    <!-- End Content -->
    
<?php get_footer(); ?>
