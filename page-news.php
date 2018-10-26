<?php
/**
 * Template Name: News Page
 */
?>
<div class="archive">
  <div class="row bg-orange">
    <div class="container">
      <div class="row balk black-txt">
        Nieuwsberichten
        <br>
        <br>
        <img class="img-responsive news-data-arrow" src="<?= get_template_directory_uri() . '/dist/images/app-challenge-arrow.svg'; ?>" alt="Pijl">
      </div>
      <div>
        <?php
          $args = array( 'posts_per_page' => 100, 'category_name' => 'News' );
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
</div>
