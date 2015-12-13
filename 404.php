<?php get_header(); ?>
<!-- begin breadcrumbs row wrapper-->
<div class="wrapper breadcrumbs">
    <div class="row">
        <div class="large-12 columns">
            <?php custom_breadcrumbs(); ?>
        </div>
    </div>
</div>
<!-- end breadcrumbs row -->

<!-- begin row that contains content -->
<div class="row main"> 
    
    <!-- Start Content -->
    <div class="content small-centered large-8 medium-8 columns">
        <h1>Sorry, we couldn't find that page</h1>
        <p>Try a search:</p>
        <?php get_search_form(); ?>
        <small>404.php</small> 
    </div> 
    <!-- End Content -->
    
<?php get_footer(); ?>
