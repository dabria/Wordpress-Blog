<?php get_header(); ?>

<div class="row">
  <div class="span8 offset2" id="main">
    <h1 id="categorytitle" class="categoryformat"><?php
      $category = get_the_category(); 
      echo $category[0]->cat_name;
      ?></h1>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <h2 class="categoryformat"><?php the_title(); ?></h2>
      <div class="categoryformat">
        <?php the_content(); ?>
      </div>
    <hr>

  <?php endwhile; else: ?>
    <p><?php _e('Sorry, this page does not exist.'); ?></p>
  <?php endif; ?>

  </div>
  <div class="span2">
    <?php get_sidebar(); ?>
  </div>
</div>

<?php get_footer(); ?>
