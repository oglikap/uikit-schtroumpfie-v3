<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <header id="header">

      <?php if( is_front_page() ) { ?>

      <section id="banner" style="width:100%;">

        <?php if( get_field('bg') ): ?>

          <div class="uk-cover-background" style="background-image: url(<?php the_field('bg');?>">

            <?php get_template_part( 'template-parts/content', 'nav' ); ?>

            <?php if( have_rows('home') ): while( have_rows('home') ): the_row(); ?>

              <div class="bs-logo" uk-scrollspy="cls: uk-animation-fade; delay: 700">
                <span class="uk-scrollspy-init-inview uk-scrollspy-inview uk-align-center logo" data-uk-scrollspy="{cls: uk-animation-fade', delay: 300}">
                  <?php the_custom_logo(); ?>
                </span>
              </div>

            </div>

            <?php endwhile; endif; ?>

          <?php endif; ?>

        </section>

        <?php } elseif ( is_single() ) {

          get_template_part( 'template-parts/content', 'nav' );

        } else { ?>

          <div class="uk-height-large uk-background-secondary">

              <?php get_template_part( 'template-parts/content', 'nav' ); ?>

              <div class="uk-padding-large uk-child-width-1-2" uk-grid>
                <div>
                  <h1 class="uk-light uk-heading-line bs-title"><span><?php the_title(); ?></span></h1>
                </div>
                <div>
                  <img class="bs-page-logo" src="<?php echo get_template_directory_uri() . '/assets/img/logo-los.svg' ?>" alt="logo" style="width: 10%;">
                </div>
              </div>
            </div>
        <?php } ?>

    </header>
