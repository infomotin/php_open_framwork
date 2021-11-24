<?php

class Pages extends Controller {
    public function __construct(){
        
    }
    public function index(){
        // i extended the base controller class and i user parrent class constructor
        // to load the view
        //create a data array on the view
        $data = [
            'title' => 'welcome to my blog',
            'description' => 'this is the description'
        ];
        $this->view('index', $data);
        
    }
    public function about(){
        $this->view('pages/about');
    }
}