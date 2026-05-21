<?php
/**
 * Aetheris Matrix Option System
 */

if ( ! defined( 'ABSPATH' ) ) exit;

function aetheris_register_customizer_nodes( $wp_customize ) {
    // 1. Futuristic Theme Engine Panel
    $wp_customize->add_panel( 'aetheris_engine_panel', array(
        'title'       => esc_html__( '🌌 AETHERIS CORE CONTROL', 'aetheris' ),
        'priority'    => 10,
        'description' => esc_html__( 'Manage quantum variables and customizer states directly.', 'aetheris' ),
    ));

    // Section: Branding/Styles
    $wp_customize->add_section( 'aetheris_visual_section', array(
        'title'    => esc_html__( 'Visual Matrix Settings', 'aetheris' ),
        'panel'    => 'aetheris_engine_panel',
        'priority' => 10,
    ));

    // Setting: Core Primary Accent
    $wp_customize->add_setting( 'aetheris_neon_cyan_hex', array(
        'default'           => '#06b6d4',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'         => 'postMessage',
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'aetheris_neon_cyan_hex_control', array(
        'label'    => esc_html__( 'Primary Quantum Glow Accent', 'aetheris' ),
        'section'  => 'aetheris_visual_section',
        'settings' => 'aetheris_neon_cyan_hex',
    )));

    // Setting: Ambient Particle Matrix Toggle
    $wp_customize->add_setting( 'aetheris_particle_bg_toggle', array(
        'default'           => 'enabled',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control( 'aetheris_particle_bg_toggle_control', array(
        'label'    => esc_html__( 'Hardware Interactivity (WebGL Engine)', 'aetheris' ),
        'section'  => 'aetheris_visual_section',
        'settings' => 'aetheris_particle_bg_toggle',
        'type'     => 'radio',
        'choices'  => array(
            'enabled'  => esc_html__( 'Active (Highly Animated)', 'aetheris' ),
            'disabled' => esc_html__( 'Null (Zero Overhead Processing)', 'aetheris' ),
        ),
    ));
}
add_action( 'customize_register', 'aetheris_register_customizer_nodes' );
