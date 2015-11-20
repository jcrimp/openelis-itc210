    <?php 
    
    $children = get_pages('child_of='.$post->ID);
    $ancestors = $post->ancestors;
    if( count( $children ) != 0 || $ancestors || (get_the_title() == "FAQ") || (!(is_page())) ): ?>   
<!-- Begin Primary Aside -->
        <aside class="large-4 medium-4 columns primary"> 
            <nav id="nav-sub">
                <?php if(is_page()) : 
                
                    //if it's the FAQ page
                    if(get_the_title() == "FAQ"):
                    //show the FAQ sidebar ?>
                        <h2><a href="<?php echo get_the_permalink(get_page_by_title('FAQ')); ?>">FAQ</a></h2>
                        <ul>
                            <li><a href="#lab-experts">Lab Experts</a></li>
                            <li><a href="#developers">Developers</a></li>
                            <li><a href="#implementers">Implementers</a></li>
                        </ul>
                
                    <?php else: //else, show the regular page sidebar ?>
                        <?php $parent_page = get_top_parent_page_id($post_ID); ?>
                        <h2><a href="<?php echo get_the_permalink($parent_page); ?>"><?php echo get_the_title($parent_page); ?></a></h2>
                        <ul>
                            <?php wp_list_pages("child_of=$parent_page&title_li="); ?>
                        </ul>
                    <?php endif; ?>
                
                <?php elseif(!(is_page())) : ?>
                    <h2><a href="<?php echo get_the_permalink(get_page_by_title('News')); ?>">News</a></h2>
                    <?php dynamic_sidebar(1); ?>
                <?php endif; ?>
            </nav>
                
        </aside> 
        <!-- End Primary Aside -->
<?php endif; ?>