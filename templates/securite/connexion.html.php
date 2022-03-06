<?php 
  
  if(isset($_SESSION[KEY_ERRORS])){
    $errors=$_SESSION[KEY_ERRORS];
    unset($_SESSION[KEY_ERRORS]);
  }
  
?>
<!DOCTYPE html>
<html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quizz AAP</title>
  
    <link rel="stylesheet" href="<?=WEB_PUBLIC."css".DIRECTORY_SEPARATOR."style.connexion.css"?>">
    
</head>
<body>
        <div id="text">
           <h1>le plaisir de jouer</h1>
    
           <img src="<?=WEB_PUBLIC."imag".DIRECTORY_SEPARATOR."logo-QuizzSA.png"?>">
        </div id="imageprincipale">
           <img src=" <?=WEB_PUBLIC."imag".DIRECTORY_SEPARATOR."db.jpeg"?>"> 
              
        <div id="container">
            <!-- zone de connexion -->
            
            <form action="<?=WEB_ROOT?>" method="POST" id="form">
            <div class="error" id="error"></div>

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
                         <input type="text" placeholder="login"id=login name="login">
                         <img src="<?=WEB_PUBLIC."imag".DIRECTORY_SEPARATOR."ic-login.png"?>">
                  </div>
                  <?php if(isset($errors['login'])) :?>
                    <p style="color:red"><?=$errors['login']?></p>
                    <?php endif ?>
                <!-- <label><b>Mot de passe</b></label> -->
                <div class="form-group">
                    
                         <input type="password" placeholder=" Mot de passe" id='password' name="password">
                         <img src="<?=WEB_PUBLIC."imag".DIRECTORY_SEPARATOR."ic-password.png"?>">
                </div>
                <?php if(isset($errors['password'])) :?>
                    <p style="color:red"><?=$errors['password']?></p>
                    <?php endif ?>
                <div id="form-boutton">
                         <button type="submit" id='submit' value='LOGIN' >Connexion</button>
                         <p style="color:red"></p>
                        <a href="<?=WEB_ROOT."?controlers=securite&action=register"?>"> S'inscire pour jouer</a>
                </div>
            </form>
        </div>
 
       <script src=" <?=WEB_PUBLIC."js".DIRECTORY_SEPARATOR."script.connexion.js"?>"></script>
       
    </body>
  </html> 

        