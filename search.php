<?php get_header(); ?>
    
<?php get_sidebar_if_children(); ?>
    
    <!-- Start Content -->
    <div id="content">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); // start the loop ?>
        <article>
            <h1><a href="<?php the_permalink; ?>"><?php the_title(); // get the page or posting title ?></a></h1>
            <?php the_post_thumbnail('thumbnail'); ?>
            <p><small>Posted on <?php the_time('F j, Y'); ?> by <?php the_author(); ?></small></p>
            <?php the_content(''); // get page or posting written content ?>
        </article>
        
        <?php endwhile; endif; // end the loop ?>
        <small>search.php</small> 
    </div> 
    <!-- End Content -->
    
<?php get_footer(); ?>
