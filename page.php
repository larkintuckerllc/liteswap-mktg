<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
  <div class="container container--background">
    <h3><?php the_title(); ?></h3>
    <?php the_content(); ?>
  </div>
<?php endwhile; ?>
<?php get_footer(); ?>
