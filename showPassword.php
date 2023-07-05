<?php
    session_start(); 
    
    include __DIR__. '/functions.php';
    if(isset($_GET['passwordLength']) && $_GET['passwordLength'] != ''){
        // recupero la funzione
        $password = generatePassword();
        // metto una condizione se non si inserisca un numero
    } elseif ($_GET['passwordLength'] == '') {
        header('location: ./index.php');
    }
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <body>
    <?php if(isset($password) && $password != ''){ ?>
        <div>
            <?php echo$password ?>
        </div>
        <?php } ?>
    </body>
</html>

