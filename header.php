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

            <!--NAVIGATION  -------------->
            <nav class="uk-navbar-container uk-navbar-transparent" uk-navbar>
              <div class="uk-navbar-left bs-logo-area">
                <a href="<?php bloginfo( 'url' ); ?>"><?php bloginfo( 'name' ) ?></a>
              </div>
              <div class="uk-navbar-right bs-banner-menu">

                <?php wp_nav_menu( array(
                  'theme_location' => 'schtroumpfie-menu',
                  'container' => 'ul',
                  'menu_class' => 'uk-navbar-nav'
                ) ); ?>

              </div>
            </nav>

            <?php if( have_rows('home') ): while( have_rows('home') ): the_row(); ?>

                <div class="bs-logo">
                  <span class="uk-scrollspy-init-inview uk-scrollspy-inview uk-align-center logo" data-uk-scrollspy="{cls: 'uk-animation-fade', delay: 300}">
                    <?php the_custom_logo(); ?>
                  </span>
                </div>


              </div>
            <?php endwhile; endif; ?>
          </div>
        <?php endif; ?>

      </section>

    <?php } else { ?>

      <!--NAVIGATION  -------------->
      <nav class="uk-navbar-container uk-navbar-transparent" uk-navbar>
        <div class="uk-navbar-left bs-logo-area">
          <a href="<?php bloginfo( 'url' ); ?>"><?php bloginfo( 'name' ) ?></a>
        </div>
        <div class="uk-navbar-right bs-banner-menu">

          <?php wp_nav_menu( array(
            'theme_location' => 'schtroumpfie-menu',
            'container' => 'ul',
            'menu_class' => 'uk-navbar-nav'
          ) ); ?>

        </div>
      </nav>

    <?php } ?>


    </header>
