<?php get_header(); ?>
<?php query_posts('tag=thought'); ?>

<div class="row">
  <div class="span8" id="main">
    <h1>Thoughts</h1>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <p><em><?php the_time('l, F jS, Y'); ?></em></p>
    <hr>

    <?php endwhile; else: ?>
      <p><?php _e('Sorry, there are no posts.'); ?></p>
    <?php endif; ?>

  </div>
  <div class="span4">

    <?php get_sidebar(); ?>   

  </div>
</div>

<?php get_footer(); ?>
