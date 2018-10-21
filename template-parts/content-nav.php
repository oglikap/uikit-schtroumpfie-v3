<!--NAVIGATION  -------------->

<?php if( is_front_page() ) { ?>

<nav class="uk-navbar-container uk-navbar-transparent uk-visible@s" uk-navbar>

<?php } else { ?>

<nav class="uk-navbar-container uk-visible@s bs-dark-nav" uk-navbar uk-sticky>

<?php } ?>

  <div class="uk-navbar-left bs-logo-area">
    <a href="<?php bloginfo( 'url' ); ?>"><?php bloginfo( 'name' ) ?></a>
  </div>

  <?php if( is_front_page() ) { ?>

  <div class="uk-navbar-right bs-banner-menu">

    <?php wp_nav_menu( array(
      'theme_location' => 'schtroumpfie-menu',
      'container' => 'ul',
      'menu_class' => 'uk-navbar-nav'
    ) ); ?>

    <?php } else { ?>

    <div class="uk-navbar-right">

      <?php wp_nav_menu( array(
        'theme_location' => 'schtroumpfie-menu',
        'container' => 'ul',
        'menu_class' => 'uk-navbar-nav'
      ) ); }?>

    </div>
</nav>

<!-- FOR SMALL NAVIGATION -->

<div class="uk-offcanvas-content uk-hidden@s uk-flex uk-flex-right">

  <a class="uk-padding-small uk-light" href="#bs-small-menu" uk-toggle uk-icon="icon:menu; ratio: 2"></a>

  <div id="bs-small-menu" uk-offcanvas>
    <div class="uk-offcanvas-bar">
      <button class="uk-offcanvas-close" type="button" uk-close></button>

      <?php wp_nav_menu( array(
        'theme_location' => 'schtroumpfie-menu',
        'container' => 'ul',
        'menu_class' => 'uk-nav'
      ) ); ?>
    </div>
  </div>

</div>
