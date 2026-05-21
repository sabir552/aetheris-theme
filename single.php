<?php
/**
 * Single Immersive Processing Layout Template
 */
get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" class="w-full min-h-screen py-32 px-6">
        <div class="max-w-3xl mx-auto">
            <header class="text-center mb-16">
                <div class="inline-block text-xs font-mono text-cyan-400 border border-cyan-400/20 px-3 py-1 rounded-full mb-6 uppercase tracking-widest">
                    Data Stream Node // Single
                </div>
                <h1 class="text-4xl md:text-6xl font-black tracking-tight text-white mb-6 leading-tight"><?php the_title(); ?></h1>
                <div class="flex items-center justify-center gap-4 text-xs font-mono text-gray-400">
                    <span>By <?php the_author(); ?></span>
                    <span>/</span>
                    <span><?php echo get_the_date(); ?></span>
                </div>
            </header>

            <?php if ( has_post_thumbnail() ) : ?>
                <div class="w-full h-[450px] rounded-3xl overflow-hidden glass-panel p-2 mb-16">
                    <?php the_post_thumbnail('full', array('class' => 'w-full h-full object-cover rounded-2xl')); ?>
                </div>
            <?php endif; ?>

            <div class="prose prose-invert max-w-none text-gray-300 text-lg leading-relaxed space-y-8 select-text">
                <?php the_content(); ?>
            </div>
            
            <footer class="mt-16 pt-8 border-t border-white/5 flex items-center justify-between text-xs font-mono text-gray-400">
                <span>Category: <?php the_category(', '); ?></span>
                <span>Tags: <?php the_tags('', ', '); ?></span>
            </footer>
        </div>
    </article>
<?php endwhile; ?>

<?php get_footer(); ?>
