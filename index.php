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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Strong Password Generator</title>
</head>
<body>
    <h1>Password Generator</h1>
    <form action="index.php" method="GET">
        <label for="number">Inserisci un numero tra 5 e 12. Il numero che inserirai corrisponderà alla lunghezza della password generata</label>
        <input type="number" name="my_password" value="5" min="5" max="12" >
        <button type="submit">Genera</button>
    </form>

    <p>Il numero inserito è <?php echo $user_number ?> </p>
    <p>La password generata è <?php echo $password ?> </p>
    
</body>
</html>