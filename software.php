<div class="software-download">
    <?php 
        $instructions = get_field('demo_instructions'); 
        $url = get_field('demo_url');
        $filename = $post->post_name;
    ?>
    <h2>Download OpenELIS <?php the_title(); ?></h2>
    <div>
        <p><a href="<?php bloginfo('url')?>/wp-content/uploads/<?=$filename?>.txt" class="link-button" target="_blank">Download</a></p>
        <?php if($url): ?>
        <p><a href="<?=$url?>">Try the demo</a><br />
        <?=$instructions?>
        </p>
    <?php endif; ?>
    </div>
    <p>Need help?<br />
    Please visit the <a href="<?php echo get_the_permalink(get_page_by_title('Support')); ?>">Support</a> page for more information.</p>
</div>