<?php
if (has_post_thumbnail()) {
  // Afficher la petite image associée à l'article (image mise en avant)
  the_post_thumbnail('thumbnail');
}
?>
<div class="carte__contenu--texte">
  <h2 class="carte__titre">
    <?php the_title(); ?>
  </h2>
  <p class="carte__description">
    <?php echo wp_trim_words(get_the_excerpt(), 30, "..."); ?>
  </p>

  <a class="carte__bouton carte__bouton--actif" href="<?php the_permalink(); ?>">Suite</a>


</div>