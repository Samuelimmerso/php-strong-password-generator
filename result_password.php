<?php 

$difficult= $_GET["difficult"];

echo var_dump($difficult);


if($difficult){
    $Password = GeneraPasswordRandom($difficult);
    echo $Password;
}




function GeneraPasswordRandom($password_lenght) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $Password = '';

    for ($i = 0; $i < $password_lenght; $i++) {
        $Password .= $characters[rand(0, strlen($characters) - 1)];
    }

    return $Password;
}

?>