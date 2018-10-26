<div class="col-md-4">
  <div class="entry-padding bg-white">
    <article <?php post_class(); ?>>
      <header class="entry-meta">
        <h3 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        <?php
          if (in_category('news')) {
            echo '<span class="post-type">[Nieuws]</span>';
          }
          elseif (in_category('datablog')) {
            echo '<span class="post-type">[Datablog]</span>';
          }
        ?>
        <?php get_template_part('templates/entry-meta'); ?>
      </header>
      <?php the_post_thumbnail('square-large-xs-sm', ['class' => 'img-responsive']); ?>
      <div class="entry-summary">
        <?php the_excerpt(); ?>
      </div>
    </article>
  </div>
</div>
