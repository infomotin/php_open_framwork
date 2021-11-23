<?php
class User{
    protected $name ;
    protected $age ;
    public function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;
    }
}

class Customer extends User{
    private $balance;
    public function __construct($name, $age, $balance){
        parent::__construct($name, $age);
        $this->balance = $balance;
    }
    public function pay($amount){
        return $this->name . " paid " . $amount;
    }
    public function getBalance(){
        return $this->balance;
    }
}
// $user = new User();
// echo $user->name.'<br>';
$customer = new Customer('Eity',50,400);
echo $customer->pay(100).'<br>';
echo $customer->getBalance().'<br>';