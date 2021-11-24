<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package emptytheme
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
<div id="page" class="site">
<?php 
	$location = get_nav_menu_locations();
	$menu_id = $location['Menu-header'];
	$header_menu = wp_get_nav_menu_items($menu_id);
	$header_menu_0 =  $header_menu[0];
	
	// echo "<pre>";
	// print_r($header_menu);
	// wp_die();
?>

	<header id="masthead" class="site-header">
		<!-- Mobile Logo -->
        <div class="logo-mobile-outer">
            <div class="logo-mobile"><a href=""><img src="<?php echo get_template_directory_uri() . '/' ?>img/logo.png" alt=""></a></div>
        </div>
        <!-- End Mobile Logo -->
        <!-- Menu Bar -->
        <div class="menu-bar">
                <div class="container">
                    <div class="menu-bar-inner">
                        <div class="menu-logo-left">
                            <!-- Cover -->
                            <div class="cover"></div>
                            <!-- End Cover -->
                            <div class="navigation-icon"><i class="fas fa-bars"></i></div>
                            <div class="menu-logo"><a href="http://localhost/anhdt/"><img src="<?php echo get_template_directory_uri() . '/' ?>img/logo.png" alt=""></a></div>
                            <ul class="nav-bar">
                                <li class="navigation">navigation</li>
                                <li class="nav-item home"><a href="<?php echo $header_menu[0]->url;?>"><?php echo $header_menu[0]->title;?></a></li>
                                <li class="nav-item pages"><a href="<?php echo $header_menu[1]->url;?>"><?php echo $header_menu[1]->title;?></a></li>
                                <li class="nav-item classes"><a href="<?php echo $header_menu[2]->url;?>"><?php echo $header_menu[2]->title;?></a></li>
                                <li class="nav-item portfolio"><a href="<?php echo $header_menu[3]->url;?>"><?php echo $header_menu[3]->title;?></a></li>
                                <li class="nav-item blog"><a href="<?php echo $header_menu[4]->url;?>"><?php echo $header_menu[4]->title;?></a></li>
                                <li class="nav-item contacts"><a href="<?php echo $header_menu[5]->url;?>"><?php echo $header_menu[5]->title;?></a></li>
                            </ul>
                        </div>
                        <div class="menu-right">
                            <div class="search-icon nav-bar-icon"><a href=""><i class="fas fa-search"></i></a></div>
                            <div class="cart-icon nav-bar-icon"><a href=""><i class="fas fa-shopping-basket"></i></a></div>
                            <div class="person-icon nav-bar-icon"><a href=""><i class="fas fa-user"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Menu Bar -->
        
        
	</header><!-- #masthead -->
