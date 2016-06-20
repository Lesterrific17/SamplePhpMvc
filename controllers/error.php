<?php 
    
    class Error extends Controller{
        function __construct(){
            parent::__construct();
            //echo "An error occured!";  
        }
        
        function index(){
            $this->view->msg = "This page doesn't exist";
            $this->view->title = "Error";
            $this->view->render('header');
            $this->view->render('error/index');
            $this->view->render('footer');
        }
    }

?>