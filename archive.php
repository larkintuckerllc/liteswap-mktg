
<?php get_header(); ?>
<div class="container container--background">
  <h3><?php single_cat_title( 'Posts from ' ); ?></h3>
  <?php while ( have_posts() ) : the_post(); ?>
      <div>
        <?php if ( has_post_thumbnail() ): ?>
        <div>
          <img src="<?php the_post_thumbnail_url( 'thumbnail' ); ?>" />
        </div>
        <?php endif ?>
        <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
        <p><i><?php the_time( 'F j, Y' ); ?></i></p>
        <?php the_excerpt(); ?>
      </div>
  <?php endwhile; ?>
</div>
<?php get_footer(); ?>
