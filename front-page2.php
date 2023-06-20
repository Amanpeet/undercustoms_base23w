<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package undercustoms
 */

get_header();
?>

<div id="frontpage" class="frontpage-area">

  <section id="hero" class="hero-section border-bottom">
    <div class="hero-slider">
      <div id="carouselHeroSlider" class="carousel slide carousel-fade carousel-dark" data-bs-ride="carousel" data-bs-interval="6000">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselHeroSlider" data-bs-slide-to="0" class="active"></button>
          <button type="button" data-bs-target="#carouselHeroSlider" data-bs-slide-to="1"></button>
          <button type="button" data-bs-target="#carouselHeroSlider" data-bs-slide-to="2"></button>
        </div>
        <div class="carousel-inner">

          <div class="carousel-item active">
            <img src="<?php echo get_template_directory_uri() . '/img/slide1.jpg'; ?>" alt="">
            <div class="carousel-caption">
              <div class="container">
                <div class="caption-box">
                  <h4> Business Consulting </h4>
                  <h2> Making Your Business Idea Come True </h2>
                  <p class="mx-0"> Facilitating client learning—that is, teaching clients how to resolve similar problems in the future. </p>
                  <a href="#" class="btn popModal">Get Quote</a>
                </div>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <img src="<?php echo get_template_directory_uri() . '/img/slide2.jpg'; ?>" alt="">
            <div class="carousel-caption">
              <div class="container">
                <div class="caption-box">
                  <h4> Business Consulting </h4>
                  <h2> Making Your Business Idea Come True </h2>
                  <p class="mx-0"> Facilitating client learning—that is, teaching clients how to resolve similar problems in the future. </p>
                  <a href="#" class="btn popModal">Get Quote</a>
                </div>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <img src="<?php echo get_template_directory_uri() . '/img/slide3.jpg'; ?>" alt="">
            <div class="carousel-caption">
              <div class="container">
                <div class="caption-box">
                  <h4> Consulting Services </h4>
                  <h2> Where creativity meets productivity and passion. </h2>
                  <p class="mx-0"> Facilitating client learning—that is, teaching clients how to resolve similar problems in the future. </p>
                  <a href="#" class="btn popModal">Get Quote</a>
                </div>
              </div>
            </div>
          </div>

          <!-- <div class="carousel-item">
            <img src="<?php //echo (!empty(get_theme_mod('undercustoms_slider2_image'))) ? get_theme_mod('undercustoms_slider2_image') : get_template_directory_uri() . '/img/default.jpg'; ?>" alt="">
            <div class="carousel-caption">
              <div class="container">
                <div class="caption-box">
                  <?php //echo get_theme_mod('undercustoms_slider2_caption'); ?>
                </div>
              </div>
            </div>
          </div> -->

        </div>
        <div class="carousel-controls">
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselHeroSlider" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselHeroSlider" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>

        <div class="carousel-overlay">
          <div class="container">
            <div class="homepage-form" data-aos="fade-up">
              <div class="card card-body border-0 p-4 pb-0">
                <h4 class="text-center text-dark mb-4"><strong>Get Expert Guidance</strong></h4>
                <?php echo do_shortcode('[contact-form-7 id="93" title="Homepage form 2"]'); ?>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <section class="common-section pt-0 margin-minus">
    <div class="container pb-4">
      <!-- <div class="section-title text-center mb-4">
        <h6 class="text-color"> Services </h6>
        <h3><strong> Our Main Focus </strong></h3>
        <span class="line"></span>
      </div> -->
      <div class="row g-4 justify-content-center" data-aos="fade-up">

        <div class="col-md-4 col-lg">
          <div class="card feature-card shadow-card p-3 h-100">
            <div class="card-icon icon-bg text-center p-lg-4">
              <i class="fa fa-award fa-3x text-color"></i>
            </div>
            <div class="card-body">
              <h5 class="card-title font-strong"> Enterprise Mobility </h5>
              <p class="card-text">Today is a technological world where people gives a click on their cell phone instead of visiting.</p>
              <!-- <a href="<?php echo site_url(); ?>/services/" class="btn btn-dark btn-sm">Read More</a> -->
            </div>
          </div>
        </div>

        <div class="col-md-4 col-lg">
          <div class="card feature-card shadow-card p-3 h-100">
            <div class="card-icon icon-bg text-center p-lg-4">
              <i class="fa fa-bullhorn fa-3x text-color"></i>
            </div>
            <div class="card-body">
              <h5 class="card-title font-strong"> Web portal </h5>
              <p class="card-text">Responsive Web Design (RWD) is a device-independent UI (user interface) design philosophy. </p>
              <!-- <a href="<?php echo site_url(); ?>/services/" class="btn btn-dark btn-sm">Read More</a> -->
            </div>
          </div>
        </div>

        <div class="col-md-4 col-lg">
          <div class="card feature-card shadow-card p-3 h-100">
            <div class="card-icon icon-bg text-center p-lg-4">
              <i class="fa fa-funnel-dollar fa-3x text-color"></i>
            </div>
            <div class="card-body">
              <h5 class="card-title font-strong"> Siebel CRM Consulting </h5>
              <p class="card-text">Our experts have experience working with Siebel CRM from it's very earliest iterations through.  </p>
              <!-- <a href="<?php echo site_url(); ?>/services/" class="btn btn-dark btn-sm">Read More</a> -->
            </div>
          </div>
        </div>

        <div class="col-md-4 col-lg">
          <div class="card feature-card shadow-card p-3 h-100">
            <div class="card-icon icon-bg text-center p-lg-4">
              <i class="fa fa-file-alt fa-3x text-color"></i>
            </div>
            <div class="card-body">
              <h5 class="card-title font-strong"> Microsoft Dynamics </h5>
              <p class="card-text">Microsoft Dynamics is a line of enterprise resource planning and customer relationship management. </p>
              <!-- <a href="<?php echo site_url(); ?>/services/" class="btn btn-dark btn-sm">Read More</a> -->
            </div>
          </div>
        </div>

        <div class="col-md-4 col-lg">
          <div class="card feature-card shadow-card p-3 h-100">
            <div class="card-icon icon-bg text-center p-lg-4">
              <i class="fa fa-key fa-3x text-color"></i>
            </div>
            <div class="card-body">
              <h5 class="card-title font-strong"> Ecommerce & Storefronts </h5>
              <p class="card-text">We have been assisting clients, that are serious about increasing profits and decreasing costs. </p>
              <!-- <a href="<?php echo site_url(); ?>/services/" class="btn btn-dark btn-sm">Read More</a> -->
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <section class="common-section bg-light border-top">
    <div class="container pb-4">
      <div class="row" data-aos="fade-up">
        <div class="col-md-4 col-lg-5">
          <img class="img-thumbnail w-100" src="<?php echo get_stylesheet_directory_uri(); ?>/img/about.jpg" alt="">
        </div>

        <div class="col-md col-lg ps-lg-5">
          <div class="section-title pt-3">
            <h6 class="text-color"> WHO WE ARE  </h6>
            <h3> Professional and Dedicated Consulting Experts. </h3>
            <span class="line"></span>
          </div>
          <p class="bigp">Undercustoms was incorporated with a vision of providing what should have been a primary offering by most consulting firms, Quality resources / deliverables, the attribute which has been lost by many in a race towards profitability & headcounts. We still retain it. Undercustoms has been assisting clients big or small, that are serious about increasing profits and decreasing costs using practical technology solutions suiting client requisites.  </p>
          <ul class="list-unstyled bigp">
            <li> <i class="fa fa-check-circle text-success"></i> Beguiled and demoralized. </li>
            <li> <i class="fa fa-check-circle text-success"></i> Handle all trouble of work. </li>
            <li> <i class="fa fa-check-circle text-success"></i> Dedicated consulting solutions. </li>
          </ul>
          <div class="pt-2 mb-4">
            <a class="btn btn-primary" href="<?php echo site_url(); ?>/about/"> Know More </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="common-section bg-ghost border-top">
    <div class="container py-5">
      <div class="row" data-aos="fade-up">
        <div class="col-md-5 col-lg-6" data-aos="fade-right">
          <!-- <img class="img-thumbnail w-100" src="<?php echo get_stylesheet_directory_uri(); ?>/img/about.jpg" alt=""> -->
          <div class="row g-4 justify-content-center">

            <div class="col-md-6 col-lg-6">
              <div class="card feature-card shadow-card p-3 h-100">
                <div class="card-icon icon-bg text-center p-lg-4">
                  <i class="fa fa-user-tie fa-3x text-color"></i>
                </div>
                <div class="card-body">
                  <h5 class="card-title font-strong"> Choosing the right Accountant  </h5>
                  <p class="card-text text-muted">The platform is managed by accounting professionals having required educational qualification & vast experience.  </p>
                </div>
              </div>
            </div>

            <div class="col-md-6 col-lg-6">
              <div class="card feature-card shadow-card p-3 h-100">
                <div class="card-icon icon-bg text-center p-lg-4">
                  <i class="fa fa-file-alt fa-3x text-color"></i>
                </div>
                <div class="card-body">
                  <h5 class="card-title font-strong"> Retention of All Original Documents  </h5>
                  <p class="card-text text-muted"> Original documents are kept at enterprise office while scanned copies are uploaded on the platform. </p>
                </div>
              </div>
            </div>

            <div class="col-md-6 col-lg-6">
              <div class="card feature-card shadow-card p-3 h-100">
                <div class="card-icon icon-bg text-center p-lg-4">
                  <i class="fa fa-funnel-dollar fa-3x text-color"></i>
                </div>
                <div class="card-body">
                  <h5 class="card-title font-strong"> Updation and Reporting of Accounts  </h5>
                  <p class="card-text text-muted">The platform provides 24x7 online access to the books of accounts on computers or on smartphones.  </p>
                </div>
              </div>
            </div>

            <div class="col-md-6 col-lg-6">
              <div class="card feature-card shadow-card p-3 h-100">
                <div class="card-icon icon-bg text-center p-lg-4">
                  <i class="fa fa-laptop fa-3x text-color"></i>
                </div>
                <div class="card-body">
                  <h5 class="card-title font-strong"> Support Multiple Accounting Softwares </h5>
                  <p class="card-text text-muted">Work using the popular accounting software applications like Tally, Busy, Marg and others. </p>
                </div>
              </div>
            </div>

          </div>
        </div>

        <div class="col-md col-lg ps-lg-5" data-aos="fade-left">
          <div class="section-title pt-5 pt-lg-4">
            <h6 class="text-color"> WHO WE ARE </h6>
            <h3> Empowering Business with Sound Accounting Virtually </h3>
            <span class="line"></span>
          </div>
          <p class="bigpx">Undercustoms is a platform on a digital mode run by a group of professionals to provide end-to-end accounting solutions to Business Enterprises across the globe for maintaining books of accounts.</p>
          <p class="bigpx"> For any business enterprise, maintenance of books of accounts on real time basis is of a primary requirement to determine the efficiency and effectiveness of the business. Business Enterprise who want to get to the next level need to have a firm grasp of their finances and the capacity to plan for growth. Besides the profitability, all statutory compliances as and when required are intimated to enterprises accordingly.  </p>
          <ul class="list-unstyled bigpx">
            <li> <i class="fa fa-check-circle text-success"></i> Accuracy and Efficiency. </li>
            <li> <i class="fa fa-check-circle text-success"></i> Ensures Data Security. </li>
            <li> <i class="fa fa-check-circle text-success"></i> Cost Efficient. </li>
          </ul>
          <div class="pt-2">
            <a class="btn btn-dark" href="<?php echo site_url(); ?>/about-us/"> Learn More </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="common-section bg-white border-top">
    <div class="container py-5">
      <div class="row" data-aos="fade-up">
        <div class="col-md col-lg ps-lg-5">
          <div class="section-title pt-lg-4">
            <h6 class="text-color"> What is </h6>
            <h3> Virtual Accounting </h3>
            <span class="line"></span>
          </div>
          <p class="bigpx"> A provision of accounting services to a business enterprise through the means of IT enabled devices is referred to as Virtual Accounting. As against traditional hiring of an Accounting Staff in your own office, professional accounting and bookkeeping requirements can be mitigated at a much-reduced cost through the Virtual Accounting system.  </p>
          <ul class="list-unstyled bigpx">
            <li> <i class="fa fa-check-circle text-success"></i> Accounts Payable and Receivable Management </li>
            <li> <i class="fa fa-check-circle text-success"></i> Cash Flow Handling and Budgeting </li>
            <li> <i class="fa fa-check-circle text-success"></i> Financial Ratio Calculation and Evaluation </li>
            <li> <i class="fa fa-check-circle text-success"></i> Banks and Credit Card Reconciliation </li>
            <li> <i class="fa fa-check-circle text-success"></i> and so much more... </li>
          </ul>
          <div class="pt-2 mb-4">
            <a class="btn btn-primary" href="<?php echo site_url(); ?>/virtual-accounting/"> Know More </a>
          </div>
        </div>
        <div class="col-md-4 col-lg-5">
          <img class="img-thumbnail w-100" src="<?php echo get_stylesheet_directory_uri(); ?>/img/about.jpg" alt="">
        </div>
      </div>
    </div>
  </section>

  <section class="common-section bg-light border-top" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/section-bg1.jpg'); background-size: cover; background-position: center right;">
    <div class="container py-5">
      <div class="row">
        <div class="col-md-4 col-lg-5">
          <!-- <img class="img-thumbnail w-100" src="<?php echo get_stylesheet_directory_uri(); ?>/img/about.jpg" alt=""> -->
        </div>
        <div class="col-md col-lg ps-lg-5" data-aos="fade-left">
          <div class="section-title pt-4">
            <h6 class="text-color"> Why Undercustoms </h6>
            <h3> An Enabler. <br> A Changemaker. <br> A Transformation Leader. </h3>
            <span class="line"></span>
          </div>
          <p class="bigpx"> At Undercustoms, we provide reliable and professional virtual accounting  and tax preparation services  to businesses through  CPA's, CA's and experienced accountants globally. We help our clients navigate from where they are to where they aspire to be through our always-on learning agenda in the form of client stories and blogs covering the latest industry trends.  </p>
          <p>Based on a study done by us having association with Business Enterprise over 35 years, Undercustoms address the common problems faced by our business partners. </p>
          <div class="pt-2 mb-4">
            <a class="btn btn-dark" href="<?php echo site_url(); ?>/why-choose-us/"> Read More </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="common-section bg-white border-top" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/bg-light.jpg'); background-size: cover;">
    <div class="container py-0">
      <div class="row g-5 pt-4">

        <div class="col-md-5 col-lg-5 pt-5 pe-lg-5">
          <div class="section-title pt-lg-5 mt-lg-5">
            <h6 class="text-color"> WHAT WE DO </h6>
            <h3><strong> Many Years of Experience in Consulting Services. </strong></h3>
            <span class="line"></span>
            <p> Unlike traditional consulting firms, Undercustoms has dissolved seamlessly within our clients culture, we have become an integral part of their process. We have not lost a single client in the last years. </p>
            <a class="btn btn-primary" href="<?php echo site_url(); ?>/services/"> View More </a>
          </div>
        </div>

        <div class="col-md-7 col-lg-7 ps-lg-5">
          <div class="row">
            <div class="col-md-6">

              <div class="card shadow-card p-4 mb-4">
                <div class="card-icon px-4">
                  <i class="fa fa-star fa-3x text-color"></i>
                </div>
                <div class="card-body">
                  <h4 class="card-title"> Enterprise Mobility </h4>
                  <p class="card-text">Undercustoms has been assisting clients big or small, that are serious about increasing profits.  </p>
                </div>
              </div>

              <div class="card shadow-card p-4 mb-4">
                <div class="card-icon px-4">
                  <i class="fa fa-star fa-3x text-color"></i>
                </div>
                <div class="card-body">
                  <h4 class="card-title"> Enterprise / Web Portal </h4>
                  <p class="card-text"> Undercustoms has been assisting clients big or small, that are serious about decreasing costs.  </p>
                </div>
              </div>

            </div>
            <div class="col-md-6 pt-5">

              <div class="card shadow-card p-4 mb-4 mt-lg-5">
                <div class="card-icon px-4">
                  <i class="fa fa-star fa-3x text-color"></i>
                </div>
                <div class="card-body">
                  <h4 class="card-title"> Microsoft Dynamics </h4>
                  <p class="card-text">Undercustoms has been assisting clients big or small, that are serious about decreasing costs.  </p>
                </div>
              </div>

              <div class="card shadow-card p-4 mb-4">
                <div class="card-icon px-4">
                  <i class="fa fa-star fa-3x text-color"></i>
                </div>
                <div class="card-body">
                  <h4 class="card-title"> Ecommerce & Storefronts </h4>
                  <p class="card-text"> Undercustoms has been assisting clients big or small, that are serious about decreasing costs.  </p>
                </div>
              </div>

            </div>
          </div>

        </div>
      </div>
    </div>
  </section>

  <section class="common-section bg-white border-top">
    <div class="container py-4">
      <div class="section-title text-center mb-0">
        <h6 class="text-color"> Pricing </h6>
        <h3> Packages for All Enterprises </h3>
        <span class="line"></span>
      </div>
      <div class="row g-lg-5 project-box pt-4">

        <div class="col-md-4 mb-4" data-aos="fade-up">
          <div class="card shadow-cardx p-4 h-100" style="background-color: #e4eced;">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/star-silver.png" class="mx-auto" alt="" width="100">
            <div class="card-body text-center">
              <h4 class="card-title"> SILVER </h4>
              <h5>Rs. 24,000/- <br> <small>per annum</small> </h5>
              <p class="text-muted"> Turnover upto <br> Rs. 50 lacs per annum </p>
              <a href="#" target="_blank" class="btn btn-primary"> Know More </a>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-4" data-aos="fade-up">
          <div class="card shadow-cardx p-4 h-100" style="background-color: #f6e97d;">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/star-gold.png" class="mx-auto" alt="" width="100">
            <div class="card-body text-center">
              <h4 class="card-title"> GOLD </h4>
              <h5> Rs. 40,000/- <br> <small>per annum</small> </h5>
              <p class="text-muted"> Turnover upto <br> Rs. 50 lacs to Rs. 200 lacs per annum </p>
              <a href="#" target="_blank" class="btn btn-primary"> Know More </a>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-4" data-aos="fade-up">
          <div class="card shadow-cardx p-4 h-100" style="background-color: #fcd9d2;">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/star-platinum.png" class="mx-auto" alt="" width="100">
            <div class="card-body text-center">
              <h4 class="card-title"> PLATINUM </h4>
              <h5> Rs. 75,000/- <br> <small>per annum</small> </h5>
              <p class="text-muted"> Turnover upto <br> Above Rs. 200 lacs per annum </p>
              <a href="#" target="_blank" class="btn btn-primary"> Know More </a>
            </div>
          </div>
        </div>

      </div>
      <p class="text-center text-muted mt-4">
        <sup>*</sup> plus taxes as applicable.
      </p>
    </div>
  </section>

  <section class="common-section bg-ghost border-top">
    <div class="container py-5">
      <div class="section-title text-center mb-4">
        <h6 class="text-color"> WORK PROCESS </h6>
        <h3> How Undercustoms works? </h3>
        <span class="line"></span>
      </div>
      <div class="row g-4 g-lg-5x justify-content-center" data-aos="fade-up">

        <div class="col-md-4 col-lg-3">
          <div class="cardx shadow-cardx p-4x text-center h-100">
            <div class="card-icon px-4 iconmon">
              <i class="fa fa-handshake fa-3x text-color"></i>
            </div>
            <div class="card-body">
              <h5 class="card-title mb-3"><span class="d-block opacity-25">1.</span> Make Discovery Call </h5>
              <p class="card-text text-muted">Meet with our sales consultant to determine our customized solutions to your problems.   </p>
            </div>
          </div>
        </div>

        <div class="col-md-4 col-lg-3">
          <div class="cardx shadow-cardx p-4x text-center h-100">
            <div class="card-icon px-4 iconmon">
              <i class="fa fa-book fa-3x text-color"></i>
            </div>
            <div class="card-body">
              <h5 class="card-title mb-3"><span class="d-block opacity-25">2.</span> Prepare Documentation </h5>
              <p class="card-text text-muted"> Post setting initial goals, we follow strong documentation involving drafts.   </p>
            </div>
          </div>
        </div>

        <div class="col-md-4 col-lg-3">
          <div class="cardx shadow-cardx p-4x text-center h-100">
            <div class="card-icon px-4 iconmon">
              <i class="fa fa-user-tie fa-3x text-color"></i>
            </div>
            <div class="card-body">
              <h5 class="card-title mb-3"><span class="d-block opacity-25">3.</span> Choosing the Plan </h5>
              <p class="card-text text-muted"> We select the best suitable accountant for the Business Enterprise.  </p>
            </div>
          </div>
        </div>

        <div class="col-md-4 col-lg-3">
          <div class="cardx shadow-cardx p-4x text-center h-100">
            <div class="card-icon px-4 iconmon">
              <i class="fa fa-file-contract fa-3x text-color"></i>
            </div>
            <div class="card-body">
              <h5 class="card-title mb-3"><span class="d-block opacity-25">4.</span> Enjoy Profits </h5>
              <p class="card-text text-muted">We have developed a web-based and mobile application based IT enabled platform. </p>
            </div>
          </div>
        </div>

      </div>
      <!-- <div class="text-center mt-5">
        <a class="btn btn-primary" href="<?php echo site_url(); ?>/services/"> Know More </a>
      </div> -->
    </div>
  </section>

  <section class="common-section bg-light border-top">
    <div class="container py-5">
      <div class="section-title text-center mb-4">
        <h6 class="text-color"> FAQ </h6>
        <h3> Frequently Asked Questions </h3>
        <span class="line"></span>
      </div>
      <div class="row" data-aos="fade-up">
        <div class="col-lg-6">

          <div class="accordion faq-alt mb-4 mx-2">
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion1">
                  1.	What is the process of preparing Books of Accounts at Undercustoms?
                </button>
              </h2>
              <div id="accordion1" class="accordion-collapse collapse">
                <div class="accordion-body">
                  The Specialised accountant at Undercustoms will prepare and maintain the books of accounts for your business with the data provided by the customer.
                  All the customer needs is to provide the documents and data so that it can be entered in the Accounting software.
                </div>
              </div>
            </div>
          </div>

          <div class="accordion faq-alt mb-4 mx-2">
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion2">
                  2.	How do I provide the documents for Accounting?
                </button>
              </h2>
              <div id="accordion2" class="accordion-collapse collapse">
                <div class="accordion-body">
                  You can provide us the documents either by: <br>
                  1.	Scanning the documents and uploading it on to the Customer Portal from your computer/ laptop with the user id provided to you. <br>
                  2.	Clicking the picture of the documents from your smartphone and uploading it directly through the Undercustoms Mobile application.
                </div>
              </div>
            </div>
          </div>

          <div class="accordion faq-alt mb-4 mx-2">
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion3">
                  3.	What documents are needed for Accounting?
                </button>
              </h2>
              <div id="accordion3" class="accordion-collapse collapse">
                <div class="accordion-body">
                  The requirement of the documents depend upon the nature of business and after detailed discussion on the business processes.
                  The general documents that are required include the below: <br>
                  1.	Sale Invoices <br>
                  2.	Purchase Bills <br>
                  3.	Bills for expenses and utilities <br>
                  4.	Bank and loan account statements <br>
                  5.	Cheque counter foils <br>
                  6.	Petty cash book <br>
                  7.	Salary sheets, etc. <br>
                </div>
              </div>
            </div>
          </div>

          <div class="accordion faq-alt mb-4 mx-2">
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion4">
                  4.	How can I get the desired reports or ledger accounts required to review?
                </button>
              </h2>
              <div id="accordion4" class="accordion-collapse collapse">
                <div class="accordion-body">
                  The customer has the option to send Request for reports from the Customer portal. The detail of reports can either be selected from the options available on the portal such as Balance Sheet, Profit & Loss account, Ledger account statements, etc., or it can be customised depending on the requirement. <br>
                  Further, the customer has the option to directly pull the reports from the accounting software through the access provided to them.
                </div>
              </div>
            </div>
          </div>

          <div class="accordion faq-alt mb-4 mx-2">
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion5">
                  5.	How does a customer resolve any service related queries?
                </button>
              </h2>
              <div id="accordion5" class="accordion-collapse collapse">
                <div class="accordion-body">
                  24*7 customer support is available to the customer for any service related queries. <br>
                  The customer can raise a ticket on the Customer portal and the same is resolved within 2 working days time limit. <br>
                  Further, the customer has the option to Email or Video Call the dedicated Manager to get the queries resolved instantly. <br>
                </div>
              </div>
            </div>
          </div>

        </div>
        <div class="col-lg-6">

          <div class="accordion faq-alt mb-4 mx-2">
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion6">
                  6.	What does online Accounting and Bookkeeping services mean?
                </button>
              </h2>
              <div id="accordion6" class="accordion-collapse collapse">
                <div class="accordion-body">
                  Online Accounting and Bookkeeping services means transferring the overall management of your finance, accounting, and bookkeeping requirements to a third-party professional firm for maintenance with value added services such as accuracy and professional data management, transparency, no office visit hassles with seamless accounting.
                </div>
              </div>
            </div>
          </div>

          <div class="accordion faq-alt mb-4 mx-2">
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion7">
                  7.	Why is Accounting and bookkeeping important for my Business?
                </button>
              </h2>
              <div id="accordion7" class="accordion-collapse collapse">
                <div class="accordion-body">
                  Accounting is called the language of business.  It is important as it keeps a systematic record of the organization's financial information. It enables the users to assess the performance of a company over a period of time.
                </div>
              </div>
            </div>
          </div>

          <div class="accordion faq-alt mb-4 mx-2">
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion8">
                  8.	What additional services do I get from Undercustoms?
                </button>
              </h2>
              <div id="accordion8" class="accordion-collapse collapse">
                <div class="accordion-body">
                  We provide a one stop comprehensive solution to business enterprises for  management of all their financial compliance requirements. <br>
                  We provide following services along with the Accounting and Bookkeeping services with no additional costs: <br>
                  a.	GST returns preparation and filings on periodic basis. <br>
                  b.	Income Tax returns filing and compliances. <br>
                  c.	Consultations on any matters related to corporate laws and tax compliances. <br>
                  d.	Three layer checking of the financial data by the professionals before delivery to the customer.
                </div>
              </div>
            </div>
          </div>

          <div class="accordion faq-alt mb-4 mx-2">
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion9">
                  9.	How do you ensure the confidentiality of data shared with you?
                </button>
              </h2>
              <div id="accordion9" class="accordion-collapse collapse">
                <div class="accordion-body">
                  We enter into the confidentiality agreement with the customer to maintain the confidentiality and security of the customer data at all the time.
                </div>
              </div>
            </div>
          </div>

          <div class="accordion faq-alt mb-4 mx-2">
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion10">
                  10.	Is there any way to appraise the performance of the services?
                </button>
              </h2>
              <div id="accordion10" class="accordion-collapse collapse">
                <div class="accordion-body">
                  We have the system of Quarterly Rating of services by the Customer wherein we get the input from the customer to rate our services based on their experience.
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>

  <section class="common-section parallax-section bg-dark">
    <div class="parallax-box">
      <img class="parallax-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/bg3.jpg">
    </div>
    <div class="container text-white text-shadow py-5">
      <div class="section-title text-center mb-3">
        <h6 class="text-color"> STATISTICS </h6>
        <h3> Some Interesting Facts </h3>
        <!-- <span class="line"></span> -->
      </div>
      <div class="row text-center text-md-start" data-aos="fade-up">

        <div class="col-md col-lg mb-4">
          <div class="cardx thing-card text-white pt-4 text-center">
            <div class="card-icon text-primary mb-3">
              <i class="fa fa-calendar-alt fa-2x"></i>
            </div>
            <div class="card-body">
              <h2 class="card-title"> 20 </h2>
              <h6 class="card-text bigp"> Year of Experienced  </h6>
            </div>
          </div>
        </div>

        <div class="col-md col-lg mb-4">
          <div class="cardx thing-card text-white pt-4 text-center">
            <div class="card-icon text-primary mb-3">
              <i class="fa fa-users fa-2x"></i>
            </div>
            <div class="card-body">
              <h2 class="card-title"> 4200 </h2>
              <p class="card-text bigp"> Satisfied Customers   </p>
            </div>
          </div>
        </div>

        <div class="col-md col-lg mb-4">
          <div class="cardx thing-card text-white pt-4 text-center">
            <div class="card-icon text-primary mb-3">
              <i class="fa fa-boxes fa-2x"></i>
            </div>
            <div class="card-body">
              <h2 class="card-title"> 5800 </h2>
              <p class="card-text bigp"> Project Completed </p>
            </div>
          </div>
        </div>

        <div class="col-md col-lg mb-4">
          <div class="cardx thing-card text-white pt-4 text-center">
            <div class="card-icon text-primary mb-3">
              <i class="fa fa-couch fa-2x"></i>
            </div>
            <div class="card-body">
              <h2 class="card-title"> 120 </h2>
              <p class="card-text bigp"> Staff Members </p>
            </div>
          </div>
        </div>

      </div>
      <!-- <div class="text-center mt-5">
        <a class="btn btn-primary" href="<?php echo site_url(); ?>/contact/"> CONTACT NOW </a>
      </div> -->
    </div>
  </section>

  <section class="common-section bg-ghost border-top">
    <div class="container py-4">
      <div class="section-title text-center mb-0">
        <h6 class="text-color"> OUR TEAM </h6>
        <h3> Our Leadership Team </h3>
        <span class="line"></span>
      </div>
      <div class="row g-lg-5 project-box pt-4" data-aos="fade-up">

        <div class="col-md-3 mb-4">
          <div class="card p-0">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/team/team1.jpg" class="card-img-top round-team" alt="">
            <div class="card-body text-center">
              <h5 class="card-title"> Ajay Bhat </h5>
              <p class="card-text text-primary"> Designation </p>
            </div>
          </div>
        </div>

        <div class="col-md-3 mb-4">
          <div class="card p-0">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/team/team2.jpg" class="card-img-top round-team" alt="">
            <div class="card-body text-center">
              <h5 class="card-title"> Nishu Kaur </h5>
              <p class="card-text text-primary"> Designation </p>
            </div>
          </div>
        </div>

        <div class="col-md-3 mb-4">
          <div class="card p-0">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/team/team3.jpg" class="card-img-top round-team" alt="">
            <div class="card-body text-center">
              <h5 class="card-title"> Raj Kumar </h5>
              <p class="card-text text-primary"> Designation </p>
            </div>
          </div>
        </div>

        <div class="col-md-3 mb-4">
          <div class="card p-0">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/team/team4.jpg" class="card-img-top round-team" alt="">
            <div class="card-body text-center">
              <h5 class="card-title"> Dhiraj Singh </h5>
              <p class="card-text text-primary"> Designation </p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <section class="common-section bg-light border-top">
    <div class="container py-4 px-5 px-lg-2">
      <div class="section-title text-center mb-4">
        <h6 class="text-color"> TESTIMONIALS </h6>
        <h3> Happy Customers </h3>
        <span class="line"></span>
        <!-- <p class="bigp"> </p> -->
      </div>

      <!-- Slider main container -->
      <div id="owl-trio" class="owl-carousel">

        <!-- custom post loop -->
        <?php
          $args = array(
            'posts_per_page' => 6,
            'post_type'      => 'site_testimonials',
            'orderby'        => 'date',
            'order'          => 'DESC',
            );
        ?>
        <?php query_posts($args); ?>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <div class="owl-item">
            <div class="card testimonial-card">
              <div class="card-icon text-center pt-4">
                <?php if ( has_post_thumbnail() ) { ?>
                  <img class="img-thumbnail rounded-circle mx-auto" src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="">
                <?php } else { ?>
                  <img class="img-thumbnail rounded-circle mx-auto" src="<?php echo get_stylesheet_directory_uri(); ?>/img/user.jpg" alt="">
                <?php } ?>
                <span class="quoty"><i class="fa fa-quote-left"></i></span>
              </div>
              <div class="card-body text-center">
                <!-- <p class="card-text"> <?php //echo the_content(); ?> </p> -->
                <p class="card-text"> <?php echo excerpt(100); ?> </p>
                <h6 class="card-title mt-4 mb-3"> <strong><?php the_title(); ?></strong> </h6>
              </div>
            </div>
          </div>
        <?php endwhile; endif; ?>

        <div class="owl-item">
          <div class="card testimonial-card">
            <div class="card-icon text-center pt-4">
              <img class="img-thumbnail rounded-circle mx-auto" src="<?php echo get_stylesheet_directory_uri(); ?>/img/user.jpg" alt="">
              <span class="quoty"><i class="fa fa-quote-left"></i></span>
            </div>
            <div class="card-body text-center">
              <p class="card-text"> Appropriate communication protocols between both the teams are defined to facilitate a harmonious collaboration and working environment. </p>
              <h6 class="card-title mt-4 mb-3"> <strong>Sandeep Thakur</strong> </h6>
            </div>
          </div>
        </div>

        <div class="owl-item">
          <div class="card testimonial-card">
            <div class="card-icon text-center pt-4">
              <img class="img-thumbnail rounded-circle mx-auto" src="<?php echo get_stylesheet_directory_uri(); ?>/img/user.jpg" alt="">
              <span class="quoty"><i class="fa fa-quote-left"></i></span>
            </div>
            <div class="card-body text-center">
              <p class="card-text"> Appropriate communication protocols between both the teams are defined to facilitate a harmonious collaboration and working environment. </p>
              <h6 class="card-title mt-4 mb-3"> <strong>Sandeep Thakur</strong> </h6>
            </div>
          </div>
        </div>

        <div class="owl-item">
          <div class="card testimonial-card">
            <div class="card-icon text-center pt-4">
              <img class="img-thumbnail rounded-circle mx-auto" src="<?php echo get_stylesheet_directory_uri(); ?>/img/user.jpg" alt="">
              <span class="quoty"><i class="fa fa-quote-left"></i></span>
            </div>
            <div class="card-body text-center">
              <p class="card-text"> Appropriate communication protocols between both the teams are defined to facilitate a harmonious collaboration and working environment. </p>
              <h6 class="card-title mt-4 mb-3"> <strong>Sandeep Thakur</strong> </h6>
            </div>
          </div>
        </div>

        <div class="owl-item">
          <div class="card testimonial-card">
            <div class="card-icon text-center pt-4">
              <img class="img-thumbnail rounded-circle mx-auto" src="<?php echo get_stylesheet_directory_uri(); ?>/img/user.jpg" alt="">
              <span class="quoty"><i class="fa fa-quote-left"></i></span>
            </div>
            <div class="card-body text-center">
              <p class="card-text"> Appropriate communication protocols between both the teams are defined to facilitate a harmonious collaboration and working environment. </p>
              <h6 class="card-title mt-4 mb-3"> <strong>Sandeep Thakur</strong> </h6>
            </div>
          </div>
        </div>

      </div>

      <div class="text-center mt-4">
        <a class="btn btn-dark" href="<?php echo site_url(); ?>/testimonials/"> Read More </a>
      </div>
    </div>
  </section>

  <section class="common-section bg-white border-top">
    <div class="container-fluid px-lg-5 py-4">
      <div class="section-title text-center mb-4">
        <h6 class="text-primary"> Gallery </h6>
        <h3> Projects Gallery </h3>
        <span class="line"></span>
      </div>
      <div class="text-center px-4">
        <!-- <p>content being uploaded...</p> -->

        <div id="owl-quad" class="owl-carousel">
          <div class="item">
            <img class="p-2" src="<?php echo get_stylesheet_directory_uri(); ?>/img/default.jpg">
          </div>
          <div class="item">
            <img class="p-2" src="<?php echo get_stylesheet_directory_uri(); ?>/img/default.jpg">
          </div>
          <div class="item">
            <img class="p-2" src="<?php echo get_stylesheet_directory_uri(); ?>/img/default.jpg">
          </div>
          <div class="item">
            <img class="p-2" src="<?php echo get_stylesheet_directory_uri(); ?>/img/default.jpg">
          </div>
          <div class="item">
            <img class="p-2" src="<?php echo get_stylesheet_directory_uri(); ?>/img/default.jpg">
          </div>
          <div class="item">
            <img class="p-2" src="<?php echo get_stylesheet_directory_uri(); ?>/img/default.jpg">
          </div>
          <div class="item">
            <img class="p-2" src="<?php echo get_stylesheet_directory_uri(); ?>/img/default.jpg">
          </div>
        </div>
      </div>
      <div class="text-center py-4">
        <a class="btn btn-dark" href="<?php echo site_url(); ?>/gallery/"> View Gallery </a>
      </div>

      <div class="container mt-5">
        <div class="section-title text-center mb-4">
          <!-- <h6 class="text-primary"> Clients </h6> -->
          <h3> Our Partners & Clients</h3>
          <!-- <span class="line"></span> -->
        </div>
        <div class="text-center px-4">

          <div id="owl-penta" class="owl-carousel">
            <div class="item">
              <img class="p-2" src="<?php echo get_stylesheet_directory_uri(); ?>/img/default.jpg">
            </div>
            <div class="item">
              <img class="p-2" src="<?php echo get_stylesheet_directory_uri(); ?>/img/default.jpg">
            </div>
            <div class="item">
              <img class="p-2" src="<?php echo get_stylesheet_directory_uri(); ?>/img/default.jpg">
            </div>
            <div class="item">
              <img class="p-2" src="<?php echo get_stylesheet_directory_uri(); ?>/img/default.jpg">
            </div>
            <div class="item">
              <img class="p-2" src="<?php echo get_stylesheet_directory_uri(); ?>/img/default.jpg">
            </div>
            <div class="item">
              <img class="p-2" src="<?php echo get_stylesheet_directory_uri(); ?>/img/default.jpg">
            </div>
            <div class="item">
              <img class="p-2" src="<?php echo get_stylesheet_directory_uri(); ?>/img/default.jpg">
            </div>
          </div>

        </div>
      </div>

    </div>
  </section>

  <section class="common-section bg-light border-top">
    <div class="container py-4">
      <div class="section-title text-center mb-4">
        <h6 class="text-color"> Business & Financial </h6>
        <h3> We are Leading Consulting Firm </h3>
        <span class="line"></span>
        <p class="bigp"> On the other hand we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment so blinded. </p>
      </div>
      <div class="row g-5">

        <div class="col-md-6 col-lg-6" data-aos="fade-right">
          <div class="videomon text-center">
            <a class="popup-youtube" href="https://www.youtube.com/watch?v=5qap5aO4i9A"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/play.jpg" alt=""> </a>
          </div>
        </div>

        <div class="col-md-6 col-lg-6" data-aos="fade-left">

          <div class="accordion" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                  <strong>What type of company is measured?</strong>
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                  <strong>Where can I find market research reports?</strong>
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                  <strong>Where should I incorporate my business?</strong>
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>

  <section class="common-section bg-light border-top" style="background: linear-gradient(220deg, #111111 0%, #DA0037 100%);">
    <div class="container py-4">
      <div class="row">

        <div class="col-md-5 pe-lg-5">
          <div class="section-title text-white mb-4">
            <h6 class="text-light"> Testimonials </h6>
            <h2> Our Satisfied <br> Clients </h2>
            <!-- <span class="line"></span> -->
            <p class="bigp">Lorem ipsum dolor sit amet consectetur adipisicing elit. In suscipit magnam unde blanditiis, reiciendis repellendus minus sed culpa autem necessitatibus voluptatibus excepturi. </p>
            <a class="btn btn-light" href="<?php echo site_url(); ?>/testimonials/"> Read More </a>
          </div>
        </div>

        <div class="col-md-7 ps-lg-5 px-4" data-aos="fade-up">
          <!-- Slider main container -->
          <div id="owl-duo" class="owl-carousel">
            <!-- custom post loop -->
            <?php
              $args = array(
                'posts_per_page' => 6,
                'post_type'      => 'site_testimonials',
                'orderby'        => 'date',
                'order'          => 'DESC',
                );
            ?>
            <?php query_posts($args); ?>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
              <div class="owl-item">
                <div class="card testimonial-card">
                  <div class="card-icon text-center pt-4">
                    <?php if ( has_post_thumbnail() ) { ?>
                      <img class="img-thumbnail rounded-circle mx-auto" src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="">
                    <?php } else { ?>
                      <img class="img-thumbnail rounded-circle mx-auto" src="<?php echo get_stylesheet_directory_uri(); ?>/img/user.jpg" alt="">
                    <?php } ?>
                    <span class="quoty"><i class="fa fa-quote-left"></i></span>
                  </div>
                  <div class="card-body text-center">
                    <!-- <p class="card-text"> <?php //echo the_content(); ?> </p> -->
                    <p class="card-text"> <?php echo excerpt(100); ?> </p>
                    <h6 class="card-title mt-4 mb-3"> <strong><?php the_title(); ?></strong> </h6>
                  </div>
                </div>
              </div>
            <?php endwhile; endif; ?>

            <div class="owl-item">
              <div class="card testimonial-card">
                <div class="card-icon text-center pt-4">
                  <img class="img-thumbnail rounded-circle mx-auto" src="<?php echo get_stylesheet_directory_uri(); ?>/img/user.jpg" alt="">
                  <span class="quoty"><i class="fa fa-quote-left"></i></span>
                </div>
                <div class="card-body text-center">
                  <p class="card-text"> Appropriate communication protocols between both the teams are defined to facilitate a harmonious collaboration and working environment. </p>
                  <h6 class="card-title mt-4 mb-3"> <strong>Sandeep Thakur</strong> </h6>
                </div>
              </div>
            </div>

            <div class="owl-item">
              <div class="card testimonial-card">
                <div class="card-icon text-center pt-4">
                  <img class="img-thumbnail rounded-circle mx-auto" src="<?php echo get_stylesheet_directory_uri(); ?>/img/user.jpg" alt="">
                  <span class="quoty"><i class="fa fa-quote-left"></i></span>
                </div>
                <div class="card-body text-center">
                  <p class="card-text"> Appropriate communication protocols between both the teams are defined to facilitate a harmonious collaboration and working environment. </p>
                  <h6 class="card-title mt-4 mb-3"> <strong>Sandeep Thakur</strong> </h6>
                </div>
              </div>
            </div>

            <div class="owl-item">
              <div class="card testimonial-card">
                <div class="card-icon text-center pt-4">
                  <img class="img-thumbnail rounded-circle mx-auto" src="<?php echo get_stylesheet_directory_uri(); ?>/img/user.jpg" alt="">
                  <span class="quoty"><i class="fa fa-quote-left"></i></span>
                </div>
                <div class="card-body text-center">
                  <p class="card-text"> Appropriate communication protocols between both the teams are defined to facilitate a harmonious collaboration and working environment. </p>
                  <h6 class="card-title mt-4 mb-3"> <strong>Sandeep Thakur</strong> </h6>
                </div>
              </div>
            </div>

          </div>
        </div>

      </div>
    </div>
  </section>

  <section class="common-section bg-light border-top">
    <div class="container py-4">
      <div class="section-title text-center mb-4">
        <h6 class="text-primary">Updates</h6>
        <h3> Latest Blogs </h3>
        <span class="line"></span>
      </div>
      <div class="blog-posts">
        <div class="row g-lg-5" data-aos="fade-up">
          <?php
          // TO SHOW THE PAGE CONTENTS
          $args = array(
            'posts_per_page' => 3,
            // 'category_name' => 'exercises',
            'orderby' => 'date',
            'order' => 'DESC'
          );
          query_posts($args);
          while (have_posts()) : the_post();
            ?>
            <div class="col-md-6 col-lg-4 mb-4">
              <?php get_template_part('template-parts/content', 'item'); ?>
            </div>
            <?php
          endwhile;
          wp_reset_query();
          ?>
        </div>
      </div>
      <div class="text-center pt-2">
        <a class="btn btn-dark" href="<?php echo site_url(); ?>/blog/"> View More </a>
      </div>
    </div>
  </section>

  <section class="common-section bg-white border-top">
    <div class="container">
      <div class="row g-lg-5 project-box pt-4" data-aos="fade-up">

        <div class="col-md-3 mb-4">
          <div class="icon-item text-center">
            <div class="icon mb-4">
              <i class="fa fa-shipping-fast fa-2x"></i>
            </div>
            <h6 class="font-strong">FREE SHIPPING</h6>
            <p class="text-muted"> Free Shipping on All Orders </h4>
          </div>
        </div>

        <div class="col-md-3 mb-4">
          <div class="icon-item text-center">
            <div class="icon mb-4">
              <i class="fa fa-hand-holding-usd fa-2x"></i>
            </div>
            <h6 class="font-strong">MONEY RETURN </h6>
            <p class="text-muted"> 30 days for free return </h4>
          </div>
        </div>

        <div class="col-md-3 mb-4">
          <div class="icon-item text-center">
            <div class="icon mb-4">
              <i class="fa fa-headset fa-2x"></i>
            </div>
            <h6 class="font-strong">ONLINE SUPPORT </h6>
            <p class="text-muted"> Support 24 hours a Day </h4>
          </div>
        </div>

        <div class="col-md-3 mb-4">
          <div class="icon-item text-center">
            <div class="icon mb-4">
              <i class="fa fa-credit-card fa-2x"></i>
            </div>
            <h6 class="font-strong"> DEALS & PROMOTIONS </h6>
            <p class="text-muted"> Price savings, Discounts </h4>
          </div>
        </div>

      </div>
    </div>
  </section>

  <section class="common-section bg-light border-top">
    <div class="container py-4">
      <div class="row">
        <div class="col-md-6 pr-md-5" data-aos="fade-right">
          <div class="section-title mb-2">
            <h6 class="text-primary">Contact us</h6>
            <h3><strong>Get in Touch</strong> </h3>
            <span class="line"></span>
          </div>
          <p class="bigp">We realize the value of your time. Please email us or contact us via the following methods below to get a guaranteed reply from us.</p>
          <p class="bigp">
            <strong>Write us</strong> <br>
            <?php $email_mod = ( !empty(get_theme_mod('undercustoms_contact_info_email')) ) ? get_theme_mod('undercustoms_contact_info_email') : 'Set Email in theme options' ; ?>
            <i class="fa fa-envelope"></i> <?php echo $email_mod; ?>
          </p>
          <p class="bigp">
            <strong>Call us</strong> <br>
            <?php $phone_mod = ( !empty(get_theme_mod('undercustoms_contact_info_phone')) ) ? get_theme_mod('undercustoms_contact_info_phone') : 'Set Phone in theme options' ; ?>
            <i class="fa fa-phone"></i> <?php echo $phone_mod; ?>
          </p>
        </div>
        <div class="col-md-6" data-aos="fade-left">
          <div class="card h-100">
            <div class="card-body homepage-form">
              <h5>Write to us </h5>
              <?php echo do_shortcode('[contact-form-7 id="5" title="Homepage form"]'); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="callto" class="common-section callto-section py-5" style="background: linear-gradient(220deg, #111111 0%, #DA0037 100%);">
    <div class="container">
      <div class="row">
        <div class="col-md-7 col-lg-7 pt-3">
          <div class="section-title">
            <h3 class="mt-2 text-white font-light"> Leading Services in Region</h3>
            <p class="bigp mb-2 text-white"> We offer end-to-end solutions for all your requirements & needs. </p>
          </div>
        </div>
        <div class="col-md col-lg pt-4">
          <div class="newsletter-form">
            <h6 class="text-white"> <small class="font-strong">LEAVE US YOUR EMAIL & WE'LL REACH YOU!</small> </h6>
            <?php echo do_shortcode('[contact-form-7 id="30" title="Newsletter form 1"]'); ?>
          </div>
        </div>
      </div>
    </div>
  </section>

</div>

<?php
get_footer();
