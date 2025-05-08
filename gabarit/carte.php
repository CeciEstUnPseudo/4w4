<?php
if (has_post_thumbnail()) {
  // Afficher la petite image associée à l'article (image mise en avant)
  the_post_thumbnail('thumbnail');
}

$cat_a_retirer = "aucune";
if (is_front_page()) {
  // Changer cat_a_retirer pour "populaire"
  $cat_a_retirer = "populaire";  
  // Écrire dans la console
} else {
}
?>


<div class="carte__contenu--texte">
  <h2 class="carte__titre">
    <?php the_title(); ?>
  </h2>
  <p class="carte__description">
    <?php echo wp_trim_words(get_the_excerpt(), 20, "..."); ?>
  </p>

  <p>Temp. Min: <?php echo the_field("temperature_minimum"); ?> °C</p>
  <p>Temp. Max: <?php echo the_field("temperature_maximum"); ?> °C</p>


  <a class="carte__bouton carte__bouton--actif" href="<?php the_permalink(); ?>">Suite</a>

  <div class="carte__categories">
    
  <!-- Le parametre est $cat_a_retirer -->
    <?php categorie_par_destination($cat_a_retirer ); ?>
  </div>

  <!-- "the_category" doit maintenant être categorie_par_destination($cat_a_retirer). Une fonction à ajouter dans le fichier functions -->
</div>