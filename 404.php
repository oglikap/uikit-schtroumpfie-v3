<?php get_header(); ?>

<div class="uk-container uk-container-center">

  <div class="uk-grid">
    <div class="uk-width-1-1">
      <figure class="uk-text-center">
        <?php the_custom_logo(); ?>
      </figure>
      <h1 class="uk-text-center line-between">
        Oh nee!
      </h1>
    </div>
  </div>

  <div class="uk-grid uk-grid-large">

    <div class="uk-width-medium-6-10">
      <h3>Er is iets misgegaan...</h3>
      <p>De pagina is niet gevonden.</p>
      <p>Controleer de URL op fouten of ga terug naar:</p>
      <p><a class="uk-button" href="<?php bloginfo( 'url' ); ?>">Home</a></p>
    </div>
    <div class="uk-width-medium-4-10">
      <figure class="uk-thumbnail">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/404.jpg" alt="">
      </figure>
    </div>
  </div>

</div>

<?php get_footer(); ?>
