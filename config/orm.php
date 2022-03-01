<?php
// recuperation des données du fichier json
function find_data(string $key):array{
    $dataJson=file_get_contents(PATH_DB);
    $data=json_decode($dataJson,true);
    return $data[$key];
} 

// enregistrement et mis en jour du fichier json 

function save_data(string $key,array $data):array{
    return [];
}




    // permet de convertir les chaine du fichier json en tableau et vise versal

       // file_get contents: permet de recuperer le contenu du fichier
       // json_decode  : converti un fichier json en tableau  

    
    // $json= file_get_contents(PATH_DB);
    // $arr=json_decode($json,true);

    // echo '<pre>';
    // var_dump($arr);die; 
    // echo '</pre>';
    
    
