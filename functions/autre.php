
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



<?php 

// Affiche toutes les destinations selon le pays mis en slug
function afficherDestinations($pays){
  // Récupérer tous les articles de la catégorie "pays"

  // Écrire le pays dans la console
  echo '<script>console.log("Pays: ' . $pays . '")</script>';

  // Remplacez 'pays' par le slug de votre catégorie  
  $args = array(
    'post_type' => 'pays',
    'posts_per_page' => -1,
    'category_name' => $pays
  );
  $query = new WP_Query($args);

  // Boucle à travers les articles
  if ($query->have_posts()) {
    while ($query->have_posts()) {
      $query->the_post();
      ?>
      <div class="carte">
        <h2 class="carte__titre"><?php the_title(); ?></h2>
        <div class="carte__image">
          <?php the_post_thumbnail(); ?>
        </div>
        <div class="carte__texte">
          <?php the_excerpt(); ?>
        </div>
        <ul class="carte__categories">
          <?php categorie_par_destination('pays'); ?>
        </ul>
      </div>
      <?php
    }
    wp_reset_postdata();
  } else {
    echo '<p>Aucun article trouvé.</p>';
  }
}

function creer_vague($couleur, $class){

  // Mettre dans la console
  echo '<script>console.log("Couleur: ' . $couleur . '")</script>';

  // Créer une vague avec la couleur spécifiée
  echo '<svg class="' . $class . '" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="' . $couleur . '" fill-opacity="1" d="M0,128L60,160C120,192,240,256,360,245.3C480,235,600,149,720,128C840,107,960,149,1080,170.7C1200,192,1320,192,1380,192L1440,192L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path></svg>';
}

?>