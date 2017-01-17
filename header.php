<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="sortcut icon" href="<?php bloginfo('template_url')?>/assets/images/thumbnail_ícone-site.png" type="image/png" />
	<meta charset="UTF-8">
	<title>Strategos</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <?php wp_head(); ?>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url')?>/style.css"/>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url')?>/assets/css/MathStyleSheet.css"/>
    <script type="text/javascript" src="<?php bloginfo('template_url')?>/assets/js/funcionalidades.js"></script>

</head>
<body>
<div class="header container-fluid">
    <div class="row">
        <div class="col-md-4"></div>
            <div class="col-md-4">
                <img class="img-responsive" src="<?php bloginfo('template_url')?>/assets/images/logo.png">
            </div>
            <div class="col-md-4"></div>
            <div class="col-md-4"></div>
    </div>

</div>
<nav id="menu" class="navbar menu">
  <div class="container-fluid">
      <div class="">
          <div class="row">
                <!-- Brand and toggle get grouped for better mobile display-->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                          <span class="sr-only">Toggle navigation</span>
                         <span class="icon-bar"></span>
                         <span class="icon-bar"></span>
                         <span class="icon-bar"></span>
                     </button>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling
                <!-- Register Custom Navigation Walker -->
                <?php require_once('assets/includes/wp_bootstrap_navwalker.php');?>
                <?php
                 wp_nav_menu( array(
                      'menu'              => 'primary',
                      'theme_location'    => 'primary',
                      'depth'             => 2,
                      'container'         => 'div',
                      'container_class'   => 'collapse navbar-collapse',
                      'container_id'      => 'bs-example-navbar-collapse-1',
                      'menu_class'        => 'nav nav-justified',
                      'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                      'walker'            => new wp_bootstrap_navwalker())
                );
                ?>
            </div><!-- /.container-fluid -->
          </div>
      </div>
</nav>


	
