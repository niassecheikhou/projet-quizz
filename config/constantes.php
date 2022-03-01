<?php 
  // creer un chemin sur le dossier racine du projet
  // demarrage de la session
    if (session_start() ==PHP_SESSION_NONE){
       session_start(); 
    }

     define('ROOT',str_replace("public".DIRECTORY_SEPARATOR."index.php","",$_SERVER['SCRIPT_FILENAME']));
      
  
  // chemin sur le dossier src 

  define("PATH_SRC",ROOT."src".DIRECTORY_SEPARATOR);


// chemin sur le dossier templete 
    define("PATH_VIEWS",ROOT."templates".DIRECTORY_SEPARATOR);

//chemin sur data qui mene sur le fichier db.json
    define("PATH_DB",ROOT."data".DIRECTORY_SEPARATOR."db.json");

  // pour envoyer les requetes get et post
  
    define("WEB_ROOT","http://localhost/quizz_mvc/public/");   

?>
