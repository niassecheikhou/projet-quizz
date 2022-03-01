<?php 
 
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
           if($_REQUEST["action"]=="connexion"){

            echo " charger la page de connexion";
            }
         }
     } 