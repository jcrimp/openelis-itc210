    <!-- Begin Primary Aside -->
    <aside id="primary">
        <h2><a href="<?= get_permalink($post->post_parent) ?>"><?= get_the_title($post->post_parent) // Get the gateway page title ?></a></h2>
        <nav id="nav-sub">
            <ul><?php if ($post->post_parent) { // Check if the page has a parent...
    wp_list_pages(array('child_of' => $post->post_parent, 'title_li' => __(''))); // if so, list the sub-pages with no title
    } else { // Check if the page does not have a parent
    wp_list_pages(array('child_of' => $post->ID, 'title_li' => __(''))); // if so, list the sub-pages with no title
    } ?></ul>
        </nav>
    </aside> 
    <!-- End Primary Aside -->