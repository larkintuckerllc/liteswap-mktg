
<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
  <div class="container container--background">
    <?php if ( has_post_thumbnail() ): ?>
      <div>
        <img src="<?php the_post_thumbnail_url('large'); ?>" />
      </div>
    <?php endif ?>
    <h3><?php the_title(); ?></h3>
    <p><i><?php the_time('F j, Y'); ?></i></p>
    <?php the_content(); ?>
  </div>
<?php endwhile; ?>
<?php get_footer(); ?>
