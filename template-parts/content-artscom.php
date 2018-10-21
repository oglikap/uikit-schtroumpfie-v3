  <?php //* The Query
    $exec_query = new WP_Query( array (
    'post_type' => 'toneel',
    'cat' => '-7, -6',
    'posts_per_page' => -1
    ) );

    //* The Loop
    if ( $exec_query->have_posts() ) { ?>

      <div class="uk-padding uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-4@m uk-grid-medium" uk-grid="masonry: true; parallax: 150" uk-scrollspy="target: > div; cls: uk-animation-fade; delay: 200">
        <?php while ( $exec_query->have_posts() ): $exec_query->the_post(); ?>
          <div>
            <div class="uk-card uk-card-default uk-text-center">
              <h3 class="uk-card-title bs-toneel-title">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              </h3>
              <figure>
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'square' ); ?></a>
              </figure>
              <p class="bs-toneel-subtitle"><?php echo( get_the_excerpt() ); ?></p>
            </div>
          </div>

        <?php
           endwhile;
           //* Restore original Post Data
         wp_reset_postdata();}?>

      </div>
