<?php get_header(); ?>
<!-- begin breadcrumbs row wrapper -->
<div class="wrapper breadcrumbs">
    <div class="row">
        <div class="large-12 columns">
            <?php custom_breadcrumbs(); ?>
        </div>
    </div>
</div>
<!-- end breadcrumbs row -->

<!-- begin row that contains content -->
<div class="row main">   

    <?php get_sidebar(); ?>
    
    <!-- Start Content -->
    <div class="content large-8 medium-8 columns">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); // start the loop ?>
        <article>
            <h1><a href="<?php the_permalink(); ?>"><?php the_title(); // get the page or posting title ?></a></h1>
            <?php the_post_thumbnail('thumbnail'); ?>
            <p><small>Posted on <?php the_time('F j, Y'); ?> by <?php the_author(); ?></small></p>
            <?php the_content(''); // get page or posting written content ?>
        </article>
        
        <?php endwhile; endif; // end the loop ?>
        <small>archive.php</small> 
    </div> 
    <!-- End Content -->
    
<?php get_footer(); ?>
