<?php get_header(); ?>
    <div class="row header-image">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); // start the loop 
        

            if (has_post_thumbnail()) { //if a thumbnail has been set
                
                $imgID = get_post_thumbnail_id($post->ID); //get the id of the featured image
                $featuredImage = wp_get_attachment_image_src($imgID, 'full' );//get the url of the featured image (returns an array)
                $imgURL = $featuredImage[0]; //get the url of the image out of the array
                
        ?>
        <style type="text/css">
            
            .header-image {
                border:none;
                color:black;
                background-image: url(<?php echo $imgURL ?>);
                
            }
            
        </style>
        
        <?php }//end if ?>
        
        <h1><?php the_title(); // get the page or posting title ?></h1>
    
    </div> 
    <div class="row">
        <?php custom_breadcrumbs(); ?>
    </div>
    <div class="row">
<?php get_sidebar_if_children(); ?>

    <!-- Start Content -->
    <div id="content" class="large-9 columns">
        

        <?php the_content(''); // get page or posting written content ?>
        
        <?php endwhile; endif; // end the loop ?>
        <small>page.php</small> 
    </div> 
    <!-- End Content -->
    
<?php get_footer(); ?>
