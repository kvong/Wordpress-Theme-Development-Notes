<?php get_header(); ?>
    <h1>Name: <?php bloginfo( 'name' ); ?></h1>
    <h2>Description: <?php bloginfo( 'description' ); ?></h2>
    <h3>List of categories: <?php wp_list_cats() ?></h3>
    <h3>List of pages: <?php wp_list_pages() ?></h3>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <h3>Post title: <?php the_title(); ?></h3>
        <p>Content: <?php the_content(); ?></p>
        <p>Link: <?php wp_link_pages(); ?></p>
        <p>Edit: <?php edit_post_link();?></p>
        <?php endwhile; ?>
    <?php else: ?>
        <p>No posts found. :(</p>
    <?php endif; ?>
    <?php wp_footer(); ?>
<?php get_footer(); ?>
