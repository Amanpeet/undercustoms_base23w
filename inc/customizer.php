<?php
/**
 * undercustoms Theme Customizer
 *
 * @package undercustoms
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function undercustoms_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'undercustoms_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'undercustoms_customize_partial_blogdescription',
		) );
	}
}
add_action( 'customize_register', 'undercustoms_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function undercustoms_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function undercustoms_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function undercustoms_customize_preview_js() {
	wp_enqueue_script( 'undercustoms-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'undercustoms_customize_preview_js' );



/**
 * Amanized customizer option for darkcustoms
 */
function darkcustoms_customize_register_slides( $wp_customize ) {

  $wp_customize->add_panel( 'undercustoms_slider_panel', array(
    'priority'       => 50,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
    'title'          => 'Hero Slider',
    'description'    => 'Custom hero slider carousel based on bootstrap 5. Maximum 3 slides supported.',
  ));

  //slide 1
  $wp_customize->add_section( 'undercustoms_slider1' , array(
    'title'          => 'Slide 1',
    'priority'       => 101,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
    'description'    => '',
    'panel'          => 'undercustoms_slider_panel',
  ));
  $wp_customize->add_setting('undercustoms_slider1_image',  array(
    'default'    =>  '',
    'transport'  =>  'postMessage'
  ));
  $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'logo1', array(
    'label'      => 'Slide Background Image',
    'section'    => 'undercustoms_slider1',
    'settings'   => 'undercustoms_slider1_image',
    'context'    => 'undercustoms_slider1_context'
  )));
  $wp_customize->add_setting('undercustoms_slider1_caption',  array(
    'default'    =>  '',
    'transport'  =>  'postMessage'
  ));
  $wp_customize->add_control('undercustoms_slider1_caption',  array(
    'section'   => 'undercustoms_slider1',
    'label'     => 'Slide Caption',
    'type'      => 'textarea',
  ));

  //slide 2
  $wp_customize->add_section( 'undercustoms_slider2' , array(
    'title'          => 'Slide 2',
    'priority'       => 102,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
    'description'    => '',
    'panel'          => 'undercustoms_slider_panel',
  ));
  $wp_customize->add_setting('undercustoms_slider2_image',  array(
    'default'    =>  '',
    'transport'  =>  'postMessage'
  ));
  $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'logo2', array(
    'label'      => 'Slide Background Image',
    'section'    => 'undercustoms_slider2',
    'settings'   => 'undercustoms_slider2_image',
    'context'    => 'undercustoms_slider2_context'
  )));
  $wp_customize->add_setting('undercustoms_slider2_caption',  array(
    'default'    =>  '',
    'transport'  =>  'postMessage'
  ));
  $wp_customize->add_control('undercustoms_slider2_caption',  array(
    'section'   => 'undercustoms_slider2',
    'label'     => 'Slide Caption',
    'type'      => 'textarea',
  ));

  //slide 3
  $wp_customize->add_section( 'undercustoms_slider3' , array(
    'title'          => 'Slide 3',
    'priority'       => 103,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
    'description'    => '',
    'panel'          => 'undercustoms_slider_panel',
  ));
  $wp_customize->add_setting('undercustoms_slider3_image',  array(
    'default'    =>  '',
    'transport'  =>  'postMessage'
  ));
  $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'logo3', array(
    'label'      => 'Slide Background Image',
    'section'    => 'undercustoms_slider3',
    'settings'   => 'undercustoms_slider3_image',
    'context'    => 'undercustoms_slider3_context'
  )));
  $wp_customize->add_setting('undercustoms_slider3_caption',  array(
    'default'    =>  '',
    'transport'  =>  'postMessage'
  ));
  $wp_customize->add_control('undercustoms_slider3_caption',  array(
    'section'   => 'undercustoms_slider3',
    'label'     => 'Slide Caption',
    'type'      => 'textarea',
  ));

}
add_action( 'customize_register', 'darkcustoms_customize_register_slides' );



/**
 * Amanized customizer option for darkcustoms
 */
function darkcustoms_customize_register_contact_info( $wp_customize ) {

  // $wp_customize->add_panel( 'undercustoms_contact_info_panel', array(
  //   'priority'       => 60,
  //   'capability'     => 'edit_theme_options',
  //   'theme_supports' => '',
  //   'title'          => 'Contact Info',
  //   'description'    => 'Set your contact information like email, phone number and address.',
  // ));

  //create section
  $wp_customize->add_section( 'undercustoms_contact_info_section' , array(
    'priority'       => 60,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
    'title'          => 'Contact Details',
    'description'    => 'Set your contact information like email, phone number and address. You can use html.',
    // 'panel'          => 'undercustoms_contact_info_panel',
  ));

  // email
  $wp_customize->add_setting('undercustoms_contact_info_email',  array(
    'default'    =>  '',
    'transport'  =>  'postMessage'
  ));
  $wp_customize->add_control('undercustoms_contact_info_email',  array(
    'section'   => 'undercustoms_contact_info_section',
    'label'     => 'Email Address',
    'type'      => 'text',
  ));

  //phone
  $wp_customize->add_setting('undercustoms_contact_info_phone',  array(
    'default'    =>  '',
    'transport'  =>  'postMessage'
  ));
  $wp_customize->add_control('undercustoms_contact_info_phone',  array(
    'section'   => 'undercustoms_contact_info_section',
    'label'     => 'Contact Phone',
    'type'      => 'text',
  ));

  //Address
  $wp_customize->add_setting('undercustoms_contact_info_address',  array(
    'default'    =>  '',
    'transport'  =>  'postMessage'
  ));
  $wp_customize->add_control('undercustoms_contact_info_address',  array(
    'section'   => 'undercustoms_contact_info_section',
    'label'     => 'Address',
    'type'      => 'textarea',
  ));

  //contact shortcode
  $wp_customize->add_setting('undercustoms_contact_info_contact_form',  array(
    'default'    =>  '',
    'transport'  =>  'postMessage'
  ));
  $wp_customize->add_control('undercustoms_contact_info_contact_form',  array(
    'section'   => 'undercustoms_contact_info_section',
    'label'     => 'Contact Form Shortcode',
    'type'      => 'text',
  ));

  //map
  $wp_customize->add_setting('undercustoms_contact_info_map_iframe',  array(
    'default'    =>  '',
    'transport'  =>  'postMessage'
  ));
  $wp_customize->add_control('undercustoms_contact_info_map_iframe',  array(
    'section'   => 'undercustoms_contact_info_section',
    'label'     => 'Contact Map Iframe',
    'type'      => 'textarea',
  ));


}
add_action( 'customize_register', 'darkcustoms_customize_register_contact_info' );



/**
 * Amanized customizer option for darkcustoms
 */
function darkcustoms_customize_register_footer_area( $wp_customize ) {

  //create section
  $wp_customize->add_section( 'undercustoms_footer_area_section' , array(
    'priority'       => 60,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
    'title'          => 'Footer Area',
    'description'    => 'Set text to appear in footer here.',
  ));

  //footer text
  $wp_customize->add_setting('undercustoms_footer_area_text',  array(
    'default'    =>  '',
    'transport'  =>  'postMessage'
  ));
  $wp_customize->add_control('undercustoms_footer_area_text',  array(
    'section'   => 'undercustoms_footer_area_section',
    'label'     => 'Footer Text',
    'type'      => 'textarea',
  ));

}
add_action( 'customize_register', 'darkcustoms_customize_register_footer_area' );


/**
 * Amanized customizer option for darkcustoms
 */
function darkcustoms_customize_register_gallery_imgs( $wp_customize ) {

  $wp_customize->add_panel( 'undercustoms_gallery_panel', array(
    'priority'       => 50,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
    'title'          => 'Frontpage Gallery',
    'description'    => 'Custom Gallery slider with support of maximum 5 images.',
  ));

  //slide 1
  $wp_customize->add_section( 'undercustoms_gallery_img1' , array(
    'title'          => 'Gallery Image 1',
    'priority'       => 101,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
    'description'    => '',
    'panel'          => 'undercustoms_gallery_panel',
  ));
  $wp_customize->add_setting('undercustoms_gallery_img1_image',  array(
    'default'    =>  '',
    'transport'  =>  'postMessage'
  ));
  $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'logo1', array(
    'label'      => 'Gallery Image',
    'section'    => 'undercustoms_gallery_img1',
    'settings'   => 'undercustoms_gallery_img1_image',
    'context'    => 'undercustoms_gallery_img1_context'
  )));

  //slide 2
  $wp_customize->add_section( 'undercustoms_gallery_img2' , array(
    'title'          => 'Gallery Image 2',
    'priority'       => 102,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
    'description'    => '',
    'panel'          => 'undercustoms_gallery_panel',
  ));
  $wp_customize->add_setting('undercustoms_gallery_img2_image',  array(
    'default'    =>  '',
    'transport'  =>  'postMessage'
  ));
  $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'logo2', array(
    'label'      => 'Gallery Image',
    'section'    => 'undercustoms_gallery_img2',
    'settings'   => 'undercustoms_gallery_img2_image',
    'context'    => 'undercustoms_gallery_img2_context'
  )));

  //slide 3
  $wp_customize->add_section( 'undercustoms_gallery_img3' , array(
    'title'          => 'Gallery Image 3',
    'priority'       => 103,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
    'description'    => '',
    'panel'          => 'undercustoms_gallery_panel',
  ));
  $wp_customize->add_setting('undercustoms_gallery_img3_image',  array(
    'default'    =>  '',
    'transport'  =>  'postMessage'
  ));
  $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'logo3', array(
    'label'      => 'Gallery Image',
    'section'    => 'undercustoms_gallery_img3',
    'settings'   => 'undercustoms_gallery_img3_image',
    'context'    => 'undercustoms_gallery_img3_context'
  )));

  //slide 3
  $wp_customize->add_section( 'undercustoms_gallery_img4' , array(
    'title'          => 'Gallery Image 4',
    'priority'       => 103,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
    'description'    => '',
    'panel'          => 'undercustoms_gallery_panel',
  ));
  $wp_customize->add_setting('undercustoms_gallery_img4_image',  array(
    'default'    =>  '',
    'transport'  =>  'postMessage'
  ));
  $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'logo4', array(
    'label'      => 'Gallery Image',
    'section'    => 'undercustoms_gallery_img4',
    'settings'   => 'undercustoms_gallery_img4_image',
    'context'    => 'undercustoms_gallery_img4_context'
  )));

  //slide 5
  $wp_customize->add_section( 'undercustoms_gallery_img5' , array(
    'title'          => 'Gallery Image 5',
    'priority'       => 103,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
    'description'    => '',
    'panel'          => 'undercustoms_gallery_panel',
  ));
  $wp_customize->add_setting('undercustoms_gallery_img5_image',  array(
    'default'    =>  '',
    'transport'  =>  'postMessage'
  ));
  $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'logo5', array(
    'label'      => 'Gallery Image',
    'section'    => 'undercustoms_gallery_img5',
    'settings'   => 'undercustoms_gallery_img5_image',
    'context'    => 'undercustoms_gallery_img5_context'
  )));

  //slide 6
  $wp_customize->add_section( 'undercustoms_gallery_img6' , array(
    'title'          => 'Gallery Image 6',
    'priority'       => 103,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
    'description'    => '',
    'panel'          => 'undercustoms_gallery_panel',
  ));
  $wp_customize->add_setting('undercustoms_gallery_img6_image',  array(
    'default'    =>  '',
    'transport'  =>  'postMessage'
  ));
  $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'logo6', array(
    'label'      => 'Gallery Image',
    'section'    => 'undercustoms_gallery_img6',
    'settings'   => 'undercustoms_gallery_img6_image',
    'context'    => 'undercustoms_gallery_img6_context'
  )));

}
// add_action( 'customize_register', 'darkcustoms_customize_register_gallery_imgs' );
