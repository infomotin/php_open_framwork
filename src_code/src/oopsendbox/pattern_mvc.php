<?php 

class Post{
    public function __construct(){
       return $this->postModel = $this->model('post');
    }
    public function index(){
        $posts = $this->postModel->getPosts();
        $data = [
            'posts' => $posts
        ];
        return $this->view('posts/index', $data);
    }
    public function add(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $post_data = $this->postModel->addPost($request_data);// Sanitize POST array} 
        }
    }
    public function edit($id){
       $post = $this->postModel->getPostById($id);
        echo $post;
    }
}