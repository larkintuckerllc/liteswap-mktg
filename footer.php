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
        <ul id="footer__root__menu__list">
          <li>One</li>
          <li>Two</li>
          <li>Three</li>
        </ul>
      </div>
    </div>
    <?php wp_footer(); ?>
  </body>
</html>
