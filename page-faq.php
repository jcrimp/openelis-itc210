<?php
/**
 * Template Name: FAQ
 * Description: Page template for to-do list with nested repeating fields
 */
get_header(); 
get_sidebar_if_children(); ?>
    
    <!-- Start Content -->
    <div id="content">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); // start the loop  ?>
        <?php the_content(''); // get page or posting written content ?>
        <?php endwhile; endif; // end the loop ?>
        <h3>Lab Experts</h3>
<div class="accordion">
<div class="accordion-section">

<a class="accordion-section-title" href="#accordion-1">Sample Question: How do I contribute code? +</a>
<div id="accordion-1" class="accordion-section-content">

Sample Answer:
Check us out on <a>GitHub!</a>

</div>
<!--end .accordion-section-content-->

</div>
<!--end .accordion-section-->
<div class="accordion-section">

<a class="accordion-section-title" href="#accordion-2">Sample Question: How do I contribute code? +</a>
<div id="accordion-2" class="accordion-section-content">

Sample Answer:
Check us out on <a>GitHub!</a>

</div>
<!--end .accordion-section-content-->

</div>
<!--end .accordion-section-->

</div>
<!--end .accordion-->
<h3>Developers</h3>
<div class="accordion">
<div class="accordion-section">

<a class="accordion-section-title" href="#accordion-3">Sample Question: How do I contribute code? +</a>
<div id="accordion-3" class="accordion-section-content">

Sample Answer:
Check us out on <a>GitHub!</a>

</div>
<!--end .accordion-section-content-->

</div>
<!--end .accordion-section-->
<div class="accordion-section">

<a class="accordion-section-title" href="#accordion-4">Sample Question: How do I contribute code? +</a>
<div id="accordion-4" class="accordion-section-content">

Sample Answer:
Check us out on <a>GitHub!</a>

</div>
<!--end .accordion-section-content-->

</div>
<!--end .accordion-section-->

</div>
<!--end .accordion-->
<h3>Implementers</h3>
<div class="accordion">
<div class="accordion-section">

<a class="accordion-section-title" href="#accordion-5">Sample Question: How do I contribute code? +</a>
<div id="accordion-5" class="accordion-section-content">

Sample Answer:
Check us out on <a>GitHub!</a>

</div>
<!--end .accordion-section-content-->

</div>
<!--end .accordion-section-->

</div>
<!--end .accordion-->
        <small>page-faq.php</small> 
    </div> 
    <!-- End Content -->
    
<?php get_footer(); ?>
