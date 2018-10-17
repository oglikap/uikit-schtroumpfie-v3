<div class="uk-container uk-container-center">
  <h1 class="uk-text-center line-between">Arts &amp; Comics</h1>
  <?php //* The Query
    $exec_query = new WP_Query( array (
    'post_type' => 'toneel',
    //  'job_role'  => 'executive',
    'cat' => '-7, -6',
    'posts_per_page' => -1
    ) );

    //* The Loop
    if ( $exec_query->have_posts() ) { ?>
      <div class="uk-grid-width-1-2 uk-grid-width-medium-1-3 uk-grid-width-large-1-4 tm-grid-colors" data-uk-grid="{'gutter: 4'}" data-uk-scrollspy="{cls:'uk-animation-fade uk-invisible', target:'&gt; div &gt; .uk-panel', delay:200, repeat: true}">
    <?php while ( $exec_query->have_posts() ): $exec_query->the_post(); ?>

      <div>
        <div class="uk-panel uk-panel-box uk-invisible bg-paper">
            <h3 class="uk-panel-title toneel-title"><?php the_title(); ?></h3>
            <figure class="uk-thumbnail">
              <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
            </figure>
            <h4 class="uk-panel-title toneel-subtitle font-red"><?php the_excerpt(); ?></h4>
        </div>
      </div>
    <?php
       endwhile;
       //* Restore original Post Data
     wp_reset_postdata();}?>
     </div>
</div>
