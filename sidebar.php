    <!-- Begin Primary Aside -->
    <aside id="primary"> 
        <nav id="nav-sub">
            <?php if(is_page()) : ?>
            <h2>SIDEBAR A</h2>
                <?php $parent_page = get_top_parent_page_id($post_ID); ?>
                <h2><a href="<?php echo get_the_permalink($parent_page); ?>"><?php echo get_the_title($parent_page); ?></a></h2>
                <ul>
                    <?php wp_list_pages("child_of=$parent_page&title_li="); ?>
                </ul>
            <?php endif; ?>
            
            <?php if(!(is_page())) : ?>
                <h2>SIDEBAR B</h2>
                <h2><a href="<?php echo get_the_permalink(get_page_by_title('News')); ?>">News</a></h2>
                <?php dynamic_sidebar(1); ?>
            <?php endif; ?>
        </nav>
            
    </aside> 
    <!-- End Primary Aside -->