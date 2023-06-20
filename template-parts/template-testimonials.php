<?php
/**
 * Template Name: Testimonials Page
 *
 * This is the template that displays full width page without sidebar
 *
 * @package undercustoms
 */

get_header(); ?>

<div id="content" class="site-content full-width bg-light">
  <main id="primary" class="content-area main-inner bg-light">

    <div class="titlemon">
      <div class="container">
        <div class="title text-center">
          <h3 class="entry-title animate-typing" data-type-speed="60"> <?php the_title(); ?> </h3>
        </div>
      </div>
    </div>

    <div class="container my-5">

      <div class="row">
        <div class="col-md-12 col-lg-10 mx-auto content-actualx">

          <div class="mb-5 bigp">
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

          <!-- custom post loop -->
          <?php
            $args = array(
              'posts_per_page' => 99,
              'post_type'      => 'site_testimonials',
              'orderby'        => 'date',
              'order'          => 'DESC',
              );
          ?>
          <?php query_posts($args); ?>
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="card blogpost-item mb-5 shadow-card">
              <div class="row no-gutters">
                <div class="col-md-2">
                  <a href="<?php the_permalink() ?>">
                    <?php if ( has_post_thumbnail() ) { ?>
                      <img class="card-img cover-img" src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="">
                    <?php } else { ?>
                      <img class="card-img cover-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/user.jpg" alt="" />
                    <?php } ?>
                  </a>
                </div>
                <div class="col-md ps-lg-5">
                  <div class="card-body">
                    <h3 class="jesse-faden"> <i class="fa fa-quote-left"></i> </h3>
                    <div class="card-text ps-4 bigp">
                      <?php echo the_content(); ?>
                    </div>
                    <h6 class="card-title ps-4"><a href="<?php the_permalink() ?>" class="text-dark"><strong><?php the_title(); ?></strong></a></h6>
                  </div>
                </div>
              </div>
            </div>
          <?php endwhile; endif; ?>
        </div>

      </div>
    </div>

    <!-- DISPLAY CALLTO SECTION -->
    <?php get_template_part('template-parts/content', 'callto-section'); ?>

  </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
