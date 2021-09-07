<?php
/**
 * Home
 *
 * @package Le site du Héros
 */

get_header(); ?>

<div class="image__background">
                <div class="image__text">
                    <h1 class="size_title_level">UN HERITAGE FUNESTE</h1> 
                    <h2 class="size_title_level">une aventure de Lyzi SHADOW</h2>
                </div>
                    <a href="https://lesiteduheros.nuagemagique.go.yo.fr/oyez-oyez-aventuriers/" class="link__cta link__play">Jouer</a>
                    <a href="https://lesiteduheros.nuagemagique.go.yo.fr/page-0-introduction/" class="link__cta link__information">Infos</a>
            </div>
            <?php 
            if (have_posts()) : while (have_posts()) : the_post();
            ?>
            <div class="post__one">
                <div class="first_column">
                    <img src=<?php echo get_theme_file_uri( 'assets/img/article-book.jpg' ); ?> alt="">
                </div><!--
                --><div class="second_column">
                    <h2 class="size_title_level article-title"><?php the_title();
                    ?></h2>
                    <?php the_excerpt();
                    ?>
                    <a href="<?php the_permalink();?>" class="links">Lire la suite</a>
                </div>
            </div>
            <?php
            endwhile;
            else : ?>
            <p>Pas d'articles à afficher</p>
            <?php 
            endif; ?>

<?php
/*
Permet de générer une pagination
attention : pas accessible par défaut
on va donc fournir des arguments pour la rendre accessible
https://developer.wordpress.org/reference/functions/the_posts_pagination/
https://make.wordpress.org/accessibility/handbook/markup/the-css-class-screen-reader-text/
*/

the_posts_pagination(
	array(
		'aria_label'         => 'Navigation des articles', /* gestion de l'attribut aria-label */
		'type'               => 'list', /* gestion de la structure HTML */
		'prev_text'          => '<span class="screen-reader-text">Articles </span>Page précédente', /* gestion du texte "Précédent" */
		'next_text'          => '<span class="screen-reader-text">Articles </span>Page suivante', /* gestion du texte "Suivant" */
		'before_page_number' => '<span class="screen-reader-text">Page </span>', /* gestion de l'intitulé des liens des pages */
	)
);

get_footer();