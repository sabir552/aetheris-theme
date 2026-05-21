<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <style>
        :root {
            --primary-accent: <?php echo esc_html( get_theme_mod( 'aetheris_neon_cyan_hex', '#06b6d4' ) ); ?>;
        }
    </style>
</head>

<body <?php body_class( 'bg-[#0a0a0c] text-white antialiased selection:bg-cyan-400 selection:text-black overflow-x-hidden' ); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site relative min-h-screen z-10">
    <?php if ( get_theme_mod( 'aetheris_particle_bg_toggle', 'enabled' ) === 'enabled' ) : ?>
        <div id="aetheris-canvas-ambient" class="fixed inset-0 pointer-events-none z-0 opacity-30"></div>
    <?php endif; ?>

    <header id="masthead" class="site-header fixed top-0 left-0 w-full z-50 backdrop-blur-xl bg-black/20 border-b border-white/5 transition-all duration-300">
        <div class="max-w-7xl mx-auto px-6 h-20 flex items-center justify-between">
            <div class="site-branding">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="text-2xl font-black tracking-widest text-gradient-futuristic uppercase">
                    <?php bloginfo( 'name' ); ?>
                </a>
            </div>

            <nav id="site-navigation" class="main-navigation hidden md:flex items-center space-x-8">
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'primary',
                    'container'      => false,
                    'menu_class'     => 'flex space-x-8 text-xs font-mono uppercase tracking-widest text-gray-400 hover:text-white',
                    'fallback_cb'    => false,
                ) );
                ?>
            </nav>

            <div class="action-node">
                <a href="#initialize" class="magnetic-target px-6 py-2.5 rounded-lg text-xs font-bold uppercase tracking-widest bg-white text-black border border-white hover:bg-transparent hover:text-white transition-all duration-300">
                    Core Config
                </a>
            </div>
        </div>
    </header>

    <main id="content" class="site-main relative z-10">
