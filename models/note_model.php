<?php 
    class Note_Model extends Model{
        
        
        public function __construct(){
            parent::__construct();
        }

        public function noteList(){
            return $this->db->select('SELECT * FROM notes WHERE userid = :userid', array(
                'userid' => $_SESSION['userid']
            ));
        }

        public function getNote($id){
            return $this->db->select('SELECT * FROM notes WHERE noteid = :noteid AND userid = :userid', array(
                'noteid' => $id,
                'userid' => $_SESSION['userid']
            ));
        }

        public function create($data){
            $this->db->manualInsert("INSERT INTO notes(userid, title, content, date_added) 
                VALUES (:userid, :title, :content, NOW())", $data);
        }

        public function editSave($data){
            $this->db->update('notes', $data, "noteid = :noteid");
        }

        public function delete($id){
            $stmt = $this->db->prepare('DELETE FROM notes WHERE noteid = :noteid AND userid = :userid');
            $stmt->execute(array(
                'noteid' => $id,
                'userid' => $_SESSION['userid']
            ));
        }
    }
?>