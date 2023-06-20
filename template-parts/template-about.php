<?php
/**
 * Template Name: About Page
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
      <div class="title">
        <div class="container">
          <!-- <h3 class="entry-title"> <?php the_title(); ?> </h3> -->
          <h3 class="entry-title animate-typing" data-type-speed="60"> Get to know more <strong>About us</strong> </h3>
        </div>
      </div>
    </div>

    <section id="vision" class="common-section about-section bg-white">
      <div class="container py-4">
        <div class="row">
          <div class="col-md-3 pe-md-5">
            <!-- <img class="img-thumbnail w-100" src="<?php echo get_stylesheet_directory_uri(); ?>/img/glocal.jpg" alt=""> -->
            <h4 class="title-faden">Our Story</h4>
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
        <div class="section-title text-center mb-4">
          <h6 class="text-color"> Services </h6>
          <h3><strong> Our Main Services </strong></h3>
          <!-- <span class="line"></span> -->
        </div>
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
