
<?php 
function categories_liste($parent_slug){
  // Récupérer la catégorie parente à partir de son slug
  $parent_category = get_category_by_slug($parent_slug);
  // Envoyer à la console un message pour verifier que la fonction est utilisée
  echo "<script>console.log('Parent category: " . $parent_category->name . "');</script>";
  //

  // Verifier si la catégorie parente existe
  if ($parent_category) {
    $parent_id = $parent_category->term_id;
  } else {
    echo "<script>console.log('La catégorie parente n\'existe pas.');</script>";
    return;
  }

  $sous_categories = get_categories(array(
    'parent' => $parent_id, // Filtrer par le parent "destination"
    'hide_empty' => true, // Ne pas afficher les catégories vides
    ));

    // Avoir tous les boutons de sous-catégorie dans un même conteneur
    echo '<div class="articles__boutons"></div>';
  // Vérifier si des sous-catégories existent
  if (!empty($sous_categories)) {
    echo "<script>console.log('Sous-catégories trouvées: " . json_encode($sous_categories) . "');</script>";
    // Boucle à travers les sous-catégories
    foreach ($sous_categories as $sous_categorie) {
      // Afficher le nom de la sous-catégorie

      echo "<script>console.log('Sous-catégorie: " . $sous_categorie->name .  "');</script>";
      // Créé un élément pour chaque sous-catégorie (bouton)
      
      echo '<button  data-category-id="' . esc_html($sous_categorie->term_id) . '" class="articles__bouton">' . esc_html($sous_categorie->name . "") . '</button>';

    }
  } else {
    echo "<script>console.log('Aucune sous-catégorie trouvée.');</script>";
  }







}
?>
