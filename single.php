
<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
  <div>
    <?php if ( has_post_thumbnail() ): ?>
      <div
        id="single__root__image"
        style="background-image: url('<?php the_post_thumbnail_url('large'); ?>');"
      >
      </div>
    <?php endif ?>
    <div class="container container--background">
      <h3><?php the_title(); ?></h3>
      <p><i><?php the_time('F j, Y'); ?></i></p>
      <?php the_content(); ?>
    </div>
  </div>
<?php endwhile; ?>
<?php get_footer(); ?>
