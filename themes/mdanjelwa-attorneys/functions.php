<?php

/**
 * Registering features supported by this theme
 *
 * @return void
 */
function add_theme_support_options()
{
    add_theme_support(
        'custom-logo', array(
            'height'      => 72,
            'width'       => 217,
            'flex-height' => true,
            'flex-width'  => true,
            'header_text' => array( 'site-title', 'description' ),
        )
    );
    add_theme_support( 'title-tag' );
    add_theme_support( 'custom-background' );
    add_theme_support( 'custom-header' );
    add_theme_support( 'post-thumbnails' );
    register_nav_menu( 'navBar', 'Primary Menu' );
}
add_action( 'after_setup_theme', 'add_theme_support_options' );

/**
 * Adding theme styles and scripts
 *
 * @return void
 */
function add_theme_styles_and_scripts()
{
    //Adding styles
    wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css?family=Playfair+Display|Saira|Raleway|Ubuntu', '', '', 'all' );
    wp_enqueue_style( 'font-awesome', '//stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', '', '4.7.0', 'all' );
    wp_enqueue_style( 'style', get_stylesheet_uri(), '', '1.1.0', 'all' );

    //Adding JavaScripts files
    wp_enqueue_script( 'jQuery', get_theme_file_uri( '/assets/js/jquery.js' ), null, '1.11.1', true );
    wp_enqueue_script( 'main', get_theme_file_uri( '/assets/js/main.js' ), null, '1.1.0', true );
    wp_enqueue_script( 'bootstrap', get_theme_file_uri( '/assets/js/bootstrap-3.1.1.min.js' ), null, '3.1.1', true );
}
add_action( 'wp_enqueue_scripts', 'add_theme_styles_and_scripts' );

function customize_theme( $wp_customize )
{
    /** 
     * Creating a section for contact information that can be customised
     */
    $wp_customize->add_section(
        'contact_information_section', array(
            'title' => __( 'Contact Information', 'mdanjelwa-attorneys' )
        )
    );

    /** 
     * Settings for customizing the address
     */
    $wp_customize->add_setting(
        'physical_address', array(
            'default'   => '160 Ntlazane Road, Litha Park, Khayelitsha, Cape Town, 7784',
            'transport' => 'refresh',
        )  
      );

    $wp_customize->add_control(
        'physical_address_control', array(
            'label'    => __( 'Physical Address', 'mdanjelwa-attorneys' ),
            'section'  => 'contact_information_section',
            'settings' => 'physical_address',
            'type'     => 'textarea',
        )
        );

    /** 
     * Settings for customizing the phone number
     */
    $wp_customize->add_setting(
        'phone_number', array(
            'default'   => ' 021 300 4999',
            'transport' => 'refresh',
        )  
    );

    $wp_customize->add_control(
        'phone_number_control', array(
            'label'    => __( 'Phone Number', 'mdanjelwa-attorneys' ),
            'section'  => 'contact_information_section',
            'settings' => 'phone_number',
            'type'     => 'text',
        )
        );

    /** 
     * Settings for customizing the email address
     */
        $wp_customize->add_setting(
          'email_address', array(
              'default'   => 'help@mdanjelwa-attorneys.co.za',
              'transport' => 'refresh',
          )  
        );
    
        $wp_customize->add_control(
            'email_address_control', array(
                'label'    => __( 'Email Address', 'mdanjelwa-attorneys' ),
                'section'  => 'contact_information_section',
                'settings' => 'email_address',
                'type'     => 'text',
            )
            );

    /** 
     * Creating a section for the footer that can be customised
     */
        $wp_customize->add_section(
            'footer_section', array(
                'title' => __( 'Footer', 'mdanjelwa-attorneys' )
            )
        );
    
    /** 
     * Settings for customizing the copyright
     */
        $wp_customize->add_setting(
            'copyright', array(
                'default'   => 'P.A. Mdanjelwa Attorneys',
                'transport' => 'refresh',
            )  
        );
    
        $wp_customize->add_control(
            'copyright_control', array(
                'label'    => __( 'Copyright', 'mdanjelwa-attorneys' ),
                'section'  => 'footer_section',
                'settings' => 'copyright',
                'type'     => 'text',
            )
            );
}
add_action( 'customize_register', 'customize_theme' );

/* Header function for different pages */
function add_theme_pages_header()
{
    if ( is_front_page() ) {
        ?>
        <section class="carousel slide section-slide" data-overlay="4">
          <div class="carousel-inner">
            <div class="item active" style="background: url(<?php header_image(); ?>);">
                <div class="container">
              <div class="row">
                  <div class="carousel-caption col-md-12">
                      <h1><?php the_title(); ?></h1>
                      <div class="main-action">
                          <div class="col-md-3 col-xs-6 col-sm-4">
                              <a href="contact-mdanjelwa.html" class="smooth-scroll btn btn-lg btn-block btn-default">Contact Us</a>
                          </div>
                      </div>
                  </div>
                </div>
                </div>
            </div>
          </div>
        </section>
    <?php } elseif ( is_page( 'contact-mdanjelwa' ) ) {
        ?>
        <section>   
        <iframe src="<?php the_field( 'google_map' ); ?>"></iframe>
        </section>
       <?php } else {
        ?> 
        <section class="carousel slide section-slide" data-overlay="4">
          <div class="carousel-inner">
            <div class="item active" style="background: url(<?php header_image(); ?>);">
                <div class="container">
              <div class="row">
                  <div class="carousel-caption col-md-12">
                      <h1><?php the_title(); ?></h1>
                  </div>
                </div>
                </div>
            </div>
          </div>
        </section>
    <?php }
}
