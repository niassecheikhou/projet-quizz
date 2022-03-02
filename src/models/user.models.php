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