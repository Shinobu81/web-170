<!-- Begin Sidebar -->
<div id="sidebar">
  <?php if(is_page()) : ?>
    <h2 class="sub-navigation-title"><?php echo get_the_title($post->post_parent); // get the gateway page title ?></h2>
    <ul class="sub-navigation-items">
      <?php
        if ($post->post_parent)
        { // if the page we're on has a parent...
          wp_list_pages(array( 'child_of' => $post->post_parent, 'title_li' => '',)); // then list sub-pages of parent page
        }
        else
        { // if the page does not have a parent
          wp_list_pages(array('child_of' => $post->ID, 'title_li' => '',)); // then list sub-pages of the page
        }
      ?>
    </ul>
  <?php endif; ?>

  <?php if(!(is_page())) : ?>
    <h2 class="sub-navigation-items">Blog</h2>
    <ul class="sub-navigation-items"><?php wp_list_categories(array('title_li' => '',)); ?></ul>
  <?php endif; ?>
    
  <?php dynamic_sidebar(1); //to call widgets ?>    
</div>
<!-- End Sidebar -->