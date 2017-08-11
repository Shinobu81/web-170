<!doctype html>
<html>
<head>
  <title>International Model &amp; Toys</title>

  <!-- Meta tags -->
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

  <!-- Begin Styles -->
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="all" />
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/flexslider.css" type="text/css">
  <!-- End Styles -->

  <!-- Begin Scripts -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
  <script src="<?php bloginfo('template_directory')?>/scripts/jquery.flexslider.js"></script>
  <!-- End Scripts -->

  <!-- Begin Flex Slider -->
  <script type="text/javascript" charset="utf-8">
  $(window).load(function() { // enable function upon window load
    $('.flexslider').flexslider(); // call flexslider function
  });
  </script>
  <!-- End Flex Slider -->

   <!-- Begin Toggle Menu -->
  <script type="text/javascript" charset="utf-8">
  $(window).load(function() { // enable function upon window load
    $("#toggle").click(function() { // when toggle is clicked...
      $("#topNav").toggle(); // ... open or close the navigation
    });
  });
  </script>
  <!-- End Toggle Menu -->

  <!-- Begin WP Head Function -->
  <?php wp_head();?>
  <!-- End WP Head Function -->
</head>

<body <?php body_class(); ?>>

  <!-- Start Wrapper -->
  <div id="wrapper">

    <!-- Start Header -->
    <header>
      <a href="http://scc-web-development.com/scc/web170/wordpress/"><img src="<?php bloginfo('template_directory')?>/images/logo.png" alt="logo" id="logo"/></a>
      <h1 id="title"><?php bloginfo('name'); ?></h1><br/><h3 id="tagline"><?php bloginfo('description'); ?></h3>
    </header>
    <!-- End Header -->

    <!-- Start Navigation -->
    <?php wp_nav_menu(array('theme_location' => 'main-menu', 'container' => 'div', 'container_id' => 'topNav'));?>
    <!-- End Navigation -->
