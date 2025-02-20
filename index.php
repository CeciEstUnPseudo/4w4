<?php 
// Modèle index.php est le modèle par défaut
// Si aucun modèle peut satisfaire la requête http, ce modèle s'affichera
?>


<?php get_header() ?>

        <section class="hero">
            <div class="hero__contenu">
                <h1 class="hero__titre">Voyager autrement avec Mondo Voyages!</h1>
                <p class="hero__description">
                    Découvrez des destinations uniques et inoubliables avec Mondo Voyages. Nous vous offrons des expériences authentiques, des paysages à couper le souffle et des aventures sur mesure. Partez à la découverte du monde avec nous et créez des souvenirs impérissables.
                </p>


                <p class="hero__addresse-electronique">info@cmaisonneuve.qc.ca</p>
                <p class="hero__addresse-physique">3800, rue Sherbrooke, Montréal</p>
                <p class="hero__telephone">514-254-7131</p>
                <a href="" class="hero__courriel"></a>
                <button class="hero__bouton">S'INSCRIRE</button>
                <div class="hero__icones-box">
                    <img class= "hero__icones" src="https://s2.svgbox.net/social.svg?ic=facebook&color=000" width="32" height="32">
                    <img class= "hero__icones" src="https://s2.svgbox.net/social.svg?ic=instagram&color=000" width="32" height="32">
                </div>
            </div>
        </section>

        <section class="formulaire">
                <div class="formulaire__section">
                    <p class = "formulaire__section--titre">
                        Nom
                    </p>
                    <form action="" class="formulaire__section--form">
                        <input type="text" value="Écrivez votre nom" class="formulaire__section--input">
                    </form>
                </div>
                <div class="formulaire__section">
                    <p class = "formulaire__section--titre">
                        Prénom
                    </p>
                    <form action="" class="formulaire__section--form">
                        <input type="text" value="Écrivez votre prénom" class="formulaire__section--input">
                    </form>
                </div>
                <div class="formulaire__section">
                    <p class = "formulaire__section--titre">
                        Courriel
                    </p>
                    <form action="" class="formulaire__section--form">
                        <input type="text" value="Écrivez votre courriel" class="formulaire__section--input">
                    </form>
                </div>
                <div class="formulaire__section">
                    <p class = "formulaire__section--titre">
                        Téléphone
                    </p>
                    <form action="" class="formulaire__section--form">
                        <input type="text" value="Écrivez votre téléphone" class="formulaire__section--input">
                    </form>
                </div>

                <button class="formulaire__bouton">S'INSCRIRE</button>
        </section>

        <section class="galerie">
            <h2 class="galerie__titre">Nos destinations favorites</h2>

            <section class="galerie__cartes">
                <div class="carte">
                        <img src="\4w4\wp-content\themes\TP1\images/img1.jpg" alt="Destination1" class="carte__img">
                </div>
                <div class="carte">
                        <img src="\4w4\wp-content\themes\TP1\images/img2.jpg" alt="Destination2" class="carte__img">
                </div>
                <div class="carte">
                        <img src="\4w4\wp-content\themes\TP1\images/img3.jpg" alt="Destination3" class="carte__img">
                </div>
                <div class="carte">
                        <img src="\4w4\wp-content\themes\TP1\images/img4.jpg" alt="Destination4" class="carte__img">
                </div>
                <div class="carte">
                        <img src="\4w4\wp-content\themes\TP1\images/img5.jpg" alt="Destination5" class="carte__img">
                </div>
                <div class="carte">
                        <img src="\4w4\wp-content\themes\TP1\images/img6.jpg" alt="Destination6" class="carte__img">
                </div>
                <div class="carte">
                        <img src="\4w4\wp-content\themes\TP1\images/img7.jpg" alt="Destination7" class="carte__img">
                </div>
                <div class="carte">
                        <img src="\4w4\wp-content\themes\TP1\images/img8.jpg" alt="Destination8" class="carte__img">
                </div>
                <div class="carte">
                        <img src="\4w4\wp-content\themes\TP1\images/img9.jpg" alt="Destination9" class="carte__img">
                </div>
                <div class="carte">
                        <img src="\4w4\wp-content\themes\TP1\images/img10.jpg" alt="Destination10" class="carte__img">
                </div>
            </section>
            

        </section>

        <section class="populaire">
            <div class="populaire__contenant">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <article class="populaire__article">

                        <h2 class="populaire__titre"><?php the_title(); ?></h2>
                        <div class="populaire__contenu"><?php echo wp_trim_words(get_the_content(), 20, "..."); ?></div>
                    </article>
                <?php endwhile; endif; ?>
            </div>
        </section>

        <?php get_footer() ?>

</body>
</html>