

<div class="spotlight wrapper">
        <?php 
        $leaflet = get_field( 'leaflet_map_shortcode' );
        if(!empty($leaflet)): ?>
            <div class="leaflet-map-container">
                <?=$leaflet?>
            </div>
        <?php elseif (has_post_thumbnail()) : //if a thumbnail has been set       
            $imgID = get_post_thumbnail_id($post->ID); //get the id of the featured image
            $featuredImage = wp_get_attachment_image_src($imgID, 'full' );//get the url of the featured image (returns an array)
            $imgURL = $featuredImage[0]; //get the url of the image out of the array ?>
            <img src="<?=$imgURL?>" alt="Spotlight Image" />
        <?php endif; ?>
    
    <div class="row">
        <div class="large-12 columns">
        <?php if (is_home()): ?>
            <h1>News</h1>
        <?php else: ?>
             <h1><?php echo get_the_title($post->title); // get the page or posting title ?></h1>
        <?php endif; ?>
        </div>
    </div>
    </div>
<!-- end header image wrapper -->

<!-- begin breadcrumbs row wrapper -->
<div class="wrapper breadcrumbs">
    <div class="row">
        <div class="large-12 columns">
            <?php custom_breadcrumbs(); ?>
        </div>
    </div>
</div>
<!-- end breadcrumbs row wrapper -->

<!-- begin row that contains content -->
    <div class="row main">