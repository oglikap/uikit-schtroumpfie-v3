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
      <?php the_content(); ?>
    </div>
  </div>

<?php endwhile; else: ?>

  <p><?php e_( 'Sorry, niks gevonden op deze pagina qua content...' ); ?></p>

<?php endif; ?>

</div>

<?php get_footer(); ?>
