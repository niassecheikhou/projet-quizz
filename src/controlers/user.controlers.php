<?php 
 require_once(PATH_SRC."models".DIRECTORY_SEPARATOR."user.models.php");
 if($_SERVER["REQUEST_METHOD"]=="POST"){
        
    //   echo "POST";

         if(isset($_REQUEST["action"])){
            if($_REQUEST["action"]=="connexion"){
                
                echo "Traiter le formulaire de connexion";

        }
        }
     }


     if($_SERVER["REQUEST_METHOD"]=="GET"){
          if(isset($_REQUEST["action"])){
             if(!is_connect()){
               header("Location:".WEB_ROOT);
               exit();
             } 
           if($_REQUEST["action"]=="acceuil"){

            // echo " charger la page de connexion";
            if(is_admin()){
               lister_joueur();
            }elseif(is_joueur()){
               jeu();
            }
            // require_once (PATH_VIEWS."user".DIRECTORY_SEPARATOR."acceuil.html.php");

            }elseif($_REQUEST['action']=="liste.joueur"){
               
               lister_joueur(); 
            }elseif($_REQUEST['action']=="admin"){
               create_admin();
            }
         }
     } 
     function lister_joueur(){
        
        // appel du model
        ob_start();
        $data=find_users(ROLE_JOUEUR);
        
     
        require_once (PATH_VIEWS."user".DIRECTORY_SEPARATOR."liste.joueur.html.php");
         $content_for_views = ob_get_clean();
      
        require_once (PATH_VIEWS."user".DIRECTORY_SEPARATOR."acceuil.html.php");

     }  

     function jeu(){
      // appel du model
      ob_start();
      
      require_once (PATH_VIEWS."user".DIRECTORY_SEPARATOR."jeu.html.php");
      $content_for_views=ob_get_clean();
      require_once (PATH_VIEWS."user".DIRECTORY_SEPARATOR."acceuil.html.php");

   } 
   function create_admin(){
      ob_start();
      require_once (PATH_VIEWS."user".DIRECTORY_SEPARATOR."admin.html.php");
      $content_for_views=ob_get_clean();
      require_once (PATH_VIEWS."user".DIRECTORY_SEPARATOR."acceuil.html.php");

   } 