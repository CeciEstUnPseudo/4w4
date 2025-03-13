<footer>

<style>
        .hero_couleur{
            color: <?php echo $hero_text_color ?>;
        }
    </style>

<?php $hero_text_color = get_theme_mod('hero_couleur', ''); ?>
<?php $footer_mission = get_theme_mod("footer_mission", "Default" ) ?>
<?php $footer_adresse = get_theme_mod("footer_adresse", "Default" ) ?>
<?php $footer_lieu = get_theme_mod("footer_lieu", "Default" ) ?>
<?php $footer_telephone = get_theme_mod("footer_telephone", "Default" ) ?>

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

                <div class="hero__icones-box">
                <img class="hero__icones" src="https://s2.svgbox.net/social.svg?ic=facebook&color=000" width="32" height="32">
                <img class="hero__icones" src="https://s2.svgbox.net/social.svg?ic=instagram&color=000" width="32" height="32">
            </div>
            </div>
            <div class="piedpage__s1__description hero_couleur">
                <p class="piedpage__s1__description__titre hero_couleur">Qui sommes-nous?</p>
                <?php echo $footer_mission ?>
            </div>
        </section>

    </div>
</footer>
<?php  wp_footer() ?>