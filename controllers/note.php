<?php 

    class Note extends Controller{
        
        public function __construct(){
            parent::__construct();
            Auth::handleLoginDefault();
        }

        public function index(){
            $this->view->noteList = $this->model->noteList();
            $this->view->title = "User Notes";
            $this->view->render('header');
            $this->view->render('note/index');
            $this->view->render('footer');
        }

        public function create(){
            $data = array(
                ':userid' => $_SESSION['userid'],
                ':title' => $_POST['title'],
                ':content' => $_POST['content']
            );
            //Do error checking here!
            $this->model->create($data);
            header('location: ', URL . 'note');
        }

        public function delete($id = false){
            $this->model->delete($_GET['id']);
            header('location: ', '../note');
        }

        public function edit($id = false){
            $id = $_GET['id'];
            $data = $this->model->getNote($id);
            $this->view->note = $data[0];
            
            $this->view->title = 'Edit Note';
            $this->view->render('header');
            $this->view->render('note/edit');
            $this->view->render('footer');
        }

        public function editSave($id = false){
            $data = array(
                'noteid' => $_POST['id'],
                'title' => $_POST['title'],
                'content' => $_POST['content']
            );

            $this->model->editSave($data);
            header('location: ', URL . 'note');
        }
    }
?>