<?php get_header(); ?>
    
<?php get_sidebar(); ?>
    
    <!-- Start Content -->
    <div id="content">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); // start the loop ?>
        <h1><a href="<?php the_permalink(); // link to the posting ?>"><?php the_title(); // get the posting title ?></a></h1>
        <small>Posted on <?php the_time('F j, Y'); ?> by <?php the_author(); ?></small>
        <?php the_excerpt(); // get post excerpt ?>
        
        <?php endwhile; endif; // end the loop ?>
        <small>index.php</small> 
    </div> 
    <!-- End Content -->
    
<?php get_footer(); ?>
