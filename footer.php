

    <footer id="footer" class="uk-block uk-block-large uk-text-center">
      <p><a href="#" data-uk-smooth-scroll="offset: 500" class="uk-icon uk-icon-large uk-icon-anchor font-red"></a></p>
      <p style="font-size:.75em;">&copy; Bad Schtroumpfies <?php echo date('Y'); ?></p>

      <?php wp_footer(); ?>

    </footer>

    <div id="offcanvas" class="uk-offcanvas">
      <div class="uk-offcanvas-bar">
          <?php if (function_exists(clean_custom_menus_mobile())) clean_custom_menus_mobile(); ?>
      </div>
    </div>

  </div><!-- uk-container .uk-container-center .uk-margin -->

  </body>

</html>
