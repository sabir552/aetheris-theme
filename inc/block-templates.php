<?php
/**
 * Dynamic Production-Ready Custom React/Block Layout Engine Hooks
 */

if ( ! defined( 'ABSPATH' ) ) exit;

function aetheris_register_custom_gutenberg_blocks() {
    if ( ! function_exists( 'register_block_type' ) ) return;

    // Registers our localized dynamic script wrapper array
    wp_register_script(
        'aetheris-blocks-editor',
        get_template_directory_uri() . '/assets/js/blocks.js',
        array( 'wp-blocks', 'wp-element', 'wp-editor', 'wp-components' ),
        '4.7.0'
    );

    register_block_type( 'aetheris/quantum-hero', array(
        'editor_script' => 'aetheris-blocks-editor',
        'render_callback' => 'aetheris_render_quantum_hero_node'
    ));
}
add_action( 'init', 'aetheris_register_custom_gutenberg_blocks' );

/**
 * Server-Side Callback for the Ultimate Quantum Hero Component
 */
function aetheris_render_quantum_hero_node( $attributes ) {
    ob_start();
    get_template_part( 'template-parts/component', 'hero' );
    return ob_get_clean();
}
