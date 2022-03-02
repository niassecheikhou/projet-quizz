<?php 
  // creer un chemin sur le dossier racine du projet
  // demarrage de la session
    

     define('ROOT',str_replace("public".DIRECTORY_SEPARATOR."index.php","",$_SERVER['SCRIPT_FILENAME']));
      
  
  // chemin sur le dossier src 

  define("PATH_SRC",ROOT."src".DIRECTORY_SEPARATOR);


// chemin sur le dossier templete 
    define("PATH_VIEWS",ROOT."templates".DIRECTORY_SEPARATOR);

//chemin sur data qui mene sur le fichier db.json
    define("PATH_DB",ROOT."data".DIRECTORY_SEPARATOR."db.json");

  // pour envoyer les requetes get et post
  
    define("WEB_ROOT","http://localhost:8002/");
    // URL charger les Images css et js 
    define("WEB_PUBLIC",str_replace("index.php","",$_SERVER['SCRIT_NAME'] ));

    // la cle d'eurreur

    define("KEY_ERRORS","errors"); 

    // la cle des user

    define("KEY_USER_CONNECT","user-connect"); 

?>
