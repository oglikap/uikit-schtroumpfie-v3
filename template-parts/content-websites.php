<div class="uk-container uk-container-center paper-fiber">

  <div class="uk-grid">
    <div class="uk-width-1-1">
      <figure class="uk-text-center">
        <img class="logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-main-trans.png" alt="">

      </figure>

    </div>
  </div>

  <div class="uk-grid uk-grid-large">
    <div class="uk-width-1-1">
      <div class="uk-article uk-text-center">
        <h1 class="uk-article-title line-between">
          <?php the_title(); ?>
        </h1>

        <div class="uk-grid" data-uk-grid-margin>
          <div class="uk-width-large-4-10">
            <figure>
              <?php the_post_thumbnail('square-medium'); the_post_thumbnail_caption(); ?>
            </figure>
          </div>

          <div class="uk-width-large-6-10">
            <p class="uk-article-meta">
              <?php if( get_field('soort') ): the_field('soort'); endif; ?>
            </p>
            <p class="uk-article-lead">
              <?php if( get_field('datum') ): the_field('datum'); endif; ?>
            </p>
            <?php the_content(); ?>
          </div>
        </div>

        <hr class="uk-article-divider">
         <?php echo DISPLAY_ULTIMATE_PLUS(); ?>
      </div>
    </div>
  </div>

  <?php get_template_part( 'content', 'blocks' ); ?>

  <footer>
    <?php include( get_template_directory() . '/includes/navigation.php' ); ?>
  </footer>

</div>
