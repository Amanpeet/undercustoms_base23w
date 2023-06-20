<?php
/**
 * Template Name: Full-width (no sidebar)
 *
 * This is the template that displays full width page without sidebar
 *
 * @package undercustoms
 */

get_header(); ?>

<div id="content" class="site-content full-width bg-white">
  <main id="primary" class="content-area main-inner bg-white">

    <div class="titlemon">
      <div class="container">
        <div class="title text-centerx">
          <h3 class="entry-title animate-typing" data-type-speed="60"> <?php the_title(); ?> </h3>
        </div>
      </div>
    </div>

    <div class="container my-5">
      <div class="row">
        <div class="col-md-12 col-lg-10 ps-lg-5 mx-auto content-actualx">
          <?php
            while ( have_posts() ) : the_post();
              get_template_part( 'template-parts/content', 'page' );
              // If comments are open or we have at least one comment, load up the comment template.
              if ( comments_open() || get_comments_number() ) :
                comments_template();
              endif;
            endwhile; // End of the loop.
          ?>
        </div>

      </div>
    </div>
  </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
