<?php
/*
Template Name: Artscom
*/
get_header();
?>

<div class="uk-grid">
  <div class="uk-width-1-1">
    <?php if( get_field('bg') ): ?>
      <div class="uk-cover-background" style="height: 450px; background-image: url(<?php the_field('bg');?>"></div>
    <?php endif; ?>
  </div>
</div>

<?php get_template_part( 'template-parts/content', 'artscom' ); ?>


<?php get_footer(); ?>
