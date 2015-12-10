<?php get_header(); ?>
<?php get_template_part("spotlight") ?>
<?php get_sidebar(); ?>
<?php the_post(); ?>
    <!-- Start Content -->
<?php 
    
    $children = get_pages('child_of='.$post->ID);
    $ancestors = $post->ancestors;
    if( count( $children ) != 0 || $ancestors || (get_the_title() == "F.A.Q.s") ): ?>
    <div class="content large-8 medium-8 columns">
    <?php else: ?>
    <div class="content small-centered large-8 medium-8 columns">    
    <?php endif; ?>  
        <?php the_content(); // get page or posting written content ?>
        <?php if(get_the_title() == "US Software" || get_the_title() == "Global Software") :
            get_template_part("software");
        endif; ?>
        <small>page.php</small> 
    </div> 
    <!-- End Content -->
    
<?php get_footer(); ?>
