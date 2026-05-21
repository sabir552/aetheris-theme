<?php
/**
 * Component Layer: Immersive Quantum Hero Section
 */
?>
<section class="quantum-hero-container relative w-full min-h-screen flex items-center justify-center overflow-hidden bg-[#050507] py-32 px-6">
    <!-- Ambient Blur Matrices -->
    <div class="absolute top-1/4 left-1/4 w-[500px] h-[500px] bg-cyan-500/10 rounded-full blur-[150px] pointer-events-none animate-pulse"></div>
    <div class="absolute bottom-1/4 right-1/4 w-[600px] h-[600px] bg-purple-500/10 rounded-full blur-[180px] pointer-events-none"></div>

    <div class="max-w-5xl mx-auto text-center relative z-20">
        <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full border border-white/10 bg-white/5 backdrop-blur-md mb-8 transform -translate-y-10 opacity-0 entry-anim">
            <span class="w-2 h-2 rounded-full bg-cyan-400 animate-ping"></span>
            <span class="text-xs font-mono uppercase tracking-widest text-cyan-400">System Online // Version 4.7.0</span>
        </div>

        <h1 class="text-5xl md:text-8xl font-black tracking-tight text-white mb-8 leading-none transform -translate-y-10 opacity-0 entry-anim">
            The Future of Web <br>
            <span class="text-gradient-futuristic">Is Fully Universal.</span>
        </h1>

        <p class="max-w-2xl mx-auto text-gray-400 text-base md:text-xl leading-relaxed mb-12 transform -translate-y-10 opacity-0 entry-anim">
            Experience Aetheris: The ultimate convergence of blazing-fast execution mechanics, complex kinetic animations, and infinitely fluid grid layouts.
        </p>

        <div class="flex flex-col sm:flex-row items-center justify-center gap-6 transform -translate-y-10 opacity-0 entry-anim">
            <button class="magnetic-target w-full sm:w-auto px-8 py-4 bg-gradient-to-r from-cyan-500 to-purple-600 rounded-xl text-sm font-bold uppercase tracking-wider text-white shadow-[0_0_30px_rgba(6,182,212,0.3)] hover:shadow-[0_0_50px_rgba(6,182,212,0.6)] transition-all duration-300">
                Execute Blueprint
            </button>
            <button class="magnetic-target w-full sm:w-auto px-8 py-4 bg-white/5 border border-white/10 text-white rounded-xl text-sm font-bold uppercase tracking-wider hover:bg-white/10 transition-all duration-300 backdrop-blur-sm">
                Documentation Matrix
            </button>
        </div>
    </div>
</section>
