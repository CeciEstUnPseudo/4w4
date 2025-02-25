<a?php 
// Modèle front-page.php permet d'afficher la page d'accueil
?>
<?php get_header() ?>
<h1>front-page.php</h1>

        <section class="hero">
            <div class="hero__contenu">
                <h1 class="hero__titre">
                    <?php echo bloginfo("name"); ?>
                    <!-- En haut va prendre la valeur de "Site Title" des settings -->
                </h1>
                <p class="hero__description"> <?php bloginfo("description") ?>
                    
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

            <?php if (in_category("galerie")){?>
            <figure class="galerie__figure">
            <?php the_content();  ?>
            </figure>
                    <?php } ?>
                    
        </section>

        <section class="populaire">
            <div class="populaire__contenant">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php if (in_category("galerie")){
                    
                } else { ?>

                    <article class="populaire__article">

                        <div class="carte__contenu">
                            <?php 
                                if (has_post_thumbnail()) {
                                    // Afficher la petite image associée à l'article (image mise en avant)
                                    the_post_thumbnail('thumbnail'); }
                            ?>
                            <div class="carte__contenu--texte">
                                <h2 class="carte__titre">
                                    <?php the_title(); ?>
                                </h2>
                                <p class="carte__description">
                                    <?php echo wp_trim_words(get_the_excerpt(), 80, "..."); ?>
                                </p>
                                
                                <a class="carte__bouton carte__bouton--actif" href="<?php the_permalink();?>">Suite</a>

                                
                            </div>
                        </div>

                    </article>

                    <?php } ?>

                <?php endwhile; endif; ?>
            </div>
        </section>

        <?php get_footer() ?>
</body>
</html>