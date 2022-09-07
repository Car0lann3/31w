<?php get_header(); ?> 
<section class="site__main">
    <div class="grid__hero">
        <img src="http://eddym73.sg-host.com/wp-content/uploads/.jpg" alt="">
        <div class="hero__detail">
            <h2>C Maisonneuve</h2>
            <h3>Programme du TIM</h3>
            <a class="hero_link" href="">Lire plus</a>
        </div>
    </div>
    <?php wp_nav_menu(array(
                'menu' => 'menu accueil',
                'container' => 'nav',
                'container_class' => '',

            ));
            ?>
    <?php wp_nav_menu(array(
                        'menu' => 'accueil',
                        'container' => 'nav',
                      
            )) ?>
    
    <article class="grid__accueil">
        <?php if(have_posts() ) : ?>
        <?php while(have_posts() ) : the_post(); ?>
        <article>
            <h4> <?= the_field('titre'); ?></h4>
            <p><?= the_field('resume'); ?></p>
            <?php 
            $lien = "<a class='button ' href=' ". get_permalink(). " '>  en savoir plus  </a>"; 
            echo $lien;
            ?>
        </article>
        <?php endwhile;?>
        <?php endif; ?>
    </article>
    <hr>




    <div class=" grid grid--3">
        <article class="blocs__horizontaux">
            <?php
            if (have_posts()):
                while(have_posts()) : the_post(); ?>
                <article class="tile">
                    <img class="tile__image-wrapper" src="http://eddym73.sg-host.com/wp-content/uploads/09/" alt="">
                    <div class="tile__detail">
                        <h2 class="tile__title"><a href="<?= get_permalink() ?>"><?php the_field('titre'); ?></a></h2>
                        <h3 class="tile__sous-title"><?php the_field('sous_titre'); ?></h3>
                        <p class="tile__description"><?php the_field('resume'); ?></p>
                        <a href="#" class="tile__link">Lire la suite</a>
                    </div>
                </article>
                <?php endwhile; ?>
                <?php endif; ?>  
            </article>  
    </div>

    <article class="grid__bloc">
        <img src="http://eddym73.sg-host.com/wp-content/uploads/09/cmaisonneuve.jpg" alt="">
        <div class="bloc__detail">
            <h3> Présentation globale</h3>
            <ul>
                <li> </li>
                <p> </p>
                <a class="bloc__link" href="">Lire plus</a>
            </ul>
        </div>
    </article>


        
    <h4>Plus d'information sur nos</h4>
    


</section>


<?php get_footer(); ?>