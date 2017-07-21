<!doctype html>
<html>
<head>
  <title>International Model &amp; Toys</title>

  <!-- Meta tags -->
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="robots" contents="noindex, nofollow">

  <!-- CSS links -->
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url')?>"/>

  <!-- JavaScript links-->

  <!-- Begin WP Head Function -->
  <?php wp_head();?>
  <!-- End WP Head Function -->

</head>
<body <?php body_class(); ?>>
  <!---Start Header--->
  <header>
    <img src="<?php bloginfo('template_directory')?>/images/logo.png" alt="logo" id="logo"/>
    <h1 id="title"><?php bloginfo('description'); ?> | <?php bloginfo('name'); ?></h1>
  </header>
  <!---End Header--->

  <!---Start Wrapper--->
  <div id="wrapper">

    <!--Start Navigation-->
    <?php wp_nav_menu(array('theme_location' => 'main-menu', 'container' => 'div', 'container_id' => 'topNav'));?>
    <!---End Navigation-->

    <!--Start Navigation
    <nav id="topNav">
      <ul>
        <a href=""><li>Main</li></a>
        <a href="home.html"><li>Home</li></a>
        <a href=""><li>Stock</li></a>
        <a href=""><li>Gallery</li></a>
        <a href=""><li>Contact</li></a>
      </ul>
    </nav>
  End Navigation-->

    <!--Start Content-->
    <main>
      <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
      <!--<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>-->
      <?php the_content(''); ?>
      <?php endwhile; endif; ?>

    </main>
    <!---End Content--->

    <!--Start Footer-->
    <footer>
      <h4 id="copywrite">International Model &amp; Toys &copy; 2017 | <em>Designed by Ronald Hamasaki</em></h4>
    </footer>
    <!---End Footer--->
  </div>
  <!--End Wrapper-->

  <!-- Begin WP Head Function -->
  <?php wp_footer(); ?>
  <!-- End WP Head Function -->

</body>
</html>
