<?php Session::init(); ?>

<!DOCTYPE html>

<html>
<head>
    <title><?php echo $this->title ?></title>
    <link rel="stylesheet" href="<?php echo URL; ?>public/css/default.css"/>
    <script src="<?php echo URL; ?>public/js/jquery-min.js"></script>
    <?php 
        if(isset($this->js)){
            foreach($this->js as $js){
                echo '<script src="' . URL . 'views/' . $js . '"></script>';
            }
        }
    ?>
</head> 
<body>
    <div id="header">
        <?php if(Session::get('loggedIn') == false):?>
            <a href="<?php echo URL; ?>index"><div class="header-link">Index</div></a>
            <a href="<?php echo URL; ?>help"><div class="header-link">Help</div></a>
        <?php endif; ?>

        <?php if(Session::get('loggedIn') == true):?>

            <?php if(Session::get('role') == 'owner'):?>
                <a href="<?php echo URL; ?>user"><div class="header-link">Users</div></a>
            <?php endif; ?>
            <a href="<?php echo URL; ?>dashboard"><div class="header-link">Dashboard</div></a>
            <a href="<?php echo URL; ?>note"><div class="header-link">Notes</div></a>
            <a href="<?php echo URL; ?>dashboard/logout"><div class="header-link">Logout</div></a>
        <?php else: ?>
            <a href="<?php echo URL; ?>login"><div class="header-link">Login</div></a>
        <?php endif; ?>
        
        
    </div>
    <div id="content">
        
        
    