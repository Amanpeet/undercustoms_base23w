<?php
/**
 * The template for displaying archive pages
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
        <div class="title text-center">
          <!-- <h3 class="page-title"> <?php the_title(); ?> </h3> -->
          <?php the_archive_title( '<h3 class="page-title">', '</h3>' ); ?>
          <?php the_archive_description( '<p class="page-description">', '</p>' ); ?>
        </div>
      </div>

      <div class="container">
        <div class="row py-5">

          <div class="col-md-8 col-lg-9 content-actualxxx">

            <?php if ( have_posts() ) : ?>
              <?php
              /* Start the Loop */
              while ( have_posts() ) :
                the_post();

                /*
                 * Include the Post-Type-specific template for the content.
                 * If you want to override this in a child theme, then include a file
                 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
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
	</div><!-- #primary -->

<?php
get_footer();
