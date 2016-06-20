<?php

    require 'config.php';
    require 'util/Auth.php';
    //require LIBS . 'Form/Val.php';

    function __autoload($class){
        require LIBS . $class . ".php";
    }

    $bootstrap = new Bootstrap();
    $bootstrap->init();
    
?>