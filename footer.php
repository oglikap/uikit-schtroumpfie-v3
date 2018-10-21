

    <footer id="footer" class="uk-child-width-1-1 uk-height-small uk-text-center" uk-grid>
      <p><a href="#" uk-scroll class="font-red" uk-icon="icon: lifesaver; ratio: 2"></a></p>
      <p style="font-size:.75em;">&copy; Bad Schtroumpfies <?php echo date('Y'); ?></p>

      <?php wp_footer(); ?>

    </footer>

    <div id="offcanvas" class="uk-offcanvas">
      <div class="uk-offcanvas-bar">
          <?php if (function_exists(clean_custom_menus_mobile())) clean_custom_menus_mobile(); ?>
      </div>
    </div>

  </body>

</html>
