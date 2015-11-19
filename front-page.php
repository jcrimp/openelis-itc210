<?php get_header(); ?>
    
    <!-- Start Content -->
    <div id="content">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); // start the loop ?>

        <?php
        $metaslider = get_field('metaslider_shortcode');
        if(!empty($metaslider)): 
        echo do_shortcode("$metaslider");
        endif; ?>
        
        <div class="row our-story">
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
                    <li class="tab-link current" data-tab="tab-1"><?=$tab_1_title?></li>
                    <li class="tab-link" data-tab="tab-2"><?=$tab_2_title?></li>
                    <li class="tab-link" data-tab="tab-3"><?=$tab_3_title?></li>
                </ul>
                
                <div id="tab-1" class="tab-content current">
                    <p><?=$tab_1_content?></p>
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
        
        
        
        <div class="row software">
            <div class="small-centered large-8 medium-10 columns">
                <h2>Our Software</h2>
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
                
                
                <div class="row">
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
                    </div>
                    
                        <?php endwhile;
                        wp_reset_postdata(); ?>
                    
                    
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
                    </div>
                    
                        <?php endwhile;
                        wp_reset_postdata(); ?>
                </div>
            </div>
        </div>
        
        <div class="row get-involved">
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
                            
                
                <h2><?=$title?></h2>
                <div class="row">
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
        
        <div class="row community">
            <div class="small-centered large-8 medium-10 columns">
                
                    <?php 
                        $query5 = new WP_Query( array( 'pagename' => 'about/our-community' ) );
                        
                        while($query5->have_posts()):
                            $query5->the_post(); 
                            $title = get_the_title($query5->post->title); ?>
                        <h2><?=$title?></h2>
                        <ul>
                            <?php $counter = 1;
                            while($field = get_field("logo_$counter")) { ?>
                                <li>
                                    <img src="<?=$field['sizes']['medium']?>" alt="<?=$field['alt']?>" />
                                </li>                          
                            <?php 
                               $counter++;
                            } 
                        endwhile;
                wp_reset_postdata(); ?>
                </ul> 
            </div>
        </div>

        

        <small>front-page.php</small> 
    </div> 
    <!-- End Content -->
    
<?php get_footer(); ?>
