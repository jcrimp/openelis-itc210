<?php get_header(); ?>
<?php get_template_part('spotlight'); ?>   
<?php get_sidebar(); ?>
    
    <!-- Start Content -->
    <div class="content large-8 medium-8 columns">
        <?php query_posts('posts_per_page=1');
        if ( have_posts() ) : while ( have_posts() ) : the_post(); // start the loop ?>
        <h1><a href="<?php the_permalink();?>"><?php the_title(); // get the page or posting title ?></a></h1>
            <small>Posted on <?php the_time('F j, Y'); ?> by <?php the_author(); ?></small><br />
            <article><?php the_content(''); // get page or posting written content ?></article>
            <?php endwhile;
            endif; 
            wp_reset_query(); ?>
        <h2>Recent News</h2>
	       <div class="flexslider carousel">
              <ul class="slides">
                  <?php  
                  $args = array( 'posts_per_page' => 20, 'offset'=> 1 );
                  
                  $myposts = get_posts( $args );
                  foreach ( $myposts as $post ) : setup_postdata( $post ); 
                  $excerpt = get_the_excerpt(); 
                  $shortexcerpt = wp_trim_words($excerpt, 25, '...')?>
                  <li>
                        <a href="<?php the_permalink(); // link to the posting ?>">
                        <?php the_post_thumbnail('small'); ?>
                        <h3><?php the_title(); // get the posting title ?></h3></a>
                        <small>Posted on <?php the_time('F j, Y'); ?> by <?php the_author(); ?></small><br />
                        <p><?=$shortexcerpt?></p>
                      <p class="read-more"><a href="<?php the_permalink(); ?>">Read More</a></p>
                  </li>
                  <?php endforeach; 
                  wp_reset_postdata();?>  
              </ul>
	       </div>
    </div> 
    <!-- End Content -->
    
<?php get_footer(); ?>
