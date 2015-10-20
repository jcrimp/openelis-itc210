    <!-- Begin Primary Aside -->
    <aside id="primary"> 
        <?php if(is_page()){
        $parent_page = get_top_parent_page_id($post_ID); ?>
        <nav id="nav-sub">
            <h2><a href="<?php echo get_the_permalink($parent_page); ?>"><?php echo get_the_title($parent_page); ?></a></h2>
            <ul>
                <?php wp_list_pages("child_of=$parent_page&title_li="); ?>
            </ul>
        </nav>
        <?php } ?>
    </aside> 
    <!-- End Primary Aside -->