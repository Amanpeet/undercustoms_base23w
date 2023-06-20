<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package undercustoms
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

      <div class="titlemon single-modexxx">
        <div class="container">
          <div class="title text-center">
            <h6 class="font-strong"><?php the_category( ', ' ); ?></h6>
            <h3 class="entry-title animate-typing" data-type-speed="60"> <?php the_title(); ?> </h3>
          </div>
        </div>
      </div>

      <div class="container py-5">

        <!-- <div class="single-img">
          <img src="<?php // echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="">
        </div> -->

        <div class="row py-5">
          <div class="col-md-8 col-lg-9 mx-auto single-content">

            <?php
            while ( have_posts() ) :
              the_post();

              ?>
              <div class="card card-body shadow-card">

                <?php if ( has_post_thumbnail() ) { ?>
                  <img class="w-100 mb-4" src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="">
                <?php } ?>

                <?php
                // get_template_part( 'template-parts/content', get_post_type() );
                get_template_part( 'template-parts/content', 'singlepost' );
                // the_content();
                ?>
              </div>

              <div class="post-nav">
                <?php the_post_navigation(); ?>
              </div>

              <?php if (get_post_type($post) === 'post') { ?>
                <div class="post-extras mt-5">
                  <h4><strong>Related Posts</strong></h4>
                  <?php get_template_part( 'template-parts/content', 'related' ); ?>
                </div>
              <?php } ?>

              <div class="post-comments mt-4">
                <?php
                // If comments are open or we have at least one comment, load up the comment template.
                // if ( comments_open() || get_comments_number() ) :
                //   comments_template();
                // endif;
                ?>
              </div>
              <?php

            endwhile; // End of the loop.
            ?>

          </div>

          <div class="col-md-4 col-lg-3 sidebar d-none">
            <!-- sidebar.php heavily modified -->
            <?php get_sidebar(); ?>
          </div>

        </div>
      </div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
