<?php

    if(isset($_GET['passwordLength']) && $_GET['passwordLength'] != ''){
        function generatePassword (){
            $length = $_GET['passwordLength'];
            
            $password='';
            for ($i=0; $i <$length ; $i++) { 
                $charUppercase= chr(rand(65,90));
                $lowerCase=chr(rand(97,122));
                $symbols=chr(rand(33,47));
                $number= rand(0,9);
                $password= $password. $number. $charUppercase. $lowerCase. $symbols ;
            };

            
            return str_shuffle($password);
        }

    };


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
</head>
    <body>
        <div>
            <form action="index.php" method="get">
                <label for="password">Lunghezza password</label>
                <input type="number" id="password" name="passwordLength">
                <button type="submit">Invia</button>
            </form>
        </div>
        <div>
        <?php if(isset($_GET['passwordLength']) && $_GET['passwordLength'] != ''){ ?>
        <?php echo generatePassword()?>
        <?php }?>
        </div>
        
    </body>
</html>