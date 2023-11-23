<?php include __DIR__. '/functions.php' ?>

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

