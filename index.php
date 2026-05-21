<?php
/**
 * Adaptive Structural Layout Matrix (Dynamic Grid Stream)
 */
get_header(); ?>

<div class="w-full min-h-screen py-32 px-6 max-w-7xl mx-auto">
    <?php if ( have_posts() ) : ?>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <?php while ( have_posts() ) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class('glass-panel rounded-2xl overflow-hidden p-6 hover:border-cyan-500/40 transition-all duration-300 flex flex-col group'); ?>>
                    <?php if ( has_post_thumbnail() ) : ?>
                        <div class="w-full h-48 overflow-hidden rounded-xl mb-6 relative">
                            <?php the_post_thumbnail('large', array('class' => 'w-full h-full object-cover group-hover:scale-105 transition-transform duration-500')); ?>
                        </div>
                    <?php endif; ?>
                    
                    <span class="text-xs font-mono text-cyan-400 uppercase tracking-widest mb-3"><?php echo get_the_date(); ?></span>
                    <h2 class="text-2xl font-bold mb-4 tracking-tight text-white hover:text-cyan-400 transition-colors">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h2>
                    <div class="text-gray-400 text-sm leading-relaxed mb-6 flex-grow">
                        <?php the_excerpt(); ?>
                    </div>
                    <a href="<?php the_permalink(); ?>" class="text-xs font-mono uppercase tracking-widest text-white group-hover:text-cyan-400 flex items-center gap-2 transition-colors">
                        Access Post Matrix &rarr;
                    </a>
                </article>
            <?php endwhile; ?>
        </div>
        
        <div class="mt-16 flex items-center justify-between font-mono text-sm text-gray-400 border-t border-white/5 pt-8">
            <div><?php previous_posts_link('// Previous Stream'); ?></div>
            <div><?php next_posts_link('Next Stream //'); ?></div>
        </div>
    <?php else : ?>
        <div class="text-center py-20">
            <p class="text-xl text-gray-500 font-mono">No data processing pipeline matches the current request.</p>
        </div>
    <?php endif; ?>
</div>

<?php get_footer(); ?>
