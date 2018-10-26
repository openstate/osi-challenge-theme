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
        Vijf provincies hebben stateninformatie beschikbaar gesteld als open data. Heb jij affiniteit met besluitvorming en data? Heb jij een fantastisch idee voor een applicatie? Stuur nu je app idee in!
      </p>
    </div>
    <div class="row">
      <p class="date text-center col-md-offset-4 col-md-4">
        09.12.2018
      </p>
    </div>
    <br>
    <div class="row arrow-btns">
      <a href="https://docs.google.com/forms/d/e/1FAIpQLScGzyRtTbMPn9XGf90yUVVke4hqjEfMWmTA8v_7iybUH26xxw/viewform" target="_blank" rel="noopener"><button type="button" class="btn bg-red arrow-btn vertical-align">aanmelden brainstormsessie&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img class="img-responsive arrow" src="<?= get_template_directory_uri() . '/dist/images/app-challenge-arrow-white.svg'; ?>" alt="Pijl"></button></a>
      <a href="https://docs.google.com/forms/d/e/1FAIpQLScRmcy21ew0pxYLsBx0bpbSxG7DkZra769RrQoW1otA2UHn0w/viewform" target="_blank" rel="noopener"><button type="button" class="btn bg-dark-blue arrow-btn vertical-align">stuur je idee in&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img class="img-responsive arrow" src="<?= get_template_directory_uri() . '/dist/images/app-challenge-arrow-white.svg'; ?>" alt="Pijl"></button></a>
    </div>
  </div>
</header>
