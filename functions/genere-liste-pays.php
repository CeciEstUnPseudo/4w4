
<?php 
function pays_liste($parent_slug){
  // Récupérer la catégorie parente à partir de son slug
  $parent_category = get_category_by_slug($parent_slug);
  // Envoyer à la console un message pour verifier que la fonction est utilisée
  //
  // Verifier si la catégorie parente existe
  if ($parent_category) {
    $parent_id = $parent_category->term_id;
  } else {
    return;
  }


  $sous_categories = get_categories(array(
    'parent' => $parent_id, // Filtrer par le parent "pays"
    'hide_empty' => false, // Ne pas afficher les catégories vides
    ));
    // Avoir tous les boutons de sous-catégorie dans un même conteneur
    echo '<div class="articles__boutons"></div>';
  // Vérifier si des sous-catégories existent
  if (!empty($sous_categories)) {

    // Envoyer à la console un message pour verifier que la fonction est utilisée

    // Boucle à travers les sous-catégories
    foreach ($sous_categories as $sous_categorie) {
      // Afficher le nom de la sous-catégorie

      // Créé un élément pour chaque sous-catégorie (bouton)
      
      echo '<button  data-pays="' . esc_html($sous_categorie->name) . '" class="articles__bouton">' . esc_html($sous_categorie->name . "") . '</button>';

    }
  } else {
  }







}
?>
