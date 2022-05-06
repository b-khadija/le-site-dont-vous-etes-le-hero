<?php
  /**
   * Header
   *
   * @package Le site du Héro
   */
  ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?= get_theme_file_uri( 'assets/img/favicon.ico' ); ?>" type="image/x-icon">
    <?php wp_head(); ?>
  </head>
  <body class="site">
    <header class="site_header" role="banner">
      <div class="skip_link">
        <a href="#main" class="link_arrow">Aller au contenu</a>
      </div>
      <div class="max_content">
        <div class="header_logo">
          <a href="https://lesiteduheros.nuagemagique.go.yo.fr/"><img src="<?= get_theme_file_uri( 'assets/img/logo-lsh.png' ); ?>" width="100" height="125" alt="Le site du Héros"></a>                            
        </div>
        <nav class="navigation" role="navigation">
          <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'main-menu', /* identifiant de l'emplacement de menu à afficher */
                    'container'      => false, /* supprimer le container (on s'en occupe dans le code HTML) */
                    'menu_class'     => 'mainMenu first_column' /* permet d'ajouter une class au <ul> */
                )
            );
            ?>
          <?=  get_search_form() ?>
        </nav>
      </div>
    </header>
    <main role="main" id="main">