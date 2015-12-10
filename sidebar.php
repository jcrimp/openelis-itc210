    <?php 
    
    $children = get_pages('child_of='.$post->ID);
    $ancestors = $post->ancestors;
    if( count( $children ) != 0 || $ancestors || (get_the_title() == "F.A.Q.s") || (!(is_page())) ): ?>   
<!-- Begin Primary Aside -->
        <aside class="large-4 medium-4 columns primary"> 
            <nav id="nav-sub">
                <?php if(is_page()) : 
                
                    //if it's the FAQ page
                    if(get_the_title() == "F.A.Q.s"):
                    //show the FAQ sidebar ?>
                        <h2>F.A.Q.s</h2>
                        <ul>
                            <li><a href="#lab-experts">Lab Experts</a></li>
                            <li><a href="#developers">Developers</a></li>
                            <li><a href="#implementers">Implementers</a></li>
                        </ul>
    
                    <?php else: //else, show the regular page sidebar ?>
                        <?php //$parent_page = get_top_parent_page_id($post_ID); ?>
                        <!--<h2><a href="<?php //echo get_the_permalink($parent_page); ?>"><?php //echo get_the_title($parent_page); ?></a></h2>
                        <ul>
                            <?php //wp_list_pages("child_of=$parent_page&title_li="); ?>
                        </ul>-->
                        <?php if($post->post_parent) {
                            $children = wp_list_pages("title_li=&include=".$post->post_parent."&echo=0");
                            $children.= wp_list_pages("title_li=&child_of=".$post->post_parent."&echo=0");
                            } 
                        else {
                            $children = wp_list_pages("title_li=&include=".$post->ID."&echo=0");
                            $children.= wp_list_pages("title_li=&child_of=".$post->ID."&echo=0");
                        }
                        if ($children) { ?>
                        <ul>
                            <?php echo $children; ?>
                        </ul>
                        <?php } ?>
                    <?php endif; ?>
                
                <?php elseif(!(is_page())) : 
                    $title_class= "";
                    if(is_home()):
                    $title_class= "current_page_item";
                    endif;
                ?>
                    <h2 class="<?=$title_class?>"><a href="<?php echo get_the_permalink(get_page_by_title('News')); ?>">News</a></h2>
                    
                    <ul>
                    <?php
                    $lastposts = get_posts('numberposts=5&orderby=date');
                    foreach($lastposts as $post) :
                    setup_postdata($post); ?>
            
                    <li<?php if ( $post->ID == $wp_query->post->ID ) { echo ' class="current_page_item"'; } else {} ?>>
            
                        <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
            
                    </li>

                    <?php endforeach; ?>

                    </ul>
                    <?php dynamic_sidebar(1); ?>
                <?php endif; ?>
            </nav>
                
        </aside> 
        <!-- End Primary Aside -->
<?php endif; ?>