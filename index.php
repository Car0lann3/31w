<?php get_header(); ?> 
<div class="grid grid---3">
    <h1>Maisonneuve</h1>
    <article class="tile">
        <?php
        if (have_posts()):
            while(have_posts()) : the_post(); ?>
            <div>
                <h2><?php the_title(); ?></h2>
                <p><?php the_field('resume')?></p>
                <p><?php wp_trim_words(get_the_content(), 10) ?></p>
            </div>

            <?php endwhile; ?>
        <?php endif; ?>    
    </article>

</div>
<?php get_footer(); ?>