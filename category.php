<div?php
// Modèle index.php est le modèle par défaut
// Si aucun modèle peut satisfaire la requête http, ce modèle s'affichera
?>


<?php get_header() ?>
<h1 class="category__titre">Categorie actuelle: <?php single_cat_title();?></h1>

<div class="category__description"><?php echo category_description(); ?></div>
<section class="populaire">
    <div class="populaire__contenant"></div>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article class="populaire__article">

                <div class="carte__contenu">
                    <?php get_template_part("gabarit/carte") ?>
                </div>

            </article>
    <?php endwhile;
    endif; ?>
    </div>
</section>

<?php get_footer() ?>

</body>

</html>