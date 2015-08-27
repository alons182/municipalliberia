<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package municipalliberia
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header class="header">
                <section class="header__social">

                             <a href="#" class="header__social__link"><i class="icon-facebook"></i></a>
                             <a href="#" class="header__social__link"><i class="icon-twitter"></i></a>
                             <a href="#" class="header__social__link"><i class="icon-google-plus"></i></a>
                             <a href="#" class="header__social__link"><i class="icon-youtube"></i></a>
                             
                </section>
                <div class="inner">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="header__logo"><img src="<?php echo get_template_directory_uri();?>/img/logo.png" alt="Municipal Liberia" class="header__logo__img" /></a>
                    
                    <?php wp_nav_menu( array(
	                     'theme_location' => 'primary',
	                     'menu_id' => 'primary-menu',
	                     'container'       => 'nav',
		                'container_class' => 'header__menu',
		                'container_id'    => '',
		                'menu_class'      => 'header__menu__ul',
	                      ) 
                      ); 
                      ?>
                   
                    
                </div>
                <button id="btn-menu" class="header__btn-menu"><i class="icon-menu"></i></button>
            
        </header>
<main class="main">
