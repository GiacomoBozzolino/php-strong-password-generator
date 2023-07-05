<?php
    session_start(); 
    
    include __DIR__. '/functions.php';
    if(isset($_GET['passwordLength']) && $_GET['passwordLength'] != ''){
        // recupero la funzione
        $password = generatePassword();
        // metto una condizione se non si inserisca un numero
    } elseif ($_GET['passwordLength'] == '') {
        header('location: ./index.php?message=Scegli un parametro');
    }
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
    <body>
        <div class="contenier">
            <div class="row justify-content-center">
                <div class=" col-8 text-center">
                    <div class="mt-5 p-3 bg-light">
                        <div>
                            Ecco la tua password:
                        </div>
                        <?php if(isset($password) && $password != ''){ ?>
                            <h3>
                                <?php echo$password ?>
                        </h3>
                        <div>
                            Non mostrare e non condividere con nessuno la password!
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>

        </div>
    </body>
</html>

