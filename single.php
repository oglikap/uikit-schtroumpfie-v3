<?php get_header(); ?>

<div class="uk-container uk-container-center">

  <div class="uk-grid" data-uk-grid-margin="{cls:'uk-margin-top'}">
    <div class="uk-width-medium-2-3">

      <?php if( have_posts() ): while( have_posts() ): the_post(); ?>

      <div class="uk-article uk-text-center">
        <h1 class="uk-article-title line-between"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
        <p class="uk-article-meta">Gepubliceerd in <?php the_category( ', ' ); ?> op <?php the_time( 'j F Y' ); ?></p>
        <p class="uk-article-lead"><?php echo strip_tags( get_the_excerpt() ); ?></p>
        <?php the_content(); ?>
        <hr class="uk-article-divider">
        <p></p>
      </div>
    <?php endwhile; endif; ?>
    </div>

    <div class="uk-width-medium-1-3">
      <?php if( get_the_post_thumbnail() ): ?>
        <figure class="uk-text-center">
          <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail('large'); ?>
          </a>
        </figure>
      <?php endif; ?>
    </div>
  </div>

</div>

<?php get_footer(); ?>
