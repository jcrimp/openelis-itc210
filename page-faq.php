<?php
/**
 * Template Name: FAQ
 * Description: Page template for FAQ page
 */
get_header(); 
get_template_part('spotlight');
get_sidebar(); ?>
    
    <!-- Start Content -->
    <div class="content large-8 medium-8 columns">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); // start the loop  ?>
        <?php the_content(''); // get page or posting written content ?>
        <?php endwhile; endif; // end the loop ?>
        <?php wp_reset_query(); 
        $counter = 1; ?>
        
        <div class="accordion">
            <h3 id="lab-experts">Lab Experts</h3>
            <?php 
            $args = array( 'post_type' => 'faq', 'posts_per_page' => 30, 'category_name' => 'lab-experts' );
            $the_query = new WP_Query( $args );             
            //$counter1 = 1;
            ?>
            <?php if ( $the_query->have_posts() ) : ?>
                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                <div class="accordion-section">
                    <a class="accordion-section-title" href="#lab-experts-<?=$counter?>"><?php the_title(); ?><span> +</span></a>
                    <div class="accordion-section-content" id="lab-experts-<?=$counter?>">
                        <?php the_content(); ?> 
                    </div><!-- end accordion-section-content -->
                </div><!-- end accordion section -->
                
                <?php $counter++;
                endwhile; ?>
            <?php wp_reset_postdata(); ?>
            <?php else:  ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; ?>
            
            
            <h3 id="developers">Developers</h3>
            <?php 
            $args = array( 'post_type' => 'faq', 'posts_per_page' => 30, 'category_name' => 'developers' );
            $the_query = new WP_Query( $args ); 
            ?>
            <?php if ( $the_query->have_posts() ) : 
                //$counter2 = 1; ?>
                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                <div class="accordion-section">
                    <a class="accordion-section-title" href="#developers-<?=$counter?>"><?php the_title(); ?><span> +</span></a>
                    <div class="accordion-section-content" id="developers-<?=$counter?>">
                        <?php the_content(); ?> 
                    </div><!-- end accordion-section-content -->
                </div><!-- end accordion section -->
                <?php $counter++;
                endwhile; ?>
            <?php wp_reset_postdata(); ?>
            <?php else:  ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; ?>
            
            <h3 id="implementers">Implementers</h3>
            <?php 
            $args = array( 'post_type' => 'faq', 'posts_per_page' => 30, 'category_name' => 'implementers' );
            $the_query = new WP_Query( $args ); 
            ?>
            <?php if ( $the_query->have_posts() ) : 
                //$counter3 = 1; ?>
                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                <div class="accordion-section">
                    <a class="accordion-section-title" href="#implementers-<?=$counter?>"><?php the_title(); ?><span> +</span></a>
                    <div class="accordion-section-content" id="implementers-<?=$counter?>">
                        <?php the_content(); ?> 
                    </div><!-- end accordion-section-content -->
                </div><!-- end accordion section -->
                <?php $counter++;
                endwhile; ?>
            <?php wp_reset_postdata(); ?>
            <?php else:  ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; ?>
            
        </div><!-- end accordion -->
        
        <small>page-faq.php</small> 
    </div> 
    <!-- End Content -->
    
<?php get_footer(); ?>
