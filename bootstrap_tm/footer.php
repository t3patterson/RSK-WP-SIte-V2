    <div id="sticky-foot-push"></div>

  </main> 
   
  <footer>
    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-7">
          <?php if ( dynamic_sidebar('footer-company') ); ?>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-5"></div>
          <?php 
            $args=[
              'menu' => 'footer-menu',
              'menu_class' => 'footer-menu-list',
              'container' => 'false'
            ];
            wp_nav_menu($args)
          ?>
        </div>
      </div>
    </div>
  </footer> 
  <?php wp_footer();   ?>
</body>
</html>