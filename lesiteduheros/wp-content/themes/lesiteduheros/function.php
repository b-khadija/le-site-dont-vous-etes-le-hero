<?php

/**
 * Ici, on va laisser WordPress se charger de l'insertion des styles et des scripts (JS)... on englobe ça dans une fonction (une boite)...
 *
 * @return void
 */
 function site_heros_enqueue_styles_and_scripts() {
	wp_enqueue_style( 'main-style', get_theme_file_uri( 'assets/css/style.css' ), array(), '1.0' );
}

// ...que l'on ouvre uniquement lorsque l'on est sur le front (sur un hook, sur un point d'accroche spécifique)
add_action( 'wp_enqueue_scripts', 'site_heros_enqueue_styles_and_scripts' );

/* prise en charge des images mises en avant */
add_theme_support( 'post-thumbnails' );

/* laisser à WordPress la gestion de la balise <title> */
add_theme_support( 'title-tag' );

/* Emplacement de menu (header) */
register_nav_menu('main-menu', 'Menu principal (header)');

/* Emplacement de menu (footer) */
register_nav_menu('footer-menu-1', 'Menu bas de page 1 (footer)');

register_nav_menu('footer-menu-2', 'Menu bas de page 2 (footer)');


// add_action( 'wp_enqueue_scripts', 'menu_burger_site_heros' );


/* Cette fonction va nous permettre de modifier les classes des items de menus gérés par WordPress */
function site_heros_item_class( $classes, $item, $args ) {

	/* si l'emplacement de menu traité est 'main-menu' */
	if ( $args->theme_location ===  'main-menu' ) {
        $classes = ['navigation_link']; /* on définit un tableau $classes (qui peut contenir plusieurs class) avec la class 'menu__item'*/
		/* $classes[] = 'menu__item'; */ /* si on souhaite conserver les class WordPress */
    }

	/* sinon si l'emplacelent de menu traité est 'footer-menu'*/
	else if ( $args->theme_location ===  'footer-menu-1' ) {
		/* on définit une class différente pour les items */
		$classes = ['footer_list_link'];
	}

	/* sinon si l'emplacelent de menu traité est 'footer-menu'*/
	else if ( $args->theme_location ===  'footer-menu-2' ) {
		/* on définit une class différente pour les items */
		$classes = ['footer_list_link'];
	}

	return $classes; /* on va retourner ce tableau (pour que WordPress l'utilise dans sa génération de code) */
}

add_filter( 'nav_menu_css_class', 'site_heros_item_class', 10, 3);

add_filter('pre_get_posts','gkp_search_filter');
function gkp_search_filter($query) {
if ($query->is_search)
$query->set('post_type',array('post'));
}