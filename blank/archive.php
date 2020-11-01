<?php get_header(); ?>

<!-- ARCHIVE PAGE -->
<h1> <?php  bloginfo('name') ?>: archive</h1>

<?php 
/*-------------------------*/
/* POST LOOP*/
/*-------------------------*/

/* Check for posts using have_posts() */
/* TODO: HOW TO GET SPECIFIC CATEGORY? */
if ( have_posts() ) : 
    /* Loop throught all posts */
    while ( have_posts() ) : the_post();
        the_title( '<h2>', '</h2>' );
        the_excerpt();
        the_shortlink("Read More");
    endwhile;
else:
    echo "<p>No posts found. :(</p>";
endif;
?>

<?php get_footer(); ?>
