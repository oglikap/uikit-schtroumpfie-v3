<?php get_header(); ?>

<?php if( have_posts() ): ?>

  <?php while( have_posts() ): the_post(); ?>

    <?php get_template_part( 'template-parts/content', 'toneel' ) ?>

  <?php endwhile; else: ?>

    <p><?php _e('Sorry, no posts matches your criteria!') ?></p>

<?php endif; ?>

<?php get_footer(); ?>
