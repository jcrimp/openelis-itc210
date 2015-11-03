<?php

register_nav_menus( array(
    'main-menu' => __('Main'), 
    'footer-menu' => __('Footer')
));

register_sidebar(array(
    'before_widget' => '<div class="widget">',
    'after_widget' => '</div>', 
    'before_title' => '<h4>', 
    'after_title' => '</h4>'
));

register_sidebar(array(
    'before_widget' => '<div class="widget">',
    'after_widget' => '</div>', 
    'before_title' => '<h4>', 
    'after_title' => '</h4>'
));

add_theme_support('post-thumbnails');

function get_top_parent_page_id() {
    global $post;
    $ancestors = $post->ancestors;
    
    //check if page is a child page (any level)
    if($ancestors) {
        //get ID of top-level page of the tree
        return end($ancestors);
    }
    else {
        //page is top level, so use its ID
        return $post->ID;
    }
}// End get_top_parent_page()

function add_flexslider() { // Display attachment images as a flexslider gallery on single posting
     
    global $post;
    
    $attachments = get_children(array('post_parent' => $post->ID, 'order' => 'ASC', 'orderby' => 'menu_order', 'post_type' => 'attachment', 'post_mime_type' => 'image', ));
    
    if ($attachments) { // If there are images attached to posting, use FlexSlider markup
        echo '<div class="flexslider spotlight">';
        echo '<ul class="slides">';
    
        foreach ( $attachments as $attachment_id => $attachment ) { // create the list items for images with captions
        
            echo '<li>';
            echo wp_get_attachment_image($attachment_id, 'large');
            echo '<p>';
            echo get_post_field('post_excerpt', $attachment->ID);
            echo '</p>';
            echo '</li>';
            
        }
    
        echo '</ul>';
        echo '</div>';
        
    } // End if
    
} // End add_flexslider()

function get_sidebar_if_children() {
    global $post;
    $children = get_pages('child_of='.$post->ID);
    $ancestors = $post->ancestors;
    if( count( $children ) != 0 || $ancestors ){
        get_sidebar();
    }
} // End get_sidebar_if_children()

function custom_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function new_excerpt_more( $more ) {
	return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');

?>