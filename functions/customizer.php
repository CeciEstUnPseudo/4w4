<?php
function theme_31w_customize_register($wp_customize)
{

  $wp_customize->add_section('icones_section', array(
    'title' => __('Icones Customisation', 'theme_31w'),
    'priority' => 29,
  ));

$wp_customize->add_setting('icone_image1', array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));

  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'icone_image1', array(
    'label' => __('Image Icone 1', 'theme_31w'),
    'section' => 'icones_section',
  )));

  $wp_customize->add_setting('icone_url1', array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));

  $wp_customize->add_control('icone_url1', array(
    'label' => __('Icone 1 URL', 'theme_31w'),
    'section' => 'icones_section',
    'type' => 'text',
  ));

  $wp_customize->add_setting('icone_image2', array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));

  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'icone_image2', array(
    'label' => __('Image Icone 2', 'theme_31w'),
    'section' => 'icones_section',
  )));

  $wp_customize->add_setting('icone_url2', array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));

  $wp_customize->add_control('icone_url2', array(
    'label' => __('Icone 2 URL', 'theme_31w'),
    'section' => 'icones_section',
    'type' => 'text',
  ));

  $wp_customize->add_setting('icone_image3', array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));

  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'icone_image3', array(
    'label' => __('Image Icone 3', 'theme_31w'),
    'section' => 'icones_section',
  )));

  $wp_customize->add_setting('icone_url3', array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));

  $wp_customize->add_control('icone_url3', array(
    'label' => __('Icone 3 URL', 'theme_31w'),
    'section' => 'icones_section',
    'type' => 'text',
  ));

  $wp_customize->add_setting('icone_image4', array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));

  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'icone_image4', array(
    'label' => __('Image Icone 4', 'theme_31w'),
    'section' => 'icones_section',
  )));

  $wp_customize->add_setting('icone_url4', array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));

  $wp_customize->add_control('icone_url4', array(
    'label' => __('Icone 4 URL', 'theme_31w'),
    'section' => 'icones_section',
    'type' => 'text',
  ));

  // Le code pour ajouter des sections, des réglages et des contrôles ira ici.
  $wp_customize->add_section('hero_section', array(
    'title' => __('Hero Customisation', 'theme_31w'),
    'priority' => 30,
  ));

  $wp_customize->add_setting('hero_auteur', array(
    'default' => __("Nom de l'auteur", 'theme_31w'),
    'sanitize_callback' => 'sanitize_text_field'
  ));

  $wp_customize->add_control('hero_auteur', array(
    'label' => __('Auteur', 'theme_31w'),
    'section' => 'hero_section',
    'type' => 'text',
  ));

  $wp_customize->add_setting('hero_mail', array(
    'default' => __('Adresse Mail', 'theme_31w'),
    'sanitize_callback' => 'sanitize_text_field'
  ));

  $wp_customize->add_control('hero_mail', array(
    'label' => __('Hero Email', 'theme_31w'),
    'section' => 'hero_section',
    'type' => 'text',
  ));

  $wp_customize->add_setting('hero_lieu', array(
    'default' => __('Adresse Physique (lieu)', 'theme_31w'),
    'sanitize_callback' => 'sanitize_text_field'
  ));

  $wp_customize->add_control('hero_lieu', array(
    'label' => __('Hero Lieu', 'theme_31w'),
    'section' => 'hero_section',
    'type' => 'text',
  ));

  $wp_customize->add_setting('hero_telephone', array(
    'default' => __('Numéro de telephone', 'theme_31w'),
    'sanitize_callback' => 'sanitize_text_field'
  ));

  $wp_customize->add_control('hero_telephone', array(
    'label' => __('Hero Telephone', 'theme_31w'),
    'section' => 'hero_section',
    'type' => 'text',
  ));


  // Icones (dans Hero car la création d'une nouvelle section "icones_section" met une erreur)







  $wp_customize->add_setting('hero_tailleCarrousel', array(
    'default' => __('Entrez une valeur numérique', 'theme_31w'),
    'sanitize_callback' => 'sanitize_text_field'
  ));

  $wp_customize->add_control('hero_tailleCarrousel', array(
    'label' => __('Hero Taille Carrousel (doit refresh la page manuellement)', 'theme_31w'),
    'section' => 'hero_section',
    'type' => 'number',
  ));

  $hero_tailleCarrousel = get_theme_mod('hero_tailleCarrousel', '1');

  // Image background zone Hero

  for ($i = 0; $i < $hero_tailleCarrousel; $i++) {
    $wp_customize->add_setting('hero_background_' . $i, array(
      'default' => '',
      'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_background_' . $i, array(
      'label' => __('Image en background_' . ($i + 1), 'theme_31w'),
      'section' => 'hero_section',
    )));
  }

  //

  // Couleur du texte

  $wp_customize->add_setting('hero_couleur', array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));

  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'hero_couleur', array(
    'label' => __('Couleur du texte', 'theme_31w'),
    'section' => 'hero_section',
  )));
  //


  // Section Footer

  $wp_customize->add_section('footer_section', array(
    'title' => __('Footer Customisation', 'theme_31w'),
    'priority' => 30,
  ));

  $wp_customize->add_setting('footer_destination', array(
    'default' => __('Texte Destination', 'theme_31w'),
    'sanitize_callback' => 'sanitize_text_field'
  ));

  $wp_customize->add_control('footer_destination', array(
    'label' => __('Footer Texte Destination', 'theme_31w'),
    'section' => 'footer_section',
    'type' => 'text',
  ));

  $wp_customize->add_setting('footer_destination_lien', array(
    'default' => __('Destination Lien', 'theme_31w'),
    'sanitize_callback' => 'sanitize_text_field'
  ));

  $wp_customize->add_control('footer_destination_lien', array(
    'label' => __('Footer Destination Lien', 'theme_31w'),
    'section' => 'footer_section',
    'type' => 'text',
  ));

  $wp_customize->add_setting('footer_destination_image', array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));

  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'footer_destination_image', array(
    'label' => __('Image de destination', 'theme_31w'),
    'section' => 'footer_section',
  )));

  $wp_customize->add_setting('footer_adresse', array(
    'default' => __('Adresse', 'theme_31w'),
    'sanitize_callback' => 'sanitize_text_field'
  ));

  $wp_customize->add_control('footer_adresse', array(
    'label' => __('Adresse Mail', 'theme_31w'),
    'section' => 'footer_section',
    'type' => 'text',
  ));

  $wp_customize->add_setting('footer_lieu', array(
    'default' => __('Lieu physique', 'theme_31w'),
    'sanitize_callback' => 'sanitize_text_field'
  ));

  $wp_customize->add_control('footer_lieu', array(
    'label' => __('Lieu physique', 'theme_31w'),
    'section' => 'footer_section',
    'type' => 'text',
  ));

  $wp_customize->add_setting('footer_telephone', array(
    'default' => __('Numéro de téléphone', 'theme_31w'),
    'sanitize_callback' => 'sanitize_text_field'
  ));

  $wp_customize->add_control('footer_telephone', array(
    'label' => __('Numéro de téléphone', 'theme_31w'),
    'section' => 'footer_section',
    'type' => 'text',
  ));

  $wp_customize->add_setting('footer_couleur', array(
    'default' => __('Vague', 'theme_31w'),
    'sanitize_callback' => 'sanitize_text_field'
  ));

  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'footer_couleur', array(
    'label' => __('Couleur du footer', 'theme_31w'),
    'section' => 'footer_section',
  )));

  $wp_customize->add_setting('footer_vague_opacite', array(
    'default' => __('Vague Opacite', 'theme_31w'),
    'sanitize_callback' => 'sanitize_text_field'
  ));

  $wp_customize->add_control('footer_vague_opacite', array(
    'label' => __('Opacité de la vague', 'theme_31w'),
    'section' => 'footer_section',
    'type' => 'number',
  ));




  // Section 404

  $wp_customize->add_section("404_section", array(
    "title" => __("404 Customisation", "theme_31w"),
    "priority" => 30,
  ));

  $wp_customize->add_setting("erreur_404", array(
    "default" => __("Erreur 404 (Message)", "theme_31w"),
    "sanitize_callback" => "sanitize_text_field"
  ));

  $wp_customize->add_control("erreur_404", array(
    "label" => __("Erreur 404", "theme_31w"),
    "section" => "404_section",
    "type" => "text",
  ));

  $wp_customize->add_setting("erreur_description", array(
    "default" => __("Description de l'erreur", "theme_31w"),
    "sanitize_callback" => 'sanitize_text_field'
  ));

  $wp_customize->add_control("erreur_description", array(
    "label" => __("Description de l'erreur", "theme_31w"),
    "section" => "404_section",
    "type" => "text",
  ));

  $wp_customize->add_setting("erreur_bouton_retour", array(
    "default" => __("Texte du bouton", "theme_31w"),
    "sanitize_callback" => 'sanitize_text_field'
  ));

  $wp_customize->add_control("erreur_bouton_retour", array(
    "label" => __("Texte du bouton", "theme_31w"),
    "section" => "404_section",
    "type" => "text",
  ));

  $wp_customize->add_setting('erreur_couleur_texte', array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));

  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'erreur_couleur_texte', array(
    'label' => __('Couleur du texte', 'theme_31w'),
    'section' => '404_section',
  )));




  // 404 Image d'arriere plan
  $wp_customize->add_setting('erreur_background', array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));

  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'erreur_background', array(
    'label' => __('Image en background', 'theme_31w'),
    'section' => '404_section',
  )));
}




add_action('customize_register', 'theme_31w_customize_register');
