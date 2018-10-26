<div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <?php while (have_posts()) : the_post(); ?>
        <article <?php post_class(); ?>>
          <header>
            <?php the_post_thumbnail('large', ['class' => 'img-responsive center-block']); ?>
            <br>
            <br>
            <?php
              if (in_category('news')) {
                echo '<span class="post-type">[Nieuws]</span>';
              }
              elseif (in_category('datablog')) {
                echo '<span class="post-type">[Datablog]</span>';
              }
            ?>
            <?php get_template_part('templates/entry-meta'); ?>
            <br>
            <br>
            <h1 class="entry-title-post"><?php the_title(); ?></h1>
          </header>
          <div class="entry-content">
            <?php the_content(); ?>
          </div>
        </article>
      <?php endwhile; ?>
    </div>
  </div>
</div>
<div class="visible-md visible-lg">
  <?php $category = get_the_category(); ?>
  <div class="row bg-yellow">
    <div class="container">
      <div class="row balk black-txt">
        Andere nieuwsberichten
        <br>
        <br>
        <img class="img-responsive news-data-arrow" src="<?= get_template_directory_uri() . '/dist/images/app-challenge-arrow.svg'; ?>" alt="Pijl">
      </div>
      <?php
        $args = array( 'posts_per_page' => 3, 'post__not_in' => array(get_the_ID()), 'category_name' => $category[0]->name );
        $myposts = get_posts( $args );
      ?>
      <?php
        for ($x = 0; $x < 3; $x++) :
          $post = $myposts[$x];
          if(!is_null($post)) :
            setup_postdata($post);
      ?>
        <?php get_template_part('templates/content', 'thumbnail'); ?>
      <?php
          endif;
        endfor;
      ?>
      <?php
        wp_reset_postdata();
      ?>
    </div>
  </div>
  <div class="row bg-orange">
    <div class="container">
      <?php
        $args = array( 'posts_per_page' => 3, 'post__not_in' => array(get_the_ID()), 'category_name' => $category[0]->name );
        $myposts = get_posts( $args );
      ?>
      <?php
        for ($x = 0; $x < 3; $x++) :
          $post = $myposts[$x];
          if(!is_null($post)) :
            setup_postdata($post);
      ?>
        <?php get_template_part('templates/content'); ?>
      <?php
          endif;
        endfor;
      ?>
      <?php
        wp_reset_postdata();
      ?>
    </div>
  </div>
</div>
<div class="visible-xs visible-sm">
  <?php $category = get_the_category(); ?>
  <div class="row bg-yellow">
    <div class="container">
      <div class="row balk black-txt">
        Andere nieuwsberichten
        <br>
        <br>
        <img class="img-responsive news-data-arrow" src="<?= get_template_directory_uri() . '/dist/images/app-challenge-arrow.svg'; ?>" alt="Pijl">
      </div>
      <?php
        $args = array( 'posts_per_page' => 3, 'post__not_in' => array(get_the_ID()), 'category_name' => $category[0]->name );
        $myposts = get_posts( $args );
      ?>
      <?php
        for ($x = 0; $x < 3; $x++) :
          $post = $myposts[$x];
          if(!is_null($post)) :
            setup_postdata($post);
      ?>
        <?php get_template_part('templates/content', 'and-thumbnail'); ?>
      <?php
          endif;
        endfor;
      ?>
      <?php
        wp_reset_postdata();
      ?>
    </div>
  </div>
</div>
<div class="row bg-dark-blue text-center">
  <br>
  <br>
  <br>
  <br>
    <a class="idee-margin" href="https://docs.google.com/forms/d/e/1FAIpQLScRmcy21ew0pxYLsBx0bpbSxG7DkZra769RrQoW1otA2UHn0w/viewform" target="_blank" rel="noopener"><button type="button" class="btn bg-orange arrow-btn-border arrow-btn vertical-align"><span class="idee-text">stuur je idee in</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img class="img-responsive arrow-idee" src="<?= get_template_directory_uri() . '/dist/images/app-challenge-arrow-white.svg'; ?>" alt="Pijl"></button></a>
    <img class="img-responsive idee idee-margin" src="<?= get_template_directory_uri() . '/dist/images/app-challenge-artwork.svg'; ?>" alt="Idee">
  <br>
  <br>
  <br>
  <br>
</div>
