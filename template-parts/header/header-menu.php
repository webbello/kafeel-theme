  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center <?php echo $args['class'];?>">
    <div class="container-fluid">

      <div class="row justify-content-center align-items-center">
        <div class="col-xl-11 d-flex align-items-center justify-content-between">
          <h1 class="logo"><a href="<?php echo get_home_url(); ?>">Webbello</a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

          <nav id="navbar" class="navbar">
            <?php
            wp_nav_menu(array(
              'theme_location' => 'one-page-menu',
              'container' => false,
              'menu_class' => '',
              'fallback_cb' => '__return_false',
              'items_wrap' => '<ul>%3$s</ul>',
              'depth' => 2,
              'walker' => new WP_Bootstrap5_Navwalker()
            ));
            ?>
            <i class="bi bi-list mobile-nav-toggle">...</i>
          </nav><!-- .navbar -->
        </div>
      </div>

    </div>
  </header><!-- End Header -->