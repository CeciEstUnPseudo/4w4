
<?php
        $resultats = $wp_query->found_posts;
        ?>

<?php get_header() ?>
<h1 class="category__titre">Categorie actuelle: <?php single_cat_title();?></h1>

<div class="category__description"><?php echo category_description(); ?></div>
<p class="search_qteResultats"><?php echo $resultats ?> résultats trouvés</p>
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