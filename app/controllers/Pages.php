<?php

class Pages extends Controller {
    public function __construct(){
        
    }
    public function index(){
        // i extended the base controller class and i user parrent class constructor
        // to load the view
        $this->view('index');
        
    }
    public function about($id){
        echo "About page with id: {$id}";
    }
}