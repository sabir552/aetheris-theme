<?php
/**
 * Performance Engineering & Strict Cleanups
 */

if ( ! defined( 'ABSPATH' ) ) exit;

// Remove aggressive standard WordPress footprint layers
remove_action( 'wp_head', 'wp_generator' );
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'wp_shortlink_wp_head' );

/**
 * Supercharged Adaptive Memory Allocation and Script Injector
 */
function aetheris_defer_parsing_of_js( $url ) {
    if ( is_user_logged_in() ) return $url; // Do not disrupt editing layers
    if ( FALSE === strpos( $url, '.js' ) ) return $url;
    if ( strpos( $url, 'jquery.min.js' ) ) return $url;
    return str_replace( ' src', ' defer src', $url );
}
add_filter( 'clean_url', 'aetheris_defer_parsing_of_js', 11 );
