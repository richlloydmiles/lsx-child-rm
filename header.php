<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package lsx
 */
global $lsx_options;

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<?php lsx_head_top(); ?>
<meta charset="<?php bloginfo( 'charset' ); ?>">

<?php if ( lsx_get_option('static_layout') != 1 ) : ?>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<?php endif; ?>

<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<?php if( lsx_get_option('favicon') ) { 
  $favicon = lsx_get_option('favicon'); ?>
  <link rel="shortcut icon" href="<?php echo esc_url( $favicon ); ?>"/>
<?php } ?>
<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet"> <!-- @TODO take this out -->
<link href='http://fonts.googleapis.com/css?family=Oleo+Script:400,700' rel='stylesheet' type='text/css'> <!-- hook this instead -->

 <?php wp_head(); ?> 
<?php lsx_head_bottom(); ?>
    <!-- Customizable CSS -->
         <link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/animate.min.css" rel="stylesheet">
   
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/green.css" rel="stylesheet" title="Color">
    
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/owl.carousel.css" rel="stylesheet">
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/owl.transitions.css" rel="stylesheet">
    

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>assets/images/favicon.ico"><link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/main.css" rel="stylesheet" data-skrollr-stylesheet>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
     <link href="<?php echo get_stylesheet_directory_uri(); ?>/app.css" rel="stylesheet">
</head>
<?php if ( is_single() && get_post_type() == 'project' ) { ?>
  <body data-spy="scroll" data-target="#affix-nav" data-offset="115" <?php body_class(); ?>>
<?php } else { ?>
  <body data-spy="scroll" data-target=".navbar-collapse" <?php body_class(); ?>>
<?php } ?>
  <?php 
  lsx_body_top();
  // Use Bootstrap's navbar if enabled in config.php

?>
test
  <header>
      <div class="navbar">
<!--         <?php if ( is_user_logged_in() ) { echo 'nav-logged-in';} ?>
 -->        <div class="navbar-header ?>">
          <div class="container">
            
        <!--    <ul class="info pull-left">
              <li><a href="#"><i class="icon-mail-1 contact"></i> info@reen.com</a></li>
              <li><i class="icon-mobile contact"></i> +00 (123) 456 78 90</li>
            </ul><!-- /.info --> 
            
          <!--  <ul class="social pull-right">
              <li><a href="#"><i class="icon-s-facebook"></i></a></li>
              <li><a href="#"><i class="icon-s-gplus"></i></a></li>
              <li><a href="#"><i class="icon-s-twitter"></i></a></li>
              <li><a href="#"><i class="icon-s-pinterest"></i></a></li>
              <li><a href="#"><i class="icon-s-behance"></i></a></li>
              <li><a href="#"><i class="icon-s-dribbble"></i></a></li>
            </ul><!-- /.social --> 
            
            <!-- ============================================================= LOGO MOBILE ============================================================= -->
            
            <a class="navbar-brand" href="index.html"><img src="<?php echo get_stylesheet_directory_uri(); ?>assets/images/logo.svg" class="logo" alt=""></a>
            
            <!-- ============================================================= LOGO MOBILE : END ============================================================= -->
            
            <a class="btn responsive-menu pull-right" data-toggle="collapse" data-target=".navbar-collapse"><i class='icon-menu-1'></i></a>
            
          </div><!-- /.container -->
        </div><!-- /.navbar-header -->
        
        <div class="yamm">
          <div class="navbar-collapse collapse">
            <div class="container">
              
              <!-- ============================================================= LOGO ============================================================= -->
              
              <a class="navbar-brand" href="index.html"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo.svg" class="logo" alt=""></a>
              
              <!-- ============================================================= LOGO : END ============================================================= -->
              
              
              <!-- ============================================================= MAIN NAVIGATION ============================================================= -->
                  <?php
 $args = array(
  'container'       => 'false',
  'menu_class'      => 'nav navbar-nav'
);
  wp_nav_menu($args);
   ?>
              
              <!-- ============================================================= MAIN NAVIGATION : END ============================================================= -->
              
            </div><!-- /.container -->
          </div><!-- /.navbar-collapse -->
        </div><!-- /.yamm -->
      </div><!-- /.navbar -->
    </header>

    <div class="wrap container" role="document">
    <div class="content role row">
