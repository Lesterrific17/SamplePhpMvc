<?php 
    class Index extends Controller{
        
        function __construct() {
            parent::__construct();
            //echo "We are in index";
            
        }
        
        function index(){
            $this->view->title = "Homepage";
            $this->view->render('header');
            $this->view->render('index/index');
            $this->view->render('footer');
        }
        
        function details(){
            $this->view->render('header');
            $this->view->render('index/index');
            $this->view->render('footer');
        }
        
       
    }
?>