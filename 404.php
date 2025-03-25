<?php 
// Modèle 404.php est pour une page 404 (erreur)
?>


    <?php $erreur_404 = get_theme_mod('erreur_404', ''); ?>
    <?php $erreur_description = get_theme_mod('erreur_description', ''); ?>
    <?php $erreur_logo1 = get_theme_mod('erreur_logo1', ''); ?>
    <?php $erreur_logo2 = get_theme_mod('erreur_logo2', ''); ?>
    <?php $erreur_logo3 = get_theme_mod('erreur_logo3', ''); ?>

    <?php $erreur_logo1_lien = get_theme_mod('erreur_logo1_lien', ''); ?>
    <?php $erreur_logo2_lien = get_theme_mod('erreur_logo2_lien', ''); ?>
    <?php $erreur_logo3_lien = get_theme_mod('erreur_logo3_lien', ''); ?>
    <?php $erreur_menu_titre = get_theme_mod("erreur_menu_titre", "") ?>

    <?php $erreur_couleur_texte = get_theme_mod('erreur_couleur_texte', ''); ?>

    <style>
        .erreur_couleur{
            color: <?php echo $erreur_couleur_texte ?>;
        }
    </style>

<?php get_header() ?>
        <section class="erreur erreur_couleur">
          <h1 class="erreur__404"><?php echo $erreur_404 ?></h1>
          <p class="erreur__description"><?php echo $erreur_description ?></p>

          <p class="erreur__nav__titre"><?php echo $erreur_menu_titre ?></p>
          <div class="erreur__nav">
            <?php wp_nav_menu(array(
                        'menu'                 => '404',
                        'container'            => 'nav',
                        'container_class'      => 'erreur__menu',
            ));
          ?>


          </div>
          <div class="erreur__logos">
            <!-- Chaque balise est dans un a href pour que, une fois cliqué, nous soyons amener à la page web -->
            <a href="<?php echo $erreur_logo1_lien ?>">
              <img src="<?php echo $erreur_logo1 ?>" alt="logo3" class="erreur__logos__logo--3">
            </a>
            <a href="<?php echo $erreur_logo2_lien ?>">
              <img src="<?php echo $erreur_logo2 ?>" alt="logo3" class="erreur__logos__logo--3">
            </a>
            <a href="<?php echo $erreur_logo3_lien ?>">
              <img src="<?php echo $erreur_logo3 ?>" alt="logo3" class="erreur__logos__logo--3">
            </a>
          </div>
        </section>


<?php get_footer() ?>

</body>
</html>