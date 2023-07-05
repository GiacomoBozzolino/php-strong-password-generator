<?php  

if(isset($_GET['passwordLength']) && $_GET['passwordLength'] != ''){
    function generatePassword (){
        $length = $_GET['passwordLength'];
        
        $password='';
        for ($i=0; $i <$length ; $i++) { 
            $upperCase= chr(rand(65,90));
            $lowerCase=chr(rand(97,122));
            $symbols=chr(rand(33,47));
            $number= rand(0,9);
            $password= $password. $number. $upperCase. $lowerCase. $symbols ;
        };

        
        return str_shuffle($password);
    }

};




?>