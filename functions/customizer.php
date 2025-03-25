<?php 
  function theme_31w_customize_register($wp_customize) {
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

  // Image background zone Hero

  $wp_customize->add_setting('hero_background', array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));

  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_background', array(
    'label' => __('Image en background', 'theme_31w'),
    'section' => 'hero_section',
  )));
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

  $wp_customize->add_setting('footer_mission', array(
  'default' => __('Notre mission', 'theme_31w'),
  'sanitize_callback' => 'sanitize_text_field'
  ));

  $wp_customize->add_control('footer_mission', array(
  'label' => __('Mission', 'theme_31w'),
  'section' => 'footer_section',
  'type' => 'text',
  ));

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

      $wp_customize->add_setting('erreur_logo1', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
      ));
    
      $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'erreur_logo1', array(
        'label' => __('Image du Logo (Reseau social 1)', 'theme_31w'),
        'section' => '404_section',
      )));

      $wp_customize->add_setting('erreur_logo2', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
      ));
    
      $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'erreur_logo2', array(
        'label' => __('Image du Logo (Reseau social 2)', 'theme_31w'),
        'section' => '404_section',
      )));

      $wp_customize->add_setting("erreur_logo3", array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
      ));
    
      $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'erreur_logo3', array(
        'label' => __('Image du Logo (Reseau social 3)', 'theme_31w'),
        'section' => '404_section',
      )));

      $wp_customize->add_setting("erreur_bouton_texte", array(
        "default" => __("Bouton retour en arriere", "theme_31w"),
        "sanitize_callback" => 'sanitize_text_field'
      ));

      $wp_customize->add_control("erreur_bouton_texte", array(
        "label" => __("Bouton retour en arriere", "theme_31w"),
        "section" => "404_section",
        "type" => "text",
      ));


  }
    

  add_action('customize_register', 'theme_31w_customize_register');
?>