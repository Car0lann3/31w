<?php get_header(); ?> 
<section class="site__main">
    <h1>Liste de cours du programme: TIM </h1>
    <hr>
    <div class="grid grid--3">
    <?php
    if (have_posts()):
        while(have_posts()) : the_post(); ?>
        <article class="tile">
            <h2 class="tile__title"><?php the_title(); ?></h2>
            <h2><?= the_field('titre'); ?></h2>
            <h3><?= the_field('sous_titre'); ?></h3>
            <p class="tile__detail"><?= the_field('resume'); ?></p>

            <?php $lien = " ... <a class='bouton' href='" 
                    . get_permalink()  
                    . "'>"
                    . substr(get_the_title(),0,8) 
                    ."</a>"; 
            ?>
    <p><?= wp_trim_words(get_the_content(), 20, $lien) ?></p>
    </article>


        <?php endwhile; ?>
    <?php endif; ?>  
    </div>  
</section>
<?php get_footer(); ?>