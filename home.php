<?php  get_header(); ?>

<?php

$featured_posts = get_posts(array(
    'numberposts' => 1,
    'post_status' => 'publish',
    'tag' => 'Featured'));

foreach($featured_posts as $featured_post)
{  
    echo '<h3>'.$featured_post->post_title.'</h3>';       
    echo '<img src="' . get_the_post_thumbnail_url($featured_post).'" class="img-fluid"/>';
}
?>


<ul>
<?php
// Get the categories
$categories = get_categories();
foreach($categories as $category){
    echo '<li>'.$category->name.'<ul>';
    
    $posts = get_posts(array(
        "numberposts"  => 3,
        "category"     =>  $category->term_id));
    
        foreach($posts as $post){
            echo '<li><a href="'.get_permalink($post).'">'.$post->post_title.'</a></li>';
        }

    echo '</ul></li>';
}
?>
</ul>

<p><i>This in my Home.php page.</i></p>



<?php get_footer(); ?>