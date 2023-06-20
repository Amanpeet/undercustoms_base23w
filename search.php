<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package undercustoms
 */

get_header();
?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main">

      <div class="titlemon">
        <div class="container">
          <div class="title text-centerx">
            <h3 class="entry-title animate-typing" data-type-speed="60"> Search Results </h3>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row py-5">

          <div class="col-md-8 col-lg-9 content-actualxxx">

            <?php if ( have_posts() ) : ?>

              <header class="page-header">
                <h1 class="page-title">
                  <?php
                  /* translators: %s: search query. */
                  printf( esc_html__( 'Search Results for: %s', 'undercustoms' ), '<span>' . get_search_query() . '</span>' );
                  ?>
                </h1>
              </header><!-- .page-header -->

              <?php
              /* Start the Loop */
              while ( have_posts() ) :
                the_post();
                /**
                 * Run the loop for the search to output the results.
                 * If you want to overload this in a child theme then include a file
                 * called content-search.php and that will be used instead.
                 */
                get_template_part( 'template-parts/content', 'blogpost' );

              endwhile;

              the_posts_navigation();

            else :

              get_template_part( 'template-parts/content', 'none' );

            endif;
            ?>

          </div>

          <div class="col-md-4 col-lg-3 sidebar">
            <!-- sidebar.php heavily modified -->
            <?php get_sidebar(); ?>
          </div>

        </div>
      </div>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
