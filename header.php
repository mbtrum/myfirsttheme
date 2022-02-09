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
<?php wp_nav_menu("Primary Menu"); ?>

<hr />

<div class="container">

