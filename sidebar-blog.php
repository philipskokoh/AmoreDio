<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package amoredio
 */

if ( ! is_active_sidebar( 'sidebar-2' ) ) {
  return;
}
?>

<div id="secondary" class="widget-area" role="complementary">
  <?php dynamic_sidebar( 'sidebar-2' ); ?>
</div><!-- #secondary -->
