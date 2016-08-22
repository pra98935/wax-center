<?php
/**
 * The template for displaying the header
 */

?>

<!DOCTYPE html>
<html lang="en" <?php language_attributes(); ?> class="no-js">
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>

    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Wax Center</title>
   
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

<body <?php body_class(); ?>>
<!-- Loader Start -->
<div id="loader">
      <div class="loader-item"> <img src="<?php echo get_template_directory_uri().'/images/logo_full.png' ?>" alt="loader">
      <div class="spinner">
          <div class="bounce1"></div>
          <div class="bounce2"></div>
          <div class="bounce3"></div>
      </div>
      </div>
  </div>

<!--loader end-->

<main class="animsition">
	<!--Header sec start-->
    <header class="header_sec" id="header">
          <div class="navi_main clearfix">
            <div class="logo_left">
              <?php if (get_theme_mod( 'custom_logo' )) {
                    $logo = wp_get_attachment_url( get_theme_mod( 'custom_logo' ) );
                }else{
                    $logo = get_template_directory_uri().'/logo_full.png';
                }
              ?>
              <a href="<?php echo site_url(); ?>"><img src="<?php echo $logo; ?>" class="img-responsive" alt="logo" /></a>
            <!-- <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri();?>/images/logo.png" class="img-responsive" alt="logo" /> </a> -->
            </div>
            <div class="navi_right">
              <nav role="navigation" class="navbar navbar-default">
                  <!-- Brand and toggle get grouped for better mobile display -->
                  <div class="navbar-header">
                      <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                          <span class="sr-only">Toggle navigation</span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                      </button>
                      <!--<a href="#" class="navbar-brand"><img src="images/logo.png" class="img-responsive" alt="logo" /> </a>-->
                  </div>
                  <!-- Collection of nav links and other content for toggling -->
                  <div id="navbarCollapse" class="collapse navbar-collapse">
                      	
                      	<?php wp_nav_menu( array( 'theme_location' => 'primary-menu', 'menu_class' => 'nav navbar-nav' ) ); ?>

                        <?php wp_nav_menu( array( 'theme_location' => 'login-menu', 'menu_class' => 'nav navbar-nav navbar-right' ) ); ?>

                  </div>
              </nav>
            </div>
          </div>
    </header>