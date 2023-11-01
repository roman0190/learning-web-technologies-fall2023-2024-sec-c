<?php
require_once("../model/userModel.php");

session_start();
if (isset($_REQUEST['submit'])) {
    $userId = $_REQUEST['userId'];
    $password = $_REQUEST['password'];

    $userData = getUserData($userId, $password);

    if ($userData !== false) {
        $_SESSION['user_data'] = $userData; 

        if ($userData['user_type'] === 'Admin') {
        
            header('Location: ../view/admin_home.php');
            exit();
        } else {
            
            header('Location: ../view/user_home.php');
            exit();
        }
    } else {
        echo "Invalid credentials. Please try again or register.";
    }
}


