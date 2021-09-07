<?php

/* 
Template Name: GamePages
*/ 

get_header();?>
<div class="page_story">
    <h1 class="size_title_level_game"><?php the_title();?></h1>
<div class="page_story_game">
        <p>
            <?php if (have_posts()) : while (have_posts()) : the_post();?>
                <?php the_content();?>
            <?php endwhile; endif;?>
        </p>
</div>
</div>
 

<?php get_footer();