<?php
/*
Template Name: Template Pays
*/
?>
<?php get_header(); ?>

<?php $img_galerie_1 = get_theme_mod("img_galerie_1", "") ?>
<?php $img_galerie_2 = get_theme_mod("img_galerie_2", "") ?>
<?php $img_galerie_3 = get_theme_mod("img_galerie_3", "") ?>
<?php $img_galerie_4 = get_theme_mod("img_galerie_4", "") ?>
<?php $img_galerie_5 = get_theme_mod("img_galerie_5", "") ?>

<section class="tempPays__intro">
  <h1 class="tempPays__intro__titre">Pays</h1>
  <div class="tempPays__intro__texte--box">
    <p class="tempPays__intro__texte">Plongez au cœur de l’aventure et laissez-vous emporter par l’appel du large ! Notre planète regorge de destinations incroyables, chacune promettant une expérience unique et mémorable. Que vous rêviez de plages idylliques baignées de soleil, de sommets majestueux invitant à la randonnée, de villes vibrantes d’histoire et de modernité, ou de rencontres culturelles authentiques, il y a un pays fait pour vous.</p>
  </div>
  <section class="tempPays__intro__galerie">
    <div class="tempPays__intro__galerie-topRow">
    <img src="<?php echo $img_galerie_1 ?>" alt="" class="tempPays__galerie__image">
      <img src="<?php echo $img_galerie_2 ?>" alt="" class="tempPays__galerie__image">
      <img src="<?php echo $img_galerie_3 ?>" alt="" class="tempPays__galerie__image">
    </div>
    <div class="tempPays__intro__galerie-bottomRow">
      <img src="<?php echo $img_galerie_4 ?>" alt="" class="tempPays__galerie__image">
      <img src="<?php echo $img_galerie_5 ?>" alt="" class="tempPays__galerie__image">
    </div>
  </section>
</section>


<!-- Utilisation de la fonction Rest API (afficherPays) fait dans le dossier autre.php -->


<section class="tempPays__restAPI">
  <div class="tempPays__restAPI__vagueTop">
    <?php creer_vague("#93c47d", "tempPays__vague") ?>

  </div>
  <div class="tempPays__restAPI__contenu">
  <?php pays_liste("pays"); ?>
        <section class="tempPays__restAPI__pays">
            <h2 class="tempPays__paysSelect">France</h2>
            <div class="tempPays__destinations">
            </div>
        </section>
  </div>
</section>













<?php get_footer(); ?>