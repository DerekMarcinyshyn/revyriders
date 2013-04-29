<header class="banner" role="banner">
  <div class="container">
    <a class="brand" href="<?php echo home_url(); ?>/"><img alt="Revy Riders" src="../assets/img/revy-riders-logo.png" width="160" height="60" /></a>
    <nav class="nav-main" role="navigation">
      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav nav-pills'));
        endif;
      ?>
    </nav>
  </div>
</header>