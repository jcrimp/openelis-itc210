</div>
<!-- end row that contains content -->

</div>
<!-- End main div -->


<!-- Begin footer -->
<footer>
    <div class="row nav collapse">
        <div class="large-12 columns">
            <!-- Begin Footer Navigation -->
            <?php wp_nav_menu( array( 'theme_location' => 'footer-menu', 'container' => 'nav','container_id' => 'nav-footer' ) ); ?> 
            <!-- End Footer Navigation --> 
            
            <!-- Begin footer social nav -->
            <nav class="nav-social">
                <ul>
                    <li><a href="javascript:;" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/facebook-blue-80.png" alt="Facebook" /></a></li>
                    <li><a href="javascript:;" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/twitter-blue-80.png" alt="Twitter" /></a></li>
                </ul>
            </nav>
            <!-- End footer social nav --> 
        </div>
    </div>
<div class="row collapse">
    <div class="large-6 columns">
        <p><a href="/privacy-policy">Privacy Policy</a> | <a href="/terms-of-use">Terms of Use</a></p>
        <p>&copy; <?php the_time('Y'); ?> OpenELIS Foundation</p>
    </div>
    <div class="large-6 columns"><?php dynamic_sidebar(2); ?></div>
</div>
    

    
</footer>
<!-- End Footer -->

    <script src="<?php bloginfo('template_directory'); ?>/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/bower_components/foundation/js/foundation.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/app.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/jquery.flexslider-min.js"></script>
    
    <script type="text/javascript">
        $(document).ready(function(){
            $('.spotlight.flexslider').flexslider({
                animation: "slide"
            });
            
            $('.carousel.flexslider').flexslider({
                animation: "slide",
                animationLoop: false,
                itemWidth: 160,
                itemMargin: 20,
                minItems: 2,
                maxItems: 6
            });
            
            $('#nav-main li ul').hide().removeClass('sub-menu');
            $('#nav-main li').hover(
                function () {
                    $('ul', this).stop().slideDown(100);
                },
                function () {
                    $('ul', this).stop().slideUp(100);
                }
            );
        });
        
        function close_accordion_section() {
                $('.accordion .accordion-section-title').removeClass('active');
                $('.accordion .accordion-section-title span').text('+');
                $('.accordion .accordion-section-content').slideUp(300).removeClass('open');
            }
            
            $('.accordion-section-title').click(function(e) {
                // Grab current anchor value
                var currentAttrValue = $(this).attr('href');
                
                if($(e.target).is('.active')) {
                    close_accordion_section();
                }else {
                    close_accordion_section();
                    
                    // Add active class to section title
                    $(this).addClass('active');
                    // Open up the hidden content panel
                    $('.accordion ' + currentAttrValue).slideDown(300).addClass('open');
                    $('.accordion .accordion-section-title span').text('-'); 
                }
                
                e.preventDefault();
            });
            
            $('ul.tabs li').click(function(){
	       	   var tab_id = $(this).attr('data-tab');
            
	       	   $('ul.tabs li').removeClass('current');
	       	   $('.tab-content').removeClass('current');
            
	       	   $(this).addClass('current');
	       	   $("#"+tab_id).addClass('current');
	       });
        
    </script>  

<!-- Begin WP Footer -->
<?php wp_footer(); ?>    
<!-- End WP Head -->

</body>
</html>