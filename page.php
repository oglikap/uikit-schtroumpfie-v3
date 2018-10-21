<?php get_header(); ?>

<div class="uk-container">

  <?php if( have_posts() ): while( have_posts() ): the_post(); ?>

    <?php if( is_page( 'arts-comics' ) ) {?>

        <?php get_template_part( 'template-parts/content', 'artscom' ); ?>

    <?php } elseif( is_page( 'websites-overzicht' ) ) { ?>

        <?php get_template_part( 'template-parts/content', 'webpage' ); ?>

    <?php } else { ?>

      <div uk-grid>
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

    <?php } ?>

<?php endwhile; else: ?>

  <p><?php e_( 'Sorry, niks gevonden op deze pagina qua content...' ); ?></p>

<?php endif; ?>

</div>

<?php get_footer(); ?>
