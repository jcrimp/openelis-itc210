<?php get_header(); ?>
    
    <!-- Start Content -->
    <div id="content">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); // start the loop ?>

        <?php
        $metaslider = get_field('metaslider_shortcode');
        if(!empty($metaslider)): 
        echo do_shortcode("$metaslider");
        endif; ?>
        
        <div class="row">
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
                
                <!--<ul class="tabs">
                    <li class="tab-link current" data-tab="tab-1">Mission</li>
                    <li class="tab-link" data-tab="tab-2">Community</li>
                    <li class="tab-link" data-tab="tab-3">Connect</li>
                </ul>
                
                <div id="tab-1" class="tab-content current">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
                <div id="tab-2" class="tab-content">
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                <div id="tab-3" class="tab-content">
                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                </div>-->
                
            </div>
        </div>
        <?php endwhile; endif; // end the loop 
        wp_reset_query(); ?>
        
        <?php 
        $query1 = new WP_Query( array( 'pagename' => 'software' ) );
        while($query1->have_posts()):
            $query1->the_post(); 
            $page_excerpt = get_field('page_excerpt'); ?>
        
        <div class="row software">
            <div class="small-centered large-8 medium-10 columns">
                <h2>Our Software</h2>
                <?php if(!empty($page_excerpt)): ?>
                <p><?=$page_excerpt?></p>
                <?php endif; ?>
        <?php endwhile;
        wp_reset_postdata();
        ?>
                <div class="row">
                    <div class="large-6 medium-6 columns center">
                        <img src="http://placehold.it/100x100?text=logo" />
                        <h4>US</h4>
                        <p><a href="/locations">Map</a> | <a href="javascript:;">Demo</a></p>
                    </div>
                    <div class="large-6 medium-6 columns center">
                        <img src="http://placehold.it/100x100?text=logo" />
                        <h4>Global</h4>
                        <p><a href="/locations">Map</a> | <a href="javascript:;">Demo</a></p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="small-centered large-8 medium-10 columns">
                <h2>Get Involved</h2>
                <div class="row">
                <div class="large-4 medium-4 columns">
                    <img src="http://placehold.it/300x150?text=lab experts" />
                    <h4>Lab Experts</h4>
                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <a href="/get-involved">Learn More</a>
                </div>
                
                <div class="large-4 medium-4 columns">
                    <img src="http://placehold.it/300x150?text=implementers" />
                    <h4>Implementers</h4>
                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <a href="/get-involved">Learn More</a>
                </div>
                
                <div class="large-4 medium-4 columns">
                    <img src="http://placehold.it/300x150?text=developers" />
                    <h4>Developers</h4>
                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <a href="/get-involved">Learn More</a>
                </div>
</div>
            </div>
        </div>
        
        <div class="row" id="partners">
            <div class="small-centered large-8 medium-10 columns">
                <h2>Our Partners</h2>
                <ul>
                    <li>
                        <a href="javascript:;">
                            <img src="http://placehold.it/100x100?text=logo" />
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <img src="http://placehold.it/100x100?text=logo" />
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <img src="http://placehold.it/100x100?text=logo" />
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <img src="http://placehold.it/100x100?text=logo" />
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <img src="http://placehold.it/100x100?text=logo" />
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <img src="http://placehold.it/100x100?text=logo" />
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <img src="http://placehold.it/100x100?text=logo" />
                        </a>
                    </li>
                </ul> 
            </div>
        </div>

        
        
        <small>front-page.php</small> 
    </div> 
    <!-- End Content -->
    
<?php get_footer(); ?>
