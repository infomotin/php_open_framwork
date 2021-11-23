<?php

class User{
    public $name;
    public $age;
    public static  $minPassLength = 8;

    public static function getMinPassLength($pass){
        if(strlen($pass)>=self::$minPassLength){
            return true;
        }else{
            return false;
        }   
    }
    
}

$password = '12345678';
    
    if(User::getMinPassLength($password)){
        echo 'Password is valid';
    }
        else{
            echo 'Password is not valid';
        }
// $user = new User('John', 23);
// echo $user::$minPassLength;