<?php

// verification est ce que le login et le mot de passe existe dans le fichier json
function find_user_login_password(string $login,string $password):array{

    $users=json_to_array("users");
    foreach ($users as $user) {
        if ($user['login']==$login && $user['password']==$password) {
            return $user;
        }
    }
    return [];
}
// pour retrouver les utilisateurs pour les afficher dans la liste des utilisateurs

function find_users(string $role):array{
    $users=json_to_array("users");
    $result=[];
    foreach ($users as $users) {
        if($users['role']==$role) 
        $result[]=$users;
    }
    return $result;
}

// pour ajouter un nouveau utilisateur dans  un tableau
function register_new_users():array{

      $exra = [
            'nom' => $_POST['nom'],
             'prenom' => $_POST['prenom'],
             'login' => $_POST['login'],
             'password' => $_POST['password'],
             'role' => $_POST['role'],
             'score' => $_POST['score']
      ];


      return $exra;
}