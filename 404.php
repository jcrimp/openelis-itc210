<?php get_header(); ?>
<!-- begin breadcrumbs row -->
<div class="row breadcrumbs">
    <?php custom_breadcrumbs(); ?>
</div>
<!-- end breadcrumbs row -->

<!-- begin row that contains content -->
<div class="row"> 
    
    <!-- Start Content -->
    <div class="content small-centered large-8 medium-8 columns">
        <h1>Sorry, we couldn't find that page</h1>
        <p>Try a search:</p>
        <?php get_search_form(); ?>
        <small>404.php</small> 
    </div> 
    <!-- End Content -->
    
<?php get_footer(); ?>
