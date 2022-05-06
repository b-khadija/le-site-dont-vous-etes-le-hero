<?php 
  /*
  Footer
  */
  
  ?>
</main>
<footer class="site_footer" role="contentinfo">
  <div class="first_column_footer">   
    <?php
      wp_nav_menu(
      
          array(
              'theme_location' => 'footer-menu-1', /* localiser l'emplacement du menu 'footer-menu' définit dans 'function.php'*/
              'container' => false, /* supprimer le conainer*/
              'menu_class' => 'footer_list', /* Ajoute une class au <ul> du footer */
          )
          );
      ?>
  </div>
  <div class="first_column_footer">  
    <?php
      wp_nav_menu(
      
          array(
              'theme_location' => 'footer-menu-2', /* localiser l'emplacement du menu 'footer-menu' définit dans 'function.php'*/
              'container' => false, /* supprimer le conainer*/
              'menu_class' => 'footer_list', /* Ajoute une class au <ul> du footer */
          )
          );
      ?>
  </div>
  <div class="second_column_footer">
    <p class="logo__footer">
      <img src="<?= get_theme_file_uri( 'assets/img/logo-lsh.png' ); ?>" alt="Logo Le site Du Héros" width="60" height="80">
    </p>
  </div>
  </div>
  <div class="third_column_footer">
    <div class="footer__networks">
      <p class="footer_follow">Nous Suivre</p>
      <ul class="footer_list">
        <li class="networks_element">
          <a class="networks_links" href="#">
          <img src="<?= get_theme_file_uri( 'assets/img/instagram52px.png' ); ?>" width="26" height="26" alt="Instagram" title="Instagram Le site du Héros">
          </a>
        </li>
        <li class="networks_element">
          <a class="networks_links" href="#">
          <img src="<?= get_theme_file_uri( 'assets/img/github52px.png' ); ?>" width="26" height="26"  alt="Github" title="Github Le site du Héros">
          </a>
        </li>
        <li class="networks_element">
          <a class="networks_links" href="#">
          <img src="<?= get_theme_file_uri( 'assets/img/twitter52px.png' ); ?>" width="26" height="26"  alt="Twitter" title="Twi Le site du Héros">
          </a>
        </li>
      </ul>
    </div>
  </div>
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>