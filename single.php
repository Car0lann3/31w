<?php get_header(); ?> 
<section class="site__main">
<h1></h1>

<article class="grid">
<?php
if (have_posts()):
    while(have_posts()) : the_post(); ?>
        <h2><?php the_title(); ?></h2>
      <p><?php wp_trim_words(get_the_content(), 500) ?></p>
        <?php
          $titre = get_the_title();
          $sigle = substr($titre,0,8);
          $heure = substr($titre,-6);

        ?>
        <code class="sigle"><?= $sigle ?></code>
        <code class="nb-heure"><?= $heure ?></code>



        <a class="link" href="">Voir plus</a>

    <?php endwhile; ?>
<?php endif; ?>    
</article>
</section>

<?php get_footer(); ?>