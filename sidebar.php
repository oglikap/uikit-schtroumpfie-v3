<div class="uk-block"></div>
<div id="sidebar" class="uk-container uk-container-center" style="background:url(<?php echo get_template_directory_uri() . '/assets/img/about-bg.jpg'; ?>) center no-repeat;background-size:cover;padding:1em;">
  <div class="uk-grid uk-margin">
      <?php if( is_active_sidebar( 'sidebar-1' ) ): ?>
        <div class=" uk-width-small-1-1 uk-width-medium-1-3">
          <?php dynamic_sidebar( 'sidebar-1' ); ?>
        </div>
      <?php endif; ?>

      <?php if( is_active_sidebar( 'sidebar-2' ) ): ?>
        <div class=" uk-width-small-1-1 uk-width-medium-1-3">
          <?php dynamic_sidebar( 'sidebar-2' ); ?>
        </div>
      <?php endif; ?>

      <?php if( is_active_sidebar( 'sidebar-3' ) ): ?>
        <div class=" uk-width-small-1-1 uk-width-medium-1-3">
          <?php dynamic_sidebar( 'sidebar-3' ); ?>
        </div>
      <?php endif; ?>
  </div>
</div>
