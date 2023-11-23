<?php

$user_number = intval($_GET['my_password']);


$password_uppercase_letters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';


$password_lowercase_letters = strtolower($password_uppercase_letters);


$password_numbers = '0123456789';


function getRandomNumber($min, $max) {
    $random_num = mt_rand($min, $max);

    return $random_num;
}


$full_characters = $password_uppercase_letters . $password_numbers . $password_lowercase_letters;

$password = '';

for ($i = 0; $i < $user_number; $i++ )  {
    $random_index = (getRandomNumber(0, strlen($full_characters)) - 1);    
    $password .= $full_characters[$random_index];
    var_dump($password);  

}


?>