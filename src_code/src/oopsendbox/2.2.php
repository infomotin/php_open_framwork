<?php

//Define a class
class User{
    //Define properties
    public $name = 'test name';
    public $email;
    public $password;
    public $age;
    public $sex;
    //Define method
    // Define public function say hello
    public function sayHello(){
        return $this->name.' Say Hello';
    } 
    


}

$user = new User();

echo $user->name;
echo '<br/>';
echo $user->sayHello();