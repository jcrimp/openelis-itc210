<div class="row header-image">
        <?php if (has_post_thumbnail()) : //if a thumbnail has been set       
            $imgID = get_post_thumbnail_id($post->ID); //get the id of the featured image
            $featuredImage = wp_get_attachment_image_src($imgID, 'full' );//get the url of the featured image (returns an array)
            $imgURL = $featuredImage[0]; //get the url of the image out of the array       
        ?>
        <img src="<?=$imgURL?>" alt="Spotlight" class="spotlight"/>
        <?php endif ?>
        
        <h1><? if(is_home()):
             echo 'News';
             else:
             the_title(); // get the page or posting title 
            endif; ?>
        </h1>
    
    </div> 
    <div class="row">
        <?php custom_breadcrumbs(); ?>
    </div>
    <div class="row">