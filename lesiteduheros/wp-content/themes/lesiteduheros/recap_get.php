<?php
  /**
   * page contact
   *
   * @package Le site du Héros
   */
  
  get_header();
  ?>
<h1>Récapitulatif de vos informations</h1>
<?php
  // $_GET est un tableau (array) associatif qui contient les données de mon formulaire
  print_r($_GET);
  ?>
<ul>
  <!-- On peut afficher les données soumises en post grace à echo $_POST['donnee-a-afficher']-->
  <li>Pseudo : <?php echo $_GET['pseudo']; ?></li>
  <li>Email : <?php echo $_GET['email']; ?></li>
</ul>
<?php
get_footer();