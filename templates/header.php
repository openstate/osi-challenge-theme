<header>
  <nav class="navbar navbar-fixed-top nav-primary navbar-default">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <div id="navbar" class="collapse navbar-collapse">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
      endif;
      ?>
    </div>
  </nav>
  <div class="lead">
    <div class="header row">
      <br>
      <div class="header-logo col-md-offset-4 col-md-4">
        <img class="img-responsive center-block" src="<?= get_template_directory_uri() . '/dist/images/logo.svg'; ?>" alt="Open Stateninformatie logo">
      </div>
    </div>
    <br>
    <div class="row">
      <h1 class="text-center header-title-posts">
        app challenge
      </h1>
    </div>
  </div>
  <br>
  <br>
  <br>
  <br>
  <br>
</header>
