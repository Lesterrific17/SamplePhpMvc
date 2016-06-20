<?php
    class User extends Controller{
        
        function __construct(){
            parent::__construct();
            Auth::handleLoginOwner();
            
        }

        function index(){
            $this->view->userList = $this->model->userList();
            $this->view->title = 'User Page (Owner only)';
            $this->view->render('header');
            $this->view->render('user/index');  
            $this->view->render('footer');      
        }

        function create(){

            $data = array();
            $data['login'] = $_POST['login'];
            $data['password'] = Hash::create('sha256', $_POST['password'], HASH_PASSWORD_KEY);
            $data['role'] = $_POST['role'];

            //Do error checking here!
            $this->model->create($data);
            header('location: ', URL . 'user');
            
        }

        function edit($id = false){
            $id = $_GET['id'];
            $data = $this->model->getUser($id);
            $this->view->user = $data[0];
            
            $this->view->title = 'Edit User';
            $this->view->render('header');
            $this->view->render('user/edit');
            $this->view->render('footer');
        }

        function editSave($id = false){

            $data = array();
            $data['login'] = $_POST['login'];
            $data['password'] = Hash::create('sha256', $_POST['password'], HASH_PASSWORD_KEY);
            $data['role'] = $_POST['role'];
            $data['id'] = $_POST['id'];

            $this->model->editSave($data);
            header('location: ', URL . 'user');
        }

        function delete($id = false){
            $this->model->delete($_GET['id']);
            header('location: ', '../user');
        }

    }
?>