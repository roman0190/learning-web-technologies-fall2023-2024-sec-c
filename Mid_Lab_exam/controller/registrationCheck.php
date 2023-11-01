<?php
require_once("../model/userModel.php");

if (isset($_REQUEST['submit'])) {
    $error_message = '';

    session_start();
    $id = $_REQUEST['id'];
    $password = $_REQUEST['password'];
    $confirm_password = $_REQUEST['confirm_password'];
    $name = $_REQUEST['name'];

    if (isset($_REQUEST['user_type'])) {
        $userType = $_REQUEST['user_type'];
    } else {
        $userType = '';
    }

    if ($id == "" || $password == "" || $confirm_password == "" || $name == "") {
        echo "Please fill in all fields.";
    } elseif ($password != $confirm_password) {
        echo "Passwords do not match.";
    } elseif (!str_contains($password, '@') && !str_contains($password, '#') && !str_contains($password, '$') && !str_contains($password, '%')) {
        echo "Password must contain special characters (@, #, $, %).";
    } elseif (strlen($password) < 4) {
        echo "Password must be at least 4 characters long.";
    } else {
        $sql = RegistrationUser($id, $password, $name, $userType);
        $user=[
            'id'=>$id,
            'password'=>$password,
            'name'=>$name,
            'user_type'=>$userType
        ];
        if ($sql) {
            $_SESSION['flag'] = "true"; 
            $_SESSION['user'] =$user;

            header('location: ../view/login.php'); 
        } else {
            echo "Invalid ";
        }
    }
}
?>
