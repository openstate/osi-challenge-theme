<header class="banner">
  <div class="header-full">
    <div class="row">
      <div class="header-logo col-lg-9">
        <a href="<?= esc_url(home_url('/')); ?>">
          <img class="img-responsive display-inline Logo_digging_def_klein" src="<?= get_template_directory_uri() . '/dist/images/Logo_digging_def_klein.gif'; ?>" alt="Digging for Data logo"/>
        </a>
      </div>
      <nav class="hidden-lg nav-primary navbar-default navbar-fixed-top">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <br>
          <?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
          endif;
          ?>
          <br>
        </div><!-- /.navbar-collapse -->
      </nav>
      <div class="visible-lg-inline col-lg-3">
        <div class="row">
          <nav class="nav-primary navbar-default">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
              <br>
              <?php
              if (has_nav_menu('primary_navigation')) :
                wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
              endif;
              ?>
              <br>
            </div><!-- /.navbar-collapse -->
          </nav>
        </div>
      </div>
    </div>
  </div>
</header>
