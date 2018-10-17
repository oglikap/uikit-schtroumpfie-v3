<div class="uk-container uk-container-center">

  <div class="uk-grid">
    <div class="uk-width-1-1">
      <?php if( get_field('bg') ): ?>
        <div class="uk-cover-background" style="height: 450px; background-image: url(<?php the_field('bg');?>"></div>
      <?php endif; ?>
      <h2 class="line-between">
        <?php the_title(); ?>
      </h2>
    </div>
  </div>

  <div class="uk-grid uk-grid-large">

    <div class="uk-width-medium-6-10">
      <?php the_content(); ?>
    </div>
    <div class="uk-width-medium-4-10">
      <figure class="uk-thumbnail">
        <?php the_post_thumbnail(); the_post_thumbnail_caption(); ?>
      </figure>
    </div>
  </div>

    <?php

    if ( is_single( '254' ) ) : ?>

    <div class="uk-container uk-container-center">
      <h1 class="uk-text-center line-between">Producties</h1>
      <?php
      //* The Query
        $exec_query = new WP_Query( array (
        'post_type' => 'toneel',
        //  'job_role'  => 'executive',
        'cat' => 7,
        'posts_per_page' => 4,
        'orderby' => 'date',
        'order' => 'ASC'
        ) );

        //* The Loop
        if ( $exec_query->have_posts() ) { ?>
          <div class="uk-grid-width-1-2 uk-grid-width-medium-1-3 uk-grid-width-large-1-4 tm-grid-colors" data-uk-grid="{gutter: 8}" data-uk-scrollspy="{cls:'uk-animation-fade uk-invisible', target:'&gt; div &gt; .uk-panel', delay:200, repeat: true}">
        <?php while ( $exec_query->have_posts() ): $exec_query->the_post(); ?>

          <div>
            <div class="uk-panel uk-panel-box uk-invisible bg-paper">
                <h3 class="uk-panel-title toneel-title"><?php the_title(); ?></h3>
                <figure class="uk-thumbnail">
                  <a class="uk-text-center" href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                </figure>
                <h4 class="uk-panel-title toneel-subtitle font-red"><?php the_excerpt(); ?></h4>
            </div>
          </div>
        <?php
           endwhile;
           //* Restore original Post Data
         wp_reset_postdata();}?>
         </div>
       <?php elseif ( is_single( '179' ) ): ?>

         <div class="uk-container uk-container-center">
           <h1 class="uk-text-center line-between">Producties</h1>
           <?php
           //* The Query
             $exec_query = new WP_Query( array (
             'post_type' => 'toneel',
             //  'job_role'  => 'executive',
             'cat' => 6,
             'posts_per_page' => -1,
             'orderby' => 'date',
             'order' => 'DESC'
             ) );

             //* The Loop
             if ( $exec_query->have_posts() ) { ?>
               <div class="uk-grid-width-1-2 uk-grid-width-medium-1-3 uk-grid-width-large-1-4 tm-grid-colors" data-uk-grid="{gutter: 8}" data-uk-scrollspy="{cls:'uk-animation-fade uk-invisible', target:'&gt; div &gt; .uk-panel', delay:200, repeat: true}">
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

    <?php endif; ?>
  </div>

  <div class="uk-block"></div>

  <?php get_template_part( 'content', 'blocks' ); ?>

</div>

  <?php
  $images = get_field('gallery');

    if( $images ):?>
    <div class="uk-container uk-container-center uk-margin bg-fiber">
      <h3 class="uk-text-center line-between">Scènefoto's</h3>
      <div class="uk-grid uk-grid-width-1-3 uk-grid-width-medium-1-5 uk-text-center" data-uk-grid="{gutter: 4}" data-uk-scrollspy="delay: 1500">
        <?php foreach ($images as $image) : ?>
          <div class="uk-row-first">

            <a data-uk-lightbox="{group: 'group1'}" href="<?php echo $image['url'] ?>">
              <img src="<?php echo $image['sizes']['medium_large']; ?>" alt="<?php echo $image['alt']; ?>" /></a>
          </div>

          <?php endforeach; ?>
      </div>
      <div class="uk-block">
        <footer class="uk-text-center">
          <p><?php echo $image['caption']; ?></p>
        </footer>
      </div>
    </div>

  <!--  <div class="uk-container uk-container-center">
      <div class="uk-margin" data-uk-slideset="{default: 5}">
        <div class="uk-slidenav-position uk-margin">
          <ul class="uk-slideset uk-grid uk-flex-center uk-grid-width-1-4">
          <//?php foreach ($images as $image) : ?>

            <li class="">
              <a href="<//?php echo $image['url'] ?>">
                <img src="<//?php echo $image['sizes']['widescreen']; ?>" alt="<//?php echo $image['alt']; ?>" /></a>
            </li>

            <//?php endforeach; ?>
          </ul>
          <a href="#" class="uk-slidenav uk-slidenav-previous" data-uk-slideset-item="previous"></a>
          <a href="#" class="uk-slidenav uk-slidenav-next" data-uk-slideset-item="next"></a>
        </div>
          <ul class="uk-slideset-nav uk-dotnav uk-flex-center"><li data-uk-slideset-item="0" class="uk-active"><a></a></li><li data-uk-slideset-item="1"><a></a></li><li data-uk-slideset-item="2"><a></a></li>
          </ul>
      </div>
    </div>-->

    <?php endif; ?>

  <footer>
    <?php include( get_template_directory() . '/includes/navigation.php' ); ?>
  </footer>
  <?php get_sidebar(); ?>
