<?php
    class User_Model extends Model{

        public function __construct(){
            parent::__construct();
        }

        public function userList(){
            
            return $this->db->select('SELECT id, login, role FROM users');
        }

        public function create($data){
            
            $this->db->insert('users', array(
                'login' => $data['login'], 
                'password' => $data['password'], 
                'role' => $data['role']
            ));
        }

        public function delete($id){

            $result = $this->db->select('SELECT role FROM users WHERE id = :id', array('id' => $id));
            if($result[0]['role'] == 'owner'){
                return false;
            }

            $stmt = $this->db->prepare('DELETE FROM users WHERE id = :id');
            $stmt->execute(array('id' => $id));

            
        }

        public function getUser($id){
            return $this->db->select('SELECT * FROM users WHERE id = :id', array(
                'id' => $id
            ));
        }

        public function editSave($data){
            
            $this->db->update('users', array(
                'login' => $data['login'], 
                'password' => $data['password'], 
                'role' => $data['role']
            ), "`id` = {$data['id']}");

            /*$stmt = $this->db->prepare('UPDATE users SET login = :login, password = :password, role = :role WHERE id=:id');
            $stmt->execute(array(
                ':login' => $data['login'],
                ':password' => $data['password'],
                ':role' => $data['role'],
                ':id' => $data['id']
            ));*/
        }
    }
?>


