<?php if (is_single()) : ?>

  <div class="uk-grid">
    <div class="uk-width-1-3 uk-text-center">
      <?php previous_post_link('<p><span class="uk-icon-angle-left"></span> %link', '%title</p>'); ?>
    </div>
    <div class="uk-width-1-3">

    </div>
    <div class="uk-width-1-3 uk-text-center">
      <?php next_post_link('<p> %link', '%title <span class="uk-icon-angle-right"></span></p>') ?>
    </div>
  </div>

 <?php endif; ?>
