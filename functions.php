<?php
/**
 * Aetheris Engine Core Lifecycle Bootstrap
 * 
 * @package Aetheris
 * @since 4.7.0
 */

if ( ! defined( 'ABSPATH' ) ) exit;

// Core Includes Integration
require_get_theme_file_path( '/inc/customizer.php' );
require_get_theme_file_path( '/inc/block-templates.php' );
require_get_theme_file_path( '/inc/dynamic-actions.php' );

if ( ! function_exists( 'aetheris_setup' ) ) :
    function aetheris_setup() {
        load_theme_textdomain( 'aetheris', get_template_directory() . '/languages' );

        add_theme_support( 'automatic-feed-links' );
        add_theme_support( 'title-tag' );
        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );
        add_theme_support( 'customize-selective-refresh-widgets' );
        add_theme_support( 'align-wide' );
        add_theme_support( 'editor-styles' );
        
        register_nav_menus( array(
            'primary' => esc_html__( 'Aether Matrix Main Header', 'aetheris' ),
            'footer'  => esc_html__( 'Aether Matrix Main Footer', 'aetheris' ),
        ) );
    }
endif;
add_action( 'after_setup_theme', 'aetheris_setup' );

/**
 * Supercharged Critical Asset Enqueue Engine
 */
function aetheris_register_system_assets() {
    // Structural Stylesheet
    wp_enqueue_style( 'aetheris-meta', get_stylesheet_uri(), array(), '4.7.0' );
    wp_enqueue_style( 'aetheris-core', get_template_directory_uri() . '/assets/css/core.css', array(), '4.7.0' );
    wp_enqueue_style( 'aetheris-glow', get_template_directory_uri() . '/assets/css/dynamic-glow.css', array(), '4.7.0' );

    // External Interactive Scripts (GSAP Engine Array)
    wp_enqueue_script( 'gsap-core', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js', array(), '3.12.5', true );
    wp_enqueue_script( 'gsap-scroll', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js', array('gsap-core'), '3.12.5', true );
    
    // Core Execution Logic
    wp_enqueue_script( 'aetheris-runtime', get_template_directory_uri() . '/assets/js/aether-core.js', array('gsap-core', 'gsap-scroll'), '4.7.0', true );

    // Localization parameters to bind PHP/Customizer to Frontend JS directly if needed
    wp_localize_script( 'aetheris-runtime', 'AetherisSettings', array(
        'ajax_url' => admin_url( 'admin-ajax.php' ),
        'nonce'    => wp_create_nonce( 'aetheris_security_node' )
    ));
}
add_action( 'wp_enqueue_scripts', 'aetheris_register_system_assets' );
