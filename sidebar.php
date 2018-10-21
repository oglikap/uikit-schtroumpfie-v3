<div class="uk-block"></div>
<div id="sidebar" class="" style="background:url(<?php echo get_template_directory_uri() . '/assets/img/about-bg.jpg'; ?>) center no-repeat;background-size:cover;padding:1em;">
  <div class="uk-margin uk-padding uk-grid-divider uk-child-width-1-1 uk-child-width-1-3@s" uk-grid>
      <?php if( is_active_sidebar( 'sidebar-1' ) ): ?>
        <div>
          <?php dynamic_sidebar( 'sidebar-1' ); ?>
        </div>
      <?php endif; ?>

      <?php if( is_active_sidebar( 'sidebar-2' ) ): ?>
        <div>
          <?php dynamic_sidebar( 'sidebar-2' ); ?>
        </div>
      <?php endif; ?>

      <?php if( is_active_sidebar( 'sidebar-3' ) ): ?>
        <div>
          <?php dynamic_sidebar( 'sidebar-3' ); ?>
        </div>
      <?php endif; ?>
  </div>
</div>
