<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package amoredio
 */
?>

  </div><!-- #content -->

  <footer id="colophon" class="site-footer" role="contentinfo">
    <div class="site-info container">
      <div class="row">
        <div class="col-md-3">
          <p>2014 &copy; copyrights AmoreDio</p>
          <p>Follow us on: <a href="#"><i class="fa fa-facebook-square fa-lg"></i> Facebook</a></p>
        </div><!-- /.span -->
        <div class="col-md-9">
          <h3>Site Map</h3>
          <?php /* Primary navigation */
            wp_nav_menu( array(
              'theme_location' => 'secondary',
              'menu_id' => 'primary-menu',
              'menu' => 'top_menu',
              'container' => false,
              'menu_class' => 'list-unstyled',
            ));
          ?>
        </div>
        
      </div><!-- /.row -->
    </div><!-- .site-info -->
  </footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
