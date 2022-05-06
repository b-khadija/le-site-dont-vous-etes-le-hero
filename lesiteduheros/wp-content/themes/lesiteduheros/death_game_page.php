<?php
  /* 
  Template Name: DeathGamePage
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
  <a class="link_btn_play" href="<?php echo get_permalink(67); ?>">Recommencer</a>
  <a class="link_btn_play" href="<?php echo get_permalink(24); ?>">Laisser votre trace</a><br><br>
  <a class="link_btn_play" href="<?php bloginfo('url'); ?>">Retour accueil</a>
</div>
<?php get_footer();