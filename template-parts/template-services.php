<?php

/**
 * Template Name: Services Page
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
        <div class="title text-centerx">
          <!-- <h3 class="entry-title"> <?php the_title(); ?> </h3> -->
          <h3 class="entry-title animate-typing" data-type-speed="60"> What <strong>Services</strong> do we offer </h3>
        </div>
      </div>
    </div>

    <section class="common-section about-section bg-white">
      <div class="container pt-4">
        <div class="row">
          <div class="col-md-3 pe-md-5">
            <h4 class="title-faden"> <i class="fa fa-angle-double-right"></i> Quality Services </h4>
          </div>
          <div class="col-md">
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

    <section class="common-section bg-light border-top">
      <div class="container py-4">
        <!-- <div class="section-title text-center mb-4">
          <h6 class="text-color"> Services </h6>
          <h3><strong> Our Main Focus </strong></h3>
          <span class="line"></span>
        </div> -->

        <!-- Display Services -->
        <?php get_template_part('template-parts/content', 'services-section'); ?>
      </div>
    </section>


    <!-- DISPLAY CALLTO SECTION -->
    <?php get_template_part('template-parts/content', 'callto-section'); ?>

  </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
