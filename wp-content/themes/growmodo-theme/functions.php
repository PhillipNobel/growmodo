<?php
function growmodo_theme_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    
    // Registrar local do menu
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'growmodo-theme' ),
    ) );
}
add_action( 'after_setup_theme', 'growmodo_theme_setup' );

// Registrar CPT Testimonial
function growmodo_register_testimonial_cpt() {
    register_post_type( 'testimonial', array(
        'labels' => array(
            'name' => __( 'Testimonials', 'growmodo-theme' ),
            'singular_name' => __( 'Testimonial', 'growmodo-theme' ),
        ),
        'public' => true,
        'has_archive' => false,
        'supports' => array( 'title', 'editor', 'thumbnail' ),
        'menu_icon' => 'dashicons-testimonial',
    ) );
}
add_action( 'init', 'growmodo_register_testimonial_cpt' );

// Registrar CPT FAQ
function growmodo_register_faq_cpt() {
    register_post_type( 'faq', array(
        'labels' => array(
            'name' => __( 'FAQs', 'growmodo-theme' ),
            'singular_name' => __( 'FAQ', 'growmodo-theme' ),
        ),
        'public' => true,
        'has_archive' => false,
        'supports' => array( 'title', 'editor' ),
        'menu_icon' => 'dashicons-editor-help',
    ) );
}
add_action( 'init', 'growmodo_register_faq_cpt' );

function growmodo_theme_widgets_init() {
    $columns = array(
        'footer-1' => '30%',
        'footer-2' => '15%',
        'footer-3' => '15%',
        'footer-4' => '15%',
        'footer-5' => '15%',
        'footer-6' => '10%',
    );

    foreach ( $columns as $id => $width ) {
        register_sidebar( array(
            'name'          => sprintf( esc_html__( 'Footer %s (%s)', 'growmodo-theme' ), str_replace('footer-', '', $id), $width ),
            'id'            => $id,
            'description'   => sprintf( esc_html__( 'Add widgets here for column %s.', 'growmodo-theme' ), $id ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>',
        ) );
    }
}
add_action( 'widgets_init', 'growmodo_theme_widgets_init' );

function growmodo_theme_scripts() {
    wp_enqueue_style( 'swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', array(), '11.0.0' );
    wp_enqueue_style( 'growmodo-main-style', get_template_directory_uri() . '/assets/css/main.css', array(), '1.0.0' );
    
    wp_enqueue_script( 'swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), '11.0.0', true );
    wp_enqueue_script( 'growmodo-main-js', get_template_directory_uri() . '/assets/js/main.js', array( 'jquery', 'swiper-js' ), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'growmodo_theme_scripts' );
