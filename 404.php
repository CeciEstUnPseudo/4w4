<?php 
// Modèle 404.php est pour une page 404 (erreur)
?>


    <?php $erreur_404 = get_theme_mod('erreur_404', ''); ?>
    <?php $erreur_description = get_theme_mod('erreur_description', ''); ?>
    <?php $erreur_logo1 = get_theme_mod('erreur_logo1', ''); ?>
    <?php $erreur_logo2 = get_theme_mod('erreur_logo2', ''); ?>
    <?php $erreur_logo3 = get_theme_mod('erreur_logo3', ''); ?>
    <?php $erreur_couleur_texte = get_theme_mod('erreur_couleur_texte', ''); ?>
    <?php $erreur_bouton_texte = get_theme_mod("erreur_bouton_texte", "") ?>


<h2>404.php</h2>
<?php get_header() ?>
        <section class="erreur__contenu">
          <h2 class="erreur__404">ERREUR 404</h2>
          <p class="erreur__description"><?php echo $erreur_description ?></p>

          <p class="erreur__message">
            
          </p>
          <div class="erreur__bouton">
            <button class="erreur__bouton--retour">Retour à l'accueil</button>
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