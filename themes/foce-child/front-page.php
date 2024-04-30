<?php

get_header();
?>

    <main id="primary" class="site-main">
        <section class="banner appear-section" style="position:relative; width:100%; height:100%; overflow:hidden;">
            <img class="background-image" src="<?php echo get_template_directory_uri() . '/assets/images/banner.png'; ?>" alt="">
            <video class="background-video" autoplay loop muted>
                <source src="<?php echo get_stylesheet_directory_uri();?>/assets/video/video_hero.mp4" type="video/mp4">
            </video>
            <img class="background-logo" data-0="top:30%;" data-100="top:55%;" src="<?php echo get_template_directory_uri() . '/assets/images/logo.png'; ?>" alt="Logo fleurs d'oranger & chats errants">
        </section>

        <section id="#story" class="story fade-in">
            <h2><span class="appear">L'histoire</span></h2>
            <article id="" class="story__article">
                <p><?php echo get_theme_mod('story'); ?></p>
            </article>

            <!-- Carrousel Swiper -->
            <?php get_template_part('/template-parts/swiper'); ?>
            <!-- Fin carrousel -->


            <article id="place" class="fade-in">
                <div class="clouds">
                    <img class="big-cloud" src="<?php echo get_theme_file_uri("assets/images/big_cloud.png"); ?> " alt="image du gros nuage" >
                    <img class="little-cloud" src="<?php echo get_theme_file_uri("assets/images/little_cloud.png"); ?> " alt="image du petit nuage">
                </div>
                    
                <div>
                    <h3 class="appear">Le Lieu</h3>
                    <p><?php echo get_theme_mod('place'); ?></p>
                </div>
            </article>
        </section>


        <section id="studio" class="fade-in">
            <h2><span class="appear">Studio Koukaki</h2>
            <div>
                <p>Acteur majeur de l'animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
                <p>Avec une créativité et une capacité d'innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d'oranger et chats errants”.</p>
            </div>
            </section>

        <!-- Section des nominations -->
        <?php get_template_part('/template-parts/oscars'); ?>
        <!-- Fin section des nominations -->
    </main><!-- #main -->

<script>
    // Initialize Skrollr
    var s = skrollr.init();
    console.log("Skrollr initialized successfully!");
</script>

<?php
get_footer();
