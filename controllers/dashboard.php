<?php
    class Dashboard extends Controller{
        
        function __construct(){
            parent::__construct();
            Auth::handleLoginDefault();
            $this->view->js = array('dashboard/js/dashboard.js');
        }
        
        function index(){
            $this->view->title = "Dashboard";
            $this->view->render('header');
            $this->view->render('dashboard/index');  
            $this->view->render('footer');      
        }
        
        function logout(){
            Session::destroy();
            header('location: ../login');
            exit;
        }
        
        function xhrInsert(){
            $this->model->xhrInsert();
        }
        
        function xhrGetSongs(){
            $this->model->xhrGetSongs();
        }

        function xhrDeleteSong(){
            $this->model->xhrDeleteSong();
        }
    }
?>