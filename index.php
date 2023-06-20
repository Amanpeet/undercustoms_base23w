<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
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
          <div class="title text-centerxx">
            <h3 class="entry-title animate-typing" data-type-speed="60"> Latest Posts from our Blog </h3>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row py-5">
          <!-- <div class="col-md-2 col-lg-2 sidebar">
            <?php //get_sidebar(); ?>
          </div> -->
          <div class="col-md col-lg-10 content-actualxxx mx-auto">

            <?php
            if ( have_posts() ) :

              if ( is_home() && ! is_front_page() ) :
                ?>
                <header>
                  <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
                </header>
                <?php
              endif;

              /* Start the Loop */
              while ( have_posts() ) :
                the_post();
                /*
                 * Include the Post-Type-specific template for the content.
                 * If you want to override this in a child theme, then include a file
                 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
                 */
                get_template_part( 'template-parts/content', 'blogpost' );
                // get_template_part( 'template-parts/content', get_post_type() );

              endwhile;
              the_posts_navigation()
              ;
            else :

              get_template_part( 'template-parts/content', 'none' );

            endif;
            ?>

          </div>



        </div>
      </div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
