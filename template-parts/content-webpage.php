<?php //* The Query
$exec_query = new WP_Query( array (
'post_type' => 'websites',
'posts_per_page' => -1
) );

//* The Loop
if ( $exec_query->have_posts() ) { ?>
  <div class="uk-padding" uk-grid>
    <div class="uk-width-1-4@s uk-visible@s">
      <img src="<?php echo get_template_directory_uri() . '/assets/img/yellowsub3.png'; ?>" alt="">
    </div>
    <div class="uk-width-1-1 uk-width-1-2@s uk-text-center paper-bg">
      <img src="<?php echo get_template_directory_uri() . '/assets/img/websmurf.png'; ?>" alt="">
      <p class="font-red uk-text-center">As mentioned, Bad Schtroumpfies can build your website. They can design and build attractive, light-weight sites which scale nicely from mobile phone to wide-screen. Just contact us and we'll find out what suits you best!</p>
    </div>
    <div class="uk-width-1-4@s uk-visible@s">
      <img src="<?php echo get_template_directory_uri() . '/assets/img/yellowsub4.png'; ?>" alt="">
    </div>
  </div>

  <div class="uk-child-width-1-2 uk-child-width-1-4@s" uk-grid>
  <?php while ( $exec_query->have_posts() ): $exec_query->the_post(); ?>

  <div>
    <figure class="uk-overlay uk-overlay-hover">
      <a href="<?php the_permalink(); ?>"><span class="uk-overlay-scale"><?php the_post_thumbnail(); ?></span>
      <figcaption class="uk-overlay-panel uk-overlay-background uk-overlay-bottom uk-overlay-slide-bottom">
        <h3 class="uk-text-center"><small><?php if( get_field('opdrachtgever') ): the_field('opdrachtgever'); endif; ?></small></h3>
      </figcaption></a>
    </figure>

  </div>
  <?php
     endwhile;
     //* Restore original Post Data
   wp_reset_postdata();}?>
 </div>
