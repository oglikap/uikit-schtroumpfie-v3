<section id="websites">
  <div class="uk-container uk-container-center">
    <h1 class="line-between uk-text-center" data-uk-scrollspy="{cls:'uk-animation-slide-left', delay:300}">Websites</h1>
    <?php //* The Query
      $exec_query = new WP_Query( array (
      'post_type' => 'websites',
      //  'job_role'  => 'executive',
      //'category' => 4
      'posts_per_page' => -1
      ) );

      //* The Loop
      if ( $exec_query->have_posts() ) { ?>
        <div class="uk-grid uk-grid-collapse">
          <div class="uk-width-large-3-10 uk-hidden-medium uk-hidden-small">
            <img src="<?php echo get_template_directory_uri() . '/assets/img/yellowsub3.png'; ?>" alt="">
          </div>
          <div class="uk-width-1-1 uk-width-large-4-10 uk-text-center paper-bg">
            <img src="<?php echo get_template_directory_uri() . '/assets/img/websmurf.png'; ?>" alt="">
            <p class="font-red uk-text-center">As mentioned, Bad Schtroumpfies can build your website. They can design and build attractive, light-weight sites which scale nicely from mobile phone to wide-screen. Just contact us and we'll find out what suits you best!</p>
          </div>
          <div class="uk-width-large-3-10 uk-hidden-medium uk-hidden-small">
            <img src="<?php echo get_template_directory_uri() . '/assets/img/yellowsub4.png'; ?>" alt="">
          </div>
        </div>
    </div>
</section>

<div class="uk-container uk-container-center uk-margin">
  <div class="uk-grid-width-small-1-2 uk-grid-width-medium-1-3 uk-grid-width-large-1-4" data-uk-grid="{gutter: 4}">
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
</div>
