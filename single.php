<?php 
// Modèle single.php est le modèle pour une destination en particulier
?>


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
        </div>
        </section>


<?php get_footer() ?>

</body>
</html>