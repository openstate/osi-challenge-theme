<div class="nieuwsberichten visible-md visible-lg">
  <div class="row bg-orange">
    <div class="container">
      <div class="row balk black-txt">
        Nieuwsberichten
        <br>
        <br>
        <img class="img-responsive news-data-arrow" src="<?= get_template_directory_uri() . '/dist/images/app-challenge-arrow.svg'; ?>" alt="Pijl">
      </div>
      <?php
        $args = array( 'posts_per_page' => 3, 'category_name' => 'News' );
        $myposts = get_posts( $args );
        foreach ( $myposts as $post ) : setup_postdata( $post );
      ?>
        <?php get_template_part('templates/content', 'thumbnail'); ?>
      <?php endforeach;
        wp_reset_postdata();
      ?>
    </div>
  </div>
  <div class="row bg-dark-blue news-bottom-red">
    <div class="container">
      <?php
        $args = array( 'posts_per_page' => 3, 'category_name' => 'News' );
        $myposts = get_posts( $args );
        foreach ( $myposts as $post ) : setup_postdata( $post );
      ?>
        <?php get_template_part('templates/content'); ?>
      <?php endforeach;
        wp_reset_postdata();
      ?>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
  </div>
  <div class="row bg-red">
    <div class="container">
      <div class="row balk white-txt">
        Datablogs
        <br>
        <br>
        <img class="img-responsive news-data-arrow" src="<?= get_template_directory_uri() . '/dist/images/app-challenge-arrow-white.svg'; ?>" alt="Pijl">
      </div>
      <?php
        $args = array( 'posts_per_page' => 3, 'category_name' => 'Datablog' );
        $myposts = get_posts( $args );
        foreach ( $myposts as $post ) : setup_postdata( $post );
      ?>
        <?php get_template_part('templates/content', 'thumbnail'); ?>
      <?php endforeach;
        wp_reset_postdata();
      ?>
    </div>
  </div>
  <div class="row bg-dark-blue news-bottom-orange">
    <div class="container">
      <?php
        $args = array( 'posts_per_page' => 3, 'category_name' => 'Datablog' );
        $myposts = get_posts( $args );
        foreach ( $myposts as $post ) : setup_postdata( $post );
      ?>
        <?php get_template_part('templates/content'); ?>
      <?php endforeach;
        wp_reset_postdata();
      ?>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
  </div>
</div>
<div class="nieuwsberichten visible-xs visible-sm">
  <div class="row bg-orange">
    <div class="container">
      <div class="row balk black-txt">
        Nieuwsberichten
        <br>
        <br>
        <img class="img-responsive news-data-arrow" src="<?= get_template_directory_uri() . '/dist/images/app-challenge-arrow.svg'; ?>" alt="Pijl">
      </div>
      <?php
        $args = array( 'posts_per_page' => 3, 'category_name' => 'News' );
        $myposts = get_posts( $args );
        foreach ( $myposts as $post ) : setup_postdata( $post );
      ?>
        <?php get_template_part('templates/content', 'and-thumbnail'); ?>
      <?php endforeach;
        wp_reset_postdata();
      ?>
    </div>
  </div>
  <div class="row bg-red">
    <div class="container">
      <div class="row balk white-txt">
        Datablogs
        <br>
        <br>
        <img class="img-responsive news-data-arrow" src="<?= get_template_directory_uri() . '/dist/images/app-challenge-arrow-white.svg'; ?>" alt="Pijl">
      </div>
      <?php
        $args = array( 'posts_per_page' => 3, 'category_name' => 'Datablog' );
        $myposts = get_posts( $args );
        foreach ( $myposts as $post ) : setup_postdata( $post );
      ?>
        <?php get_template_part('templates/content', 'and-thumbnail'); ?>
      <?php endforeach;
        wp_reset_postdata();
      ?>
    </div>
  </div>
</div>
