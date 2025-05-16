<?php // Modèle front-page.php permet d'afficher la page d'accueil ?>
    <!-- Section Header -->
        <?php get_header() ?>
    <!--  -->

    <!-- Section Hero -->
        <?php echo get_template_part("/gabarit/hero"); ?>
    <!--  -->

    <!-- Section Galerie -->
        <section class="galerie">
            <h2 class="galerie__titre hero_couleur">Nos destinations favorites</h2>

            <?php if (in_category("galerie")) { ?>
                <figure class="galerie__figure">
                    <?php the_content();  ?>
                </figure>
            <?php } ?>

        </section>
    <!--  -->

    <!-- Section Populaire (articles) -->
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
    <!--  -->

    <!-- Section Articles (au choix selon la catégorie) -->
        <!-- JS  | Destination REST-API -->
        <!-- Boutons générées hors de la liste, mais le destination.js va generer les articles dans la div destination__list -->
        <?php categories_liste("destination"); ?>
        <section class="destination">
            <h2 class="destination__titre">Articles de la catégorie</h2>
            <div class="destination__list">
            </div>
        </section>
    <!--  -->

    <!-- Section Footer -->
        <?php get_footer() ?>
    <!--  -->
    </body>

    </html>