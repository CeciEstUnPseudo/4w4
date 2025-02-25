<?php 
// Modèle index.php est le modèle par défaut
// Si aucun modèle peut satisfaire la requête http, ce modèle s'affichera
?>


<?php get_header() ?>
<h1>single.php</h1>
            <h2 class="galerie__titre">Nos destinations favorites</h2>

                <div class="carte">
                        <img src="\4w4\wp-content\themes\TP1\images/img1.jpg" alt="Destination1" class="carte__img">
                </div>
                <div class="carte">
                        <img src="\4w4\wp-content\themes\TP1\images/img2.jpg" alt="Destination2" class="carte__img">
                </div>
                <div class="carte">
                        <img src="\4w4\wp-content\themes\TP1\images/img3.jpg" alt="Destination3" class="carte__img">
                </div>
                <div class="carte">
                        <img src="\4w4\wp-content\themes\TP1\images/img4.jpg" alt="Destination4" class="carte__img">
                </div>
                <div class="carte">
                        <img src="\4w4\wp-content\themes\TP1\images/img5.jpg" alt="Destination5" class="carte__img">
                </div>
                <div class="carte">
                        <img src="\4w4\wp-content\themes\TP1\images/img6.jpg" alt="Destination6" class="carte__img">
                </div>
                <div class="carte">
                        <img src="\4w4\wp-content\themes\TP1\images/img7.jpg" alt="Destination7" class="carte__img">
                </div>
                <div class="carte">
                        <img src="\4w4\wp-content\themes\TP1\images/img8.jpg" alt="Destination8" class="carte__img">
                </div>
                <div class="carte">
                        <img src="\4w4\wp-content\themes\TP1\images/img9.jpg" alt="Destination9" class="carte__img">
                </div>
                <div class="carte">
                        <img src="\4w4\wp-content\themes\TP1\images/img10.jpg" alt="Destination10" class="carte__img">
                </div>
        </section> -->

        <section class="populaire">ed
            <div class="populaire__contenant">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <article class="populaire__article">

<div class="carte__contenu">
.ca
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

        
    </div>
</div>

</article>
                <?php endwhile; endif; ?>
            </div>
        </section>

        <?php get_footer() ?>

</body>
</html>