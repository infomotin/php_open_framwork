<?php

class Pages{
    public function __construct(){
        
    }
    public function index(){
        echo 'Hello from the index method';
    }
    public function about($id){
        echo "About page with id: {$id}";
    }
}