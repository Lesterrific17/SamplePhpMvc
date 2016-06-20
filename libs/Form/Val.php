<?php
    class Val{

        public function __construct(){

        }

        public function minlength($data, $arg){
            if(strlen($data) < $arg){
                return "Your string must be at least $arg characters long";
            }
        }

        public function maxlength($data, $arg){
            if(strlen($data) > $arg){
                return "Your string must not exceed $arg characters";
            }
        }

        public function digit($data){
            if(ctype_digit($data) == false){
                return "Your string must be a digit";
            }
        }
    }
?>