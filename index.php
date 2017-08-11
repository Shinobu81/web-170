<?php get_header(); ?>
<!-- Begin Content -->
  <div id="content">
    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
      <article class="post-excerpt"><h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <small>Posted on <?php the_time('F jS, Y'); ?> by <?php the_author(); ?> in <?php the_category(', '); ?></small>
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'thumbnail' ); ?></a>
        <?php the_excerpt(); ?>
        <p class="read-more"><a href="<?php the_permalink(); ?>">Read More </a></p>
      </article>
	<?php endwhile; endif; ?>
	<small>index.php</small>
  </div>
    <!-- End Content -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>


<!-- content goes here -->
