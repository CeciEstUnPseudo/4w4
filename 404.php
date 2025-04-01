<?php 
// Modèle 404.php est pour une page 404 (erreur)
// 
// Fini
?>


    <?php $erreur_404 = get_theme_mod('erreur_404', ''); ?>
    <?php $erreur_description = get_theme_mod('erreur_description', ''); ?>
    <?php $erreur_menu_titre = get_theme_mod("erreur_menu_titre", "") ?>

    <?php $erreur_bouton_retour = get_theme_mod("erreur_bouton_retour", "") ?>

    <?php $erreur_couleur_texte = get_theme_mod('erreur_couleur_texte', ''); ?>


    <!-- Variables extras pour l'examen intra -->
     <?php $erreur_background = get_theme_mod("erreur_background", "") ?>

    <style>
        .erreur_couleur{
            color: <?php echo $erreur_couleur_texte ?>;
        }
    </style>

<?php get_header() ?>
        <section class="erreur erreur_couleur" style="
    background-image: url('<?php echo $erreur_background; ?>')
    ">

          <h1 class="erreur__404"><?php echo $erreur_404 ?></h1>
          <p class="erreur__description"><?php echo $erreur_description ?></p>

          <!-- Retour à l'accueil (page front-page) -->
          <a href="<?php echo get_home_url() ?>" class="erreur__nav__accueil" style="background-color: <?php echo $erreur_couleur_texte ?>"><?php echo $erreur_bouton_retour ?></a>
          <div class="erreur__nav">
            <?php wp_nav_menu(array(
                        'menu'                 => '404',
                        'container'            => 'nav',
                        'container_class'      => 'erreur__menu',

            ));
          ?>

<!-- Give the border-bottom of this form a 2px solid and erreur_couleur_texte color -->
          <form 
          class="erreur__recherche" 
          role="search" 
          method="get"  
          action="<?php echo esc_url( home_url( '/' ) ); ?>"
          style="border-bottom: 2px solid <?php echo $erreur_couleur_texte ?>"
          style="color: <?php echo $erreur_couleur_texte ?>"
          >
            <!-- Select the ::placeholder and give it a style -->
            <input 
            class="erreur__recherche--input" 
            type="search" 
            placeholder="Rechercher..." 
            
            value="<?php echo get_search_query(); ?>" 
            name="s" 
            />

          </form>



          </div>
        </section>


<?php get_footer() ?>

</body>
</html>