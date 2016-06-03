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
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700|Lato:400,700,300' rel='stylesheet' type='text/css'>
<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri();?>/img/favicons/apple-touch-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri();?>/img/favicons/apple-touch-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri();?>/img/favicons/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri();?>/img/favicons/apple-touch-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri();?>/img/favicons/apple-touch-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri();?>/img/favicons/apple-touch-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri();?>/img/favicons/apple-touch-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri();?>/img/favicons/apple-touch-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri();?>/img/favicons/apple-touch-icon-180x180.png">
<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri();?>/img/favicons/favicon-32x32.png" sizes="32x32">
<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri();?>/img/favicons/favicon-96x96.png" sizes="96x96">
<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri();?>/img/favicons/favicon-16x16.png" sizes="16x16">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header class="header">
                <section class="header__social">

                             <a href="https://www.facebook.com/ADMLiberia" class="header__social__link" target="_blank"><i class="icon-facebook"></i></a>
                             <a href="https://twitter.com/admliberia" class="header__social__link" target="_blank"><i class="icon-twitter"></i></a>
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
