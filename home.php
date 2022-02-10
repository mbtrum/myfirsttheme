<?php  get_header(); ?>

<ul>
<?php
$categories = get_categories();
foreach($categories as $category){
    echo '<li>'.$category->name.'<ul>';
    
    $posts = get_posts(array(
        "numberposts"  => 3,
        "category"     =>  $category->term_id));
    
        foreach($posts as $post){
            echo '<li>'.$post->post_title.'</li>';
        }

    echo '</ul></li>';
}
?>
<ul>

<p><i>This in my Home.php page.</i></p>



<?php get_footer(); ?>