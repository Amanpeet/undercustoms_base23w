<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package undercustoms
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

      <div class="titlemon">
        <div class="container">
          <div class="title text-center">
            <h3 class="page-title animate-typing" data-type-speed="60"> <?php woocommerce_page_title(); ?> </h3>
          </div>
        </div>
      </div>

      <div class="container woocustoms-single">
        <div class="row py-5">
          <!-- <div class="col-md-3 col-lg-3 sidebar pe-lg-5">
            <?php //get_sidebar(); ?>
          </div> -->
          <div class="col-md col-lg woo-content">

            <?php woocommerce_content(); ?>

          </div>

        </div>
      </div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
