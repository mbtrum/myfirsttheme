<?php  get_header(); ?>

<?php 
if ( have_posts() ) : 
    while ( have_posts() ) : the_post(); 
        the_title( '<h2>', '</h2>' );
        the_author( '<p>', '</p>' );
        the_content();
    endwhile; 
else: 
    _e( 'Sorry, no posts matched your criteria.', 'textdomain' ); 
endif; 
?>

<p><i>This in my Single.php page.</i></p>

<?php get_footer(); ?>