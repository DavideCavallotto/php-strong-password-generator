<?php

$user_number = intval($_GET['my_password']);
var_dump($user_number);

$random_number = mt_rand(0, 9);
var_dump($random_number);

$password_uppercase_letters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
var_dump($password_uppercase_letters);
$password_lowercase_letters = strtolower($password_uppercase_letters);
var_dump($password_lowercase_letters);


function getRandomIndex($min, $max) {
    $random_index = mt_rand($min, $max);

    return $random_index;
}



for ($i = 0; $i < $user_number; $i++ )  {
    $random_index = getRandomIndex(0, 25);
    $pswrd_upcs = $password_uppercase_letters[$random_index];
    $pswrd_lowcs = $password_lowercase_letters[$random_index];    
    var_dump($pswrd_upcs);  
    var_dump($pswrd_lowcs);  
    var_dump($random_number);
};


$password = $pswrd_upcs .= $pswrd_lowcs .= $random_number ;    
var_dump($password);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Strong Password Generator</title>
</head>
<body>
    <h1>Password Generetor</h1>
    <form action="index.php" method="GET">
        <label for="number">Inserisci un numero tra 5 e 12. Il numero che inserirai corrisponderà alla lunghezza della password generata</label>
        <input type="number" name="my_password" value="" min="5" max="12" >
        <button type="submit">Genera</button>
    </form>

    <p> Il numero inserito è <?php echo $user_number ?> </p>
    <p>La password generata è <?php echo $password ?> </p>
    
</body>
</html>