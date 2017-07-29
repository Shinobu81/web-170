<!doctype html>
<html>


<head>
  <title>International Model &amp; Toys</title>

  <!-- Meta tags -->
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="robots" contents="noindex, nofollow">

  <!-- CSS links -->
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url')?>"/>

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
      <img src="<?php bloginfo('template_directory')?>/images/logo.png" alt="logo" id="logo"/>
      <h1 id="title"><?php bloginfo('name'); ?></h1><br/><small id="tagline"><?php bloginfo('description'); ?></small>
    </header>
    <!-- End Header -->

    <!-- Start Navigation -->
    <?php wp_nav_menu(array('theme_location' => 'main-menu', 'container' => 'div', 'container_id' => 'topNav'));?>
    <!-- End Navigation -->

<!-- Start Content -->
<div id="content">
  <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
    <!--<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>-->
    <?php the_content(''); ?>
  <?php endwhile; endif; ?>
</div>
<!-- End Content -->

<!-- Start Sidebar -->
<div id="sidebar">
<?php if (is_page()) : ?>
<h2><?php echo get_the_title($post->post_parent); ?></h2>

<ul class="sub-nav-items">
<?php
  if ($post->post_parent){ //If we're on has a parent
    wp_list_pages(array('child_of' => $post->post_parent, 'title_li' => '')); // list sub pages of parent pages
  } else {
    wp_list_pages(array('child_of' => $post->ID, 'title_li' => ''));
  }
  ?>
</ul>
<?php endif; ?>
<?php if(!(is_page())) : ?>
  <h2>Blog</h2>
<ul class="sub-nav-items">
<?php wp_list_categories(array('title_li' => '')); ?>
<?php endif; ?>
</div>
<!-- End Sidebar -->

<!-- Start Footer -->
<footer>
  <h4 id="copywrite">International Model &amp; Toys &copy; 2017 | <em>Designed by Ronald Hamasaki</em></h4>
</footer>
<!--End Footer -->

<!-- Begin WP Footer Function -->
<?php wp_footer(); ?>
<!-- End WP Footer Function -->

</div>
<!--End Wrapper-->

</body>
</html>