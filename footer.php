</div>
<!-- end row that contains content -->

</div>
<!-- End main div -->


<!-- Begin footer -->
<footer>
    <div class="wrapper footer-secondary">
        <div class="row">
            <div class="large-12 columns">
                
                
                
                <div class="newsletter-container"><?php dynamic_sidebar(2); ?>   
    </div>
                
                <!-- Begin footer social nav -->
                <nav class="nav-social">
                    <ul>
                        <li><a href="https://www.facebook.com/Openelis-Foundation-301378923313438/" target="_blank" class="social"><i class="flaticon-facebook41"></i></li>
                        <li><a href="javascript:;" target="_blank" class="social"><i class="flaticon-twitter1"></i></a></li>
                    </ul>
                </nav>
                <!-- End footer social nav -->
                
            </div>
        
        </div>
    </div>
    <div class="wrapper footer-primary">
        <div class="row nav">
            <div class="large-12 columns">
                <!-- Begin Footer Navigation -->
                <?php wp_nav_menu( array( 'theme_location' => 'footer-menu', 'container' => 'nav','container_id' => 'nav-footer' ) ); ?> 
                <!-- End Footer Navigation -->
                
                <div class="copyright-container">
                    <p>&copy; <?php the_time('Y'); ?> OpenELIS Foundation all rights reserved | <a href="/privacy-policy">Privacy Policy</a> | <a href="/terms-of-use">Terms of Use</a></p> 
    </div>
            </div>
        </div>
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
            var extLink = $('a:not(.social)').filter(function() {
                return (this.hostname && location.hostname !== this.hostname);
            });
            
            extLink.append('<i class="flaticon-external1"></i>');
            
            $('.spotlight.flexslider').flexslider({
                animation: "slide"
            });
            
            $('.carousel.flexslider').flexslider({
                animation: "slide",
                animationLoop: false,
                itemWidth: (657.328-40)/3,
                itemMargin: 20,
                minItems: 2,
                maxItems: 4
            });
            
           $('#nav-main li ul').hide().removeClass('sub-menu');
            $('#nav-main li').hover(
                function () {
                    $('ul', this).stop().slideDown(300);
                },
                function () {
                    $('ul', this).stop().slideUp(300);
                }
            );
            
            $('#nav-mobile .menu-item-has-children > a').click( function(e) {
                e.preventDefault();
                $(this).parent().toggleClass('tap');
            });

            
            $('.menu-button').click( function(e) {
                e.preventDefault();
                $('#nav-mobile').toggleClass('show');
            });
            
            $('.search-button').click( function(e) {
                e.preventDefault();
                $('.search-form').toggleClass('show');
            });
            
            $('ul.tabs li').click(function(){
	       	   var tab_id = $(this).attr('data-tab');
            
	       	   $('ul.tabs li').removeClass('current');
	       	   $('.tab-content').removeClass('current');
            
	       	   $(this).addClass('current');
	       	   $("#"+tab_id).addClass('current');
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
                    $('.accordion .accordion-section-title.active span').text('-'); 
                }
                
                e.preventDefault();
            });
            
        });
        
        
            
            
            
            
        
    </script>  

<!-- Begin WP Footer -->
<?php wp_footer(); ?>    
<!-- End WP Head -->

</body>
</html>