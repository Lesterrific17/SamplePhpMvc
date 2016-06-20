<?php 
    class Dashboard_Model extends Model{
        
        function __construct(){
            parent::__construct();
        }
        
        function xhrInsert(){

            $title =  $_POST['song'];
            $this->db->insert('songs', array(
                'title' => $title
            ));
            $data = array('title' => $title, 'id' => $this->db->lastInsertId());
            echo json_encode($data);  
        }
        
        function xhrGetSongs(){
            
            echo json_encode($this->db->select('SELECT * FROM songs'));
        }

        function xhrDeleteSong(){
            $id = $_POST['id'];
            $stmt = $this->db->prepare('DELETE FROM songs WHERE id=:id');
            $stmt->execute(array(':id' => $id));
        }
    }
?>