<?php
// recuperation des données du fichier json

function json_to_array(string $key):array{
    
    $dataJson=file_get_contents(PATH_DB);
    
    $data=json_decode($dataJson,true);
    
    return $data[$key];
} 

// enregistrement et mis en jour du fichier json 

function array_to_json(array $newUser,$key){
    // ici on récupere le contenu du ficher json sous format string
    $dataJson=file_get_contents(PATH_DB);
    // ici on le transforme en tableau
    $data=json_decode($dataJson,true);
    // on ajoute le nouveau utilisateur
    $data['users'][]=$newUser;
    // pour qu'il retuourne le ficher en string(donneé)
    $fileNamData=json_encode($data);
// et on retour les données en string
    file_put_contents(PATH_DB, $fileNamData);

}




    // permet de convertir les chaine du fichier json en tableau et vise versal

       // file_get contents: permet de recuperer le contenu du fichier
       // json_decode  : converti un fichier json en tableau  

    
    // $json= file_get_contents(PATH_DB);
    // $arr=json_decode($json,true);

    // echo '<pre>';
    // var_dump($arr);die; 
    // echo '</pre>';
    
    
