
    <?php 
 
 if($_SERVER["REQUEST_METHOD"]=="POST"){
        
    //   echo "POST";

         if(isset($_REQUEST["action"])){
            if($_REQUEST["action"]=="connexion"){
                
                // echo "Traiter le formulaire de connexion";

                // recuperation des donnees
                var_dump($_POST);die();
                $login=$_POST["login"];
                $password=$_POST["password"];
                connexion($login,$password);
        }
        }
     }
        


     if($_SERVER["REQUEST_METHOD"]=="GET"){

        
          if(isset($_REQUEST["action"])){
           if($_REQUEST["action"]=="connexion"){

            // echo " charger la page de connexion";
            require_once (PATH_VIEWS."securite".DIRECTORY_SEPARATOR."connexion.html.php");
            }
         }else{
            echo " charger la page de connexion";
         }
     } 
     //us1 
     function connexion(string $login, string $password):void{
            $errors=[];
            champ_obligatoire('login',$login,$errors,"login obligatoire");
            if(count($errors)==0){
               valid_email('login',$login,$errors);

            }
            champ_obligatoire('password',$password,$errors);
            if(count($errors)==0){
                     // appell d'une fonction du models
                   $user=find_user_login_password($login,$password,);
                  if(count($user)!==0){
                    // utilisateur existe 
                    $_SESSION[KEY_USER_CONNECT]=$user;
                    header("Location: ".WEB_ROOT."?controlers=user&action=acceuil");
                     exit();
                     
                  }else{
                      //utilisteur n'existe pas 
                      $errors['connexion']="login ou mot de pass incorrect";
                      $_SESSION[KEY_ERRORS]=$errors;
                      header("Location: ".WEB_ROOT);
                      exit();
                  }
               
            }else{
                // erreurs de validation 
               //  valid_email('login',$login,$errors);
               $_SESSION[KEY_ERRORS]=$errors;
               header("Location: ".WEB_ROOT);
               exit();
            }
    }