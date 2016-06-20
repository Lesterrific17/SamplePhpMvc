<?php
    class Login extends Controller{
        
        function __construct(){
            parent::__construct();
        }
        
        function index(){
            $this->view->error = "";
            $this->view->title = "Login";
            $this->view->render('header');
            $this->view->render('login/index');
            $this->view->render('footer');
        }
        
        function run(){
            $this->model->run();
        }
        
        function error(){
            $this->view->error = "Invalid Login!";
            $this->view->title = "Login";
            $this->view->render('header');
            $this->view->render('login/index');
            $this->view->render('footer');
        }
    }
?>