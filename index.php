
<?php

    var_dump($_GET);
    
    $passLength = intval($_GET['pass-length']);
    var_dump($passLength);

    $charactersDb = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $password = ''; 

    for ($i = 0; $i < $passLength; $i++) {
        $randomCharacter = $charactersDb[rand(0, strlen($charactersDb) - 1)];
        var_dump($randomCharacter);

        $password .= $randomCharacter;
    }
    
     var_dump($password);

        
    

   

    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Strong Password Generator</title>

    <!-- BOOTSTRAP -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

</head>
<body>

    <h1>Password Generator </h1>

    <br>
    <br>

    
    <form action="" method="get">

        <label for="">lunghezza della password</label>
        <input  type="text" name="password-length" value="">
        <br>
        <br>
        <button>Crea</button>

    </form>


</body>
</html>