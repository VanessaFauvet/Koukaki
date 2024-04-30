<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fleurs_d\'oranger_&_Chats_errants
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'foce' ); ?></a>
    <header id="masthead" class="site-header">
        <nav id="site-navigation" class="main-navigation">
            <ul>
                <li class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></li>
            </ul>

            <div id="burger" class="burger" aria-controls="primary-menu" aria-expanded="false">
                <button class="burger-icon burger-open">
                    <span class="line"></span>
                    <span class="line"></span>
                    <span class="line"></span>
                </button>

                <div class="burger-content">
                    <img class="burger-logo" src="<?php echo get_template_directory_uri() . '/assets/images/logo.png'; ?>" alt="">
                    <ul>
                        <li><a href="#story">Histoire</a></li>
                        <li class="burger-characters"><a href="#characters">Personnages</a></li>
                        <li class="burger-place"><a href="#place">Lieu</a></li>
                        <li class="burger-studio"><a href="#studio">Studio Koukaki</a></li>
                    </ul>

                    <div>
                        <img class="hibiscus" src="<?php echo get_template_directory_uri() . '/assets/images/Hibiscus.png'; ?>" alt="">
                        <img class="orchid" src="<?php echo get_template_directory_uri() . '/assets/images/orchid.png'; ?>" alt="">
                        <img class="random-flower" src="<?php echo get_template_directory_uri() . '/assets/images/random_flower.png'; ?>" alt="">
                        <img class="flower" src="<?php echo get_template_directory_uri() . '/assets/images/flower.png'; ?>" alt="">
                        <img class="sunflower" src="<?php echo get_template_directory_uri() . '/assets/images/Sunflower.png'; ?>" alt="">
                        <img class="black-cat" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/black_cat.png'; ?>" alt="">
                        <img class="purple-cat" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/purple_cat.png'; ?>" alt="">
                        <img class="yellow-cat" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/yellow_cat.png'; ?>" alt="">
                    </div>

                    <div class="burger-footer">
                        <a href="#">STUDIO KOUKAKI</a></li>
                    </div>
                </div>
            </div>
        </nav><!-- #site-navigation -->
    </header><!-- #masthead -->