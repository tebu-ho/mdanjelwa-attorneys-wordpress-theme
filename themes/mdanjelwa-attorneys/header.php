<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body <?php body_class(); ?>>
    <div id="page">
      <header id="header" class="site-header">
        <nav id="topbar" class="site-topbar visible-lg visible-md">
          <div class="row">
            <div class="col-sm-12"><?php echo get_theme_mod( 'physical_address', '' ); ?>&nbsp;&nbsp;&nbsp; |&nbsp;&nbsp;&nbsp; <?php echo get_theme_mod( 'phone_number', '' ); ?>&nbsp;&nbsp;&nbsp; | <a class="url" href="mailto:<?php echo get_theme_mod( 'email_address', '' ); ?>"><?php echo get_theme_mod( 'email_address', '' ); ?></a></div>
          </div>
        </nav>
        <nav id="navbar" class="site-navbar navbar navbar-static-top one-page-nav" role="navigation">
          <div class="row">
         <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <i class="fa fa-bars fa-2x"></i>
        </button>
              <h1 class="navbar-brand">
              <?php the_custom_logo(); ?>
              </h1>
            </div>
            <?php
            wp_nav_menu(
              array(
                'theme_location' => 'navBar',
                'menu_id'        => 'menu-primary-menu',
              )
            );
            ?>
                </div> shortco
        </nav>
      </header>
      <?php add_theme_pages_header(); ?>
      <?php get_template_part( 'class_lib/font', 'awesome' ); ?>
      <?php get_template_part( 'class_lib/add', 'links' ); ?>