<?php 
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
    <div style="margin:50px 70px">
        <table>
            <tr>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Score</th>
            </tr>
            <?php foreach ( $data as $value):?>
                <tr>
                    <td><?= $value['nom']?></td>
                    <td><?= $value['prenom']?></td>
                    <td><?= $value['score']?></td>
                </tr>
            <?php  endforeach?>
        </table>
        
    </div>
 <?php 
 require_once(PATH_VIEWS."include".DIRECTORY_SEPARATOR."footer.inc.html.php")
?>
