</div>
<!-- End main div -->

<!-- Begin footer -->
<footer>
<!-- Begin Footer Navigation -->
<?php wp_nav_menu( array( 'theme_location' => 'footer-menu', 'container' => 'nav','container_id' => 'nav-footer' ) ); ?> 
<!-- End Footer Navigation --> 
    
<?php dynamic_sidebar(2); ?>
    
<!-- Begin footer social nav -->
<nav class="nav-social">
    <ul>
        <li><a href="javascript:;" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/facebook-blue-80.png" alt="Facebook" /></a></li>
        <li><a href="javascript:;" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/twitter-blue-80.png" alt="Twitter" /></a></li>
    </ul>
</nav>
<!-- End footer social nav -->
    
</footer>
<!-- End Footer -->

<!-- Begin WP Footer -->
<?php wp_footer(); ?>    
<!-- End WP Head -->

</body>
</html>