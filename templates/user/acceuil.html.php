<?php 
// page de presentation
  require_once(PATH_VIEWS."include".DIRECTORY_SEPARATOR."header.inc.html.php")
?>
 <div id="container">
    <ul>
        <li><a class="active" href="<?=WEB_ROOT."?controlers=user&action=acceuil"?>">Acceuil</a></li>
        <?php  if (is_admin()):?>

        <li><a href="<?=WEB_ROOT."?controlers=user&action=liste.joueur"?>">Liste Joueur</a></li>
          <?php endif?>
        <li><a href="<?=WEB_ROOT."?controlers=securite&action=deconnexion"?>">Decconexion</a></li>
        
    </ul>

 </div>
          <?php
          // contenu des vues
             echo $content_for_views;
           ?>
 <?php 
 require_once(PATH_VIEWS."include".DIRECTORY_SEPARATOR."footer.inc.html.php")
?>
