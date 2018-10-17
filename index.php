<?php get_header(); ?>

<div class="uk-container uk-container-center">

  <?php if( have_posts() ): while( have_posts() ): the_post(); ?>

  <div class="uk-grid">
    <div class="uk-width-1-1">
      <figure class="uk-text-center">
        <?php the_custom_logo(); ?>
      </figure>
      <h1 class="uk-text-center line-between">
        <?php the_title(); ?>
      </h1>
    </div>
  </div>

  <div class="uk-grid uk-grid-large">

    <div class="uk-width-medium-6-10">
      <?php the_content(); ?>
    </div>
    <div class="uk-width-medium-4-10">
      <figure class="uk-thumbnail">
        <?php the_post_thumbnail(); ?>
      </figure>
    </div>
  </div>

<?php endwhile; else: ?>

  <p><?php e_( 'Sorry, niks gevonden qua content...' ); ?></p>

<?php endif; ?>

</div>

<?php get_footer(); ?>
