<?php
session_start();
//session_reset();
session_destroy();

setcookie('remember_me',$remember_me, time() + (60*60*24), "/"); 

header('location:../view/signin.php');
            
?>