<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package undercustoms
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

      <div class="titlemon">
        <div class="container">
          <div class="title text-centerxx">
            <h3 class="entry-title"> NOPE, Nothing here! </h3>
          </div>
        </div>
      </div>

      <section class="common-section bg-white">
        <div class="container">
          <div class="error-404 not-found text-center my-5">
            <header class="page-header">
              <h1 class="page-title">
                <strong>404</strong><br>
                <small><?php esc_html_e( 'Oops! That resource can&rsquo;t be found.', 'undercustoms' ); ?></small>
              </h1>
            </header><!-- .page-header -->
            <div class="page-content text-center sidebar">
              <p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try again or search below?', 'undercustoms' ); ?></p>
              <div class="mx-auto py-4" style="max-width: 480px;">
                <?php get_search_form(); ?>
              </div>
            </div><!-- .page-content -->
          </div><!-- .error-404 -->
        </div>
      </section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
