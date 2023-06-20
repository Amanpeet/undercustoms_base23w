<?php
/**
 * Template part for displaying callto contact section in pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package undercustoms
 */
?>

<section class="common-section services-section">
  <div class="parallax-box">
    <img class="parallax-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/contact-bg.jpg">
  </div>
  <div class="container py-5">
    <div class="section-title text-whitex mb-4 text-white">
      <h2 class="font-light">Get Quote Now!</h2>
      <p class="bigp m-0 mb-4">Schedule a time to talk with us now, or fill up <br> the form below to get Quote from us. </p>
      <a id="callto_modal" class="btn btn-primary" href="<?php echo site_url(); ?>/contact/"> <i class="fa fa-paper-plane"></i> Get Quote </a>
    </div>
  </div>
</section>

