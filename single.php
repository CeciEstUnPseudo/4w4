<?php 
// Modèle single.php est le modèle pour une destination en particulier
?>

<?php $single_auteur = get_theme_mod('hero_auteur', ''); ?>
<?php $date_publication = get_the_date("j F Y à H:i"); ?>


<?php get_header() ?>
        <section class="single__contenu">
        <div class="single__contenu--image"><?php   the_post_thumbnail('large'); ?></div>
        <div class="single__contenu__texte">
                <h2 class="single__contenu__texte--titre">
                <?php the_title(); ?>
                </h2>
                <h3 class="single__contenu--soustitre">
                        Informations générales sur <?php the_title(); ?>
                </h3>

                <div class="single__contenu__texte--texte">
                        <?php the_content(); ?>
                </div>

                <h3 class="single__contenu--soustitre">
                        Informations supplémentaires sur <?php the_title(); ?>
                </h3>
                <div class="single__contenu__infoSup">
                        <p>Temp. Min: <?php echo the_field("temperature_minimum"); ?> °C</p>
                        <p>Temp. Max: <?php echo the_field("temperature_maximum"); ?> °C</p>
                </div>

                <div class="single__categories">
                        <?php
                        $categories = get_the_category();
                        if ($categories) {
                                foreach ($categories as $categorie) {
                                        echo '<a href="' . esc_url(get_category_link($categorie->term_id)) . '">' . esc_html($categorie->name) . '</a> ';
                                }
                        }
                        ?>
                </div>

                <div class="single__informations">
                        <p class="single__auteur">Auteur: <?php echo $single_auteur; ?></p>
                        <p class="single__publication"> <?php echo $date_publication; ?></p>
                        <!-- Liste des catégories de cette page -->
                </div>

        </div>
        </section>


<?php get_footer() ?>

</body>
</html>