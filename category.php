<?php 
// Modèle index.php est le modèle par défaut
// Si aucun modèle peut satisfaire la requête http, ce modèle s'affichera
?>


<?php get_header() ?>
<h1>category.php</h1>


        <section class="populaire">
            <div class="populaire__contenant">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <article class="populaire__article">

<div class="carte__contenu">
    <?php 
        if (has_post_thumbnail()) {
            // Afficher la petite image associée à l'article (image mise en avant)
            the_post_thumbnail('thumbnail'); }
    ?>
    <div class="carte__contenu--texte">
        <h2 class="carte__titre">
            <?php the_title(); ?>
        </h2>
        <p class="carte__description">
            <?php echo wp_trim_words(get_the_excerpt(), 80, "..."); ?>
        </p>

        <a class="carte__bouton carte__bouton--actif" href="<?php the_permalink();?>">Suite</a>

        
    </div>
</div>

</article>
                <?php endwhile; endif; ?>
            </div>
        </section>

        <?php get_footer() ?>

</body>
</html>