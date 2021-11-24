<?php

class Pages extends Controller {
    public function __construct(){
        
    }
    public function index(){
        // i extended the base controller class and i user parrent class constructor
        // to load the view
        //create a data array on the view
        //now i can use the data array in the view
        

        $data = [
            'title' => 'Welcome to my Onw FreameWorks ',
            'description' => 'this is the description'
        ];
        $this->view('pages/index',  $data);
        
    }
    public function about(){
        $this->view('pages/about');
    }
}