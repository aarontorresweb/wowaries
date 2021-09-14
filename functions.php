<?php
if ( ! function_exists( 'wowaries_setup' ) ) :

function wowaries_setup() {

    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     */
    /* WowAriesProject generated Load Text Domain Begin */
    load_theme_textdomain( 'wowaries', get_template_directory() . '/languages' );
    /* WowAriesProject generated Load Text Domain End */

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    /*
     * Let WordPress manage the document title.
     */
    add_theme_support( 'title-tag' );

    /*
     * Enable support for Post Thumbnails on posts and pages.
     */
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 825, 510, true );

    // Add menus.
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'wowaries' ),
        'social'  => __( 'Social Links Menu', 'wowaries' ),
    ) );

    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support( 'html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
    ) );

}
endif; // wowaries_setup

add_action( 'after_setup_theme', 'wowaries_setup' );


if ( ! function_exists( 'wowaries_init' ) ) :

function wowaries_init() {


    // Use categories and tags with attachments
    register_taxonomy_for_object_type( 'category', 'attachment' );
    register_taxonomy_for_object_type( 'post_tag', 'attachment' );

    /*
     * Register custom post types. You can also move this code to a plugin.
     */
    /* WowAriesProject generated Custom Post Types Begin */

    register_post_type('portfolio', array(
        'labels' =>
            array(
                'name' => __( 'Portfolio', 'wowaries' ),
                'singular_name' => __( 'portfolio', 'wowaries' )
            ),
        'public' => true,
        'hierarchical' => true,
        'supports' => array( 'title', 'thumbnail', 'editor', 'comments' ),
        'has_archive' => true,
        'show_in_menu' => true,
        'menu_icon' => 'dashicons-portfolio',
        'taxonomies' => array( 'category' )
    ));

    /* WowAriesProject generated Custom Post Types End */

    /*
     * Register custom taxonomies. You can also move this code to a plugin.
     */
    /* WowAriesProject generated Taxonomies Begin */

    /* WowAriesProject generated Taxonomies End */

}
endif; // wowaries_setup

add_action( 'init', 'wowaries_init' );


if ( ! function_exists( 'wowaries_widgets_init' ) ) :

function wowaries_widgets_init() {

    /*
     * Register widget areas.
     */
    /* WowAriesProject generated Register Sidebars Begin */

    /* WowAriesProject generated Register Sidebars End */
}
add_action( 'widgets_init', 'wowaries_widgets_init' );
endif;// wowaries_widgets_init

function waries_sanitize_html( $html ) {
return stripslashes(wp_filter_post_kses( $html ));
}

if ( ! function_exists( 'wowaries_customize_register' ) ) :

function wowaries_customize_register( $wp_customize ) {
    // Do stuff with $wp_customize, the WP_Customize_Manager object.

    /* WowAriesProject generated Customizer Controls Begin */

    $wp_customize->add_section( 'logoimage', array(
        'title' => __( 'Logo', 'wowaries' )
    ));

    $wp_customize->add_setting( 'logoimage_upload', array(
        'type' => 'theme_mod',
        'sanitize_callback' => 'waries_sanitize_html'
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'logoimage_upload', array(
        'label' => __( 'Logo', 'wowaries' ),
        'description' => __( 'Image size: 180px x 50px', 'wowaries' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'logoimage'
    ) ) );

    $wp_customize->add_section( 'default_header', array(
        'title' => __( 'Default Header', 'wowaries' )
    ));

    $wp_customize->add_setting( 'default_header_bck', array(
        'type' => 'theme_mod',
        'sanitize_callback' => 'waries_sanitize_html'
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'default_header_bck', array(
        'label' => __( 'Header Image', 'wowaries' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'default_header'
    ) ) );

    $wp_customize->add_setting( 'hometitle', array(
        'type' => 'theme_mod',
        'sanitize_callback' => 'waries_sanitize_html',
        'default' => 'THIS IS ARIES'
    ));

    $wp_customize->add_control( 'hometitle', array(
        'label' => __( 'Home Intro Title', 'wowaries' ),
        'type' => 'text',
        'section' => 'default_header'
    ));

    $wp_customize->add_setting( 'homesubtitle', array(
        'type' => 'theme_mod',
        'sanitize_callback' => 'waries_sanitize_html',
        'default' => 'Go to Appearance/Customizer/Default Header to edit this'
    ));

    $wp_customize->add_control( 'homesubtitle', array(
        'label' => __( 'Home Subtitle', 'wowaries' ),
        'type' => 'text',
        'section' => 'default_header'
    ));

    $wp_customize->add_section( 'aboutme', array(
        'title' => __( 'About me', 'wowaries' )
    ));

    $wp_customize->add_setting( 'aboutme_title', array(
        'type' => 'theme_mod',
        'sanitize_callback' => 'waries_sanitize_html',
        'default' => 'LIL ABOUT ME'
    ));

    $wp_customize->add_control( 'aboutme_title', array(
        'label' => __( 'Title', 'wowaries' ),
        'type' => 'text',
        'section' => 'aboutme'
    ));

    $wp_customize->add_setting( 'aboutme_description', array(
        'type' => 'theme_mod',
        'sanitize_callback' => 'waries_sanitize_html',
        'default' => 'Praesent ac dignissim diam. Aliquam lobortis elit et sapien eleifend, at sollicitudin metus elementum. Morbi imperdiet id ipsum at tristique.'
    ));

    $wp_customize->add_control( 'aboutme_description', array(
        'label' => __( 'Description', 'wowaries' ),
        'type' => 'textarea',
        'section' => 'aboutme'
    ));

    $wp_customize->add_setting( 'aboutme_button_link', array(
        'type' => 'theme_mod',
        'sanitize_callback' => 'waries_sanitize_html',
        'default' => '#'
    ));

    $wp_customize->add_control( 'aboutme_button_link', array(
        'label' => __( 'Button Link', 'wowaries' ),
        'type' => 'url',
        'section' => 'aboutme'
    ));

    $wp_customize->add_setting( 'aboutme_button_text', array(
        'type' => 'theme_mod',
        'sanitize_callback' => 'waries_sanitize_html',
        'default' => 'Curriculum Vitae'
    ));

    $wp_customize->add_control( 'aboutme_button_text', array(
        'label' => __( 'Button Text', 'wowaries' ),
        'type' => 'text',
        'section' => 'aboutme'
    ));

    $wp_customize->add_section( 'socialme', array(
        'title' => __( 'Social Area', 'wowaries' )
    ));

    $wp_customize->add_setting( 'socialtitle', array(
        'type' => 'theme_mod',
        'sanitize_callback' => 'waries_sanitize_html',
        'default' => 'Get in Touch'
    ));

    $wp_customize->add_control( 'socialtitle', array(
        'label' => __( 'Title', 'wowaries' ),
        'type' => 'text',
        'section' => 'socialme'
    ));

    $wp_customize->add_setting( 'socialdescription', array(
        'type' => 'theme_mod',
        'sanitize_callback' => 'waries_sanitize_html',
        'default' => 'If you like Aries  template, we would love to hear from you, whether it be feedback, thanks, new template ideas or even just to say hello, we welcome it all'
    ));

    $wp_customize->add_control( 'socialdescription', array(
        'label' => __( 'Social Text', 'wowaries' ),
        'type' => 'textarea',
        'section' => 'socialme'
    ));

    $wp_customize->add_setting( 'socialemail', array(
        'type' => 'theme_mod',
        'sanitize_callback' => 'waries_sanitize_html',
        'default' => 'wowthemesnet@gmail.com'
    ));

    $wp_customize->add_control( 'socialemail', array(
        'label' => __( 'E-mail address', 'wowaries' ),
        'type' => 'email',
        'section' => 'socialme'
    ));

    $wp_customize->add_setting( 'socialtwitter', array(
        'type' => 'theme_mod',
        'sanitize_callback' => 'waries_sanitize_html',
        'default' => '#'
    ));

    $wp_customize->add_control( 'socialtwitter', array(
        'label' => __( 'Twitter Link', 'wowaries' ),
        'type' => 'url',
        'section' => 'socialme'
    ));

    $wp_customize->add_setting( 'socialfb', array(
        'type' => 'theme_mod',
        'sanitize_callback' => 'waries_sanitize_html',
        'default' => '#'
    ));

    $wp_customize->add_control( 'socialfb', array(
        'label' => __( 'Facebook Link', 'wowaries' ),
        'type' => 'url',
        'section' => 'socialme'
    ));

    $wp_customize->add_setting( 'socialgoogle', array(
        'type' => 'theme_mod',
        'sanitize_callback' => 'waries_sanitize_html',
        'default' => '#'
    ));

    $wp_customize->add_control( 'socialgoogle', array(
        'label' => __( 'Google Link', 'wowaries' ),
        'type' => 'url',
        'section' => 'socialme'
    ));

    $wp_customize->add_section( 'footerme', array(
        'title' => __( 'Footer', 'wowaries' )
    ));

    $wp_customize->add_setting( 'footertext', array(
        'type' => 'theme_mod',
        'sanitize_callback' => 'waries_sanitize_html',
        'default' => 'Copyright &copy; Your Website "Aries" Template by WowThemes.net'
    ));

    $wp_customize->add_control( 'footertext', array(
        'label' => __( 'Footer Text', 'wowaries' ),
        'type' => 'textarea',
        'section' => 'footerme'
    ));

    /* WowAriesProject generated Customizer Controls End */

}
add_action( 'customize_register', 'wowaries_customize_register' );
endif;// wowaries_customize_register

if ( ! isset( $content_width ) ) $content_width = 900;

if ( ! function_exists( 'wowaries_enqueue_scripts' ) ) :
    function wowaries_enqueue_scripts() {

  /* WowAriesProject generated Enqueue Scripts Begin */

    wp_enqueue_script( 'jquery' );

    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', false, null, true);

    wp_enqueue_script( 'jqueryeasing', get_template_directory_uri() . '/js/jquery.easing.min.js', false, null, true);

    wp_enqueue_script( 'aries_masonry', get_template_directory_uri() . '/js/masonry.pkgd.min.js', false, null, true);

    wp_enqueue_script( 'theme', get_template_directory_uri() . '/js/theme.js', false, null, true);

    if ( is_singular() ) wp_enqueue_script( "comment-reply" );

    /* WowAriesProject generated Enqueue Scripts End */

    /* WowAriesProject generated Enqueue Styles Begin */


    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', false, null, 'all');

    wp_enqueue_style( 'theme', get_template_directory_uri() . '/css/theme.css', false, null, 'all');

    wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/font-awesome/css/font-awesome.min.css', false, null, 'all');

    wp_enqueue_style( 'style-1', 'http://fonts.googleapis.com/css?family=Quicksand:300,400,500,700', false, null, 'all');

    wp_enqueue_style( 'style-2', 'http://fonts.googleapis.com/css?family=Montserrat:400,700', false, null, 'all');

    /* WowAriesProject generated Enqueue Styles End */

    }
    add_action( 'wp_enqueue_scripts', 'wowaries_enqueue_scripts' );
endif;

/*
 * Resource files included by WowAriesProject.
 */
/* WowAriesProject generated Include Resources Begin */
require_once "inc/bootstrap/wp_bootstrap_navwalker.php";
require_once "inc/bootstrap/wp_bootstrap_pagination.php";

    /* WowAriesProject generated Include Resources End */
?>
