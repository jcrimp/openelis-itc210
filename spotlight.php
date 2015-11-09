<div class="row header-image">
        <?php if (has_post_thumbnail()) : //if a thumbnail has been set       
            $imgID = get_post_thumbnail_id($post->ID); //get the id of the featured image
            $featuredImage = wp_get_attachment_image_src($imgID, 'full' );//get the url of the featured image (returns an array)
            $imgURL = $featuredImage[0]; //get the url of the image out of the array       
        ?>
        <img src="<?=$imgURL?>" alt="Spotlight" class="spotlight"/>
        <?php endif; 
    
        if (is_home()): ?>
            <h1>News</h1>
        <?php else: ?>
             <h1><?php echo get_the_title($post->title); // get the page or posting title ?></h1>
        <?php endif; ?>
    </div>
<!-- end header image row -->

<!-- begin breadcrumbs row -->
    <div class="row breadcrumbs">
        <?php custom_breadcrumbs(); ?>
    </div>
<!-- end breadcrumbs row -->

<!-- begin row that contains content -->
    <div class="row">