<?php
// Modèle search.php est le modèle pour afficher les resultats de recherche
// Si aucun modèle peut satisfaire la requête http, ce modèle s'affichera
?>
        <?php
        $resultats = $wp_query->found_posts;
        ?>

<?php get_header() ?>
<h1 class="search__titre">Recherche actuelle: <?php echo get_search_query();?></h1>
<p class="search_qteResultats"><?php echo $resultats ?> résultats trouvés</p>

<section class="populaire search__populaire">
    <div class="populaire__contenant search__contenant">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <!-- Count the amount of resultats -->
        
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