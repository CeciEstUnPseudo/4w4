<a?php
    // Modèle front-page.php permet d'afficher la page d'accueil
    ?>
    <?php get_header() ?>


    <?php $hero_auteur = get_theme_mod('hero_auteur', ''); ?>
    <?php $hero_background = get_theme_mod('hero_background', ''); ?>
    <?php $hero_text_color = get_theme_mod('hero_text_color', ''); ?>
    <?php $hero_email = get_theme_mod('hero_mail', ''); ?>
    <?php $hero_lieu = get_theme_mod('hero_lieu', ''); ?>
    <?php $hero_telephone = get_theme_mod('hero_telephone', ''); ?>

    <section class="hero" style="color: <?php echo $hero_text_color; ?> background-image: url('<?php echo $hero_background; ?>')">
        <div class="hero__contenu">
            <h1 class="hero__titre">
                <?php echo bloginfo("name"); ?>
                <!-- En haut va prendre la valeur de "Site Title" des settings -->
            </h1>
            <p class="hero__description"> <?php bloginfo("description") ?>

            </p>

            <?php  ?>

            <p class="hero__addresse-electronique"><?php echo $hero_email ?></p>
            <p class="hero__addresse-physique"><?php echo $hero_lieu ?></p>
            <p class="hero__telephone"><?php echo $hero_telephone ?></p>
            <a href="" class="hero__courriel"></a>
            <button class="hero__bouton">S'INSCRIRE</button>
            <div class="hero__icones-box">
                <img class="hero__icones" src="https://s2.svgbox.net/social.svg?ic=facebook&color=000" width="32" height="32">
                <img class="hero__icones" src="https://s2.svgbox.net/social.svg?ic=instagram&color=000" width="32" height="32">
            </div>
            <p>Auteur: <?php echo $hero_auteur; ?></p>
        </div>
    </section>

    <section class="formulaire">
        <div class="formulaire__section">
            <p class="formulaire__section--titre">
                Nom
            </p>
            <form action="" class="formulaire__section--form">
                <input type="text" value="Écrivez votre nom" class="formulaire__section--input">
            </form>
        </div>
        <div class="formulaire__section">
            <p class="formulaire__section--titre">
                Prénom
            </p>
            <form action="" class="formulaire__section--form">
                <input type="text" value="Écrivez votre prénom" class="formulaire__section--input">
            </form>
        </div>
        <div class="formulaire__section">
            <p class="formulaire__section--titre">
                Courriel
            </p>
            <form action="" class="formulaire__section--form">
                <input type="text" value="Écrivez votre courriel" class="formulaire__section--input">
            </form>
        </div>
        <div class="formulaire__section">
            <p class="formulaire__section--titre">
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

        <?php if (in_category("galerie")) { ?>
            <figure class="galerie__figure">
                <?php the_content();  ?>
            </figure>
        <?php } ?>

    </section>

    <section class="populaire">
        <div class="populaire__contenant">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <?php if (in_category("galerie")) {
                    } else { ?>

                        <article class="populaire__article">

                            <div class="carte__contenu">
                                <?php get_template_part("gabarit/carte") ?>
                            </div>

                        </article>

                    <?php } ?>

            <?php endwhile;
            endif; ?>
        </div>
    </section>

    <?php get_footer() ?>
    </body>

    </html>