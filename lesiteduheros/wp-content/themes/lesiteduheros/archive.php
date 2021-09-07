<?php
/**
 * Archive
 *
 * @package blogintegrally
 */

get_header(); ?>

<?php 
if (have_posts()) : while (have_posts()) : the_post();
?>

<div class="archive_article">
    <h1 class="size_title_level article-title"><?php the_title();?></h1>
    <div class="archive_article_image">
        <img src=<?php echo get_theme_file_uri( 'assets/img/article-book.jpg' ); ?> alt="">
    </div>
    
    <div class="article-archive__text">
    <?php the_excerpt(); ?>
    </div>
    <a href="<?php the_permalink();?>" class="article-archive__link links">Lire la suite</a> 
</div>

<?php
endwhile;
else : ?>
<p>Pas d'articles à afficher</p>
<?php 
endif; ?>
</div>
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