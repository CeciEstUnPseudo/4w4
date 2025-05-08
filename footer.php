<footer>
    <?php $hero_text_color = get_theme_mod('hero_couleur', ''); ?>
    <?php $footer_destination = get_theme_mod("footer_destination", "Default") ?>
    <?php $footer_destination_lien = get_theme_mod("footer_destination_lien", "Default") ?>
    <?php $footer_destination_image = get_theme_mod("footer_destination_image", "Default") ?>
    <?php $footer_adresse = get_theme_mod("footer_adresse", "Default") ?>
    <?php $footer_lieu = get_theme_mod("footer_lieu", "Default") ?>
    <?php $footer_telephone = get_theme_mod("footer_telephone", "Default") ?>
    <?php $footer_couleur = get_theme_mod("footer_couleur", "Default") ?>
    <?php $footer_vague_opacite = get_theme_mod("footer_vague_opacite", "Default") ?>

    <?php $icone_1_img = get_theme_mod("icone_image1", "http://localhost:81/4w4/wp-content/uploads/2025/02/25231.png") ?>
    <?php $icone_1_url = get_theme_mod("icone_url1", "Default") ?>
    <?php $icone_2_img = get_theme_mod("icone_image2", "http://localhost:81/4w4/wp-content/uploads/2025/02/77364-instagram-icons-computer-black-logo-white-wine_600x600.png") ?>
    <?php $icone_2_url = get_theme_mod("icone_url2", "Default") ?>
    <?php $icone_3_img = get_theme_mod("icone_image3", "FacebookIconBlack.png") ?>
    <?php $icone_3_url = get_theme_mod("icone_url3", "Default") ?>
    <?php $icone_4_img = get_theme_mod("icone_image4", "5a2fe479cc45e43754640849.png") ?>
    <?php $icone_4_url = get_theme_mod("icone_url4", "Default") ?>

    <style>
        .hero_couleur {
            color: <?php echo $hero_text_color ?>;
        }

        .piedpage {
            background-color: <?php echo $footer_couleur ?>;
        }
    </style>

    <svg class="piedpage__vague" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="<?php echo $footer_couleur ?>" fill-opacity="<?php echo $footer_vague_opacite ?>" d="M0,288L48,272C96,256,192,224,288,197.3C384,171,480,149,576,165.3C672,181,768,235,864,250.7C960,267,1056,245,1152,250.7C1248,256,1344,288,1392,304L1440,320L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
    </svg>

    <div class="piedpage global">
        <section class="piedpage__s1">
            <div class="piedpage__s1__externe">
                <p class="piedpage__s1__externe__titre hero_couleur">Liste de Liens</p>
                <?php wp_nav_menu(array(
                    "menu" => "externe",
                    "container" => "nav",
                    "container-class" => "piedpage__s1__externe"
                )); ?>
            </div>
            <div class="piedpage__s1__externe liste2">
                <p class="piedpage__s1__externe__titre hero_couleur">Nos categories</p>
                <?php wp_nav_menu(array(
                    "menu" => "principal",
                    "container" => "nav",
                    "container-class" => "piedpage__s1__externe"
                )); ?>
            </div>
            <div class="piedpage__s1__adresse">
                <div class="piedpage__s1__adresse__coord hero_couleur">
                    <?php echo $footer_adresse ?> | <?php echo $footer_lieu ?> | <?php echo $footer_telephone ?>
                </div>
                <div class="piedpage__s1__adresse__recherche">
                    <?php get_search_form();   ?>
                </div>

                <div class="footer__icones-box">
                    <a href="<?php echo $icone_1_url ?>">
                        <img class="hero__icones" src="<?php echo $icone_1_img ?>" width="32" height="32">
                    </a>
                    <a href="<?php echo $icone_2_url ?>">
                        <img class="hero__icones" src="<?php echo $icone_2_img ?>" width="32" height="32">
                    </a>
                    <a href="<?php echo $icone_3_url ?>">
                        <img class="hero__icones" src="<?php echo $icone_3_img ?>" width="32" height="32">
                    </a>
                    <a href="<?php echo $icone_4_url ?>">
                        <img class="hero__icones" src="<?php echo $icone_4_img ?>" width="32" height="32">
                    </a>
                </div>
            </div>
            <div class="piedpage__s1__description hero_couleur">
                <p class="piedpage__s1__description__titre hero_couleur">Destination du jour!</p>
                <p class="piedpage__s1__description__texte" ><?php echo $footer_destination ?></p>
                <a href="<?php echo $footer_destination_lien ?>">
                    <img class="piedpage__s1__description__image" src="<?php echo $footer_destination_image ?>" alt="">
                </a>
            </div>
        </section>

    </div>
</footer>
<?php wp_footer() ?>