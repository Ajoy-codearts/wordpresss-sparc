<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */
?><!doctype html>
<html <?php language_attributes(); ?>> 
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/custom.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.theme.default.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/responsive.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
	
</head>

<body>

	<header class="custom-header">
  <div class="custom-header-top">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-9 col-6 pr-0 align-self-center">
          <ul class="header-top-contact">
            <li class="header-top-contact-item"> <a href="#"><span><i class="fas fa-envelope"></i></span><p class="demo">needhelp@company.com</p></a> </li>
            <li class="header-top-contact-item"> <a href="#"><span><i class="fas fa-phone-volume"></i></span><p class="demo">92-888-666-0000</p></a> </li>
            <li class="header-top-contact-item"> <a href="#"><span><i class="fas fa-map-marker-alt"></i></span><p class="demo">80 Golden Street USA</p></a> </li>
          </ul>
        </div>
        <div class="col-lg-4 col-md-3 col-6 pl-0 align-self-center">
          <ul class="header-social-media">
            <li class="header-social-media-item"> <a href="#"><span><i class="fab fa-twitter"></i></span></a> </li>
            <li class="header-social-media-item"> <a href="#"><span><i class="fab fa-facebook-square"></i></span></a> </li>
            <li class="header-social-media-item"> <a href="#"><span><i class="fab fa-pinterest-p"></i></span></a> </li>
            <li class="header-social-media-item"> <a href="#"><span><i class="fab fa-instagram"></i></span></a> </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="custom-header-bottom">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 align-self-center">
          <nav class="navbar navbar-expand-lg custom-nav"> <a class="navbar-brand" href="#"><img
                  src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-main.png" alt="main-logo"></a>
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                  data-target="#navbarSupportedContent" aria-expanded="false"> <span class="sr-only">Toggle
              navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span
                    class="icon-bar"></span> </button>
            </div>
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
              
              <?php
                wp_nav_menu( array(
                'theme_location' => 'header-menu',
                'container'  => '',
                'depth'      => 2,
                'items_wrap' => '<ul class="navbar-nav wheader ml-auto">%3$s</ul>' ,
                'menu_class' => '',
                
                ) );
				      ?>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </div>
</header>

