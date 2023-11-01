<?php
session_start();
$user = $_SESSION['user_data'];
$userType = $user['user_type'];
$name=$user['name'];

if ($userType == 'Admin') {
    header('Location: ../view/admin_home.php'); 
    exit();
} else {
    header('Location: ../view/user_home.php'); 
    exit();
}
?>
