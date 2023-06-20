<?php
/**
 * WooCommerce Compatibility File
 *
 * @link https://woocommerce.com/
 *
 * @package undercustoms
 */

/**
 * WooCommerce setup function.
 *
 * @link https://docs.woocommerce.com/document/third-party-custom-theme-compatibility/
 * @link https://github.com/woocommerce/woocommerce/wiki/Enabling-product-gallery-features-(zoom,-swipe,-lightbox)-in-3.0.0
 *
 * @return void
 */

function undercustoms_remove_woo_styles( $styles ) {
  // unset( $styles['woocommerce-general'] );
  unset( $styles['woocommerce-layout'] );
  // unset( $styles['woocommerce-smallscreen'] );
  return $styles;
}
add_filter( 'woocommerce_enqueue_styles', 'undercustoms_remove_woo_styles' );


// hide the page titles
add_filter( 'woocommerce_show_page_title', '__return_false' );


// replace the page titles
function undercustoms_woo_archive_title( $title ) {
  if ( is_shop() && $shop_id = wc_get_page_id( 'shop' ) ) {
    $title = get_the_title( $shop_id );
  }
  return $title;
}
add_filter( 'get_the_archive_title', 'undercustoms_woo_archive_title' );


/**
 * WooCommerce specific scripts & stylesheets.
 *
 * @return void
 */
function undercustoms_woocommerce_setup() {
	add_theme_support( 'woocommerce' );
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );
}
add_action( 'after_setup_theme', 'undercustoms_woocommerce_setup' );

/**
 * WooCommerce specific scripts & stylesheets.
 *
 * @return void
 */
function undercustoms_woocommerce_scripts() {
	wp_enqueue_style( 'undercustoms-woocommerce-style', get_template_directory_uri() . '/css/woocommerce.css' );

	$font_path   = WC()->plugin_url() . '/assets/fonts/';
	$inline_font = '@font-face {
			font-family: "star";
			src: url("' . $font_path . 'star.eot");
			src: url("' . $font_path . 'star.eot?#iefix") format("embedded-opentype"),
				url("' . $font_path . 'star.woff") format("woff"),
				url("' . $font_path . 'star.ttf") format("truetype"),
				url("' . $font_path . 'star.svg#star") format("svg");
			font-weight: normal;
			font-style: normal;
		}';

	wp_add_inline_style( 'undercustoms-woocommerce-style', $inline_font );
}
add_action( 'wp_enqueue_scripts', 'undercustoms_woocommerce_scripts' );

/**
 * Disable the default WooCommerce stylesheet.
 *
 * Removing the default WooCommerce stylesheet and enqueing your own will
 * protect you during WooCommerce core updates.
 *
 * @link https://docs.woocommerce.com/document/disable-the-default-stylesheet/
 */
// add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );

/**
 * Add 'woocommerce-active' class to the body tag.
 *
 * @param  array $classes CSS classes applied to the body tag.
 * @return array $classes modified to include 'woocommerce-active' class.
 */
function undercustoms_woocommerce_active_body_class( $classes ) {
	$classes[] = 'woocommerce-active';

	return $classes;
}
add_filter( 'body_class', 'undercustoms_woocommerce_active_body_class' );

/**
 * Products per page.
 *
 * @return integer number of products.
 */
function undercustoms_woocommerce_products_per_page() {
	return 20;
}
add_filter( 'loop_shop_per_page', 'undercustoms_woocommerce_products_per_page' );

/**
 * Product gallery thumnbail columns.
 *
 * @return integer number of columns.
 */
function undercustoms_woocommerce_thumbnail_columns() {
	return 3;
}
add_filter( 'woocommerce_product_thumbnails_columns', 'undercustoms_woocommerce_thumbnail_columns' );

/**
 * Default loop columns on product archives.
 *
 * @return integer products per row.
 */
function undercustoms_woocommerce_loop_columns() {
	return 3;
}
add_filter( 'loop_shop_columns', 'undercustoms_woocommerce_loop_columns' );

/**
 * Related Products Args.
 *
 * @param array $args related products args.
 * @return array $args related products args.
 */
function undercustoms_woocommerce_related_products_args( $args ) {
	$defaults = array(
		'posts_per_page' => 3,
		'columns'        => 3,
	);

	$args = wp_parse_args( $defaults, $args );

	return $args;
}
add_filter( 'woocommerce_output_related_products_args', 'undercustoms_woocommerce_related_products_args' );

if ( ! function_exists( 'undercustoms_woocommerce_product_columns_wrapper' ) ) {
	/**
	 * Product columns wrapper.
	 *
	 * @return  void
	 */
	function undercustoms_woocommerce_product_columns_wrapper() {
		$columns = undercustoms_woocommerce_loop_columns();
		echo '<div class="columns-' . absint( $columns ) . '">';
	}
}
add_action( 'woocommerce_before_shop_loop', 'undercustoms_woocommerce_product_columns_wrapper', 40 );

if ( ! function_exists( 'undercustoms_woocommerce_product_columns_wrapper_close' ) ) {
	/**
	 * Product columns wrapper close.
	 *
	 * @return  void
	 */
	function undercustoms_woocommerce_product_columns_wrapper_close() {
		echo '</div>';
	}
}
add_action( 'woocommerce_after_shop_loop', 'undercustoms_woocommerce_product_columns_wrapper_close', 40 );

/**
 * Remove default WooCommerce wrapper.
 */
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10 );
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10 );

if ( ! function_exists( 'undercustoms_woocommerce_wrapper_before' ) ) {
	/**
	 * Before Content.
	 *
	 * Wraps all WooCommerce content in wrappers which match the theme markup.
	 *
	 * @return void
	 */
	function undercustoms_woocommerce_wrapper_before() {
		?>
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">
        <div class="container py-5">
			<?php
	}
}
add_action( 'woocommerce_before_main_content', 'undercustoms_woocommerce_wrapper_before' );

if ( ! function_exists( 'undercustoms_woocommerce_wrapper_after' ) ) {
	/**
	 * After Content.
	 *
	 * Closes the wrapping divs.
	 *
	 * @return void
	 */
	function undercustoms_woocommerce_wrapper_after() {
			?>
        </div>
			</main><!-- #main -->
		</div><!-- #primary -->
		<?php
	}
}
add_action( 'woocommerce_after_main_content', 'undercustoms_woocommerce_wrapper_after' );

/**
 * Sample implementation of the WooCommerce Mini Cart.
 *
 * You can add the WooCommerce Mini Cart to header.php like so ...
 *
	<?php
		if ( function_exists( 'undercustoms_woocommerce_header_cart' ) ) {
			undercustoms_woocommerce_header_cart();
		}
	?>
 */

if ( ! function_exists( 'undercustoms_woocommerce_cart_link_fragment' ) ) {
	/**
	 * Cart Fragments.
	 *
	 * Ensure cart contents update when products are added to the cart via AJAX.
	 *
	 * @param array $fragments Fragments to refresh via AJAX.
	 * @return array Fragments to refresh via AJAX.
	 */
	function undercustoms_woocommerce_cart_link_fragment( $fragments ) {
		ob_start();
		undercustoms_woocommerce_cart_link();
		$fragments['a.cart-contents'] = ob_get_clean();

		return $fragments;
	}
}
add_filter( 'woocommerce_add_to_cart_fragments', 'undercustoms_woocommerce_cart_link_fragment' );

if ( ! function_exists( 'undercustoms_woocommerce_cart_link' ) ) {
	/**
	 * Cart Link.
	 *
	 * Displayed a link to the cart including the number of items present and the cart total.
	 *
	 * @return void
	 */
	function undercustoms_woocommerce_cart_link() {
		?>
		<a class="cart-contents btn btn-primary cart-btn" href="<?php echo esc_url( wc_get_cart_url() ); ?>" title="<?php esc_attr_e( 'View Cart', 'undercustoms' ); ?>"> <i class="fa fa-shopping-cart"></i>
			<?php
			$item_count_text = sprintf(
				/* translators: number of items in the mini cart. */
				_n( '%d item', '%d items', WC()->cart->get_cart_contents_count(), 'undercustoms' ),
				WC()->cart->get_cart_contents_count()
			);
			?>
			<span class="amount"><?php echo wp_kses_data( WC()->cart->get_cart_subtotal() ); ?></span>
      <span class="count">(<?php echo esc_html( $item_count_text ); ?>)</span>
		</a>
		<?php
	}
}

if ( ! function_exists( 'undercustoms_woocommerce_header_cart' ) ) {
	/**
	 * Display Header Cart.
	 *
	 * @return void
	 */
	function undercustoms_woocommerce_header_cart() {
		if ( is_cart() ) {
			$class = 'current-menu-item active';
		} else {
			$class = '';
		}
		?>
		<div id="site-header-cart" class="site-header-cart list-unstyled">
			<div class="<?php echo esc_attr( $class ); ?>">
				<?php undercustoms_woocommerce_cart_link(); ?>
			</div>
			<div class="mini-cart-widget">
				<?php
          // $instance = array(
          //   'title' => '',
          // );
          // the_widget( 'WC_Widget_Cart', $instance );
				?>
			</div>
		</div>
		<?php
	}
}

/**
 * Display Woocommerce sidebar
 *
 * @return void
 */
function undercustoms_register_woocommerce_sidebar() {
  register_sidebar( array(
    'name'          => 'WooCommerce Sidebar',
    'id'            => 'woocommerce-sidebar',
    'description'   => 'This sidebar will only appear on WooCommerce pages.',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>',
  ) );
}
add_action( 'widgets_init', 'undercustoms_register_woocommerce_sidebar' );
//replace sidebar
function undercustoms_replace_woocommerce_sidebar() {
  if ( is_woocommerce() ) {
    if ( is_active_sidebar( 'woocommerce-sidebar' ) ) {
      dynamic_sidebar( 'woocommerce-sidebar' );
    }
  }
}
add_action( 'woocommerce_sidebar', 'undercustoms_replace_woocommerce_sidebar' );


/**
 * TWEAKS
 */

// Change the Number of Displayed Related Products
function undercustoms_woo_related_posts_per_page( $args ) {
  $args['posts_per_page'] = 4;
  return $args;
}
add_filter( 'woocommerce_output_related_products_args', 'undercustoms_woo_related_posts_per_page' );


// Change the Product Gallery Thumbnail Columns
function undercustoms_woo_product_thumbnails_columns() {
  return 4;
}
add_action( 'woocommerce_product_thumbnails_columns', 'undercustoms_woo_product_thumbnails_columns' );


// Change the OnSale Badge Text
function undercustoms_woo_sale_flash() {
	return '<span class="onsale">' . esc_html__( 'Sale', 'text_domain' ) . '</span>';
}
add_filter( 'woocommerce_sale_flash', 'undercustoms_woo_sale_flash' );


//Change number or products per row
function undercustoms_woo_shop_columns( $columns ) {
	return 3;
}
add_filter( 'loop_shop_columns', 'undercustoms_woo_shop_columns' );


// Add correct body class for shop columns
// ENABLE THIS IF 4 PRODUCTS PER ROW
// function undercustoms_woo_shop_columns_body_class( $classes ) {
// 	if ( is_shop() || is_product_category() || is_product_tag() ) {
// 		$classes[] = 'columns-4';
// 	}
// 	return $classes;
// }
// add_filter( 'body_class', 'undercustoms_woo_shop_columns_body_class' );


// Change number of products that are displayed per page (shop page)
function undercustoms_woo_posts_per_page( $cols ) {
  return 20;
}
add_filter( 'loop_shop_per_page', 'undercustoms_woo_posts_per_page' );


// Change the Next & Previous Pagination Arrows
function undercustoms_woo_pagination_args( $args ) {
  $args['prev_text'] = '<i class="fa fa-angle-left"></i>';
  $args['next_text'] = '<i class="fa fa-angle-right"></i>';
  return $args;
}
add_filter( 'woocommerce_pagination_args', 'undercustoms_woo_pagination_args' );

