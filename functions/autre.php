
<?php 

function categorie_par_destination($cat_a_retirer){
  // Récupérer toutes les catégories de l'article
  $categories = get_the_category();

  // Écrire dans la console

  // Boucle à travers les catégories
  foreach ($categories as $categorie) {
    // Vérifier si la catégorie n'est pas celle à retirer
    if ($categorie->slug !== $cat_a_retirer) {
      // Afficher la catégorie (+ un lien vers la page de la catégorie)
      echo '<li class="carte__categorie"><a href="' . esc_url(get_category_link($categorie->term_id)) . '">' . esc_html($categorie->name) . '</a></li>';
    }
  }
}

?>