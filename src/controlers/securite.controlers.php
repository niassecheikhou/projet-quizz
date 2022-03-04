
    <?php 
 require_once(PATH_SRC."models".DIRECTORY_SEPARATOR.'user.models.php');
 if($_SERVER["REQUEST_METHOD"]=="POST"){
        
    //   echo "POST";
    
         if(isset($_REQUEST["action"])){
            if($_REQUEST["action"]=="connexion"){
                
                // echo "Traiter le formulaire de connexion";

                // recuperation des donnee
                 $login=$_POST["login"];
                $password=$_POST["password"];
                connexion($login,$password);
        }elseif($_REQUEST["action"]=="register"){
           
            $nom=$_POST["nom"];
            $prenom=$_POST["prenom"];
            $login=$_POST["login"];
            $password=$_POST["password"];
            $password1=$_POST["password1"];
            $role=$_POST["role"];
            $score=$_POST["score"];
            registration($nom,$prenom,$login,$password,$password1,$role,$score);
            
        }
        }
     }
        


     if($_SERVER["REQUEST_METHOD"]=="GET"){

      
          if(isset($_REQUEST["action"])){
           if($_REQUEST["action"]=="connexion"){
            // echo " charger la page de connexion";
            
               
            require_once (PATH_VIEWS."securite".DIRECTORY_SEPARATOR."connexion.html.php");

            }elseif($_REQUEST["action"]=="deconnexion"){
               logout();
            }elseif($_REQUEST['action']=="register"){
               require_once (PATH_VIEWS."securite".DIRECTORY_SEPARATOR."register.html.php");
            }
         }else{
            require_once (PATH_VIEWS."securite".DIRECTORY_SEPARATOR."connexion.html.php");
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
                   $user=find_user_login_password($login,$password);
                   
                  if(count($user)!==0){ 
                    
                    // utilisateur existe 
                     // des que l'utilisateur se connect on le met dans la session
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

    function logout(){
       session_destroy();
       header("Location: ".WEB_ROOT);
       exit();
        
    }

    function registration(string $nom, string $prenom, string $login, string $password,String $password1, string $role,string $score){
      $errors=[];
   
     
      champ_obligatoire('nom',$nom,$errors);
      champ_obligatoire('prenom',$prenom,$errors);
      champ_obligatoire('login',$login,$errors);
      if(count($errors)==0){
         valid_email('login',$login,$errors);
         

      }

      champ_obligatoire('password',$password,$errors);
      champ_obligatoire('password1',$password1,$errors);

      if(count($errors)==0){
         
         $newUser=register_new_users();
         array_to_json($newUser,"users");
         header("Location: ".WEB_ROOT."?controlers=securite");
         

      }else{
         $_SESSION[KEY_ERRORS]=$errors;
         header("Location: ".WEB_ROOT."?controlers=securite&action=register");
      }
    }