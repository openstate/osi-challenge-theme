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
      <div class="col-md-offset-4 col-md-4">
        <img class="img-responsive center-block" src="<?= get_template_directory_uri() . '/dist/images/logo.svg'; ?>" alt="Open Stateninformatie logo">
      </div>
    </div>
    <br>
    <div class="row">
      <h1 class="text-center header-title">
        app challenge
      </h1>
    </div>
    <div class="row">
      <br>
      <p class="lead-text text-center col-md-offset-3 col-md-6">
        Vijf provincies hebben stateninformatie beschikbaar gesteld als open data. De deadline voor het inzenden van ideeën voor de App Challenge is verlopen. Je kan je aanmelden voor het app lanceer event van het winnende idee.
      </p>
    </div>
    <br>
    <div class="row arrow-btns">
      <a href="https://docs.google.com/forms/d/e/1FAIpQLSff8z6b5ElPQpyNEn_LBxifC16ft-oqSfPC5wZWWInt5n_blQ/viewform" target="_blank" rel="noopener"><button type="button" class="btn bg-red arrow-btn vertical-align">aanmelden lanceer event&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img class="img-responsive arrow" src="<?= get_template_directory_uri() . '/dist/images/app-challenge-arrow-white.svg'; ?>" alt="Pijl"></button></a>
    </div>
  </div>
</header>
