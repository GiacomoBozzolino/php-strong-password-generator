<?php  

    // funzione generatrice password
    function generatePassword (){
        $length =$_GET['passwordLength'];
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!@#$%^&*()';
        $password = []; 
        $charactersLength = strlen($characters) - 1;
        for ($i = 0; $i < $length; $i++) {
            $n = rand(0, $charactersLength);
            $password[] = $characters[$n];
        }
        return implode($password);
    }






?>