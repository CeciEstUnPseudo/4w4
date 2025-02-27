<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mondo Voyages | H2025 4W4 | Émile Litalien</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <?php wp_head(); ?>
</head>
<body>


        <header>
            <div class="entete global">
                <figure class="entete__logo-box">
                    <a href="<?php echo home_url(); ?>">
                        <?php 
                            if (function_exists('the_custom_logo')) {
                                the_custom_logo();
                            } 
                        ?>
                </figure>

                

                <label for="checkbox__burger" class="burger">
                    <img class="burger__img" src="https://s2.svgbox.net/hero-outline.svg?ic=menu&color=000" width="32" height="32">
                </label>
                <input type="checkbox" id="checkbox__burger" class="checkbox__burger">

                <div class="entete__nav">

                <?php wp_nav_menu(array(
                    		'menu'                 => 'principal',
                            'container'            => 'nav',
                            'container_class'      => 'entete__menu',
                )); ?>


                <form class="recherche" role="search" method="get"  action="<?php echo esc_url( home_url( '/' ) ); ?>">
                <label>
                    <input class="recherche__input" type="search" class="search-field" placeholder="Search..." value="<?php echo get_search_query(); ?>" name="s" />
                </label>
                <button class="recherche__bouton" type="submit" class="search-submit">
                <img class="recherche-icon" src="https://s2.svgbox.net/hero-outline.svg?ic=search&color=000" width="14" height="13">
                </button>
                </form>

                </div>
            </div>
        </header>