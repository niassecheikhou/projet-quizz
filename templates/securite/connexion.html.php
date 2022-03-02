<?php 
  require_once(PATH_VIEWS."include".DIRECTORY_SEPARATOR."header.inc.html.php");
  $errors=$_SESSION[KEY_ERRORS];
  unset($_SESSION[KEY_ERRORS]);
?>
        <div id="text">
           <h1>le plaisir de jouer</h1>
    
           <img src="<?=WEB_PUBLIC."imag".DIRECTORY_SEPARATOR."logo-QuizzSA.png"?>">
        </div id="imageprincipale">
           <img src=" <?=WEB_PUBLIC."imag".DIRECTORY_SEPARATOR."db.jpeg"?>"> 
              
        <div id="container">
            <!-- zone de connexion -->
            
            <form action="<?=WEB_ROOT?>" method="POST">
                <input type="hidden" name="controlers" value="securite">
                <input type="hidden" name="action" value="connexion">
                <!-- <h1>Connexion</h1> -->
                <div id="form-login">
                    <h3>login form</h3>
                    <?php if(isset($errors['connexion'])) :?>
                    <p style="color:red"><?=$errors['connexion']?></p>
                    <?php endif ?>
                    <img src="<?=WEB_PUBLIC."imag".DIRECTORY_SEPARATOR."ic-ajout.png"?>">
                </div>
                
                <!-- <label><b>login</b></label> -->
                <div class="form-group">
                         <input type="text" placeholder="login" name="login">
                         <img src="<?=WEB_PUBLIC."imag".DIRECTORY_SEPARATOR."ic-login.png"?>">
                  </div>
                <!-- <label><b>Mot de passe</b></label> -->
                <div class="form-group">
                    <?php if(isset($errors['connexion'])) :?>
                    <p style="color:red"><?=$errors['connexion']?></p>
                    <?php endif ?>
                         <input type="password" placeholder=" Mot de passe" name="password">
                         <img src="<?=WEB_PUBLIC."imag".DIRECTORY_SEPARATOR."ic-password.png"?>">
                </
                </div>
                <div id="form-boutton">
                         <button type="submit" id='submit' value='LOGIN' >Connexion</button>
                         <p style="color:red"></p>
                        <a href=""> S'inscire pour jouer</a>
                </div>
            </form>
        </div>
 <?php 
  require_once(PATH_VIEWS."include".DIRECTORY_SEPARATOR."footer.inc.html.php")
?>

        