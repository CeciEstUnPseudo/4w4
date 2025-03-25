<?php 
// Modèle 404.php est pour une page 404 (erreur)
?>


    <?php $erreur_404 = get_theme_mod('erreur_404', ''); ?>
    <?php $erreur_description = get_theme_mod('erreur_description', ''); ?>
    <?php $erreur_logo1 = get_theme_mod('erreur_logo1', ''); ?>
    <?php $erreur_logo2 = get_theme_mod('erreur_logo2', ''); ?>
    <?php $erreur_logo3 = get_theme_mod('erreur_logo3', ''); ?>
    <?php $erreur_bouton_texte = get_theme_mod("erreur_bouton_texte", "") ?>

    <?php $erreur_couleur_texte = get_theme_mod('erreur_couleur_texte', ''); ?>

    <style>
        .erreur_couleur{
            color: <?php echo $erreur_couleur_texte ?>;
        }
    </style>

<?php get_header() ?>
        <section class="erreur__contenu erreur_couleur">
          <h2 class="erreur__404"><?php echo $erreur_404 ?></h2>
          <p class="erreur__description"><?php echo $erreur_description ?></p>
          <div class="erreur__bouton">
            <button class="erreur__bouton--retour erreur_couleur"><?php echo $erreur_bouton_texte ?></button>
          </div>
          <div class="erreur__logos">
            <img src="<?php echo $erreur_logo1 ?>" alt="logo1" class="erreur__logo">
            <img src="<?php echo $erreur_logo2 ?>" alt="logo2" class="erreur__logo">
            <img src="<?php echo $erreur_logo3 ?>" alt="logo3" class="erreur__logo">
          </div>
        </section>


<?php get_footer() ?>

</body>
</html>