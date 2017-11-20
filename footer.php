    <div id="footer__root" class="container container--primary">
      <div id="footer__root__brand">
        <a href="<?php echo home_url(); ?>">
           <img alt="Brand"
             src="<?php echo get_template_directory_uri() . '/img/brand.png'; ?>"
             width="80px"
             height="auto"
          />
        </a>
      </div>
      <div id="footer__root__menu">
        <?php wp_nav_menu( array(
          'container' => 'false',
          'theme_location' => 'footer',
          'menu_id' => 'footer__root__menu__list'
        ) ); ?>
      </div>
    </div>
    <?php wp_footer(); ?>
  </body>
</html>
