<?php
/**
 * Single
 *
 * @package Le site du Héros
 */

get_header(); ?>

<?php 
if (have_posts()) : while (have_posts()) : the_post();
?>

        <h1 class="article-title size_title_level"><?php the_title(); ?></h2>

        <div class="image_carnet_single">
            <img src=<?php echo get_theme_file_uri( 'assets/img/article-book.jpg' ); ?> alt="">
        </div>

        <div class="texte-container">
            <div class="article-texte">
                <?php the_content() ?>
        </div>

        <?php endwhile;
	endif; ?>
    
</div>

<?php get_footer();