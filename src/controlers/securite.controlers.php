
    <?php 
 
 if($_SERVER["REQUEST_METHOD"]=="POST"){
        
    //   echo "POST";

         if(isset($_REQUEST["action"])){
            if($_REQUEST["action"]=="connexion"){
                
                // echo "Traiter le formulaire de connexion";

                // recuperation des donnees
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
            require_once (PATH_WIEWS."securite/connexion.html.php");
            }
         }else{
            echo " charger la page de connexion";
         }
     } 
     //us1 
     function connexion(string $login, string $password):void{
            $errors=[];
            champ_obligatoire('login',$login,$errors);
            if(count($errors)==0){
               valid_email('login',$login,$errors);

            }
            champ_obligatoire('password',$password,$errors);
            if(count($errors)==0){
               valid_email('login',$login,$errors);
            }else{
                
            }
    }