<?php 
   if(isset($_SESSION[KEY_ERRORS])) {
    $errors = $_SESSION[KEY_ERRORS];
    // pour réinialiser la page sans les eurreurs qui ont été affichées
     unset($_SESSION[KEY_ERRORS]);
    
   }
   $_SESSION[KEY_USER_CONNECT];
   require_once(PATH_VIEWS."include".DIRECTORY_SEPARATOR."header.inc.html.php");
?>


    
     
 <form  action="<?=WEB_ROOT?>"  method="POST" id="form" >
        
            <input type="hidden" name="controlers" value="securite"> 
            <input type="hidden" name="action" value="register">
            <input type="hidden" name="role" value=" <?= isset($_SESSION[KEY_USER_CONNECT]) ? "ROLE_ADMIN" : "ROLE_JOUEUR" ?>"/>  
            <input type="hidden" name="score" value="0">


        <div class="big">
            <div class="container">
        
              <h1>S'INSCRIRE </h1>
              <p>Pour tester votre niveau de culture generale</p>

              
                <div class="input">


                    <input type="text" class="input-field" name="nom" id="nom" />

                        <label class="input-label">nom</label>
                            <?php if(isset($errors['nom'])):?>
                                <p style="color:red"> <?= $errors['nom']?></p>
                                <?php endif ?> 

                    <div class="error"></div>
                    
                    
                    </div>
                    <div class="input">
                            <input type="text" class="input-field" name="prenom" id="prenom" />
                            <label class="input-label">prenom</label>
                            <?php if(isset($errors['prenom'])):?>
                                <p style="color:red"> <?= $errors['prenom']?></p>
                                <?php endif ?> 
                         <div class="error"></div>
                    
                     </div> 

                     <div class="input">
                            <input type="text" class="input-field" name="login" id="login" />
                            <label class="input-label">Login</label>
                            <?php if(isset($errors['login'])):?>
                                <p style="color:red"> <?= $errors['login']?></p>
                                <?php endif ?> 
                        <div class="error"></div>
                    
                     </div>

                    <div class="input">
                            <input type="password" class="input-field" name="password" id="password" />
                            <label class="input-label" name="passwd">passwordd</label>
                            <?php if(isset($errors['password'])):?>
                                <p style="color:red"> <?= $errors['password']?></p>
                                <?php endif ?> 
                      <div class="error"></div>
                
                    </div>

                    <div class="input">
                        <input type="password" class="input-field" name="password1" id="password1" />
                        <label class="input-label" name="passwd">confirmer Password</label>
                        <?php if(isset($errors['password1'])):?>
                            <p style="color:red"> <?= $errors['password1']?></p>
                            <?php endif ?> 
                         <div class="error"></div>
                
                    </div>
                
                <div class="fichier">
                <input type="" value="choisir un fichier">
                </div>
                     <div class="end">
                     <input type="submit" value="Creer un compte">
                 </div>
        
        
             </div>

            
            
          <div class="part2">
                    <img src="<?= WEB_PUBLIC."imag".DIRECTORY_SEPARATOR."avatar.png"?>" alt="">

             </div>

         </div>    

 </form>

    
<?php require_once(PATH_VIEWS."include".DIRECTORY_SEPARATOR."footer.inc.html.php") ?>
 
