<?php get_header(); ?>
<!-- begin breadcrumbs row wrapper-->
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
    
    <!-- Start Content -->
    <div class="content small-centered large-8 medium-8 columns">
        <h1>Search Results</h1>
        <?php get_search_form(); ?>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); // start the loop ?>
        <article>
            <h1><a href="<?php the_permalink; ?>"><?php the_title(); // get the page or posting title ?></a></h1>
            <?php the_post_thumbnail('thumbnail'); ?>
            <p><small>Posted on <?php the_time('F j, Y'); ?> by <?php the_author(); ?></small></p>
            <?php the_excerpt(); // get page or posting written content ?>
        </article>
        
        <?php endwhile; endif; // end the loop ?>
        <small>search.php</small> 
    </div> 
    <!-- End Content -->
    
<?php get_footer(); ?>
