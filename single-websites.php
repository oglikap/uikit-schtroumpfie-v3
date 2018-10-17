<?php get_header(); ?>

<section class="bg-fiber">
  <div class="uk-container uk-container-center">

    <?php if( have_posts() ): while( have_posts() ): the_post(); ?>

    <div class="uk-grid">
      <div class="uk-width-1-1">
        <figure class="uk-text-center">
          <?php the_custom_logo(); ?>
        </figure>
      </div>
    </div>

    <div class="uk-grid uk-grid-large">
      <div class="uk-width-1-1">
        <div class="uk-article">
          <h1 class="uk-article-title line-between  uk-text-center">
            <?php the_title(); ?>
          </h1>

          <div class="uk-grid" data-uk-grid-margin>
            <div class="uk-width-large-4-10">
              <figure>
                <?php the_post_thumbnail('square-medium'); the_post_thumbnail_caption(); ?>
              </figure>
            </div>

            <div class="uk-width-large-6-10">
              <p class="uk-article-meta uk-text-center">
                <?php if( get_field('soort') ): the_field('soort'); endif; ?>
              </p>
              <p class="uk-article-lead uk-text-center">
                <?php if( get_field('datum') ): the_field('datum'); endif; ?>
              </p>
              <?php the_content(); ?>
              <hr class="uk-article-divider">
              <p class="uk-text-center">
                <?php
                $link = get_field('link');
                if( $link ): ?>

                  <a class="uk-button" href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>

                <?php endif; ?>
              </p>

            </div>
          </div>

          <!-- <//?php echo DISPLAY_ULTIMATE_PLUS(); ?>-->
        </div>
      </div>
    </div>

    <div class="uk-block"></div>

    <?php get_template_part( 'content', 'blocks' ); ?>


    <footer>
      <?php include( get_template_directory() . '/includes/navigation.php' ); ?>
    </footer>

  <?php endwhile; else: ?>

  </div>

    <p><?php e_( 'Sorry, niks gevonden qua content...' ); ?></p>

  <?php endif; ?>

</section>

<?php get_footer(); ?>
