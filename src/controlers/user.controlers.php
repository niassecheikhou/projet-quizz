<?php 
 require_once(PATH_SRC."models".DIRECTORY_SEPARATOR."user.models.php");
 if($_SERVER["REQUEST_METHOD"]=="POST"){
        
    //   echo "POST";

         if(isset($_REQUEST["action"])){
            if($_REQUEST["action"]=="connexion"){
                
                echo "Traiter le formulaire de connexion";

            }elseif($_REQUEST["action"]=="question"){
               $put1 = $_POST["put1"];
               $put2 = $_POST["put2"];
               $put3 = $_POST["put3"];
               $cm = $_POST["cm_${i}"];
               var_dump($cm);die();
              
               var_dump($_POST);die();
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
            }elseif($_REQUEST['action']=="question"){
               create_question();
               
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

   function create_question(){
      ob_start();

      require_once (PATH_VIEWS."user".DIRECTORY_SEPARATOR."question.html.php");
      $content_for_views=ob_get_clean();
      require_once (PATH_VIEWS."user".DIRECTORY_SEPARATOR."acceuil.html.php");
   }