<?php
session_start();
require_once("../model/userModel.php");
$user=$_SESSION['user_data'];
$id=$_SESSION['id'];
$password=$user['password'];

if (isset($_REQUEST['submit'])) {
    $currentPassword = $_REQUEST['current_password'];
    $newPassword = $_REQUEST['new_password'];
    $confirmPassword = $_REQUEST['confirm_password'];

    
    if ($newPassword !== $confirmPassword) {
        echo "New password and confirm password do not match";
    } else if ($password !== $currentPassword) {
        echo "Wrong Current Password";
    } else {
      
        $update = updatePassword($id,$confirmPassword);

        if ($update !== true) {
            echo "Error updating the password";
        } else {
      
           
           
        }
    }
}
