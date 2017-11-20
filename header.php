<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php bloginfo( 'name' ); wp_title(); ?></title>
    <?php wp_head(); ?>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="<?php echo home_url(); ?>">
         <img alt="Brand"
           src="<?php echo get_template_directory_uri() . '/img/brand.png'; ?>"
           width="60px"
           height="auto"
        />
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <?php wp_nav_menu( array(
          'container' => 'false',
          'theme_location' => 'header',
          'menu_class' => 'navbar-nav ml-auto'
        ) ); ?>
      </div>
    </nav>
