<?php

/**
 * Template Name: Services Single Page
 *
 * This is the template that displays full width page without sidebar
 *
 * @package undercustoms
 */
get_header();
?>

<div id="primary" class="content-area">
  <main id="main" class="site-main">

    <div class="titlemon">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <div class="title text-start">
              <h3 class="entry-title animate-typing" data-type-speed="60"> <?php the_title(); ?> </h3>
            </div>
          </div>
          <div class="col-md">
            <div class="text-end pt-3">
              <a href="<?php echo site_url(); ?>/services/"> <i class="fa fa-arrow-left"></i> Back to Services </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <section class="common-section service-section bg-white">
      <div class="container py-4">
        <div class="row">
          <div class="col-md-3 col-lg-2">
            <h4 class="title-faden"> <i class="fa fa-angle-double-right"></i> </h4>
          </div>
          <div class="col-md ps-md-5">

            <?php if ( has_post_thumbnail() ) { ?>
              <img class="img-thumbnail w-75 mb-5" src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="">
            <?php } ?>

            <div class="bigp">
              <?php
                // TO SHOW THE PAGE CONTENTS
                while ( have_posts() ) : the_post();
                  the_content();
                endwhile;
                wp_reset_query();
              ?>
            </div>

          </div>
        </div>
      </div>
    </section>

    <!-- DISPLAY CALLTO SECTION -->
    <?php get_template_part('template-parts/content', 'callto-section'); ?>

  </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
