<header class="banner navbar navbar-default navbar-static-top" role="banner">
  <div class="container">
    <a href="<?php echo esc_url(home_url('/')); ?>">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="<?php bloginfo('name'); ?>" class="logo img-responsive">
    </a>

    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <nav class="collapse navbar-collapse" role="navigation">
      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
        endif;
      ?>
    </nav>
  </div>
</header>

<section class="jumbotron">
  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/header.jpg" alt="<?php bloginfo('name'); ?>" class="img img-responsive">
</section>