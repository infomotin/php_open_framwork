<?php 

class User{
    public $name;
    public $email;
    public $password;
    public $age;
    public $sex;

    //define constractor 
    public function __construct($name,$age){
        // echo 'Construct Load...';
        //Masic Constant 
        echo 'Class'.__CLASS__.'Insrante Create';
        $this->name = $name;
        $this->age = $age;
    }
    public function sayHello(){
        return $this->name.' Say Hello';
    }
    public function __destruct(){
        echo '<br/>';
        echo 'Destruct Load...';
    }
}

$user1 = new User('Motin',32);
echo $user1->name.'<br>'.$user1->age.'Year Old';