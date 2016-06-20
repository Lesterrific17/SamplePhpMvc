<?php
    class Controller{
        function __construct(){
           // echo "Main Controller <br/>";
            $this->view = new View();
        }
        
        function loadModel($name, $modelPath = 'models/'){
            
            $path = $modelPath . $name . '_model.php';
            
            if(file_exists($path)){
                require $modelPath . $name . '_model.php';
                $modelName = $name . '_Model';
                $this->model = new $modelName;
            }
            
        }
    }  
?>