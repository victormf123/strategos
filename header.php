<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="sortcut icon" href="<?php bloginfo('template_url')?>/assets/images/thumbnail_ícone-site.png" type="image/png" />
	<meta charset="UTF-8">
	<title>Via Infinda</title>

	<?php wp_head(); ?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script type="text/javascript">
    // Hide Header on on scroll down
    var didScroll;
    var lastScrollTop = 0;
    var delta = 5;
    var navbarHeight = $('nav').outerHeight();
    
    $(window).scroll(function(event){
        didScroll = true;
    });
    
    setInterval(function() {
        if (didScroll) {
            hasScrolled();
            didScroll = false;
        }
    }, 250);
    
    function hasScrolled() {
        var st = $(this).scrollTop();
        
        // Make sure they scroll more than delta
        if(Math.abs(lastScrollTop - st) <= delta)
            return;
        
        // If they scrolled down and are past the navbar, add class .nav-up.
        // This is necessary so you never see what is "behind" the navbar.
        if (st > lastScrollTop && st > navbarHeight){
            // Scroll Down
            $('nav').removeClass('navbar-fixed-top').addClass('nav-up');
            $('.conteiner-top').css('margin-top', '-115px');
        } else {
            // Scroll Up
            if(st + $(window).height() < $(document).height()) {
                $('nav').removeClass('nav-up').addClass('navbar-fixed-top');
                $('.conteiner-top').css('margin-top', '100px');
            }
        }
        
        lastScrollTop = st;
    }
  </script>
  <script type="text/javascript" src="<?php bloginfo('template_url')?>/assets/js/functions_page.js" ></script>
</head>
<body>
<div class="header">
	<nav id="meu" class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand col-xs-2" href="<?php bloginfo('url')?>"?><img class="img-responsive" src="<?php bloginfo('template_url')?>/assets/images/Logo.png"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
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
                'menu_class'        => 'nav navbar-nav navbar-right',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
        ?>
  </div><!-- /.container-fluid -->
</nav>
</div>

	
