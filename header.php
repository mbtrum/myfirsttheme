<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<br />
<a href="<?php echo get_home_url(); ?>">Home Page</a>
<br />
<br />

<?php
// Output the Secondary Menu
$menu_main_items = wp_get_nav_menu_items('secondary'); 
foreach($menu_main_items as $menu_item)
{
	echo '- <a href="'.$menu_item->url.'">'.$menu_item->title."</a><br />";
}
?>

<br />

<?php 
// Output the Primary Menu
$menu_top_items = wp_get_nav_menu_items('primary'); 
foreach($menu_top_items as $menu_item)
{
	echo '- <a href="'.$menu_item->url.'">'.$menu_item->title."</a><br />";
}
?>

<hr />

<div class="container">

