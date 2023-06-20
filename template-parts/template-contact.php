<?php
/**
 * Template Name: Contact Us
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 * @package undercustoms */
get_header();
?>

<div id="primary" class="content-area">
  <main id="main" class="site-main">

    <div class="titlemon">
      <div class="container">
        <div class="title text-centerxx">
          <!-- <h3 class="entry-title"> <?php //the_title(); ?> </h3> -->
          <h3 class="entry-title animate-typing" data-type-speed="60"> <strong>Get in Touch</strong> with us </h3>
        </div>
      </div>
    </div>

    <section class="common-section py-5">
      <div class="container">
        <div class="row g-lg-5">

          <div class="col-md-6">
            <div class="card card-body h-100">
              <h5> <strong>Reach us</strong> </h5>
              <p>We realize the value of your time. Please email us or contact us via the following methods below to get a guaranteed reply from us.</p>

              <h5 class="card-title"> <i class="fa fa-phone"></i> <strong>Phone</strong></h5>
              <?php $phone_mod = ( !empty(get_theme_mod('undercustoms_contact_info_phone')) ) ? get_theme_mod('undercustoms_contact_info_phone') : 'Set Phone in Customize' ; ?>
              <p class="card-text mb-4"> <a href="tel:<?php echo $phone_mod; ?>"><?php echo $phone_mod; ?></a> </p>

              <h5 class="card-title"> <i class="fa fa-envelope"></i> <strong>Email</strong></h5>
              <?php $email_mod = ( !empty(get_theme_mod('undercustoms_contact_info_email')) ) ? get_theme_mod('undercustoms_contact_info_email') : 'Set Email in Customize' ; ?>
              <p class="card-text"> <a href="mailto:<?php echo $email_mod; ?>"><?php echo $email_mod; ?></a> </p>

              <h5 class="card-title"> <i class="fa fa-map-marker"></i> <strong>Address</strong></h5>
              <?php $address_mod = ( !empty(get_theme_mod('undercustoms_contact_info_address')) ) ? get_theme_mod('undercustoms_contact_info_address') : 'Set Address in Customize' ; ?>
              <p class="card-text"> <?php echo $address_mod; ?> </p>

            </div>
          </div>

          <div class="col-md-6">
            <div class="card card-body h-100">
              <h5> <strong>Write to us</strong> </h5>
              <?php $contact_form_mod = ( !empty(get_theme_mod('undercustoms_contact_info_contact_form')) ) ? get_theme_mod('undercustoms_contact_info_contact_form') : 'Set  Shortcode in Customize' ; ?>
              <?php echo do_shortcode($contact_form_mod); ?>
              <?php //echo do_shortcode('[contact-form-7 id="5" title="Contact form 1"]'); ?>
            </div>
          </div>

        </div>
      </div>
    </section>

    <section id="maps" class="common-section pt-0">
      <div class="container">
        <div class="map mb-5">
          <h5> <i class="fa fa-map-marker"></i> <strong>Location</strong> </h5>
          <?php $contact_map = ( !empty(get_theme_mod('undercustoms_contact_info_map_iframe')) ) ? get_theme_mod('undercustoms_contact_info_map_iframe') : 'Set Address in theme options' ; ?>
          <div class="map-actual">
            <?php echo $contact_map; ?>
          </div>
          <!-- <iframe src="xxx" frameborder="0" style="width: 100%; height: 400px; border:1px solid #ccc; display:block;" allowfullscreen></iframe> -->
        </div>
      </div>
    </section>


  </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();