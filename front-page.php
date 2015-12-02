<?php get_header(); ?>
    
    <!-- Start Content -->
    <div id="content">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); // start the loop ?>

        <?php
        $metaslider = get_field('metaslider_shortcode');
        if(!empty($metaslider)): 
        echo do_shortcode("$metaslider");
        endif; ?>
        <div class="wrapper division">
            <div class="row our-story center">
                <div class="small-centered large-8 medium-10 columns">
                    <h1>Our Story</h1>
                    <?php 
                    $tab_1_title = get_field('tab_1_title');
                    $tab_2_title = get_field('tab_2_title');
                    $tab_3_title = get_field('tab_3_title');
                    $tab_1_content = get_field('tab_1_content');
                    $tab_2_content = get_field('tab_2_content');
                    $tab_3_content = get_field('tab_3_content');
                    if(!empty($tab_1_title)): ?>
                    <ul class="tabs">
                        <li class="tab-link current" data-tab="tab-1"><h2><?=$tab_1_title?></h2></li>
                        <li class="tab-link" data-tab="tab-2"><h2><?=$tab_2_title?></h2></li>
                        <li class="tab-link" data-tab="tab-3"><h2><?=$tab_3_title?></h2></li>
                    </ul>
                    
                    <div id="tab-1" class="tab-content current">
                        <p><?=$tab_1_content?></p>
                        <p><a href="<?php echo get_the_permalink(get_page_by_title('About')); ?>" class="link-button">Learn More</a></p>
                    </div>
                    <div id="tab-2" class="tab-content">
                        <p><?=$tab_2_content?></p>
                    </div>
                    <div id="tab-3" class="tab-content">
                        <p><?=$tab_3_content?></p>
                    </div>
                    <?php endif; ?> 
                </div>
            </div>
        <?php endwhile; endif; // end the loop 
        wp_reset_query(); ?>
        
        </div>
        
        <div class="wrapper division accent">
            <div class="row software center">
                <div class="small-centered large-8 medium-10 columns">
                <h1>Our Software</h1>
                <?php 
                $query1 = new WP_Query( array( 'pagename' => 'software' ) );
                while($query1->have_posts()):
                    $query1->the_post(); 
                    $page_excerpt = get_field('page_excerpt');
                        if(!empty($page_excerpt)): ?>
                            <p><?=$page_excerpt?></p>
                        <?php endif; ?>
                <?php endwhile;
                wp_reset_postdata(); ?>
                
                    <div class="row center">
                        <div class="large-6 medium-6 columns center">
                        <?php 
                        $query2 = new WP_Query( array( 'pagename' => 'software/us-software' ) );
                        
                        while($query2->have_posts()):
                            $query2->the_post(); 
                            $icon = get_field('thumbnail_icon');
                            $url = get_the_permalink($query2->post->permalink);
                            $title = get_the_title($query2->post->title);
                        
                            if(!empty($icon)): ?>
                                <img src="<?=$icon['url']?>" alt="<?=$icon['alt']?>" />
                            <?php endif; ?>
                            <h4>US</h4>
                            <p><a href="<?=$url?>"><?=$title?></a> | <a href="/locations">Locations</a></p>
                        <?php endwhile;
                        wp_reset_postdata(); ?>
                        </div>

                        <div class="large-6 medium-6 columns center">
                        <?php 
                        $query3 = new WP_Query( array( 'pagename' => 'software/global-software' ) );
                        
                        while($query3->have_posts()):
                            $query3->the_post(); 
                            $icon = get_field('thumbnail_icon');
                            $url = get_the_permalink($query3->post->permalink);
                            $title = get_the_title($query3->post->title);
                        
                            if(!empty($icon)): ?>
                            <img src="<?=$icon['url']?>" alt="<?=$icon['alt']?>" />
                            <?php endif; ?>
                            <h4>Global</h4>
                            <p><a href="<?=$url?>"><?=$title?></a> | <a href="/locations">Locations</a></p>
                        <?php endwhile;
                        wp_reset_postdata(); ?>
                        </div>  
                    </div> 
                </div>
            </div>
        </div>
        
        <div class="wrapper division">
            <div class="row get-involved center">
                <div class="small-centered large-8 medium-10 columns">
                <?php 
                $query4 = new WP_Query( array( 'pagename' => 'get-involved' ) );
                while($query4->have_posts()):
                    $query4->the_post(); 
                    $title = get_the_title($query4->post->title);
                    $url = get_the_permalink($query4->post->permalink);
                    $lab_icon = get_field('lab_experts_icon');
                    $dev_icon = get_field('developers_icon');
                    $implement_icon = get_field('implementers_icon');
                    $lab_excerpt = get_field('lab_experts_excerpt');
                    $dev_excerpt = get_field('developers_excerpt');
                    $implement_excerpt = get_field('implementers_excerpt');
                    ?>

                <h1><?=$title?></h1>
                <div class="row center">
                    <div class="large-4 medium-4 columns">
                        <p class="center"><img src="<?=$lab_icon['url']?>" alt="<?=$lab_icon['alt']?>" /></p>
                        <h4>Lab Experts</h4>
                        <p><?=$lab_excerpt?></p>
                    </div>
                
                    <div class="large-4 medium-4 columns">
                        <p class="center"><img src="<?=$dev_icon['url']?>" alt="<?=$dev_icon['alt']?>" /></p>
                        <h4>Developers</h4>
                        <p><?=$dev_excerpt?></p>
                    </div>
                
                    <div class="large-4 medium-4 columns">
                        <p class="center"><img src="<?=$implement_icon['url']?>" alt="<?=$dev_icon['alt']?>" /></p>
                        <h4>Implementers</h4>
                        <p><?=$implement_excerpt?></p>
                    </div>
                </div>
                <p class="center"><a href="<?=$permalink?>">Learn More</a></p>
            <?php endwhile;
            wp_reset_postdata(); ?>
            </div>
            </div>
        
            <div class="row community center">
                <div class="small-centered large-8 medium-10 columns">
                <?php 
                $query5 = new WP_Query( array( 'pagename' => 'about/our-community' ) ); 
                while($query5->have_posts()):
                    $query5->the_post(); 
                    $title = get_the_title($query5->post->title); ?>
                    <h1><?=$title?></h1>
                    <ul>
                        <?php $counter = 1;
                        while($field = get_field("logo_$counter")): ?>
                            <li>
                                <img src="<?=$field['sizes']['medium']?>" alt="<?=$field['alt']?>" />
                            </li>                          
                            <?php $counter++;
                        endwhile; ?>
                    </ul> 
                <?php endwhile;
                wp_reset_postdata(); ?>       
                </div>
            </div>
        </div>
        
    </div> 
    <!-- End Content -->
    
<?php get_footer(); ?>
