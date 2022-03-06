<?php 
  require_once(PATH_VIEWS."include".DIRECTORY_SEPARATOR."header.inc.html.php");
?>
    
    <div style="margin:50px 70px" style="border:2px solid black;">
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
