<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package undercustoms
 */

// if ( ! is_active_sidebar( 'sidebar-1' ) ) {
// 	return;
// }
?>

<!-- <aside id="wordpress-sidebarx" class="widget-area">
	<?php //dynamic_sidebar( 'sidebar-1' ); ?>
</aside> -->

<aside id="wordpress-sidebar" class="widget-area">
<?php
if(class_exists('WooCommerce')) {
  if ( is_woocommerce() || is_cart() || is_checkout() ) {
    if ( is_active_sidebar( 'woocommerce-sidebar' ) ) {
      dynamic_sidebar( 'woocommerce-sidebar' );
    }
  }
} else {
  dynamic_sidebar( 'sidebar-1' );
}
?>
</aside>