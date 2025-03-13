<footer>

<?php $footer_mission = get_theme_mod("footer_mission", "Default" ) ?>
    <div class="piedpage global">
        <section class="piedpage__s1">
            <div class="piedpage__s1__externe">
                <p class="piedpage__s1__externe__titre">Liste de Liens</p>
                <?php wp_nav_menu(array(
                    "menu" => "externe",
                    "container" => "nav",
                    "container-class" => "piedpage__s1__externe"
                )); ?>
            </div>
            <div class="piedpage__s1__externe liste2">
                <p class="piedpage__s1__externe__titre">Nos categories</p>
                <?php wp_nav_menu(array(
                    "menu" => "principal",
                    "container" => "nav",
                    "container-class" => "piedpage__s1__externe"
                )); ?>
            </div>
            <div class="piedpage__s1__adresse">
                <div class="piedpage__s1__adresse__coord">
                info@cmaisonneuve.qc.ca | 800, rue Sherbrooke, Montréal | 514-254-7131
                </div>
                <div class="piedpage__s1__adresse__recherche">
                    <?php get_search_form();   ?>
                </div>

                <div class="hero__icones-box">
                <img class="hero__icones" src="https://s2.svgbox.net/social.svg?ic=facebook&color=000" width="32" height="32">
                <img class="hero__icones" src="https://s2.svgbox.net/social.svg?ic=instagram&color=000" width="32" height="32">
            </div>
            </div>
            <div class="piedpage__s1__description">
                <p class="piedpage__s1__description__titre">Qui sommes-nous?</p>
                Sur Site de Voyage.com.Inc.standard, vous trouvez plein de destinations pour vos vacances, qu'elles soient en famille, entre amis, ou seul! Vous verrez, nous avons de tout, incluant le Stade Olympique!
            </div>
        </section>
        <section class="piedpage__s2"></section>
        <section class="piedpage__s3"></section>


    </div>
</footer>
<?php  wp_footer() ?>