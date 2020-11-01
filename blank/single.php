<?php get_header(); ?>
        <h2>Post title: <?php the_title(); ?></h2>
    <p>Content: <?php the_content(); ?></p>
    <p>Link: <?php wp_link_pages(); ?></p>
    <p>Edit: <?php edit_post_link();?></p>
    <?php  previous_post_link()?>    
    <?php  next_post_link()?>    
<?phr get_footer(); ?>
