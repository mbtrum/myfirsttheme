<?php  get_header(); ?>

<ul>
<?php
if ( have_posts() ) :  
    while ( have_posts() ) : the_post(); 
    
        the_title('<li>', '</li>');
     
        endwhile; 
    else : 
    _e( 'Sorry, no posts matched your criteria.', 'textdomain' ); 
endif; 
?>
</ul>

<p><i>This in my Category.php page.</i></p>

<?php get_footer(); ?>