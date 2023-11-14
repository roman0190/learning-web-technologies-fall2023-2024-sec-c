<?php
session_start();
if (isset($_COOKIE['remember_me'])) {

    header('location: dashboardCheck.php');
    
} else {
    header('location: ../view/signin.php');
}

?>