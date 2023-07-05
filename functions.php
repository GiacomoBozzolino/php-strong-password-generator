<?php  

    // funzione generatrice password
    function generatePassword (){
        $length = $_GET['passwordLength'];
        
        $password='';
        for ($i=0; $i <$length ; $i++) { 
            $upperCase= chr(rand(65,90)); 
            $lowerCase=chr(rand(97,122));
            $symbols=chr(rand(33,47));
            $number= rand(0,9);
            // concatenamento caratteri ottenuti
            $password= $password. $number. $upperCase. $lowerCase. $symbols ;
        };

        // randomizzo la stringa
        return str_shuffle($password);
    }






?>