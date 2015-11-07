<?php get_header();
get_template_part('spotlight');   
get_sidebar(); ?>
    
    <!-- Start Content -->
    <div class="content large-9 columns">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); // start the loop ?>
        <?//php add_flexslider(); // create flexslider gallery if the post has attachment images?>
        <article>
            <h1><?php the_title(); // get the page or posting title ?></h1>
            <small>Posted on <?php the_time('F j, Y'); ?> by <?php the_author(); ?></small>
            <?php the_content(''); // get page or posting written content ?>
        </article>
        
        <?php endwhile; endif; // end the loop ?>
        <small>single.php</small> 
    </div> 
    <!-- End Content -->
    
<?php get_footer(); ?>
