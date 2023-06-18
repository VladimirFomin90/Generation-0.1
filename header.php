<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Generation_0.1
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<?php
	wp_enqueue_style('generation-general');
	// wp_enqueue_script('generation-script');
?>

<?php 
	wp_nav_menu(
		array(
			'theme_location' => 'header_nav',
			'menu_class' => 'myclass',
			'container' => 'div'
		)
	);

	get_search_form();


?>

Test 1

