
<?php
    
    class Login_Model extends Model{
        
        public function __construct(){
            parent::__construct();
        }
        
        public function run(){
            //echo Hash::create('md5', $_POST['password'], HASH_KEY);
            
            $stmt = $this->db->prepare("SELECT id, role from users 
            WHERE login = :login AND password = :password");
            $stmt->execute(array( 
                ':login' => $_POST['login'], 
                ':password' => Hash::create('sha256', $_POST['password'], HASH_PASSWORD_KEY)
            ));
            


            $data = $stmt->fetch();
            
            $count = $stmt->rowCount();
            if($count > 0){
                //valid login
                Session::init();
                Session::set('userid', $data['id']);
                Session::set('loggedIn', true);
                Session::set('role', $data['role']);
                header('location: ../dashboard');
                echo "There is such user!";
            }
            else{
                
                //invalid login
                header('location: ../login/error');
            }
            
        }
    }
?>