<?php

class Pages extends Controller {
    public function __construct(){
        $this->postModel = $this->model('Post');
    }
    public function index(){
        // i extended the base controller class and i user parrent class constructor
        // to load the view
        //create a data array on the view
        //now i can use the data array in the view
        $posts = $this->postModel->getPosts();

        $data = [
            'title' => 'welcome to my blog',
            'posts' => $posts
        ];
        $this->view('index',  $data);
        
    }
    public function about(){
        $this->view('pages/about');
    }
}