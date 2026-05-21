<?php
/**
 * Complete Matrix Kinetic Footer Block
 */
?>
    </main>

    <footer id="colophon" class="site-footer bg-[#030304] border-t border-white/5 py-16 px-6 relative z-10 overflow-hidden">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-12 relative z-20">
            <div class="md:col-span-2">
                <span class="text-xl font-black tracking-widest text-gradient-futuristic uppercase mb-6 block"><?php bloginfo('name'); ?></span>
                <p class="text-gray-400 text-sm max-w-sm leading-relaxed">
                    The absolute standard of next-generation performance paradigms. Decentralized, modular, hyper-optimized.
                </p>
            </div>
            <div>
                <span class="text-xs font-mono text-cyan-400 uppercase tracking-widest mb-4 block">System Endpoints</span>
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'footer',
                    'container'      => false,
                    'menu_class'     => 'space-y-3 text-sm text-gray-400 hover:text-white transition-colors',
                    'fallback_cb'    => false,
                ) );
                ?>
            </div>
            <div>
                <span class="text-xs font-mono text-purple-400 uppercase tracking-widest mb-4 block">Quantum Signals</span>
                <p class="text-xs text-gray-500 font-mono leading-relaxed">
                    Latency: Localized Stack<br>
                    Data Node: Decentralized WordPress Array<br>
                    Status: Fully Responsive
                </p>
            </div>
        </div>
        <div class="max-w-7xl mx-auto mt-16 pt-8 border-t border-white/5 flex flex-col md:flex-row items-center justify-between text-xs font-mono text-gray-500 gap-4 relative z-20">
            <p>&copy; <?php echo date('Y'); ?> Aetheris Engine Layer. All pipelines structural.</p>
            <p>Designed by World Top-Tier Experts</p>
        </div>
    </footer>
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
